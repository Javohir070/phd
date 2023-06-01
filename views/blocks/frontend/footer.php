 <?php

use yii\helpers\Url;

?>
 <aside class="ms-footbar">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ms-footer-col">
          <div class="ms-footbar-block">
            <h3 class="ms-footbar-title">Sayt xaritasi</h3>

            <ul class="list-unstyled ms-icon-list three_cols">
              <li>
                <a href="<?= Url::to('/site/index') ?>">
                  <i class="zmdi zmdi-home"></i> Bosh sahifa</a>
              </li>
              <li>
                <a href="<?= Url::to('/site/about') ?>">
                  <i class="zmdi zmdi-edit"></i> Loyiha haqida</a>
              </li>
              <li> 
                <a href="<?=Url::to('/mahsulot/mahsulotlar')?>">
                  <i class="zmdi zmdi-image-o"></i> Bog'cha psixologiyasi</a>
              </li>
              <li>
                <a href="<?=Url::to('/mahsulot/mahsulotlar')?>">
                  <i class="zmdi zmdi-image-o"></i> Maktab psixologiyasi</a>
              </li>
              <li>
                <a href="<?= Url::to('/site/yangiliklar') ?>">
                  <i class="zmdi zmdi-view-list"></i> Yangiliklar</a>
              </li>
              <li>
                <a href="<?= Url::to('/mahsulot/mahsulotlar') ?>">
                  <i class="zmdi zmdi-time"></i> Psixologik metodikalar</a>
              </li>
              <li>
                <a href="<?= Url::to('/site/books') ?>">
                  <i class="zmdi zmdi-folder"></i> Foydali kitoblar</a>
              </li>
             
              <li>
                <a href="<?= Url::to('/site/contact') ?>">
                  <i class="zmdi zmdi-phone"></i> Bog'lanish</a>
              </li>
            </ul>
          </div>

         <!--  <div class="ms-footbar-block">
            <h3 class="ms-footbar-title">Obuna bo'lish</h3>
            <p class="">Yangi yuklangan psixologik metodikalar haqida xabardor bo'lish uchun obuna bo'ling.</p>
            <form>
              <div class="form-group label-floating mt-2 mb-1">
                <div class="input-group ms-input-subscribe">
                  <label class="control-label" for="ms-subscribe">
                    <i class="zmdi zmdi-email"></i> Email Adress</label>
                  <input type="email" id="ms-subscribe" class="form-control"> </div>
              </div>
              <button class="ms-subscribre-btn" type="button">Obuna bo'lish</button>
            </form>
          </div> -->

        </div>
        <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
          <div class="ms-footbar-block" style="padding: 0 20px">
            <h3 class="ms-footbar-title text-center mb-2">Loyiha haqida</h3>
            <div class="ms-footer-media">
              <div class="media">
                <!-- <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/p75.jpg" alt="..."> </a>
                </div> -->
                <div class="media-body">
                  <h4 class="media-heading">
                    <p class="text-justify">
                    Bu yerda ushbu saytga tegishli bo'lgan ma'lumotlar ketma-ketligi joylashtiriladi. Bu yerda ushbu saytga tegishli bo'lgan ma'lumotlar ketma-ketligi joylashtiriladi. Bu yerda ushbu saytga tegishli bo'lgan ma'lumotlar ketma-ketligi joylashtiriladi. Bu yerda ushbu saytga tegishli bo'lgan ma'lumotlar ketma-ketligi joylashtiriladi. Bu yerda ushbu saytga tegishli bo'lgan ma'lumotlar ketma-ketligi joylashtiriladi.
                  </p>
                  </h4>
                  <!-- <div class="media-footer">
                    <span>
                      <i class="zmdi zmdi-time color-info-light"></i> August 18, 2021</span>
                    <span>
                      <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                      <a href="javascript:void(0)">Yangiliklar</a>
                    </span>
                  </div> -->
                </div>
              </div>
              
              <!-- <div class="media">
                <div class="media-left media-middle">
                  <a href="javascript:void(0)">
                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/p75.jpg" alt="..."> </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading">
                    <a href="javascript:void(0)">Bu yerda ushbu saytga tegishli bo'lgan ma'lumotlar ketma-ketligi joylashtiriladi.</a>
                  </h4>
                  <div class="media-footer">
                    <span>
                      <i class="zmdi zmdi-time color-info-light"></i> August 18, 2021</span>
                    <span>
                      <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                      <a href="javascript:void(0)">Yangiliklar</a>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
          <div class="ms-footbar-block">
            <div class="ms-footbar-title">
              <span class="ms-logo ms-logo-white ms-logo-sm mr-1">P</span>
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
                <a href="mailto:joe@example.com">example@domain.com</a>
              </p>
              <p>
                <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+998 11 123 45 67 </p>
              <p>
                <i class="color-success-light fa fa-fax mr-1"></i>+998 11 123 45 67  </p>
            </address>
          </div>
          <div class="ms-footbar-block">
            <h3 class="ms-footbar-title">Ijtimoiy tarmoqlar</h3>
            <div class="ms-footbar-social">
              <a href="javascript:void(0)" class="btn-circle btn-facebook">
                <i class="zmdi zmdi-facebook"></i>
              </a>
              <a href="javascript:void(0)" class="btn-circle btn-twitter">
                <i class="zmdi zmdi-twitter"></i>
              </a>
              <a href="javascript:void(0)" class="btn-circle btn-youtube">
                <i class="zmdi zmdi-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <footer class="ms-footer">
    <div class="container">
      <p>Copyright &copy; Psixologik portal 2021</p>
    </div>
  </footer>

  <style type="text/css">
    .three_cols li{
      width: 100%;
      text-transform: uppercase;
    }
  </style>