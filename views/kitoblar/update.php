<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kitoblar */

$this->title = 'Foydali kitobni tahrirlash: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Foydali kitobni tahrirlash', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kitoblar-update">

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
