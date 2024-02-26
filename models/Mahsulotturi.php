<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahsulot_turi".
 *
 * @property int $Id
 * @property string $nomi
 * @property int|null $status
 */
class Mahsulotturi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahsulot_turi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi'], 'required'],
            [['status'], 'integer'],
            [['nomi'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Kasallik nomi',
            'status' => 'Status',
        ];
    }
}
