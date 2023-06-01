<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "hujjatlar".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $fayl
 * @property int $turi
 * @property int|null $created_date
 * @property int|null $status
 */
class Hujjatlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hujjatlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'turi'], 'required'],
            [['description'], 'string'],
            [['turi', 'status','narx', 'views', 'downloads', 'views_fake', 'downloads_fake'], 'integer'],
            [['title'], 'string', 'max' => 1024],
            [['fayl'], 'file'],
            [['fayl'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Hujjat nomi',
            'description' => 'Qisqacha tavsif',
            'fayl' => 'Fayl',
            'turi' => 'Turi',
            'created_date' => 'Kiritilgan sana',
            'downloads_fake' => 'Yuklab olganlar soni',
            'downloads' => 'Haqiqiy yuklab olganlar soni',
            'status' => 'Status',

        ];
    }
    public function beforeSave($insert)
    {
        if ($insert) {
            $this->status = 1;
            //$this->narx = 0;
            //if (!is_integer($this->created_date)) $this->created_date = strtotime($this->created_date);
            //else 
                $this->created_date = time();
            //$this->viloyat_id = Yii::$app->user->identity->hudud_id;
        }else{
            //$this->created_date = time();
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
    public function afterFind()
    {
        if (is_integer($this->created_date)) {
            $this->created_date = date('d-m-Y',$this->created_date);
        }
        return parent::afterFind();
    }

    public function getKorzinka(){
        return $this->hasOne(Korzinka::class,['p_id'=>'id'])->where([
            'p_type' => 'hujjat',
            'user_id' => Yii::$app->user->id
        ]);
    }
}
