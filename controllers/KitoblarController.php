<?php

namespace app\controllers;

use Yii;
use app\models\Kitoblar;
use app\models\Korzinka;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * KitoblarController implements the CRUD actions for Kitoblar model.
 */
class KitoblarController extends Controller
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
     * Lists all Kitoblar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Kitoblar::find(),
            'pagination' => array('pageSize' => 9),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kitoblar model.
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
     * Creates a new Kitoblar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kitoblar();

        if ($model->load(Yii::$app->request->post())) {
            //echo "<pre>";var_dump($_FILES);exit;
            $model->uploadfile(); 
            $model->uploadrasm(); 
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
     * Updates an existing Kitoblar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $rasm = $model->rasm; //var_dump($rasm);exit;
        $fayl = $model->fayl; //var_dump($rasm);exit;
        
        if ($model->load(Yii::$app->request->post())) {
            // if($_FILES["Kitoblar"]['name']['rasm']!=null){
            //     echo "<pre>";var_dump($_FILES["Kitoblar"]['name']['fayl']);exit;
            // }
            
            if($_FILES["Kitoblar"]['name']['rasm']!=null){ $model->uploadrasm();}
            else{  $model->rasm=$rasm;}
            if($_FILES["Kitoblar"]['name']['fayl']!=null){ $model->uploadfile();}
            else{  $model->fayl=$fayl;}
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
     * Deletes an existing Kitoblar model.
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
     * Finds the Kitoblar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kitoblar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kitoblar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionDownload($id) {
        
      

      if (($model = Kitoblar::findOne($id)) !== null) {
           //$path = Yii::getAlias('@webroot') . '/uploads/sertifikat';

           $file = Yii::getAlias('@webroot'). '/' . $model->fayl;

           if (file_exists($file)) {


               //$m = Kitoblar::findOne($id);
            if (!Yii::$app->user->isGuest){
            	$user = Yii::$app->user->identity;

                $m = Korzinka::find()->where([
                    'user_id'=>$user->id,
                    'p_type'=>'kitob',
                    'p_id'=>$id
                ])->one();

                $sotib_olgan = isset($m->order->state) && $m->order->state == 2;

	            if( $sotib_olgan ||$user->role=="admin"||$model->narx==0){
	               $model->downloads = $model->downloads+1;
	               $model->save();
	                //var_dump($file);exit;
	               return Yii::$app->response->sendFile($file);
	            }
        	}else{
        		return $this->redirect(Yii::$app->request->referrer);
            	// if($model->narx==0){
            		
	            //    $model->downloads = $model->downloads+1;
	            //    $model->save();
	            //     //var_dump($file);exit;
	            //    return Yii::$app->response->sendFile($file);
            	// }
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
