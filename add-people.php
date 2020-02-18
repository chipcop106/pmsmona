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
                        <li class="breadcrumb-item active" aria-current="page">Phòng số 01</li>
                    </ol>
                </nav>
            </div>
        </div>
        <form id="js-step-goin" class="needs-validation">
            <h3>Thông tin người thuê</h3>
            <section class="">
                <div class="row ">
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03" >Họ và tên</label>
                        <input type="text" class="form-control" placeholder="Họ tên" required>
                    </div>
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Số điện
                            thoại</label>
                        <input type="tel" class="form-control" placeholder="SĐT" data-type="number">
                    </div>
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Địa chỉ email</label>
                        <input type="email" class="form-control" placeholder="0">
                    </div>
                   
                </div>
                <div class="row ">
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Quê quán</label>
                        <input type="text" class="form-control" placeholder="Quê của bạn...">
                    </div>
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Số người ở</label>
                        <input type="tel" class="form-control" placeholder="0">
                    </div>
                    <div class="col-sm form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Quan hệ</label>
                        <input type="text" class="form-control" placeholder="VD: Vợ chồng">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col">
                        <div class="form-row">
                            <div class="col-12 upload-box mg-b-15">
                                <a href="javascript:;" class="btn btn-outline-primary btn-upload"><i
                                        data-feather="camera" class="mg-r-5"></i> Ảnh giấy tờ
                                      
                                    </a>
                                    <input type="file" class="hidden upload-image-input" accept="image/*" multiple="multiple">
                                <div class="preview-image"></div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            <h3>Cấu hình phí, dịch vụ</h3>
            <section>
                <div class="row mg-t-15">
                    <div class="col-md-4 bd-md-r mg-md-b-0 mg-b-20">
                        <div class="form-group">
                            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Tiền thuê mỗi tháng</label>
                            <input type="tel" class="form-control" placeholder="0" data-type="currency" required>
                        </div>
                        <div class="list-services">
                            <div class="row align-items-center mg-b-20">
                                <div class="col pl-r-5">
                                    <input type="tel" class="form-control" placeholder="Tên dịch vụ" ata-type="number" value="Wifi">
                                </div>
                                <div class="col pd-l-5">
                                    <input type="tel" class="form-control" placeholder="Giá" data-type="number" value="200.000">
                                </div>
                                <div class="col pd-l-0 flex-grow-0">
                                    <a href="javascript:;" class="tx-danger delete-service"><i data-feather="minus-square"></i></a>
                                </div>
                            </div>
                            <div class="row align-items-center mg-b-20">
                                <div class="col pl-r-5">
                                    <input type="tel" class="form-control" placeholder="Tên dịch vụ" ata-type="number" value="Cáp">
                                </div>
                                <div class="col pd-l-5">
                                    <input type="tel" class="form-control" placeholder="Giá" data-type="number" value="200.000">
                                </div>
                                <div class="col pd-l-0 flex-grow-0">
                                    <a href="javascript:;" class="tx-danger delete-service"><i data-feather="minus-square"></i></a>
                                </div>
                            </div>
                        </div>
               
                        <a href="javascript:;" class="btn btn-outline-primary js-add-service"><i data-feather="plus"></i> Thêm dịch vụ</a>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Điện ban đầu</label>
                                    <input type="tel" class="form-control" placeholder="0" data-type="number">
                                </div>
                              
                                <div class="upload-box">
                                    <a href="javascript:;" class="btn btn-outline-primary btn-upload d-block d-md-inline-block"><i
                                            data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ điện</a>
                                    <input type="file" class="hidden upload-image-input" accept="image/*" multiple>
                                    <div class="preview-image"></div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Nước ban đầu</label>
                                    <input type="tel" class="form-control" placeholder="0" data-type="number">
                                </div>
                              
                                <div class="upload-box">
                                    <a href="javascript:;" class="btn btn-outline-primary btn-upload d-block d-md-inline-block"><i
                                            data-feather="camera" class="mg-r-5"></i> Ảnh đồng hồ nước</a>
                                    <input type="file" class="hidden upload-image-input" accept="image/*" multiple>
                                    <div class="preview-image"></div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                 
                   
                </div>
            </section>
            <h3>Thanh toán</h3>
            <section>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Cọc trước</label>
                            <select name="" id="" class="form-control">
                                <option value="1">1 tháng</option>
                                <option value="2">2 tháng</option>
                                <option value="3" selected>3 tháng</option>
                                <option value="4">4 tháng</option>
                                <option value="5">5 tháng</option>
                                <option value="6">6 tháng</option>
                                <option value="7">7 tháng</option>
                                <option value="8">8 tháng</option>
                                <option value="9">9 tháng</option>
                                <option value="10">10 tháng</option>
                                <option value="11">11 tháng</option>
                                <option value="12">12 tháng</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Trả trước tới</label>
                            <select name="" id="" class="form-control">
                                <option value="1">Hết tháng 1</option>
                                <option value="2">Hết tháng 2</option>
                                <option value="3">Hết tháng 3</option>
                                <option value="4" selected>Hết tháng 4</option>
                                <option value="5">Hết tháng 5</option>
                                <option value="6">Hết tháng 6</option>
                                <option value="7">Hết tháng 7</option>
                                <option value="8">Hết tháng 8</option>
                                <option value="9">Hết tháng 9</option>
                                <option value="10">Hết tháng 10</option>
                                <option value="11">Hết tháng 11</option>
                                <option value="12">Hết tháng 12</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                        <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Tổng tiền</label>
                        <div class="input-group mg-b-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="total-money">3 tháng 5 ngày = </span>
                            </div>
                            <input type="text" class="form-control bg-light tx-danger tx-bold" placeholder="Tổng tiền" aria-describedby="total-money" value="3.150.000" disabled>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03" >Thực nhận của khách</label>
                            <input type="text" class="form-control" placeholder="0" >
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="tx-10 tx-uppercase tx-medium tx-spacing-1 mg-b-5 tx-color-03">Hình thức</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected>Chuyển khoản</option>
                                <option value="">Tiền mặt</option>
                            </select>
                        </div>
                    </div>

                </div>
            </section>
        </form>
    </div><!-- container -->
</div><!-- content -->

<?php require_once( 'footer.php' ); ?>
<script src="lib/jquery-steps/build/jquery.steps.min.js"></script>
<script>
    function onBeforeSubmitForm(){
        alert('Chạy trước khi Submit form');
    }
    function onAfterSubmitForm(){
        alert('Chạy sau khi Submit form');
    }
    function validateForm(event, currentIndex, newIndex){
        if (currentIndex > newIndex)
        {
            return true;
        }
        let $currentStepForm = $('#js-step-goin-p-'+currentIndex);
        let inputs = $currentStepForm.find('*:required');
        for(let i = 0;i< inputs.length;i++){
            if(inputs[i].value === ""){
                $currentStepForm.addClass('was-validated');
                return false;
                break;
            }
        }
        $currentStepForm.addClass('was-validated');
        return true;
    }
    function initForm() {
        $('#js-step-goin').steps({
            headerTag: 'h3',
            bodyTag: 'section',
            transitionEffect:'fade',
            transitionEffectSpeed:200,
            autoFocus: true,
            labels:{
                cancel:'Huỷ',
                next:'Tiếp tục',
                previous:'Quay lại',
            },
      
            titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
            onStepChanging:validateForm,
            onFinishing:onBeforeSubmitForm,
            //onFinished:onAfterSubmitForm
        });
    }
    initForm();
    $(document).ready(function(){
    
        $('.js-add-service').on('click',function(){
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
        $('.list-services').on('click','.delete-service',function(){
            $(this).closest('.row').remove();
        });
    });
</script>