<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\Contact;


/**
 * This is the model class for table "contact_groups".
 *
 * @property integer $id
 * @property string $user_id
 */
class ContactGroups extends \yii\db\ActiveRecord
{

 /*   public function getContacts(){

        return $this->hasMany(Contact::classname(),['id','user_id']);
    }
      */
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
        ];
    }
}
