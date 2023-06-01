<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kasblar".
 *
 * @property int $id
 * @property string $nomi
 * @property int|null $status
 */
class Kasblar extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    const STATUS_DELETE = 9;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kasblar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi'], 'required'],
            [['status'], 'integer'],
            [['nomi'], 'string', 'max' => 1024],
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
            'status' => 'Status',
        ];
    }
    public static function getKasblarList()
    {
        $result = self::find()->where(['status'=>self::STATUS_ACTIVE])->all();
        return ArrayHelper::map($result, "id", "nomi");
    }
}
