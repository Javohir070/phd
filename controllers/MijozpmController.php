<?php

namespace app\controllers;

use Yii;
use app\models\MijozPm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MijozpmController implements the CRUD actions for MijozPm model.
 */
class MijozpmController extends Controller
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
     * Lists all MijozPm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MijozPm::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MijozPm model.
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
     * Creates a new MijozPm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MijozPm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MijozPm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MijozPm model.
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
     * Finds the MijozPm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MijozPm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MijozPm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionDownload($id) {
        $user_id = Yii::$app->user->identity->id;
       if (($model = MijozPm::find()->where(['id'=>$id])->andWhere(['user_id'=>$user_id])->one()) !== null) {
           //$path = Yii::getAlias('@webroot') . '/uploads/sertifikat';

           $file = Yii::getAlias('@webroot'). '/' . $model->fayl;

           if (file_exists($file)) {
            //var_dump($file);exit;
           return Yii::$app->response->sendFile($file);

          }else{
            var_dump($file);exit;
          } 
            
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));

       
    }
    public function actionStatuschange()
    {
        $model = $this->findModel($_POST['id']);
        // echo "<pre>";
        // var_dump($_POST['MijozPm']['status']);
        // exit;
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->status = $_POST['MijozPm']['status'];
            $model->admin_fikr = $_POST['MijozPm']['admin_fikr'];
            $model->kategoriya_id = $_POST['MijozPm']['kategoriya_id'];
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        //}

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    
}
