<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BizningJamoa */

$this->title = 'Bizning Jamoa: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Bizning Jamoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bizning-jamoa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
