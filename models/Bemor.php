<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "bemor".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property int $birth_day
 * @property string|null $telefon
 * @property string $email
 * @property string $jinsi
 * @property int $created_at
 * @property int $updated_at
 * @property string $olingan_signal
 * @property string $signal_1
 * @property string $signal_2
 * @property string $signal_3
 * @property string $signal_4
 * @property string $tashxis
 * @property string $tashxis_file
 * @property string $manzili
 * @property string|null $avatar
 */
class Bemor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bemor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'middle_name', 'birth_day', 'viloyat_id', 'tuman_id', 'email', 'jinsi',  'olingan_signal', 'signal_1', 'signal_2', 'signal_3', 'signal_4', 'tashxis', 'tashxis_file', 'manzili'], 'required'],
            [[ 'created_at','status', 'updated_at'], 'integer'],
            [['last_name', 'birth_day', 'first_name', 'middle_name', 'email'], 'string', 'max' => 255],
            [['telefon'], 'string', 'max' => 200],
            [['jinsi'], 'string', 'max' => 100],
            [['olingan_signal', 'tashxis', 'manzili'], 'string', 'max' => 1024],
            [['signal_1', 'signal_2', 'signal_3', 'signal_4'], 'string', 'max' => 2560],
            [['tashxis_file', 'avatar'], 'string', 'max' => 2048],
            // [['email'], 'unique'],
            ['email', 'unique', 'targetClass' => 'app\models\Bemor', 'message' => 'Bu email bazda bor'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'viloyat_id'=>"Viloyat",
            'tuman_id'=>"Tuman",
            'last_name' => 'Familiya',
            'first_name' => 'Ism',
            'middle_name' => 'Sharif',
            'birth_day' => 'Tug\'ilgan sana',
            'telefon' => 'Telefon',
            'email' => 'Email',
            'jinsi' => 'Jinsi',
            'status' => 'Status',
            'created_at' => 'Yaratilgan sana',
            'updated_at' => 'O\'zgartirilgan sana',
            'olingan_signal' => 'Olingan Signal',
            'signal_1' => "Yo'g'on ichak",
            'signal_2' => 'Oshqozon',
            'signal_3' => 'Ingichka ichak',
            'signal_4' => "O'n ikki barmoqli ichak",
            'tashxis' => 'Tashxis',
            'tashxis_file' => 'Tashxis Fayli',
            'manzili' => 'Manzili',
            'avatar' => 'Rasm',
        ];
    }
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->status = 1;
            //$this->narx = 0;
            //if (!is_integer($this->created_date)) $this->created_date = strtotime($this->created_date);
            //else 
                $this->created_at = time();
                // $this->generateAuthKey();
            //$this->viloyat_id = Yii::$app->user->identity->hudud_id;
        }else{
            //$this->created_date = time();
                $this->updated_at = time();
        }

        // ...custom code here...
        return parent::beforeSave($insert);
    }

    public static function getByCategory($startAge, $endAge)
    {
        return self::find()
            ->where(['between', 'age', $startAge, $endAge])
            ->all();
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
    
    // public function uploadrasm()
    // {
    //         $this->rasm = UploadedFile::getInstance($this, 'rasm');
    //         if ($this->rasm) {
    //             $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
    //             if (!is_dir($dir_path)) {
    //                 mkdir($dir_path, 0777, true);
    //             }
    //             $file_name = Yii::$app->security->generateRandomString(12);
                
    //             $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->rasm->extension;
    //             $this->rasm->saveAs($dir_path_file);
    //             $this->rasm = $dir_path_file;
    //         }
        
    // }
    public function uploadavatar()
    {
        $this->avatar = UploadedFile::getInstance($this, 'avatar');
        if ($this->avatar) {
            $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
            if (!is_dir($dir_path)) {
                mkdir($dir_path, 0777, true);
            }
            $file_name = Yii::$app->security->generateRandomString(12);

            $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->avatar->extension;
            $this->avatar->saveAs($dir_path_file);
            $this->avatar = $dir_path_file;
        }

    }
    public function uploadolingan_signal()
    {
            $this->olingan_signal = UploadedFile::getInstance($this, 'olingan_signal');
            if ($this->olingan_signal) {
                $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->olingan_signal->extension;
                $this->olingan_signal->saveAs($dir_path_file);
                $this->olingan_signal = $dir_path_file;
            }
        
    }
    public function uploadtashxis_file()
    {
            $this->tashxis_file = UploadedFile::getInstance($this, 'tashxis_file');
            if ($this->tashxis_file) {
                $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->tashxis_file->extension;
                $this->tashxis_file->saveAs($dir_path_file);
                $this->tashxis_file = $dir_path_file;
            }
        
    }
    public function uploadsignal_1()
    {
            $this->signal_1 = UploadedFile::getInstance($this, 'signal_1');
            if ($this->signal_1) {
                $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->signal_1->extension;
                $this->signal_1->saveAs($dir_path_file);
                $this->signal_1 = $dir_path_file;
            }
        
    }
    public function uploadsignal_2()
    {
            $this->signal_2 = UploadedFile::getInstance($this, 'signal_2');
            if ($this->signal_2) {
                $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->signal_2->extension;
                $this->signal_2->saveAs($dir_path_file);
                $this->signal_2 = $dir_path_file;
            }
        
    }
    public function uploadsignal_3()
    {
            $this->signal_3 = UploadedFile::getInstance($this, 'signal_3');
            if ($this->signal_3) {
                $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->signal_3->extension;
                $this->signal_3->saveAs($dir_path_file);
                $this->signal_3 = $dir_path_file;
            }
        
    }
    public function uploadsignal_4()
    {
            $this->signal_4 = UploadedFile::getInstance($this, 'signal_4');
            if ($this->signal_4) {
                $dir_path = 'uploads/bemor/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->signal_4->extension;
                $this->signal_4->saveAs($dir_path_file);
                $this->signal_4 = $dir_path_file;
            }
        
    }
    public function getKasbi()
    {
        return $this->hasOne(Kasblar::className(),['id'=>'kasb_id']);
    }

    public function getRegion()
    {
        return $this->hasOne(Viloyat::className(),['viloyat_id'=>'viloyat_id']);
    }

    public function getDistrict()
    {
        return $this->hasOne(Tuman::className(),['tuman_id'=>'tuman_id']);
    }

    public function getGender()
    {
        return $this->hasOne(Gender::className(),['id'=>'gender_id']);
    }

}
