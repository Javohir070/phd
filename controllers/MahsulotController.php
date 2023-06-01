<?php

namespace app\controllers;

use Yii;
use app\models\Mahsulot;
use app\models\Tavsiya;
use app\models\Korzinka;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * MahsulotController implements the CRUD actions for Mahsulot model.
 */
class MahsulotController extends Controller
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
     * Lists all Mahsulot models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahsulot::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Mahsulot model.
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
     * Creates a new Mahsulot model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mahsulot();

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
     * Updates an existing Mahsulot model.
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
            if($_FILES['Mahsulot']['name']['rasm'] != ""){ $model->uploadrasm();}
            else{  $model->rasm=$rasm;}
            if($_FILES['Mahsulot']['name']['fayl'] != ""){ $model->uploadfile();}
            else{  $model->fayl=$fayl;}
            if(!$model->save()){ 
                echo '<pre>';
                var_dump($model);exit;
                throw new \yii\web\HttpException(404, 'The requested Item could not be found.');
            }
            else{
                // echo "save boldi";
                 return $this->redirect(['index']);
                // exit;
            }
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Mahsulot model.
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
     * Finds the Mahsulot model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mahsulot the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mahsulot::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionMahsulotlar()
    {
        $this->layout = "frontend";
        $search = Yii::$app->request->queryParams;
        // echo "<pre>";
        // var_dump($search);
        // exit;



        $query = Mahsulot::find()->with('korzinka');
        if(isset($search['Kasb']))
            $query = $query->where(['in','kasb_id',$search['Kasb']]);
        if(isset($search['Kategoriya']))
            $query = $query->orWhere(['in','mahsulotturi_id',$search['Kategoriya']]);
        if(isset($search['Turi']))
            $query = $query->orWhere(['in','kategoriya',$search['Turi']]);
        if(isset($search['Pulli'])){
            if($search['Pulli']==0)
                $query = $query->orWhere(['narx'=>0]);
            else
                $query = $query->orWhere(['!=','narx',0]);
        }


        $pagination = new Pagination(['totalCount' => $query->count()]);

        // limit the query using the pagination and retrieve the articles
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $dataProvider = new ActiveDataProvider([
            'query' => $query->orderBy(['id'=>SORT_DESC]),
            'pagination' => array('pageSize' => 9),

        ]);
        
        
        return $this->render('mahsulotlar', [
            'dataProvider' => $dataProvider,
            //'pagination' => $pagination,
        ]);
    }
    public function actionMahsulot($id)
    {

        $this->layout = "frontend";
        $mahsulot = Mahsulot::findOne($id);
        $mahsulot->views = $mahsulot->views+1;
        $mahsulot->save();
        $aloqa[1] = (Mahsulot::findOne($mahsulot->aloqa1)!==null)?Mahsulot::findOne($mahsulot->aloqa1):$mahsulot;
        $aloqa[2] = (Mahsulot::findOne($mahsulot->aloqa2)!==null)?Mahsulot::findOne($mahsulot->aloqa2):$mahsulot;
        $aloqa[3] = (Mahsulot::findOne($mahsulot->aloqa3)!==null)?Mahsulot::findOne($mahsulot->aloqa3):$mahsulot;
        

        return $this->render('mahsulot', [
            'model' => $mahsulot,
            'aloqa' => $aloqa,
        ]);
        //return $this->render('mahsulot');
    }
    public function actionDownload($id) {
        
        //$user = Yii::$app->user->identity;
       
       if (($model = Mahsulot::findOne($id)) !== null&&file_exists(Yii::getAlias('@webroot'). '/' . $model->fayl)) {
            $file = Yii::getAlias('@webroot'). '/' . $model->fayl;
            $model->downloads = $model->downloads+1;

            if (!Yii::$app->user->isGuest){
                  $user = Yii::$app->user->identity;

                  $m = Korzinka::find()->where([
                        'user_id'=>$user->id,
                        'p_type'=>'metodika',
                        'p_id'=>$id
                  ])->one();

                  $sotib_olgan = isset($m->order->state) && $m->order->state == 2;

                  if($sotib_olgan || $user->role=="admin" || $model->narx==0){


                    $model->save();
                    //var_dump($file);exit;
                    return Yii::$app->response->sendFile($file);
                  }
                  else{
                  	echo "test-test";exit;
                  }
            }else{
              return $this->redirect(Yii::$app->request->referrer);
              // if ($model->narx==0) {
              //   $model->save();
              //   return Yii::$app->response->sendFile($file);
              // }
            }
           
           

          


            
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));

       
    }
    public function actionTavsiya($id) {
        
        if (!Yii::$app->user->isGuest){
        	$user_id = Yii::$app->user->identity->id;
	        if(Tavsiya::find()->where(['mahsulot_id'=>$id])->andWhere(['user_id'=>$user_id])->one()===null){
	        	$t = new Tavsiya();
	        	$t->mahsulot_id = $id;
	        	$t->user_id = $user_id;
	        	$t->status=1;
	        	$t->save();
	        }
        }
        

        
        return $this->redirect(Yii::$app->request->referrer);
       
    }
}
