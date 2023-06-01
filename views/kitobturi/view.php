<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Mahsulotturi */

$this->title = 'Mahsulotturi ko\'rish';
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotturi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this); 
?>


<div class="header">
     <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p>
</div>

<div class="mahsulotturi-view">

    <h1><?= Html::encode($this->title) ?></h1>
    
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
                                'status',
                            ],
                        ]) ?>
                    </div>
                </div>
                
            </div>
        </div>     
    </div>

</div>
