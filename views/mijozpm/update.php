<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MijozPm */

$this->title = 'Mijoz yuborgan psixologik metodikani tahrirlash' ;
$this->params['breadcrumbs'][] = ['label' => 'Mijoz yuborgan psixologik metodikani tahrirlash', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

 <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        
    </p> 

<div class="mijoz-pm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
