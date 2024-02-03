<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use app\models\Viloyat;
use app\models\Kasblar;

?>

    <style>
        @keyframes spinner {
            to {transform: rotate(360deg);}
        }

        .spinner,
        .spinner:before {
            width: 20px;
            height: 20px;
            box-sizing: border-box;
        }

        .spinner:before {
            content: '';
            display: block;
            border-radius: 50%;
            border: 2px solid #ccc;
            border-top-color: #333;
            animation: spinner .6s linear infinite;
        }

        .spinner-absolute {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -10px;
        }

        /* Animations */

        .spinner-add,
        .spinner-remove {
            animation-fill-mode: both;
            animation-duration: .4s;
        }

        .spinner-add {
            animation-name: spinner-add;
        }

        @keyframes spinner-add {
            from {transform: scale(0);}
            to {transform: scale(1);}
        }

        .spinner-remove {
            animation-name: spinner-remove;
        }

        @keyframes spinner-remove {
            to {transform: scale(0);}
        }
    </style>

<!-- Modal -->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header shadow-2dp no-pb">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">P</span>
                <h3 class="no-m ms-site-title">Psixologik
                  <span>Portal</span>
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#ms-login-tab" id="uio789" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-register-tab" id="qwe123" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Ro'yxatdan o'tish</a>
                  </li>
                  <li role="presentation" id="code_active">
                    <a href="#ms-recovery-tab" id="rty456" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-key"></i> Parolni tiklash</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade active in" id="ms-login-tab">
                    <?php $form = ActiveForm::begin([
                        'action' => Url::to(['user/sign-in']),
                        'options' => [
                            'autocomplete'=>'off',
                            'id'=>'sign_in_form',
                        ]
                    ]); ?>
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-phone"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Tel raqam <span style="color: red">*</span></label>
                          <input type="text" class="form-control phone-mask" name="User[telefon]">
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Parol <span style="color: red">*</span></label>
                          <input type="password" id="ms-form-pass" class="form-control" name="User[password_hash]">
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Eslab qolish </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button type="button" id="sign_in_save" class="btn btn-raised btn-primary pull-right">
                              <span class="spinner"><i class="icon-spin icon-refresh"></i></span>
                              <span class="loader" data-text = "Kirish">Kirish</span>
                          </button>
                        </div>
                      </div>
                    </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <div class="card-block">
                      <?php $form = ActiveForm::begin([
                          'action' => Url::to(['user/sign-up']),
                          'options' => [
                              'class'=>'form-horizontal',
                              'id'=>'sign_up_form',
                          ]
                      ]); ?>
                          <fieldset>
                            <div class="form-group">
                              <label for="inputFamiliya" class="col-md-2 control-label">Familiya <span style="color: red">*</span></label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="inputFamiliya" placeholder="Familiya" name="User[last_name]" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputIsm" class="col-md-2 control-label">Ism <span style="color: red">*</span></label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="inputIsmi" placeholder="Ism" name="User[first_name]" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputSharifi" class="col-md-2 control-label">Sharifi</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" id="inputName" placeholder="Sharifi" name="User[middle_name]">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputEmail" class="col-md-2 control-label">Email</label>
                              <div class="col-md-9">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="User[email]">
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputDate" class="col-md-2 control-label">Tug'ilgan sanasi <span style="color: red">*</span></label>
                              <div class="col-md-10">
                                <input type="date" class="form-control" id="inputDate" name="User[date_of_birth]" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputVil" class="col-md-2 control-label">Viloyat <span style="color: red">*</span></label>
                              <div class="col-md-9">
                                <select id="inputVil" class="form-control selectpicker" name="User[viloyat_id]">
                                    <option value="">Tanlang</option>
                                    <?php foreach (Viloyat::getRegionsList() as $key=>$value){?>
                                        <option value="<?=$key?>"><?=$value?></option>
                                    <?php }?>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputTuman" class="col-md-2 control-label">Tuman</label>
                              <div class="col-md-9">
                                <select id="inputTuman" class="form-control" name="User[tuman_id]" required>
                                    <option value="">Tanlang</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputKasb" class="col-md-2 control-label">Kasbi <span style="color: red">*</span></label>
                              <div class="col-md-9">
                                <select id="inputKasb" class="form-control selectpicker" name="User[kasb_id]">
                                    <option value="">Tanlang</option>
                                    <?php foreach (Kasblar::getKasblarList() as $key=>$value){?>
                                        <option value="<?=$key?>"><?=$value?></option>
                                    <?php }?>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="inputLast" class="col-md-2 control-label">Telefon raqami <span style="color: red">*</span></label>
                              <div class="col-md-9">
                                <input type="text" class="form-control phone-mask"  placeholder="+998(YY)XXX-XX-XX" name="User[telefon]">
                              </div>
                            </div>
                            <div class="row" >
                              <div class="col-md-offset-2 col-md-10">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" >
                                    <span class="ml-2">Foydalanish shartlariga roziman</span>
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <button id="sign_up_save" type="button" class="btn btn-raised btn-primary btn-block mt-4" >
                                    <span class="spinner"><i class="icon-spin icon-refresh"></i></span>
                                    <span class="loader" data-text = "Ro‘yhatdan o‘tish">Ro‘yxatdan o‘tish</span>
                                </button>
                              </div>
                            </div>
                          </fieldset>
                      <?php ActiveForm::end(); ?>
                  </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                    <?php $form = ActiveForm::begin([
                        'action' => Url::to(['user/sign-password-reset']),
                        'options' => [
                            'class'=>'form-horizontal',
                            'id'=>'password_reset_form',
                        ]
                    ]); ?>
                      <fieldset>
                        <div class="form-group label-floating">
                          <div class="input-group">
                            <span class="input-group-addon">
                              <i class="zmdi zmdi-phone"></i>
                            </span>
                            <label class="control-label" for="ms-form-user">Tel raqami <span style="color: red">*</span></label>
                            <input type="text"  class="form-control phone-mask" name="User[telefon]">
                          </div>
                        </div>
                        <button type="button" class="btn btn-raised btn-block btn-primary" id="password_reset_save">
                            <span class="spinner"><i class="icon-spin icon-refresh"></i></span>
                            <span class="loader" data-text = "Parolni yuborish">Parolni yuborish</span>
                        </button>
                      </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#active_code_modal" id="active_code" style="display: none">
    </button>

    <!-- Modal -->
    <div class="modal fade" id="active_code_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" >
                <div class="modal-header" style="display: flex;align-items: flex-start;justify-content: space-between;padding: 1rem 1rem;border-bottom: 1px solid #dee2e6; border-top-left-radius: .3rem; background-color: #03a9f4; color: #fff;" >
                    <h5 class="modal-title" id="exampleModalLabel" style="padding: 10px 22px 0; margin-bottom: 0; line-height: 1.5;">
                        Faollashtirish kodi
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 1rem 1rem; margin: -1rem -1rem -1rem auto;">
                        <span aria-hidden="true" style="font-size: 2.5rem;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php $form = ActiveForm::begin([
                        'action' => Url::to(['user/sign-code-active']),
                        'options' => [
                            'class'=>'form-horizontal',
                            'id'=>'active_code_form',
                        ]
                    ]); ?>
                    <fieldset>
                        <div class="form-group label-floating">
                            <div class="input-group">
                            <span class="input-group-addon">
                              <i class="zmdi zmdi-code"></i>
                            </span>
                                <label class="control-label" for="ms-form-user">Faollashtirish kodi <span style="color: red">*</span></label>
                                <input type="text" id="ms-form-user" class="form-control" name="User[activate]">
                            </div>
                        </div>
                    </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #dee2e6;">
                    <button id="active_save" type="button" class="btn btn-raised btn-primary btn-block mt-4" style="width: 100%;padding: 10px;margin-top: 10px!important;">
                        <span class="spinner"><i class="icon-spin icon-refresh"></i></span>
                        <span class="loader" data-text = "Kodni tasdiqlash">Kodni tasdiqlash</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php
$js = <<< JS
$('.spinner').hide();
$(".phone-mask").mask("+998(99) 999-99-99");

$('body').delegate('#inputVil','change', function(e) {
    let vil_id = $(this).val();
       $.ajax({
        url:'/user/region',
        data:{id:vil_id, "_csrf" : yii.getCsrfToken()},
        type:'POST',
        //contentType: "application/json",
        success: function(response){

            //$("#inputTuman").prop("disabled",false);
             //$("#inputTuman").css("display","block");
            $("#inputTuman").html(response.option);
            $("#inputTuman").html(response.option);
            //console.log(typeof(response));
            console.log(response);
        }
    });
});

$('body').delegate('#sign_up_save','click', function(e) {    
    let form = $("#sign_up_form");
    
    let button_title = $(this).find(".loader").data('text');
    let spinner = $('.spinner');
    spinner.show();
    $(this).find(".loader").text('Loader');
    $(this).prop('disabled', true);
    
       $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        dataType: "json",
        data: form.serialize(),
        success: function(response){ 
            if (response.status == 200){
                $('#active_code_form').attr('action','/user/sign-active-code?token=' + response.token);
                $("#active_code").click();
                
                spinner.hide();
                $('#sign_up_save').find(".loader").text(button_title);
                $('#sign_up_save').prop('disabled', false);
            }else {                
                Swal.fire({
                    title: "Foydalanuvchi",
                    text: response.message,
                    icon: 'error',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3600
                });
                
                spinner.hide();
                $('#sign_up_save').find(".loader").text(button_title);
                $('#sign_up_save').prop('disabled', false);
            }
           
        }
    });
});

$('body').delegate('#active_save','click', function(e) {    
    let form = $("#active_code_form");
    
    let button_title = $(this).find(".loader").data('text');
    let spinner = $('.spinner');
    spinner.show();
    $(this).find(".loader").text('Loader');
    $(this).prop('disabled', true);
    
       $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        dataType: "json",
        data: form.serialize(),
        success: function(response){ 
            if (response.status == 200){
                Swal.fire({
                    title: response.user,
                    text: response.message,
                    icon: 'success',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3600
                });
                
                spinner.hide();
                $('#active_save').find(".loader").text(button_title);
                $('#active_save').prop('disabled', false);                
                setTimeout(location.reload.bind(location), 4200);

            }else {
                Swal.fire({
                    title: "Foydalanuvchi",
                    text: response.message,
                    icon: 'error',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3600
                });
                
                spinner.hide();
                $('#active_save').find(".loader").text(button_title);
                $('#active_save').prop('disabled', false);
            }
           
        }
    });
});

$('body').delegate('#password_reset_save','click', function(e) {        
    let form = $("#password_reset_form");
    
    let button_title = $(this).find(".loader").data('text');
    let spinner = $('.spinner');
    spinner.show();
    $(this).find(".loader").text('Loader');
    $(this).prop('disabled', true);
    
       $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        dataType: "json",
        data: form.serialize(),
        success: function(response){ 

            if (response.status == 200){
                Swal.fire({
                    title: "Hurmatli foydalanuvchi",
                    text: response.message,
                    icon: 'success',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3000
                });
                
                spinner.hide();
                $('#password_reset_save').find(".loader").text(button_title);
                $('#password_reset_save').prop('disabled', false);
                setTimeout(location.reload.bind(location), 3600);
            }else {
                Swal.fire({
                    title: "Foydalanuvchi",
                    text: response.message,
                    icon: 'error',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3000
                });
                
                spinner.hide();
                $('#password_reset_save').find(".loader").text(button_title);
                $('#password_reset_save').prop('disabled', false);
            }
            
        }
    });
});

$('body').delegate('#sign_in_save','click', function(e) {    
    let form = $("#sign_in_form");
    
    let button_title = $(this).find(".loader").data('text');
    let spinner = $('.spinner');
    spinner.show();
    $(this).find(".loader").text('Loader');
    $(this).prop('disabled', true);
    
       $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        dataType: "json",
        data: form.serialize(),
        success: function(response){ 
            console.log(response);

            if (response.status == 200){
               Swal.fire({
                    title: response.user,
                    text: response.message,
                    icon: 'success',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3000
                });
               
                spinner.hide();
                $('#sign_in_save').find(".loader").text(button_title);
                $('#sign_in_save').prop('disabled', false);
               setTimeout(location.reload.bind(location), 3600);
            }else {
                Swal.fire({
                    title: "Foydalanuvchi",
                    text: response.message,
                    icon: 'error',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3000
                });
                
                spinner.hide();
                $('#sign_in_save').find(".loader").text(button_title);
                $('#sign_in_save').prop('disabled', false);
            }
            
        }
    });
});

JS;
$this->registerJs($js);
?>