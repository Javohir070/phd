<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Foydali kitob';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
 <div class="container">
  <div class="row">

    <div class="col-md-4">

      <div id="" class="ms-carousel ms-carousel-thumb carousel slide animated zoomInUp animation-delay-5" data-ride="carousel" data-interval="0">
        <div class="card card-block">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="/<?=($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/products/p1.jpg'?>" alt="..."> 

            </div>
             
          </div>
        </div>
      </div>

      <div class="card card-success animated fadeInUp animation-delay-10">

        <div class="card-block text-center">
           <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-3">
             <i " aria-hidden="true"><img src="/web/frontend/assets/img/payment/payme.png" alt="Payme" style="width: 100px"></i>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-3">
               <i aria-hidden="true"><img src="/web/frontend/assets/img/payment/click.png" alt="Click" style="width: 100px"></i>
            </div>
            <div class="col-md-2">
            </div>
          </div>
         <!--  <i class="fa fa-5x mr-2" aria-hidden="true"><img src="assets/img/payment/payme.png" alt="Payme"></i>
          <i class="fa fa-5x mr-2" aria-hidden="true"><img src="assets/img/payment/click.png" alt="Click"></i> -->
        </div>
      </div>

    </div>

    <div class="col-md-8">
      <div class="card animated zoomInDown animation-delay-5">
        <div class="card-block">
          <h2><?=$model->nomi?></h2>
          <div class="mb-2 mt-4">
            <div class="row">
              <div class="col-sm-6">
                <span class="mr-2">
                  <i class="zmdi zmdi-hc-lg zmdi-star color-warning"></i>
                  <i class="zmdi zmdi-hc-lg zmdi-star color-warning"></i>
                  <i class="zmdi zmdi-hc-lg zmdi-star color-warning"></i>
                  <i class="zmdi zmdi-hc-lg zmdi-star color-warning"></i>
                  <i class="zmdi zmdi-hc-lg zmdi-star"></i>
                </span>
              </div>
             
            </div>
          </div>
          <p class="lead text-justify" style="padding-left: 15px; padding-right: 15px;">
            <?=$model->qisqa?>              
          </p>
          <ul class="list-unstyled">
            <li>
              <div class="col-md-7">
                 <strong>Kategoriya: </strong>
              </div>
              <div class="col-md-5">
                <span class="color-primary"><?=$model->category_id?></span>
              </div>
            </li>
            <li>
              <div class="col-md-7">
                  <strong>Nashr yili: </strong>
              </div>
              <div class="col-md-5">
               <span class="color-danger"><?=$model->nashr_yili?></span>
               <!-- <h6 class="color-primary">Mavjud emas</h6>  -->
              </div>
            </li>
            <li>
              <div class="col-md-7">
                   <strong>Muallif:</strong>
              </div>
              <div class="col-md-5">
               <span ><?=$model->muallif?></span>
              </div> 
            </li>
            <li>
              <div class="col-md-7">
                   <strong>Ko'rganlar soni:</strong>
              </div>
              <div class="col-md-5">
               <span><?=$model->views_fake?></span>
              </div> 
            </li>
            <li>
              <div class="col-md-7">
                   <strong>Yuklab olganlar soni:</strong>
              </div>
              <div class="col-md-5">
               <span ><?=$model->downloads_fake?></span>
              </div> 
            </li>
            

            
              <?
                    if (!($model->narx==0)) {?>

                     
            <li class="mb-2">
              <div class="col-md-7">
                <strong>Narxi: </strong>  
              </div>
              <div class="col-md-5">
                <h2 class="color-success no-m text-normal"> 
                  <?=$model->narx?> so'm
                </h2>
              </div>                
            </li>

            <?}
              else {
            ?>
            <li class="mb-2">
              <div class="col-md-7">
                <strong>Narxi: </strong>  
              </div>
              <div class="col-md-5">
                <h2 class="color-success no-m text-normal"> 
                  Bepul
                </h2>
              </div>                
            </li>
            <?}?>

          </ul>

          <? if ($model->narx!=0) { ?>
          <div class="row">
            <div class="col-md-2">

                <? if(Yii::$app->user->isGuest) :?>

                    <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb"   data-toggle="modal" data-target="#ms-account-modal">
                        <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                <? elseif ($model->korzinka) : ?>
                    <a href="javascript:void(0)" onclick="Swal.fire({
                                    title: 'Oldin qo\'shilgan',
                                    text: 'Bu kitob oldin savatga qo\'shilgan',
                                    icon: 'success',
                                    showConfirmButton:false,
                                    timerProgressBar: true,
                                    timer: 5000
                                })" class="btn btn-warning btn-block btn-raised mt-2 no-mb"  >
                        <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                <? else : ?>
                    <form action="<?=Url::to('/savdo/korzinka')?>" method="post" style="display: none" id="savdo_form_<?=$model->id?>">
                        <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                        <input type="hidden" name="current" value="<?=Url::current()?>">
                        <input type="hidden" name="p_id" value="<?=$model->id?>">
                        <input type="hidden" name="p_type" value="kitob">
                    </form>

                    <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?=$model->id?>')" id="savdo_form_<?=$model->id?>_btn" class="btn btn-danger btn-block btn-raised mt-2 no-mb" >
                        <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                <? endif ?>
            </div>
            <div class="col-md-10">
                <form action="<?=Url::to('/savdo/sotib-olish')?>" id="sotib_olish" method="post">
                    <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                    <input type="hidden" name="p_type" value="kitob">
                    <input type="hidden" name="p_id" value="<?=$model->id?>">
                </form>
                <a <?=Yii::$app->user->isGuest ? "href='javascript:void(0)'  data-toggle='modal' data-target='#ms-account-modal'" : "href='javascript:void(0)' onclick=\"$('#sotib_olish').submit()\""?> class="btn btn-primary btn-block btn-raised mt-2 no-mb" >
                    <i class="zmdi "></i>
                    Sotib olish
                </a>
            </div>
          </div>

          <?} else {?>
            <div class="row">

              <!-- <div class="col-md-2">
                <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb">
              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
              </div> -->

              <div class="col-md-12">
                 <a href="<?=Url::to('/kitoblar/download/'.$model->id)?>" class="btn btn-primary btn-block btn-raised mt-2 no-mb">
              <i class="zmdi zmdi-upload "></i> Yuklab olish</a>
              </div>

          </div>
        <? }?>
         
        </div>

        

      </div>

      

    </div>
  </div>
  
</div>
<br>
<br>
<br>