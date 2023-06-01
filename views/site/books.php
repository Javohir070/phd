<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Foydali kitoblar';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ms-hero-page ms-hero-img-city2 ms-hero-bg-info mb-6">
  <div class="text-center color-white mt-6 mb-6 index-1">
    <h1>Psixologik portal kitoblari</h1>
    <p class="lead lead-lg">Psixologik portal do'koniga xush kelibsiz. Eng yangi psixologik kitoblarni ajoyib narxlarda sotib oling.
      <br> Bizning kundalik takliflarimizni tekshirishni unutmang.</p>
    <a href="javascript:void(0)" class="btn btn-raised btn-white color-danger">
      <i class="zmdi zmdi-label"></i> Bosh sahifa</a>
  </div>
</div>

      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Filtrlash</h3>
              </div>
              <div class="card-block">
                <form class="form-horizontal" id="Filters">

                  <fieldset>
                    <h4 class="mb-1">Yili bo'yicha</h4>
                    <div class="form-group no-mt">
                      <div class="checkbox  ml-2">
                        <label>
                          <input type="checkbox" name="Yili[1]" value="2019"> 2019 </label>
                      </div>
                      <div class="checkbox  ml-2">
                        <label>
                          <input type="checkbox" name="Yili[2]" value="2020"> 2020 </label>
                      </div>
                      <div class="checkbox  ml-2">
                        <label>
                          <input type="checkbox" name="Yili[3]" value="2021"> 2021 </label>
                      </div>
                    </div>
                  </fieldset>
                  <h4 class="mb-1">Kategoriya bo'yicha</h4>
                  <fieldset>
                    <div class="form-group no-mt">
                      <? $kasblar = \app\models\Kitobturi::find()->all(); 
                      foreach ($kasblar as $k) {?>
                        <div class="checkbox  ml-2">
                        <label>
                          <input type="checkbox" name='Kategoriya[<?=$k->id?>]' value="<?=$k->id?>"> <?=$k->nomi?> </label>
                        </div>
                      <?}
                      ?>
                      
                    </div>
                  </fieldset>

                  <fieldset>
                    <h4 class="mb-1">Narxi bo'yicha</h4>
                    <div class="form-group no-mt">
                      <div class="checkbox  ml-2">
                        <label>
                          <input type="radio" name="Pulli" value="1"> Pulli </label>
                      </div>
                      <div class="checkbox  ml-2">
                        <label>
                          <input type="radio" name="Pulli" value="0"> Bepul </label>
                      </div>
                      
                    </div>
                  </fieldset>
                  

                 
                  <button class="btn btn-danger btn-block no-mb mt-2" id="Reset" style="background-color: #03a9f4; color: #fff">
              <i class="zmdi zmdi-success"></i> Filtrlash</button>
                </form>
                
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="row" id="">
            	<!-- <div class="row" id="Container"> -->

                 <?foreach($dataProvider->models as $model):?>

              <div class="col-lg-4 col-md-6 col-xs-12 mix laptop apple" data-price="1999.99" data-date="20160901">
                <div class="card ms-feature">
                  <div class="card-block text-center">
                    <a href="<?=Url::to('/site/book/'.$model->id)?>">
                      <img src="/<?=($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/books/b1.png'?>" alt="" class="img-responsive center-block"  style="max-height: 155px; min-height: 155px;" alt="<?=$model->nomi?>">
                      
                    </a>
                    <a href="<?=Url::to('/site/book/'.$model->id)?>">                
                      <h4 class="text-normal text-center" style="min-height: 60px;" alt="<?=$model->nomi?>">
                        <?=mb_substr($model->nomi, 0,50, 'UTF-8');echo(mb_strlen($model->nomi, 'UTF-8')>50)?'...':''?> 
                      </h4>
                    </a>

                    <!-- <div style="min-height: 104px;">                    
                      <?#=mb_substr($model->qisqa, 0,90, 'UTF-8');
                       #echo(mb_strlen($model->qisqa, 'UTF-8')>90)?'...':''?> 
                    </div> -->
                   
                    <span class="ml-1 hidden-xs">
                      <i class="zmdi zmdi-time mr-05 color-info"> Nashr yili:</i>
                      <span class="color-medium-dark"><?=$model->nashr_yili?></span>
                    </span>

                    <div class="mt-2">
                      <span class="mr-2">
                        <i class="zmdi zmdi-star color-warning"></i>
                        <i class="zmdi zmdi-star color-warning"></i>
                        <i class="zmdi zmdi-star color-warning"></i>
                        <i class="zmdi zmdi-star color-warning"></i>
                        <i class="zmdi zmdi-star"></i>
                      </span>
                      <span class="ms-tag ms-tag-success"><?if($model->narx==0){echo "Bepul";}else{echo $model->narx;}?></span>
                    </div>
                    <a href="<?=Url::to('/site/book/'.$model->id)?>" class="btn btn-primary btn-sm btn-block btn-raised mt-2 no-mb">
                      <i class="zmdi zmdi-border-color"></i> Batafsil</a>
                  </div>
                </div>
              </div>

              <? endforeach; ?>

              <?=LinkPager::widget(['pagination'=>$dataProvider->pagination])?>

            <!-- <nav aria-label="Page navigation">
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
            </nav> -->

            </div>
          </div>

        </div>
      </div>
<style type="text/css">
  .ms-hero-page {
    margin: 0;
    
}
</style>