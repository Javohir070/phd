<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Логин';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 m-0">
        <div class="card-header border-0">
          <div class="card-title text-center">
            <div class="p-1"><img src="/web/theme/images/logo.png" alt="branding logo"></div>
          </div>
          <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Тизимга кириш</span>
          </h6>
        </div>
        <div class="card-content">
          <div class="card-body">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                //'layout' => 'horizontal',
                 'options' => [
                    'class' => 'form-horizontal form-simple'
                 ]
                
            ]); ?>
            <!-- <form class="form-horizontal form-simple" action="index.html" novalidate> -->
              <fieldset class="form-group position-relative has-icon-left mb-0">
                <!-- <input type="text" class="form-control" id="user-name" placeholder="Your Username" required> -->
                <input type="text" id="loginform-email" class="form-control" name="LoginForm[email]" required="required">
                <div class="form-control-position">
                  <i class="la la-user"></i>
                </div>
              </fieldset>
              <br>
              <fieldset class="form-group position-relative has-icon-left">
                <!-- <input type="password" class="form-control" id="user-password" placeholder="Enter Password" required> -->
                <input type="password" id="loginform-password" class="form-control" name="LoginForm[password]" required="required">
                <div class="form-control-position">
                  <i class="la la-key"></i>
                </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-6 col-12 text-center text-sm-left">
                  <fieldset>
                    <?= $form->field($model, 'rememberMe')->checkbox(['options' => ['class' => 'chk-remember']])->label("Еслаб қолиш") ?>
                    <!-- <input type="checkbox" id="remember-me" class="chk-remember"> -->
                    
                  </fieldset>
                </div>
                <div class="col-sm-6 col-12 text-center text-sm-right"><a href="#"
                    class="card-link">Паролни унутдингизми?</a></div>
              </div>
              <?= Html::submitButton('Логин', ['class' => 'btn btn-info btn-block', 'name' => 'login-button']) ?>
              <!-- <button type="submit" class="btn btn-info btn-block"><i class="ft-unlock"></i> Login</button> -->
            <?php ActiveForm::end(); ?>
          </div>
        </div>
        <div class="card-footer">
          <div class="">
            <!-- <p class="float-xl-left text-center m-0"><a href="recover-password.html" class="card-link">Recover
                password</a></p> -->
            <p class="float-xl-right text-center m-0">Барча ҳуқуқлар ҳимояланган. <a href="#"
                class="card-link">toifareestr.uz</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>



