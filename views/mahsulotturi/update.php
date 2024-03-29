<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahsulotturi */

$this->title = 'Kasalliklar turni tahrirlash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotturis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahsulotturi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="header">
	    <p>
	        <?= Html::a('Ro\'yhatga qaytish', ['index'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1']) ?>
	        
	    </p>
	</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
