<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sahifalar */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://cdn.tiny.cloud/1/1486fhsc8m9eu89xyxalc6bo1ebn18u5f5i3zu5p2dxoo22m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#sahifalar-content'
      });
    </script>

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

                                                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                                                    <?= $form->field($model, 'qisqa')->textInput(['maxlength' => true]) ?>
                                                    
                                                    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>


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
                                                    <?= $form->field($model, 'videolink')->textInput() ?>

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

