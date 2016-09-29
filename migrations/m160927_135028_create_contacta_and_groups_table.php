<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contacta_and_groups`.
 */
class m160927_135028_create_contacta_and_groups_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%contacts_and_groups}}', [
            'id' => $this->primaryKey(),
            'contact_id'=>$this->integer()->unsigned()->comment("id contacts"),
            'group_id'=>$this->integer()->unsigned()->comment("groups"),
        ],'ENGINE=InnoDb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT \'контакты и группы\'');
        $this->createIndex('search_contacts_and_groups_id', '{{%contacts_and_groups}}', ['contact_id','group_id']);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contacts_and_groups');
    }
}
