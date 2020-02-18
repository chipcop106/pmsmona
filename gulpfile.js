'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();
const npmDist = require('gulp-npm-dist');
const sourcemaps = require('gulp-sourcemaps');
gulp.task('sass-css', function() {
    return gulp.src(['scss/custom.scss', 'scss/dashforge.scss'])
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

gulp.task('minify-css', function() {
    return gulp.src(['scss/custom.scss', 'scss/dashforge.scss'])
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// styles for pages
gulp.task('sass-pages', function() {
    return gulp.src('scss/pages/*.scss')
        .pipe(sass())
        .pipe(rename({ prefix: 'dashforge.' }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// styles for skins
gulp.task('sass-skins', function() {
    return gulp.src('scss/skins/*.scss')
        .pipe(sass())
        .pipe(rename({ prefix: 'skin.' }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});


gulp.task('browserSync', function() {
    browserSync.init({
        // server: true
        proxy: 'localhost:8888/monatro'
    })
});

gulp.task('default', ['browserSync'], function() {
    gulp.watch([
        'scss/custom.scss'
    ], ['sass-css', 'minify-css']);

    gulp.watch('scss/pages/*.scss', ['sass-pages', 'minify-css']);
    gulp.watch('scss/skins/*.scss', ['sass-skins', 'minify-css']);
    gulp.watch([
        'scss/_variables.scss',
        'scss/bootstrap/_variables.scss'
    ], ['sass-css', 'sass-pages']);

    gulp.watch('*.php', browserSync.reload);
    gulp.watch('lib/**/*.js', browserSync.reload);
    gulp.watch('template/**/*.html', browserSync.reload);
    gulp.watch('components/**/*.html', browserSync.reload);
    gulp.watch('collections/**/*.html', browserSync.reload);
    gulp.watch('assets/js/*.js', browserSync.reload);
})

// Copy dependencies to lib/
gulp.task('npm-lib', function() {
    gulp.src(npmDist(), { base: './node_modules/' })
        .pipe(rename(function(path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(gulp.dest('lib'));
});

//copy html
gulp.task('html:dist', function() {
    return gulp.src(['*.html', '*.php'])
        .pipe(gulp.dest('dist/'));
});
gulp.task('assets:dist', function() {
    return gulp.src(['assets/**/*'])
        .pipe(gulp.dest('dist/assets'));
});
gulp.task('lib:dist', function() {
    return gulp.src(['lib/**/*'])
        .pipe(gulp.dest('dist/lib'));
});

gulp.task('build', ['assets:dist', 'html:dist', 'lib:dist'], function() {
    return true;
})