<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
 
$this->title = 'Mijoz psixologik metodikalari';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="header">
        <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>
        <p style="margin-left: 70%;">
            <?= Html::a('Mijoz psixologik metodika qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
        </p>
    </div>
    <br>

<style>
    .table td, .table th {
    padding: .75rem 1rem !important;
}
</style>
<!-- <div class="user1-index">  -->
<div class="content-body">

    <div class="users-list-table">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'tableOptions'=>['class'=>'table'],
                                'summary'=> "",
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                        //'id',
                                        'nomi',
                                        'qisqa',
                                        //'fayl',
                                        [
                                                'attribute'=>'user_id',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                return $m->user->makeFIO();
                                               
                                              }
                                             ],
                                        [
                                                'attribute'=>'status',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                if($m->status==0) return "Yangi";
                                                if($m->status==1) return "Ko'rib chiqilmoqda";
                                                if($m->status==2) return "Rad etildi";
                                                if($m->status==3) return "Qabul qilindi";
                                                
                                               
                                              }
                                             ],
                                        //'created_date',
                                        //'status',

                                    [
                                            'class' => 'yii\grid\ActionColumn',
                                            'header' => 'Harakatlar',
                                            'headerOptions' => ['style' => 'color:#337ab7; width:24%;','class' => 'text-center'],
                                            'contentOptions' => ['class' => 'text-center'],
                                            'template' => '{view}',

                                            'buttons' => [

                                             'view' => function ($url, $model) {
                                                 return Html::a('<i class="ft ft-eye"></i>', $url, [
                                                             'title' => Yii::t('app', 'Ko\'rish'),
                                                             'class' => 'btn btn-outline-success edit-item-btn'
                                                    ]);
                                                },

                                                'update' => function ($url, $model) {
                                                    return Html::a('<i class="ft ft-edit"></i>', $url, [
                                                                'title' => Yii::t('app', 'Tahrirlash'),
                                                                'class' => 'btn btn-outline-primary edit-item-btn'
                                                    ]);
                                                },

                                                'delete' => function ($url, $model) {
                                                    return Html::a('<i class="ft ft-delete"></i>', $url, [
                                                                'title' => Yii::t('app', 'O\'chirish'),
                                                                'class' => 'btn btn-outline-danger edit-item-btn'
                                                    ]);
                                                }

                                              ],
                                              'urlCreator' => function ($action, $model, $key, $index) {
                                                if ($action === 'view') {
                                                    $url =Url::to('/mijozpm/view/'.$model->id);
                                                    return $url;
                                                }

                                                if ($action === 'update') {
                                                    $url =Url::to('/mijozpm/update/'.$model->id);
                                                    return $url;
                                                }
                                                if ($action === 'delete') {
                                                    $url ='#';
                                                    return $url;
                                                }

                                            }

                                        ],
                                    ],
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>


</div>