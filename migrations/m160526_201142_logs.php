<?php

use yii\db\Migration;

class m160526_201142_logs extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%logs}}', [
            'id' => $this->primaryKey(),
            'date_response' => $this->date()->notNull(),
            'message_response' => $this->string()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-forms-date_response', '{{%logs}}', 'date_response');
        $this->createIndex('idx-forms-message_response', '{{%logs}}', 'message_response');
    }

    public function down()
    {
        $this->dropTable('{{%logs}}');
    }
}
