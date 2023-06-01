<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kasblar */

$this->title = 'Kasb qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Kasblars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kasblar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
