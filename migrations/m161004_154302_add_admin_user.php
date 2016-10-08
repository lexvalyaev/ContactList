<?php

use yii\db\Migration;

class m161004_154302_add_admin_user extends Migration
{
    public function up()
    {
        $user=new \app\models\Users;

        $user->attributes = [
            'name'=>'admin',
            'login'=>'admin',
            'password'=> \Yii::$app->getSecurity()->generatePasswordHash('password'),
        ];
        $user->save();

    }

    public function down()
    {
        $model = \app\models\Users::find()->byLogin('admin')->one();
        if($model) $model->delete();
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
