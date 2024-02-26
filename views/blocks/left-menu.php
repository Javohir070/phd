<?
use yii\helpers\Url;
use yii\web\User;
$user = Yii::$app->user->identity;
?>
<!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" navigation-header">
            <span>Admin Panel</span>
            <i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Admin Panels">
            </i>
          </li>
            <li class=" nav-item">
              <a href="#">
                <i class="la la-bar-chart"></i>
                <span class="menu-title" data-i18n="eCommerce">Monitoring</span>
              </a>
            </li>

            <li class=" nav-item">
                <a href="<?=Url::to('/bemor/index')?>">
                    <i class="la la-users"></i>
                    <span class="menu-title" data-i18n="Bank">Bemorlar</span>
                </a>
            </li>


            <li class=" nav-item">
              <a href="<?=Url::to('/user/index')?>">
                <i class="la la-group"></i>
                <span class="menu-title" data-i18n="Crypto">Foydalanuvchilar</span>
              </a>
            </li>
            <li class=" nav-item">
              <a href="<?=Url::to('/sahifalar/index')?>">
                <i class="la la-file-text-o"></i>
                <span class="menu-title" data-i18n="Support Ticket">Yangiliklar</span>
              </a>
            </li>


            <li class=" nav-item">
              <a href="<?=Url::to('/fikrlar')?>">
                <i class="la la-exclamation-circle"></i>
                <span class="menu-title" data-i18n="Bank">Foydalanuvchilar fikri</span>
              </a>
            </li>
            <li class=" nav-item">
              <a href="<?=Url::to('/hujjatlar/index')?>">
                <i class="la la-newspaper-o "></i>
                <span class="menu-title" data-i18n="Project">Hujjatlar</span>
              </a>

            </li>
            <li class=" nav-item">
              <a href="<?=Url::to('/bizningjamoa/index')?>">
                <i class="la la-newspaper-o "></i>
                <span class="menu-title" data-i18n="Project">Bizning jamoa</span>
              </a>
                
            </li>

            <?php if (Yii::$app->user->identity->isAdmin()) { ?>
                    <li class=" nav-item">
                        <a href="<?=Url::to('/mahsulotturi/index')?>">
                          <i class="la la-files-o"></i>
                          <span class="menu-title" data-i18n="Hospital">Kasalliklar turlari </span>
                        </a>
                      </li>
            <?php } else {
                if (Yii::$app->user->identity->role == 'admin') {
                    ?>
                     <li class=" nav-item">
                        <a href="<?=Url::to('/mahsulotturi/index')?>">
                          <i class="la la-files-o"></i>
                          <span class="menu-title" data-i18n="Hospital">Kasalliklar turlari </span>
                        </a>
                      </li>
                <? } ?>
                <?php } ?>

            <li class=" nav-item">
              <a href="#">
                <i class="la la-cog"></i>
                <span class="menu-title" data-i18n="Timelines">Sozlanmalar</span>
              </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="<?=Url::to('/viloyat/index')?>"><i></i><span data-i18n="Timelines Center">Viloyatlar</span></a>
                    </li>
                    <li><a class="menu-item" href="<?=Url::to('/tuman/index')?>"><i></i><span data-i18n="Timelines Left">Tumanlar</span></a>
                    </li>
                    <li><a class="menu-item" href="<?=Url::to('/kasblar/index')?>"><i></i><span data-i18n="Timelines Right">Rollar</span></a>
                    </li>

                </ul>
            </li>
<!--            <li class=" nav-item">-->
<!--              <a href="--><?//=Url::to('/admin/tolov')?><!--">-->
<!--                <i class="la la-newspaper-o"></i>-->
<!--                <span class="menu-title" data-i18n="News Feed">To'lovlar hisoboti</span>-->
<!--              </a>-->
<!--            </li>           -->
            <li class=" nav-item">
              <a href="#">
                <i class="la la-cogs"></i>
                <span class="menu-title" data-i18n="Documentation">Tizim sozlamalari</span>
              </a>
            </li>

        </ul>
      </div>
    </div>

    <!-- END: Main Menu-->