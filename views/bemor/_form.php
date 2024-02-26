<?php
   use yii\helpers\Url;
   use yii\helpers\Html;
   use yii\widgets\ActiveForm;
   use yii\helpers\ArrayHelper;
   use app\models\Viloyat;
   use app\models\Tuman;
   use app\models\Mahsulotturi;
   use app\models\Komissiya;
   use app\models\Mutaxasislik;
   use kartik\date\DatePicker;
   use kartik\datetime\DateTimePicker;
   // use app\models\Komissiya;
   // use app\models\Mutaxasislik;
   /* @var $this yii\web\View */
   /* @var $model app\models\Bemor */
   /* @var $form yii\widgets\ActiveForm */
   ?>
<section class="users-edit">
   <div class="card">
      <div class="card-content">
         <div class="card-body">
            <ul class="nav nav-tabs mb-2" role="tablist">
               <li class="nav-item">
                  <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                     href="#account" aria-controls="account" role="tab" aria-selected="true">
                  <i class="ft-user mr-25"></i><span class="d-none d-sm-block">Bemor</span>
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                  <?php $form = ActiveForm::begin();  ?>
                  <!-- users edit media object start -->
                  <div class="media mb-2">
                     <a class="mr-2" href="#">
                        <? $form->field($model, 'avatar')->fileInput(['maxlength' => true]) ?>
                        <img src="/web/backend/app-assets/images/portrait/small/avatar-s-13.png"
                           alt="users avatar"
                           class="users-avatar-shadow rounded-circle" height="64" width="64">
                     </a>
                  </div>
                  <form novalidate>
                     <div class="row">
                        <div class="col-12 col-sm-6">
                           <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?> 
                           <?= $form->field($model, 'telefon')->textInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'jinsi')->dropDownList(['erkak' => 'Erkak', 'ayol' => 'Ayol']) ?> 
                        </div>
                        <div class="col-12 col-sm-6">
                           <fieldset>
                            <label for="">Tug'ilgan kun</label>
                              <div class="form-group field-bemor-birth_day required">
                                 <input type="date"  class="form-control"  name="Bemor[birth_day]" required>
                              </div>
                              <div class="form-group field-bemor-birth_day required">
                                 <label for="inputVil" class="col-md-2 control-label">Viloyat <span style="color: red">*</span></label>
                                 <div class="">
                                    <select id="inputVil" class="form-control selectpicker" name="Bemor[viloyat_id]">
                                       <option value="">Tanlang</option>
                                       <?php foreach (Viloyat::getRegionsList() as $key=>$value){?>
                                       <option value="<?=$key?>"><?=$value?></option>
                                       <?php }?>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-group field-bemor-birth_day required">
                                 <label for="inputTuman" class="col-md-2 control-label">Tuman</label>
                                 <div class="">
                                    <select id="inputTuman" class="form-control" name="Bemor[tuman_id]" required>
                                       <option value="">Tanlang</option>
                                    </select>
                                 </div>
                              </div>
                           </fieldset>
                           <?= $form->field($model, 'manzili')->textInput() ?>
                           <?= $form->field($model, 'tashxis')->dropDownList(
                                                        ArrayHelper::map(Mahsulotturi::find()->all(),'nomi','nomi'),
                                                        [
                                                            'prompt'=>'Tashxis kategoriyasini tanlang'
                                                        ]
                                                    ) ?>
                           <?= $form->field($model, 'tashxis_file')->fileInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'olingan_signal')->fileInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'signal_1')->fileInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'signal_2')->fileInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'signal_3')->fileInput(['maxlength' => true]) ?>
                           <?= $form->field($model, 'signal_4')->fileInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                           <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                           <!-- <button type="reset" class="btn btn-light">Chiqish</button> -->
                        </div>
                     </div>
                  </form>
                  <!-- users edit account form ends -->
                  <?php ActiveForm::end(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
$js = <<< JS
 
   $('body').delegate('#inputVil','change', function(e) {
       let vil_id = $(this).val();
          $.ajax({
           url:'/user/region',
           data:{id:vil_id, "_csrf" : yii.getCsrfToken()},
           type:'POST',
           //contentType: "application/json",
           success: function(response){
   
               //$("#inputTuman").prop("disabled",false);
                //$("#inputTuman").css("display","block");
               $("#inputTuman").html(response.option);
               $("#inputTuman").html(response.option);
               //console.log(typeof(response));
               console.log(response);
           }
       });
   });
   
   
   
   
   
   
JS;
$this->registerJs($js);
?>