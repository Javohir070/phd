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
class Tavsiya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahsulot_tavsiya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mahsulot_id', 'user_id', 'status'], 'integer'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mahsulot_id' => 'Psixologik metodika',
            'status' => 'Status',
            'user_id' => 'User ID',
            
        ];
    }
    
    public function getMahsulot()
    {
        return $this->hasOne(Mahsulot::className(),['id'=>'mahsulot_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }
    
}
