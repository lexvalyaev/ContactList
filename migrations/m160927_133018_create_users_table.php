<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160927_133018_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull()->comment("Имя пользователя"),
            'login'=>$this->string()->notNull()->comment("Login"),
            'password'=>$this->string()->notNull()->comment("Пароль"),

        ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица пользователей\'');
        $this->createIndex('search_user_id', '{{%users}}', 'login');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
