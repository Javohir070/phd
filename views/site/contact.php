<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Bog\'lanish';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
 <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Bog'lanish</h2>
              </div>
              <div class="card-block">
                <form class="form-horizontal">
                  <fieldset>
                    <div class="form-group">
                      <label for="inputName" class="col-md-2 control-label">Ism</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputName" placeholder="Ismingizni kiriting"> </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-md-2 control-label">Email</label>
                      <div class="col-md-9">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Emailingizni kiriting"> </div>
                    </div>
                    <div class="form-group">
                      <label for="inputSubject" class="col-md-2 control-label">Mavzu</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputSubject" placeholder="Mavzu"> </div>
                    </div>
                    <div class="form-group">
                      <label for="textArea" class="col-md-2 control-label">Xabar</label>
                      <div class="col-md-9">
                        <textarea class="form-control" rows="5" id="textArea" placeholder="Sizning xabaringiz..."></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-9 col-md-offset-2">
                        <button type="submit" class="btn btn-raised btn-primary">Yuborish</button>
                        <button type="button" class="btn btn-danger">Bekor qilish</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-block">
                <div class="text-center mb-2">
                  <span class="ms-logo ms-logo-sm mr-1">P</span>
                  <h3 class="no-m ms-site-title">Psixologik
                    <span>Portal</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> Toshkent, A.Temur ko'chasi, 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> O'zbekiston, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.uz">example@domain.uz</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+998 11 123 45 67 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+998 11 123 45 67</p>
                </address>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-map"></i>Xarita</h3>
              </div>
              <iframe width="100%" height="340" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=central%2Bpark&amp;ie=UTF8&amp;z=12&amp;t=m&amp;iwloc=near&amp;output=embed"></iframe>
            </div>
          </div>
        </div>
      </div>
