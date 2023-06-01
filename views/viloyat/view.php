<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Viloyat */

$this->title = $model->viloyat_nomi;
$this->params['breadcrumbs'][] = ['label' => 'Viloyats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card animated zoomInDown animation-delay-5">
                    <div class="card-block">

   

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'viloyat_nomi',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
