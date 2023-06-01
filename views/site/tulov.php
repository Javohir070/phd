<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container">
    <h1 class="right-line mb-4">To'lov qilish</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Foydalanuvchi</th>
                            <th>Summa</th>
                        </tr>
                        <tr>
                            <td><?=Yii::$app->user->identity->last_name?> <?=Yii::$app->user->identity->first_name?> <?=Yii::$app->user->identity->middle_name?></td>
                            <td><?=$order->amount?> UZS</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="align-items: center">
                                <form action="https://checkout.paycom.uz" method="post" style="max-width: 310px; float: left">
                                    <input type="hidden" name="merchant" value="6194fdee8053115670f042ea">
                                    <input type="hidden" name="account[user_id]" value="<?=Yii::$app->user->id?>">
                                    <input type="hidden" name="account[order_id]" value="<?=$order->id?>">
                                    <input type="hidden" name="amount" value="<?=$order->amount * 100?>">
                                    <input type="hidden" name="account[phone]" value="<?=$order->phone?>">
                                    <button type="submit" class="btn btn-success">
                                        <img src="/web/frontend/payme.png" alt="" style="height: 70px; margin: 3px">
                                    </button>
                                </form>

                                <button id="click_submit" class="btn btn-success" data-order="<?=$order->id?>">
                                    <img src="/web/frontend/click.png" alt="" style="height: 70px; margin: 3px">
                                </button>
                                <form action="https://my.click.uz/pay/" id="click_form" method="post">
                                    <input id="click_amount_field" type="hidden" name="MERCHANT_TRANS_AMOUNT" value="<?=$order->amount ?>" class="click_input" />
                                    <input type="hidden" name="MERCHANT_ID" value="14180"/>
                                    <input type="hidden" name="MERCHANT_USER_ID" value="22539"/>
                                    <input type="hidden" name="MERCHANT_SERVICE_ID" value="19675"/>
                                    <input type="hidden" name="MERCHANT_TRANS_ID" value="<?=$order->id?>"/>
                                    <input type="hidden" name="MERCHANT_TRANS_NOTE" value="Оплата"/>
                                    <input type="hidden" name="MERCHANT_USER_PHONE" value="<?=$order->phone?>"/>
                                    <input type="hidden" name="SIGN_TIME" value="<?= $order->created_at ?>"/>
                                    <? $signString = md5 ($order->created_at. "876lBbwnU2OkMo19675" . $order->id. $order->amount); ?>
                                    <input type="hidden" name="SIGN_STRING" value="<?= $signString ?>"/>
                                    <input type="hidden" name="RETURN_URL" value="https://psixolog-portali.uz/profile/index"/>

                                </form>

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>

        </div>
    </div>
</div>