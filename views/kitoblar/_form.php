<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kitobturi;

/* @var $this yii\web\View */
/* @var $model app\models\Kitoblar */
/* @var $form yii\widgets\ActiveForm */
?>

<section id="basic-form-layouts">
    <div class="row match-height">

        <div class="col-md-12">
            <div class="card">

                <div class="card-content collapse show">
                    <div class="card-body">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                        <form class="form">
                            <div class="form-body">
                               <!--  <h4 class="form-section">
                                  <i class="ft-user"></i>
                                   Yangilik kiritish sahifasi</h4> -->
                                <div class="row">
                                    <div class="col-md-9">

                                        <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'qisqa')->textInput(['maxlength' => true]) ?>
                                        <?= $form->field($model, 'muallif')->textInput(['maxlength' => true]) ?>

                                        <?= $form->field($model, 'nashr_yili')->textInput() ?>
                                        <?= $form->field($model, 'category_id')->dropDownList(
                                                        ArrayHelper::map(Kitobturi::find()->all(),'Id','nomi'),
                                                        [
                                                            'prompt'=>'Kitob kategoriyasini tanlang'
                                                        ]
                                                    ) ?>
                                         <?= $form->field($model, 'views_fake')->textInput() ?>
                                                    <?= $form->field($model, 'downloads_fake')->textInput() ?>


                                    </div>

                                    <!-- col-md-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">

                                          <div class="text-center">
                                              <img class="card-img-top mb-1 img-fluid" data-src="holder.js/100px180/" src="/web/backend/app-assets/images/portfolio/portfolio-1.jpg" alt="Card image cap">
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <!-- <label>Rasm biriktirish </label> -->
                                            <?= $form->field($model, 'rasm')->fileInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="form-group">
                                            <!-- <label>Fayl biriktirish </label> -->
                                            <?= $form->field($model, 'fayl')->fileInput(['maxlength' => true]) ?>
                                        </div>

                                        <div class="form-group">
                                            <?= $form->field($model, 'narx')->textInput() ?>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="form-actions right">
                             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                              <!-- <button type="button" class="btn btn-warning mr-1">
                                  <i class="ft-x"></i> Chiqish
                              </button> -->
                                
                            </div>
                        </form>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic form layout section end -->
