<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hujjatlar */

$this->title = 'Hujjat kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Hujjatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


