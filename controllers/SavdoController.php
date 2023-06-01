<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use app\models\Korzinka;

class SavdoController extends Controller
{
    /**
     *
     * @request
     *      csrf -- validation
     *      p_id -- id of product
     *      p_type -- type of product
     *      current -- current url for redirect
     *      *your $this->goBack() not working
     *
     * @return mixed
     */
    public function actionKorzinka(){

        $request = Yii::$app->request->post();
        if(isset($request['p_type']) && ($request['p_type'] == 'metodika' || $request['p_type'] == 'kitob' || $request['p_type'] == 'hujjat')){

            $model = new Korzinka();

            $model->p_id = $request['p_id'] ?? null;
            $model->p_type = $request['p_type'] ?? null;
            $model->user_id = Yii::$app->user->id;

            if($model->save()){

                $count = Korzinka::find()->join('LEFT JOIN', 'orders', 'korzinka.order_id = orders.id')
                    ->where("(korzinka.user_id = $model->user_id) and ((order_id is null) or (orders.state != 2))")->count();

                return $this->asJson([
                    'status'=>'success',
                    'count'=>$count
                ]);
            }
        }


        return $this->asJson([
            'status'=>'error',
            'data'=>Yii::$app->request->post()
        ]);
    }

    public function actionSotibOlish(){

        if(Yii::$app->request->isPost){
            $request = Yii::$app->request->post();

            if(isset($request['p_type']) && ($request['p_type'] == 'metodika' || $request['p_type'] == 'hujjat' || $request['p_type'] == 'kitob')){

                $find = Korzinka::find()->where([
                    'user_id' => Yii::$app->user->id,
                    'p_id' => $request['p_id'],
                    'p_type' => $request['p_type'],
                ])->one();

                if(!$find){
                    $model = new Korzinka();

                    $model->p_id = $request['p_id'];
                    $model->p_type = $request['p_type'];
                    $model->user_id = Yii::$app->user->id;
                    $model->save();
                }


                return $this->redirect('/site/card');
            }
            return $this->redirect(Yii::$app->request->referrer);
        }
        return $this->redirect('/');
    }

    public function actionRemovekorzinka($id){

        if($id){
            Korzinka::deleteAll(['id'=>$id]);
        }

        return $this->redirect('/site/card');
    }
}
