<?php

namespace app\controllers;

use app\components\http\Client;
use app\models\LoginForm;
use app\models\LoginFormPhone;
use app\models\Tuman;
use app\models\Viloyat;
use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;
use app\models\RegistrationForm;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    public $layout = "/backend";
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            // 'verbs' => [
            //     'access' => [
            //     'class' => AccessControl::className(),
            //     'only' => ['create','update', 'view', 'delete', 'index'],
            //     'rules' => [
            //         [
            //             'actions' => ['create','update', 'view', 'delete', 'index'],
            //             'allow' => true,
            //             'roles' => ['@'],
            //         ],
            //     ],
            // ],
            //     'class' => VerbFilter::className(),
            //     'actions' => [
            //         'delete' => ['POST'],
            //     ],
            // ],
        ];
    }
    public function beforeAction($action)
    {

        if (parent::beforeAction($action)){
            if($action->id=="region") return true;
            if (Yii::$app->user->isGuest){
                return $this->redirect(['site/login']);
            }
            return true;
        }
        
    }
    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
            'pagination' => array('pageSize' => 10),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        // if(Yii::$app->request->post()&&$model->load(Yii::$app->request->post()))
        // {
        //     echo "<pre>";
        //     var_dump($model);
        //     exit;
        // }   

        if ($model->load(Yii::$app->request->post()) && $model->save() && $model->validate()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
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
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }


    
//<<<<<<<<<<<<<<<<<<<<<< ruyhatdan o'tish >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function actionSignUp()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->response->statusCode = 200;

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new User();
        $request = Yii::$app->request;

        if(User::find()->where(['telefon'=>$request->post('User')['telefon']])->one())
        {
            $response = [
                'status' => 400,
                'message' => 'Siz avvaldan ro‘yhatdan o‘tgansiz!',
            ];
            return $response;
        }

        $active_code = rand(100001,999999);

        if ($request->isPost && $model->load($request->post()) ) {

            $model->activate = strval($active_code);
            $model->telefon = $model->telefon;
            $model->activation_token = Yii::$app->getSecurity()->generateRandomString(32);
            $model->password_hash = Yii::$app->security->generatePasswordHash($active_code);
            $model->status = User::STATUS_IN_ACTIVE;

            if($model->save()){

                $code_plus = str_replace('+','',$model->telefon);
                $code_probel = str_replace(' ','',$code_plus);
                $code_qav_ung = str_replace('(','',$code_probel);
                $code_qav_chap = str_replace(')','',$code_qav_ung);
                $phone = str_replace('-','',$code_qav_chap);
                $tel =  $phone;

                $text =
                        Yii::t('app', 'Psixologik portal: ').
                        Yii::t('app','Faollashtirish kodi')." - ".$model->activate.' '.
                        Yii::t('app','Sizning ro‘yxatdan o‘tish kodingiz').' - '. $model->activate;
                $this->actionSend($text,$tel);
                $response = [
                    'status' => 200,
                    'message' => 'Sign up save success',
                    'token' => $model->activation_token
                ];
                return $response;
            }else{
                $response = [
                    'status' => 400,
                    'message' => 'Majburiy maydonlarni to‘ldiring',
                    'errors' => $model->getErrors(),
                ];
                return $response;
            }
        }

        $response = [
            'status' => 400,
            'message' => 'Ro‘yhatdan o‘tish amalga oshirilmadi!',
        ];
        return $response;
    }

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< sms kodni aktivlashtirish >>>>>>>>>>>>>>>>>>>>
    public function actionSignActiveCode()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->response->statusCode = 200;

        $request = Yii::$app->request;
        $post = $request->post();
        $get = $request->get();

        if (!empty($get['token'])) {
            $token = $get['token'];
        }
        else{
            return $this->redirect(['/site/index']);
        }

        $user = User::find()->where(['activation_token'=>$token])->one();

        if (!empty($user)){

            $user2 = User::find()->where(['activation_token'=>$token])->one();

            if ($request->isPost && $user->load($post) && !empty($post['User']['activate'])) {

                if ($user2->activate == $user->activate){
                    $user->activation_token = null;
                    $user->activate = '';
                    $user->status = User::STATUS_ACTIVE;
                    if ($user->save()){
                        $response = [
                            'status' => 200,
                            'message' => 'Kod movfaqyatli faollashtirldi',
                            'user' => $user->makeFIO(),
                        ];
                        return $response;
                    }else{
                        $response = [
                            'status' => 400,
                            'message' => 'Kod tasdiqlanmadi',
                        ];
                        return $response;
                    }
                }
                else {
                    $response = [
                        'status' => 400,
                        'message' => 'Faollashtirish kodini xato kiritdingiz',
                    ];
                    return $response;
                }
            }
            else {
                $response = [
                    'status' => 400,
                    'message' => 'Iltimos faollashtirish kodini kiriting',
                ];
                return $response;
            }
        }
        else {
            $response = [
                'status' => 400,
                'message' => 'Bunday foydalanuvchi mavjud emas',
            ];
            return $response;
        }
    }

//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Parolni tiklash va qayta yuborish >>>>>>>>>>>>>>>>>>>>
    public function actionSignPasswordReset()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->response->statusCode = 200;

        $request = Yii::$app->request;
        $post = $request->post();

        if ($request->isPost && !empty($post['User']['telefon']))
        {
            $user = User::find()->where(['telefon'=>$post['User']['telefon']])->one();

            if (!empty($user)){

                $active_code = rand(100001,999999);

                if ($request->isPost && $user->load($request->post()) ) {

                    $code_plus = str_replace('+','',$user->telefon);
                    $code_probel = str_replace(' ','',$code_plus);
                    $code_qav_ung = str_replace('(','',$code_probel);
                    $code_qav_chap = str_replace(')','',$code_qav_ung);
                    $phone = str_replace('-','',$code_qav_chap);
                    $tel =  $phone;

                    $text =
                        Yii::t('app', 'Psixologik portal: ').
                        Yii::t('app','Sizning parolni tiklash kodingiz').' - '. $active_code;

                    if($this->actionSend($text,$tel)){
                        $user->password_hash = Yii::$app->security->generatePasswordHash($active_code);

                        if($user->save()){
                            $response = [
                                'status' => 200,
                                'message' => 'Paroligiz movfaqyatli o‘zgartirildi!',
                            ];
                            return $response;
                        }else{
                            $response = [
                                'status' => 400,
                                'message' => 'Iltimos majburiy maydonlarni to‘ldiring',
                                'errors' => $user->getErrors(),
                            ];
                            return $response;
                        }
                    }else{
                        $response = [
                            'status' => 400,
                            'message' => 'SMS habar hizmati vaqtinchalik ishlamayapdi!',
                            'errors' => $user->getErrors(),
                        ];
                        return $response;
                    }
                }
            }
            else {
                $response = [
                    'status' => 400,
                    'message' => 'Bunday foydalanuvchi mavjud emas',
                ];
                return $response;
            }
        }else{
            $response = [
                'status' => 400,
                'message' => 'Iltimos telefon raqamni kiriting',
            ];
            return $response;
        }
    }

    public function actionSignIn()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        Yii::$app->response->statusCode = 200;

        $request = Yii::$app->request;
        $post = $request->post();

        if ($request->isPost && !empty($post['User']['telefon']) && !empty($post['User']['password_hash']))
        {

            $user = User::find()->where(['telefon'=>$post['User']['telefon']])->one();
            if (!empty($user) && Yii::$app->getSecurity()->validatePassword($post['User']['password_hash'], $user->password_hash))
            {
                if (Yii::$app->user->login($user, true ? 3600 * 24 * 30 : 0))
                {
                    $response = [
                        'status' => 200,
                        'message' => 'Tabriklaymiz siz bizning saytdan movfaqyatli ro‘yhatdan o‘tdingiz!',
                        'user' => $user->makeFIO()
                    ];
                    return $response;
                }else{
                    $response = [
                        'status' => 400,
                        'message' => 'Ro‘yhatdan o‘tishda muammo bor!',
                    ];
                    return $response;
                }
            }
            else {
                $response = [
                    'status' => 400,
                    'message' => 'Telefon raqam yoki parolni noto‘g‘ri kiritdingiz iltimos qatadan kiriting!',
                ];
                return $response;
            }
        }else{
            $response = [
                'status' => 400,
                'message' => 'Iltimos telefon raqam yoki parol kiritilmagan kiriting!',
            ];
            return $response;
        }
    }

    public function actionSignOut()
    {
        Yii::$app->user->logout();
        return $this->redirect(Yii::$app->homeUrl);
    }

    public function actionSend($message, $phone)
    {
        $post = [
            'login' => 'sms0067ts',
            'pwd' => 'root0000',
            'CgPN' => 1490,
            'CdPN' => $phone,
            'text' => $message,
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"http://sms.etc.uz:8083/json2sms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);
        if (!empty(json_decode($response)) && json_decode($response)->query_code == 200)
        {
            return true;
        }else{
            return false;
        }

    }

    public function actionSendEskiz($message, $phone)
    {
        $sms = new Client(['baseUrl' => 'http://notify.eskiz.uz/api/message/sms/send']);
        $login = new Client(['baseUrl' => 'http://notify.eskiz.uz/api/auth/login']);
        $response = $login->createRequest()
            ->setMethod('POST')
            ->addHeaders(['content-type'=>'application/json'])
            ->setData([
                'email' => 'kamka007@naver.com',
                'password' => 'KkPkyKSSbK0xCdz32r8rti7SZMI1H3kZLZjFJpbn'
            ])
            ->send();

        $code = $sms->createRequest()
            ->setMethod('POST')
            ->setHeaders(['Authorization' => 'Bearer ' . $response->data["data"]["token"]])
            ->addHeaders(['content-type'=>'application/json'])
            ->setData([
                'message' => $message,
                'mobile_phone' => $phone
            ])
            ->send();
    }


    public function actionRegion()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $post = Yii::$app->request->post();

        $state = Viloyat::findOne($post['id']);
        if (!empty($state))
        {
            $region = Tuman::getDistrictList($state->viloyat_id);
            $options = '';
            foreach ($region as $r) $options .= '<option value="'.$r->tuman_id.'">'.$r->tuman_nomi.'</option>';
            return [
                'option' => $options,
            ];
        }else{
            $options = '<option value="">Tanalang</option>';
            return [
                'option' => $options,
            ];
        }

    }

}
