<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $name
 * @property string $second_name
 * @property string $phone_number
 * @property string $email
 * @property string $birthday
 * @property string $user_id
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'second_name', 'phone_number', 'user_id'], 'required'],
            [['birthday'], 'safe'],
            [['user_id'], 'integer'],
            [['name', 'second_name', 'phone_number', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'second_name' => 'Second Name',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'birthday' => 'Birthday',
            'user_id' => 'User ID',
        ];
    }
}
