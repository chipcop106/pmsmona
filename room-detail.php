<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>

<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-md-flex align-items-center justify-content-between mg-b-20">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Danh sách phòng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Phòng số 01</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mg-lg-b-0 mg-b-30">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mg-b-0">Thông tin phòng</h5>
                    </div>
                    <div class="card-body room-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row form-group">
                                    <div class="col-form-label wd-120 col">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Tên phòng:</span>
                                    </div>
                                    <div class=" flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="layout"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="text" placeholder="Tên phòng" class="form-control"
                                            value="Phòng số 01">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Ngày dọn vào:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="calendar"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="text" placeholder="Số người"
                                            class="form-control datetimepicker date-only" value="27/04/2019">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Số người ở:</span>
                                    </div>
                                    <div class=" flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="users"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số người" class="form-control" value="2 người">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row form-group">
                                    <div class="col wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Tên khách:</span>
                                    </div>
                                    <div class="col flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="user"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="text" placeholder="Tên khách" class="form-control"
                                            value="Trương Văn Lam">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Số điện thoại:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="phone"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số người" class="form-control"
                                            value="0886706289">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Tiền nợ:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="credit-card"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số nước" class="form-control tx-danger tx-bold"
                                            value="3.500.000" data-type="currency">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="upload-box mg-b-15 ">
                                    <a href="javascript:;" class="btn btn-outline-primary btn-upload"><i
                                            data-feather="camera" class="mg-r-5"></i> Ảnh giấy tờ</a>
                                    <input type="file" class="hidden upload-image-input" accept="image/*" multiple>
                                    <div class="preview-image">
                                        <div class="image-wrap">
                                            <div class="image-box lightgallery">
                                                <a href="assets/img/dongho.jpg" class=""> <img
                                                        src="assets/img/dongho.jpg" alt="image" class="img "></a>
                                            </div>
                                            <a href="javascript:;" class="delete-image"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="image-wrap">
                                            <div class="image-box lightgallery">
                                                <a href="assets/img/anhdoc.jpg" class=""> <img
                                                        src="assets/img/anhdoc.jpg" alt="image" class="img"></a>
                                            </div>
                                            <a href="javascript:;" class="delete-image"><i class="fas fa-times"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mg-b-0">Tiền phí</h5>
                    </div>
                    <div class="card-body room-info">
                        <div class="row">

                            <div class="col-md-6 ">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Giá phòng / tháng:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="dollar-sign"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số nước" class="form-control" value="3.500.000"
                                            data-type="currency">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 ">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Giá điện / kW:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="zap"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số điện" class="form-control" value="3000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03"> Giá nước / m<sup>3</sup>:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="droplet"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số nước" class="form-control" value="3500">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 ">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Điện tháng trước:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="zap"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số điện" class="form-control " value="1122332">
                                        <div class="input-group-append ">
                                            <a href="#js-electronicPicture"
                                                class="input-group-text bg-white tx-primary upload-picture"
                                                data-toggle="modal">
                                                <i data-feather="image" class="wd-20 ht-20 pd-r-5"></i>Ảnh chụp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="row form-group">
                                    <div class="wd-120 col col-form-label">
                                        <span class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nước tháng trước:</span>
                                    </div>
                                    <div class="flex-grow-1 col input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i data-feather="droplet"
                                                    class="wd-20 ht-20"></i></span>
                                        </div>
                                        <input type="tel" placeholder="Số nước" class="form-control " value="22332112">
                                        <div class="input-group-append ">
                                            <a href="#js-waterPicture"
                                                class="input-group-text bg-white tx-primary upload-picture"
                                                data-toggle="modal">
                                                <i data-feather="image" class="wd-20 ht-20 pd-r-5"></i> Ảnh chụp

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                              
                                    <div class="col-form-label">
                                        <span class="tx-uppercase tx-medium tx-spacing-1 d-inline-block">Dịch vụ phòng</span>
                                    </div>
                                    <div class="list-services">
                                        <div class="row align-items-center mg-b-20">
                                            <div class="col pl-r-5">
                                                <input type="tel" class="form-control" placeholder="Tên dịch vụ"
                                                    ata-type="number" value="Wifi">
                                            </div>
                                            <div class="col pd-l-5">
                                                <input type="tel" class="form-control" placeholder="Giá"
                                                    data-type="number" value="200.000">
                                            </div>
                                            <div class="col pd-l-0 flex-grow-0">
                                                <a href="javascript:;" class="tx-danger delete-service"><i
                                                        data-feather="minus-square"></i></a>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mg-b-20">
                                            <div class="col pl-r-5">
                                                <input type="tel" class="form-control" placeholder="Tên dịch vụ"
                                                    ata-type="number" value="Cáp">
                                            </div>
                                            <div class="col pd-l-5">
                                                <input type="tel" class="form-control" placeholder="Giá"
                                                    data-type="number" value="200.000">
                                            </div>
                                            <div class="col pd-l-0 flex-grow-0">
                                                <a href="javascript:;" class="tx-danger delete-service"><i
                                                        data-feather="minus-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="btn btn-outline-primary js-add-service"><i data-feather="plus"></i> Thêm dịch vụ</a>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-grow-1  mg-t-20 justify-content-md-end">
                    <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-r-10"><i data-feather="rotate-cw"
                            class="wd-10 mg-r-5"></i> Cập nhật tất cả</button>
                    <button class="btn btn-sm pd-x-15 btn-danger btn-uppercase mg-l-0" type="button"><i data-feather="log-out"
                            class="wd-10 mg-r-5"></i> Dọn ra</button>
            </div>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<div class="modal fade" id="js-electronicPicture">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header ">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i data-feather="layout"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20 mg-b-0">Ảnh đồng hồ điện</h4>
                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div class="modal-body">
                <div class="form-group update-image-box">
                    <div class="col-12 upload-box mg-b-15">
                        <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                data-feather="camera" class="mg-r-5"></i> Cập nhật ảnh</a>
                        <input type="file" class="hidden upload-image-input" accept="image/*">
                        <div class="preview-image">
                            <div class="image-wrap">
                                <div class="image-box lightgallery">
                                    <a href="assets/img/dongho.jpg">
                                        <img src="assets/img/dongho.jpg" alt="đồng hồ" class="img">
                                    </a>
                                </div>
                            </div>
                        </div>
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
<div class="modal fade" id="js-waterPicture">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header ">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i data-feather="layout"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20 mg-b-0">Ảnh đồng hồ nước</h4>
                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div class="modal-body">
                <div class="form-group update-image-box">
                    <div class="col-12 upload-box mg-b-15">
                        <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                data-feather="camera" class="mg-r-5"></i> Cập nhật ảnh</a>
                        <input type="file" class="hidden upload-image-input" accept="image/*">
                        <div class="preview-image">
                            <div class="image-wrap">
                                <div class="image-box lightgallery">
                                    <a href="assets/img/donghonuoc.jpg">
                                        <img src="assets/img/donghonuoc.jpg" alt="đồng hồ" class="img">
                                    </a>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-12 upload-box mg-b-15">
                        <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ điện</a>
                        <input type="file" class="hidden upload-image-input" accept="image/*">
                        <div class="preview-image"></div>
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
                    <div class="col-12 upload-box mg-b-15">
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

<div class="modal fade" id="js-goOut">
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
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Ngày dọn vào</label>
                            <div class="input-icon">
                                <input type="tel" class="form-control datetimepicker date-only" placeholder="dd/mm/yyyy"
                                    value="20/10/2019" disabled>
                                <a href="javascript:;" class="datepicker-trigger icon"> <i class=""
                                        data-feather="calendar"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Ngày dọn ra</label>
                            <div class="input-icon">
                                <input type="tel" class="form-control datetimepicker date-only" placeholder="dd/mm/yyyy"
                                    value="20/10/2019">
                                <a href="javascript:;" class="datepicker-trigger icon"> <i class=""
                                        data-feather="calendar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Điện tháng này</label>
                                <input type="tel" class="form-control number-val" placeholder="Trống">
                            </div>
                            <div class="col-12 upload-box mg-b-15">
                                <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                        data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ điện</a>
                                <input type="file" class="hidden upload-image-input" accept="image/*">
                                <div class="preview-image"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label class="tx-10 tx-spacing-1 mg-b-5 tx-color-03">Nước tháng này</label>
                                <input type="tel" class="form-control number-val" placeholder="Trống">
                            </div>
                            <div class="col-12 upload-box mg-b-15">
                                <a href="javascript:;" class="btn btn-outline-primary btn-upload btn-block"><i
                                        data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ nước</a>
                                <input type="file" class="hidden upload-image-input" accept="image/*">
                                <div class="preview-image"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Lưu lại</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#js-goOut-success"
                    data-dismiss="modal">Thu tiền</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<div class="modal fade" id="js-goOut-success">
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
                <div class="result-goout">
                    <p class="tx-row mg-b-5"><span class="lb">Tiền nhà tính tới ngày dọn ra:</span><span
                            class="tx-bold">500.000 <sup>đ</sup></span></p>
                    <p class="tx-row mg-b-5"><span class="lb">Tiền điện, nước tới ngày <span
                                class="tx-primary tx-medium">20/09</span>:</span></p>
                    <p class="tx-row mg-b-5 align-items-center"><span class="lb">50 kW <span
                                class="mg-l-10 mg-r-10 tx-18 tx-bold">x</span> 3000<sup>đ</sup> </span><span
                            class="tx-bold">150.000 <sup>đ</sup></span></p>
                    <p class="tx-row mg-b-5 align-items-center"><span class="lb">50 m<sup>3</sup> <span
                                class="mg-l-10 mg-r-10 tx-18 tx-bold">x</span> 3000<sup>đ</sup> </span><span
                            class="tx-bold">150.000 <sup>đ</sup></span></p>
                    <hr class="mg-b-10 mg-t-10" />
                    <p class="tx-row mg-b-10"><span class="lb tx-bold">Tổng thu:</span><span
                            class="tx-bold tx-danger">5.000.000 <sup>đ</sup></span></p>
                    <div class="row mg-b-10 align-items-center">
                        <div class="col">
                            <span class="lb">Thực nhận của khách:</span>
                        </div>
                        <div class="col">
                            <input type="text" data-type="currency" class="form-control" placeholder="0">
                        </div>

                    </div>
                    <div class="row mg-b-10 align-items-center">
                        <div class="col">
                            <span class="lb">Hình thức:</span>
                        </div>
                        <div class="col">
                            <select name="" id="" class="form-control">
                                <option value="" selected>Chuyển khoản</option>
                                <option value="">Tiền mặt</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-dark" data-dismiss="modal">Lưu lại</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<div class="modal fade" id="js-payMoney">
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
                <div class="row mg-b-15  align-items-center">
                    <div class="col">
                        <select name="" id="" class="form-control">
                            <option value="" selected>Tháng 1</option>
                            <option value="">Tháng 2</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="lb">Điện tháng trước:</span>
                    </div>
                    <div class="col tx-right">
                        <span class="value tx-color-01 tx-medium">1.000.000 <sup>đ</sup></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="lb">Nước tháng trước:</span>
                    </div>
                    <div class="col tx-right">
                        <span class="value tx-color-01 tx-medium">300.000 <sup>đ</sup></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="lb">Dịch vụ thêm:</span>
                    </div>
                    <div class="col tx-right">
                        <span class="value tx-color-01 tx-medium">1.000.000 <sup>đ</sup></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span class="lb">Tiền nợ:</span>
                    </div>
                    <div class="col tx-right">
                        <span class="value tx-color-01 tx-medium">1.000.000 <sup>đ</sup></span>
                    </div>
                </div>

                <div class="row mg-b-10">
                    <div class="col">
                        <span class="lb tx-bold">Tổng thu:</span>
                    </div>
                    <div class="col tx-right">
                        <span class="value tx-color-03 tx-bold tx-danger">3.300.000 <sup>đ</sup></span>
                    </div>
                </div>

                <hr class="mg-b-15 mg-t-5" />
                <div class="row mg-b-10 align-items-center">
                    <div class="col">
                        <span class="lb">Đã nhận:</span>
                    </div>
                    <div class="col">
                        <input type="text" data-type="currency" class="form-control" placeholder="0">
                    </div>

                </div>
                <div class="row mg-b-10 align-items-center">
                    <div class="col">
                        <span class="lb">Hình thức:</span>
                    </div>
                    <div class="col">
                        <select name="" id="" class="form-control">
                            <option value="" selected>Chuyển khoản</option>
                            <option value="">Tiền mặt</option>
                        </select>
                    </div>
                </div>

            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Lưu lại</button>
            </div>
        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div>
<?php require_once( 'footer.php' ); ?>


<script>
$(document).ready(function() {
    $('.js-add-service').on('click', function() {
        const html = `
                            <div class="row align-items-center mg-b-20">
                                <div class="col pl-r-5">
                                    <input type="tel" class="form-control" placeholder="Tên dịch vụ" ata-type="number" value="">
                                </div>
                                <div class="col pd-l-5">
                                    <input type="tel" class="form-control" placeholder="Giá" data-type="number" value="">
                                </div>
                                <div class="col pd-l-0 flex-grow-0">
                                    <a href="javascript:;" class="tx-danger delete-service"><i data-feather="minus-square"></i></a>
                                </div>
                            </div>`;
        $('.list-services').append(html);
        feather.replace();
    });
    $('.list-services').on('click', '.delete-service', function() {
        $(this).closest('.row').remove();
    });
});
</script>