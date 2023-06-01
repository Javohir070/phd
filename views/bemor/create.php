<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bemor */

$this->title = 'Bemor qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Bemors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bemor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
