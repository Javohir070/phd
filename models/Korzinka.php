<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "sahifalar".
 *
 * @property int $id
 * @property string $p_type
 * @property int $p_id
 */
class Korzinka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'korzinka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['p_id', 'p_type'], 'required'],
            [['p_id','order_id'], 'integer'],
            [['p_type'], 'string'],
        ];
    }

    public function getMahsulot(){
        return $this->hasOne(Mahsulot::class, ['id'=>'p_id']);
    }
    public function getKitob(){
        return $this->hasOne(Kitoblar::class, ['id'=>'p_id']);
    }
    public function getHujjat(){
        return $this->hasOne(Hujjatlar::class, ['id'=>'p_id']);
    }

    public function getOrder(){
        return $this->hasOne(Order::class, ['id'=>'order_id']);
    }

}
