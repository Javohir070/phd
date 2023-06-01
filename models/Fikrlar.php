<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fikrlar".
 *
 * @property int $id
 * @property int $user_id
 * @property string $matn
 * @property int $created_date
 * @property int|null $status
 */
class Fikrlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fikrlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'matn', 'created_date'], 'required'],
            [['user_id', 'created_date', 'status'], 'integer'],
            [['matn'], 'string', 'max' => 2048],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'matn' => 'Matn',
            'created_date' => 'Created Date',
            'status' => 'Status',
        ];
    }
    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'user_id']);
    }
}
