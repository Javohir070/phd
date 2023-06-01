<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Mahsulotturi;
use app\models\Mahsulot;
use app\models\Kasblar;
/* @var $this yii\web\View */
/* @var $model app\models\Mahsulot */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://cdn.tiny.cloud/1/1486fhsc8m9eu89xyxalc6bo1ebn18u5f5i3zu5p2dxoo22m/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#mahsulot-qisqa'
      });
    </script>

<!-- BEGIN: Content-->
<!-- <div class="app-content content"> -->
   
   <!--  <div class="content-overlay"></div> -->
    <!-- <div class="content-wrapper"> -->

       <!--  <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title"><?#= Html::encode($this->title) ?></h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?#=Url::to('')?>">Bosh sahifa</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"><?#= Html::encode($this->title) ?></a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>  
        </div> -->

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

                                                   <?= $form->field($model, 'kategoriya')->dropDownList([1=>'Kategoriya tanlash',2=>'Oltin',3=>'Kumush',4=>'Bronza']) ?>
                                                   
                                                   <?= $form->field($model, 'mahsulotturi_id')->label('Psixologik metodika turi')->dropDownList(
                                                        ArrayHelper::map(Mahsulotturi::find()->where(['status'=>1])->all(),'Id','nomi'),
                                                        [
                                                            'prompt'=>'Psixologik metodika turini tanlang'
                                                        ]
                                                    ) ?>

                                                    <?= $form->field($model, 'kasb_id')->label('Psixologik metodikaga mo\'ljallangan kasb turi')->dropDownList(
                                                        ArrayHelper::map(Kasblar::find()->all(),'id','nomi'),
                                                        [
                                                            'prompt'=>'Psixologik metodika moljallangan kasbni tanlang'
                                                        ]
                                                    ) ?>
                                                   <?= $form->field($model, 'yoriqmona')->dropDownList([1=>'Yo\'riqnoma mavjudligi',2=>'Mavjud',3=>'Mavjud emas']) ?>

                                                    <?= $form->field($model, 'motodik_natija')->dropDownList([1=>'Metodik qo\'llanma mavjudligi',2=>'Mavjud',3=>'Mavjud emas']) ?>

                                                    <?#= $form->field($model, 'created_date')->textInput() ?>
                                                    <?= $form->field($model, 'views_fake')->textInput() ?>
                                                    <?= $form->field($model, 'downloads_fake')->textInput() ?>
                                                    <?= $form->field($model, 'aloqa1')->dropDownList(
                                                        ArrayHelper::map(Mahsulot::find()->all(),'id','nomi'),
                                                        [
                                                            'prompt'=>'1-Aloqador Psixologik metodikani tanlang'
                                                        ]
                                                    ) ?>
                                                    <?= $form->field($model, 'aloqa2')->dropDownList(
                                                        ArrayHelper::map(Mahsulot::find()->all(),'id','nomi'),
                                                        [
                                                            'prompt'=>'2-Aloqador Psixologik metodikani tanlang'
                                                        ]
                                                    ) ?>
                                                    <?= $form->field($model, 'aloqa3')->dropDownList(
                                                        ArrayHelper::map(Mahsulot::find()->all(),'id','nomi'),
                                                        [
                                                            'prompt'=>'3-Aloqador Psixologik metodikani tanlang'
                                                        ]
                                                    ) ?>
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
                                                        <?= $form->field($model, 'rasm')->fileInput(['maxlength' => true]) ?>
                                                    </div>

                                                    <?#= $form->field($model, 'rasm')->textInput(['maxlength' => true]) ?>

                                                    <div class="form-group">
                                                        <!-- <label>Fayl biriktirish </label> -->
                                                        <?= $form->field($model, 'fayl')->fileInput(['maxlength' => true]) ?>
                                                    </div>

                                                    <?#= $form->field($model, 'fayl')->textInput(['maxlength' => true]) ?>

                                                     <?= $form->field($model, 'narx')->textInput() ?>

                                                    <?= $form->field($model, 'yosh')->textInput() ?>

                                                    <?= $form->field($model, 'index_uchun')->checkBox() ?>
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
    <!-- </div> -->
    
<!-- </div> -->
<!-- END: Content-->
