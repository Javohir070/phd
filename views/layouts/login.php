<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LoginAsset;


LoginAsset::register($this);

//echo '@webroot';exit;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vrachlar malakasi oshirish va attesttasiya markazi">
    <meta name="keywords" content="markaz, attesttasiya, vrachlar">
    <meta name="author" content="malakatoifa.uz">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="vertical-layout vertical-menu 1-column   blank-page  pace-done" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <marquee height="20px" style="background-color: #fff; color: red;">Platforma test rejimda ishlamoqda!</marquee>
<?php $this->beginBody() ?>


<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
