<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BackendAsset;


BackendAsset::register($this);

//echo '@webroot';exit;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <meta name="description" content="Psixolog portali">
    <meta name="keywords" content="Psixolog, portali, metodika">
    <meta name="author" content="psixolog-portali.uz">

    <meta property="og:url" content="https://psixolog-portali.uz">
    <meta property="og:site_name" content="Psixolog Portali">
    <meta property="og:image" content="http://psixolog-portali.uz/web/frontend/assets/img/logo/logo.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Psixolog Portali - Psixologlar uchun portal">
    <meta property="og:description" content="Maktab va bogcha psixologlar uchun moljallangan psixologik metodikalarni sotib olish, almashish va oqish uchun pportal">



    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<!-- <marquee height="20px" style="background-color: #fff; color: red;">Platforma test rejimda ishlamoqda!</marquee> -->
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php $this->beginBody() ?>

<?= $this->render('@webroot/views/blocks/header'); ?>
<?= $this->render('@webroot/views/blocks/left-menu'); ?>
<div class="app-content content">
  <div class="content-overlay"></div>
      <!-- <div class="content-wrapper"> -->
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="card" style="background-color: #e7e7ed">
                <div class="card-content">
                    <div class="card-body pb-0">
						<?= $content ?>
					</div>
                </div>
            </div>
    	</div>
  	<!-- </div> -->
</div>

<?= $this->render('@webroot/views/blocks/footer'); ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
