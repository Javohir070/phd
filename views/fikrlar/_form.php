<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fikrlar */
/* @var $form yii\widgets\ActiveForm */
?>




<?php $form = ActiveForm::begin(); ?>
 
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">

                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-body">
                                            <h3 class="form-section">
                                              <?= Html::encode($this->title) ?></h3>
                                            <div class="row">
                                                <div class="col-md-12">

												<?php $form = ActiveForm::begin(); ?>

											    <?#= $form->field($model, 'matn')->textInput(['maxlength' => true]) ?>
											    <?= $form->field($model, 'matn')->textarea(['rows' => 6]) ?>

											    <?#= $form->field($model, 'created_date')->textInput() ?>

											    <?= $form->field($model, 'status')->textInput() ?>

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
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                   
                </div>

            </section>
            <!-- // Basic form layout section end -->
        </div>
    <!-- </div> -->
    <?php ActiveForm::end(); ?>