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
                        <li class="breadcrumb-item active" aria-current="page">Lịch sử thu tiền</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Lịch sử thu tiền phòng</h4>
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
                            <div class="header__right-action d-block d-sm-flex mg-sm-l-10-f mg-l-0-f mg-sm-x-0-f">
                                <div class="select-wrapped mg-sm-b-0 mg-b-15 flex-grow-1 flex-sm-grow-0">
                                    <select name="" id="" class="form-control">
                                        <option value=""  disabled>-- Năm --</option>
                                        <option value="1" selected>2019</option>
                                        <option value="2">2020</option>
                                    </select>
                                </div>
                                <div
                                    class="select-wrapped mg-sm-b-0 mg-b-15 flex-grow-1 flex-sm-grow-0 mg-sm-l-10 mg-l-0">
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
                                </div>
                           

                            </div>
                        </div>
                    </div>
                    <div class="table__filter-wrap">
                    <div class="table__filter-head">
                            
                            <div class="table__head-action">
                                <a href="#" class="btn btn-primary js-customize-column m-0"
                                    data-target="js-visibility-column"><i data-feather="sliders"></i> Customize
                                    Column</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered table-block-mobile table-striped"  id="js-visibility-column">
                                <thead class="">
                                    <tr>
                                        <th class="sort-label" data-column="col-room">Phòng<i class="fa fa-sort"></i>
                                        </th>
                                        <th class="sort-label" data-column="col-name">Người đại diện <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-electronic">Điện tháng trước <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-water">Nước tháng trước <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-service">Dịch vụ thêm <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-debt">Tiền nợ<i class="fa fa-sort"></i>
                                        </th>
                                        <th class="sort-label" data-column="col-total">Tổng cộng<i class="fa fa-sort"></i>
                                        </th>
                                        <th class="sort-label" data-column="col-collect">Đã thu<i class="fa fa-sort"></i>
                                        </th>
                                        <th class="sort-label" data-column="col-method">Hình thức<i class="fa fa-sort"></i>
                                        </th>
                                    </tr>
                                    <tr class="tr-search">
                                 
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
                                        <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="tel" class="form-control" placeholder="" data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-water">
                                        <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="tel" class="form-control" placeholder="" data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-service">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="tel" class="form-control" placeholder="" data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-debt">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="tel" class="form-control" placeholder="" data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-total">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="tel" class="form-control" placeholder="" data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-collect">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="tel" class="form-control" placeholder="" data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-method">
                                            <select name="" id="" class="form-control">
                                                <option value="">Chuyển khoản</option>
                                                <option value="">Tiền mặt</option>
                                            </select>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-column="col-room" data-title="Tên phòng">Phòng 01</td>
                                        <td data-column="col-name" data-title="Người đại diện">Trương Văn Lam</td>
                                        <td data-column="col-electronic" data-title="Số điện">
                                           <span>500.000</span>
                                        </td>
                                        <td data-column="col-water" data-title="Số nước">
                                           <span>1.000.000</span>
                                        </td>
                                        <td data-column="col-service" data-title="Dịch vụ thêm">
                                            <span>5.000.000</span>
                                        </td>
                                        <td data-column="col-debt" data-title="Tiền nợ"><span>500.000</span></td>
                                        <td data-column="col-total" data-title="Tổng cộng"><span class="tx-medium">7.000.000</span></td>
                                        <td data-column="col-collect" data-title="Đã thu"><span class="tx-medium">7.000.000</span></td>
                                        <td data-column="col-method" data-title="Hình thức"><span class="">Tiền mặt</span></td>
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