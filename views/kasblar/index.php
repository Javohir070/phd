<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kasblar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasblar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kasb qo\'shish', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

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

                                // 'id',
                                'nomi',
                                'status',
                               
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
                                        $url =Url::to('/kasblar/view/'.$model->id);
                                        return $url;
                                    }

                                    if ($action === 'update') {
                                        $url =Url::to('/kasblar/update/'.$model->id);
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
