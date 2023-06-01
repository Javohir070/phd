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
            <div class="row">
              <div class="col-md-4">
                <div class="card card-info card-block text-center wow zoomInUp animation-delay-2">
                  <h2 class="counter color-info">50</h2>
                  <i class="fa fa-4x fa-shopping-bag color-info"></i>
                  <p class="mt-2 no-mb lead small-caps color-info">Sotib olingan metodikalar</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-success card-block text-center wow zoomInUp animation-delay-5">
                  <h2 class="counter color-success">64</h2>
                  <i class="fa fa-4x fa-briefcase color-success"></i>
                  <p class="mt-2 no-mb lead small-caps color-success">Sotib olingan kitobtlar </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-royal card-block text-center wow zoomInUp animation-delay-4">
                  <h2 class="counter color-royal">60</h2>
                  <i class="fa fa-4x fa-exchange color-royal"></i>
                  <p class="mt-2 no-mb lead small-caps color-royal">Almashilgan metodikalar</p>
                </div>
              </div>
            </div>

            <div class="card card-primary animated fadeInUp animation-delay-12">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-account-circle"></i> Asosiy ma'lumotlar</h3>
              </div>
              <table class="table table-no-border table-striped">
                <tr>
                  <th>
                    <i class="zmdi zmdi-account mr-1 color-success"></i> Familiyasi</th>
                  <td><?=$user->last_name?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-account mr-1 color-warning"></i> Ismi</th>
                  <td> <?=$user->first_name?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-account mr-1 color-warning"></i>Sharifi</th>
                  <td> <?=$user->middle_name?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-face mr-1 color-warning"></i> Kasbi</th>
                  <td><?=!empty($user->kasbi)?$user->kasbi->nomi:''?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-map mr-1 color-warning"></i> Viloyati</th>
                  <td><?=!empty($user->region)?$user->region->viloyat_nomi:''?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-map mr-1 color-warning"></i> Tumani</th>
                  <td><?=!empty($user->district)?$user->district->tuman_nomi:''?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-phone mr-1 color-warning"></i> Telefon nomeri</th>
                  <td><?=$user->telefon?></td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-email mr-1 color-danger"></i> Email</th>
                  <td>
                    <a href="mailto:<?=$user->email?>"><?=$user->email?></a>
                  </td>
                </tr>
                  <!-- <tr>
                      <th>
                          <i class="zmdi zmdi-face mr-1 color-warning"></i> Jinsi</th>
                      <td><?#=!empty($user->gender)?$user->gender->name:''?></td>
                  </tr> -->
                <tr>
                  <th>
                    <i class="zmdi zmdi-calendar mr-1 color-royal"></i> A'zo bo'lgan</th>
                  <td><?=date('d-m-Y',$user->created_at)?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>