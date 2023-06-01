<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hujjatlar */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://cdn.tiny.cloud/1/1486fhsc8m9eu89xyxalc6bo1ebn18u5f5i3zu5p2dxoo22m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#hujjatlar-description'
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


                                        <!-- <?#= $form->field($model, 'description')->textarea(['rows' => 6]) ?> -->

                                        <?= $form->field($model, 'turi')->dropDownList(
                                            [
                                                0=>'Kategoriya tanlash',
                                                1=>'Bog\'cha: Xalqaro va qonun hujjatlar',
                                                2=>'Bog\'cha: Normativ-huquqiy hujjatlar',
                                                3=>'Bog\'cha: Tashkiliy-metodik hujjatlar',
                                                4=>'Maktab: Xalqaro va qonun hujjatlar',
                                                5=>'Maktab: Normativ-huquqiy hujjatlar',
                                                6=>'Maktab: Tashkiliy-metodik hujjatlar'
                                                ]) ?>

                                                
                                                    <?= $form->field($model, 'downloads_fake')->textInput() ?>

                                        <?#= $form->field($model, 'turi')->textInput() ?>

                                        <?#= $form->field($model, 'created_date')->textInput() ?>

                                        <?#= $form->field($model, 'status')->textInput() ?>


                                    </div>

                                    <!-- col-md-3 -->
                                    <div class="col-md-3">
                                        <div class="form-group">

                                            <div class="form-group">
                                                <label>Hujjatni tanlash</label>
                                                <?= $form->field($model, 'fayl')->fileInput(['maxlength' => true]) ?>
                                            </div>
                                        <?#= $form->field($model, 'fayl')->textInput(['maxlength' => true]) ?>

                                    </div> 

                                    <div class="form-group">
                                            <?= $form->field($model, 'narx')->textInput() ?>
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


