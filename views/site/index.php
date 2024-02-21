<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Fikrlar;
use app\models\Mahsulot;
use app\models\Sahifalar;
use app\models\BizningJamoa;
use yii\helpers\Url;

$yangifikr = new Fikrlar();
$jamoa= new BizningJamoa();
?>

<script>
  // Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});
</script>

<style>

.slidega1 {
  color: lightyellow;
  text-align: center;
  background-color: rgba(0,0,0,.4);
  box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);
  padding: 16px;
  padding: 1.6rem;
      padding-left: 1.6rem;
  margin-left: -10000px;
  padding-left: 10000px;
  z-index: 6;
  margin-bottom: 40px;
  margin-bottom: 4rem;
  }
</style>


<div id="myCarousel" class="carousel slide" data-ride="carousel"  style="">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="item  active" >
      <img src="/web/frontend/assets/img/slider/Slider-1290x300-01.jpg" alt="Psixologik portal" style="width: 100%; height: 360px;">
      <div class="carousel-caption">
        <h1 >Psixologik portal</h1>
        <h2 >Maktabgacha ta’lim tizimi psixologik xizmatini rivojlantirish hamda bolalarning psixologik salomatligi haqida g‘amxo‘rlik qilishga siz uchun ajoyib "yordamchi"!!!</h2>
      </div>
    </div>

    <div class="item ">
      <img src="/web/frontend/assets/img/slider/Slider-1290x300-02.jpg" alt="Psixologik portal" style="width: 100%; height: 360px;">
      <div class="carousel-caption">
        <h1 >Psixologik portal</h1>
        <h2 >Maktabgacha ta’lim tizimi psixologik xizmatini rivojlantirish hamda bolalarning psixologik salomatligi haqida g‘amxo‘rlik qilishga siz uchun ajoyib "yordamchi"!!!</h2>
      </div>
    </div>

    <div class="item ">
      <img src="/web/frontend/assets/img/slider/Slider-1290x300-03.jpg" alt="Psixologik portal" style="width: 100%;height: 360px;">
      <div class="carousel-caption">
        <h1 >Psixologik portal</h1>
        <h2 >Maktabgacha ta’lim tizimi psixologik xizmatini rivojlantirish hamda bolalarning psixologik salomatligi haqida g‘amxo‘rlik qilishga siz uchun ajoyib "yordamchi"!!!</h2>
      </div>
    </div>

    <div class="item ">
      <img src="/web/frontend/assets/img/slider/Slider-1290x300-04.jpg" alt="Psixologik portal" style="width: 100%;height: 360px;">
      <div class="carousel-caption">
        <h1 >Psixologik portal</h1>
        <h2 >Maktabgacha ta’lim tizimi psixologik xizmatini rivojlantirish hamda bolalarning psixologik salomatligi haqida g‘amxo‘rlik qilishga siz uchun ajoyib "yordamchi"!!!</h2>
      </div>
    </div>

  </div>

  
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Tizimdagi mavjud barcha psixologik metodikalar </h2>
        <br>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
              <i class="fa fa-line-chart"></i>
            </span>
            <h4 class="color-info">Barcha sotilgan psixologik metodikalar</h4>
            <h2 class="color-primary">
              <span class="counter">568</span>
            </h2>
            <!-- <a href="javascript:void(0)" class="btn btn-info btn-raised">Batafsil</a> -->
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-royal">
              <i class="zmdi zmdi-download"></i>
            </span>
            <h4 class="color-royal">Barcha yuklab olingan psixologik metodikalar</h4>
            <h2 class="color-royal">
              <span class="counter">425</span>
            </h2>
            <!-- <a href="javascript:void(0)" class="btn btn-royal btn-raised">Batafsil</a> -->
          </div>
        </div>

        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
              <i class="zmdi zmdi-accounts"></i>
            </span>
            <h4 class="color-success">Barcha foydalanuvchilar soni</h4>
            <h2 class="color-success">
              <span class="counter">425</span>
            </h2>
            <!-- <a href="javascript:void(0)" class="btn btn-success btn-raised">Batafsil</a> -->
          </div>
        </div>
        <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6">
          <div class="text-center card-block">
            <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
              <i class="fa fa-handshake-o"></i>
            </span>
            <h4 class="color-danger">Almashinilgan psixologik metodikalar </h4>
            <h2 class="color-danger">
              <span class="counter">100</span>
            </h2>
            <!-- <a href="javascript:void(0)" class="btn btn-danger btn-raised">Batafsil</a> -->
          </div>
        </div>
      </div>
      <!-- container -->
      

      <!-- container -->
      <div class="container mt-6">
        <div class="text-center mb-4">
          <h2 class="uppercase color-primary">So'ngi qo'shilgan Psixologik metodikalar</h2>
          <p class="lead uppercase">Ushbu psixologik metodikalar haqida batafsil</p>
        </div>
        <div class="row">
          <? $topmetodika = Mahsulot::find()->where(['index_uchun'=>1])->limit(3)->all(); 
            $i=1; $cl="zoomInUp"; foreach ($topmetodika as $tm) { if($i==2)$cl="prominent zoomInDown";else$cl="zoomInUp";?>
               <div class="col-md-4 price-table price-table-info wow <?=$cl?>  animation-delay-2">
                <header class="price-table-header">
                  <span class="price-table-category"><?=$tm->nomi?></span>
                  <h3>
                    <?=$tm->narx?>
                    <sub>so'm</sub>
                  </h3>
                </header>
                <div class="price-table-body">
                  <ul class="price-table-list">
                    <li>
                      <i class="zmdi zmdi-code"></i>1. Psixologik metodika maqsadi - <?=$tm->yosh?> yosh uchun</li>
                    <li>
                      <i class="zmdi zmdi-globe"></i>2.Psixologik metodikaning yoshga tavsifi - <?=$tm->yoriqmona?></li>
                    <li>
                      <i class="zmdi zmdi-settings"></i>3. Metodikani o'tkazish bo'yicha psixologga yo'riqnoma- <?=$tm->yoriqmona?></li>
                    <li>
                      <i class="zmdi zmdi-cloud"></i>4. Metodikaning natijalar interpritatsiyasi - bor</li>
                   
                  </ul>
                  <div class="text-center">
                    <a href="<?=Url::to('/mahsulot/mahsulot/'.$tm->id)?>" class="btn btn-info btn-raised">
                      <i class="zmdi zmdi-cloud-download"></i> Batafsil</a>
                  </div>
                </div>
              </div>
             <?} ?>
          
          <!-- <div class="col-md-4 price-table price-table-success prominent wow zoomInDown animation-delay-2">
            <header class="price-table-header">
              <span class="price-table-category">Psixologik metodika nomi</span>
              <h3>
                150 000
                <sub>so'm</sub>
              </h3>
            </header>
            <div class="price-table-body">
              <ul class="price-table-list">
                <li>
                  <i class="zmdi zmdi-code"></i>1. Psixologik metodika maqsadi - 3-4 yosh uchun</li>
                <li>
                  <i class="zmdi zmdi-globe"></i>2.Psixologik metodikaning yoshga tavsifi - mavjud</li>
                <li>
                  <i class="zmdi zmdi-settings"></i>3. Psixologik metodikani o'tkazish bo'yicha psixologga yo'riqnoma- mavjud</li>
                <li>
                  <i class="zmdi zmdi-cloud"></i>4. Metodikaning natijalar interpritatsiyasi - bor</li>
              </ul>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-success btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Batafsil</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 price-table price-table-danger wow zoomInUp animation-delay-2">
            <header class="price-table-header">
              <span class="price-table-category">Psixologik metodika nomi</span>
              <h3>
                220 000
                <sub>so'm</sub>
              </h3>
            </header>
            <div class="price-table-body">
              <ul class="price-table-list">
                <li>
                  <i class="zmdi zmdi-code"></i>1. Psixologik metodika maqsadi - 3-4 yosh uchun</li>
                <li>
                  <i class="zmdi zmdi-globe"></i>2.Psixologik metodikaning yoshga tavsifi - mavjud</li>
                <li>
                  <i class="zmdi zmdi-settings"></i>3. Metodikani o'tkazish bo'yicha psixologga yo'riqnoma- mavjud</li>
                <li>
                  <i class="zmdi zmdi-cloud"></i>4. Metodikaning natijalar interpritatsiyasi - bor</li>
              </ul>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-danger btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Batafsil</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!--container -->

      <div class="wrap wrap-danger mt-6" style="padding-bottom: 5px !important">
        <h2 class="text-center no-m">Biz haqimizda foydalanuvchilar fikri</h2>

        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <!-- <div class="item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    
                     <h3 class="text-center no-m"><i>Sizning fikringiz biz uchun qadrli!</i></h3>
                  </div> 

                </div>

              </div>
              <h3 class="text-center no-m"><i>Sizning fikringiz biz uchun qadrli!</i></h3>
            </div> -->
            <div class="item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <? $i=0; foreach (Fikrlar::find()->where(['status'=>1])->all() as $fikr) { if($i==3){$i=0;?>
                    </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">

                    <?} $i++;?>
                      <div class="col-md-4">
                      <div class="card animated flipInX animation-delay-2">
                        <blockquote class="blockquote-avatar withripple">
                          <img src="/web/frontend/assets/img/demo/avatar.png" alt="" class="avatar hidden-xs">
                          <p style="min-height: 156px;">

                            <?#=$fikr->matn?>
                             <?=mb_substr($fikr->matn, 0,180, 'UTF-8');echo(mb_strlen($fikr->matn, 'UTF-8')>180)?'...':''?>
                          </p>
                           
                          
                        </blockquote>
                      </div>
                    </div>
                    <?} ?>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            

          </div>
          <!-- Controls -->
          <a class="left carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="zmdi zmdi-arrow-left"></i>
            <span class="sr-only">Oldinga</span> 
          </a>
          <a class="right carousel-control btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
            <span class="sr-only">Keyinga</span>
          </a>          
        </div>
        <h3 class="text-center no-m"><i>Sizning fikringiz biz uchun qadrli!</i></h3>

        <br>
        <section class="text-center">
          <!-- <h2 class="section-title no-margin-top">Fikr qoldirish</h2> -->
          <!-- Button trigger modal -->


            <button type="button" class="btn btn-raised" data-toggle="modal" <?=Yii::$app->user->isGuest ? 'data-target="#ms-account-modal"' : 'data-target="#myModal4"'?> > Fikr qoldirish </button>
          <!-- Modal -->
          <div class="modal modal-primary" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
            <div class="modal-dialog animated zoomIn animated-3x" role="document">
              <div class="modal-content">
                <form action="/site/fikrberish" method="post">
                <?# $form = ActiveForm::begin(['action' =>['site/fikrberish'], 'method' => 'post']); ?>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      <i class="zmdi zmdi-close"></i>
                    </span>
                  </button>
                  <h3 class="modal-title" id="myModalLabel4">Fikr qoldirish oynasi</h3>
                </div>                

                <div class="form-group">
                    
                </div>

   
                <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                <div class="modal-body">
                  <div class="form-group">
                    <label for="textArea" class="col-md-2 control-label">Fikrni yozing</label>
                    <div class="col-md-10">
                      <?#= $form->field($yangifikr, 'matn')->textarea(['rows' => '6']) ?>
                     <!--  <textarea class="form-control" rows="3" id="textArea"></textarea> -->
                     <textarea id="fikrlar-matn" class="form-control" name="Fikrlar[matn]" rows="6" aria-required="true"></textarea>
                    </div>
                  </div>

                  <!-- <p>Bu yerda foydalanuvchilar fikri qoldiriladi.</p> -->
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Yopish</button>
                  <?#= Html::submitButton('Fikrni yuborish', ['class' => 'btn btn-primary']) ?>
                  <!-- <button type="button" class="btn  btn-primary">Fikrni yuborish</button> -->
                  <button type="submit" class="btn btn-primary">Fikrni yuborish</button>
                </div>
                 </form>
              </div>
            </div>
          </div>

          <div class="modal modal-primary" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4">
            <div class="modal-dialog animated zoomIn animated-3x" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      <i class="zmdi zmdi-close"></i>
                    </span>
                  </button>
                  <h3 class="modal-title" id="myModalLabel4">Fikr qoldirish oynasi</h3>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="textArea" class="col-md-2 control-label">Fikrni yozing</label>
                    Fikr bildirish uchun ro'yhatdan otishingiz kerak.
                  </div>
                  <button type="button" class="btn  btn-primary" id="ms-account-modal">
                    <a href="#ms-register-tab" data-toggle="modal" ></a>Ro'yhatdan o'tish
                  </button>
                  <!-- <p>Bu yerda foydalanuvchilar fikri qoldiriladi.</p> -->
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Bekor qilish</button>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>


      <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Yangiliklar</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <? $i=0; foreach (Sahifalar::find()->where(['status'=>1])->all() as $model): $i++;
          if($i==1) $j="animation-delay-6";
          if($i==2) $j="card-dark-inverse animation-delay-8";
          if($i==3){ $j="animation-delay-10"; $i=0;}

          ?>
            <div class="card <?=$j?>">
            <div class="withripple zoom-img">
              <a href="javascript:void()">
                <img src="/<?=isset($model->rasm)?$model->rasm:'web/frontend/assets/img/demo/port4.jpg'?>" alt="<?=$model->title?>" class="img-responsive" style="max-height: 275px;">
                <!-- <img src="/<?#=isset(Image::thumb($model->rasm,410,275))?$model->rasm:'web/frontend/assets/img/demo/port4.jpg'?>" alt="..." class="img-responsive"> -->
              </a>
            </div>
            <div class="card-block">
              <h3 class="color-primary" style="min-height: 55px;">
                <?#=$model->title?>
                <?=mb_substr($model->title, 0,50, 'UTF-8');echo(mb_strlen($model->title, 'UTF-8')>50)?'...':''?> 

              </h3>
              <p style="min-height: 105px;">
                <?=mb_substr($model->qisqa, 0,180, 'UTF-8');echo(mb_strlen($model->qisqa, 'UTF-8')>180)?'...':''?> 
              </p>
             <!--  <p><?#=$model->qisqa?></p> -->
              <p class="text-right">
                <a href="<?=Url::to('/site/yangilik/'.$model->id)?>" class="btn btn-primary btn-raised text-right" role="button">
                  <i class="zmdi zmdi-collection-image-o"></i> Batafsil</a>
              </p>
            </div>
          </div>
          <? endforeach; ?>
          
        </div>

        <!-- <a href="#" class="btn btn-primary text-center">
          <div class="text-center">Barcha yangiliklar</div>
        </a> -->

        <div class="text-center">
          <a href="<?= Url::to('/site/yangiliklar') ?>" class="btn btn-primary text-center">
          <div class="text-center">Barcha yangiliklar</div>
        </a>
          <!-- <button type="button" class="btn btn-primary"> Barcha yangiliklar </button> -->
        </div>

        



      </div>
                    

