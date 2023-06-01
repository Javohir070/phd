<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "sahifalar".
 *
 * @property int $id
 * @property string $title
 * @property int $menyu_id
 * @property string $content
 * @property string|null $rasm
 * @property string|null $qisqa
 * @property string|null $fayl
 * @property int|null $created_date
 * @property int|null $deleted_date
 * @property int|null $updated_date
 * @property int|null $status
* @property string|null $videolink
 */
class Sahifalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sahifalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['menyu_id', 'created_date', 'deleted_date', 'updated_date', 'status'], 'integer'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 2048],
            [['videolink'], 'string', 'max' => 256],
            [['qisqa', 'fayl'], 'string', 'max' => 1024],
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
            'title' => 'Yangilik sarlavhasi',
            'menyu_id' => 'Menyu ID',
            'content' => 'Content',
            'rasm' => 'Rasm',
            'qisqa' => 'Yangilikning qisqacha tavsifi',
            'fayl' => 'Fayl',
            'created_date' => 'Kiritilgan sana',
            'deleted_date' => 'Deleted Date',
            'updated_date' => 'Updated Date',
            'status' => 'Status',
            'videolink' => 'Video manzili',
        ]; 
    }
    public function uploadrasm()
    {
            $this->rasm = UploadedFile::getInstance($this, 'rasm');
            if ($this->rasm) {
                $dir_path = 'uploads/yangiliklar/rasm/'.date('Y').'/'.date('M').'/'.date('d');
                if (!is_dir($dir_path)) {
                    mkdir($dir_path, 0777, true);
                }
                $file_name = Yii::$app->security->generateRandomString(12);
                
                $dir_path_file = $dir_path.'/' . $file_name . '.' . $this->rasm->extension;
                $this->rasm->saveAs($dir_path_file);
                $this->rasm = $dir_path_file;
            }
        
    }
}
