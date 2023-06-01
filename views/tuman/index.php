<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ViloyatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tumanlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="header">
    <h2  style="float: left;"><?= Html::encode($this->title) ?></h2>
    <p style="margin-left: 70%;">
        <?= Html::a('Yangi tuman qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
    </p>
</div>

<div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            //'filterModel' => $searchModel,
                            'tableOptions'=>['class'=>'table table-xl mb-0'],
                            'summary'=> "",
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'viloyat.viloyat_nomi',
                                'tuman_nomi',
                                'status' => [
                                    'headerOptions' => ['style' => 'color:#337ab7; width:15%;','class' => 'text-center'],
                                    'contentOptions' => ['class' => 'text-center'],
                                    'header' => "Status",
                                    'attribute'=>'status',
                                    //'filter'=>'sa',
                                        'content'=>function($data){
                                        return ($data->status==1)?"Faol":"Faol emas";
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
                                    'delete' => function ($url, $model) {
                                        return Html::a('<i class="ft ft-delete"></i>', $url, [
                                                    'title' => Yii::t('app', 'O\'chirish'),
                                                    'class' => 'btn btn-outline-danger edit-item-btn'
                                        ]);
                                    }

                                  ],
                                  'urlCreator' => function ($action, $model, $key, $index) {
                                    if ($action === 'view') {
                                        $url =Url::to('/tuman/view/'.$model->tuman_id);
                                        return $url;
                                    }

                                    if ($action === 'update') {
                                        $url =Url::to('/tuman/update/'.$model->tuman_id);
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

<?
$this->registerJs('
    
    $(".pagination li").addClass( "btn btn-icon btn-outline-primary" );

    ');
$this->registerCss('
    .edit-item-btn{
        margin-left:4px;
    }
    ');
?>
