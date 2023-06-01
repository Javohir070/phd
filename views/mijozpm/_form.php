<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\User;
/* @var $this yii\web\View */
/* @var $model app\models\MijozPm */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://cdn.tiny.cloud/1/1486fhsc8m9eu89xyxalc6bo1ebn18u5f5i3zu5p2dxoo22m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mahsulot-qisqa'
      });
    </script>

<div class="mijoz-pm-form">

    <?php $form = ActiveForm::begin(); ?> 

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
                                        <div class="form-body">
                                            <h3 class="form-section">
                                              <?= Html::encode($this->title) ?></h3>
                                            <div class="row">
                                                
                                                <div class="col-md-9">

                                                    <?= $form->field($model, 'nomi')->textInput(['maxlength' => true]) ?>

                                                    <?= $form->field($model, 'qisqa')->textInput(['maxlength' => true]) ?>

                                                    <?= $form->field($model, 'user_id')->dropDownList(
                                                        ArrayHelper::map(User::find()->all(),'id','nomi'),
                                                        [
                                                            'prompt'=>'Foydalanuvchini tanlang'
                                                        ]
                                                    ) ?>

                                                 <?= $form->field($model, 'status')->textInput() ?>

                                                  
                                                </div> 

                                                <!-- col-md-3 -->
                                                <div class="col-md-3">

                                                    <div class="form-group">

                                                      <div class="text-center">
                                                          <img class="card-img-top mb-1 img-fluid" data-src="/web/backend/holder.js/100px180/" src="/web/backend/app-assets/images/portfolio/portfolio-1.jpg" alt="Card image cap">
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label>Rasm biriktirish </label> -->
                                                        <?#= $form->field($model, 'rasm')->fileInput(['maxlength' => true]) ?>
                                                    </div>

                                                    <div class="form-group">
                                                        <!-- <label>Fayl biriktirish </label> -->
                                                        <?= $form->field($model, 'fayl')->fileInput(['maxlength' => true]) ?>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-actions right">
                                             <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                                        </div>
                                   <?php ActiveForm::end(); ?>
                                </div>
                            </div>

                        </div>
                    </div>

                   
                </div>

            </section>
            <!-- // Basic form layout section end -->
        </div>

    <?php ActiveForm::end(); ?>

</div>
