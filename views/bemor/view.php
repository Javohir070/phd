<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\models\Bemor;
use app\models\Tavsiya;
/* @var $this yii\web\View */
/* @var $model app\models\Fikrlar */

$this->title = 'Siz kiritgan bemor malumotlar ';
$this->params['breadcrumbs'][] = ['label' => 'Bemor  ko\'rish', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fikrlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p> 

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card animated zoomInDown animation-delay-5">
                    <div class="card-block">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'last_name',
                                'first_name',
                                'middle_name',
                                'birth_day',
                                'telefon',
                                'email:email',
                                'jinsi',
                                'olingan_signal',
                                'signal_1',
                                'signal_2',
                                'signal_3',
                                'signal_4',
                                'tashxis',
                                'tashxis_file',
                                'manzili',
                                'avatar',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




<div class="header">
    <h1 >Siz kiritgan bemor signaliga yaqin bo'lgan bemorlar natijalari va tashxislar malumotlar </h1>
</div>
<br>

<style>
    .table td,
    .table th {
        padding: .75rem 1rem !important;
    }
</style>


<style type="text/css">
    .pagination li a {
        line-height: 1.8;
        padding: 6px 10px;
        font-size: 18px;
        border: 1px solid #669ff4;
        margin-left: 3px;
    }

    .pagination li a:hover {
        background-color: #669ff4;
        color: black;
    }

    .pagination {
        margin-left: 25px;
    }
    .yuklab_oish{
        padding: 10px 20px;
        background: #28d094;
        margin-top: 10px;
        display: flex;
        /* text-align: center; */
        justify-content: center;
        color: #fff;
        border-radius:6px;
        font-size:14px;
    }
    .yuklab_oish:hover{
        background: black;
        color:#fff;
        transition:1s all;
    }
</style>

<script>
    window.onload = () => {
        console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromColumn()
</script>
<div class="content-body">
        <div class="widget-content tab-content bg-white p-20">
            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"><div class="chartist-tooltip" style="top: 261.016px; left: 278px;"></div></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
        </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="grid-view">
                            <div class="summary">Bemor ma'lumotlar</div>
                            <table class="table table-striped table-bordered" id="emp-table">
                                <thead>
                                    <tr>
                                        <th col-index=1 >ID</th>
                                        <th col-index=2 >Rasm</th>
                                        <th col-index=3 >Familiya</th>
                                        <th col-index=4 >Ism </th>
                                        <th col-index=5 >Sharif</th>
                                        <th>Tug'ilgan sana</th>
                                        <th>Yosh</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th col-index=10>Jinsi</th>
                                        <th col-index=11>Tashxis</th>
                                        <th style="width: 200px !important; display: block;">Tashxis Fayli</th>
                                        <th>Yaratilgan sana</th>
                                        <th>O'zgartirilgan sana</th>
                                        <th>Olingan Signal</th>
                                        <th>Signal 1</th>
                                        <th>Signal 2</th>
                                        <th>Signal 3</th>
                                        <th>Signal 4</th>
                                        <th col-index=20>Viloyati </th>
                                        <th col-index=21>Tuman </th>
                                        <th>Manzili</th>
                                        <th class="action-column">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-key="13">
                                        <td><?=$segnal_id1->id?></td>
                                        <td><img src="/<?=($segnal_id1->avatar)?$segnal_id1->avatar:'uploads/bemor/rasm/2023/Nov/07/hISAl-BJZBIR.png'?>" width="50"
                                                alt=""></td>
                                        <td><?=$segnal_id1->last_name?></td>
                                        <td><?=$segnal_id1->first_name?></td>
                                        <td><?=$segnal_id1->middle_name?></td>
                                        <td><?php echo date("d-m-Y",strtotime($segnal_id1->birth_day));?></td>
                                        <td><?php echo (2024- date("Y",strtotime($segnal_id1->birth_day)));?></td>
                                        <td><?=$segnal_id1->telefon?></td>
                                        <td><a href="#"><?=$segnal_id1->email?></a></td>
                                        <td><?=$segnal_id1->jinsi?></td>
                                        <td><?=$segnal_id1->tashxis?></td>
                                        <td>Doktor tomonidan quyilgan tashxis fayli <br> <a href="http://phd/<?=$segnal_id1->tashxis_file?>" target="_blank" class="yuklab_oish">Yuklab olish</a> </td>
                                        <td><?=$segnal_id1->created_at?></td>
                                        <td><?=$segnal_id1->updated_at?></td>
                                        <td><?=$segnal_id1->olingan_signal?></td>
                                        <td><?=$segnal_id1->signal_1?></td>
                                        <td><?=$segnal_id1->signal_2?></td>
                                        <td><?=$segnal_id1->signal_3?></td>
                                        <td><?=$segnal_id1->signal_4?></td>
                                        <td><?=!empty($segnal_id1->region)?$segnal_id1->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($segnal_id1->district)?$segnal_id1->district->tuman_nomi:''?></td>
                                        <td><?=$segnal_id1->manzili?></td>
                                        <td><a href="<?=Url::to(['/bemor/chart','id'=>$segnal_id1->id])?>" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                    
                                                    <a href="/bemor/view/<?=$r->id?>" title="View" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                     <a href="/bemor/update/<?=$r->id?>" title="Update" aria-label="Update"
                                                data-pjax="0"><span class="glyphicon glyphicon-pencil"><i class="ft-edit text-success"></i></span></a> <a
                                                href="/bemor/delete/<?=$r->id?>" title="Delete" aria-label="Delete" data-pjax="0"
                                                data-confirm="Are you sure you want to delete this item?"
                                                data-method="post"><span class="glyphicon glyphicon-trash"><i class="ft-trash-2 ml-1 text-warning"></i></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<section id="chartjs-advance-charts">
    <!-- Bubble Chart -->
   
 
  

    <!-- Different Point Sizes Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px;height: 600px;" >
                <div class="card-header">
                    <h4 class="card-title"><?=$segnal_id1->tashxis?></h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                <div class="card-body chartjs" >
                        <canvas id="myChart12"  style="display: block; width: 1545px; height: 400px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<div class="content-body">
        <div class="widget-content tab-content bg-white p-20">
            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"><div class="chartist-tooltip" style="top: 261.016px; left: 278px;"></div></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
        </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="grid-view">
                            <div class="summary">Bemor ma'lumotlar</div>
                            <table class="table table-striped table-bordered" id="emp-table">
                            <thead>
                                    <tr>
                                        <th col-index=1 >ID</th>
                                        <th col-index=2 >Rasm</th>
                                        <th col-index=3 >Familiya</th>
                                        <th col-index=4 >Ism </th>
                                        <th col-index=5 >Sharif</th>
                                        <th>Tug'ilgan sana</th>
                                        <th>Yosh</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th col-index=10>Jinsi</th>
                                        <th col-index=11>Tashxis</th>
                                        <th style="width: 200px !important; display: block;">Tashxis Fayli</th>
                                        <th>Yaratilgan sana</th>
                                        <th>O'zgartirilgan sana</th>
                                        <th>Olingan Signal</th>
                                        <th>Signal 1</th>
                                        <th>Signal 2</th>
                                        <th>Signal 3</th>
                                        <th>Signal 4</th>
                                        <th col-index=20>Viloyati </th>
                                        <th col-index=21>Tuman </th>
                                        <th>Manzili</th>
                                        <th class="action-column">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-key="13">
                                        <td><?=$segnal_id2->id?></td>
                                        <td><img src="/<?=($segnal_id2->avatar)?$segnal_id2->avatar:'uploads/bemor/rasm/2023/Nov/07/hISAl-BJZBIR.png'?>" width="50"
                                                alt=""></td>
                                        <td><?=$segnal_id2->last_name?></td>
                                        <td><?=$segnal_id2->first_name?></td>
                                        <td><?=$segnal_id2->middle_name?></td>
                                        <td><?php echo date("d-m-Y",strtotime($segnal_id2->birth_day));?></td>
                                        <td><?php echo (2024- date("Y",strtotime($segnal_id2->birth_day)));?></td>
                                        <td><?=$segnal_id2->telefon?></td>
                                        <td><a href="mailto:s.makhmudjanov@gmail.com"><?=$segnal_id2->email?></a></td>
                                        <td><?=$segnal_id2->jinsi?></td>
                                        <td><?=$segnal_id2->tashxis?></td>
                                        <td>Doktor tomonidan quyilgan tashxis fayli <br> <a href="http://phd/<?=$segnal_id2->tashxis_file?>" target="_blank" class="yuklab_oish">Yuklab olish</a> </td>
                                        <td><?=$segnal_id2->created_at?></td>
                                        <td><?=$segnal_id2->updated_at?></td>
                                        <td><?=$segnal_id2->olingan_signal?></td>
                                        <td><?=$segnal_id2->signal_1?></td>
                                        <td><?=$segnal_id2->signal_2?></td>
                                        <td><?=$segnal_id2->signal_3?></td>
                                        <td><?=$segnal_id2->signal_4?></td>
                                        <td><?=!empty($segnal_id2->region)?$segnal_id2->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($segnal_id2->district)?$segnal_id2->district->tuman_nomi:''?></td>
                                        <td><?=$segnal_id2->manzili?></td>
                                        <td><a href="<?=Url::to(['/bemor/chart','id'=>$model->id])?>" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                    
                                                    <a href="/bemor/view/<?=$r->id?>" title="View" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                     <a href="/bemor/update/<?=$r->id?>" title="Update" aria-label="Update"
                                                data-pjax="0"><span class="glyphicon glyphicon-pencil"><i class="ft-edit text-success"></i></span></a> <a
                                                href="/bemor/delete/<?=$r->id?>" title="Delete" aria-label="Delete" data-pjax="0"
                                                data-confirm="Are you sure you want to delete this item?"
                                                data-method="post"><span class="glyphicon glyphicon-trash"><i class="ft-trash-2 ml-1 text-warning"></i></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title"><?=$segnal_id2->tashxis?> </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs" style="height: 600px !important;">
                        <canvas id="myChart121" height="400" width="1545" style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

   

   
</section>
<div class="content-body">
        <div class="widget-content tab-content bg-white p-20">
            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"><div class="chartist-tooltip" style="top: 261.016px; left: 278px;"></div></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
        </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="grid-view">
                            <div class="summary">Bemor ma'lumotlar</div>
                            <table class="table table-striped table-bordered" id="emp-table">
                            <thead>
                                    <tr>
                                        <th col-index=1 >ID</th>
                                        <th col-index=2 >Rasm</th>
                                        <th col-index=3 >Familiya</th>
                                        <th col-index=4 >Ism </th>
                                        <th col-index=5 >Sharif</th>
                                        <th>Tug'ilgan sana</th>
                                        <th>Yosh</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th col-index=10>Jinsi</th>
                                        <th col-index=11>Tashxis</th>
                                        <th style="width: 200px !important; display: block;">Tashxis Fayli</th>
                                        <th>Yaratilgan sana</th>
                                        <th>O'zgartirilgan sana</th>
                                        <th>Olingan Signal</th>
                                        <th>Signal 1</th>
                                        <th>Signal 2</th>
                                        <th>Signal 3</th>
                                        <th>Signal 4</th>
                                        <th col-index=20>Viloyati </th>
                                        <th col-index=21>Tuman </th>
                                        <th>Manzili</th>
                                        <th class="action-column">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-key="13">
                                        <td><?=$segnal_id3->id?></td>
                                        <td><img src="/<?=($segnal_id3->avatar)?$segnal_id3->avatar:'uploads/bemor/rasm/2023/Nov/07/hISAl-BJZBIR.png'?>" width="50"
                                                alt=""></td>
                                        <td><?=$segnal_id3->last_name?></td>
                                        <td><?=$segnal_id3->first_name?></td>
                                        <td><?=$segnal_id3->middle_name?></td>
                                        <td><?php echo date("d-m-Y",strtotime($segnal_id3->birth_day));?></td>
                                        <td><?php echo (2024- date("Y",strtotime($segnal_id3->birth_day)));?></td>
                                        <td><?=$segnal_id3->telefon?></td>
                                        <td><a href="mailto:s.makhmudjanov@gmail.com"><?=$segnal_id3->email?></a></td>
                                        <td><?=$segnal_id3->jinsi?></td>
                                        <td><?=$segnal_id3->tashxis?></td>
                                        <td>Doktor tomonidan quyilgan tashxis fayli <br> <a href="http://phd/<?=$segnal_id3->tashxis_file?>" target="_blank" class="yuklab_oish">Yuklab olish</a> </td>
                                        <td><?=$segnal_id3->created_at?></td>
                                        <td><?=$segnal_id3->updated_at?></td>
                                        <td><?=$segnal_id3->olingan_signal?></td>
                                        <td><?=$segnal_id3->signal_1?></td>
                                        <td><?=$segnal_id3->signal_2?></td>
                                        <td><?=$segnal_id3->signal_3?></td>
                                        <td><?=$segnal_id3->signal_4?></td>
                                        <td><?=!empty($segnal_id3->region)?$segnal_id3->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($segnal_id3->district)?$segnal_id3->district->tuman_nomi:''?></td>
                                        <td><?=$segnal_id3->manzili?></td>
                                        <td><a href="<?=Url::to(['/bemor/chart','id'=>$model->id])?>" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                    
                                                    <a href="/bemor/view/<?=$r->id?>" title="View" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                     <a href="/bemor/update/<?=$r->id?>" title="Update" aria-label="Update"
                                                data-pjax="0"><span class="glyphicon glyphicon-pencil"><i class="ft-edit text-success"></i></span></a> <a
                                                href="/bemor/delete/<?=$r->id?>" title="Delete" aria-label="Delete" data-pjax="0"
                                                data-confirm="Are you sure you want to delete this item?"
                                                data-method="post"><span class="glyphicon glyphicon-trash"><i class="ft-trash-2 ml-1 text-warning"></i></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title"><?=$segnal_id3->tashxis?></h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs" style="height: 600px !important;">
                        <canvas id="myChart122" height="400" width="1545" style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

   

   
</section>
<!-- <section id="chartjs-line-charts">
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Ingichka ichak</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs" style="height: 600px !important;">
                        <canvas id="myChart123" height="400" width="1545" style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section id="chartjs-line-charts">
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">O'n ikki barmoqli ichak</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body chartjs" style="height: 600px !important;">
                        <canvas id="myChart124" height="400" width="1545" style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<script>
    // Bazadan kelgan fayl nomi
// var fileName = "/uploads/bemor/signals/2023/Dec/14/text.txt";
var fileName = "/<?=$segnal_id1->olingan_signal?>"
// Faylni o'qish uchun XMLHttpRequest obyekti yaratish
var xhr = new XMLHttpRequest();
xhr.open('GET', fileName, true);
xhr.responseType = 'blob';
xhr.onload = function(e) {
  if (this.status === 200) {
    var blob = this.response;
    var reader = new FileReader();
    reader.onload = function(e) {
      var contents = e.target.result;
      // Fayl ma'lumotlarini o'zgaruvchiga saqlash
      var fileContents = contents;
      let abcd = fileContents.split(" ")
      let x_val = [];
      let y_val = [];
     for (let i = 0; i < abcd.length; i++) {
         if (abcd[i] !== '') {
             let adk = abcd[i]/10000;
             let ya = Math.floor(adk);
             x_val.push(ya);
             const element2 =abcd[i];
           let adf = abcd[i]/1000000;
           const element =y_val.push(adf);
            }
     }
    
    const xValues = x_val;

        new Chart("myChart12", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{ 
            data: y_val,
            borderColor: "red",
            borderWidth:1,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            },{
            data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
            borderColor: "green",
            borderWidth:1,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            },{
            data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
            borderColor: "blue",
            borderWidth:1,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            }
        ],
           
            
        },
        options: {
            legend: {display: false}
        }
        });
    };
    reader.readAsText(blob);
  }
};
xhr.send();

var signa2Name = "/<?=$segnal_id2->olingan_signal?>";
var sig1 = new XMLHttpRequest();
sig1.open('GET', signa2Name, true);
sig1.responseType = 'blob';
sig1.onload = function(e) {
  if (this.status === 200) {
    var blob = this.response;
    var readersig = new FileReader();
    readersig.onload = function(e) {
      var contents1 = e.target.result;
      // Fayl ma'lumotlarini o'zgaruvchiga saqlash
      var fileContents1 = contents1;
      let abcd1 = fileContents1.split(" ")
      let x_val1 = [];
      let y_val1 = [];
     for (let i = 0; i < abcd1.length; i++) {
         if (abcd1[i] !== '') {
             let adk1 = abcd1[i]/10000;
             let ya1 = Math.floor(adk1);
             x_val1.push(ya1);
             const element2 =abcd1[i];
           let adf1 = abcd1[i]/1000000;
           const element1 =y_val1.push(adf1);
            }
     }
    console.log(y_val1);
    const xValues1 = x_val1;

        new Chart("myChart121", {
        type: "line",
        data: {
            labels: xValues1,
            datasets: [{ 
            data: y_val1,
            borderColor: "red",
            borderWidth:1,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            }],
            
        },
        options: {
            legend: {display: false}
        }
    });
};
readersig.readAsText(blob);
}

};
sig1.send();


var signa2Name = "/<?=$segnal_id3->olingan_signal?>";
var sig2 = new XMLHttpRequest();
sig2.open('GET', signa2Name, true);
sig2.responseType = 'blob';
sig2.onload = function(e) {
  if (this.status === 200) {
    var blob = this.response;
    var readersig = new FileReader();
    readersig.onload = function(e) {
      var contents1 = e.target.result;
      // Fayl ma'lumotlarini o'zgaruvchiga saqlash
      var fileContents1 = contents1;
      let abcd1 = fileContents1.split(" ")
      let x_val1 = [];
      let y_val1 = [];
     for (let i = 0; i < abcd1.length; i++) {
         if (abcd1[i] !== '') {
             let adk1 = abcd1[i]/10000;
             let ya1 = Math.floor(adk1);
             x_val1.push(ya1);
             const element2 =abcd1[i];
           let adf1 = abcd1[i]/1000000;
           const element1 =y_val1.push(adf1);
            }
     }
    
    const xValues1 = x_val1;

        new Chart("myChart122", {
        type: "line",
        data: {
            labels: xValues1,
            datasets: [{ 
            data: y_val1,
            borderColor: "red",
            borderWidth:1,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            }],
            
        },
        options: {
            legend: {display: false}
        }
        });
    };
    readersig.readAsText(blob);
  }
};
sig2.send();

var signa3Name = "/<?=$segnal_id->signal_3?>";
var sig3 = new XMLHttpRequest();
sig3.open('GET', signa3Name, true);
sig3.responseType = 'blob';
sig3.onload = function(e) {
  if (this.status === 200) {
    var blob = this.response;
    var readersig = new FileReader();
    readersig.onload = function(e) {
      var contents1 = e.target.result;
      // Fayl ma'lumotlarini o'zgaruvchiga saqlash
      var fileContents1 = contents1;
      let abcd1 = fileContents1.split(" ")
      let x_val1 = [];
      let y_val1 = [];
     for (let i = 0; i < abcd1.length; i++) {
         if (abcd1[i] !== '') {
             let adk1 = abcd1[i]/10000;
             let ya1 = Math.floor(adk1);
             x_val1.push(ya1);
             const element2 =abcd1[i];
           let adf1 = abcd1[i]/1000000;
           const element1 =y_val1.push(adf1);
            }
     }
    
    const xValues1 = x_val1;

        new Chart("myChart123", {
        type: "line",
        data: {
            labels: xValues1,
            datasets: [{ 
            data: y_val1,
            borderColor: "red",
            borderWidth:1,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            }],
            
        },
        options: {
            legend: {display: false}
        }
        });
    };
    readersig.readAsText(blob);
  }
};
sig3.send();

var signa4Name = "/<?=$segnal_id->signal_3?>";
var sig4 = new XMLHttpRequest();
sig4.open('GET', signa4Name, true);
sig4.responseType = 'blob';
sig4.onload = function(e) {
  if (this.status === 200) {
    var blob = this.response;
    var readersig = new FileReader();
    readersig.onload = function(e) {
      var contents1 = e.target.result;
      // Fayl ma'lumotlarini o'zgaruvchiga saqlash
      var fileContents1 = contents1;
      let abcd1 = fileContents1.split(" ")
      let x_val1 = [];
      let y_val1 = [];
     for (let i = 0; i < abcd1.length; i++) {
         if (abcd1[i] !== '') {
             let adk1 = abcd1[i]/10000;
             let ya1 = Math.floor(adk1);
             x_val1.push(ya1);
             const element2 =abcd1[i];
           let adf1 = abcd1[i]/1000000;
           const element1 =y_val1.push(adf1);
            }
     }
    
    const xValues1 = x_val1;

        new Chart("myChart124", {
        type: "line",
        data: {
            labels: xValues1,
            datasets: [{ 
            data: y_val1,
            borderColor: "red",
            borderWidth:0.8,
            pointRadius: 0,
            pointHoverRadius: 0,
            fill: false
            }],
            
        },
        options: {
            legend: {display: false}
        }
        });
    };
    readersig.readAsText(blob);
  }
};
sig4.send();
console.log(y_val1);
</script>
</div>
