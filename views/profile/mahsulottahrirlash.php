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
<!--            <h1 class="color-primary text-center">Yuklangan psixologik metodikalar</h1>-->
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                  <h2 class="text-center no-m pt-4 pb-2 color-white index-1">Yuborilgan psixologik metodikalar</h2>

              </div>

            <div class="bs-example">
              <table class="table table-striped">
                <thead class="pricing-table-head">
                  <tr>
                    <td>#</td>
                    <td>Psixologik metodika nomi</td>
                    <td>Yuklangan sana</td>
                    <td>Status</td>
                    <td>Admin Fikr</td>
                    <!-- <td>PMT</td> -->
                    <td>Fayl</td>
                  </tr>
                </thead>
                <tbody>
                  <? if(count($models)>0){ $i=0; foreach ($models as $m) {
                    $sts = " "; $kk = " ";
                    if($m->status==1) $sts = "<span class='ms-tag ms-tag-primary'>Ko'rib chiqilmoqda</span>";
                    if($m->status==2) $sts = "<span class='ms-tag ms-tag-danger'>Rad etilgan</span>";
                    if($m->status==3) $sts = "<span class='ms-tag ms-tag-success'>Qabul qilingan</span>";
                    ?>
                    <tr>
                    <td><?=++$i?></td>
                    <td><?=$m->nomi?></td>
                    <td><?=$m->created_date?></td>
                    <td >
                       <?=$sts?>
                   </td>
                   <td>
                     <?=$m->admin_fikr?>
                   </td>
                   <!-- <td>
                     <?#=$m->kategoriya_id?>
                   </td> -->
                    <td>
                      <a href="<?=Url::to('/mijozpm/download/'.$m->id)?>" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                    <?
                  } }?>
                  
                  <!-- <tr>
                    <td>2</td>
                    <td>Maktab yoshidagilar uchun psixologik metodika</td>
                    <td>10.09.2021</td>
                    <td> <span class="ms-tag ms-tag-danger"> O'tmadi</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Bog'cha yoshidagilar uchun psixologik metodika</td>
                    <td>25.03.2021</td>
                    <td> <span class="ms-tag ms-tag-primary"> Jarayonda</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Makta yoshidagilar uchun katta hayotga tayyorlovchi psixologik metodika</td>
                    <td>12.02.2020</td>
                    <td><span class="ms-tag ms-tag-danger"> O'tmadi</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Bog'cha yoshidagilar uchun psixologik metodika</td>
                    <td>30.09.2021</td>
                    <td><span class="ms-tag ms-tag-primary"> Jarayonda</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Maktab yoshidagilar uchun psixologik metodika</td>
                    <td>10.09.2021</td>
                    <td><span class="ms-tag ms-tag-primary"> Jarayonda</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Bog'cha yoshidagilar uchun psixologik metodika</td>
                    <td>25.03.2021</td>
                    <td><span class="ms-tag ms-tag-success"> Qabul</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Makta yoshidagilar uchun katta hayotga tayyorlovchi psixologik metodika</td>
                    <td>12.02.2020</td>
                    <td><span class="ms-tag ms-tag-success"> Qabul</span></td>
                    <td>
                      <a href="javascript:void(0)" class="btn-circle btn-circle-xs btn-circle-primary">
                        <i class="zmdi zmdi-download"></i>
                      </a>
                    </td>    
                  </tr> -->
                </tbody>
              </table>
            </div> 

           

          </div>

        </div>
      </div>