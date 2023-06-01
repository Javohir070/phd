<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bizning Jamoa';
$this->params['breadcrumbs'][] = $this->title;
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<div class="header">
    <h1 style="float: left;"><?= Html::encode($this->title) ?></h1>
    <p style="margin-left: 70%;">
        <?= Html::a('Jamoaga a\'zo qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
    </p>
</div>
<br>

<style>
    .table td, .table th {
        padding: .75rem 1rem !important;
    }
</style>
<!-- <div class="user1-index">  -->
<div class="content-body">

    <section id="patients-list">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Bemorlar jadvali</h2>
                        <div class="heading-elements">
                            <a href="#" class="btn btn-danger round btn-sm"><i
                                        class="la la-plus font-small-2"></i>
                                Add Patient
                            </a>
                        </div>
                    </div>
                    <div class="card-body collapse show">
                        <div class="card-body card-dashboard">
                        </div>
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="DataTables_Table_0_length">
                                            <label>
                                                Show
                                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>
                                                entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered patients-list dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <!--THEAD BOSHLANISHI-->
                                            <thead>

                                                <tr role="row">

                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="№: activate to sort column descending" style="width: 70px;">
                                                        №
                                                    </th>

                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Foto: activate to sort column descending" style="width: 70px;">
                                                        Foto
                                                    </th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 134px;">
                                                        FIO
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 82px;">
                                                        Jinsi
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Disease: activate to sort column ascending" style="width: 112px;">
                                                        Tashxis
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 172px;">
                                                        Viloyati
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 82px;">
                                                        Yoshi
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount Due: activate to sort column ascending" style="width: 201px;">
                                                        Olingan signal
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount Due: activate to sort column ascending" style="width: 201px;">
                                                        1-pog'onali signal
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount Due: activate to sort column ascending" style="width: 201px;">
                                                        2-pog'onali signal
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount Due: activate to sort column ascending" style="width: 201px;">
                                                        3-pog'onali signal
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount Due: activate to sort column ascending" style="width: 201px;">
                                                        4-pog'onali signal
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Previous Visit: activate to sort column ascending" style="width: 212px;">
                                                        Telefon raqami
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Previous Visit: activate to sort column ascending" style="width: 212px;">
                                                        email
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Previous Visit: activate to sort column ascending" style="width: 212px;">
                                                        Tug'ilgan sa'nasi
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Previous Visit: activate to sort column ascending" style="width: 212px;">
                                                        Ro'yxatga olingan sa'na
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Previous Visit: activate to sort column ascending" style="width: 212px;">
                                                        Ma'lumot o'zgartirilgan sa'na
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Previous Visit: activate to sort column ascending" style="width: 212px;">
                                                        Tashxis fayli
                                                    </th>


                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 134px;">
                                                        Harakatlar
                                                    </th>
                                                </tr>

                                            </thead>
                                            <!--THEAD TUGASHI-->

                                            <tbody>

                                            <tr role="row" class="odd">
                                                <td>1</td>
                                                <td class="sorting_1">
                                                    <ul class="list-unstyled users-list m-0">
                                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                            <img class="media-object rounded-circle" src="/web/backend/app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="sorting_1">Aliyeva Vasila Fozilovna</td>
                                                <td>Ayol</td>
                                                <td>Oshqozon ichak</td>
                                                <td>Toshkent</td>
                                                <td>47</td>
                                                <td>
                                                    <canvas id='c'></canvas>
                                                </td>
                                                <td>
                                                    <canvas id="myChart1" style="width:100%;max-width:200px"></canvas>
                                                </td>
                                                <td>
                                                    <canvas id="myChart2" style="width:100%;max-width:200px"></canvas>
                                                </td>
                                                <td>
                                                    <canvas id="myChart" style="width:100%;max-width:200px"></canvas>
                                                </td>
                                                <td>
                                                    <canvas id="chLine"></canvas>
                                                </td>
                                                <td>+998(99) 123 45 67</td>
                                                <td>example@gmail.com</td>
                                                <td>1990/10/09</td>
                                                <td>2018/10/09</td>
                                                <td>2022/10/09</td>

                                                <td>
                                                    <a href="#"><i class="ft-file text-success"></i></a>
                                                </td>

                                                <td>
                                                    <a href="#"><i class="ft-eye text-success"></i></a>
                                                    <a href="#"><i class="ft-edit text-success"></i></a>
                                                    <a href="#"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                                                </td>
                                            </tr>


                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1">№</th>
                                                <th rowspan="1" colspan="1">Foto</th>
                                                <th rowspan="1" colspan="1">FIO</th>
                                                <th rowspan="1" colspan="1">Jinsi</th>
                                                <th rowspan="1" colspan="1">Tashxis</th>
                                                <th rowspan="1" colspan="1">Manzili</th>
                                                <th rowspan="1" colspan="1">Yoshi</th>
                                                <th rowspan="1" colspan="1">Olingan signal</th>
                                                <th rowspan="1" colspan="1">1-pog'onali signal</th>
                                                <th rowspan="1" colspan="1">2-pog'onali signal</th>
                                                <th rowspan="1" colspan="1">3-pog'onali signal</th>
                                                <th rowspan="1" colspan="1">4-pog'onali signal</th>
                                                <th rowspan="1" colspan="1">Telefon raqami</th>
                                                <th rowspan="1" colspan="1">email</th>
                                                <th rowspan="1" colspan="1">Tug'ilgan sa'nasi</th>
                                                <th rowspan="1" colspan="1">Ro'yxatga olingan sa'na</th>
                                                <th rowspan="1" colspan="1">Ma'lumot o'zgartirilgan sa'na</th>
                                                <th rowspan="1" colspan="1">Tashxis fayli</th>
                                                <th rowspan="1" colspan="1">Harakatlar</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                             aria-live="polite">Showing 1 to 57 of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Oldingi</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next">
                                                    <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Keyingi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<!--myChart  GARFIK-->
<script>
    var xValues = [];
    var yValues = [];
    generateData("Math.sin(x)", 0, 10, 0.5);

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                pointRadius: 2,
                borderColor: "rgba(0,0,255,0.5)",
                data: yValues
            }]
        },
        options: {
            legend: {display: false},
            title: {
                display: true,
                text: "Asosiy",
                fontSize: 16
            }
        }
    });
    function generateData(value, i1, i2, step = 1) {
        for (let x = i1; x <= i2; x += step) {
            yValues.push(eval(value));
            xValues.push(x);
        }
    }
</script>

<canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
<!--myChart1   GRAFIK-->
<script>
    var xValues = [100,200,300,400,500,600,700,800,900,1000];

    new Chart("myChart1", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                borderColor: "red",
                fill: false
            },
            //     {
            //     data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
            //     borderColor: "green",
            //     fill: false
            // },

            //     {
            //     data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
            //     borderColor: "blue",
            //     fill: false
            // }
            ]
        },
        options: {
            legend: {display: false}
        }
    });
</script>

<script>
    var xValues = [100,200,300,400,500,600,700,800,900,1000];

    new Chart("myChart2", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [
            //     {
                //            //     data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                //            //     borderColor: "red",
                //            //     fill: false
                //            // },
                    {
                    data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                    borderColor: "green",
                    fill: false
                },

                //     {
                //     data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
                //     borderColor: "blue",
                //     fill: false
                // }
            ]
        },
        options: {
            legend: {display: false}
        }
    });
</script>






<style type="text/css">
    body {
        /*margin: 0;*/
        /*overflow: hidden;*/
        /*background: #152B39;*/
        /*font-family: Courier, monospace;*/
        /*font-size: 14px;*/
        /*color:#ccc;*/
    }

    .wrapper1 {
        display: block;
        margin: 5em auto;
        border: 1px solid #555;
        width: 400px;
        height: 350px;
        position: relative;
    }
    p{text-align:center;}
    .label {
        height: 1em;
        padding: .3em;
        background: rgba(255, 255, 255, .8);
        position: absolute;
        display: none;
        color:#333;

    }

</style>


<div class="wrapper1">
    <canvas id='c'></canvas>
    <div class="label">text</div>
</div>
<!--c  GRAFIK-->

<script type="text/javascript">


    var label = document.querySelector(".label");
    var c = document.getElementById("c");
    var ctx = c.getContext("2d");
    var cw = c.width = 400;
    var ch = c.height = 250;
    var cx = cw / 2,
        cy = ch / 2;
    var rad = Math.PI / 180;
    var frames = 0;

    ctx.lineWidth = 1;
    ctx.strokeStyle = "#999";
    ctx.fillStyle = "#ccc";
    ctx.font = "14px monospace";

    var grd = ctx.createLinearGradient(0, 0, 0, cy);
    grd.addColorStop(0, "hsla(167,72%,60%,1)");
    grd.addColorStop(1, "hsla(167,72%,60%,0)");

    var oData = {
        "2008": 10,
        "2009": 39.9,
        "2010": 17,
        "2011": 30.0,
        "2012": 5.3,
        "2013": 38.4,
        "2014": 15.7,
        "2015": 9.0
    };

    var valuesRy = [];
    var propsRy = [];
    for (var prop in oData) {

        valuesRy.push(oData[prop]);
        propsRy.push(prop);
    }


    var vData = 4;
    var hData = valuesRy.length;
    var offset = 50.5; //offset chart axis
    var chartHeight = ch - 2 * offset;
    var chartWidth = cw - 2 * offset;
    var t = 1 / 7; // curvature : 0 = no curvature
    var speed = 2; // for the animation

    var A = {
        x: offset,
        y: offset
    }
    var B = {
        x: offset,
        y: offset + chartHeight
    }
    var C = {
        x: offset + chartWidth,
        y: offset + chartHeight
    }

    /*
          A  ^
          |  |
          + 25
          |
          |
          |
          + 25
          |__|_________________________________  C
          B
    */

    // CHART AXIS -------------------------
    ctx.beginPath();
    ctx.moveTo(A.x, A.y);
    ctx.lineTo(B.x, B.y);
    ctx.lineTo(C.x, C.y);
    ctx.stroke();

    // vertical ( A - B )
    var aStep = (chartHeight - 50) / (vData);

    var Max = Math.ceil(arrayMax(valuesRy) / 10) * 10;
    var Min = Math.floor(arrayMin(valuesRy) / 10) * 10;
    var aStepValue = (Max - Min) / (vData);
    console.log("aStepValue: " + aStepValue); //8 units
    var verticalUnit = aStep / aStepValue;

    var a = [];
    ctx.textAlign = "right";
    ctx.textBaseline = "middle";
    for (var i = 0; i <= vData; i++) {

        if (i == 0) {
            a[i] = {
                x: A.x,
                y: A.y + 25,
                val: Max
            }
        } else {
            a[i] = {}
            a[i].x = a[i - 1].x;
            a[i].y = a[i - 1].y + aStep;
            a[i].val = a[i - 1].val - aStepValue;
        }
        drawCoords(a[i], 3, 0);
    }

    //horizontal ( B - C )
    var b = [];
    ctx.textAlign = "center";
    ctx.textBaseline = "hanging";
    var bStep = chartWidth / (hData + 1);

    for (var i = 0; i < hData; i++) {
        if (i == 0) {
            b[i] = {
                x: B.x + bStep,
                y: B.y,
                val: propsRy[0]
            };
        } else {
            b[i] = {}
            b[i].x = b[i - 1].x + bStep;
            b[i].y = b[i - 1].y;
            b[i].val = propsRy[i]
        }
        drawCoords(b[i], 0, 3)
    }

    function drawCoords(o, offX, offY) {
        ctx.beginPath();
        ctx.moveTo(o.x - offX, o.y - offY);
        ctx.lineTo(o.x + offX, o.y + offY);
        ctx.stroke();

        ctx.fillText(o.val, o.x - 2 * offX, o.y + 2 * offY);
    }
    //----------------------------------------------------------

    // DATA
    var oDots = [];
    var oFlat = [];
    var i = 0;

    for (var prop in oData) {
        oDots[i] = {}
        oFlat[i] = {}

        oDots[i].x = b[i].x;
        oFlat[i].x = b[i].x;

        oDots[i].y = b[i].y - oData[prop] * verticalUnit - 25;
        oFlat[i].y = b[i].y - 25;

        oDots[i].val = oData[b[i].val];

        i++
    }



    ///// Animation Chart ///////////////////////////
    //var speed = 3;
    function animateChart() {
        requestId = window.requestAnimationFrame(animateChart);
        frames += speed; //console.log(frames)
        ctx.clearRect(60, 0, cw, ch - 60);

        for (var i = 0; i < oFlat.length; i++) {
            if (oFlat[i].y > oDots[i].y) {
                oFlat[i].y -= speed;
            }
        }
        drawCurve(oFlat);
        for (var i = 0; i < oFlat.length; i++) {
            ctx.fillText(oDots[i].val, oFlat[i].x, oFlat[i].y - 25);
            ctx.beginPath();
            ctx.arc(oFlat[i].x, oFlat[i].y, 3, 0, 2 * Math.PI);
            ctx.fill();
        }

        if (frames >= Max * verticalUnit) {
            window.cancelAnimationFrame(requestId);

        }
    }
    requestId = window.requestAnimationFrame(animateChart);

    /////// EVENTS //////////////////////
    c.addEventListener("mousemove", function(e) {
        label.innerHTML = "";
        label.style.display = "none";
        this.style.cursor = "default";

        var m = oMousePos(this, e);
        for (var i = 0; i < oDots.length; i++) {

            output(m, i);
        }

    }, false);

    function output(m, i) {
        ctx.beginPath();
        ctx.arc(oDots[i].x, oDots[i].y, 20, 0, 2 * Math.PI);
        if (ctx.isPointInPath(m.x, m.y)) {
            //console.log(i);
            label.style.display = "block";
            label.style.top = (m.y + 10) + "px";
            label.style.left = (m.x + 10) + "px";
            label.innerHTML = "<strong>" + propsRy[i] + "</strong>: " + valuesRy[i] + "%";
            c.style.cursor = "pointer";
        }
    }

    // CURVATURE
    function controlPoints(p) {
        // given the points array p calculate the control points
        var pc = [];
        for (var i = 1; i < p.length - 1; i++) {
            var dx = p[i - 1].x - p[i + 1].x; // difference x
            var dy = p[i - 1].y - p[i + 1].y; // difference y
            // the first control point
            var x1 = p[i].x - dx * t;
            var y1 = p[i].y - dy * t;
            var o1 = {
                x: x1,
                y: y1
            };

            // the second control point
            var x2 = p[i].x + dx * t;
            var y2 = p[i].y + dy * t;
            var o2 = {
                x: x2,
                y: y2
            };

            // building the control points array
            pc[i] = [];
            pc[i].push(o1);
            pc[i].push(o2);
        }
        return pc;
    }

    function drawCurve(p) {

        var pc = controlPoints(p); // the control points array

        ctx.beginPath();
        //ctx.moveTo(p[0].x, B.y- 25);
        ctx.lineTo(p[0].x, p[0].y);
        // the first & the last curve are quadratic Bezier
        // because I'm using push(), pc[i][1] comes before pc[i][0]
        ctx.quadraticCurveTo(pc[1][1].x, pc[1][1].y, p[1].x, p[1].y);

        if (p.length > 2) {
            // central curves are cubic Bezier
            for (var i = 1; i < p.length - 2; i++) {
                ctx.bezierCurveTo(pc[i][0].x, pc[i][0].y, pc[i + 1][1].x, pc[i + 1][1].y, p[i + 1].x, p[i + 1].y);
            }
            // the first & the last curve are quadratic Bezier
            var n = p.length - 1;
            ctx.quadraticCurveTo(pc[n - 1][0].x, pc[n - 1][0].y, p[n].x, p[n].y);
        }

        //ctx.lineTo(p[p.length-1].x, B.y- 25);
        ctx.stroke();
        ctx.save();
        ctx.fillStyle = grd;
        ctx.fill();
        ctx.restore();
    }

    function arrayMax(array) {
        return Math.max.apply(Math, array);
    };

    function arrayMin(array) {
        return Math.min.apply(Math, array);
    };

    function oMousePos(canvas, evt) {
        var ClientRect = canvas.getBoundingClientRect();
        return { //objeto
            x: Math.round(evt.clientX - ClientRect.left),
            y: Math.round(evt.clientY - ClientRect.top)
        }
    }
</script>











<div class="container">
    <div class="row my-3">
        <div class="col">
            <h4>Bootstrap 5 Chart.js</h4>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chLine"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chBar"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas id="chDonut3"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /* chart.js chart examples */

    // chart colors
    var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];

    /* large line chart */
    var chLine = document.getElementById("chLine");
    var chartData = {
        labels: ["S", "M", "T", "W", "T", "F", "S"],
        datasets: [{
            data: [589, 445, 483, 503, 689, 692, 634],
            backgroundColor: 'transparent',
            borderColor: colors[0],
            borderWidth: 4,
            pointBackgroundColor: colors[0]
        }
//   {
//     data: [639, 465, 493, 478, 589, 632, 674],
//     backgroundColor: colors[3],
//     borderColor: colors[1],
//     borderWidth: 4,
//     pointBackgroundColor: colors[1]
//   }
        ]
    };
    if (chLine) {
        new Chart(chLine, {
            type: 'line',
            data: chartData,
            options: {
                scales: {
                    xAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false
                },
                responsive: true
            }
        });
    }

    /* large pie/donut chart */
    var chPie = document.getElementById("chPie");
    if (chPie) {
        new Chart(chPie, {
            type: 'pie',
            data: {
                labels: ['Desktop', 'Phone', 'Tablet', 'Unknown'],
                datasets: [
                    {
                        backgroundColor: [colors[1],colors[0],colors[2],colors[5]],
                        borderWidth: 0,
                        data: [50, 40, 15, 5]
                    }
                ]
            },
            plugins: [{
                beforeDraw: function(chart) {
                    var width = chart.chart.width,
                        height = chart.chart.height,
                        ctx = chart.chart.ctx;
                    ctx.restore();
                    var fontSize = (height / 70).toFixed(2);
                    ctx.font = fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    var text = chart.config.data.datasets[0].data[0] + "%",
                        textX = Math.round((width - ctx.measureText(text).width) / 2),
                        textY = height / 2;
                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            }],
            options: {layout:{padding:0}, legend:{display:false}, cutoutPercentage: 80}
        });
    }

    /* bar chart */
    var chBar = document.getElementById("chBar");
    if (chBar) {
        new Chart(chBar, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S"],
                datasets: [{
                    data: [589, 445, 483, 503, 689, 692, 634],
                    backgroundColor: colors[0]
                },
                    {
                        data: [639, 465, 493, 478, 589, 632, 674],
                        backgroundColor: colors[1]
                    }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        barPercentage: 0.4,
                        categoryPercentage: 0.5
                    }]
                }
            }
        });
    }

    /* 3 donut charts */
    var donutOptions = {
        cutoutPercentage: 85,
        legend: {position:'bottom', padding:5, labels: {pointStyle:'circle', usePointStyle:true}}
    };

    // donut 1
    var chDonutData1 = {
        labels: ['Bootstrap', 'Popper', 'Other'],
        datasets: [
            {
                backgroundColor: colors.slice(0,3),
                borderWidth: 0,
                data: [74, 11, 40]
            }
        ]
    };

    var chDonut1 = document.getElementById("chDonut1");
    if (chDonut1) {
        new Chart(chDonut1, {
            type: 'pie',
            data: chDonutData1,
            options: donutOptions
        });
    }

    // donut 2
    var chDonutData2 = {
        labels: ['Wips', 'Pops', 'Dags'],
        datasets: [
            {
                backgroundColor: colors.slice(0,3),
                borderWidth: 0,
                data: [40, 45, 30]
            }
        ]
    };
    var chDonut2 = document.getElementById("chDonut2");
    if (chDonut2) {
        new Chart(chDonut2, {
            type: 'pie',
            data: chDonutData2,
            options: donutOptions
        });
    }

    // donut 3
    var chDonutData3 = {
        labels: ['Angular', 'React', 'Other'],
        datasets: [
            {
                backgroundColor: colors.slice(0,3),
                borderWidth: 0,
                data: [21, 45, 55, 33]
            }
        ]
    };
    var chDonut3 = document.getElementById("chDonut3");
    if (chDonut3) {
        new Chart(chDonut3, {
            type: 'pie',
            data: chDonutData3,
            options: donutOptions
        });
    }

    /* 3 line charts */
    var lineOptions = {
        legend:{display:false},
        tooltips:{interest:false,bodyFontSize:11,titleFontSize:11},
        scales:{
            xAxes:[
                {
                    ticks:{
                        display:false
                    },
                    gridLines: {
                        display:false,
                        drawBorder:false
                    }
                }
            ],
            yAxes:[{display:false}]
        },
        layout: {
            padding: {
                left: 6,
                right: 6,
                top: 4,
                bottom: 6
            }
        }
    };

    var chLine1 = document.getElementById("chLine1");
    if (chLine1) {
        new Chart(chLine1, {
            type: 'line',
            data: {
                labels: ['Jan','Feb','Mar','Apr','May'],
                datasets: [
                    {
                        backgroundColor:'#ffffff',
                        borderColor:'#ffffff',
                        data: [10, 11, 4, 11, 4],
                        fill: false
                    }
                ]
            },
            options: lineOptions
        });
    }
    var chLine2 = document.getElementById("chLine2");
    if (chLine2) {
        new Chart(chLine2, {
            type: 'line',
            data: {
                labels: ['A','B','C','D','E'],
                datasets: [
                    {
                        backgroundColor:'#ffffff',
                        borderColor:'#ffffff',
                        data: [4, 5, 7, 13, 12],
                        fill: false
                    }
                ]
            },
            options: lineOptions
        });
    }

    var chLine3 = document.getElementById("chLine3");
    if (chLine3) {
        new Chart(chLine3, {
            type: 'line',
            data: {
                labels: ['Pos','Neg','Nue','Other','Unknown'],
                datasets: [
                    {
                        backgroundColor:'#ffffff',
                        borderColor:'#ffffff',
                        data: [13, 15, 10, 9, 14],
                        fill: false
                    }
                ]
            },
            options: lineOptions
        });
    }
</script>
