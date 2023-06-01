<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Viloyat */

$this->title = 'Create Viloyat';

?>
<div class="header">
     <p>
        <?= Html::a('Ro\'yhatga qaytish', ['index'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1']) ?>
        
    </p>
</div>
<div class="body">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>