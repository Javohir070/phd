<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
        <h1 class="right-line mb-4">Savatdagi tovarlar ro'yxati</h1>
        <div class="row">
          <div class="col-md-9">
              <? $narxi = 0; ?>

              <? foreach($models as $m) : ?>
              <? $narxi += ($m->p_type == 'kitob')? $m->kitob->narx : ( ($m->p_type == 'hujjat') ? $m->hujjat->narx : $m->mahsulot->narx ?? 0); ?>
              <div class="card mb-1">
                  <table class="table table-responsive table-no-border vertical-center">
                <tr>
                  <td class="hidden-xs">
                    <img src="assets/img/demo/products/m1.png" alt=""> </td>
                  <td>
                    <h4 class=""><?=($m->p_type == 'kitob')? ($m->kitob->nomi ?? '') :( ($m->p_type == 'hujjat') ? $m->hujjat->title : $m->mahsulot->nomi ?? 0)?></h4>
                  </td>
                  <td>
                    <span class="color-success"><?=($m->p_type == 'kitob')? ($m->kitob->narx ?? '') :( ($m->p_type == 'hujjat') ? $m->hujjat->narx : $m->mahsulot->narx ?? 0)?> UZS</span>
                  </td>
                  <td class="hidden-xs">
                      <a href="/savdo/removekorzinka/<?=$m->id?>" class="btn btn-danger">
                          <i class="zmdi zmdi-delete"></i> O'chirish
                      </a>
                  </td>
                </tr>
              </table>
              </div>
              <? endforeach; ?>
          </div>
          <div class="col-md-3">
            <div class="card card-success">
              <div class="card-header">
                <i class="fa fa-list-alt" aria-hidden="true"></i> Xulosa</div>
              <div class="card-block">
                <ul class="list-unstyled">
                  <li>
                      <strong>Narxi: </strong>
                      <?=$narxi?> UZS
                  </li>
                </ul>
                <h3>
                  <strong>To'lovga:</strong>
                  <span class="color-success"><?=$narxi?> UZS</span>
                </h3>
                <a href="/site/tulov" class="btn btn-raised btn-success btn-block btn-raised mt-2 no-mb">
                  <i class="zmdi zmdi-shopping-cart-plus"></i> Xarid qilish</a>
              </div>
            </div>
          </div>
        </div>
      </div>