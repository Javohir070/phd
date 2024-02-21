<?php
use yii\helpers\Url;
$action = Yii::$app->controller->action->id;
$this->title = Yii::t('app','User profile view');
$user = Yii::$app->user->identity;
?> <style>
  .btn-circle.btn-circle-raised.btn-circle-primary {
    margin-right: 15px;
  }
.card-block1 {
  padding: 20px 5px 20px 5px;
/*padding: 2rem;*/
    padding-top: 1px !important;
    padding-bottom: 1px !important;
}
</style>


<div class="card animated fadeInUp animation-delay-7">
        <div class="ms-hero-bg-primary ms-hero-img-coffee">
          <h3 class="color-white index-1 text-center no-m pt-4"> 
            <?=$user->makeFIO()?>
            </h3>
          <div class="color-medium index-1 text-center np-m">
            <?=$user->email?>
          </div>
              <img src="/<?=($user->avatar)?$user->avatar:'/web/frontend/assets/img/avatar.png'?>" alt="..." class="img-avatar-circle">
        </div>
       <!--  <div>
          <input type="file" id="file">
        </div> -->
        

        <div class="card-block pt- text-center">
          <br>
                <a href="<?=Url::to('/profile/index')?>" class="btn-circle btn-circle-raised btn-circle-primary" title="Asosiy sahifa">
                  <i class="zmdi zmdi-account" ></i>
                </a>
                <a href="<?=Url::to('/profile/edit')?>" class="btn-circle btn-circle-raised btn-circle-primary" title="Profilni tahrirlash">
                  <i class="zmdi zmdi-edit" ></i>
                </a>
                <a href="<?=Url::to('/profile/passwordedit')?>" class="btn-circle btn-circle-raised btn-circle-primary"  title="Parolni o'zgartirish">
                  <i class="fa fa-key"></i>
                </a>
        </div>

      </div>
<!-- 
     <div class="card animated fadeInUp animation-delay-12">
        
        <div class="ms-hero-bg-primary ms-hero-img-mountain">
          <h3 class="color-white index-1 text-center pb-1 pt-1">Sotib olinganlar</h3>
        </div>
        <div class="card-block1">
          <div class="ms-media-list">

              <a href="<?=Url::to('/profile/mymahsulot')?>" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12">
                <i class="zmdi zmdi-open-in-browser"></i> Metodikalar
              </a>

              <a href="<?=Url::to('/profile/mykitob')?>" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12">
                <i class="zmdi zmdi-open-in-browser"></i> Kitoblar
              </a>

              <a href="<?=Url::to('/profile/myhujjat')?>" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12">
                <i class="zmdi zmdi-open-in-browser"></i> Hujjatlar
              </a>
           

          </div>
        </div>

        <div class="ms-hero-bg-primary">
          <h3 class="color-white index-1 text-center pb-1 pt-1">Metodika</h3>
        </div>
        <div class="card-block1">
          <div class="ms-media-list">
            <a href="<?=Url::to('/profile/mahsulotyuklash')?>" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12  tooltip-info" data-toggle="tooltip" data-placement="top"
               title="Siz buning uchun mazkur “Almashish uchun metodika yuborish” bо‘limga Sizda mavjud metodikalarni yuklashingiz hamda yuborishingiz kerak bо‘ladi.">
              <i class="zmdi zmdi-open-in-browser"></i> Almashish uchun yuborish
            </a>

            <a href="<?=Url::to('/profile/hisobot')?>" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12 tooltip-info" data-toggle="tooltip" data-placement="top" title="Metodika almashish – Siz, о‘z faoliyatingizda foydalanayotgan psixologik metodikalarni (test, trening dasturlari, syujetli rolli о‘yin dasturlari va boshq. ) Biz bilan almashishingiz mumkin. ">
              <i class="zmdi zmdi-open-in-browser"></i> Almashish
            </a>

            <a href="<?=Url::to('/profile/mahsulottahrirlash')?>" class="btn btn-primary btn-raised btn-block animated fadeInUp animation-delay-12 tooltip-info" data-toggle="tooltip" data-placement="top" title="Siz yuborgan metodikalar holatini “Yuborilgan psixologik metodikalar” bо‘limida kuzatishingiz mumkin. ">
                <i class="zmdi zmdi-open-in-browser"></i> Yuborilgan metodikalar
            </a>
           

          </div>
        </div>

      </div> -->