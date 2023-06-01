<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property int $created_at
 * @property int $updated_at
 * @property int|null $last_login_at
 * @property string $role
 * @property int $hudud_id
 * @property int $telefon
 * @property int $status
 *
 * @property Profile $profile
 */
class User1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'email', 'password_hash', 'auth_key', 'created_at', 'updated_at', 'role', 'hudud_id', 'telefon', 'status'], 'required'],
            [['created_at', 'updated_at', 'last_login_at', 'hudud_id', 'telefon', 'status'], 'integer'],
            [['last_name', 'first_name', 'middle_name', 'email'], 'string', 'max' => 255],
            [['password_hash'], 'string', 'max' => 60],
            [['auth_key', 'role'], 'string', 'max' => 32],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'last_name' => Yii::t('app', 'Familiyasi'),
            'first_name' => Yii::t('app', 'Ism'),
            'middle_name' => Yii::t('app', 'Sharif'),
            'email' => Yii::t('app', 'Email'),
            'password_hash' => Yii::t('app', 'Parol'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'last_login_at' => Yii::t('app', 'Last Login At'),
            'role' => Yii::t('app', 'Role'),
            'hudud_id' => Yii::t('app', 'Hudud ID'),
            'telefon' => Yii::t('app', 'Telefon'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Profile]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    }
}
