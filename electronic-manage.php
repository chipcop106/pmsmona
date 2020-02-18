<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/dashforge.dashboard.css">
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between ">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quản lý điện nước</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Quản lý điện nước</h4>
            </div>
        </div>

        <div class="row row-xs">

            <div class="col">
                <div class="table__filter__wrap">
                    <div class="table__filter-header flex-wrap-1 flex-sm-wrap-0 d-block d-sm-flex">
                        <div class="table__header-left mg-md-b-0 mg-b-15 flex-grow-1 flex-sm-grow-0">
                            <div class="">
                                <select name="" id="" class="form-control">
                                    <option value="" disabled selected>-- Chọn chỗ trọ --</option>
                                    <option value="">Số 618 CMT8, Quận 10</option>
                                    <option value="1">310 Thành thái</option>
                                </select>
                            </div>
                        </div>
                        <div class="table__header-right">
                            <div class="header__right-action mg-0-f">
                                <div class="select-wrapped mg-sm-b-0 mg-b-15 flex-grow-1 flex-sm-grow-0">
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>-- Năm --</option>
                                        <option value="1">2019</option>
                                        <option value="2">2020</option>
                                    </select>
                                </div>
                  
                            </div>
                        </div>
                    </div>

                    <div class="table__filter-wrap">

                        <div class="table-responsive">
                            <table class="table table-bordered table-centered table-block-mobile table-striped" >
                                <thead class="">
                                    <tr>
                                        <th class="sort-label" data-column="col-month">Tháng<i class="fa fa-sort"></i>
                                        </th>
                                        <th class="sort-label" data-column="col-room">Phòng<i class="fa fa-sort"></i>
                                        </th>
                                        <th class="sort-label" data-column="col-name">Người đại diện <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-electronic">Số điện <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-water">Số nước <i
                                                class="fa fa-sort"></i></th>
                                    </tr>
                                    <tr class="tr-search">
                                        <th data-column="col-month">
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Tất cả tháng --</option>
                                                <option value="1">Tháng 1</option>
                                                <option value="2">Tháng 2</option>
                                                <option value="3">Tháng 3</option>
                                                <option value="4">Tháng 4</option>
                                                <option value="5">Tháng 5</option>
                                                <option value="6">Tháng 6</option>
                                                <option value="7">Tháng 7</option>
                                                <option value="8">Tháng 8</option>
                                                <option value="9">Tháng 9</option>
                                                <option value="10">Tháng 10</option>
                                                <option value="11">Tháng 11</option>
                                                <option value="12">Tháng 12</option>
                                            </select>
                                        </th>
                                        <th data-column="col-room">
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Tất cả phòng --</option>
                                                <option value="1">Phòng 1</option>
                                                <option value="2">Phòng 2</option>
                                                <option value="3">Phòng 3</option>
                                                <option value="4">Phòng 4</option>
                                                <option value="5">Phòng 5</option>

                                            </select>
                                        </th>
                                        <th data-column="col-name">
                                            <input type="text" class="form-control" placeholder="Tìm theo tên...">
                                        </th>
                                        <th data-column="col-electronic">
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Tất cả --</option>
                                                <option value="1">Chưa nhập</option>
                                                <option value="2">Đã nhập</option>
                                            </select>
                                        </th>
                                        <th data-column="col-water">
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Tất cả --</option>
                                                <option value="1">Chưa nhập</option>
                                                <option value="2">Đã nhập</option>
                                            </select>
                                        </th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-column="col-month" data-title="Tháng">Tháng 01</td>
                                        <td data-column="col-room" data-title="Tên phòng">Phòng 01</td>
                                        <td data-column="col-name" data-title="Người đại diện">Trương Văn Lam</td>
                                        <td data-column="col-electronic" data-title="Số điện">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>11002320</p>
                                                <div class="lightgallery"><a href="assets/img/dongho.jpg" class="">Hình
                                                        ảnh<img src="assets/img/dongho.jpg" alt="" class="hidden"></a>
                                                </div>

                                            </div>
                                        </td>
                                        <td data-column="col-water" data-title="Số nước">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>11002320</p>
                                                <div class="lightgallery"><a href="assets/img/dongho.jpg" class="">Hình
                                                        ảnh<img src="assets/img/dongho.jpg" alt="" class="hidden"></a>
                                                </div>

                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td data-column="col-month" data-title="Tháng">Tháng 02</td>
                                        <td data-column="col-room" data-title="Tên phòng">Phòng 01</td>
                                        <td data-column="col-name" data-title="Người đại diện">Trương Văn Lam</td>
                                        <td data-column="col-electronic" data-title="Số điện">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>
                                                    <a href="#js-electronicNote" data-toggle="modal" class="tx-primary">Bấm vào đây để nhập</a>
                                                </p>
                                            </div>
                                        </td>
                                        <td data-column="col-water" data-title="Số nước">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>
                                                    <a href="#js-waterNote" data-toggle="modal" class="tx-primary">Bấm vào đây để nhập</a>
                                                </p>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td data-column="col-month" data-title="Tháng">Tháng 01</td>
                                        <td data-column="col-room" data-title="Tên phòng">Phòng 01</td>
                                        <td data-column="col-name" data-title="Người đại diện">Trương Văn Lam</td>
                                        <td data-column="col-electronic" data-title="Số điện">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>11002320</p>
                                                <div class="lightgallery"><a href="assets/img/dongho.jpg" class="">Hình
                                                        ảnh<img src="assets/img/dongho.jpg" alt="" class="hidden"></a>
                                                </div>

                                            </div>
                                        </td>
                                        <td data-column="col-water" data-title="Số nước">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>11002320</p>
                                                <div class="lightgallery"><a href="assets/img/dongho.jpg" class="">Hình
                                                        ảnh<img src="assets/img/dongho.jpg" alt="" class="hidden"></a>
                                                </div>

                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td data-column="col-month" data-title="Tháng">Tháng 02</td>
                                        <td data-column="col-room" data-title="Tên phòng">Phòng 01</td>
                                        <td data-column="col-name" data-title="Người đại diện">Trương Văn Lam</td>
                                        <td data-column="col-electronic" data-title="Số điện">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>
                                                    <a href="#js-electronicNote" data-toggle="modal" class="tx-primary">Bấm vào đây để nhập</a>
                                                </p>
                                            </div>
                                        </td>
                                        <td data-column="col-water" data-title="Số nước">
                                            <div class="value tx-right tx-sm-center">
                                                <p class="mg-b-0"><span class="tx-medium">Từ: </span>11002320</p>
                                                <p class="mg-b-0"><span class="tx-medium">Đến: </span>
                                                    <a href="#js-waterNote" data-toggle="modal" class="tx-primary">Bấm vào đây để nhập</a>
                                                </p>
                                            </div>
                                        </td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <nav aria-label="Page navigation text-right">
                            <ul class="pagination mg-b-0">
                                <li class="page-item disabled"><a class="page-link page-link-icon" href="#"><i
                                            data-feather="chevron-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link page-link-icon" href="#"><i
                                            data-feather="chevron-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- content -->
<div class="modal fade" id="js-electronicNote">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header ">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i class="fas fa-calendar-alt tx-24 tx-color-03"
                            aria-hidden="true"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20 mb-0">Phòng số 01</h4>
                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div class="modal-body ">
                <div class="d-flex align-items-center owner-wrap mg-b-15">
                    <div class="owner-avatar d-flex align-items-center">
                        <span class="avatar overflow-hidden rounded-circle">
                            <img src="assets/img/teacher.jpg" alt="avatar">
                        </span>
                    </div>
                    <div class="owner-info d-flex align-items-center justify-content-between pd-l-10 flex-grow-1">
                        <div class="info">
                            <p class="name mg-b-0 tx-color-01 tx-medium">Trương Văn Lam</p>
                            <p class="affliate mg-b-0 mg-t-0 "><a href="mailto:vanlam@gmail.com"
                                    class="tx-color-03">vanlam@gmail.com</a></p>
                        </div>
                        <div class="quick-contact">
                            <a href="tel:+84886706289"><i data-feather="phone"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6  form-group">
                        <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Điện tháng trước</label>
                        <input type="tel" class="form-control number-val" placeholder="Trống" value="1123392">
                    </div>
                    <div class="col-sm-6  form-group">
                        <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Điện tháng này</label>
                        <input type="tel" class="form-control number-val" placeholder="Trống">
                    </div>
                    <div class="col-12 upload-box mg-b-20">
                        <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ điện</a>
                        <input type="file" class="hidden upload-image-input" accept="image/*">
                        <div class="preview-image"></div>
                    </div>
                </div>

            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Cập nhật</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<div class="modal fade" id="js-waterNote">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header ">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i class="fas fa-calendar-alt tx-24 tx-color-03"
                            aria-hidden="true"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20 mb-0">Phòng số 01</h4>
                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div class="modal-body ">
                <div class="d-flex align-items-center owner-wrap mg-b-15">
                    <div class="owner-avatar d-flex align-items-center">
                        <span class="avatar overflow-hidden rounded-circle">
                            <img src="assets/img/teacher.jpg" alt="avatar">
                        </span>
                    </div>
                    <div class="owner-info d-flex align-items-center justify-content-between pd-l-10 flex-grow-1">
                        <div class="info">
                            <p class="name mg-b-0 tx-color-01 tx-medium">Trương Văn Lam</p>
                            <p class="affliate mg-b-0 mg-t-0 "><a href="mailto:vanlam@gmail.com"
                                    class="tx-color-03">vanlam@gmail.com</a></p>
                        </div>
                        <div class="quick-contact">
                            <a href="tel:+84886706289"><i data-feather="phone"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6  form-group">
                        <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Nước tháng trước</label>
                        <input type="tel" class="form-control number-val" placeholder="Trống" value="223212">
                    </div>
                    <div class="col-sm-6  form-group">
                        <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Nước tháng này</label>
                        <input type="tel" class="form-control number-val" placeholder="Trống">
                    </div>
                    <div class="col-12 upload-box mg-b-20">
                        <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ nước</a>
                        <input type="file" class="hidden upload-image-input" accept="image/*">
                        <div class="preview-image"></div>
                    </div>
                </div>

            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Cập nhật</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<?php require_once( 'footer.php' ); ?>