<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hujjatlar */

// $this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hujjatlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


 <div class="material-background"></div>

      <div class="container container-full">
        <div class="ms-paper">
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
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c1" aria-expanded="true" aria-controls="c1" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Normativ huquqiy hujjatlar</a>
                     
                    </li>
                    <li class="panel" role="tab" id="e2">
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c2" aria-expanded="true" aria-controls="c2" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Tashkiliy hujjatlar</a>
                    </li>
                    <li class="panel" role="tab" id="e3">
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c3" aria-expanded="true" aria-controls="c3" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Psixolog attestatsiyasi</a>
                     
                    </li>
                    <li class="panel" role="tab" id="e4">
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c4" aria-expanded="true" aria-controls="c4" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> O'zini o'zi rivojlantirish</a>
                      
                    </li>
                    <li class="panel" role="tab" id="e5">
                      <a role="button" data-toggle="collapse" data-parent="#components-nav" href="#c5" aria-expanded="true" aria-controls="c5" class="collapsed withripple">
                        <i class="fa fa-list-alt"></i> Malaka oshirish</a>
                     
                    </li>
                  </ul>
                  <!-- ms-collapse-nav -->
                </div>
              </div>
            </div>
            <!-- col-md-3 -->
            <div class="col-md-9 ms-paper-content-container">
                <div class="ms-paper-content">

                    <h1 class="text-center">Normativ huquqiy hujjatlar</h1>

                    <div class="ms-footbar-block">
                        <!-- <h3 class="ms-footbar-title text-center mb-2">So'ngi yangiliklar</h3> -->
                        <div class="ms-footer-media">
                            <? foreach ($models as $m) : ?>
                              
                            
                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc1.png" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="javascript:void(0)"><?=$m->title?></a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> <?=$m->created_date?></span>
                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="javascript:void(0)">Bog'cha psixologi</a>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <? endforeach; ?>
                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc1.jpg" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="javascript:void(0)">Bu yerda ushbu sahifadagi kerakli hujjat sarlavhasi keltiriladi</a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> August 18, 2021</span>
                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="javascript:void(0)">Bog'cha psixologi</a>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc3.jpg" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="javascript:void(0)">Bu yerda ushbu sahifadagi kerakli hujjat sarlavhasi keltiriladi</a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> August 18, 2021</span>
                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="javascript:void(0)">Bog'cha psixologi</a>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc4.jpg" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="javascript:void(0)">Bu yerda ushbu sahifadagi kerakli hujjat sarlavhasi keltiriladi</a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> August 18, 2021</span>
                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="javascript:void(0)">Bog'cha psixologi</a>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="alert alert-light alert-info">
                              <div class="media">
                                <div class="media-left media-middle">
                                  <a href="javascript:void(0)">
                                    <img class="media-object media-object-circle" src="/web/frontend/assets/img/demo/doc/doc5.jpg" alt="..."> </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading">
                                    <a href="javascript:void(0)">Bu yerda ushbu sahifadagi kerakli hujjat sarlavhasi keltiriladi</a>
                                  </h4>
                                  <div class="media-footer">
                                    <span>
                                      <i class="zmdi zmdi-time color-info-light"></i> August 18, 2021</span>
                                    <span>
                                      <i class="zmdi zmdi-download color-warning-light"></i>
                                      <a href="javascript:void(0)">Bog'cha psixologi</a>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- col-md-9 -->
          </div>
          <!-- row -->
        </div>
        <!-- ms-paper -->
      </div>
