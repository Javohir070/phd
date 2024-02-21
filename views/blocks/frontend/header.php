<?php

use yii\helpers\Url;

?>

<header class="ms-header ms-header-primary">
    <div class="container container-full">
        <div class="ms-title">


            <a href="<?= Url::to('/site/') ?>">
                <!-- <img src="/themes/psixologfrontend/assets/img/logo/logo.png" alt=""> -->
                <!--Default holat-->
                <!--           <span class="ms-logo animated zoomInDown animation-delay-5">P-->
                <img style="height: 50px;" src="/web/frontend/assets/img/logo/logo-ramka.png" alt="">
                <!---->
                <!--          </span>-->
                <h1 class="animated fadeInRight animation-delay-6">Psixologik
                    <span>Portal</span>
                </h1>
            </a>
        </div>
        <div class="header-right">
            <div class="share-menu">
                <ul class="share-menu-list">
                    <li class="animated fadeInRight animation-delay-3">
                        <a href="#" class="btn-circle btn-google">
                            <i class=" fa fa-telegram" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="animated fadeInRight animation-delay-2">
                        <a href="#" class="btn-circle btn-facebook">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                    </li>
                    <li class="animated fadeInRight animation-delay-1">
                        <a href="#" class="btn-circle btn-twitter">
                            <i class="zmdi zmdi-instagram"></i>
                        </a>
                    </li>
                </ul>
                <a href="#" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                    <i class="zmdi zmdi-share"></i>
                </a>
            </div>
            <?php if (Yii::$app->user->isGuest) { ?>
                <a href="<?= Url::to('/site/login') ?>" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
                    <i class="zmdi zmdi-account"></i>
                </a>
                <!-- <a href="#" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8"
                   data-toggle="modal" data-target="#ms-account-modal">
                    <i class="zmdi zmdi-account"></i>
                </a> -->
            <?php } else {
                if (Yii::$app->user->identity->makeUAM() == 'admin' || Yii::$app->user->identity->makeUAM() == 'moderator' ) {
                    ?>
                    <a href="<?= Url::to('/bemor/index') ?>"
                       class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8 aass"
                       style="width: 120px; ">
                        Admin panel
                    </a>
                <? } ?>
                <a href="<?= Url::to('/profile/index') ?>"
                   class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8 aass"
                   style="width: 170px; ">
                    <?= Yii::$app->user->identity->makeFIO() ?>
                </a>

                <a href="<?= Url::to(['/user/sign-out']) ?>"
                   class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8">
                    Chiqish
                </a>
            <?php } ?>

            <form class="search-form animated zoomInDown animation-delay-9">
                <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q"/>
                <label for="search-box">
                    <i class="zmdi zmdi-search"></i>
                </label>
            </form>

            <a <?=Yii::$app->user->isGuest ? "href='javascript:void(0)'  data-toggle='modal' data-target='#ms-account-modal'" : "href='".Url::to('/site/card')."'"?>
               class="btn-ms-menu btn-circle btn-circle-primary  animated zoomInDown animation-delay-10">
                <i class="zmdi zmdi-shopping-cart-plus"><sup style="top: -80%;" id="korzinka_count"><?=Yii::$app->user->isGuest ? 0 : \app\models\Korzinka::find()->join('LEFT JOIN', 'orders', 'korzinka.order_id = orders.id')
                            ->where("(korzinka.user_id = ".Yii::$app->user->id.") and ((order_id is null) or (orders.state != 2))")->count()?></sup></i>
            </a>


            <a href="#"
               class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </div>
    </div>
</header>

<!-- <nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-primary"> -->
<nav class=" navbar-static-top yamm ms-navbar ms-navbar-primary">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img src="/web/frontend/assets/img/logo/logo-ramka.png" width="35px" alt="">
                <!-- <span class="ms-logo ms-logo-sm"></span>  --> <!--Mobil ko'rinishi-->
                <!-- <span class="ms-title">Psixologik
                  <strong>Portal</strong>
                </span> -->
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="<?= Url::to('/site/index') ?>" class="animated fadeIn animation-delay-7" data-name="home">Bosh sahifa
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>

                </li>
                <li class="dropdown">
                    <a href="<?= Url::to('/site/about') ?>" class="animated fadeIn animation-delay-7" data-name="page">Loyiha haqida
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown"
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Bog'cha psixologi
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= Url::to('/hujjatlar/hujjat?slug=mtt&&id=1') ?>">
                                <i class="zmdi zmdi-view-compact"></i> Xalqaro va qonun hujjatlar</a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/hujjatlar/hujjat?slug=mtt&&id=2') ?>">
                                <i class="zmdi zmdi-view-compact"></i> Normativ-huquqiy hujjatlar</a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/hujjatlar/hujjat?slug=mtt&&id=3') ?>">
                                <i class="zmdi zmdi-view-compact"></i> Tashkiliy-metodik hujjatlar</a>
                        </li>
                        <!--  <li>
                <a href="<? #=Url::to('/mahsulot/mahsulotlar')?>">
                  <i class="zmdi zmdi-view-dashboard"></i> Psixologik metodikalar</a>
              </li> -->
                        <!-- <li>
                <a href="<? #=Url::to('/hujjatlar/hujjat')?>">
                  <i class="zmdi zmdi-view-dashboard"></i> Trening dasturlar</a>
              </li>
              <li>
                <a href="<? #=Url::to('/hujjatlar/hujjat')?>">
                  <i class="zmdi zmdi-view-dashboard"></i>O'zini o'zi rivojlantirish</a>
              </li> -->

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown"
                       data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Maktab psixologi
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= Url::to('/hujjatlar/hujjat?slug=maktab&&id=4') ?>">
                                <i class="zmdi zmdi-view-compact"></i> Xalqaro va qonun hujjatlar</a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/hujjatlar/hujjat?slug=maktab&&id=5') ?>">
                                <i class="zmdi zmdi-view-compact"></i> Normativ-huquqiy hujjatlar</a>
                        </li>
                        <li>
                            <a href="<?= Url::to('/hujjatlar/hujjat?slug=maktab&&id=6') ?>">
                                <i class="zmdi zmdi-view-compact"></i> Tashkiliy-metodik hujjatlar</a>
                        </li>
                        <!--  <li>
                <a href="<? #=Url::to('/mahsulot/mahsulotlar')?>">
                  <i class="zmdi zmdi-view-dashboard"></i> Psixologik metodikalar</a>
              </li> -->
                        <!-- <li>
                <a href="<? #=Url::to('/hujjatlar/hujjat')?>">
                  <i class="zmdi zmdi-view-dashboard"></i> Trening dasturlar</a>
              </li>
              <li>
                <a href="<? #=Url::to('/hujjatlar/hujjat')?>">
                  <i class="zmdi zmdi-view-dashboard"></i>O'zini o'zi rivojlantirish</a>
              </li> -->
                        <!-- <li>
                          <a href="#">
                            <i class="zmdi zmdi zmdi-view-stream"></i> Malaka oshirish</a>
                        </li> -->


                    </ul>
                </li>
                <li class="dropdown">
                    <a href="<?= Url::to('/mahsulot/mahsulotlar') ?>" class="animated fadeIn animation-delay-7">Psixologik metodikalar

                    </a>

                </li>

                <li class="dropdown">
                    <a href="<?= Url::to('/site/books') ?>" role="button" data-name="ecommerce"
                       class="animated fadeIn animation-delay-7">Foydali kitoblar

                    </a>

                </li>
                <!-- <li class="dropdown">
            <a href="<? //=Url::to('/site/contact')?>" class="animated fadeIn animation-delay-7">Bog'lanish
              </a>
          
          </li> -->
                <!-- <li class="btn-navbar-menu"><a href="#" class="sb-toggle-left"><i class="zmdi zmdi-menu"></i></a></li> -->
            </ul>
        </div>
        <!-- navbar-collapse collapse -->
        <a href="#" class="sb-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </div>
    <!-- container -->
</nav>

<style type="text/css">
    .aass:hover {
        background: white;
    }
</style>