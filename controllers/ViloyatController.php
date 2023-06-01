<?php

namespace app\controllers;

use Yii;
use app\models\Viloyat;
use app\models\ViloyatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\User;
use yii\filters\AccessRule;
use yii\filters\AccessControl;
/**
 * ViloyatController implements the CRUD actions for Viloyat model.
 */
class ViloyatController extends Controller
{
    public $layout = "/backend";
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
				'ruleConfig' => [
					'class' => AccessRule::className(),
				],
                'only' => ['index','create', 'update', 'delete'],
				'rules' => [
			        [
						'actions' => ['index','create', 'update', 'delete'],
						'allow' => true,
						// Allow users, moderators and admins to create
						'roles' => [
                            //(Yii::$app->user->identity->role==="admin")?"admin":"?",
                            '@'
                        ],
					],
                ],
            ],
			'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)){
            if (Yii::$app->user->isGuest){
                return $this->redirect(['site/login']);
            }
            return true;
        }
    }
    /**
     * Lists all Viloyat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ViloyatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=15;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Viloyat model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Viloyat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Viloyat();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->viloyat_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Viloyat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->viloyat_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Viloyat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Viloyat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Viloyat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Viloyat::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
