<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Kitoblar */

$this->title = $model->nomi;
$this->params['breadcrumbs'][] = ['label' => 'Kitoblars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kitoblar-view">

   

    <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p>

     <h2>Nomi: <?= Html::encode($this->title) ?></h2>

    <div class="container">
        <div class="row">
              
            <div class="col-md-12">
                <div class="card animated zoomInDown animation-delay-5">
                    <div class="card-block">

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'nomi',
                                'qisqa',
                                'muallif',
                                [
                                        'attribute' => 'rasm',
                                        'format' => 'html',
                                        'label' => 'Rasm',
                                        'value' => function ($data) {
                                            return Html::img('/' . $data['rasm'],
                                                ['width' => '50px']);
                                        },
                                ],
                                // 'fayl',
                                [
                                              'attribute'=>'fayl',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                return Html::a('Faylni yuklab olish(Ushbu joyni tanlang)', Url::to('/kitoblar/download/'.$m->id), [
                                                            //'title' => Yii::t('app', 'Tahrirlash'),
                                                            //'class' => 'btn btn-outline-primary edit-item-btn'
                                                ]);
                                               
                                              }
                                              
                                            ],

                                // [
                                //         'attribute' => 'fayl',
                                //         'format' => 'html',
                                //         'label' => 'Fayl',
                                //         'value' => function ($data) {
                                //             return Html::file('/' . $data['fayl']);
                                //         },
                                // ],
                                'narx',
                                'views',
                                'views_fake',
                                'downloads',
                                'downloads_fake',
                                'created_date',
                                'status',
                            ],
                        ]) ?>
                    </div>
                </div>
                
            </div>
        </div>     
    </div>

</div>
