<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\models\Bemor;
use app\models\Tavsiya;
/* @var $this yii\web\View */
/* @var $model app\models\Fikrlar */

$this->title = 'Siz kiritgan bemor malumotlar ';
$this->params['breadcrumbs'][] = ['label' => 'Bemor  ko\'rish', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fikrlar-view">

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
                                'last_name',
                                'first_name',
                                'middle_name',
                                'birth_day',
                                'telefon',
                                'email:email',
                                'jinsi',
                                'olingan_signal',
                                'signal_1',
                                'signal_2',
                                'signal_3',
                                'signal_4',
                                'tashxis',
                                'tashxis_file',
                                'manzili',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



 </div>