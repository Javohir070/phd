<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\BemorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bemor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'birth_day') ?>

    <?php // echo $form->field($model, 'telefon') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'jinsi') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'olingan_signal') ?>

    <?php // echo $form->field($model, 'signal_1') ?>

    <?php // echo $form->field($model, 'signal_2') ?>

    <?php // echo $form->field($model, 'signal_3') ?>

    <?php // echo $form->field($model, 'signal_4') ?>

    <?php // echo $form->field($model, 'tashxis') ?>

    <?php // echo $form->field($model, 'tashxis_file') ?>

    <?php // echo $form->field($model, 'manzili') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
