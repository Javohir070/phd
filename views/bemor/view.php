<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bemor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bemors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bemor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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
            'created_at',
            'updated_at',
            'olingan_signal',
            'signal_1',
            'signal_2',
            'signal_3',
            'signal_4',
            'tashxis',
            'tashxis_file',
            'manzili',
            'avatar',
        ],
    ]) ?>

</div>
