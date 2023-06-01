<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tuman */

$this->title = 'Tuman kiritish';

?>

<div class="header">
    <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>
    <p style="margin-left: 70%;">
        <?= Html::a('Ro\'yhatga qaytish', ['index','id' => $model->tuman_id], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
    </p>
</div>
    <br> 


<!-- <div class="header">
     <p>
        <?#= Html::a('Ro\'yhatga qaytish', ['index', 'id' => $model->tuman_id], ['class' => 'btn btn-sm']) ?>
        
    </p>
</div> -->
<div class="body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

