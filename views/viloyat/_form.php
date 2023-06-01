<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Viloyat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viloyat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'viloyat_nomi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Saqlash' : 'Saqlash', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success btn-min-width mr-1 mb-1']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
