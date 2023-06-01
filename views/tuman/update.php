<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tuman */

$this->title = 'Tumanni tahrirlash: ' . ' ' . $model->tuman_id;

?>
<div class="header">
     <p>
        <?= Html::a('Ro\'yhatga qaytish', ['index', 'id' => $model->tuman_id], ['class' => 'btn btn-info btn-min-width mr-1 mb-1']) ?>
        
    </p>
</div>
<div class="body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

