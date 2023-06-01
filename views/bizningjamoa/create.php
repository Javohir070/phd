<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BizningJamoa */

$this->title = 'Jamoaga a\'zo qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Bizning Jamoa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bizning-jamoa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
