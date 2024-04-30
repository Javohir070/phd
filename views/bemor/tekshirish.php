<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use app\models\Bemor;
use yii\widgets\DetailView;
use app\models\Tavsiya;

?>

<div>
<section id="chartjs-line-charts">
    <!-- Line Chart -->
    <div class="row">
    <div class="col-12">
            <div class="card" style="padding-bottom:40px">
                <div class="card-header">
                    <h4 class="card-title">Bemor uchun eng yaqin bemor signal ga qoyilgan tshxis</h4>
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
    var fileNames = [];
    <?php foreach($model as $m){?>
        fileNames.push("/<?=$m->signal_1?>");
    <?}?>
    
    // Barcha fayllarni o'qish uchun Promiselar massivi
    var filePromises = fileNames.map(readFile);
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

    let chiqan_qiymat = [];

    Promise.all(filePromises)
    .then(fileContentsArray => {
        for (let i = 1; i < fileContentsArray.length; i++) {
            let variable = fileContentsArray[0]; // Assuming you want to access the first file contents in each iteration
            // Process the file contents here
            let fileuzgarivch = variable;
            let signalArr = fileuzgarivch.split(" ");
            let yQiymati = signalArr.slice(0, 500); // Slice directly here
            let A = yQiymati;

            let variable1 = fileContentsArray[i]; // Accessing file contents based on loop index
            let fileuzgarivch1 = variable1;
            let signalArr1 = fileuzgarivch1.split(" ");
            let yQiymati1 = signalArr1.slice(0, 500); // Slice directly here
            let B = yQiymati1;

            let manhattanDistance = cityBlockDistance(A, B);
            console.log("Manhattan distance between 1 signalin natijalari A and B: " + manhattanDistance);
            chiqan_qiymat.push(manhattanDistance);
        }
        console.log(chiqan_qiymat);
        let array = chiqan_qiymat;
    
            // Initialize variables to hold the smallest value and its index
            let smallestValue = array[0];
            let smallestIndex = 0;
    
            for (let i = 1; i < array.length; i++) {
                if (array[i] < smallestValue) {
                    smallestValue = array[i];
                    smallestIndex = i;
                }
            }
            // Print the smallest value and its index
            console.log("Smallest value:", smallestValue);
            console.log("Index of the smallest value:", smallestIndex+1);
            localStorage.setItem('signal1', smallestIndex);
            let variable = fileContentsArray[smallestIndex+1]
            console.log(variable);
            //chart chizish bunda biyog'i
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
            

    })
    .catch(error => {
        console.error(error);
    });

</script>
































<!-- <script>
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
    var fileNames = [];
    <?php foreach($model as $m){?>
        fileNames.push("/<?=$m->signal_2?>");
    <?}?>
    
    // Barcha fayllarni o'qish uchun Promiselar massivi
    var filePromises = fileNames.map(readFile);
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
    Promise.all(filePromises)
    .then(fileContentsArray => {
        for (let i = 1; i < fileContentsArray.length; i++) {
            let variable = fileContentsArray[0]; // Assuming you want to access the first file contents in each iteration
            // Process the file contents here
            let fileuzgarivch = variable;
            let signalArr = fileuzgarivch.split(" ");
            let yQiymati = signalArr.slice(0, 500); // Slice directly here
            let A = yQiymati;

            let variable1 = fileContentsArray[i]; // Accessing file contents based on loop index
            let fileuzgarivch1 = variable1;
            let signalArr1 = fileuzgarivch1.split(" ");
            let yQiymati1 = signalArr1.slice(0, 500); // Slice directly here
            let B = yQiymati1;

            let manhattanDistance = cityBlockDistance(A, B);
            console.log("Manhattan distance between 2 signalin natijalari A and B: " + manhattanDistance);
        }
    })
    .catch(error => {
        console.error(error);
    });

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
    var fileNames = [];
    <?php foreach($model as $m){?>
        fileNames.push("/<?=$m->signal_3?>");
    <?}?>
    
    // Barcha fayllarni o'qish uchun Promiselar massivi
    var filePromises = fileNames.map(readFile);
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
    Promise.all(filePromises)
    .then(fileContentsArray => {
        for (let i = 1; i < fileContentsArray.length; i++) {
            let variable = fileContentsArray[0]; // Assuming you want to access the first file contents in each iteration
            // Process the file contents here
            let fileuzgarivch = variable;
            let signalArr = fileuzgarivch.split(" ");
            let yQiymati = signalArr.slice(0, 500); // Slice directly here
            let A = yQiymati;

            let variable1 = fileContentsArray[i]; // Accessing file contents based on loop index
            let fileuzgarivch1 = variable1;
            let signalArr1 = fileuzgarivch1.split(" ");
            let yQiymati1 = signalArr1.slice(0, 500); // Slice directly here
            let B = yQiymati1;

            let manhattanDistance = cityBlockDistance(A, B);
            console.log("Manhattan distance between 3 signalin natijalari A and B: " + manhattanDistance);
        }
    })
    .catch(error => {
        console.error(error);
    });

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
    var fileNames = [];
    <?php foreach($model as $m){?>
        fileNames.push("/<?=$m->signal_4?>");
    <?}?>
    
    // Barcha fayllarni o'qish uchun Promiselar massivi
    var filePromises = fileNames.map(readFile);
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
    Promise.all(filePromises)
    .then(fileContentsArray => {
        for (let i = 1; i < fileContentsArray.length; i++) {
            let variable = fileContentsArray[0]; // Assuming you want to access the first file contents in each iteration
            // Process the file contents here
            let fileuzgarivch = variable;
            let signalArr = fileuzgarivch.split(" ");
            let yQiymati = signalArr.slice(0, 500); // Slice directly here
            let A = yQiymati;

            let variable1 = fileContentsArray[i]; // Accessing file contents based on loop index
            let fileuzgarivch1 = variable1;
            let signalArr1 = fileuzgarivch1.split(" ");
            let yQiymati1 = signalArr1.slice(0, 500); // Slice directly here
            let B = yQiymati1;

            let manhattanDistance = cityBlockDistance(A, B);
            console.log("Manhattan distance between 4 signalin natijalari A and B: " + manhattanDistance);
        }
    })
    .catch(error => {
        console.error(error);
    });

</script> -->