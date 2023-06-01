<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Kasblar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kasblars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kasblar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Rosdan ham o\'chirmoqchimisiz?',
                'method' => 'post',
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
                            'nomi',
                            'status',
                        ],
                    ]) ?>
                </div>
            </div>
            
        </div>
    </div>     
</div>



    

</div>
