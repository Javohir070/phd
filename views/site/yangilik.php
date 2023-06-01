<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Yangilik';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<br>
<div class="material-background"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card animated materialUp animation-delay-5" ">
                <div class="card-block card-block-big ">
                    <h1 class="no-mt "><?=$model->title?></h1>
                    <div class="mb-4 ">
                        <!-- <img src="/web/frontend/assets/img/demo/avatar50.jpg" alt="... " class="img-circle mr-1 "> -->
                        <img src="/web/frontend/assets/img/avatar.png" alt="..." class="img-circle mr-1" style="max-width: 50px">

                        <a href="">Admin</a>
                         <a href="" class="ms-tag ms-tag-info "><?=$model->menyu_id?></a>
                        <span class="ml-1 hidden-xs ">
                          <i class="zmdi zmdi-time mr-05 color-info "></i> 
                          <span class="color-medium-dark "><?=$model->created_date?></span>
                        </span>
                        <span class="ml-1 ">
                          <i class="zmdi zmdi-comments color-royal mr-05 "></i> 25</span>
                    </div>

                    <?
                      if ($model->videolink==true) {
                          // echo $model->videolink; exit();
                        ?>
                          <a href="<?=$model->videolink?>" target="_blink">

                            <img src="/<?=($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/products/p1.jpg'?>" alt=" " class="imgborder ml-2 mb-2 pull-left " style="margin-right:20px; width: 30%; max-height: 350px ";>
                        </a>
                     <?php }
                          else{ ?>

                    <img src="/<?=($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/products/p1.jpg'?>" alt=" " class="imgborder ml-2 mb-2 pull-left " style="margin-right:20px; width: 30%; max-height: 350px ";>
                    <?}?>
                    <!-- <img src="/<?#=($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/products/p1.jpg'?>" alt=" " class="imgborder ml-2 mb-2 pull-left " style="margin-right:20px; width: 30%; max-height: 350px ";> -->

                    <p style="text-align: justify;">
                      <?=$model->content?>
                    </p>
                   
                </div>
            </div>
        </div>
    
        </div>
      </div> <!-- container -->
