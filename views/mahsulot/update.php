<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahsulot */

$this->title = 'Psixologik metodikani tahrirlash: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Psixologik metodikani tahrirlash', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mahsulot-update">

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
