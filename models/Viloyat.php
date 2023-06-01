<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "viloyat".
 *
 * @property integer $viloyat_id
 * @property string $viloyat_nomi
 *
 * @property Diplom[] $diploms
 * @property Tuman[] $tumen
 */
class Viloyat extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 2;
    const STATUS_DELETE = 9;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'viloyat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['viloyat_nomi'], 'required'],
            [['viloyat_nomi'], 'string', 'max' => 100],
            [['viloyat_nomi'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'viloyat_id' => 'ID',
            'viloyat_nomi' => 'Viloyat Nomi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTuman()
    {
        return $this->hasMany(Tuman::className(), ['viloyat_id' => 'viloyat_id']);
    }

    public static function getRegionsList()
    {
        $result = self::find()->where(['status'=>self::STATUS_ACTIVE])->all();
        return ArrayHelper::map($result, "viloyat_id", "viloyat_nomi");
    }
}
