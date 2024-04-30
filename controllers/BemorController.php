<?php

namespace app\controllers;

use Yii;
use app\models\Bemor;
use app\models\search\BemorSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BemorController implements the CRUD actions for Bemor model.
 */
class BemorController extends Controller
{
    public $layout = "/backend";
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    /**
     * Lists all Bemor models.
     * @return mixed
     */
//    public function actionIndex()
//    {
//        $searchModel = new BemorSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Bemor::find(),
        ]);
        

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionChart($id)
    {
        $model = Bemor::findOne($id);
        return $this->render('chart',[
            'model' => $model
        ]);
    }
    public function actionTekshirish()
    {
        $model = Bemor::find()->all();
        Yii::$app->session->set('key', 'javohir');
        return $this->render('tekshirish',[
            'model' => $model
        ]);
    }
    public function actionTurlar(){
        return $this->render('turlar');
    }
    public function actionSignal($id, $name)
    {
        $model = Bemor::findOne($id);
        $mod = $name;
        return $this->render('signal',[
            'model' => $model,'mod'=>$mod
        ]);
    }

    public function actionGetByCategory($startAge, $endAge)
    {
        // Bemor modelini olish
        $bemorModel = new Bemor();

        // Kategoriya bo'yicha malumotlarni olish
        $bemors = $bemorModel::getByCategory($startAge, $endAge);

        // JSON formatida javob qaytarish
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $bemors;
    }
    public function actionViloyat()
    {
        return $this->render('viloyat');
    }

    
    /**
     * Displays a single Bemor model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {  
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Bemor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new Bemor();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('create', [
//            'model' => $model,
//        ]);
//    }
    public function actionTashxis($id){
        // $signallar = 1;
        $id_2 =rand(10, 20);
        $id_3 =rand(1, 30);
        $signallar = Bemor::find()->all();
        $segnal_id2 = Bemor::findOne($id_2);
        $segnal_id3 = Bemor::findOne($id_3);
        return $this->render('tashxis', [
            'model' => $this->findModel($id),
            'signallar'=>$signallar,
            'segnal_id2'=>$segnal_id2,
            'segnal_id3'=>$segnal_id3,
        ]);
    }
    public function actionCreate()
    {
        $model = new Bemor();

       if ($model->load(Yii::$app->request->post())) {
        //    $model->uploadrasm();
           $model->uploadavatar();
           $model->uploadolingan_signal();
           $model->uploadtashxis_file();
           $model->uploadsignal_1();
           $model->uploadsignal_2();
           $model->uploadsignal_3();
           $model->uploadsignal_4();
           if(!$model->save()){
               echo '<pre>';
               var_dump($model);exit;
               throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
           }
           else{

           }

           return $this->redirect(['tashxis', 'id' => $model->id]);
       }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Bemor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('update', [
//            'model' => $model,
//        ]);
//    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $avatar = $model->avatar; //var_dump($avatar);exit;


        if ($model->load(Yii::$app->request->post())) {
            $model->uploadavatar();
            $model->uploadolingan_signal();
            $model->uploadtashxis_file();
            $model->uploadsignal_1();
            $model->uploadsignal_2();
            $model->uploadsignal_3();
            $model->uploadsignal_4();
            // if($model->avatar!=null){ $model->uploadavatar();}
            // else{  $model->avatar=$avatar;}

            if(!$model->save()){
                echo '<pre>';
                var_dump($model);exit;
                throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
            }
            else{
                return $this->render('view', [
                    'model' => $this->findModel($id),
                ]);
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Bemor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Bemor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bemor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bemor::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
