<?
use yii\helpers\Url;

use yii\widgets\ActiveForm;

$action = Yii::$app->controller->action->id;
?>
<style>
    .form-group{
        margin: 10px 0 0!important;
    }
    
</style>
<br>
<br>
<div class="container">
    <div class="row">

        <div class="col-md-4">
            
            <?=Yii::$app->controller->renderPartial('/blocks/frontend/profileleft',['action' => $action]);?>
        </div>

        <div class="col-md-8">
            <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-2 color-white index-1">Almashish uchun metodika yuborish</h2>
                <div class="color-info index-1 text-center np-m">
                    (Siz tomondan yuborilgan metodikalarni bizning jamoa kо‘rib chiqadi hamda <div class="color-danger">“Almashishga tavsiya etilgan psixologik metodikalar” </div> bо‘limida
                    metodikalar tavsiya etadi. Siz mazkur tavsiya etilgan metodikalar ichidan sizga ma’qul bо‘lganini tanlab olib, <b class="color-danger">bepul yuklab olib</b>,
                    foydalanishingiz mumkin bо‘ladi.)
                </div>
            </div>

            <div class="card card-primary animated fadeInUp animation-delay-7">
                <div class="card-block">
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'enctype' => 'multipart/form-data',
                            'class' => 'form-horizontal',

                        ]
                    ]); ?>
                        <fieldset>
                            <div class="form-group">
                                <!-- <h3>Metodika nomi</h3> -->
                                <label for="pmnomi" class="col-md-2 control-label">Metodika nomi</label>
                                <div class="col-md-9">
                                    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true])->label(false) ?>
                                </div>
                            </div>

                            <div class="form-group">
                              <label for="textArea" class="col-md-2 control-label">Metodika qisqacha tavsifi</label>
                              <div class="col-md-9">
                                <?= $form->field($model, 'qisqa')->textInput(['maxlength' => true])->label(false) ?>
                              </div>
                            </div>

                            <div class="form-group" >
                                
                                    
                                
                                <label for="faylnitanlash" class="col-md-2 control-label">Fayl yuklash</label>
                                <div class="col-md-9">
                                    <a href="">
                                        <input type="file" id="mijozpm-fayl" class=" btn-block btn-raised mt-2 no-mb" name="MijozPm[fayl]" maxlength="1024" aria-required="true">
                                        <?#= $form->field($model, 'fayl')->fileInput(['maxlength' => true,'class'=>'btn btn-primary btn-block btn-raised mt-2 no-mb'])?>
                                        <!-- Biriktiriladigan fayl -->
                                        <!-- <i class="zmdi zmdi-download" style="padding-top: 25px">
                                            
                                        </i> -->
                                    </a>

                                    <!-- <span class="file-custom"></span> -->
                                </div>
                                </label>
                            </div>

                            <!-- <div class="form-group">
                                <label for="inputFamiliya" class="col-md-2 control-label">Fayl yuklash</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="inputFamiliya"
                                           placeholder="Yangi parol qaytadan" name="User[new_confirm_password]">
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="submit" class="btn btn-raised btn-primary btn-block mt-4" >
                                        Yuborish
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
<style type="text/css">
    .form-group input[type=file] {
    opacity: 1;
    position: relative;
    }
</style>