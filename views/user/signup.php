<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Ro\'yhatdan o\'tish';
?>

<div class="user-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Iltimos, quyidagi maydonlarni to'ldiring:</p>

    <?php $form = ActiveForm::begin(['id' => 'signup-form']); ?>

        <?= $form->field($model, 'last_name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Ro\'yhatdan o\'tish', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
