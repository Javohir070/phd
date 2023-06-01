<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use app\models\Hujjatlar;

/* @var $this yii\web\View */
/* @var $model app\models\Hujjatlar */

// $this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hujjatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>


<br>
<br>

 <div class="material-background"></div>

      <div class="container container-full">
        <div class="ms-paper">
          <? if($error==true){
                  ?>
                  <h3 style="color: #fff;text-align: center;">Ushbu faylni tizimdan yuklab olish imkoni yo'q. Tizim administratoriga bog'laning</h3>
                  <?
                } ?>
          <div class="row">
            
            <div class="col-md-3 ms-paper-menu-left-container">
              <div class="ms-paper-menu-left">

                <h3 class="ms-paper-menu-title">
                  <i class="zmdi zmdi-apps"></i> Bog'cha psixologi
                  <a role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" class="withripple">
                    <i class="zmdi zmdi-menu"></i>
                  </a>
                </h3>

                <div class="panel-menu collapse" id="collapseMenu">
                  <ul class="panel-group ms-collapse-nav" id="components-nav" role="tablist" aria-multiselectable="true">
                    <li class="panel" role="tab" id="e1">
                      <a href="<?=Url::to('/hujjatlar/hujjat?slug='.$slugy.'&&id='.$idd[0])?>"  class="collapsed withripple">
                        <i class="fa fa-list-alt"></i>Xalqaro va qonun hujjatlar</a>
                     
                    </li>
                    <li class="panel" role="tab" id="e2">
                      <a href="<?=Url::to('/hujjatlar/hujjat?slug='.$slugy.'&&id='.$idd[1])?>" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Normativ huquqiy hujjatlar</a>
                    </li>
                    <li class="panel" role="tab" id="e3">
                      <a href="<?=Url::to('/hujjatlar/hujjat?slug='.$slugy.'&&id='.$idd[2])?>" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Tashkiliy metodik hujjatlar</a>
                     
                    </li>
                    <!-- <li class="panel" role="tab" id="e4">
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c4" aria-expanded="true" aria-controls="c4" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> O'zini o'zi rivojlantirish</a>
                      
                    </li>
                    <li class="panel" role="tab" id="e5">
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c5" aria-expanded="true" aria-controls="c5" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Malaka oshirish</a>
                     
                    </li> -->
                  </ul>
                  <!-- ms-collapse-nav -->
                </div>
              </div>
            </div>
            <!-- col-md-3 -->
            <div class="col-md-9 ms-paper-content-container">

                

                <div class="ms-paper-content">

                    <h1 class="text-center"><?=$birinchi_title?></h1>
                    <div class="ms-footbar-block">
                        <!-- <h3 class="ms-footbar-title text-center mb-2">So'ngi yangiliklar</h3> -->
                        <div class="ms-footer-media">
                            <? foreach ($birinchi as $m) : ?>
                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc1.png" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="#"><?=$m->title?></a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> <?=$m->created_date?>
                                    </span>
                                    <span>
                                      <i class="zmdi zmdi-download color-info-light"></i> <?=$m->downloads_fake?>
                                    </span>

                                      <? if($m->narx==0){?>

                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a <?=Yii::$app->user->isGuest ? "href=\"javascript:void(0)\" data-toggle=\"modal\" data-target=\"#ms-account-modal\"" : "href=\"" . Url::to('/hujjatlar/download/'.$m->id) . "\""?> >Hujjatni yuklab olish</a>
                                    </span>

                                    <?} else{?>
                                      <span>
                                        <i class="zmdi color-info">Narxi:</i>
                                         <? echo $m->narx; ?> so'm
                                      </span>

                                <div class="row">
                                  <div class="col-md-2">

                                      <? if(Yii::$app->user->isGuest) :?>

                                          <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb"   data-toggle="modal" data-target="#ms-account-modal">
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>

                                      <? elseif ($m->korzinka) : ?>
                                          <a href="javascript:void(0)" class="btn btn-warning btn-block btn-raised mt-2 no-mb oldin_qushilgan"  >
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? else : ?>
                                          <form action="<?=Url::to('/savdo/korzinka')?>" method="post" style="display: none" id="savdo_form_<?=$m->id?>">
                                              <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                              <input type="hidden" name="current" value="<?=Url::current()?>">
                                              <input type="hidden" name="p_id" value="<?=$m->id?>">
                                              <input type="hidden" name="p_type" value="hujjat">
                                          </form>

                                          <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?=$m->id?>')" id="savdo_form_<?=$m->id?>_btn" class="btn btn-danger btn-block btn-raised mt-2 no-mb" >
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? endif ?>
                                  </div>
                                  <div class="col-md-3">

                                      <form action="<?=Url::to('/savdo/sotib-olish')?>" id="sotib_olish" method="post">
                                          <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                          <input type="hidden" name="p_type" value="hujjat">
                                          <input type="hidden" name="p_id" value="<?=$m->id?>">
                                      </form>
                                    <a <?=Yii::$app->user->isGuest ? "href='javascript:void(0)'  data-toggle='modal' data-target='#ms-account-modal'" : "href='javascript:void(0)' onclick=\"$('#sotib_olish').submit()\""?> class="btn btn-primary btn-block btn-raised mt-2 no-mb" >
                                        <i class="zmdi "></i>
                                        Sotib olish
                                    </a>
                                  </div><div class="col-md-7">
                                  </div>
                                </div>

                                <?}?>

                                  </div>
                                </div>

                                


                              </div>
                            </div>
                          <? endforeach; ?> 
                            

                        </div>
                    </div>


                    <!--<h1 class="text-center"><?=$ikkinchi_title?></h1>
                    <div class="ms-footbar-block">
                        <div class="ms-footer-media">
                            <? foreach ($ikkinchi as $m) : ?>
                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc1.png" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href=""><?=$m->title?></a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> <?=$m->created_date?></span>
                                    <span>

                                      <? if($m->narx==0){?>

                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="<?=Url::to('/hujjatlar/download/'.$m->id)?>">Hujjjatni yuklab olish</a>
                                    </span>

                                    <? } else{?>
                                      <span>
                                        <i class="zmdi zmdi-money color-info">Narxi:</i>
                                         <? echo $m->narx; ?> so'm
                                      </span>

                                      <div class="row">
                                  <div class="col-md-2">
                                      <? if(Yii::$app->user->isGuest) :?>

                                          <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb"   data-toggle="modal" data-target="#ms-account-modal">
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? elseif ($m->korzinka) : ?>
                                          <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb disabled"  >
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? else : ?>
                                          <form action="<?=Url::to('/savdo/korzinka')?>" method="post" style="display: none" id="savdo_form_<?=$m->id?>">
                                              <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                              <input type="hidden" name="current" value="<?=Url::current()?>">
                                              <input type="hidden" name="p_id" value="<?=$m->id?>">
                                              <input type="hidden" name="p_type" value="hujjat">
                                          </form>

                                          <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?=$m->id?>')" id="savdo_form_<?=$m->id?>_btn" class="btn btn-danger btn-block btn-raised mt-2 no-mb" >
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? endif ?>
                                  </div>
                                  <div class="col-md-3">

                                      <form action="<?=Url::to('/savdo/sotib-olish')?>" id="sotib_olish" method="post">
                                          <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                          <input type="hidden" name="p_type" value="hujjat">
                                          <input type="hidden" name="p_id" value="<?=$m->id?>">
                                      </form>
                                    <a <?=Yii::$app->user->isGuest ? "href='javascript:void(0)'  data-toggle='modal' data-target='#ms-account-modal'" : "href='javascript:void(0)' onclick=\"$('#sotib_olish').submit()\""?> class="btn btn-primary btn-block btn-raised mt-2 no-mb" >
                                        <i class="zmdi "></i>
                                        Sotib olish
                                    </a>
                                  </div><div class="col-md-7">
                                  </div>
                                </div>

                                <?}?>

                                  </div>
                                </div>

                              </div>
                            </div>
                          <? endforeach; ?>
                            

                        </div>
                    </div>
                    -->
                    <!--
                    <h1 class="text-center"><?=$uchunchi_title?></h1>
                    <div class="ms-footbar-block">
                        <div class="ms-footer-media">
                            <? foreach ($uchunchi as $m) : ?>
                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc1.png" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="#"><?=$m->title?></a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> <?=$m->created_date?>
                                    </span>

                                      <? if($m->narx==0){?>

                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="<?=Url::to('/hujjatlar/download/'.$m->id)?>">Hujjjatni yuklab olish</a>
                                    </span>

                                    <? } else{?>

                                      <span>

                                      <span>
                                        <i class="zmdi zmdi-money color-info">Narxi:</i>
                                         <? echo $m->narx; ?> so'm
                                      </span>

                                      </span>

                                <div class="row">
                                  <div class="col-md-2">
                                      <? if(Yii::$app->user->isGuest) :?>

                                          <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb"   data-toggle="modal" data-target="#ms-account-modal">
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? elseif ($m->korzinka) : ?>
                                          <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb disabled"  >
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? else : ?>
                                          <form action="<?=Url::to('/savdo/korzinka')?>" method="post" style="display: none" id="savdo_form_<?=$m->id?>">
                                              <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                              <input type="hidden" name="current" value="<?=Url::current()?>">
                                              <input type="hidden" name="p_id" value="<?=$m->id?>">
                                              <input type="hidden" name="p_type" value="hujjat">
                                          </form>

                                          <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?=$m->id?>')" id="savdo_form_<?=$m->id?>_btn" class="btn btn-danger btn-block btn-raised mt-2 no-mb" >
                                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                      <? endif ?>
                                  </div>
                                  <div class="col-md-3">

                                      <form action="<?=Url::to('/savdo/sotib-olish')?>" id="sotib_olish_<?=$m->id?>" method="post">
                                          <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                                          <input type="hidden" name="p_type" value="hujjat">
                                          <input type="hidden" name="p_id" value="<?=$m->id?>">
                                      </form>
                                    <a <?=Yii::$app->user->isGuest ? "href='javascript:void(0)'  data-toggle='modal' data-target='#ms-account-modal'" : "href='javascript:void(0)' onclick=\"$('#sotib_olish_".$m->id."').submit()\""?> class="btn btn-primary btn-block btn-raised mt-2 no-mb" >
                                        <i class="zmdi "></i>
                                        Sotib olish
                                    </a>
                                  </div><div class="col-md-7">
                                  </div>
                                </div>

                                <?}?>
                                  </div>
                                </div>

                                



                              </div>
                            </div>
                          <? endforeach; ?>
                            

                        </div>
                    </div>
                  -->

                </div>
            </div>
            <!-- col-md-9 -->
          </div>
          <!-- row -->
        </div>
        <!-- ms-paper -->
      </div>
