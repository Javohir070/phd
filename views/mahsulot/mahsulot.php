<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use app\models\Tavsiya;

/* @var $this yii\web\View */
/* @var $model app\models\Psixologik metodika */

//$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Psixologik metodikas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<br>
<br>
<div class="container">
    <div class="row">

        <div class="col-md-4">

            <div id="" class="ms-carousel ms-carousel-thumb carousel slide animated zoomInUp animation-delay-5"
                 data-ride="carousel" data-interval="0">
                <div class="card card-block">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="/<?= ($model->rasm) ? $model->rasm : 'web/frontend/assets/img/demo/products/p1.jpg' ?>"
                                 alt="...">

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
                            <i " aria-hidden="true"><img src="/web/frontend/assets/img/payment/payme.png" alt="Payme"
                                                         style="width: 100px"></i>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-3">
                            <i aria-hidden="true"><img src="/web/frontend/assets/img/payment/click.png" alt="Click"
                                                       style="width: 100px"></i>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <!--  <i class="fa fa-5x mr-2" aria-hidden="true"><img src="assets/img/payment/payme.png" alt="Payme"></i>
                     <i class="fa fa-5x mr-2" aria-hidden="true"><img src="assets/img/payment/click.png" alt="Click"></i> -->
                </div>
            </div>

            <div class="card card-success animated fadeInUp animation-delay-10">

                <a href="<?= Url::to('/mahsulot/tavsiya/' . $model->id) ?>"
                   class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                    <i class="zmdi zmdi-upload "></i> Tavsiya etaman</a>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card animated zoomInDown animation-delay-5">
                <div class="card-block">
                    <h2><?= $model->nomi ?></h2>
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
                    <div class="lead text-justify" style="padding-left: 15px; padding-right: 15px;">
                        <?= $model->qisqa ?>
                    </div>
                    <ul class="list-unstyled">
                        <li>
                            <div class="col-md-7">
                                <strong>Kategoriya: </strong>
                            </div>
                            <div class="col-md-5">
                                <span class="color-primary"><?= $model->mahsulotturi ?></span>
                            </div>
                        </li>
                        <!-- <li>
                    <div class="col-md-7">
                        <strong>Metodikaning natijalar interpretatsiyasi to'plamda: </strong>
                    </div>
                    <div class="col-md-5">
                     <span class="color-danger">Mavjud<? #if($model->motodik_natija==2){?> emas<? #}?></span>
                     
                    </div>
                  </li> -->
                        <li>
                            <div class="col-md-7">
                                <strong>Metodikani o'tkazish bo'yicha psixolog uchun yo'riqnoma:</strong>
                            </div>
                            <div class="col-md-5">
                                <span class="color-success">Mavjud<? if ($model->yoriqmona == 2) { ?> emas<? } ?></span>
                            </div>
                        </li>
                        <li class="mb-2">
                            <div class="col-md-7">
                                <strong>Yosh chegarasi: </strong>
                            </div>
                            <div class="col-md-5">
                                <span class="color-primary"><?= $model->yosh ?></span>
                            </div>
                        </li>

                        <li class="mb-2">
                            <div class="col-md-7">
                                <strong>Ko'rishlar soni: </strong>
                            </div>
                            <div class="col-md-5">
                                <span class="color-primary"><?= ($model->views_fake == 0) ? $model->views : $model->views_fake ?></span>
                            </div>
                        </li>
                        <li class="mb-2">
                            <div class="col-md-7">
                                <strong>Sotib olganlar soni: </strong>
                            </div>
                            <div class="col-md-5">
                                <span class="color-primary"><?= ($model->downloads_fake == 0) ? $model->views : $model->downloads_fake ?></span>
                            </div>
                        </li>

                        <li class="mb-2">
                            <div class="col-md-7">
                                <strong>Narxi: </strong>
                            </div>
                            <div class="col-md-5">
                                <h2 class="color-success no-m text-normal">
                                    <? if ($model->narx == 0) {
                                        echo "Bepul";
                                    } else {
                                        echo $model->narx;
                                    } ?>
                                </h2>
                            </div>
                        </li>

                    </ul>


                    <? if ($model->narx != 0) { ?>

                        <div class="row">
                            <div class="col-md-2">
                                <? if (Yii::$app->user->isGuest) : ?>

                                    <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb"
                                       data-toggle="modal" data-target="#ms-account-modal">
                                        <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                <? elseif ($model->korzinka) : ?>
                                    <a href="javascript:void(0)" onclick="Swal.fire({
                                    title: 'Oldin qo\'shilgan',
                                    text: 'Bu metodika oldin savatga qo\'shilgan',
                                    icon: 'success',
                                    showConfirmButton:false,
                                    timerProgressBar: true,
                                    timer: 5000
                                })" class="btn btn-warning btn-block btn-raised mt-2 no-mb">
                                        <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                <? else : ?>
                                    <form action="<?= Url::to('/savdo/korzinka') ?>" method="post" style="display: none"
                                          id="savdo_form_<?= $model->id ?>">
                                        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>"
                                               value="<?= Yii::$app->request->getCsrfToken(); ?>"/>
                                        <input type="hidden" name="current" value="<?= Url::current() ?>">
                                        <input type="hidden" name="p_id" value="<?= $model->id ?>">
                                        <input type="hidden" name="p_type" value="metodika">
                                    </form>

                                    <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?= $model->id ?>')"
                                       id="savdo_form_<?= $model->id ?>_btn"
                                       class="btn btn-danger btn-block btn-raised mt-2 no-mb">
                                        <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                                <? endif ?>
                            </div>
                            <div class="col-md-10">
                                <!-- <a href="#" class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                             <i class="zmdi "></i> Sotib olish</a> -->

                                <form action="<?= Url::to('/savdo/sotib-olish') ?>" id="sotib_olish" method="post">
                                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>"
                                           value="<?= Yii::$app->request->getCsrfToken(); ?>"/>
                                    <input type="hidden" name="p_type" value="metodika">
                                    <input type="hidden" name="p_id" value="<?= $model->id ?>">
                                </form>
                                <a <?= Yii::$app->user->isGuest ? "href='javascript:void(0)'  data-toggle='modal' data-target='#ms-account-modal'" : "href='javascript:void(0)' onclick=\"$('#sotib_olish').submit()\"" ?>
                                        class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi "></i>
                                    Sotib olish
                                </a>
                            </div>
                        </div>

                    <? } else { ?>
                        <div class="row">

                            <div class="col-md-12">
                                <a href="<?= Url::to('/mahsulot/download/' . $model->id) ?>"
                                   class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                                    <i class="zmdi zmdi-upload "></i> Yuklab olish</a>
                            </div>

                        </div>
                    <? } ?>

                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingOne2">
                        <h4 class="panel-title">
                            <a class="collapsed withripple" role="button" data-toggle="collapse"
                               data-parent="#accordion2" href="#collapseOne2" aria-expanded="false"
                               aria-controls="collapseOne2">
                                <i class="zmdi zmdi-accounts"></i> Mazkur metodikani tavsiya etganlar ro'yxati</a>
                        </h4>
                    </div>

                    <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingOne2">
                        <div class="panel-body">
                            <div class="bs-example">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ismi</th>
                                        <th>Familiyasi</th>
                                        <th>Kasbi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <? $i = 1;
                                    if (($tavsiya = Tavsiya::find()->where(['mahsulot_id' => $model->id])->all()) !== null) {
                                        foreach ($tavsiya as $t) { ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $t->user->first_name ?></td>
                                                <td><?= $t->user->last_name ?></td>
                                                <td><?= $t->user->kasbi->nomi ?></td>
                                            </tr>


                                        <? }
                                    } else { ?>
                                        Ushbu metodika hali tavsiya qilinmagan
                                    <? } ?>
                                    <!-- <tr>
                                      <td>1</td>
                                      <td>Sarvar</td>
                                      <td>Makhmudjanov</td>
                                      <td>Bog'cha psixologi</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Akmal</td>
                                      <td>Aliqulov</td>
                                      <td>Maktab psixologi</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Azim</td>
                                      <td>Aliyev</td>
                                      <td>Maktab o'qituvchisi</td>
                                    </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <style>
        .card-block p {
            height: 100px;
        }
    </style>

    <h2 class="mt-4 mb-4 right-line">O'xshash Psixologik metodikalar</h2>
    <div class="row">
        <? foreach ($aloqa as $v) { ?>

            <div class="col-md-4">
                <div class="card ms-feature wow zoomInUp animation-delay-3">
                    <div class="card-block text-center">
                        <a href="javascript:void(0)">
                            <img src="/<?= ($v->rasm) ? $v->rasm : 'web/frontend/assets/img/pdf/p2.png' ?>" alt=""
                                 class="img-responsive center-block">
                        </a>
                        <h4 class="text-normal text-center" style="height: 40px"><?= $v->nomi ?></h4>

                        <?#=mb_substr($v->qisqa, 0, 100, 'UTF-8')?>

                       <?#=(mb_strlen($v->qisqa, 'UTF-8') > 150) ? '...' : ''?>

                        <div class="mt-2">
                            <span class="mr-2">
                                <i class="zmdi zmdi-star color-warning"></i>
                                <i class="zmdi zmdi-star color-warning"></i>
                                <i class="zmdi zmdi-star color-warning"></i>
                                <i class="zmdi zmdi-star color-warning"></i>
                                <i class="zmdi zmdi-star"></i>
                            </span>
                          <span class="ms-tag ms-tag-success">  
                            <? if ($v->narx == 0) {
                                echo "Bepul";
                            } else {
                                echo $v->narx;
                            } ?>
                          </span>
                        </div>

                        <? if ($v->narx != 0) { ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <? if (Yii::$app->user->isGuest) : ?>

                                        <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb" data-toggle="modal" data-target="#ms-account-modal">
                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                        </a>
                                    <? elseif ($v->korzinka) : ?>
                                        <a href="javascript:void(0)" onclick="Swal.fire({
                                            title: 'Oldin qo\'shilgan',
                                            text: 'Bu metodika oldin savatga qo\'shilgan',
                                            icon: 'success',
                                            showConfirmButton:false,
                                            timerProgressBar: true,
                                            timer: 5000 })" 
                                            class="btn btn-warning btn-block btn-raised mt-2 no-mb">
                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                        </a>
                                    <? else : ?>
                                        <form action="" method="post" style="display: none"
                                              id="savdo_form_<?= $v->id ?>">
                                            <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>"
                                                   value="<?= Yii::$app->request->getCsrfToken(); ?>"/>
                                            <input type="hidden" name="current" value="<?= Url::current() ?>">
                                            <input type="hidden" name="p_id" value="<?= $v->id ?>">
                                            <input type="hidden" name="p_type" value="metodika">
                                        </form>

                                        <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?= $v->id ?>')"
                                           id="savdo_form_<?= $v->id ?>_btn"
                                           class="btn btn-danger btn-block btn-raised mt-2 no-mb">
                                            <i class="zmdi zmdi-shopping-cart-plus"></i>
                                        </a>
                                    <? endif ?>
                                </div>

                                <div class="col-md-9">
                                    <a href="<?= Url::to('/mahsulot/mahsulot/' . $v->id) ?>"
                                       class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                                        <i class="zmdi zmdi-assignment"></i> Batafsil
                                    </a>
                                </div>
                            </div>
                        <? } else { ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="<?= Url::to('/mahsulot/download/' . $v->id) ?>"
                                       class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                                        <i class="zmdi zmdi-upload "></i> Yuklab olish
                                    </a>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>

        <? } ?>
    </div>
</div>