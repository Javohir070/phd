<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hujjatlar';
$this->params['breadcrumbs'][] = $this->title;
?>


    <!-- <h1><?#= Html::encode($this->title) ?></h1> -->

    <!-- <p>
        <?#= Html::a('Hujjat yaratish', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->


    <div class="header">
        <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>
        <p style="margin-left: 70%;">
            <?= Html::a('Hujjat yaratish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
        </p>
    </div>
    <br>  

    <style>
        .table td, .table th {
        padding: .75rem 1rem !important;
    }

     .pagination li {
    /*padding-right: 10px;*/
    font-size: x-large;
}


.pagination li a {
 margin:0 8px;
 border-radius:100%;
 color:#03a9f4;
 border-color:#e0e0e0;
 position:relative;
 z-index:2;
 -webkit-transition:all ease .5s;
 transition:all ease .5s;
 box-shadow:0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
 border:0;
 padding:8px 14px
}
.pagination li:first-child a,
.pagination li:last-child a {
 border-radius:100%;
}
.pagination li.active a {
 background-color:#03a9f4;
 color: #fff;
 border-color:#03a9f4
}
.pagination li.active a:hover,
.pagination li.active a:focus {
 background-color:#03a9f4
}
.pagination li a:hover,
.pagination li a:focus {
 background-color:#03a9f4;
 border-color:#03a9f4;
 color:#fff;
 box-shadow:0 6px 10px 0 rgba(0,0,0,.14),0 1px 18px 0 rgba(0,0,0,.12),0 3px 5px -1px rgba(0,0,0,.2);
 -webkit-transform:translateY(-4px);
 transform:translateY(-4px)
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
                                    'title',
                                    //'description:ntext',
                                    //'fayl',
                                    // 'turi', 
                                    'narx',
                                    'created_date',
                                    'status',
                                    // [
                                    //     'attribute' => 'rasm',
                                    //     'format' => 'html',
                                    //     'label' => 'Rasm',
                                    //     'value' => function ($data) {
                                    //         return Html::img('/' . $data['rasm'],
                                    //             ['width' => '60px']);
                                    //     },
                                    // ],

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
                                                $url =Url::to('/hujjatlar/view/'.$model->id);
                                                return $url;
                                            }

                                            if ($action === 'update') {
                                                $url =Url::to('/hujjatlar/update/'.$model->id);
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

