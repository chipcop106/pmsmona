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
              <li class="breadcrumb-item active" aria-current="page">Khách thuê phần mềm</li>
            </ol>
          </nav>
          <h4 class="mg-b-0 tx-spacing--1">Khách thuê phần mềm</h4>
        </div>
        <div class="d-none d-md-block">
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export</button>
        </div>
      </div>

      <div class="row row-xs">
  
        <div class="col">
            <div class="table__filter__wrap">
              <div class="table__filter-header">
                  <div class="table__header-left">
                      <a href="#addNewCus" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus"></i> Add new</a>
                  </div>
                  <div class="table__header-right">
                      <div class="header__right-action">
                          <div class="search__box control">
                              <input type="text" class="form-control search__box-area input-style" placeholder="Tìm kiếm...">
                              <a href="javascript:;" class="search__box-icon "><i class="fa fa-search"
                                      aria-hidden="true"></i></a>
                          </div>
                          <a href="#" class="btn btn-style control js-toggle-filter" id="js-toggle-filter"><i class="fa fa-filter"
                                  aria-hidden="true"></i></a>
                      </div>

                  </div>
              </div>
              <div class="table__filter-form">
                  <div class="filter__form__wrap">
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Họ tên</label>
                              <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Quốc gia</label>
                              <select name="" id="" class="form-control">
                                  <option value="" selected>---</option>
                                  <option value="1">option 1</option>
                              </select>
                          </div>
                      </div>
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Họ tên</label>
                              <select name="" id="" class="form-control">
                                      <option value="" selected>---</option>
                                      <option value="1">option 1</option>
                                  </select>
                          </div>
                      </div>
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Tỉnh</label>
                              <input type="text" class="form-control">
                          </div>
                      </div>
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Dự án</label>
                              <select name="" id="" class="form-control">
                                      <option value="" selected>---</option>
                                      <option value="1">option 1</option>
                                  </select>
                          </div>
                      </div>
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Doanh thu từ</label>
                              <input type="text" class="form-control" data-type="currency">
                          </div>
                      </div>
                      <div class="filter__form-col">
                          <div class="form__group">
                              <label>Doanh thu đến :</label>
                              <input type="text" class="form-control" data-type="currency">
                          </div>
                      </div>
                  </div>
                  <div class="filter__form-submit">
                      <a href="javascript:;" class="btn btn-warning" id="js-filter-submit">Tìm nâng cao</a>
                  </div>
              </div>
              <div class="table__filter-wrap">
                  <div class="table__filter-head">
                      <div class="table__head-checkbox">
                          <div class="checkbox__action">
                              <a href="#" class="table-action btn btn-sm btn-outline-info">(<span class="check-num"></span>) Actions <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                              <ul class="drop-menu">
                                  <li class="drop-menu-item"><a href="#" class="item-link">Tạm ngưng</a></li>
                                  <li class="drop-menu-item"><a href="#" class="item-link">Kích hoạt</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="table__head-action">
                          <a href="#" class="btn btn-primary js-customize-column m-0" data-target="js-visibility-column"><i data-feather="sliders"></i> Customize Column</a>
                      
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-bordered table-centered" id="js-visibility-column" >
                          <thead class="">
                              <tr>
                                  <th class="checkbox-col">
                                      <div class="custom-checkbox">
                                          <label>
                                              <input type="checkbox" value="" class="checkbox-all">
                                              <span></span>
                                          </label>
                                      </div>
                                  </th>
                                  <th class="checkbox-col">
                                  </th>
                                  <th class="sort-label" data-column="col-name">Tên chủ trọ <i class="fa fa-sort"></i></th>
                                  <th class="sort-label" data-column="col-phone">Số điện thoại <i class="fa fa-sort"></i></th>
                                  <th class="sort-label" data-column="col-address">Địa chỉ <i class="fa fa-sort"></i></th>
                                  <th class="sort-label" data-column="col-package">Gói thuê <i class="fa fa-sort"></i></th>
                                  <th class="sort-label" data-column="col-money">Số tiền <i class="fa fa-sort"></i></th>
                                  <th class="sort-label" data-column="col-enddate">Ngày hết hạn <i class="fa fa-sort"></i></th>
                                  <th class="sort-label" data-column="col-status">Trạng thái <i class="fa fa-sort"></i></th>
                                  <th class="action-col"></th>
                              </tr>
                              <tr class="tr-search">
                                  <th class="checkbox-col">

                                  </th>
                                  <th class="checkbox-col"></th>
                                  <th class="" data-column="col-name">
                                      <input type="text" class="form-control" name="NameInput" placeholder="">
                                  </th>
                                  <th data-column="col-phone">
                                    <input type="text" class="form-control" name="PhoneInput" placeholder="" data-type="number">
                                  </th>
                                  <th data-column="col-address">
                                    <input type="text" class="form-control" name="AddressInput" placeholder="">
                                  </th>
                                  <th data-column="col-package">
                                      <select name="PackageInput" id="" class="form-control">
                                        <option value="12">12 tháng</option>
                                        <option value="24">24 tháng</option>
                                      </select>
                                  </th>
                                  <th class="compare-col"  data-column="col-money">
                                    <div class="compare">
                                          <select name="" id="" class="form-control">
                                              <option value="">&#62;</option>
                                              <option value="">&#60;</option>
                                              <option value="">=</option>
                                          </select>
                                          <input type="text" class="form-control" placeholder="" data-type="currency">
                                      </div>
                                  </th>
                                  <th data-column="col-enddate">
                                    <input type="text" class="form-control" name="EndDateInput" placeholder="">
                                  </th>
                        
                                  
                                  <th data-column="col-status">
                                        <select name="" id="" class="form-control">
                                        <option value="enabled">Đang hoạt động</option>
                                        <option value="disabled">Tạm ngưng</option>
                                        </select>
                                  </th>
                                  <th class="action-col"></th>
                              </tr>
                          </thead>
                          <tbody>

                              <tr>
                                  <td class="checkbox-col">
                                      <div class="custom-checkbox">
                                          <label>
                                              <input type="checkbox" value="">
                                              <span></span>
                                          </label>
                                      </div>
                                  </td>
                                  <td class="checkbox-col">
                                      <a href="javascript:;" class="toggle-collapse"><i class="fa fa-angle-down"></i></a>
                                  </td>
                                  <td data-column="col-name">Trương Văn Lam</td>
                                  <td data-column="col-phone">0886706289</td>
                                  <td data-column="col-address">319 c16, Lý Thường Kiệt, quận 11, TP HCM</td>
                                  <td data-column="col-package">12 tháng</td>
                                  <td data-column="col-money">9.000.000 VNĐ</td>
                                  <td data-column="col-enddate">27/12/2019</td>
                                  <td data-column="col-status"><span class="badge badge-success">active</span></td>
                                  <td class="action-col">
                                      <div class="dropdown__wrap">
                                          <a href="#" class="table-action"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                          <ul class="drop-menu">
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-plus"></i></span>Action 1</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-circle"></i></span>Action 2</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-calendar"></i></span>Action 3</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr class="collape-row">
                                  <td colspan="10">
                                      <div class="table-content">
                                          <table class="table">
                                              <caption>Lịch sử gia hạn</caption>
                                              <thead>
                                                  <tr>
                                                      <th>Gói mua</th>
                                                      <th>Ngày bắt đầu</th>
                                                      <th>Ngày kết thúc</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12 tháng</td>
                                                      <td>20/10/2019</td>
                                                      <td>20/10/2020</td>
                                                  </tr>
                                                  <tr>
                                                      <td>24 tháng</td>
                                                      <td>20/10/2020</td>
                                                      <td>20/10/2022</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="checkbox-col">
                                      <div class="custom-checkbox">
                                          <label>
                                              <input type="checkbox" value="">
                                              <span></span>
                                          </label>
                                      </div>
                                  </td>
                                  <td class="checkbox-col">
                                      <a href="javascript:;" class="toggle-collapse"><i class="fa fa-angle-down"></i></a>
                                  </td>
                                  <td data-column="col-name">Trương Văn Lam</td>
                                  <td data-column="col-phone">0886706289</td>
                                  <td data-column="col-address">319 c16, Lý Thường Kiệt, quận 11, TP HCM</td>
                                  <td data-column="col-package">12 tháng</td>
                                  <td data-column="col-money">9.000.000 VNĐ</td>
                                  <td data-column="col-enddate">27/12/2019</td>
                                  <td data-column="col-status"><span class="badge badge-success">active</span></td>
                                  <td class="action-col">
                                      <div class="dropdown__wrap">
                                          <a href="#" class="table-action"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                          <ul class="drop-menu">
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-plus"></i></span>Action 1</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-circle"></i></span>Action 2</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-calendar"></i></span>Action 3</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr class="collape-row">
                                  <td colspan="10">
                                      <div class="table-content">
                                          <table class="table">
                                              <caption>Lịch sử gia hạn</caption>
                                              <thead>
                                                  <tr>
                                                      <th>Gói mua</th>
                                                      <th>Ngày bắt đầu</th>
                                                      <th>Ngày kết thúc</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12 tháng</td>
                                                      <td>20/10/2019</td>
                                                      <td>20/10/2020</td>
                                                  </tr>
                                                  <tr>
                                                      <td>24 tháng</td>
                                                      <td>20/10/2020</td>
                                                      <td>20/10/2022</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="checkbox-col">
                                      <div class="custom-checkbox">
                                          <label>
                                              <input type="checkbox" value="">
                                              <span></span>
                                          </label>
                                      </div>
                                  </td>
                                  <td class="checkbox-col">
                                      <a href="javascript:;" class="toggle-collapse"><i class="fa fa-angle-down"></i></a>
                                  </td>
                                  <td data-column="col-name">Trương Văn Lam</td>
                                  <td data-column="col-phone">0886706289</td>
                                  <td data-column="col-address">319 c16, Lý Thường Kiệt, quận 11, TP HCM</td>
                                  <td data-column="col-package">12 tháng</td>
                                  <td data-column="col-money">9.000.000 VNĐ</td>
                                  <td data-column="col-enddate">27/12/2019</td>
                                  <td data-column="col-status"><span class="badge badge-success">active</span></td>
                                  <td class="action-col">
                                      <div class="dropdown__wrap">
                                          <a href="#" class="table-action"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                          <ul class="drop-menu">
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-plus"></i></span>Action 1</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-circle"></i></span>Action 2</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-calendar"></i></span>Action 3</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr class="collape-row">
                                  <td colspan="10">
                                      <div class="table-content">
                                          <table class="table">
                                              <caption>Lịch sử gia hạn</caption>
                                              <thead>
                                                  <tr>
                                                      <th>Gói mua</th>
                                                      <th>Ngày bắt đầu</th>
                                                      <th>Ngày kết thúc</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12 tháng</td>
                                                      <td>20/10/2019</td>
                                                      <td>20/10/2020</td>
                                                  </tr>
                                                  <tr>
                                                      <td>24 tháng</td>
                                                      <td>20/10/2020</td>
                                                      <td>20/10/2022</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="checkbox-col">
                                      <div class="custom-checkbox">
                                          <label>
                                              <input type="checkbox" value="">
                                              <span></span>
                                          </label>
                                      </div>
                                  </td>
                                  <td class="checkbox-col">
                                      <a href="javascript:;" class="toggle-collapse"><i class="fa fa-angle-down"></i></a>
                                  </td>
                                  <td data-column="col-name">Trương Văn Lam</td>
                                  <td data-column="col-phone">0886706289</td>
                                  <td data-column="col-address">319 c16, Lý Thường Kiệt, quận 11, TP HCM</td>
                                  <td data-column="col-package">12 tháng</td>
                                  <td data-column="col-money">9.000.000 VNĐ</td>
                                  <td data-column="col-enddate">27/12/2019</td>
                                  <td data-column="col-status"><span class="badge badge-dark">disabled</span></td>
                                  <td class="action-col">
                                      <div class="dropdown__wrap">
                                          <a href="#" class="table-action"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                                          <ul class="drop-menu">
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-plus"></i></span>Action 1</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-circle"></i></span>Action 2</a></li>
                                              <li class="drop-menu-item"><a href="#" class="item-link"><span class="icon"><i class="fa fa-calendar"></i></span>Action 3</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr class="collape-row">
                                  <td colspan="10">
                                      <div class="table-content">
                                          <table class="table">
                                              <caption>Lịch sử gia hạn</caption>
                                              <thead>
                                                  <tr>
                                                      <th>Gói mua</th>
                                                      <th>Ngày bắt đầu</th>
                                                      <th>Ngày kết thúc</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>12 tháng</td>
                                                      <td>20/10/2019</td>
                                                      <td>20/10/2020</td>
                                                  </tr>
                                                  <tr>
                                                      <td>24 tháng</td>
                                                      <td>20/10/2020</td>
                                                      <td>20/10/2022</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>

              </div>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
</div><!-- content -->
<div class="modal fade" id="addNewCus">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header pd-y-20 pd-x-20 pd-sm-x-30">
        <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </a>
        <div class="media align-items-center">
          <span class="tx-color-03 d-none d-sm-block"><i data-feather="user-plus"></i></span>
          <div class="media-body mg-sm-l-20">
            <h4 class="tx-18 tx-sm-20 mg-b-2">Thêm mới</h4>
            <p class="tx-13 tx-color-03 mg-b-0">Khách thuê phần mềm quản lý</p>
          </div>
        </div><!-- media -->
      </div><!-- modal-header -->
      <div class="modal-body pd-sm-t-30 pd-sm-b-40 pd-sm-x-30">
        <div class="row form-group">
          <div class="col-sm">
            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Họ và tên</label>
            <input type="text" class="form-control" placeholder="Your name">
          </div>
          <div class="col-sm">
            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Số điện thoại</label>
            <input type="text" class="form-control" placeholder="Your phone">
          </div>
        </div>
        <div class="form-group">
          <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Địa chỉ</label>
          <input type="text" class="form-control" placeholder="Your address...">
        </div>

        <div class="row row-sm">
          <div class="col-sm-3">
            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Gói thuê</label>
           <select name="" id="" class="form-control">
             <option value="1">12 tháng</option>
             <option value="">24 tháng</option>
           </select>
          </div><!-- col -->
          <div class="col-sm-3 mg-t-20 mg-sm-t-0">
            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Gói thuê</label>
            <input type="text" class="form-control text-danger" placeholder="" value="9.000.000" disabled>
          </div><!-- col -->
          <div class="col-sm-3 mg-t-20 mg-sm-t-0">
            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Bắt đầu</label>
            <input type="text" class="form-control from-date datetimepicker date-only" placeholder="" value="" >
          </div><!-- col -->
          <div class="col-sm-3 mg-t-20 mg-sm-t-0">
            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Kêt thúc</label>
            <input type="text" class="form-control text-danger to-date date-only datetimepicker" placeholder="" value="">
          </div><!-- col -->
        </div>
      </div><!-- modal-body -->
      <div class="modal-footer pd-x-20 pd-y-15">
        <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
        <button type="button" class="btn btn-primary">Tạo mới</button>
      </div>
    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div>
<?php require_once( 'footer.php' ); ?>
