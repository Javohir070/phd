<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Viloyat;
use app\models\Tuman;
use app\models\Komissiya;
use app\models\Mutaxasislik;

/* @var $this yii\web\View */
/* @var $model app\models\User1 */
/* @var $form yii\widgets\ActiveForm */
?>


<section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs mb-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                           href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="ft-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <?php $form = ActiveForm::begin(); ?>
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <a class="mr-2" href="#">
                                <? #= $form->field($model, 'rasm')->fileInput(['maxlength' => true]) ?>
                                <img src="/web/backend/app-assets/images/portrait/small/avatar-s-13.png"
                                     alt="users avatar"
                                     class="users-avatar-shadow rounded-circle" height="64" width="64">
                            </a>
                            <!--  <div class="media-body">
                                 <h4 class="media-heading">Avatar</h4>
                             </div> -->
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->

                        <form novalidate>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'viloyat_id')->dropDownList(
                                        ArrayHelper::map(Viloyat::find()->all(), 'viloyat_id', 'viloyat_nomi'),
                                        [
                                            'prompt' => 'Viloyatni tanlang',
                                            'onchange' => '
                                                        $.post("/tuman/list/' . '"+$(this).val(), function( data ){
                                                            $("select#user-tuman_id").html( data );
                                                        });'
                                        ]
                                    )->label('Viloyati') ?>

                                    <?= $form->field($model, 'tuman_id')->dropDownList(
                                        ArrayHelper::map(Tuman::find()->all(), 'tuman_id', 'tuman_nomi'),
                                        [
                                            'prompt' => 'Tumanni tanlang',
                                        ]
                                    )->label('Tumani') ?>


                                </div>
                                <div class="col-12 col-sm-6">

                                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

                                    <?= $form->field($model, 'created_at')->textInput() ?>

                                    <?= $form->field($model, 'role')->dropDownList(['user' => 'User', 'admin' => 'Admin']) ?>

                                </div>


                                <!-- <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table mt-1">
                                            <thead>
                                                <tr>
                                                    <th>Modul ruxsatnomasi</th>
                                                    <th>O'qish</th>
                                                    <th>Yozish</th>
                                                    <th>Yaratish</th>
                                                    <th>O'chirish</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Foydalanuvchilar</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox1"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox1"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox2"
                                                                class="custom-control-input"><label
                                                                class="custom-control-label" for="users-checkbox2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox3"
                                                                class="custom-control-input"><label
                                                                class="custom-control-label" for="users-checkbox3"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox4"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox4"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Maqolalar</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox5"
                                                                class="custom-control-input"><label
                                                                class="custom-control-label" for="users-checkbox5"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox6"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox6"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox7"
                                                                class="custom-control-input"><label
                                                                class="custom-control-label" for="users-checkbox7"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox8"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox8"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Xodimlar</td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox9"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox9"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox10"
                                                                class="custom-control-input" checked>
                                                            <label class="custom-control-label" for="users-checkbox10"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox11"
                                                                class="custom-control-input"><label
                                                                class="custom-control-label" for="users-checkbox11"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox"><input
                                                                type="checkbox" id="users-checkbox12"
                                                                class="custom-control-input"><label
                                                                class="custom-control-label" for="users-checkbox12"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                                    <!-- <button type="reset" class="btn btn-light">Chiqish</button> -->
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                        <?php ActiveForm::end(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->
