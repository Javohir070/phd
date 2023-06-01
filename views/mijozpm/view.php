<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\MijozPm */

$this->title = 'Mijoz yuborgan psixologik metodikani ko\'rish';
$this->params['breadcrumbs'][] = ['label' => 'Mijoz yuborgan psixologik metodikani ko\'rish', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mijoz-pm-view">

<h1><?= Html::encode($this->title) ?></h1>

  <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p> 


</div>


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
                          
                          
                              <div class="form-body">
                                 <!--  <h4 class="form-section">
                                    <i class="ft-user"></i>
                                     Yangilik kiritish sahifasi</h4> -->
                                  <div class="row">
                                    <?= DetailView::widget([
                                        'model' => $model,
                                        'attributes' => [
                                            // 'id',
                                            'nomi',
                                            'qisqa',
                                            //'fayl',
                                            [
                                              'attribute'=>'fayl',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                return Html::a('Faylni yuklab olish(Ushbu joyni tanlang)', Url::to('/mijozpm/download/'.$m->id), [
                                                            //'title' => Yii::t('app', 'Tahrirlash'),
                                                            //'class' => 'btn btn-outline-primary edit-item-btn'
                                                ]);
                                               
                                              }
                                              
                                            ],
                                             //'user_id',
                                             [
                                                'attribute'=>'user_id',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                return $m->user->makeFIO();
                                               
                                              }
                                             ],
                                             'created_date',
                                            //'status',
                                            [
                                                'attribute'=>'status',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                if($m->status==0) return "Yangi";
                                                if($m->status==1) return "Ko'rib chiqilmoqda";
                                                if($m->status==2) return "Rad etildi";
                                                if($m->status==3) return "Qabul qilindi";
                                                
                                               
                                              }
                                             ]
                                        ],
                                    ]) ?>
                                    
                                  </div>
                                   <?php $form = ActiveForm::begin(['action'=>['/mijozpm/statuschange'],'options' => ['enctype' => 'multipart/form-data']]); ?> 
                                <div class="form-group">
                                    <h3>Harakatning holati</h3>
                                    <?= $form->field($model, 'status')->dropDownList(
                                                        [0=>'Tanlash',1=>'Ko\'rib chiqilmoqda',2=>'Rad etildi',3=>'Qabul qilindi']
                                                    )->label(false) ?>
                                    <?#= $form->field($model,'admin_fikr')->textInput() ?>
                                    <?= $form->field($model, 'admin_fikr')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'kategoriya_id')->dropDownList([1=>'Kategoriya tanlash',2=>'Oltin',3=>'Kumush',4=>'Bronza'])->label('Kategoriya') ?>
                                    <input type="hidden" name="id" value="<?=$model->id?>">
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


   <!--  <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id="users-list-datatable" class="table">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Foydalanuvchi nomi</th>
                                <th>Ism</th>
                                <th>Oxirgi aktivligi</th>
                                <th>tasdiqlangan</th>
                                <th>Rol</th>
                                <th>Holat</th>
                                <th>Tahrirlash</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>300</td>
                                <td><a
                                        href="#">doni3004</a>
                                </td>
                                <td>Doniyor Sobirov</td>
                                <td>30/08/2021</td>
                                <td>Yo'q</td>
                                <td>Xodimlar</td>
                                <td><span class="badge badge-success">Faol</span></td>
                                <td><a href="#"><i
                                        class="ft-edit-1"></i></a></td>
                            </tr>
                            <tr>
                                <td>301</td>
                                <td><a
                                        href="#">zari005</a>
                                </td>
                                <td>Zarina Botirova</td>
                                <td>06/09/2021</td>
                                <td>Ha</td>
                                <td> Foydalanuvchi</td>
                                <td><span class="badge badge-success">Faol</span></td>
                                <td><a href="#"><i
                                        class="ft-edit-1"></i></a></td>
                            </tr>
                           
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> -->


  </section>

