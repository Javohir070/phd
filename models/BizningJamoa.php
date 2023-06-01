<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "bizning_jamoa".
 *
 * @property int $id
 * @property string|null $fish
 * @property string|null $ish_joy
 * @property string|null $rasm
 * @property string|null $telegram
 * @property string|null $facebook
 * @property string|null $instagram
 */
class BizningJamoa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bizning_jamoa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fish'], 'string', 'max' => 512],
            [['ish_joy'], 'string', 'max' => 2048],
            [['rasm', 'telegram', 'facebook', 'instagram'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fish' => 'Fish',
            'ish_joy' => 'Ish Joy',
            'rasm' => 'Rasm',
            'telegram' => 'Telegram',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
        ];
    }
    public function uploadrasm()
    {
            $this->rasm = UploadedFile::getInstance($this, 'rasm');
            if ($this->rasm) {
                $dir_path = 'uploads/bizningjamoa/rasm/'.date('Y').'/'.date('M').'/'.date('d');
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
