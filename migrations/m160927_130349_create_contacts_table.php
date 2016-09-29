<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contacts`.
 */
class m160927_130349_create_contacts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull()->comment("Имя"),
            'second_name'=>$this->string()->notNull()->comment("Фамилия"),
            'phone_number'=>$this->string()->notNull()->comment("Телефон"),
            'email'=>$this->string()->comment("email"),
            'birthday'=>$this->dateTime()->comment("день рождения"),
            'user_id'=>$this->integer()->unsigned()->notNull()
        ], 'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Таблица контактов\'');

          $this->createIndex('search_user_id', '{{%contacts}}', 'user_id');

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%contacts}}');
    }
}
