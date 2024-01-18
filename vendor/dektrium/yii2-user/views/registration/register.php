<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-content content">
  <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-content">
                    <div class="card-body pb-0">


                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
                                    </div>
                                    <div class="panel-body">
                                        <?php $form = ActiveForm::begin([
                                            'id' => 'registration-form',
                                            'enableAjaxValidation' => true,
                                            'enableClientValidation' => false,
                                        ]); ?>

                                        <?= $form->field($model, 'email') ?>

                                        <?= $form->field($model, 'username') ?>

                                        <?php if ($module->enableGeneratingPassword == false): ?>
                                            <?= $form->field($model, 'password')->passwordInput() ?>
                                        <?php endif ?>

                                        <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block']) ?>

                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                                <p class="text-center">
                                    <?= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) ?>
                                </p>
                            </div>
                        </div>


                        <div class="row">
                        <div class="col-12"></div>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
