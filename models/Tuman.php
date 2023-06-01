<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tuman".
 *
 * @property integer $tuman_id
 * @property integer $viloyat_id
 * @property integer $tuman_nomi
 *
 * @property Diplom[] $diploms
 * @property Tm[] $tms
 * @property Viloyat $viloyat
 */
class Tuman extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE=1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tuman';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['viloyat_id', 'tuman_nomi'], 'required'],
            [['viloyat_id', 'tuman_nomi'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tuman_id' => 'ID',
            'viloyat_id' => 'Viloyat nomi',
            'tuman_nomi' => 'Tuman nomi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    

    /**
     * @return \yii\db\ActiveQuery
     */
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViloyat()
    {
        return $this->hasOne(Viloyat::className(), ['viloyat_id' => 'viloyat_id']);
    }

    public static function getTumanList()
    {
        $result = self::find()->where(['status'=>self::STATUS_ACTIVE])->all();
        return ArrayHelper::map($result, "tuman_id", "tuman_nomi");
    }

    public static function getDistrictList($id)
    {
        return Tuman::find()->where(['viloyat_id'=>$id])->all();
    }
   
}
