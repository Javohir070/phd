<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fikrlar */

$this->title = 'Foydalanuvchilar fikrini tahrirlash';
$this->params['breadcrumbs'][] = ['label' => 'Foydalanuvchilar fikrini tahrirlash', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fikrlar-update">

    <!-- <h1><?#= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
