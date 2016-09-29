<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact_groups`.
 */
class m160927_134737_create_contact_groups_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%contact_groups}}', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer()->unsigned()->notNull(),
        ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'Группы контактов\'');
        $this->createIndex('search__contact_groups_id', '{{%contact_groups}}', 'user_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact_groups');
    }
}
