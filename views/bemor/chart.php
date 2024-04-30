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
                                            <th>Yaratilgan sana</th>
                                            <th>O'zgartirilgan sana</th>
                                            <th>Tashxis Fayli</th>
                                            <th>Olingan Signal</th>
                                            <th>Signal 1</th>
                                            <th>Signal 2</th>
                                            <th>Signal 3</th>
                                            <th>Signal 4</th>
                                            <th col-index=20>Viloyati </th>
                                            <th col-index=21>Tuman </th>
                                            <th>Manzili</th>
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
                                        <td><?php echo date("d-m-Y",$r->created_at);?></td>
                                        <td><?php echo date('d-m-Y',($r->updated_at)?($r->updated_at):($r->created_at));?></td>
                                        <td><?=$model->olingan_signal?></td>
                                        <td><?=$model->tashxis_file?></td>
                                        <td><?=$model->signal_1?></td>
                                        <td><?=$model->signal_2?></td>
                                        <td><?=$model->signal_3?></td>
                                        <td><?=$model->signal_4?></td>
                                        <td><?=!empty($model->region)?$model->region->viloyat_nomi:''?></td>
                                        <td><?=!empty($model->district)?$model->district->tuman_nomi:''?></td>
                                        <td><?=$model->manzili?></td>
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
                    <h4 class="card-title">Filter qilinmagan signal</h4>
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
                    <div class="card-body chartjs" style="max-height: 458px !important;" >
                        <canvas id="myChartSignal"  style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tashxis : <?=$model->tashxis?></h4>
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
                    <div class="card-body chartjs" style="max-height: 458px !important;" style="height: 500px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="line-chartsignal" height="458" width="1542" style="display: block; width: 1542px; height: 458px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="chartjs-line-charts">
    <div class="row">
        <div class="col-6">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Yo'g'on ichak</h4>
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
                    <div class="card-body chartjs" style="max-height: 458px !important;" >
                        <canvas id="myChartSignal1"  style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Oshqozon</h4>
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
                    <div class="card-body chartjs" style="max-height: 458px !important;" >
                        <canvas id="myChartSignal2"  style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
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
                    <div class="card-body chartjs" style="max-height: 458px !important;" >
                        <canvas id="myChartSignal3"  style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
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
                    <div class="card-body chartjs" style="max-height: 458px !important;" >
                        <canvas id="myChartSignal4"  style="display: block; width: 1545px; height: 400px !important;" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        // Faylni o'qish uchun XMLHttpRequest obyekti yaratish
        function readFile(fileName) {
            return new Promise((resolve, reject) => {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', fileName, true);
            xhr.responseType = 'blob';
            xhr.onload = function(e) {
                if (this.status === 200) {
                var blob = this.response;
                var reader = new FileReader();
                reader.onload = function(e) {
                    var contents = e.target.result;
                    resolve(contents);
                };
                reader.readAsText(blob);
                } else {
                reject(new Error('Failed to load file: ' + fileName));
                }
            };
            xhr.send();
            });
        }
        // Fayllarni o'qish uchun massiv
        var fileNames = ["/<?=$model->olingan_signal?>", "/<?=$model->signal_1?>", "/<?=$model->signal_2?>", "/<?=$model->signal_3?>","/<?=$model->signal_4?>"];
        
        // Barcha fayllarni o'qish uchun Promiselar massivi
        var filePromises = fileNames.map(readFile);
        
        // Barcha fayllar o'qilganda amalni bajarish
        Promise.all(filePromises)
        .then(fileContentsArray => {
            var resultArray = [];

            for (var i = 0; i < fileContentsArray.length; i++) {
            var fileContents = fileContentsArray[i];
            // Ma'lumotlarni ishlab chiqish yoki qanday qilib foydalanishingiz mumkin
            //   console.log('File ' + (i + 1) + ' contents:', fileContents);

            // Natijani resultArray ga qo'shish
            resultArray.push(fileContents);
            }

            // resultArray ga olingan ma'lumotlarni foydalanishingiz mumkin
            // console.log('All file contents in an array:', resultArray);
            
            // Natijani 4 ta o'zgaruvchiga qo'yish
            var variable  = resultArray[0]
            var variable1 = resultArray[1];
            var variable2 = resultArray[2];
            var variable3 = resultArray[3];
            var variable4 = resultArray[4];
            //hammasin umimiy signali
            var fileuzgarivch = variable;
            let signalArr = fileuzgarivch.split(" ")
            let xQiymati = [];
            let yQiymati = [];
            for (let i = 0; i < signalArr.length; i++) {
                if (signalArr[i] !== '') {
                    xQiymati.push(i);
                    let adk = signalArr[i]/10000;
                    let ya = Math.floor(adk);
                    // xQiymati.push(ya);
                    const element2 =signalArr[i];
                    let adf = signalArr[i]/1000000;
                    const element =yQiymati.push(adf);
                }   
            };

            //birinchi signal qiymatilar
            var fileuzgarivch1 = variable1;
            let signalArr1 = fileuzgarivch1.split(" ")
            let xQiymati1 = [];
            let yQiymati1 = [];
            for (let i = 0; i < signalArr1.length; i++) {
                if (signalArr1[i] !== '') {
                    xQiymati1.push(i);
                    let adk = signalArr1[i]/10000;
                    let ya = Math.floor(adk);
                    // xQiymati1.push(ya);
                    const element2 =signalArr1[i];
                    let adf = signalArr1[i]/1000000;
                    const element =yQiymati1.push(adf);
                    };   
            };
            //ikkinchi signal qiymatlar
            var fileuzgarivch2 = variable2;
            let signalArr2 = fileuzgarivch2.split(" ")
            let xQiymati2 = [];
            let yQiymati2 = [];
            for (let i = 0; i < signalArr2.length; i++) {
                if (signalArr2[i] !== '') {
                    xQiymati2.push(i);
                    let adk = signalArr2[i]/10000;
                    let ya = Math.floor(adk);
                    // xQiymati2.push(ya);
                    const element2 =signalArr2[i];
                    let adf = signalArr2[i]/1000000;
                    const element =yQiymati2.push(adf);
                    };   
            };
            //uchinchi signal qiymatlar
            var fileuzgarivch3 = variable3;
            let signalArr3 = fileuzgarivch3.split(" ")
            let xQiymati3 = [];
            let yQiymati3 = [];
            for (let i = 0; i < signalArr3.length; i++) {
                if (signalArr3[i] !== '') {
                    xQiymati3.push(i);
                    let adk = signalArr3[i]/10000;
                    let ya = Math.floor(adk);
                    // xQiymati3.push(ya);
                    const element2 =signalArr3[i];
                    let adf = signalArr3[i]/1000000;
                    const element =yQiymati3.push(adf);
                    };   
            };
            //turtichi signal qiymatlar
            var fileuzgarivch4 = variable4;
            let signalArr4 = fileuzgarivch4.split(" ")
            let xQiymati4 = [];
            let yQiymati4 = [];
            for (let i = 0; i < signalArr4.length; i++) {
                if (signalArr4[i] !== '') {
                    xQiymati4.push(i);
                    let adk = signalArr4[i]/10000;
                    let ya = Math.floor(adk);
                    // xQiymati4.push(ya);
                    const element2 =signalArr4[i];
                    let adf = signalArr4[i]/1000000;
                    const element =yQiymati4.push(adf);
                    };   
            };
  

            //chart signalar buyicha ummumiysi
            const xValues5 = xQiymati;
            new Chart("myChartSignal", {
            type: "line",
            data: {
                labels: xValues5,
                datasets: [{ 
                data: yQiymati,
                borderColor: "red",
                fill: false,
                pointRadius: 0,
                borderWidth:0.8,
                pointHoverRadius: 0
                }],
                
            },
            options: {
                legend: {display: false}
            }
            });
            const xValues1 = xQiymati1;
            new Chart("myChartSignal1", {
            type: "line",
            data: {
                labels: xValues1,
                datasets: [{ 
                data: yQiymati1,
                borderColor: "red",
                fill: false,
                pointRadius: 0,
                borderWidth:0.8,
                pointHoverRadius: 0
                }],
                
            },
            options: {
                legend: {display: false}
            }
            });
            const xValues2 = xQiymati2;
            new Chart("myChartSignal2", {
            type: "line",
            data: {
                labels: xValues2,
                datasets: [{ 
                data: yQiymati2,
                borderColor: "red",
                fill: false,
                pointRadius: 0,
                borderWidth:0.8,
                pointHoverRadius: 0
                }],
                
            },
            options: {
                legend: {display: false}
            }
            });
            const xValues3 = xQiymati3;
            new Chart("myChartSignal3", {
            type: "line",
            data: {
                labels: xValues3,
                datasets: [{ 
                data: yQiymati3,
                borderColor: "red",
                fill: false,
                pointRadius: 0,
                borderWidth:0.8,
                pointHoverRadius: 0
                }],
                
            },
            options: {
                legend: {display: false}
            }
            });
            const xValues4 = xQiymati4;
            new Chart("myChartSignal4", {
            type: "line",
            data: {
                labels: xValues4,
                datasets: [{ 
                data: yQiymati4,
                borderColor: "red",
                fill: false,
                pointRadius: 0,
                borderWidth:0.8,
                pointHoverRadius: 0
                }],
                
            },
            options: {
                legend: {display: false}
            }
            });
            var o = $("#line-chartsignal");
            new Chart(o, {
            type: "line",
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                legend: {
                    position: "bottom"
                },
                hover: {
                    mode: "label"
                },
                scales: {
                    xAxes: [{
                        display: !0,
                        gridLines: {
                        color: "#f3f3f3",
                        drawTicks: !1
                        },
                        scaleLabel: {
                        display: !0,
                        labelString: "Signallar"
                        }
                    }],
                    yAxes: [{
                        display: !0,
                        gridLines: {
                        color: "#f3f3f3",
                        drawTicks: !1
                        },
                        scaleLabel: {
                        display: !0,
                        labelString: "Value"
                        }
                    }]
                },
                title: {
                    display: !0,
                    text: "Kasalliklar buyicha olingan signallar"
                }
            },
            data: {
                labels: xQiymati,
                datasets: [{
                    label: "Filter qilinmagan",
                    data: yQiymati,
                    fill: !1,
                    borderColor: "red",
                    pointBorderColor: "red",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointRadius: 0,
                    borderWidth:0.8,
                    pointHoverRadius: 0,
                    pointHoverBorderWidth: 2,

                }, {
                    label: "Yo'g'on ichak ",
                    data: yQiymati1,
                    lineTension: 0,
                    fill: !1,
                    borderColor: "#00A5A8",
                    pointBorderColor: "#00A5A8",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 0,
                    borderWidth:0.8,
                    pointHoverRadius: 0

                }, {
                    label: "Oshqozon",
                    data: yQiymati2,
                    lineTension: 0,
                    fill: !1,
                    borderColor: "#FF7D4D",
                    pointBorderColor: "#FF7D4D",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 0,
                    borderWidth:0.8,
                    pointHoverRadius: 0

                }, {
                    label: "Ingichka ichak",
                    data: yQiymati3,
                    fill: !1,
                    borderColor: "blue",
                    pointBorderColor: "blue",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 0,
                    borderWidth:0.8,
                    pointHoverRadius: 0
                }, {
                    label: "O'n ikki barmoqli ichak",
                    data: yQiymati4,
                    lineTension: 0,
                    fill: !1,
                    borderColor: "green",
                    pointBorderColor: "green",
                    pointBackgroundColor: "#FFF",
                    pointBorderWidth: 2,
                    pointHoverBorderWidth: 2,
                    pointRadius: 0,
                    borderWidth:0.8,
                    pointHoverRadius: 0
                }]
            }
            })
            })
        .catch(error => {console.error(error);});
</script>