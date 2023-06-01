<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "mahsulot".
 *
 * @property int $id
 * @property string $nomi
 * @property string $qisqa
 * @property int $narx
 * @property int|null $kategoriya
 * @property int $yosh
 * @property string $rasm
 * @property int $yoriqmona
 * @property int $motodik_natija
 * @property string $fayl
 * @property int|null $created_date
 * @property int|null $updated_date
 * @property int|null $deleted_date
 * @property int $status
 * @property int $user_id
 * @property int|null $views
 * @property int|null $downloads
 * @property int|null $views_fake
 * @property int|null $downloads_fake
 */
class Mahsulot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahsulot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'qisqa', 'narx', 'yosh', 'yoriqmona', 'motodik_natija'], 'required'],
            [['narx', 'kategoriya', 'yoriqmona', 'motodik_natija', 'status', 'user_id', 'views', 'downloads', 'views_fake', 'downloads_fake', 'aloqa1', 'aloqa2', 'aloqa3','kasb_id','index_uchun'], 'integer'],
            [['nomi'], 'string', 'max' => 1024],
            [['yosh'], 'string', 'max' => 256],
            [['rasm', 'fayl'], 'file'],
            [['rasm', 'fayl'], 'safe'],
            [['qisqa'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Psixologik metodika nomi',
            'qisqa' => 'Qisqacha tavsifi',
            'narx' => 'Narxi',
            'kategoriya' => 'Kategoriya',
            'yosh' => 'Yosh chegarasi',
            'rasm' => 'Rasm yuklash',
            'yoriqmona' => 'Yo\'riqmona',
            'motodik_natija' => 'Motodik Natija',
            'fayl' => 'Fayl',
            'created_date' => 'Kiritilgan sana',
            'updated_date' => 'Updated Date',
            'deleted_date' => 'Deleted Date',
            'status' => 'Status',
            'user_id' => 'User ID',
            'views' => 'Haqiqiy ko\'rganlar soni',
            'downloads' => 'Haqiqiy yuklab olganlar soni',
            'views_fake' => 'Ko\'rganlar soni',
            'downloads_fake' => 'Yuklab olganlar soni',
            'index_uchun' => 'Asosiy sahifada ko\'rinishi uchun',
        ];
    }
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->status = 1;
            $this->created_date = time();
            //$this->viloyat_id = Yii::$app->user->identity->hudud_id;
        }else{
            $this->created_date = strtotime($this->created_date);
        }

        // ...custom code here...
        return parent::beforeSave($insert);
    }

    public function uploadfile()
    {
            $this->fayl = UploadedFile::getInstance($this, 'fayl');
            if ($this->fayl) {
                $dir_path = 'uploads/metodikalar/fayl/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->fayl->extension;
                $this->fayl->saveAs($dir_path_file);
                $this->fayl = $dir_path_file;
            }
        
    }
    public function uploadrasm()
    {
            $this->rasm = UploadedFile::getInstance($this, 'rasm');
            if ($this->rasm) {
                $dir_path = 'uploads/metodikalar/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->rasm->extension;
                $this->rasm->saveAs($dir_path_file);
                $this->rasm = $dir_path_file;
            }
        
    }
    public function getMahsulotturi()
    {
        return $this->hasOne(Mahsulotturi::className(),['id'=>'mahsulotturi_id']);
    }

    public function getKorzinka(){
        return $this->hasOne(Korzinka::class,['p_id'=>'id'])->where([
            'p_type' => 'metodika',
            'user_id' => Yii::$app->user->id
        ]);
    }
    public function afterFind()
    {
        if (is_integer($this->created_date)) {
            $this->created_date = date('d-m-Y',$this->created_date);
        }
        if (is_integer($this->deleted_date)) {
            $this->deleted_date = date('d-m-Y',$this->deleted_date);
        }
        if (is_integer($this->updated_date)) {
            $this->updated_date = date('d-m-Y',$this->updated_date);
        }
        return parent::afterFind();
    }
}
