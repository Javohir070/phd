<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use app\models\Tavsiya;
$abs= app\models\Bemor::find()->all();
$jamoa = \app\models\Bemor::find()->all(); 
$jamoasoni=count($jamoa);
$erk = \app\models\Bemor::find()->where(['jinsi'=>'erkak'])->all();
$erk_soni=count($erk);
$ayol = \app\models\Bemor::find()->where(['jinsi'=>'ayol'])->all();
$ayol_soni=count($ayol);
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\BemorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bemors';
$this->params['breadcrumbs'][] = $this->title;
?>

<!--/////////////////////////////////////////////////////////////////////////////-->

<div class="header">
    <h1 style="float: left;"><?= Html::encode($this->title) ?></h1>
    <p style="margin-left: 70%;">
        <?= Html::a('Bemor qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
    </p>
</div>
<br>
<style>
    .table td,
    .table th {
        padding: .75rem 1rem !important;
    }
    .solar--chart-bold {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        --svg: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23000' d='M20 13.75a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75v6.75H14V4.25c0-.728-.002-1.2-.048-1.546c-.044-.325-.115-.427-.172-.484c-.057-.057-.159-.128-.484-.172C12.949 2.002 12.478 2 11.75 2c-.728 0-1.2.002-1.546.048c-.325.044-.427.115-.484.172c-.057.057-.128.159-.172.484c-.046.347-.048.818-.048 1.546V20.5H8V8.75A.75.75 0 0 0 7.25 8h-3a.75.75 0 0 0-.75.75V20.5H1.75a.75.75 0 0 0 0 1.5h20a.75.75 0 0 0 0-1.5H20z'/%3E%3C/svg%3E");
        background-color: currentColor;
        -webkit-mask-image: var(--svg);
        mask-image: var(--svg);
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
        -webkit-mask-size: 100% 100%;
        mask-size: 100% 100%;
    }
    .signal-botton{
        display: flex;
        /* border: 2px solid; */
        justify-content: center;
        align-items: center;
        padding: 6px 8px;
        font-size: 14px;
        font-weight: 400;
        color: #ffff;
        border-radius:4px;
        background-color: #28d094 !important;
        margin-top: 10px;
    }
    .signal-botton:hover{
        display: flex;
        /* border: 2px solid; */
        justify-content: center;
        align-items: center;
        padding: 6px 8px;
        font-size: 14px;
        font-weight: 400;
        color: #ffff;
        border-radius:4px;
        background-color: black !important;
        transition: 1s all;
    }
</style>
<div class="content-body">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info" style="font-family: 'LineAwesome';"><?php echo $jamoasoni+ $qash_soni ;?></h3>
                                <h6>Ro'yxatdan o'tishganlar soni  </h6>
                            </div>
                            <div>
                                <i class="icon-basket-loaded info font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="warning" style="font-family: 'LineAwesome';"><?php echo $erk_soni;?></h3>
                                <h6>Erkaklar</h6>
                            </div>
                            <div>
                                <i class="icon-pie-chart warning font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="success" style="font-family: 'LineAwesome';"><?php echo $ayol_soni;?></h3>
                                <h6>Ayollar</h6>
                            </div>
                            <div>
                                <i class="icon-user-follow success font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger" style="font-family: 'LineAwesome';">99.89 %</h3>
                                <h6>Bolalar </h6>
                            </div>
                            <div>
                                <i class="icon-heart danger font-large-2 float-right"></i>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                            <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="grid-view">
                            <div class="summary">Showing <b>1-4 </b> of <b>4</b> items.</div>
                            <table class="table table-striped table-bordered" id="emp-table">
                                <thead>
                                    <tr>
                                        <th col-index=1 ><a href="/bemor/index?sort=id" data-sort="id">ID</a></th>
                                        <th col-index=2 ><a href="/bemor/index?sort=avatar" data-sort="avatar">Rasm</a></th>
                                        <th col-index=3 >Familiya
                                            <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                        </th>
                                        <th col-index=4 >Ism 
                                            <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                            </th>
                                        <th col-index=5 >Sharif 
                                            <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                        </th>
                                        <th><a href="/bemor/index?sort=birth_day" data-sort="birth_day">Tug'ilgan
                                                sana</a></th>
                                                <th><a href="/bemor/index?sort=birth_day" data-sort="birth_day">Yosh</a>
                                                <select id="ageFilter">
                                                <option value="all">Hammasi</option>
                                                <option value="10-15">10-15</option>
                                                <option value="20-30">20-30</option>
                                            </select>
                                            </th>
                                        <th><a href="/bemor/index?sort=telefon" data-sort="telefon">Telefon</a></th>
                                        <th><a href="/bemor/index?sort=email" data-sort="email">Email</a></th>
                                        <th col-index=10>Jinsi
                                            <select class="table-filter" onchange="filter_rows()">
                                                <option value="all"></option>
                                        </th>
                                        <th col-index=11>Tashxis
                                            <select class="table-filter" onchange="filter_rows()">
                                                <option value="all"></option>
                                        </th>
                                        <th><a href="/bemor/index?sort=created_at" data-sort="created_at">Yaratilgan
                                                sana</a></th>
                                        <th><a href="/bemor/index?sort=updated_at" data-sort="updated_at">O'zgartirilgan
                                                sana</a></th>
                                        <th><a href="/bemor/index?sort=olingan_signal"
                                                data-sort="olingan_signal">Olingan Signal</a></th>
                                        <th><a href="/bemor/index?sort=signal_1" data-sort="signal_1">Signal 1</a></th>
                                        <th><a href="/bemor/index?sort=signal_2" data-sort="signal_2">Signal 2</a></th>
                                        <th><a href="/bemor/index?sort=signal_3" data-sort="signal_3">Signal 3</a></th>
                                        <th><a href="/bemor/index?sort=signal_4" data-sort="signal_4">Signal 4</a></th>
                                        <th><a href="/bemor/index?sort=tashxis" data-sort="tashxis">Tashxis Fayli</a></th>
                                        <th col-index=20>Viloyati
                                                <select class="table-filter" onchange="filter_rows()">
                                                <option value="all"></option>
                                        </th>
                                        <th col-index=21>Tuman
                                                <select class="table-filter" onchange="filter_rows()">
                                                <option value="all"></option></th>
                                        <th><a href="/bemor/index?sort=manzili" data-sort="manzili">Manzili</a></th>
                                        <th class="action-column">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <?php foreach($abs as $r){?>
                                    <tr data-key="13">
                                        <td><?=$r->id?></td>
                                        <td><img src="/<?=($r->avatar)?$r->avatar:'uploads/bemor/rasm/2023/Nov/07/hISAl-BJZBIR.png'?>" width="50"
                                                alt=""></td>
                                        <td><?=$r->last_name?></td>
                                        <td><?=$r->first_name?></td>
                                        <td><?=$r->middle_name?></td>
                                        <td><?php echo date("d-m-Y",strtotime($r->birth_day));?></td>
                                        <td><?php echo (2024- date("Y",strtotime($r->birth_day)));?></td>
                                        <td><?=$r->telefon?></td>
                                        <td><a href="mailto:s.makhmudjanov@gmail.com"><?=$r->email?></a></td>
                                        <td><?=$r->jinsi?></td>
                                        <td><?=$r->tashxis?></td>
                                        <td><?php echo date("d-m-Y",$r->created_at);?></td>
                                        <td><?php echo date('d-m-Y',($r->updated_at)?($r->updated_at):($r->created_at));?></td>
                                        <td><?=$r->olingan_signal?>
                                            <a class="signal-botton" href="<?=Url::to(['/bemor/chart','id'=>$r->id])?>" >
                                                Signalni girafikgi korish
                                            </a>
                                        </td>
                                        <td><?=$r->signal_1?>
                                            <a class="signal-botton" href="<?=Url::to(['/bemor/signal','id'=>$r->id, 'name'=>$r->signal_1])?>" >
                                                Signalni girafikgi korish
                                            </a> 
                                        </td>
                                        <td><?=$r->signal_2?>
                                            <a class="signal-botton" href="<?=Url::to(['/bemor/signal','id'=>$r->id, 'name'=>$r->signal_2])?>" >
                                                Signalni girafikgi korish
                                            </a> 
                                       </td>
                                        <td><?=$r->signal_3?>
                                            <a class="signal-botton" href="<?=Url::to(['/bemor/signal','id'=>$r->id, 'name'=>$r->signal_3])?>" >
                                                Signalni girafikgi korish
                                            </a> 
                                       </td>
                                        <td><?=$r->signal_4?> 
                                            <a class="signal-botton" href="<?=Url::to(['/bemor/signal','id'=>$r->id, 'name'=>$r->signal_4])?>" >
                                                Signalni girafikgi korish
                                            </a> 
                                        </td>
                                        <td><?=$r->tashxis_file?></td>
                                        <td><?=!empty($r->region)?$r->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($r->district)?$r->district->tuman_nomi:''?></td>
                                        <td><?=$r->manzili?></td>
                                        <td><a href="<?=Url::to(['/bemor/chart','id'=>$r->id])?>" aria-label="View" data-pjax="0"><span class="solar--chart-bold"></span></a>
                                                    
                                        <a href="<?=Url::to(['/bemor/view/'.$r->id,'id'=>$r->id])?>" title="View" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a>
                                                     <a href="/bemor/update/<?=$r->id?>" title="Update" aria-label="Update"
                                                data-pjax="0"><span class="glyphicon glyphicon-pencil"><i class="ft-edit text-success"></i></span></a> <a
                                                href="/bemor/delete/<?=$r->id?>" title="Delete" aria-label="Delete" data-pjax="0"
                                                data-confirm="Are you sure you want to delete this item?"
                                                data-method="post"><span class="glyphicon glyphicon-trash"><i class="ft-trash-2 ml-1 text-warning"></i></span></a>
                                       </td>
                                    </tr>
                                    <?}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?= $this->render('@webroot/views/bemor/viloyat'); ?>
        <?= $this->render('@webroot/views/bemor/turlar'); ?>
    </div>
</div>
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
</style>
<script src="../../web/frontend/assets/js/filter.js"></script>
<script>
    window.onload = () => {
        console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
    };

    getUniqueValuesFromColumn();
    
</script>

