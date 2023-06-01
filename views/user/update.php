<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User1 */

$this->title = Yii::t('app', 'Foydalanuvchi ma\'lumotlarini tahrirlash:', [
    'name' ,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user1-update">

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
