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
    <link rel="apple-touch-icon" href="/web/backend/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/web/backend/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="/web/backend/app-assets/css/pages/login-register.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page  pace-done" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <marquee height="20px" style="background-color: #fff; color: red;">Platforma test rejimda ishlamoqda!</marquee>
<?php $this->beginBody() ?>


<?= $content ?>

<?php $this->endBody() ?>
<script src="/web/backend/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/web/backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="/web/backend/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/web/backend/app-assets/js/core/app-menu.min.js"></script>
    <script src="/web/backend/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/web/backend/app-assets/js/scripts/forms/form-login-register.min.js"></script>
    <!-- END: Page JS-->
</body>
</html>
<?php $this->endPage() ?>
