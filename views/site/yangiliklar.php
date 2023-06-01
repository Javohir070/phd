<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Yangiliklar';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="material-background"></div>
      <div class="container text-center mb-6">
        <<h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Yangiliklar</h1>
          <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">Psixologik portal yangiliklarining to'liq sahifasi
            <span class="colorStar">kuzating</span> va
            <span class="colorStar">baho bering</span>.
          </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <?foreach($dataProvider->models as $model):?>
            <article class="card card-primary wow zoomInRight animation-delay-5 mb-4">
              <div class="card-block card-block-big">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="/<?=isset($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/post4.jpg'?>" alt="" class="img-responsive mb-4"> </div>
                  <div class="col-lg-6 mb-4">
                    <h3 class="no-mt">
                      <a href="<?=Url::to('/site/yangilik/'.$model->id)?>"><?=$model->title?></a>
                    </h3>
                    <p><?=$model->qisqa?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <img src="/web/frontend/assets/img/avatar.png" alt="..." class="img-circle mr-1" style="max-width: 50px"> 
                    <a href="">Admin</a>
                    
                    <a href="" class="ms-tag ms-tag-info"><?=$model->menyu_id?></a>
                    <span class="ml-1 hidden-xs">
                      <i class="zmdi zmdi-time mr-05 color-info"></i>
                      <span class="color-medium-dark"><?=$model->created_date?></span>
                    </span>
                  </div>
                  <div class="col-lg-4 text-right">
                    <a href="<?=Url::to('/site/yangilik/'.$model->id)?>" class="btn btn-primary btn-raised btn-block animate-icon">Batafsil
                      <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
            <? endforeach; ?>




            


            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="javascript:void(0)" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active">
                  <a href="javascript:void(0)">1</a>
                </li>
                <li>
                  <a href="javascript:void(0)">2</a>
                </li>
                <li>
                  <a href="javascript:void(0)">3</a>
                </li>
                <li>
                  <a href="javascript:void(0)">4</a>
                </li>
                <li>
                  <a href="javascript:void(0)" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
            
          </div>

        </div>
      </div>