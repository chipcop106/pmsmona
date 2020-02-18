<header class="navbar navbar-header navbar-header-fixed">
    <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
    <div class="navbar-brand">
        <a href="./" class="df-logo"><img src="assets/img/logo.png" alt="logo"></a>
    </div><!-- navbar-brand -->
    <div id="navbarMenu" class="navbar-menu-wrapper">
        <div class="navbar-menu-header">
            <a href="./" class="df-logo">Mona<span>House</span></a>
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
        </div><!-- navbar-menu-header -->
        <ul class="nav navbar-menu">
            <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Trang điều hướng</li>
            <li class="nav-item active">
                <a href="javascript:;" class="nav-link"><i data-feather="bar-chart"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="owner-manage.php" class="nav-link"><i data-feather="users"></i> Khách thuê PM</a>
            </li>
            <li class="nav-item">
                <a href="room-manage.php" class="nav-link"><i data-feather="layout"></i> Danh sách phòng</a>
            </li>
            <li class="nav-item">
                <a href="electronic-manage.php" class="nav-link"><i data-feather="zap"></i> Quản lý điện nước</a>
            </li>
            <li class="nav-item">
                <a href="payment-history.php" class="nav-link"><i data-feather="dollar-sign"></i> Lịch sử thu tiền</a>
            </li>
        </ul>
    </div><!-- navbar-menu-wrapper -->
    <div class="navbar-right">
       
        <div class="dropdown dropdown-message">
            <a href="#chat-people-list" class="dropdown-link new-indicator open-chat-nav">
                <i data-feather="message-square"></i>
                <span>5</span>
            </a>
        </div><!-- dropdown -->
        <div class="dropdown dropdown-notification">
            <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                <i data-feather="bell"></i>
                <span>2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Notifications</div>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350"
                                class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                            <span>Mar 15 12:32pm</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
                                class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p><strong>Joyce Chua</strong> just created a new blog post</p>
                            <span>Mar 13 04:16am</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/600"
                                class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                            <span>Mar 13 02:56am</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                    <div class="media">
                        <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500"
                                class="rounded-circle" alt=""></div>
                        <div class="media-body mg-l-15">
                            <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                            <span>Mar 12 10:40pm</span>
                        </div><!-- media-body -->
                    </div><!-- media -->
                </a>
                <div class="dropdown-footer"><a href="">View all Notifications</a></div>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="https://via.placeholder.com/500" class="rounded-circle" alt="">
                </div>
            </a><!-- dropdown-link -->
            <div class="dropdown-menu dropdown-menu-right tx-13">
                <div class="avatar avatar-lg mg-b-15"><img src="https://via.placeholder.com/500" class="rounded-circle"
                        alt=""></div>
                <h6 class="tx-semibold mg-b-5">Mona Media</h6>
                <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>
                <a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <div class="dropdown-divider"></div>
                <a href="page-signin.html" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- navbar-right -->

</header><!-- navbar -->

<!-- side chat -->
<aside id="quick-chat-wrap">
    <div id="chat-people-list" class="sidenav off-canvas">
        <div class="header-nav">
            <a href="" class="chat-action close-sidenav"><i data-feather="x"></i></a>
            <h6 class="title">Messenger</h6>

        </div>
        <div class="content-nav">
            <div class="row">
                <div class="col col-xs-12">
                    <ul class="list-people">
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="people-item">
                            <a href="#chat-content-detail" class="open-chat-nav people-link">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-people active">
                                        <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                    </div>
                                    <div class="info-people">
                                        <p class="name">Luke Buttle</p>
                                        <p class="role">Giáo viên</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div id="chat-content-detail" class="sidenav off-canvas">
        <div class="header-nav">
            <a href="javascript:;" class="chat-action close-sidenav close"><i data-feather="arrow-left"></i></a>
            <h6 class="title">Trương Văn Lam</h6>

        </div>
        <div class="content-nav">
            <div class="row">
                <div class="col col-xs-12">
                  <div class="d-flex flex-column">
                      <ul class="list-people">
                          <li class="people-item">
                              <div class="d-flex align-items-center">
                                  <div class="avatar-people">
                                      <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                  </div>
                                  <div class="user-content bubble">
                                      <p class="txt">Test thử tin nhắn cái nào Test thử tin nhắn cái nào Test thử tin nhắn
                                          cái nào Test thử tin nhắn cái nào </p>
                                      <hr />
                                      <p class="time">07/11/2019 10:30</p>
                                  </div>
                              </div>
                          </li>
                          <li class="people-item">
                              <div class="d-flex align-items-center justify-content-end">
                                  <div class="user-content bubble-right">
                                      <p class="txt">Nếu mà tin nhắn càng dài thì se trông như thế nào nhỉ ? Làm thử phát
                                          chơi </p>
                                      <hr />
                                      <p class="time">07/11/2019 10:30</p>
                                  </div>
                              </div>
                          </li>
                          <li class="people-item">
                              <div class="d-flex align-items-center">
                                  <div class="avatar-people">
                                      <img src="assets/img/teacher.jpg" alt="" class="people-img">
                                  </div>
                                  <div class="user-content bubble">
                                      <p class="txt">Test thử tin nhắn cái nào Test thử tin nhắn cái nào Test thử tin nhắn
                                          cái nào Test thử tin nhắn cái nào </p>
                                      <hr />
                                      <p class="time">07/11/2019 10:30</p>
                                  </div>
                              </div>
                          </li>
                          <li class="people-item">
                              <div class="d-flex align-items-center justify-content-end">
                                  <div class="user-content bubble-right">
                                      <p class="txt">Nếu mà tin nhắn càng dài thì se trông như thế nào nhỉ ? Làm thử phát
                                          chơi </p>
                                      <hr />
                                      <p class="time">07/11/2019 10:30</p>
                                  </div>
                              </div>
                          </li>
                          <li class="people-item">
                              <div class="d-flex align-items-center justify-content-end">
                                  <div class="user-content bubble-right">
                                      <p class="txt">Nếu mà tin nhắn càng dài thì se trông như thế nào nhỉ ? Làm thử phát
                                          chơi </p>
                                      <hr />
                                      <p class="time">07/11/2019 10:30</p>
                                  </div>
                              </div>
                          </li>
                          <li class="people-item">
                              <div class="d-flex align-items-center justify-content-end">
                                  <div class="user-content bubble-right">
                                      <p class="txt">Nếu mà tin nhắn càng dài thì se trông như thế nào nhỉ ? Làm thử phát
                                          chơi </p>
                                      <hr />
                                      <p class="time">07/11/2019 10:30</p>
                                  </div>
                              </div>
                          </li>



                      </ul>
                      <div class="chat-type">
                        <input type="text" class="form-control align-self-center bd-0" placeholder="Message">
                        <a href="javascript:;" data-toggle="tooltip" class="btn-icon btn-send"> <i data-feather="send"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>