<?php

namespace app\controllers;

use Yii;
use app\models\Hujjatlar;
use app\models\Korzinka;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HujjatlarController implements the CRUD actions for Hujjatlar model.
 */
class HujjatlarController extends Controller
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
     * Lists all Hujjatlar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Hujjatlar::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hujjatlar model.
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
     * Creates a new Hujjatlar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Hujjatlar();

        if ($model->load(Yii::$app->request->post())) {
            //echo "<pre>";var_dump($_FILES);exit;
            $model->uploadfile(); 
            //$model->uploadrasm(); 
            if(!$model->save()){ 
                echo '<pre>';
                var_dump($model);exit;
                throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
            }
            else{

            }
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Hujjatlar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        //$rasm = $model->rasm; //var_dump($rasm);exit;
        $fayl = $model->fayl; //var_dump($rasm);exit;
        
        if ($model->load(Yii::$app->request->post())) {
            //echo "<pre>";
            //var_dump($_FILES['Hujjatlar']['name']['fayl']);exit;
            if($_FILES['Hujjatlar']['name']['fayl'] != ""){ $model->uploadfile();}
            else{  $model->fayl=$fayl;

            }
            if(!$model->save()){ 
                echo '<pre>';
                var_dump($model);exit;
                throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
            }
            else{

            }
            
            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hujjatlar model.
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
     * Finds the Hujjatlar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hujjatlar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hujjatlar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionHujjat($slug=false,$id=false,$error=false)
    {
    	$this->layout="/frontend";
        $slugy = 'mtt';
        if($slug=='mtt'){
            $idd = [1,2,3];
            $birinchi_title = "Xalqaro va qonun hujjatlari";
            $ikkinchi_title = "Normativ huquqiy hujjatlar";
            $uchunchi_title = "Tashkiliy metodik hujjatlar";
            $birinchi = Hujjatlar::find()->where(['turi'=>1,'status'=>1])->all();
            $ikkinchi = Hujjatlar::find()->where(['turi'=>2,'status'=>1])->all();
            $uchunchi = Hujjatlar::find()->where(['turi'=>3,'status'=>1])->all();

            // if($id==1){
            //     $birinchi_title = "Xalqaro va qonun hujjatlari";
            //     $ikkinchi_title = "Normativ huquqiy hujjatlar";
            //     $uchunchi_title = "Tashkiliy metodik hujjatlar";
            //     $birinchi = Hujjatlar::find()->where(['turi'=>1,'status'=>1])->all();
            //     $ikkinchi = Hujjatlar::find()->where(['turi'=>2,'status'=>1])->all();
            //     $uchunchi = Hujjatlar::find()->where(['turi'=>3,'status'=>1])->all();
            // }
            if($id==2){
                $birinchi_title = "Normativ huquqiy hujjatlar";
                $ikkinchi_title = "Xalqaro va qonun hujjatlari";
                $uchunchi_title = "Tashkiliy metodik hujjatlar";
                $birinchi = Hujjatlar::find()->where(['turi'=>2,'status'=>1])->all();
                $ikkinchi = Hujjatlar::find()->where(['turi'=>1,'status'=>1])->all();
                $uchunchi = Hujjatlar::find()->where(['turi'=>3,'status'=>1])->all();
            }
            if($id==3){
                $birinchi_title = "Tashkiliy metodik hujjatlar";
                $ikkinchi_title = "Xalqaro va qonun hujjatlari";
                $uchunchi_title = "Normativ huquqiy hujjatlar";
                $birinchi = Hujjatlar::find()->where(['turi'=>3,'status'=>1])->all();
                $ikkinchi = Hujjatlar::find()->where(['turi'=>1,'status'=>1])->all();
                $uchunchi = Hujjatlar::find()->where(['turi'=>2,'status'=>1])->all();
            }
            // else{
            //     $birinchi_title = "Xalqaro va qonun hujjatlari";
            //     $ikkinchi_title = "Normativ huquqiy hujjatlar";
            //     $uchunchi_title = "Tashkiliy metodik hujjatlar";
            //     $birinchi = Hujjatlar::find()->where(['turi'=>1,'status'=>1])->all();
            //     $ikkinchi = Hujjatlar::find()->where(['turi'=>2,'status'=>1])->all();
            //     $uchunchi = Hujjatlar::find()->where(['turi'=>3,'status'=>1])->all();
            // }
            
        }
        if ($slug=='maktab') {
            $slugy = 'maktab';
            $idd = [4,5,6];
            $birinchi_title = "Xalqaro va qonun hujjatlari";
            $ikkinchi_title = "Normativ huquqiy hujjatlar";
            $uchunchi_title = "Tashkiliy metodik hujjatlar";
            $birinchi = Hujjatlar::find()->where(['turi'=>4,'status'=>1])->all();
            $ikkinchi = Hujjatlar::find()->where(['turi'=>5,'status'=>1])->all();
            $uchunchi = Hujjatlar::find()->where(['turi'=>6,'status'=>1])->all();
            if($id==5){
                $birinchi_title = "Normativ huquqiy hujjatlar";
                $ikkinchi_title = "Xalqaro va qonun hujjatlari";
                $uchunchi_title = "Tashkiliy metodik hujjatlar";
                $birinchi = Hujjatlar::find()->where(['turi'=>5,'status'=>1])->all();
                $ikkinchi = Hujjatlar::find()->where(['turi'=>4,'status'=>1])->all();
                $uchunchi = Hujjatlar::find()->where(['turi'=>6,'status'=>1])->all();
            }
            if($id==6){
                $birinchi_title = "Tashkiliy metodik hujjatlar";
                $ikkinchi_title = "Xalqaro va qonun hujjatlari";
                $uchunchi_title = "Normativ huquqiy hujjatlar";
                $birinchi = Hujjatlar::find()->where(['turi'=>6,'status'=>1])->all();
                $ikkinchi = Hujjatlar::find()->where(['turi'=>4,'status'=>1])->all();
                $uchunchi = Hujjatlar::find()->where(['turi'=>5,'status'=>1])->all();
            }

        } 
        // else {
        //     $xalqaro = Hujjatlar::find()->where(['turi'=>1,'status'=>1])->all();
        //     $normativ = Hujjatlar::find()->where(['turi'=>2,'status'=>1])->all();
        //     $tashkiliy = Hujjatlar::find()->where(['turi'=>3,'status'=>1])->all();
        // }
        
    	//$models = Hujjatlar::find()->where(['turi'=>$id,'status'=>1])->all();
        return $this->render('hujjat', [
            'slugy' => $slugy,
            'idd' => $idd,
            'birinchi' => $birinchi,
            'birinchi_title' => $birinchi_title,
            'ikkinchi' => $ikkinchi,
            'ikkinchi_title' => $ikkinchi_title,
            'uchunchi' => $uchunchi,
            'uchunchi_title' => $uchunchi_title,
            'error'=>$error
        ]);
        //return $this->render('hujjat');
    }
    public function actionDownload($id) {
        
           if (($model = Hujjatlar::findOne($id)) !== null) {
               //$path = Yii::getAlias('@webroot') . '/uploads/sertifikat';

               $file = Yii::getAlias('@webroot'). '/' . $model->fayl;


               if (file_exists($file)&&(!Yii::$app->user->isGuest)) {
                   $user = Yii::$app->user->identity;


                   $m = Korzinka::find()->where([
                       'user_id'=>$user->id,
                       'p_type'=>'hujjat',
                       'p_id'=>$id
                   ])->one();

                   $sotib_olgan = isset($m->order->state) && $m->order->state == 2;
                   if($sotib_olgan ||$user->role=="admin"||$model->narx==0){
                       $model->downloads = $model->downloads+1;
                       $model->save();
                       return Yii::$app->response->sendFile($file);
                   }
           
           

              }else{
                // echo "<pre>";
                // var_dump(Yii::$app->request->referrer);
                // exit;
                throw new NotFoundHttpException();
                //return $this->redirect(['hujjat', 'error' => 'err']);
              }
            
        }

        //throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));

       
    }
}
