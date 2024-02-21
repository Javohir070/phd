<?php
use yii\helpers\Url;
?>
<!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item">
            	<a class="navbar-brand" href="<?=Url::to('/admin/index')?>">
<!--            		<img class="brand-logo" alt="modern admin logo" src="/web/frontend/assets/img/logo/logo.png">-->
                <h3 class="brand-text">Bemorlar ro'yxati</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Qidirish..." tabindex="0" data-search="template-list">
                  <div class="search-input-close"><i class="ft-x"></i></div>
                  <ul class="search-list"></ul>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <!-- <li class="dropdown dropdown-language nav-item">
                <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flag-icon flag-icon-uz"></i>
                  <span class="selected-language">Uzbek</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <a class="dropdown-item" href="#" data-language="uz">
                    <i class="flag-icon flag-icon-uz"></i> Uzbek
                  </a>
                  <a class="dropdown-item" href="#" data-language="ru">
                    <i class="flag-icon flag-icon-ru"></i> Russian
                  </a>
                  <a class="dropdown-item" href="#" data-language="gb">
                    <i class="flag-icon flag-icon-gb"></i> English
                  </a>
                </div>
              </li> -->
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Xabarlar</span></h6><span class="notification-tag badge badge-warning float-right m-0">4ta yangi xabar</span>
                  </li>
                  <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="/web/theme/images/profile-image.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Admin</h6>
                          <p class="notification-text font-small-3 text-muted">Tizimga xush kelibsiz. zavqlaning.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Bugun</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="/web/theme/images/profile-image.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Admin</h6>
                          <p class="notification-text font-small-3 text-muted">Tizimda yangilanishlar mavjud.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Bugun</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="/web/theme/images/profile-image.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Admin</h6>
                          <p class="notification-text font-small-3 text-muted">Tizim ishga tushdi. tabriklaymiz.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Bugun</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="/web/theme/images/profile-image.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Admin</h6>
                          <p class="notification-text font-small-3 text-muted">Vrachlarni attestatsiyadan o'tkazish axborot tizimi.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Bugun</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Barcha xabarlarni o'qish</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">
                <?if (!Yii::$app->user->isGuest){?>
                <?=Yii::$app->user->identity->makeFIO()?>
                (<?=Yii::$app->user->identity->makeUAM()?>)
                  <?}?>
                </span><span class="avatar avatar-online"><img src="/web/backend/images/profile-image.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Profil</a><a class="dropdown-item" href="#"><i class="ft-clipboard"></i> Todo</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Vazifalar</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=Url::to('/site/logout')?>" data-method="post"><i class="ft-power"></i> Chiqish</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->