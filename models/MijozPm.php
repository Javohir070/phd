<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "mijoz_pm".
 *
 * @property int $id
 * @property string $nomi
 * @property string|null $qisqa
 * @property string $fayl
 * @property int $user_id
 * @property int $created_date
 * @property int $status
 */
class MijozPm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mijoz_pm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'fayl'], 'required'],
            [['user_id', 'created_date', 'status', 'kategoriya_id'], 'integer'],
            [['nomi', 'fayl','admin_fikr'], 'string', 'max' => 1024],
            [['qisqa'], 'string', 'max' => 2048],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Mijoz yuborgan psixologik metodika nomi',
            'qisqa' => 'Psixologik metodika qisqacha tavsifi',
            'fayl' => 'Psixologik metodikaga biriktirilgan fayl',
            'user_id' => 'Foydalanuvchi',
            'created_date' => 'Kiritilgan sa\'na',
            'status' => 'Status',
        ];
    }
     public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->status = 1;
            $this->created_date = time();
            $this->user_id = Yii::$app->user->identity->id;
        }else{
            $this->created_date = strtotime($this->created_date);
        }

        // ...custom code here...
        return parent::beforeSave($insert);
    }
    public function afterFind()
    {
        if(is_integer($this->created_date)){
            $this->created_date = date('Y-m-d',$this->created_date);
        }
        // if(is_integer($this->birth_date)){
        //     $this->birth_date = date('Y-m-d',$this->birth_date);
        // }
    }
    public function uploadfile()
    {
            $this->fayl = UploadedFile::getInstance($this, 'fayl');
            if ($this->fayl) {
                $dir_path = 'uploads/metodikapm/fayl/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->fayl->extension;
                $this->fayl->saveAs($dir_path_file);
                $this->fayl = $dir_path_file;
            }
        
    }
}
