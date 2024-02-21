<?php
namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\web\UploadedFile;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $avatar
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $role
 * @property string $auth_key
 * @property integer $gender_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_IN_ACTIVE = 9;
    const STATUS_ACTIVE = 10;
    const STATUS_DELETED = 0;
    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';
    const ROLE_MODERATOR = "moderator";
	const SCENARIO_UPDATE='update';
    
    public $password_r;
    public $password_old;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name','username', 'first_name',  'date_of_birth', 'viloyat_id'], 'required'],
            [['created_at', 'updated_at', 'last_login_at', 'viloyat_id', 'status','tuman_id', 'mutaxassislik_id','komissiya_id','kasb_id','gender_id'], 'integer'],
            [['last_name', 'first_name','username', 'middle_name', 'email','role','activation_token','avatar'], 'string', 'max' => 255],
            [['activate', 'telefon', 'date_of_birth'], 'string', 'max' => 20],
            // [['email'], 'unique'],
            ['status', 'default', 'value' => self::STATUS_IN_ACTIVE],
            [['avatar'], 'file'],
            [['avatar'], 'safe'],
//            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'last_name' => Yii::t('app', 'Familiya'),
            'first_name' => Yii::t('app', 'Ism'),
            'middle_name' => Yii::t('app', 'Sharif'),
            'email' => Yii::t('app', 'Email'),
            'password_hash' => Yii::t('app', 'Parol'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'created_at' => Yii::t('app', 'Yaratilgan vaqti'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'last_login_at' => Yii::t('app', 'Last Login At'),
            'role' => Yii::t('app', 'Role'),
            'hudud_id' => Yii::t('app', 'Hudud (Viloyat)'),
            'telefon' => Yii::t('app', 'Telefon'),
            'status' => Yii::t('app', 'Status'),
            'activate' => Yii::t('app', 'Activate'),
            'activation_token' => Yii::t('app', 'Activation token'),
            'date_of_birth' => Yii::t('app', 'Data of birth'),
            'gender_id' => Yii::t('app', 'Gender Id'),
            'avatar' => Yii::t('app', 'Avatar'),
        ];
    }


    public function beforeSave($insert)
    {
        if ($insert) {
            $this->created_at = time();
            $this->role = 'user';
//            $this->setPassword($this->password_hash);
            $this->generateAuthKey();
        }else{
            //$this->created_at = strtotime($this->created_at);
            $this->updated_at = time();
            //$this->speciality_id = intval($this->speciality_id);
        }

        // ...custom code here...
        return parent::beforeSave($insert);
    }
    // public function afterFind()
    // {
    //     if (is_integer($this->created_at)) {
    //         $this->created_at = date('d-m-Y',$this->created_at);
    //     }
    //     // if (is_integer($this->birth_day)) {
    //     //     $this->birth_day = date('d-m-Y',$this->birth_day);
    //     // }
    //     if (is_integer($this->updated_at)) {
    //         $this->updated_at = date('d-m-Y',$this->updated_at);
    //     }
    //     return parent::afterFind();
    // }
    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates new token for email verification
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    public function makeFIO()
    {
        return $this->last_name." ".mb_substr($this->first_name, 0,1,'UTF-8').". ".mb_substr($this->middle_name, 0,1,'UTF-8').".";
    }
    public function isAdmin()
    {
        return $this->role == self::ROLE_ADMIN ? true : false;
    }
    public function isModerator()
    {
        return $this->role == self::ROLE_MODERATOR ? true : false;
    }
    public function makeUAM(){
        return $this->role;
    }
    public function uploadrasm()
    {
            $this->avatar = UploadedFile::getInstance($this, 'avatar');
            if ($this->avatar) {
                $dir_path = 'uploads/user/avatar/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->avatar->extension;
                $this->avatar->saveAs($dir_path_file);
                $this->avatar = $dir_path_file;
               // var_dump($this->avatar);exit;
            }

        
    }
    
}
