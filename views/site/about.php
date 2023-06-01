<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Loyiha haqida';
$this->params['breadcrumbs'][] = $this->title;

$jamoa = \app\models\BizningJamoa::find()->all(); 
 $jamoasoni=count($jamoa);

?>
<!-- <pre>
	<?
               // var_dump(round($t));  exit();
	?>
</pre> --> 

<script>
  var angle = 0;
function galleryspin(sign) { 
spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
};

 // var jamoasoni=<?#php echo $jamoasoni; ?>;
 // console.log(jamoasoni);
</script>


<style>
  div#carousel { 
  perspective: 1200px; 
  /*background: #100000; */
  background: #10000014;
  padding-top: 3%; 
  padding-bottom: 12%; 
  /*font-size:0; */
  margin-bottom: 3rem; 
  overflow: hidden; 
}
figure#spinner { 
  transform-style: preserve-3d; 
  height: 300px; 
  transform-origin: 50% 50% -500px; 
  transition: 1s; 
} 
figure#spinner .col-md-4 { 
  width: 40%; max-width: 325px; 
  position: absolute; left: 30%;
  transform-origin: 50% 50% -500px;
  outline:1px solid transparent; 
}

/*figure#spinner div.col-md-4:nth-child(1) { transform:rotateY(0deg);}*/
<?  
$t=360/$jamoasoni;
$tt=0;
for ($i = 0; $i < $jamoasoni; $i++) {?>
figure#spinner div.col-md-4:nth-child(<?=$i?>) { transform:rotateY(-<?=$t*$i?>deg);}
  
  <? $tt+=$t;
  }
?>

/*<script> 
// var t=360/jamoasoni;
// for (let i = 0; i < jamoasoni; i++) {
//  figure#spinner div.col-md-4:nth-child($i) { transform:rotateY((t)+0deg);}
// t+=t;
// } 
</script>*/



/*figure#spinner div.col-md-4:nth-child(1) { transform:rotateY(0deg);}
figure#spinner div.col-md-4:nth-child(2) { transform: rotateY(-32deg); }
figure#spinner div.col-md-4:nth-child(3) { transform: rotateY(-64deg); }
figure#spinner div.col-md-4:nth-child(4) { transform: rotateY(-96deg); }
figure#spinner div.col-md-4:nth-child(5){ transform: rotateY(-128deg); }
figure#spinner div.col-md-4:nth-child(6){ transform: rotateY(-160deg); }
figure#spinner div.col-md-4:nth-child(7){ transform: rotateY(-192deg); }
figure#spinner div.col-md-4:nth-child(8){ transform: rotateY(-224deg); }
figure#spinner div.col-md-4:nth-child(9){ transform: rotateY(-256deg); }
figure#spinner div.col-md-4:nth-child(10){ transform: rotateY(-288deg); }
figure#spinner div.col-md-4:nth-child(11){ transform: rotateY(-320deg); }*/

div#carousel ~ span { 
  color: #fff; 
  margin: 5%; 
  display: inline-block; 
  text-decoration: none; 
  font-size: 2rem; 
  transition: 0.6s color; 
  position: relative; 
  margin-top: -6rem; 
  border-bottom: none; 
  line-height: 0; }
div#carousel ~ span:hover { color: #888; cursor: pointer; }

</style>

<div class="material-background"></div>
      <div class="container">
        <div class="card wow slideInUp">
          <div class="card-block-big">
            <h1 class="color-primary">Loyiha haqida</h1>
            <div style="margin: 0 0 0 25px"><p class="dropcaps" >P</p></div>
            <!-- <br> -->
<blockquote class="text-justify">
  ortal ta’lim tizimida ishlaydigan amaliyotchi psixologlar uchun mo‘ljallangan.
              Portaldan shuningdek, tarbiyachilar, metodistlar, bo‘lajak mutaxasislar (psixologlar, pedagoglar va boshq.) foydalanishlari mumkin.
              Portal, ta’lim tizimi psixologi ta’lim muassasasidagi faoliyati bilan bog‘liq xalqaro, Qonun, qonunosti hamda normativ-huquqiy hujjatlar, tashkiliy-metodik hujjatlar hamda eng asosiysi, psixodiagnostik, psixokorreksion va korreksion rivojlantiruvchi psixolgik metodikalar (testlar), shuningdek, ta’limning boshqa ishtirokchilari (mutaxassislar) bilan bolalarni (o‘quvchilarni) rivojlantirishda o‘zaro hamkorligi masalalari nazarda tutuvchi trening dasturlari, syujetli-rolli o‘yinlar va boshqa amaliyotchi psixolog uchun zaruriy metodik materiallarni o‘z ichiga olgan.
</blockquote>
          </div>

          <article class="card wow fadeInLeft animation-delay-5 mb-4">
            <div class="card-block">
            	<h3 class="color-primary">
                    Jamoamizning asosiy vazifalari:
                  </h3>
              <div class="row">

              	<div class="col-lg-6">
                  
                    <ol class="service-list list-unstyled">
                      <li><p class="text-justify">Ta’limning amaliy psixologiyasini rivojlantirishni rag‘batlantirish;</p></li>
                      <li><p class="text-justify"> Zamonaviy psixologiya fanining bilim va tajribalarini zamonaviy ta’lim muammolarini hal qilishda samarali qo‘llash yo‘llarini topib amaliyotchi psixologlarga taqdim etib borish;</p></li>
                      <li><p class="text-justify">Ta’limni modernizatsiya qilish tizimini tashkil etuvchi omili sifatida ta’lim tizimida psixologik xizmatini rivojlantirishga ko‘maklashish;</p></li>
                      <li><p class="text-justify">Ta’lim tizimi psixologlarining ijodiy salohiyatini to‘la amalga oshirishga ko‘maklashish;</p></li>
                      <li><p class="text-justify">Ta’lim tizimi psixologlari uchun yagona axborot makonini shakllantirish;</p></li>
                      <li><p class="text-justify">Ta’lim beruvchi psixologning jamiyatdagi kasbiy maqomini mustahkamlash, uning kasbiy va ijtimoiy huquq va manfaatlarini himoya qilishga, aholining psixologik madaniyatini takomillashtirishga ko‘maklashish.</p></li>
                    </ol>
                 
                </div>

                <div class="col-lg-6">
                   <img src="/web/frontend/assets/img/demo/team.jpg" alt="" class="img-responsive">
                </div>

                
              </div>

            </div>
          </article>

          <div class="bg-info">
            <div class="card-block-big">
              <h2 class="color-white text-center mb-4">Bizning yutuqlar</h2>
              <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-block text-center wow zoomInUp animation-delay-2">
                    <h2 class="counter color-info">450</h2>
                    <i class="fa fa-4x fa-download color-info"></i>
                    <p class="mt-2 no-mb lead small-caps color-info">Barcha yuklangan psixologik metodikalar</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-block text-center wow zoomInUp animation-delay-5">
                    <h2 class="counter color-info">164</h2>
                    <i class="fa fa-4x fa-suitcase color-info"></i>
                    <p class="mt-2 no-mb lead small-caps color-info">Barcha sotib olingan psixologik metodikalar</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-block text-center wow zoomInUp animation-delay-4">
                    <h2 class="counter color-info">200</h2>
                    <i class="fa fa-4x fa-handshake-o color-info"></i>
                    <p class="mt-2 no-mb lead small-caps color-info">Barcha almashinilgan psixologik metodikalar</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card card-block text-center wow zoomInUp animation-delay-3">
                    <h2 class="counter color-info">300</h2>
                    <i class="fa fa-4x fa-line-chart color-info"></i>
                    <p class="mt-2 no-mb lead small-caps color-info" >Barcha yuklab olingan psixologik metodikalar</p>
                  </div>
                </div>

              </div>
              <h2 class="text-center mt-4" style="color: #841111;"> Bu raqamlarga faqat sizning sharofatingiz tufayli erishildi.
                <br> Biz bilan bo'lganingiz uchun tashakkur!</h2>
            </div>
          </div>


        <div class="card mt-6 wow fadeInUp">
          <div class="card-block card-block-big">
            <h3 class="text-center fw-500 mb-4">Bizning jamoa</h3>
            <div class="row">

              <div id="carousel">
                <figure id="spinner">


                 <? 
                      foreach ($jamoa as $j) {?>

                  <div class="col-md-4 col-sm-6">
                      <div class="card card-flat card-danger wow zoomInUp">
                        <div class="ms-hero-bg-danger ms-hero-img-city">
                        

                          <img src="/<?=isset($j->rasm)?$j->rasm:'web/frontend/assets/img/demo/avatar.png'?>" alt="<?=$j->fish?>" class="img-avatar-circle">

                          <!-- <img src="/web/frontend/assets/img/demo/avatar.png" alt="..." class="img-avatar-circle">  -->
                          
                        </div>
                        <div class="card-block pt-6 text-center">
                          <h3 class="color-danger" style="height: 58px;"><?=$j->fish?></h3>
                          <p style="height:55px"><?=$j->ish_joy?></p>
                          <a href="<?=$j->facebook?>" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook" target="_blank">
                            <i class="zmdi zmdi-facebook" ></i>
                          </a>
                          <a href="<?=$j->telegram?>" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter " target="_blank">
                            <i class="fa fa-telegram"></i>
                          </a>
                          <a href="<?=$j->instagram?>" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram" target="_blank">
                            <i class="zmdi zmdi-instagram"></i>
                          </a>
                        </div>
                      </div>
                  </div>

                  <?}
                      ?>


                </figure>
              </div>
              <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
              <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>

            </div>
          </div>
        </div>




          <!-- <div class="card mt-6 wow fadeInUp">
            <div class="card-block card-block-big">
              <h3 class="text-center fw-500 mb-4">Bizning jamoa</h3>
              <div class="row">

  	            <div class="col-md-4 col-sm-6">
  	                <div class="card card-flat card-danger wow zoomInUp">
  	                  <div class="ms-hero-bg-danger ms-hero-img-city">
  	                    <img src="/web/frontend/assets/img/demo/avatar4.jpg" alt="..." class="img-avatar-circle"> </div>
  	                  <div class="card-block pt-6 text-center">
  	                    <h3 class="color-danger">Amira Alimova</h3>
  	                    <p>Bu yerda loyiha ishtirokchisi haqidagi qisqacha mazmundagi matn keltiriladi.</p>
  	                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
  	                      <i class="zmdi zmdi-facebook"></i>
  	                    </a>
  	                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
  	                      <i class="zmdi zmdi-twitter"></i>
  	                    </a>
  	                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
  	                      <i class="zmdi zmdi-instagram"></i>
  	                    </a>
  	                  </div>
  	                </div>
  	            </div>

                <div class="col-md-4 col-sm-6">
                  <div class="card card-flat card-info wow zoomInUp">
                    <div class="ms-hero-bg-info ms-hero-img-city">
                      <img src="/web/frontend/assets/img/demo/avatar5.jpg" alt="..." class="img-avatar-circle"> </div>
                    <div class="card-block pt-6 text-center">
                      <h3 class="color-info">Abdulla Abdullayev</h3>
                      <p>Bu yerda loyiha ishtirokchisi haqidagi qisqacha mazmundagi matn keltiriladi..</p>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                        <i class="zmdi zmdi-facebook"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                        <i class="zmdi zmdi-twitter"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                        <i class="zmdi zmdi-instagram"></i>
                      </a>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-6">
                  <div class="card card-flat card-warning wow zoomInUp">
                    <div class="ms-hero-bg-warning ms-hero-img-city">
                      <img src="/web/frontend/assets/img/demo/avatar3.jpg" alt="..." class="img-avatar-circle"> </div>
                    <div class="card-block pt-6 text-center">
                      <h3 class="color-warning">Imron Karimov</h3>
                      <p>Bu yerda loyiha ishtirokchisi haqidagi qisqacha mazmundagi matn keltiriladi.</p>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                        <i class="zmdi zmdi-facebook"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                        <i class="zmdi zmdi-twitter"></i>
                      </a>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                        <i class="zmdi zmdi-instagram"></i>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div> -->

      
        </div>
      </div>
