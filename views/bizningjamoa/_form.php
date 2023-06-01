<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BizningJamoa */
/* @var $form yii\widgets\ActiveForm */
?>
 
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
                                            <!-- <h3 class="form-section">
                                              <?#= Html::encode($this->title) ?></h3> -->
                                            <div class="row">

                                                <div class="col-md-9">

                                                    <?= $form->field($model, 'fish')->textInput(['maxlength' => true]) ?>

                                                    <?= $form->field($model, 'ish_joy')->textInput(['maxlength' => true]) ?>
                                               
                                                    <?= $form->field($model, 'telegram')->textInput() ?>
                                                    <?= $form->field($model, 'facebook')->textInput() ?>

                                                    <?= $form->field($model, 'instagram')->textInput() ?>
                                                   
                                                    
                                                   
                                                </div> 

                                                <!-- col-md-3 -->
                                                <div class="col-md-3">

                                                    <div class="form-group">

                                                      <div class="text-center">
                                                         
                                                          <img src="/web/frontend/assets/img/demo/avatar.png" alt="Card image cap"> 
                                                      </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label>Rasm biriktirish </label> -->
                                                        <?= $form->field($model, 'rasm')->fileInput(['maxlength' => true]) ?>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-actions right">
                                             <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                                         <!--  <button type="submit" class="btn btn-primary">
                                              <i class="la la-check-square-o"></i> Saqlash
                                          </button> -->
                                          <!-- <button type="button" class="btn btn-warning mr-1">
                                              <i class="ft-x"></i> Chiqish
                                          </button> -->
                                            
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