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
use yii\data\ActiveDataProvider;

class AdminController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $layout = "backend";
   
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)){
            if (Yii::$app->user->isGuest){
                return $this->redirect(['site/index']);
            }
            return true;
        }
        
    }
   /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $orderProvider = new ActiveDataProvider([
            'query' => \app\models\Order::find()->orderBy([
                'id'=>SORT_DESC
            ]),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index',[
            'orderProvider'=>$orderProvider
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
       // echo Yii::$app->security->generatePasswordHash(123456);
       //exit;
        //echo "salom";exit;
        $this->layout="login";
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/index']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            
            if ($model->login()) {
                
                return $this->redirect(['site/index']);
             }
             else{
                echo "login bomadi";exit;  
             } 
            //return $this->goBack();
        }
        // else{
        //     echo "val bomadi";exit;
        // }

        //$model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionBooks()
    {
        return $this->render('books');
    }
    public function actionTolov()
    {
        $orderProvider = new ActiveDataProvider([
            'query' => \app\models\Order::find()->orderBy([
                'id'=>SORT_DESC
            ]),
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);
        return $this->render('tolov',[
            'orderProvider'=>$orderProvider
        ]);
    }
}
