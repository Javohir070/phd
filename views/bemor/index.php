<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
use yii\widgets\DetailView;
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
</style>
<!-- <div class="user1-index">  -->
<!-- <div class="content-body"> -->

    <!-- <div class="users-list-table"> -->
        <!-- <div class="card"> -->
            <!-- <div class="card-content"> -->
                <!-- <div class="card-body">
                    <div class="table-responsive">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id',
                                [
                                    'attribute' => 'avatar',
                                    'format' => 'html',
                                    'label' => 'Rasm',
                                    'value' => function ($data) {
                                        return Html::img('/' . $data['avatar'],
                                            ['width' => '50px']);
                                    },
                                ],

                                'last_name',
                                'first_name',
                                'middle_name',
                                'birth_day',
                                'telefon',
                                'email:email',
                                'jinsi',
                                'created_at',
                                'updated_at',
                                'olingan_signal',
                                'signal_1',
                                'signal_2',
                                'signal_3',
                                'signal_4',
                                'tashxis',
                                'tashxis_file',
                                'manzili',
                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    </div>
                </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->


<!-- </div> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="content-body">
    
<a href="#" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8"
                   data-toggle="modal" data-target="#ms-account-modal">
                    <i class="zmdi zmdi-account"></i>hdas
                </a>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="info" style="font-family: 'LineAwesome';"><?php echo $jamoasoni;?></h3>
                                <h6>Ro'yxatdan o'tishganlar soni</h6>
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
                                <h6>Bolalar</h6>
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
                                                <th><a href="/bemor/index?sort=birth_day" data-sort="birth_day">Yosh</a></th>
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
                                <tbody>
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
                                        <td><?=$r->created_at?></td>
                                        <td><?=$r->updated_at?></td>
                                        <td><?=$r->olingan_signal?></td>
                                        <td><?=$r->signal_1?></td>
                                        <td><?=$r->signal_2?></td>
                                        <td><?=$r->signal_3?></td>
                                        <td><?=$r->signal_4?> <button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
										Launch Modal
									</button></td>
                                        <td><?=$r->tashxis_file?></td>
                                        <td><?=!empty($r->region)?$r->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($r->district)?$r->district->tuman_nomi:''?></td>
                                        <td><?=$r->manzili?></td>
                                        <td><a href="<?=Url::to(['/bemor/chart','id'=>$r->id])?>" aria-label="View" data-pjax="0"><span
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Oʻzbekiston viloyatlari kesimda</h4>
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
                    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="column-chart" height="400" width="1545" style="display: block; width: 1545px; height: 400px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
								<div class="form-group">
									
									<button type="button" class="btn btn-outline-primary block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
										Launch Modal
									</button>

									<!-- Modal -->
									<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myModalLabel4">Basic Modal</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													<h5>Check First Paragraph</h5>
													<p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie. Brownie carrot
														cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake cheesecake cookie chocolate cake
														liquorice. Apple pie sugar plum powder donut soufflé.</p>
													<p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream. Danish candy
														cake.</p>
													<hr>
													<h5>Some More Text</h5>
													<p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon toffee danish.
														Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu lollipop candy cookie biscuit pie.</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-outline-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div>
								</div>
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