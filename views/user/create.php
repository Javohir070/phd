<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User1 */

$this->title = Yii::t('app', 'Foydalanuvchi yaratish');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User1s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user1-create">

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
