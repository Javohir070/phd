<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Foydalanuvchilar');
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="header">
    <h1  style="float: left;"><?= Html::encode($this->title) ?></h1>
    <p style="margin-left: 70%;">
        <?= Html::a('Yangi foydalanuvchi qo\'shish', ['create'], ['class' => 'btn btn-info btn-min-width mr-1 mb-1 btn-block']) ?>
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

    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="table-responsive">
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'tableOptions'=>['class'=>'table'],
                            'summary'=> "",
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
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
                                'telefon',
                                'username',
                                //'email:email',
                                //'password_hash',
                                //'auth_key',
                                'created_at',
                                'updated_at',
                                //'last_login_at',
                                'role',
                                //'hudud_id',
                                //'telefon',
                                //'status',

                                [
                                        'class' => 'yii\grid\ActionColumn',
                                        'header' => 'Harakatlar',
                                        'headerOptions' => ['style' => 'color:#337ab7; width:24%;','class' => 'text-center'],
                                        'contentOptions' => ['class' => 'text-center'],
                                        'template' => '{view}{update}{delete}',
                                        'buttons' => [
                                         'view' => function ($url, $model) {
                                             return Html::a('<i class="ft ft-eye"></i>', $url, [
                                                         'title' => Yii::t('app', 'Ko\'rish'),
                                                         'class' => 'btn btn-outline-success edit-item-btn'
                                                ]);
                                            },

                                            'update' => function ($url, $model) {
                                                return Html::a('<i class="ft ft-edit"></i>', $url, [
                                                            'title' => Yii::t('app', 'Tahrirlash'),
                                                            'class' => 'btn btn-outline-primary edit-item-btn'
                                                ]);
                                            },
                                            
                                            // 'delete' => function ($url, $model) {
                                            //     return Html::a('<i class="ft ft-delete"></i>', $url, [
                                            //                 'title' => Yii::t('app', 'O\'chirish'),
                                            //                 'class' => 'btn btn-outline-danger edit-item-btn'
                                            //     ]);
                                            // }

                                          ],
                                          'urlCreator' => function ($action, $model, $key, $index) {
                                            if ($action === 'view') {
                                                $url =Url::to('/user/view/'.$model->id);
                                                return $url;
                                            }

                                            if ($action === 'update') {
                                                $url =Url::to('/user/update/'.$model->id);
                                                return $url;
                                            }
                                            if ($action === 'delete') {
                                                $url ='#';
                                                return $url;
                                            }

                                        }
                                    ],
                                ],
                        ]); ?>
                    </div>
                </div>
                <?#=LinkPager::widget(['pagination'=>$dataProvider->pagination])?>
            </div>
        </div>
    </div>


</div>
<?
$this->registerCss('
    .edit-item-btn{
        margin-left:4px;
    }
    ');
?>

<?
$this->registerCss('
    .edit-item-btn{
        margin-left:4px;
    }
    .pagination li{
        margin:2px 2px;
        border: 1px solid #90d0f9;
        padding: 6px;
        border-radius: 2px;
    }
    .pagination li:hover{
        background-color: #90d0f9;
        color: white;
    }
    ');
?>