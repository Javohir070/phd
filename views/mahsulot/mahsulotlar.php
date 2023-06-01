<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Psixologik metodikalar';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="ms-hero-page ms-hero-img-city2 ms-hero-bg-info mb-6">
  <div class="text-center color-white mt-6 mb-6 index-1">
    <h1>Psixologik Portal Psixologik Metodikalari</h1>
    <p class="lead lead-lg">Psixologik portal do'koniga xush kelibsiz. Eng yangi psixologik mahsulotlarni ajoyib narxlarda sotib oling.
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
              <h4 class="mb-1">Kasblar bo'yicha</h4>
              <div class="form-group no-mt">
                <? $kasblar = \app\models\Kasblar::find()->all(); 
                foreach ($kasblar as $k) {?>
                  <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" name='Kasb[<?=$k->id?>]' value="<?=$k->id?>"> <?=$k->nomi?> </label>
                  </div>
                <?}
                ?>
                
                <!-- <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" value=".microsoft"> Bog'cha psixologi </label>
                </div>
                <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" value=".samsung"> Barchaga </label>
                </div> -->
              </div>
            </fieldset>
            <h4 class="mb-1">Metodika kategoriyalar</h4>
            <fieldset>
              <div class="form-group no-mt">
                <? $kasblar = \app\models\Mahsulotturi::find()->all(); 
                foreach ($kasblar as $k) {?>
                  <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" name='Kategoriya[<?=$k->Id?>]' value="<?=$k->Id?>"> <?=$k->nomi?> </label>
                  </div>
                <?}
                ?>

                

              </div>
            </fieldset>
            
            <h4 class="mb-1">Metodika turi</h4>
            <fieldset>
              <div class="form-group no-mt">
                <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" name='Turi[1]' value="1"> Oltin </label>
                </div>
                <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" name='Turi[2]' value="2"> Kumush </label>
                </div>
                <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" name='Turi[3]' value="3"> Bronza </label>
                </div>
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
           <!--  <fieldset>
              <h4 class="mb-1">Metodikaning mavjudligi</h4>
              <div class="form-group no-mt">
                <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" value=".interpretatsiya"> Natijalar interpretatsiyasi </label>
                </div>
                <div class="checkbox  ml-2">
                  <label>
                    <input type="checkbox" value=".yuriqnoma"> Psixologga yo'riqnoma </label>
                </div>
              </div>
            </fieldset> -->
            <button class="btn btn-danger btn-block no-mb mt-2" id="Reset" style="background-color: #03a9f4; color: #fff">
              <i class="zmdi zmdi-success"></i> Filtrlash</button>
          </form>
          <!-- <form class="form-horizontal">
            <h4>Saralash</h4>
            <select id="SortSelect" class="form-control selectpicker">
              <option value="random">Ommabop</option>
              <option value="price:asc">Narx oshishi</option>
              <option value="price:desc">Narx kamayishi</option>
              <option value="date:asc">Release ASC</option>
              <option value="date:desc">Release DESC</option>
            </select>
          </form> -->
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="row" id="">

          <!-- <div class="row" id="Container"> -->
        <?foreach($dataProvider->models as $model):?>
        <div class="col-lg-4 col-md-6 col-xs-12 mix laptop apple" data-price="1999.99" data-date="20160901">
          <div class="card ms-feature wow zoomInUp animation-delay-3">
              <div class="card-block text-center">
                <a href="<?=Url::to('/mahsulot/mahsulot/'.$model->id)?>">
                  <!-- <img src="/<?#=$model->rasm?>" alt="" class="img-responsive center-block"> -->
                  <img src="/<?=($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/products/p1.jpg'?>" class="img-responsive center-block" alt="<?=$model->nomi?>" style="max-height: 155px; min-height: 155px;" > 

                </a>
                <a href="<?=Url::to('/mahsulot/mahsulot/'.$model->id)?>">                
                  <h4 class="text-normal text-center" style="min-height: 60px;" alt="<?=$model->nomi?>">
                    <?=mb_substr($model->nomi, 0,50, 'UTF-8');echo(mb_strlen($model->nomi, 'UTF-8')>50)?'...':''?> 
                  </h4>
                  </a>

                <!-- <div style="min-height: 104px;">                  
                  <?#=mb_substr($model->qisqa, 0,90, 'UTF-8');
                   #echo(mb_strlen($model->qisqa, 'UTF-8')>90)?'...':''?> 
                </div> -->

                <div class="mt-2">
                  <span class="mr-2">
                    <i class="zmdi zmdi-star color-warning"></i>
                    <i class="zmdi zmdi-star color-warning"></i>
                    <i class="zmdi zmdi-star color-warning"></i>
                    <i class="zmdi zmdi-star color-warning"></i>
                    <i class="zmdi zmdi-star"></i>
                  </span>
                  <span class="ms-tag ms-tag-success"> 
                     <?if($model->narx==0){echo "Bepul";}else{echo $model->narx;}?>
                  </span>
                </div>

                <? if ($model->narx!=0) { ?>
                <div class="row">
                  <div class="col-md-3">
                      <? if(Yii::$app->user->isGuest) :?>

                          <a href="javascript:void(0)" class="btn btn-danger btn-block btn-raised mt-2 no-mb"   data-toggle="modal" data-target="#ms-account-modal">
                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                      <? elseif ($model->korzinka) : ?>
                          <a href="javascript:void(0)" onclick="Swal.fire({
                                    title: 'Oldin qo\'shilgan',
                                    text: 'Bu metodika oldin savatga qo\'shilgan',
                                    icon: 'success',
                                    showConfirmButton:false,
                                    timerProgressBar: true,
                                    timer: 5000
                                })" class="btn btn-warning btn-block btn-raised mt-2 no-mb"  >
                          <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                      <? else : ?>
                          <form action="" method="post" style="display: none" id="savdo_form_<?=$model->id?>">
                              <input type="hidden" name="<?=Yii::$app->request->csrfParam; ?>" value="<?=Yii::$app->request->getCsrfToken(); ?>" />
                              <input type="hidden" name="current" value="<?=Url::current()?>">
                              <input type="hidden" name="p_id" value="<?=$model->id?>">
                              <input type="hidden" name="p_type" value="metodika">
                          </form>

                          <a href="javascript:void(0)" onclick="to_korzinka('#savdo_form_<?=$model->id?>')" id="savdo_form_<?=$model->id?>_btn" class="btn btn-danger btn-block btn-raised mt-2 no-mb" >
                              <i class="zmdi zmdi-shopping-cart-plus"></i> </a>
                      <? endif ?>
                  </div>
                  <div class="col-md-9">
                     <a href="<?=Url::to('/mahsulot/mahsulot/'.$model->id)?>" class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                  <i class="zmdi zmdi-assignment"></i> Batafsil</a>
                  </div>
                </div>
                <?} else {?>
                    <div class="row">
                      <div class="col-md-12">
                         <a href="<?=Url::to('/mahsulot/download/'.$model->id)?>" class="btn btn-primary btn-block btn-raised mt-2 no-mb">
                      <i class="zmdi zmdi-upload "></i> Yuklab olish</a>
                      </div>

                  </div>
                <? }?>

              </div>
            </div>

        </div>
    <? endforeach; ?>
       
          
        
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
  <?=LinkPager::widget(['pagination'=>$dataProvider->pagination])?>
</div>