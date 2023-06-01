<?

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\Gender;
use app\models\Viloyat;
use app\models\Tuman;
use app\models\Kasblar;

$this->title = Yii::t('app','User edit');

?>
<style>
    .required{
        margin: 0!important;
    }
    .field-user-email{
        margin: 0!important;
    }
    .field-user-middle_name{
        margin: 0!important;
    }
</style>
<div class="ms-hero-page-override ms-hero-img-airplane ms-bg-fixed ms-hero-bg-dark-light">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">
                Foydalanuvchi ma'lumotlarini tahrirlash</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
        <div class="card-block">
            <?php $form = ActiveForm::begin([
                'options' => [
                    'class' => 'form-horizontal',
                    'enctype' => 'multipart/form-data',
                ]
            ]); ?>
            <fieldset>
                <!-- <div class="form-group">
                    <label for="inputUser" class="col-md-2 control-label">Foydalanuvchi nomi</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="inputUser" placeholder="Foydalanuvchi nomi"
                               value="<?#= $user->makeFIO() ?>" readonly>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="inputFamiliya" class="col-md-2 control-label">Familiya</label>
                    <div class="col-md-9">
                        <?=$form->field($user,'last_name')->textInput(['class'=>'form-control'])->label(false)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputIsm" class="col-md-2 control-label">Ism</label>
                    <div class="col-md-9">
                        <?=$form->field($user,'first_name')->textInput(['class'=>'form-control'])->label(false)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSharifi" class="col-md-2 control-label">Sharifi</label>
                    <div class="col-md-9">
                        <?=$form->field($user,'middle_name')->textInput(['class'=>'form-control'])->label(false)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-md-2 control-label">Email</label>
                    <div class="col-md-9">
                        <?=$form->field($user,'email')->textInput(['class'=>'form-control'])->label(false)?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputDate" class="col-md-2 control-label">Tug'ilgan sanasi</label>
                    <div class="col-md-9">
                        <input type="date" class="form-control" id="inputDate" placeholder="Password"
                               value="<?= $user->date_of_birth ?>" name="User[date_of_birth]">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputViloyat" class="col-md-2 control-label">Viloyat</label>
                    <div class="col-md-9">
                        <select id="inputViloyat" class="form-control selectpicker" name="User[viloyat_id]">
                            <?php if (!empty($user->viloyat_id)){?>
                                <option value="<?=$user->viloyat_id?>"><?=Viloyat::getRegionsList()[$user->viloyat_id]?></option>
                            <?php }else{?>
                                <option value="">Tanlang</option>
                            <?php }?>
                            <?php foreach (Viloyat::getRegionsList() as $key=>$value) {?>
                                <?php if ($user->viloyat_id != $key){?>
                                    <option value="<?=$key?>"><?=$value?></option>
                                <?php }?>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputGen" class="col-md-2 control-label">Tuman</label>
                    <div class="col-md-9">
                        <select id="inputTuman" class="form-control selectpicker" name="User[tuman_id]">
                            <?php if (!empty($user->tuman_id)){?>
                                <option value="<?=$user->tuman_id?>"><?=Tuman::getTumanList()[$user->tuman_id]?></option>
                            <?php }else{?>
                                <option value="">Tanlang</option>
                            <?php }?>
                            <?php foreach (Tuman::getTumanList() as $key=>$value) {?>
                                <?php if ($user->tuman_id != $key){?>
                                    <option value="<?=$key?>"><?=$value?></option>
                                <?php }?>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputKasb" class="col-md-2 control-label">Kasbi</label>
                  <div class="col-md-9">
                    <select id="inputKasb" class="form-control selectpicker" name="User[kasb_id]">
                        <?php if (!empty($user->kasb_id)){?>
                                <option value="<?=$user->kasb_id?>"><?=Kasblar::getKasblarList()[$user->kasb_id]?></option>
                            <?php }else{?>

                        <option value="">Tanlang</option>
                        <?php }?>
                        <?php foreach (Kasblar::getKasblarList() as $key=>$value){?>
                            <?php if ($user->kasb_id != $key){?>
                            <option value="<?=$key?>"><?=$value?></option>
                            <?php }?>
                        <?php }?>
                    </select>
                  </div>
                </div>


                <!-- <div class="form-group label-floating">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="zmdi zmdi-phone"></i>
                      </span>
                      <label class="col-md-2 control-label" for="ms-form-user">Tel raqam</label>
                        <div class="col-md-9">
                         <input type="text" class="form-control phone-mask" name="User[telefon]">
                        </div>
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="inputFamiliya" class="col-md-2 control-label">Tel raqam</label>
                    <div class="col-md-9">
                       <?=$form->field($user,'telefon')->textInput(['class'=>'form-control','readonly'=> true])->label(false)?>
                    </div>
                </div>

               <div class="form-group">
                    <label for="faylnitanlash" class="col-md-2 control-label">Rasm yuklash</label>
                    <div class="col-md-9">
                        <img src="/<?=($user->avatar)?$user->avatar:'/web/frontend/assets/img/avatar.png'?>" alt="..." class="img-circle mr-1" style="max-width: 80px">

                  

                        <!-- <a href="javascript:void(0)" class="btn-circle btn-circle-sm btn-circle-primary">
                            <i class="">                            
                                <?#= $form->field($user, 'avatar')->fileInput(['maxlength' => true])->label('Rasm yuklash') ?>
                                
                            </i>
                        </a> -->
                        <style>
                            .field-user-avatar label:hover{
                                font-size: 14px;
                                color: red;


                            }
                           /* .form-group label.control-label:hover{

                            }*/
                        </style>

                         <i class="fa ">                            
                                <?= $form->field($user, 'avatar')->fileInput(['maxlength' => true])->label('Rasm tanlash') ?>
                                
                        </i> 
                    </div>
                    </label>
                </div>
                

                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checked_success">
                                <span class="ml-2">Foydalanish shartlariga roziman</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <button id="save_yes_no" type="submit" class="btn btn-raised btn-primary btn-block mt-4" >
                            Saqlash
                        </button>
                    </div>
                </div>
            </fieldset>
            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

<?php
$js = <<< JS

//bulimlarni tanlanganini joyida uchirish
$('body').delegate('#checked_success','click', function(e) {
    console.log('dasd');
    if ($(this).is(':checked')) 
    {
        $('#save_yes_no').prop('disabled', true);
    }else {
        $('#save_yes_no').prop('disabled', false);
    }
});

JS;
$this->registerJs($js);
?>