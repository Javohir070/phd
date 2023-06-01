<?php

use yii\helpers\Url;

?>
<script>

</script>
<!-- sb-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
              <? if(Yii::$app->user->isGuest) :?>
                  <a href="javascript:void(0)" class="withripple" data-toggle="modal" data-target="#ms-account-modal"  onclick='setTimeout(function (){$(".ms-slidebar.sb-slidebar.sb-left.sb-style-overlay.sb-active").removeClass("sb-active");$("#uio789").click();},300)'>
                      <i class="zmdi zmdi-account"></i> Login</a>
                  <a href="javascript:void(0)" class="withripple" data-toggle="modal" data-target="#ms-account-modal" onclick='setTimeout(function (){$(".ms-slidebar.sb-slidebar.sb-left.sb-style-overlay.sb-active").removeClass("sb-active");$("#qwe123").click();},300)'>


                      <i class="zmdi zmdi-account-add"></i> Ro'yxatdan o'tish</a>

              <?else:?>
                  <a href="<?= Url::to('/profile/index') ?>"
                     style="width: 170px; ">
                      <?= Yii::$app->user->identity->makeFIO() ?>
                  </a>
                  <a href="<?= Url::to(['/user/sign-out']) ?>" class="withripple">
                      <i class="zmdi zmdi-account"></i>
                      Logout
                  </a>
              <?endif;?>


          </div>
            <?if(Yii::$app->user->isGuest):?>
                <div class="ms-slidebar-login">
                    <a href="javascript:void(0)" class="withripple"  data-toggle="modal" data-target="#ms-account-modal"  onclick='setTimeout(function (){$(".ms-slidebar.sb-slidebar.sb-left.sb-style-overlay.sb-active").removeClass("sb-active");$("#rty456").click();},300)'>
                        <i class="zmdi zmdi-key"></i> Parolni tiklash</a>
                </div>
            <?endif;?>

          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <!-- <span class="ms-logo ms-logo-sm">P</span> -->
              <img style="height: 50px;" src="/web/frontend/assets/img/logo/logo-ramka.png" alt="">
              <h3>Psixologik 
                <span> portal</span>
              </h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li>
            <a class="link" href="<?= Url::to('/site/index') ?>">
              <i class="zmdi zmdi-home"></i> Bosh sahifa</a>
          </li>

          <li>
            <a class="link" href="<?= Url::to('/site/about') ?>">
              <i class="zmdi zmdi-desktop-mac"></i> Loyiha haqida</a>
          </li>

          <li class="panel" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="fa fa-child"></i> Bog'cha psixologi </a>
            <ul id="sc1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch1">
              <li>
                <a href="<?= Url::to('/hujjatlar/hujjat?slug=mtt&&id=1') ?>">Xalqaro va qonun hujjatlar</a>
              </li>
              <li>
                <a href="<?= Url::to('/hujjatlar/hujjat?slug=mtt&&id=2') ?>"> Normativ-huquqiy hujjatlar</a>
              </li>
              <li>
                <a href="<?= Url::to('/hujjatlar/hujjat?slug=mtt&&id=3') ?>"> Tashkiliy-metodik hujjatlar</a>
              </li>
              
            </ul>
          </li>
          <li class="panel" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="fa fa-group"></i> Maktab psixologi </a>
            <ul id="sc2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch2">
              <li>
                <a href="<?= Url::to('/hujjatlar/hujjat?slug=maktab&&id=4') ?>">Xalqaro va qonun hujjatlar</a>
              </li>
              <li>
                <a href="<?= Url::to('/hujjatlar/hujjat?slug=maktab&&id=5') ?>">Normativ-huquqiy hujjatlar</a>
              </li>
              <li>
                <a href="<?= Url::to('/hujjatlar/hujjat?slug=maktab&&id=6') ?>">Tashkiliy-metodik hujjatlar</a>
              </li>

            </ul>
          </li>

          <li>
            <a class="link" href="<?= Url::to('/mahsulot/mahsulotlar') ?>">
              <i class="fa fa-file-pdf-o"></i> Psixologik metodikalar</a>
          </li>
          <li>
            <a class="link" href="<?= Url::to('/site/books') ?>">
              <i class="fa fa-book"></i> Foydali kitoblar</a>
          </li>
        </ul>
        <!-- <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge badge-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge badge-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div> -->
      </div>
    </div>

