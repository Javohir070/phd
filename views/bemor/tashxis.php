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
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="chartjs-line-charts">
        <!-- Line Chart -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Siz kiritgan bemor signal</h4>
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
                            <canvas id="line-chartsignal_user" height="458" width="1542" style="display: block; width: 1542px; height: 458px;" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="header">
        <h1 >Siz kiritgan bemor signaliga yaqin bo'lgan bemorlar natijalari va tashxislar malumotlar </h1>
    </div>
    <br>

    <style>
        .table td,
        .table th {
            padding: .75rem 1rem !important;
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
                                            <td><?php echo date("d-m-Y",$segnal_id1->created_at);?></td>
                                            <td><?php echo date('d-m-Y',($segnal_id1->updated_at)?($segnal_id1->updated_at):($segnal_id1->created_at));?></td>
                                            <td><?=$segnal_id1->olingan_signal?></td>
                                            <td><?=$segnal_id1->signal_1?></td>
                                            <td><?=$segnal_id1->signal_2?></td>
                                            <td><?=$segnal_id1->signal_3?></td>
                                            <td><?=$segnal_id1->signal_4?></td>
                                            <td><?=!empty($segnal_id1->region)?$segnal_id1->region->viloyat_nomi:''?></td>
                                            <td><?=!empty($segnal_id1->district)?$segnal_id1->district->tuman_nomi:''?></td>
                                            <td><?=$segnal_id1->manzili?></td>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Qo'yilgan Tashxis: <?=$segnal_id1->tashxis?></h4>
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
                            <canvas id="line-chartsignal12" height="458" width="1542" style="display: block; width: 1542px; height: 458px;" class="chartjs-render-monitor"></canvas>
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
                                            <td><?php echo date("d-m-Y",$segnal_id2->created_at);?></td>
                                            <td><?php echo date('d-m-Y',($segnal_id2->updated_at)?($segnal_id2->updated_at):($segnal_id2->created_at));?></td>
                                            <td><?=$segnal_id2->olingan_signal?></td>
                                            <td><?=$segnal_id2->signal_1?></td>
                                            <td><?=$segnal_id2->signal_2?></td>
                                            <td><?=$segnal_id2->signal_3?></td>
                                            <td><?=$segnal_id2->signal_4?></td>
                                            <td><?=!empty($segnal_id2->region)?$segnal_id2->region->viloyat_nomi:''?></td>
                                            <td><?=!empty($segnal_id2->district)?$segnal_id2->district->tuman_nomi:''?></td>
                                            <td><?=$segnal_id2->manzili?></td>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Qo'yilgan Tashxis: <?=$segnal_id2->tashxis?></h4>
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
                            <canvas id="line-chartsignal123" height="458" width="1542" style="display: block; width: 1542px; height: 458px;" class="chartjs-render-monitor"></canvas>
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
                                            <td><?php echo date("d-m-Y",$segnal_id3->created_at);?></td>
                                            <td><?php echo date('d-m-Y',($segnal_id3->updated_at)?($segnal_id3->updated_at):($segnal_id3->created_at));?></td>
                                            <td><?=$segnal_id3->olingan_signal?></td>
                                            <td><?=$segnal_id3->signal_1?></td>
                                            <td><?=$segnal_id3->signal_2?></td>
                                            <td><?=$segnal_id3->signal_3?></td>
                                            <td><?=$segnal_id3->signal_4?></td>
                                            <td><?=!empty($segnal_id3->region)?$segnal_id3->region->viloyat_nomi:''?></td>
                                            <td><?=!empty($segnal_id3->district)?$segnal_id3->district->tuman_nomi:''?></td>
                                            <td><?=$segnal_id3->manzili?></td>
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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Qo'yilgan Tashxis: <?=$segnal_id3->tashxis?></h4>
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
                            <canvas id="line-chartsignal1234" height="458" width="1542" style="display: block; width: 1542px; height: 458px;" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

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
                    let adf = signalArr1[i]/1000000;
                    const element =yQiymati1.push(adf);
                    };   
            };
            // bu signalin tekshirish uchun ikki signalin 
            function cityBlockDistance(vec1, vec2) {
            if (vec1.length !== vec2.length) {
                throw new Error("Vektorlar bir xil uzunlikda bo'lishi kerak");
            }
            let sum = 0;
            for (let i = 0; i < vec1.length; i++) {
                sum += Math.abs(vec1[i] - vec2[i]);
            }
            return sum;
        }

        // Define two arrays
        let A = xQiymati;


        let B = yQiymati;


        // Vektorlar orasidagi Manxetten masofasini hisoblang
        let manhattanDistance = cityBlockDistance(A, B);

        console.log("A to'plam elementlari:");
        console.log(A.join(" "));
        console.log("B to'plam elementlari:");
        console.log(B.join(" "));
        console.log("A va B to'plamning Manhetten masofasi = " + manhattanDistance);
        console.log("A va B2 to'plamning Manhetten masofasi = " + manhattanDistanceB2);









            //ikkinchi signal qiymatlar
            var fileuzgarivch2 = variable2;
            let signalArr2 = fileuzgarivch2.split(" ")
            let xQiymati2 = [];
            let yQiymati2 = [];
            for (let i = 0; i < signalArr2.length; i++) {
                if (signalArr2[i] !== '') {
                    xQiymati2.push(i);
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
                    let adf = signalArr4[i]/1000000;
                    const element =yQiymati4.push(adf);
                    };   
            };
            var o = $("#line-chartsignal_user");
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
        var fileNames1 = ["/<?=$segnal_id1->olingan_signal?>", "/<?=$segnal_id1->signal_1?>", "/<?=$segnal_id1->signal_2?>", "/<?=$segnal_id1->signal_3?>","/<?=$segnal_id1->signal_4?>"];
        
        // Barcha fayllarni o'qish uchun Promiselar massivi
        var filePromises = fileNames1.map(readFile);
        
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
                    let adf = signalArr4[i]/1000000;
                    const element =yQiymati4.push(adf);
                    };   
            };
            var o = $("#line-chartsignal12");
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
        var fileNames1 = ["/<?=$segnal_id2->olingan_signal?>", "/<?=$segnal_id2->signal_1?>", "/<?=$segnal_id2->signal_2?>", "/<?=$segnal_id2->signal_3?>","/<?=$segnal_id2->signal_4?>"];
        
        // Barcha fayllarni o'qish uchun Promiselar massivi
        var filePromises = fileNames1.map(readFile);
        
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
                    let adf = signalArr4[i]/1000000;
                    const element =yQiymati4.push(adf);
                    };   
            };
            var o = $("#line-chartsignal123");
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
        var fileNames1 = ["/<?=$segnal_id3->olingan_signal?>", "/<?=$segnal_id3->signal_1?>", "/<?=$segnal_id3->signal_2?>", "/<?=$segnal_id3->signal_3?>","/<?=$segnal_id3->signal_4?>"];
        
        // Barcha fayllarni o'qish uchun Promiselar massivi
        var filePromises = fileNames1.map(readFile);
        
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
                    let adf = signalArr4[i]/1000000;
                    const element =yQiymati4.push(adf);
                    };   
            };
            var o = $("#line-chartsignal1234");
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