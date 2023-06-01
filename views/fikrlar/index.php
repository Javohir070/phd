<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foydalanuvchi fikrlari';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="header">
    <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>
    <p style="margin-left: 70%;">
        <?= Html::a('Yangi qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
    </p>
</div>
    <br>  

    <style>
        .table td, .table th {
        padding: .75rem 1rem !important;
    }
    </style>


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

                               // 'id',
                                //'user_id',
                                [
                                    'attribute'=>'Foydalanuvchi',
                                    'value'=>function($data){
                                         return $data->user->makeFIO();
                                    }
                                ],
                                'matn',
                                //'created_date',
                                [
                                    'attribute'=>'Sana',
                                    'value'=>function($data){
                                         return date('d-m-Y',$data->created_date);
                                    }
                                ],
                                //'status',
                                [
                                    'class' => 'yii\grid\ActionColumn',
                                        'header' => 'Status',
                                        'headerOptions' => ['style' => 'color:#337ab7; width:14%;','class' => 'text-center'],
                                        'contentOptions' => ['class' => 'text-center'],
                                        'template' => '{status}',
                                        'buttons' => [
                                         'status' => function ($url, $model) {
                                            if($model->status==1)
                                             return Html::a('Faol', $url, [
                                                         'class' => 'btn btn-outline-success edit-item-btn'
                                                ]);
                                            else
                                            return Html::a('Faol emas', $url, [
                                                         'class' => 'btn btn-outline-danger edit-item-btn'
                                                ]);
                                            },

                                            

                                          ],
                                          'urlCreator' => function ($action, $model, $key, $index) {
                                            if ($action === 'status') {
                                                $url =Url::to('/fikrlar/status/'.$model->id);
                                                return $url;
                                            }

                                        }
                                ],
                                [
                                        'class' => 'yii\grid\ActionColumn',
                                        'header' => 'Harakatlar',
                                        'headerOptions' => ['style' => 'color:#337ab7; width:24%;','class' => 'text-center'],
                                        'contentOptions' => ['class' => 'text-center'],
                                        'template' => '{view}{update}{delete}',
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
                                            
                                            // 'delete' => function ($url, $model) {
                                            //     return Html::a('<i class="ft ft-delete"></i>', $url, [
                                            //                 'title' => Yii::t('app', 'O\'chirish'),
                                            //                 'class' => 'btn btn-outline-danger edit-item-btn'
                                            //     ]);
                                            // }

                                          ],
                                          'urlCreator' => function ($action, $model, $key, $index) {
                                            if ($action === 'view') {
                                                $url =Url::to('/fikrlar/view/'.$model->id);
                                                return $url;
                                            }

                                            if ($action === 'update') {
                                                $url =Url::to('/fikrlar/update/'.$model->id);
                                                return $url;
                                            }
                                            if ($action === 'delete') {
                                                $url =Url::to('/fikrlar/delete/'.$model->id);
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

    