<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
use yii\widgets\DetailView;
use app\models\Tavsiya;

?>

        <div class="col-6 ">
            <!-- Bar Basic Chart Start -->
            <div class="card">
                <div class="card-body" style="position: relative;">
                <div class="card-title">Kasalliklar turi</div>
                <div id="bar-basic-chart" style="">
                    <div id="apexchartspz6pgtkh" class="apexcharts-canvas apexchartspz6pgtkh light" ></div>
                </div>
                <div class="resize-triggers"><div class="expand-trigger"><div style=""></div></div><div class="contract-trigger"></div></div></div>
            </div>
            <!-- bar basic chart end -->
        </div>
        <div class="col-6 " style="">
            <!-- Bar Basic Chart Start -->
            <div class="card">
                <div class="card-body" style="position: relative;">
                <div class="card-title">Bar Basic Chart</div>
                <div id="bar-basic-chart" style="">
                    <div id="pie-simple-chart" class="apexcharts-canvas pie-simple-chart light" ></div>
                </div>
                <div class="resize-triggers"><div class="expand-trigger"><div style=""></div></div><div class="contract-trigger"></div></div></div>
            </div>
            <!-- bar basic chart end -->
        </div>