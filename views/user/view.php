<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Foydalanuvchi ma\'lumotlarini ko\'rish';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user1-view">

    <h1><?= Html::encode($this->title) ?></h1>

</div>


<div class="header">
     <p>
        <?= Html::a(Yii::t('app', 'Ro\'yhatga qaytish'), ['index', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], ['class' => 'btn btn-danger', 'data' => [
         'confirm' => 'Are you sure you want to delete this item?', 'method' => 'post',
             ],
         ]) ?>
    </p>
</div>

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
                    'email:email',
                    //'password_hash',
                    //'auth_key',
                    //'created_at',
                    //'updated_at',
                    //'last_login_at',
                    'role',
                    'telefon',
                    'status',
                        [
                                        'attribute' => 'avatar',
                                        'format' => 'html',
                                        'label' => 'Rasm',
                                        'value' => function ($data) {
                                            return Html::img('/' . $data['avatar'],
                                                ['width' => '60px']);
                                        },
                                ],
                        
                        
                    ],
                ]) ?>
                


               
              </div>
            </div>
            
          </div>
        </div>
      
        
      </div>