<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MijozPm;

class ProfileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = "frontend";
    

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $user = Yii::$app->user->identity;
         //var_dump($user);exit;
        return $this->render('index',['user'=>$user]);
    }


    public function actionEdit()
    {
        if (!Yii::$app->user->isGuest)
        {
            $user = Yii::$app->user->identity;
            $user_one = User::findOne($user->getId());
            $request = Yii::$app->request;
            $post = $request->post();

            if ($request->isPost && $user_one->load($post))
            {
                $user_one->uploadrasm();
                if ($user_one->save(false))
                {
                    return $this->redirect('index');
                }else{
                    return $this->render('edit',[
                        'user' => $user
                    ]);
                }
            }
            return $this->render('edit',[
                'user' => $user
            ]);

        }else{
            return $this->goHome();
        }
    }
    public function actionMahsulot()
    {


        return $this->render('mahsulot');
    }
    // public function actionMahsulotyuklash()
    // {
    //     return $this->render('mahsulotyuklash');
    // }
    public function actionMahsulottahrirlash()
    {
        $models = MijozPm::find()->where(['user_id'=>Yii::$app->user->identity->id])->all();
        return $this->render('mahsulottahrirlash',['models'=>$models]);
    }
    public function actionHisobot()
    {
        return $this->render('hisobot');
    }
    public function actionMymahsulot()
    {
        $model = new MijozPm();

        if ($model->load(Yii::$app->request->post())) {
            $model->uploadfile();
            $model->save();
            return $this->redirect('mahsulottahrirlash');
        }

        $user_id = Yii::$app->user->id;
        $metodichkalar = \app\models\Korzinka::find()->join('RIGHT JOIN', 'orders', 'korzinka.order_id = orders.id and orders.state = 2')
            ->where("korzinka.user_id = $user_id and korzinka.p_type = 'metodika'")->all();


        return $this->render('mymahsulot', [
            'model' => $model,
            'metodichkalar' => $metodichkalar
        ]);
        
    }
    public function actionMykitob()
    {

        $user_id = Yii::$app->user->id;
        $kitoblar = \app\models\Korzinka::find()->join('RIGHT JOIN', 'orders', 'korzinka.order_id = orders.id and orders.state = 2')
            ->where("korzinka.user_id = $user_id and korzinka.p_type = 'kitob'")->all();


        return $this->render('mykitob', [
            'kitoblar' => $kitoblar
        ]);

    }
    public function actionMyhujjat()
    {

        $user_id = Yii::$app->user->id;
        $hujjatlar = \app\models\Korzinka::find()->join('RIGHT JOIN', 'orders', 'korzinka.order_id = orders.id and orders.state = 2')
            ->where("korzinka.user_id = $user_id and korzinka.p_type = 'hujjat'")->all();


        return $this->render('myhujjat', [
            'hujjatlar' => $hujjatlar
        ]);

    }
     public function actionMahsulotyuklash()
    {
        $model = new MijozPm();

        if ($model->load(Yii::$app->request->post())) {
            $model->uploadfile();
            $model->save();
            return $this->redirect('mahsulottahrirlash');
        }

        return $this->render('mahsulotyuklash', [
            'model' => $model,
        ]);
        
    }
    public function actionPasswordedit()
    {
        if (!Yii::$app->user->isGuest)
        {
            $message = '';
            $user = Yii::$app->user->identity;
            $user_one = User::findOne($user->getId());
            $request = Yii::$app->request;
            $post = $request->post();

            if ($request->isPost && $user_one->load($post))
            {
                if (!empty($post['User']['old_password']))
                {
                    if (!empty($post['User']['old_password']))
                    {
                        if (Yii::$app->getSecurity()->validatePassword($post['User']['old_password'], $user_one->password_hash))
                        {
                            if ($post['User']['new_password'] == $post['User']['new_confirm_password'])
                            {
                                $user_one->password_hash = Yii::$app->security->generatePasswordHash($post['User']['new_password']);
                                if ($user_one->save())
                                {
                                    return $this->redirect('index');
                                }else{
                                    $message = Yii::t('app','Yangi parolni uzgartirishda hatolik yuz berdi iltimos qaytadan urinib kuring!');
                                    return $this->render('passwordedit',[
                                        'message' => $message,
                                        'user' => $user
                                    ]);
                                }
                            }else{
                                $message = Yii::t('app','Yangi parol va yangi tasdiqlovchi parol bir xil emas iltimos qaytadan kiriting !');
                                return $this->render('passwordedit',[
                                    'message' => $message,
                                    'user' => $user
                                ]);
                            }

                        }else{
                            $message = Yii::t('app','Eski parol notugri kiritilgan iltimos qaytadan kiriting !');
                            return $this->render('passwordedit',[
                                'message' => $message,
                                'user' => $user
                            ]);
                        }
                    }else{
                        $message = Yii::t('app','Yangi parol kiritilmagan iltimos qaytadan kiriting !');
                        return $this->render('passwordedit',[
                            'message' => $message,
                            'user' => $user
                        ]);
                    }
                }else{
                    $message = Yii::t('app','Eski parol kiritilmagan iltimos qaytadan kiriting !');
                    return $this->render('passwordedit',[
                        'message' => $message,
                        'user' => $user
                    ]);
                }
            }
            return $this->render('passwordedit',[
                'message' => $message,
                'user' => $user
            ]);

        }else{
            return $this->goHome();
        }

        return $this->render('passwordedit',[
            'message' => $message,
            'user' => $user
        ]);
    }
}
