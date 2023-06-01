<?
use yii\helpers\Url;
$action = Yii::$app->controller->action->id;
?>
<br>
<br>
<div class="container">
        <div class="row">

          <div class="col-md-4">
            
            <?=Yii::$app->controller->renderPartial('/blocks/frontend/profileleft',['action' => $action]);?>
          </div>

          <div class="col-md-8">
<!--            <h1 class="color-primary text-center">Almashishga tavsiya etilgan psixologik metodikalar</h1>-->
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                  <h2 class="text-center no-m pt-4 pb-2 color-white index-1">Almashishga tavsiya etilgan psixologik metodikalar</h2>

              </div>

            <div class="bs-example">
              <table class="table table-striped">
                <thead class="pricing-table-head">
                  <tr>
                    <td>#</td>
                    <td>Psixologik metodika nomi</td>
                    <td>Yosh chegarasi</td>
                    <td>Metodikaning natijalar interpretatsiyasi</td>
                    <td>Metodikani o'tkazish bo'yicha psixologga yo'riqnoma</td>
                    <td>Belgilash</td>
                  </tr>
                </thead>
                <tbody>
                 <!--  <tr>
                    <td>1</td>
                    <td>Bog'cha yoshidagilar uchun psixologik metodika</td>
                    <td>4</td>
                    <td >
                      <span class="ms-tag ms-tag-success"> Mavjud</span>
                   </td>
                   <td >
                      <span class="ms-tag ms-tag-danger"> Mavjud emas</span>
                   </td>
                    <td>                   
                      <input type="checkbox"> 
                    </td>    
                  </tr> -->
                  

                </tbody>
              </table>
            </div> 

           

          </div>

        </div>
      </div>