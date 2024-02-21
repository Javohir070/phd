<?php
namespace app\models;

use app\models\User;
use yii\base\Model;
use Yii;
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $middle_name;
    public $hudud_id;
    public $telefon;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            [['email', 'password_hash','last_name','first_name','telefon'], 'required'],
            [['last_name','first_name','middle_name'] , 'string', 'max' => 255],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'Bu email manzil allaqachon ro`yxatdan o`tgan.'],
            ['password_hash', 'string', 'min' => 6],
            ['telefon', 'integer', 'min'=>12]
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if ($this->validate()) {
            //echo "<pre>"; var_dump($this);exit;
            $user = new User();
            $user->role = 'user';
            $user->email = $this->email;
            $user->first_name = $this->first_name;
            $user->last_name = $this->last_name;
            $user->middle_name = $this->middle_name;
            $user->telefon = $this->telefon;
            $user->hudud_id = $this->hudud_id;
            $user->setPassword($this->password_hash);
            $user->generateAuthKey();
            if ($user->save()) {
                    return $user;
            }else{
                //echo "save bomadi<pre>";
                //var_dump($user);
                //exit;
            }
        }else{

            echo "validatisya yoq tizim administratori bilan bog'laning<pre>";
            var_dump($this);
            exit;
        }
        //return null;
    }
    
    
    public function afterSave($insert, $oldAttributes)
    {

    }
    // public function getViloyat(){
    //     return $this->hasOne(Viloyat::className(),['id'=>'viloyat_id']);
    // }
    // public function getTuman(){
    //     return $this->hasOne(Tuman::className(),['id'=>'tuman_id']);
    // }
    // public function getMillat(){
    //     return $this->hasOne(Nationality::className(),['id'=>'millat']);
    // }
    // public function beforeSave($insert)
    // {
    //     // if ($insert) {
    //     //     $this->status = 1;
    //     //     $this->created_date = time();
    //     //     $this->birth_date = strtotime($this->birth_date);
    //     // }else{
    //     //     $this->created_date = strtotime($this->created_date);
    //     //     //$this->speciality_id = intval($this->speciality_id);
    //     // }

    //     // // ...custom code here...
    //     // return parent::beforeSave($insert);
    // }
}
