<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Sahifalar */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sahifalar-view">

    <h1><?= Html::encode($this->title) ?></h1>

  <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p> 

    <div class="container">
        <div class="row">
              
            <div class="col-md-12">
                <div class="card animated zoomInDown animation-delay-5">
                    <div class="card-block">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'title',
                                // 'menyu_id',
                                // 'content:ntext', 
                                // 'rasm',
                                // 'description',
                                'narx',
                                // 'fayl',
                                [
                                              'attribute'=>'fayl',
                                              'format'=>'raw',
                                              'value' => function($m){
                                                return Html::a('Hujjatni yuklab olish(Ushbu joyni tanlang)', Url::to('/hujjatlar/download/'.$m->id), [
                                                            //'title' => Yii::t('app', 'Tahrirlash'),
                                                            //'class' => 'btn btn-outline-primary edit-item-btn'
                                                ]);
                                               
                                              }
                                              
                                            ],
                                             // 'views',
                                // 'views_fake',
                                'downloads',
                                'downloads_fake',
                                'created_date',
                                // 'deleted_date',
                                // 'updated_date',
                                // 'status',
                            ],
                        ]) ?>
                    </div>
                </div>
                
            </div>
        </div>     
    </div>

</div>
 
