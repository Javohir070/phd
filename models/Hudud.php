<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hududiy_tashkilot".
 *
 * @property int $id
 * @property string $nomi
 * @property string $rahbar
 * @property int $viloyat_id
 * @property int $status
 */
class Hudud extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hududiy_tashkilot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'rahbar', 'viloyat_id'], 'required'],
            [['viloyat_id', 'status'], 'integer'],
            [['nomi'], 'string', 'max' => 2048],
            [['rahbar'], 'string', 'max' => 256],
            [['viloyat_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nomi' => Yii::t('app', 'Nomi'),
            'rahbar' => Yii::t('app', 'Rahbar'),
            'viloyat_id' => Yii::t('app', 'Viloyat ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
