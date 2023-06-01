<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\FrontendAsset;


FrontendAsset::register($this);

//echo '@webroot';exit;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">

    <meta name="description" content="Psixolog portali">
    <meta name="keywords" content="Psixolog, portali, metodika">
    <meta name="author" content="psixolog-portali.uz">
    
    <meta property="og:url" content="https://psixolog-portali.uz">
    <meta property="og:site_name" content="Psixolog Portali">
    <meta property="og:image" content="http://psixolog-portali.uz/web/frontend/assets/img/logo/logo.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Psixolog Portali - Psixologlar uchun portal">
    <meta property="og:description" content="Maktab va bogcha psixologlar uchun moljallangan psixologik metodikalarni sotib olish, almashish va oqish uchun pportal">

    <?= Html::csrfMetaTags() ?>
    <!-- <title>Psixologik portal</title> -->
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    
    <!-- <marquee width="60%" direction="up" height="100px">
This is a sample scrolling text that has scrolls in the upper direction.
</marquee> -->
<?php $this->beginBody() ?>
<marquee height="20px" style="background-color: #fff; color: red;">Platforma test rejimda ishlamoqda!</marquee>
<!-- <div id="ms-preload" class="ms-preload">
  <div id="status">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
</div> -->

<?= $this->render('@webroot/views/blocks/frontend/modal'); ?>
<?= $this->render('@webroot/views/blocks/frontend/header'); ?>


						<?= $content ?>


<?= $this->render('@webroot/views/blocks/frontend/footer'); ?>
<?= $this->render('@webroot/views/blocks/frontend/leftmenu'); ?>
<?php $this->endBody() ?>

<script>
    $('body').on('click', '.oldin_qushilgan', function (){
        Swal.fire({title: 'Oldin qo\'shilgan',text: 'Bu metodika oldin savatga qo\'shilgan',icon: 'success',showConfirmButton:false,timerProgressBar: true,timer: 5000})

    })
    function to_korzinka(id){
        let current = $(id).find('input[name="current"]').val();
        let p_id = $(id).find('input[name="p_id"]').val();
        let p_type = $(id).find('input[name="p_type"]').val();
        let _csrf = $(id).find('input[name="_csrf"]').val();

        var identy = id;
        $.ajax({
            method: "POST",
            url: "<?=yii\helpers\Url::to('/savdo/korzinka')?>",
            data: { current: current, p_id: p_id, p_type:p_type, _csrf:_csrf }
        }).done(function( msg ) {
            if( msg.status === 'success'){
                $('#korzinka_count').text(msg.count);

                $(identy + '_btn').removeAttr('class');
                $(identy + '_btn').attr('class', 'btn btn-warning btn-block btn-raised mt-2 no-mb oldin_qushilgan');

                $(identy + '_btn').removeAttr('onclick');

                Swal.fire({
                    title: 'Saqlandi',
                    text: 'Savatga qo\'shildi',
                    icon: 'success',
                    showConfirmButton:false,
                    timerProgressBar: true,
                    timer: 3000
                });

            }
        });
    }
</script>
<script>
    $('#click_submit').click(function(){
        $.ajax({
            url: "/site/click/"+$(this).data('order'),
        }).done(function(res) {
            if(res.status){
                $('#click_form').submit();
            }

        });

    })
</script>
</body>
</html>
<?php $this->endPage() ?>
