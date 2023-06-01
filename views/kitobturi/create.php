<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mahsulotturi */

$this->title = 'Kategoriya qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotturis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


    <h1><?= Html::encode($this->title) ?></h1>

    <div class="header">
	     <p>
	        <?= Html::a('Ro\'yhatga qaytish', ['index'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1']) ?>
	        
	    </p>
	</div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


