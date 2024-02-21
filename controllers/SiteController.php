<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Fikrlar;
use app\models\Kitoblar;
use yii\data\ActiveDataProvider;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\ContactForm;
use app\models\Sahifalar;
use app\models\Korzinka;
use app\models\Mahsulot;
use app\models\Hujjatlar;
use yii\data\Pagination;


class SiteController extends Controller
{
    public function actionRemoveorder($id){
        if($id > 0){
            \app\models\Order::deleteAll(['id'=>$id]);
        }
        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }
    /**
     * {@inheritdoc}
     */
    public $layout = "frontend";
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout="frontend";

    	// if (!Yii::$app->user->isGuest) {
        // 	$role=Yii::$app->user->identity->role;
        // 	if($role=="admin")
        //     return $this->redirect(['profile/index']);
        // 	if($role=="user")
        // 		return $this->redirect(['profile/index']);
        // }
        
        return $this->render('index');
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
        // $this->layout="frontend";
        if (!Yii::$app->user->isGuest) {    
        	$user=Yii::$app->user->identity->role;
        	if($role=="admin")
            return $this->redirect(['profile/index']);
        	if($role=="user")
        		return $this->redirect(['profile/index']);
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

     public function actionSignup()
     {
         $model = new SignupForm();
 
         if ($model->load(Yii::$app->request->post()) && $model->signup()) {
             // Foydalanuvchi muvaffaqiyatli ruyxatdan o'tgan bo'lsa
             return $this->goHome();
         }
 
         return $this->render('signup', [
             'model' => $model,
         ]);
     }

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
        $search = Yii::$app->request->queryParams;
        // echo "<pre>";
        // var_dump($search["Pulli"]);
        // exit;
        $query = Kitoblar::find();
        if(isset($search['Yili']))
            $query = $query->where(['in','nashr_yili',$search['Yili']]);
        if(isset($search['Kategoriya']))
            $query = $query->orWhere(['in','category_id',$search['Kategoriya']]);
        if(isset($search['Pulli'])){
            if($search['Pulli']==0)
                $query = $query->orWhere(['narx'=>0]);
            else
                $query = $query->orWhere(['!=','narx',0]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => array('pageSize' => 9),
        ]);

        return $this->render('books', [
            'dataProvider' => $dataProvider,
        ]);
        //return $this->render('books');
    }
    public function actionBook($id)
    {
        $model = Kitoblar::findOne($id);
        $model->views = $model->views+1;
        $model->save();
        return $this->render('book',[
            'model' => $model
        ]);
    }
    public function actionCard()
    {
        $user_id = Yii::$app->user->id;

        $models = Korzinka::find()
            ->join('LEFT JOIN', 'orders', 'korzinka.order_id = orders.id')
            ->where("(korzinka.user_id = $user_id) and ((order_id is null) or (orders.state != 2))")
            ->all();
        return $this->render('card', [
            'models' => $models,
        ]);
    }
    public function actionFikrberish()
    {
        $model = new Fikrlar();
        $user=Yii::$app->user->identity;

        if ($model->load(Yii::$app->request->post())) {
            $model->user_id=$user->id;
            $model->created_date=time();
            $model->status=0;
            $model->save();
            return $this->goBack();
        }

        return $this->goBack();
    }
    public function actionYangiliklar()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Sahifalar::find(),
        ]);

        return $this->render('yangiliklar', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionHujjat()
    {
        
        $models = Hujjatlar::find()->where(['turi'=>$id,'status'=>1])->all();
        return $this->render('hujjat', [
            'models' => $models,
        ]);
    }
    public function actionYangilik($id=false)
    {
        $model = Sahifalar::findOne($id);
        return $this->render('yangilik', [
            'model' => $model,
        ]);
    }

    public function actionTulov(){

        $user_id = Yii::$app->user->id;


        $kitobobjs = Korzinka::find()->join('LEFT JOIN', 'orders', 'korzinka.order_id = orders.id')
            ->where("(korzinka.user_id = $user_id and p_type = 'kitob') and ((order_id is null) or (orders.state != 2))")->all();

        $metodobjs = Korzinka::find()->join('LEFT JOIN', 'orders', 'korzinka.order_id = orders.id')
            ->where("(korzinka.user_id = $user_id and p_type = 'metodika') and ((order_id is null) or (orders.state != 2))")->all();

        $hujjatobjs = Korzinka::find()->join('LEFT JOIN', 'orders', 'korzinka.order_id = orders.id')
            ->where("(korzinka.user_id = $user_id and p_type = 'hujjat') and ((order_id is null) or (orders.state != 2))")->all();

        $ids1 = array_map(function($m){
            return $m->id;
        }, $kitobobjs);

        $ids2 = array_map(function($m){
            return $m->id;
        }, $metodobjs);

        $ids3 = array_map(function($m){
            return $m->id;
        }, $hujjatobjs);

        $kitobpids = array_map(function($m){
            return $m->p_id;
        }, $kitobobjs);

        $metodpids = array_map(function($m){
            return $m->p_id;
        }, $metodobjs);

        $hujjatpids = array_map(function($m){
            return $m->p_id;
        }, $hujjatobjs);

        $sum1 = Mahsulot::find()->where(['in', 'id', $metodpids])->sum('narx');
        $sum2 = Kitoblar::find()->where(['in', 'id', $kitobpids])->sum('narx');
        $sum3 = Hujjatlar::find()->where(['in', 'id', $hujjatpids])->sum('narx');

        $order = new \app\models\Order();

        $order->state = 1;
        $order->amount = $sum1 + $sum2 + $sum3;
        $order->user_id = Yii::$app->user->id;
        $order->phone = Yii::$app->user->identity->telefon;

        if($order->save()){
            Korzinka::updateAll(
                [
                    'order_id'=>$order->id,
                ],
                ['in', 'id', $ids1 + $ids2 + $ids3]
            );

            $order = \app\models\Order::find()->where(['id'=>$order->id])->one();

            return $this->render('tulov', [
                'order' => $order,
            ]);
        }

        return $this->goBack();


    }

    public function actionClick($id){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $model = \app\models\Order::find()->where(['id'=>$id])->one();

        if($model){
            $model->type = 'click';
            if($model->save()){
                return ['status'=>true];
            }
        }
        return ['status'=>false];
    }
}
