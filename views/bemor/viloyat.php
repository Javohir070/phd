<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
use yii\widgets\DetailView;
use app\models\Tavsiya;
$qoraqal = \app\models\Bemor::find()->where(['viloyat_id'=>'1'])->all();
$qoraqal_soni=count($qoraqal);
$andijon = \app\models\Bemor::find()->where(['viloyat_id'=>'2'])->all();
$andijon_soni=count($andijon);
$buxoro = \app\models\Bemor::find()->where(['viloyat_id'=>'3'])->all();
$buxoro_soni=count($buxoro);
$jizzax = \app\models\Bemor::find()->where(['viloyat_id'=>'4'])->all();
$jizzax_soni=count($jizzax);
$qashqadaryo = \app\models\Bemor::find()->where(['viloyat_id'=>'5'])->all();
$qashqadaryo_soni=count($qashqadaryo);
$navoiy = \app\models\Bemor::find()->where(['viloyat_id'=>'6'])->all();
$navoiy_soni=count($navoiy);
$namangan = \app\models\Bemor::find()->where(['viloyat_id'=>'7'])->all();
$namangan_soni=count($namangan);
$samarqand = \app\models\Bemor::find()->where(['viloyat_id'=>'8'])->all();
$samarqand_soni=count($samarqand);
$surxon = \app\models\Bemor::find()->where(['viloyat_id'=>'9'])->all();
$surxon_soni=count($surxon);
$sirdaryo = \app\models\Bemor::find()->where(['viloyat_id'=>'10'])->all();
$sirdaryo_soni=count($sirdaryo);
$toshkent = \app\models\Bemor::find()->where(['viloyat_id'=>'11'])->all();
$toshkent_soni=count($toshkent);
$fargona = \app\models\Bemor::find()->where(['viloyat_id'=>'12'])->all();
$fargona_soni=count($fargona);
$xaoazm = \app\models\Bemor::find()->where(['viloyat_id'=>'13'])->all();
$xaoazm_soni=count($xaoazm);
$tosh_shahri = \app\models\Bemor::find()->where(['viloyat_id'=>'14'])->all();
$tosh_shahri_soni=count($tosh_shahri);
$viloyat = array();
array_push($viloyat,$qoraqal_soni,$andijon_soni,$buxoro_soni,$jizzax_soni,$qashqadaryo_soni,$navoiy_soni,$namangan_soni,$samarqand_soni,$surxon_soni, $sirdaryo_soni, $toshkent_soni,$fargona_soni, $xaoazm_soni,$tosh_shahri_soni);

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\BemorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bemors';
$this->params['breadcrumbs'][] = $this->title;
?>

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

<script>
    /*=========================================================================================
    File Name: column.js
    Description: Chartjs column chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Column chart
// ------------------------------


$(window).on("load", function(){

//Get the context of the Chart canvas element we want to select
var ctx = $("#column-chart_viloyat");

// Chart Options
var chartOptions = {
    // Elements options apply to all of the options unless overridden in a dataset
    // In this case, we are setting the border of each bar to be 2px wide and green
    elements: {
        rectangle: {
            borderWidth: 2,
            borderColor: 'rgb(0, 255, 0)',
            borderSkipped: 'bottom'
        }
    },
    responsive: true,
    maintainAspectRatio: false,
    responsiveAnimationDuration:500,
    legend: {
        position: 'top',
    },
    scales: {
        xAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
            }
        }],
        yAxes: [{
            display: true,
            gridLines: {
                color: "#f3f3f3",
                drawTicks: false,
            },
            scaleLabel: {
                display: true,
            }
        }]
    },
    title: {
        display: true,
        text: 'Oʻzbekiston viloyatlari '
    }
};

// Chart Data
var chartData = {
    labels: ["Qoraqalpog","Andijon","Buxoro", "Jizzax",  "Qashqadaryo", "Navoiy", "Namangan", "Surxondaryo","Sirdaryo", "Fargona"    ],
    datasets: [{
        label: "Odamlar soni",
        data: [65, 59, 80, 81, 56, 65, 59, 80, 81, 56, 10, 54],
        backgroundColor: "#28D094",
        hoverBackgroundColor: "rgba(22,211,154,.9)",
        borderColor: "transparent"
    }
    //  {
    //     label: "My Second dataset",
    //     data: [28, 48, 40, 19, 86],
    //     backgroundColor: "#F98E76",
    //     hoverBackgroundColor: "rgba(249,142,118,.9)",
    //     borderColor: "transparent"
    // }
]
};

var config = {
    type: 'bar',

    // Chart Options
    options : chartOptions,

    data : chartData
};

// Create the chart
var lineChart = new Chart(ctx, config);
});



</script>