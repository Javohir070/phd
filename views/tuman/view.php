<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Viloyat */

$this->title = $model->tuman_id;
$this->params['breadcrumbs'][] = ['label' => 'Tumanlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="header">
    <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>

    <p style="margin-left: 55%;">

        <?= Html::a('Ro\'yhatga qaytish', ['index'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->tuman_id], ['class' => 'btn btn-info btn-min-width mr-1 mb-1']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->tuman_id], [
            'class' => 'btn btn-info btn-min-width mr-1 mb-1',
            'data' => [
                'confirm' => 'Rostdan ham o\'chirmoqchimisiz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
</div>
    <br> 

<div class="container">
    <div class="row">
          
        <div class="col-md-12">
            <div class="card animated zoomInDown animation-delay-5">
                <div class="card-block">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'tuman_id',
                            'viloyat.viloyat_nomi',
                            'tuman_nomi',
                        ],
                    ]) ?>
                </div>
            </div>
            
        </div>
    </div>     
</div>


