<?php require_once( 'head.php' ); ?>
<?php require_once( 'header.php' ); ?>
<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách phòng</li>
                    </ol>
                </nav>
            </div>
            <div class="d-none">
                <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="upload"
                        class="wd-10 mg-r-5"></i> Export</button>
            </div>
        </div>
        <div class="row mg-b-20 chart__wrap">
            <div class="col mg-md-b-0 mg-b-15">
                <div class="card">
                    <div class="card-body pos-relative pd-0">
                        <div class="revenue-chart pd-sm-x-20 ">
                            <canvas id="revenueChart" class="" height="300"></canvas>
                        </div><!-- chart-one -->
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body pos-relative pd-0">
                        <div class="revenue-chart pd-sm-x-20 ">
                            <canvas id="rateChart" class="" height="300"></canvas>
                        </div><!-- chart-one -->
                    </div><!-- card-body -->
                </div><!-- card -->
            </div>
        </div>
        <div class="row row-xs">
            <div class="col">
                <h4 class="mg-b-0 tx-spacing--1">Danh sách phòng</h4>
                <div class="table__filter__wrap">
                    <div class="table__filter-header">
                        <div class="table__header-left">
                            <a href="#addNewRoom" class="btn btn-primary" data-toggle="modal"><i class="fa fa-plus"></i>
                                Thêm phòng</a>
                        </div>
                        <div class="table__header-right">
                            <div class="header__right-action">
                                <div class="search__box control">
                                    <input type="text" class="form-control search__box-area input-style"
                                        placeholder="Tìm kiếm...">
                                    <a href="javascript:;" class="search__box-icon "><i class="fa fa-search"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="select-sort">
                                    <span>Sắp xếp theo: </span>
                                    <select name="" id="" class="form-control">
                                        <option value="">A-Z</option>
                                        <option value="">Phòng trống</option>
                                    </select>

                                </div>
                                <a href="#" class="btn btn-style control js-toggle-filter" id="js-toggle-filter"><i
                                        class="fa fa-filter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="table__filter-form">
                        <div class="filter__form__wrap">
                            <div class="filter__form-col">
                                <div class="form__group">
                                    <label>Tên phòng</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="filter__form-col">
                                <div class="form__group">
                                    <label>Giá tiền</label>
                                    <select name="" id="" class="form-control">
                                        <option value="" selected>---</option>
                                        <option value="1">option 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter__form-col">
                                <div class="form__group">
                                    <label>Trạng thái</label>
                                    <select name="" id="" class="form-control">
                                        <option value="" selected>---</option>
                                        <option value="1">option 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter__form-col">
                                <div class="form__group">
                                    <label>Ngày nhận phòng</label>
                                    <input type="text" class="form-control datetimepicker date-only">
                                </div>
                            </div>
                            <div class="filter__form-col">
                                <div class="form__group">
                                    <label>Số người ở</label>
                                    <input type="tel" class="form-control" data-type="number">
                                </div>
                            </div>
                            <div class="filter__form-col">
                                <div class="form__group">
                                    <label>Tiền nợ</label>
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
                                    <a href="#" class="table-action btn btn-sm btn-outline-info">(<span
                                            class="check-num"></span>) Actions <i class="fa fa-angle-down"
                                            aria-hidden="true"></i></a>
                                    <ul class="drop-menu">
                                        <li class="drop-menu-item"><a href="#" class="item-link">Tạm ngưng</a></li>
                                        <li class="drop-menu-item"><a href="#" class="item-link">Kích hoạt</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table__head-action">
                                <a href="#" class="btn btn-primary js-customize-column m-0"
                                    data-target="js-visibility-column"><i data-feather="sliders"></i> Customize
                                    Column</a>

                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered table-block-mobile"
                                id="js-visibility-column">
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
                                        <th class="sort-label" data-column="col-name">Tên phòng<i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-money">Giá tiền <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-status">Trạng thái <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-datein">Ngày nhận phòng <i
                                                class="fa fa-sort"></i></th>
                                        <th class="sort-label" data-column="col-people">Số người ở <i
                                                class="fa fa-sort"></i></th>

                                        <th class="sort-label" data-column="col-deposit">Tiền nợ <i
                                                class="fa fa-sort"></i></th>
                                        <th class="action-col"></th>
                                    </tr>
                                    <tr class="tr-search">
                                        <th class="checkbox-col">

                                        </th>
                                        <th class="checkbox-col"></th>
                                        <th class="" data-column="col-name">
                                            <input type="text" class="form-control" name="NameInput" placeholder="">
                                        </th>
                                        <th data-column="col-money">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="text" class="form-control" name="money" placeholder=""
                                                    data-type="currency">
                                            </div>
                                        </th>
                                        <th data-column="col-status">
                                            <select name="" id="" class="form-control">
                                                <option value="">Còn trống</option>
                                                <option value="">Đã thuê</option>
                                            </select>
                                        </th>
                                        <th data-column="col-datein">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="text" class="form-control datetimepicker date-only"
                                                    name="dateIn" placeholder="">
                                            </div>
                                        </th>
                                        <th class="compare-col" data-column="col-people">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="text" class="form-control" name="people" placeholder=""
                                                    data-type="currency">
                                            </div>
                                        </th>

                                        <th data-column="col-deposit">
                                            <div class="compare">
                                                <select name="" id="" class="form-control">
                                                    <option value="">&#62;</option>
                                                    <option value="">&#60;</option>
                                                    <option value="">=</option>
                                                </select>
                                                <input type="text" class="form-control" name="deposit" placeholder="">
                                            </div>

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
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                    class="fa fa-angle-down"></i></a>
                                        </td>
                                        <td data-column="col-name" data-title="Tên phòng"><a
                                                href="room-detail.php">Phòng số 01</a></td>
                                        <td data-column="col-money" data-title="Giá tiền">3.000.000</td>
                                        <td data-column="col-status" data-title="Trạng thái"><span
                                                class="badge badge-success pd-5 tx-12">Phòng trống</span></td>
                                        <td data-column="col-datein" data-title="Ngày nhận phòng">12/04/2019</td>
                                        <td data-column="col-people" data-title="Số người ở">3 người</td>
                                        <td data-column="col-deposit" data-title="Tiền nợ"><span
                                                class="tx-danger tx-bold">12.000.000</span> </td>
                                        <td class="action-col">
                                            <div class="dropdown__wrap">
                                                <a href="#" class="table-action"><i class="fa fa-ellipsis-v"
                                                        aria-hidden="true"></i></a>
                                                <ul class="drop-menu">
                                                    <li class="drop-menu-item"><a href="room-detail.php"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-info-circle"
                                                                    aria-hidden="true"></i></span>Chi tiết</a></li>
                                                    <li class="drop-menu-item"><a href="#js-electronicNote"
                                                            data-toggle="modal" class="item-link"><span class="icon"><i
                                                                    class="fas fa-calendar-alt"
                                                                    aria-hidden="true"></i></span>Ghi
                                                            điện</a></li>
                                                    <li class="drop-menu-item"><a href="#js-payMoney"
                                                            data-toggle="modal" class="item-link"><span class="icon"><i
                                                                    class="fas fa-hand-holding-usd"
                                                                    aria-hidden="true"></i></span>Thu
                                                            tiền</a></li>
                                                    <li class="drop-menu-item"><a href="#js-goOut" data-toggle="modal"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-sign-out-alt"
                                                                    aria-hidden="true"></i></span>Dọn
                                                            ra</a></li>
                                                    <li class="drop-menu-item"><a href="add-people.php"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-sign-in-alt"
                                                                    aria-hidden="true"></i></span>Dọn
                                                            vào</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="collape-row">
                                        <td colspan="12">
                                            <div class="table-content">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <caption class="p-0">Điện nước phòng 01</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Điện tháng trước</th>
                                                                <th>Nước tháng trước</th>
                                                                <th>Phí dịch vụ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>120 kW</td>
                                                                <td>65 m<sup>3</sup></td>
                                                                <td>500.000</td>
                                                            </tr>
                                                            <tr>

                                                        </tbody>
                                                    </table>
                                                </div>
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
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                    class="fa fa-angle-down"></i></a>
                                        </td>
                                        <td data-column="col-name" data-title="Tên phòng"><a
                                                href="room-detail.php">Phòng số 02</a></td>
                                        <td data-column="col-money" data-title="Giá tiền">3.000.000</td>
                                        <td data-column="col-status" data-title="Trạng thái"><span
                                                class="badge badge-danger pd-5 tx-12">Đã thuê</span></td>
                                        <td data-column="col-datein" data-title="Ngày nhận phòng">12/04/2019</td>
                                        <td data-column="col-people" data-title="Số người ở">3 người</td>
                                        <td data-column="col-deposit" data-title="Tiền nợ"><span
                                                class="tx-danger tx-bold">12.000.000</span> </td>
                                        <td class="action-col">
                                            <div class="dropdown__wrap">
                                                <a href="#" class="table-action"><i class="fa fa-ellipsis-v"
                                                        aria-hidden="true"></i></a>
                                                <ul class="drop-menu">
                                                    <li class="drop-menu-item"><a href="room-detail.php"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-info-circle"
                                                                    aria-hidden="true"></i></span>Chi tiết</a></li>
                                                    <li class="drop-menu-item"><a href="#js-electronicNote"
                                                            data-toggle="modal" class="item-link"><span class="icon"><i
                                                                    class="fas fa-calendar-alt"
                                                                    aria-hidden="true"></i></span>Ghi
                                                            điện</a></li>
                                                    <li class="drop-menu-item"><a href="#js-payMoney"
                                                            data-toggle="modal" class="item-link"><span class="icon"><i
                                                                    class="fas fa-hand-holding-usd"
                                                                    aria-hidden="true"></i></span>Thu
                                                            tiền</a></li>
                                                    <li class="drop-menu-item"><a href="#js-goOut" data-toggle="modal"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-sign-out-alt"
                                                                    aria-hidden="true"></i></span>Dọn
                                                            ra</a></li>
                                                    <li class="drop-menu-item"><a href="add-people.php"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-sign-in-alt"
                                                                    aria-hidden="true"></i></span>Dọn
                                                            vào</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="collape-row">
                                        <td colspan="12">
                                            <div class="table-content">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <caption class="p-0">Điện nước phòng 02</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Điện tháng trước</th>
                                                                <th>Nước tháng trước</th>
                                                                <th>Phí dịch vụ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>120 kW</td>
                                                                <td>65 m<sup>3</sup></td>
                                                                <td>500.000</td>
                                                            </tr>
                                                            <tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                    class="fa fa-angle-down"></i></a>
                                        </td>
                                        <td data-column="col-name" data-title="Tên phòng"><a
                                                href="room-detail.php">Phòng số 03</a></td>
                                        <td data-column="col-money" data-title="Giá tiền">3.000.000</td>
                                        <td data-column="col-status" data-title="Trạng thái"><span
                                                class="badge badge-success pd-5 tx-12">Phòng trống</span></td>
                                        <td data-column="col-datein" data-title="Ngày nhận phòng">12/04/2019</td>
                                        <td data-column="col-people" data-title="Số người ở">3 người</td>
                                        <td data-column="col-deposit" data-title="Tiền nợ"><span
                                                class="tx-danger tx-bold">12.000.000</span> </td>
                                        <td class="action-col">
                                            <div class="dropdown__wrap">
                                                <a href="#" class="table-action"><i class="fa fa-ellipsis-v"
                                                        aria-hidden="true"></i></a>
                                                <ul class="drop-menu">
                                                    <li class="drop-menu-item"><a href="room-detail.php"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-info-circle"
                                                                    aria-hidden="true"></i></span>Chi tiết</a></li>
                                                    <li class="drop-menu-item"><a href="#js-electronicNote"
                                                            data-toggle="modal" class="item-link"><span class="icon"><i
                                                                    class="fas fa-calendar-alt"
                                                                    aria-hidden="true"></i></span>Ghi
                                                            điện</a></li>
                                                    <li class="drop-menu-item"><a href="#js-payMoney"
                                                            data-toggle="modal" class="item-link"><span class="icon"><i
                                                                    class="fas fa-hand-holding-usd"
                                                                    aria-hidden="true"></i></span>Thu
                                                            tiền</a></li>
                                                    <li class="drop-menu-item"><a href="#js-goOut" data-toggle="modal"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-sign-out-alt"
                                                                    aria-hidden="true"></i></span>Dọn
                                                            ra</a></li>
                                                    <li class="drop-menu-item"><a href="add-people.php"
                                                            class="item-link"><span class="icon"><i
                                                                    class="fas fa-sign-in-alt"
                                                                    aria-hidden="true"></i></span>Dọn
                                                            vào</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="collape-row">
                                        <td colspan="12">
                                            <div class="table-content">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <caption class="p-0">Điện nước phòng 03</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Điện tháng trước</th>
                                                                <th>Nước tháng trước</th>
                                                                <th>Phí dịch vụ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>120 kW</td>
                                                                <td>65 m<sup>3</sup></td>
                                                                <td>500.000</td>
                                                            </tr>
                                                            <tr>

                                                        </tbody>
                                                    </table>
                                                </div>
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
                                            <a href="javascript:;" class="toggle-collapse"><i
                                                    class="fa fa-angle-down"></i></a>
                                        </td>
                                        <td data-column="col-name" data-title="Tên phòng"><a
                                                href="room-detail.php">Phòng số 04</a></td>
                                        <td data-column="col-money" data-title="Giá tiền">3.000.000</td>
                                        <td data-column="col-status" data-title="Trạng thái"><span
                                                class="badge badge-success pd-5 tx-12">Phòng trống</span></td>
                                        <td data-column="col-datein" data-title="Ngày nhận phòng">12/04/2019</td>
                                        <td data-column="col-people" data-title="Số người ở">3 người</td>
                                        <td data-column="col-deposit" data-title="Tiền nợ"><span
                                                class="tx-danger tx-bold">12.000.000</span> </td>
                                        <td class="action-col">
                                            <div class="dropdown__wrap">
                                                <a href="#" class="table-action"><i class="fa fa-ellipsis-v"
                                                        aria-hidden="true"></i></a>
                                                <ul class="drop-menu">
                                                    <li class="drop-menu-item"><a href="#" class="item-link"><span
                                                                class="icon"><i class="fa fa-plus"></i></span>Ghi
                                                            điện nước</a></li>
                                                    <li class="drop-menu-item"><a href="#" class="item-link"><span
                                                                class="icon"><i class="fa fa-circle"></i></span>Thu
                                                            tiền</a></li>
                                                    <li class="drop-menu-item"><a href="#" class="item-link"><span
                                                                class="icon"><i class="fa fa-calendar"></i></span>Dọn
                                                            ra</a></li>
                                                    <li class="drop-menu-item"><a href="#" class="item-link"><span
                                                                class="icon"><i class="fa fa-calendar"></i></span>Dọn
                                                            vào</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="collape-row">
                                        <td colspan="12">
                                            <div class="table-content">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <caption class="p-0">Điện nước phòng 04</caption>
                                                        <thead>
                                                            <tr>
                                                                <th>Điện tháng trước</th>
                                                                <th>Nước tháng trước</th>
                                                                <th>Phí dịch vụ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>120 kW</td>
                                                                <td>65 m<sup>3</sup></td>
                                                                <td>500.000</td>
                                                            </tr>
                                                            <tr>

                                                        </tbody>
                                                    </table>
                                                </div>

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
<div class="modal fade" id="addNewRoom">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header ">
                <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
                <div class="media align-items-center">
                    <span class="tx-color-03 d-none d-sm-block"><i data-feather="layout"></i></span>
                    <div class="media-body mg-sm-l-20">
                        <h4 class="tx-18 tx-sm-20">Thêm phòng mới</h4>
                    </div>
                </div><!-- media -->
            </div><!-- modal-header -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Tên phòng</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Giá tiền</label>
                        <input type="text" class="form-control" placeholder="" data-type="currency">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Giá điện /
                            kW</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Giá nước /
                            m<sup>3</sup></label>
                        <input type="text" class="form-control" placeholder="" data-type="currency">
                    </div>

                </div>
            </div><!-- modal-body -->
            <div class="modal-footer pd-x-20 pd-y-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Huỷ</button>
                <button type="button" class="btn btn-primary">Tạo mới</button>
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
                    <div class="col-12 upload-box mg-b-20">
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
                                    value="20/10/2019" readonly="true">
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
                <button type="button" class="btn btn-primary" data-dismiss="modal">Lưu lại</button>
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
                        <input type="tel" data-type="currency" class="form-control" placeholder="0">
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
<script src="lib/chart.js/Chart.bundle.min.js"></script>
<script src="lib/chart.js/chartjs-plugin-datalabels.js"></script>

<script>
$(document).ready(function() {
    function getRandom(length) {
        const arr = [];
        for (let i = 0; i < length; i++) {
            arr[i] = Math.floor((Math.random() * 10000) + 99) * 1000;
        }
        return arr;
    }
    const revenueBarChartCTX = $("#revenueChart");
    const rateLineChartCTX = $('#rateChart');
    const yearRevenueDataset = [{
        label: "Năm ngoái",
        data: getRandom(12),
        backgroundColor: 'rgb(105,178,248,.45)',
        borderColor: 'transparent',
    }, {
        label: "Năm nay",
        data: getRandom(12),
        backgroundColor: 'rgba(30, 200, 200, 0.45)',
        borderColor: 'transparent',
    }];
    const revenueBarChartOptions = {
        plugins: {
            // Change options for ALL labels of THIS CHART
            datalabels: {
                display: false,
                color: "#000",
                clamp: true,
                anchor: "start",
                align: "top",
                offset: 0,
                formatter: (value, ctx) => {
                    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                },
                fontSize: 14
            }
        },
        title: {
            text: 'Doanh thu năm',
            display: true
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                top: 10,
                right: 0,
                left: 0,
                bottom: 10
            }
        },
        legend: {
            display: true,
            labels: {
                fontColor: '#252525',
                padding: 10

            },
            // onClick: function (e, legendItem) {
            //     //   console.log(legendItem);
            //     var index = legendItem.datasetIndex;
            //     var ci = this.chart;
            //     var alreadyHidden = (ci.getDatasetMeta(index).hidden === null) ? false : ci.getDatasetMeta(index).hidden;

            //     totalRevenue[0].innerText = updateTotalRevenue(ci.data.datasets[index].data);
            //     ci.data.datasets.forEach(function (e, i) {
            //         var meta = ci.getDatasetMeta(i);

            //         if (i !== index) {
            //             if (!alreadyHidden) {
            //                 meta.hidden = meta.hidden === null ? !meta.hidden : null;


            //             } else if (meta.hidden === null) {
            //                 meta.hidden = true;

            //             }
            //         } else if (i === index) {

            //             meta.hidden = null;

            //         }
            //     });

            //     ci.update();
            // }

        },
        hover: {
            mode: "label"
        },
        scales: {
            xAxes: [{
                beginAtZero: true,
                display: true,

                gridLines: {
                    display: false
                },
                ticks: {
                    beginAtZero: true,
                    fontColor: "#000",
                }
            }],
            yAxes: [{
                display: true,
                beginAtZero: true,
                fontColor: "#000",
                gridLines: {
                    display: true,
                    color: "#fff"
                },
                ticks: {
                    beginAtZero: false,
                    fontColor: "#000",
                    callback: function(value, index, values) {
                        if (parseInt(value) >= 1000000 && parseInt(value) < 1000000000) {
                            return (value / 1000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") +
                                ' Triệu';
                        } else if ((parseInt(value) >= 1000000000)) {
                            return (value / 1000000000).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ",") +
                                ' Tỉ';
                        }
                        return value;
                    }
                }
            }]
        },
        tooltips: {
            titleFontSize: 0,
            mode: 'index',
            intersect: false,
            callbacks: {
                label: function(tooltipItem, data) {
                    if (parseInt(tooltipItem.yLabel) >= 1000) {
                        return 'Tháng ' + (tooltipItem.index + 1) + ': ' + tooltipItem.yLabel.toString()
                            .replace(
                                /\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ';
                    } else {
                        return 'Tháng ' + (tooltipItem.index + 1) + ': ' + tooltipItem.yLabel + ' VNĐ';
                    }

                }
            }
        }
    };
    let revenueBarChartData = {
        labels: ["TH1", "TH2", "TH3", "TH4", "TH5", "TH6", "TH7", "TH8", "TH9", "TH10", "TH11", "TH12"],
        datasets: yearRevenueDataset
    };
    let revenueBarChartConfig = {
        type: "bar",
        options: revenueBarChartOptions,
        data: revenueBarChartData
    };

    const rateData = [{
        label: "Tỉ lệ",
        data: [30, 56, 92, 74, 28, 79, 45, 78, 56, 19, 24, 66],
        backgroundColor: 'rgba(30, 200, 200, 0.13)',
        borderColor: 'rgba(30, 200, 200, 0.45)',
        lineTension: .1,
        pointBackgroundColor: "#fff",
        pointBorderColor: '#1ec8c8',
        borderWidth: 2,
        pointBorderWidth: 2,
        pointHoverBorderWidth: 2,
    }];
    let rateLineChartData = {
        labels: ["TH1", "TH2", "TH3", "TH4", "TH5", "TH6", "TH7", "TH8", "TH9", "TH10", "TH11", "TH12"],
        datasets: rateData
    };
    const rateLineChartOptions = {
        plugins: {
            // Change options for ALL labels of THIS CHART
            datalabels: {
                display: true,
                color: "#000",
                clamp: false,
                anchor: "end",
                align: "top",
                offset: 2,
                formatter: (value, ctx) => {
                    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '%';
                },
                fontSize: 16
            }
        },
        title: {
            text: 'Tỉ lệ lấp đầy',
            display: true
        },
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                top: 10,
                right: 0,
                left: 0,
                bottom: 10
            }
        },
        legend: {
            display: false,
            labels: {
                fontColor: '#252525',
                padding: 10

            },
        },
        hover: {
            mode: "label"
        },
        scales: {
            xAxes: [{
                beginAtZero: true,
                display: true,

                gridLines: {
                    display: false
                },
                ticks: {
                    beginAtZero: true,
                    fontColor: "#000",
                    max: Math.floor(Math.max(...rateData[0].data) * 1.2),
                }
            }],
            yAxes: [{
                display: true,
                beginAtZero: true,
                fontColor: "#000",
                gridLines: {
                    display: true,
                    color: "#fff"
                },
                ticks: {
                    fontColor: "#000",
                    beginAtZero: false,
                    max: Math.floor(Math.max(...rateData[0].data) * 1.2),
                    callback: function(value, index, values) {
                        if (parseInt(value) >= 1000000 && parseInt(value) < 1000000000) {
                            return (value / 1000000).toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    ",") +
                                ' Triệu';
                        } else if ((parseInt(value) >= 1000000000)) {
                            return (value / 1000000000).toString().replace(
                                    /\B(?=(\d{3})+(?!\d))/g, ",") +
                                ' Tỉ';
                        }
                        return value;
                    }


                }
            }]
        },
        tooltips: {
            titleFontSize: 0,
            mode: 'index',
            intersect: false,
            callbacks: {
                label: function(tooltipItem, data) {

                    if (parseInt(tooltipItem.yLabel) >= 1000) {
                        return 'Tháng ' + tooltipItem.index + ': ' + tooltipItem.yLabel.toString()
                            .replace(
                                /\B(?=(\d{3})+(?!\d))/g, ",") + ' %';
                    } else {
                        return 'Tháng ' + tooltipItem.index + ': ' + tooltipItem.yLabel + ' %';
                    }
                }
            }
        }
    };

    let rateLineChartCTXConfig = {
        type: "line",
        options: rateLineChartOptions,
        data: rateLineChartData
    }
    // Init Load
    let revenueBarChart = new Chart(revenueBarChartCTX, revenueBarChartConfig);
    let rateLineChart = new Chart(rateLineChartCTX, rateLineChartCTXConfig);


    const callback = function(mutationsList, observer) {
        // Use traditional 'for loops' for IE 11
        for(let mutation of mutationsList) {
            if (mutation.attributeName === 'data-sort') {
                sortTable(mutation.target);
                observer.disconnect();
                return false;
            }
        }
    };

    $('.sort-label').on('click',function(){
        const observer = new MutationObserver(callback);
        observer.observe(this,{
            attributes:true,
            childList:false,
            subtree:true,
            attributeFilter:['data-sort']
        });
    });

    function sortTable(ele){
        console.log(ele.getAttribute('data-sort'));
    }

});
</script>