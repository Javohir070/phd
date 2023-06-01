<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "kitoblar".
 *
 * @property int $id
 * @property string $nomi
 * @property string|null $qisqa
 * @property string|null $muallif
 * @property string $rasm
 * @property string $fayl
 * @property int $narx
 * @property int|null $created_date
 * @property int|null $status
 */
class Kitoblar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kitoblar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'narx'], 'required'],
            [['narx', 'created_date', 'status','nashr_yili', 'views', 'downloads', 'views_fake', 'downloads_fake'], 'integer'],
            [['nomi', 'qisqa'], 'string', 'max' => 2048],
            [['muallif'], 'string', 'max' => 1024],
            [['rasm', 'fayl'], 'file'],
            [['rasm', 'fayl'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'qisqa' => 'Qisqa',
            'muallif' => 'Muallif',
            'rasm' => 'Rasm',
            'fayl' => 'Fayl',
            'narx' => 'Narx',
            'created_date' => 'Yaratilgan sana',
            'status' => 'Status',
            'nashr_yili' => 'Nashr yili',  
            'category_id' => 'Kategoriya',  
            'views' => 'Haqiqiy ko\'rganlar soni',
            'downloads' => 'Haqiqiy yuklab olganlar soni',
            'views_fake' => 'Ko\'rganlar soni',
            'downloads_fake' => 'Yuklab olganlar soni',
        ];
    }
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->status = 1;
            $this->created_date = strtotime($this->created_date);
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
                $dir_path = 'uploads/kitoblar/fayl/'.date('Y').'/'.date('M').'/'.date('d');
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
                $dir_path = 'uploads/kitoblar/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->rasm->extension;
                $this->rasm->saveAs($dir_path_file);
                $this->rasm = $dir_path_file;
            }
        
    }
    // public function getMahsulotturi()
    // {
    //     return $this->hasOne(Mahsulotturi::className(),['id'=>'mahsulotturi_id']);
    // }

    public function getKorzinka(){
        return $this->hasOne(Korzinka::class,['p_id'=>'id'])->where([
            'p_type' => 'kitob',
            'user_id' => Yii::$app->user->id
        ]);
    }
}
