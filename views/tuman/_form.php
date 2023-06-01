<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Viloyat;

/* @var $this yii\web\View */
/* @var $model app\models\Tuman */
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

                                                   <?= $form->field($model,'viloyat_id')->dropDownList(
                                                        ArrayHelper::map(Viloyat::find()->all(),'viloyat_id','viloyat_nomi'),
                                                        ['prompt'=>'Viloyatni tanlang']
                                                        )->label('Viloyat') ?>

                                                    <?= $form->field($model, 'tuman_nomi')->textInput() ?>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-actions right">
                                             
                                             <?= Html::submitButton($model->isNewRecord ? 'Saqlash' : 'Saqlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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