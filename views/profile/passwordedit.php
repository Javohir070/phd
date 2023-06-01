<?

use yii\helpers\Url;
use yii\widgets\ActiveForm;


$this->title = Yii::t('app','User password resert');
//vdd($message);
?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <?= Yii::$app->controller->renderPartial('/blocks/frontend/profileleft'); ?>
        </div>

        <div class="col-md-8">
            <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Parolni o'zgartirish</h2>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
                <div class="card-block">
                    <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'form-horizontal',
                        ]
                    ]); ?>
                        <fieldset>
                            <?php if (!empty($message)) {?>
                                <p class="text-center" style="color: red">
                                    <?=$message?>
                                </p>
                            <?php }?>
                            <div class="form-group">
                                <label for="inputUser" class="col-md-2 control-label">Oldingi parol</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="inputUser" placeholder="Oldingi parol" name="User[old_password]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-md-2 control-label">Yangi parol</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Yangi parol" name="User[new_password]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFamiliya" class="col-md-2 control-label">Yangi parol qaytadan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="inputFamiliya"
                                           placeholder="Yangi parol qaytadan" name="User[new_confirm_password]">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <button type="submit" class="btn btn-raised btn-primary btn-block mt-4" >
                                        Saqlash
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>