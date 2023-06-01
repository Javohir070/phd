<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sahifalar".
 *
 * @property int $id
 * @property string $product_ids
 * @property int $amount
 * @property int $state
 * @property int $user_id
 * @property string $phone
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'user_id','phone','state'], 'required'],
            [['product_ids', 'date', 'created_at'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [];
    }

    public function getUser(){
        return $this->hasOne(User::class, ['id'=>'user_id']);
    }

    public function getKorzinka(){
        return $this->hasMany(Korzinka::class, ['order_id'=>'id']);
    }
}
