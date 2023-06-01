<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
$abs= app\models\Bemor::find()->all();

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
<div class="content-body">

    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="grid-view">
                            <div class="summary">Showing <b>1-4</b> of <b>4</b> items.</div>
                            <table class="table table-striped table-bordered" id="emp-table">
                                <thead>
                                    <tr>
                                        <th col-index=1 >#</th>
                                        <th col-index=2 ><a href="/bemor/index?sort=id" data-sort="id">ID</a></th>
                                        <th col-index=3 ><a href="/bemor/index?sort=avatar" data-sort="avatar">Rasm</a></th>
                                        <th col-index=4 >Familiya
                                            <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                        </th>
                                        <th col-index=5 >Ism 
                                            <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                            </th>
                                        <th col-index=6 >Sharif 
                                            <select class="table-filter" onchange="filter_rows()">
                                            <option value="all"></option>
                                        </select>
                                        </th>
                                        <th><a href="/bemor/index?sort=birth_day" data-sort="birth_day">Tug'ilgan
                                                sana</a></th>
                                        <th><a href="/bemor/index?sort=telefon" data-sort="telefon">Telefon</a></th>
                                        <th><a href="/bemor/index?sort=email" data-sort="email">Email</a></th>
                                        <th><a href="/bemor/index?sort=jinsi" data-sort="jinsi">Jinsi</a></th>
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
                                        <th><a href="/bemor/index?sort=tashxis" data-sort="tashxis">Tashxis</a></th>
                                        <th><a href="/bemor/index?sort=tashxis_file" data-sort="tashxis_file">Tashxis
                                                Fayli</a></th>
                                        <th><a href="/bemor/index?sort=manzili" data-sort="manzili">Manzili</a></th>
                                        <th class="action-column">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($abs as $r){?>
                                    <tr data-key="13">
                                        <td><?php echo $r + 1 ?></td>
                                        <td><?=$r->id?></td>
                                        <td><img src="/<?=$r->avatar?>" width="50"
                                                alt=""></td>
                                        <td><?=$r->last_name?></td>
                                        <td><?=$r->first_name?></td>
                                        <td><?=$r->middle_name?></td>
                                        <td><?=$r->birth_day?></td>
                                        <td><?=$r->telefon?></td>
                                        <td><a href="mailto:s.makhmudjanov@gmail.com"><?=$r->email?></a></td>
                                        <td><?=$r->jinsi?></td>
                                        <td><?=$r->created_at?></td>
                                        <td><?=$r->updated_at?></td>
                                        <td><?=$r->olingan_signal?></td>
                                        <td><?=$r->signal_1?></td>
                                        <td><?=$r->signal_2?></td>
                                        <td><?=$r->signal_3?></td>
                                        <td><?=$r->signal_4?></td>
                                        <td><?=$r->tashxis?></td>
                                        <td><?=$r->tashxis_file?></td>
                                        <td><?=$r->manzili?></td>
                                        <td><a href="/bemor/view/<?=$r->id?>" title="View" aria-label="View" data-pjax="0"><span
                                                    class="glyphicon glyphicon-eye-open"><i class="ft-eye text-success"></i></span></a> <a
                                                href="/bemor/update/<?=$r->id?>" title="Update" aria-label="Update"
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

    getUniqueValuesFromColumn()
</script>