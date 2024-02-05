<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
use yii\widgets\DetailView;
use app\models\Tavsiya;

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
        <a href="<?=Url::to('/bemor');?>" class='btn btn-info btn-min-width mr-1 mb-1 btn-block'>Orqaga qaytish</a>
    </p>
</div>
<br>

<style>
    .table td,
    .table th {
        padding: .75rem 1rem !important;
    }
</style>

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
                                    <tr data-key="13">
                                        <td><?=$model->id?></td>
                                        <td><img src="/<?=($model->avatar)?$model->avatar:'uploads/bemor/rasm/2023/Nov/07/hISAl-BJZBIR.png'?>" width="50"
                                                alt=""></td>
                                        <td><?=$model->last_name?></td>
                                        <td><?=$model->first_name?></td>
                                        <td><?=$model->middle_name?></td>
                                        <td><?php echo date("d-m-Y",strtotime($model->birth_day));?></td>
                                        <td><?php echo (2024- date("Y",strtotime($model->birth_day)));?></td>
                                        <td><?=$model->telefon?></td>
                                        <td><a href="mailto:s.makhmudjanov@gmail.com"><?=$model->email?></a></td>
                                        <td><?=$model->jinsi?></td>
                                        <td><?=$model->tashxis?></td>
                                        <td><?=$model->created_at?></td>
                                        <td><?=$model->updated_at?></td>
                                        <td><?=$model->olingan_signal?></td>
                                        <td><?=$model->signal_1?></td>
                                        <td><?=$model->signal_2?></td>
                                        <td><?=$model->signal_3?></td>
                                        <td><?=$model->signal_4?></td>
                                        <td><?=$model->tashxis_file?></td>
                                        <td><?=!empty($model->region)?$model->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($model->district)?$model->district->tuman_nomi:''?></td>
                                        <td><?=$model->manzili?></td>
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
<section id="chartjs-advance-charts">
    <!-- Bubble Chart -->
   
 
  

    <!-- Different Point Sizes Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px;height: 600px;" >
                <div class="card-header">
                    <h4 class="card-title"><?=$model->tashxis?></h4>
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
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
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
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
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
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
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
</section>
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
        <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Simple Line Chart</h4>
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
</section>
<script>
    // Bazadan kelgan fayl nomi
// var fileName = "/uploads/bemor/signals/2023/Dec/14/text.txt";
var fileName = "/<?=$model->olingan_signal?>"

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
            }],
            
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

var signa2Name = "/<?=$model->signal_1?>";
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


var signa2Name = "/<?=$model->signal_1?>";
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

var signa3Name = "/<?=$model->signal_3?>";
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

var signa4Name = "/<?=$model->signal_3?>";
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
</script>