<?php

use yii\db\Migration;

class m160526_200720_forms extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%forms}}', [
            'id' => $this->primaryKey(),
            'date' => $this->date()->notNull(),
            'name' => $this->string()->notNull(),
            'message' => $this->string()->notNull(),
            'file' => $this->string(),
        ], $tableOptions);

        $this->createIndex('idx-forms-name', '{{%forms}}', 'name');
        $this->createIndex('idx-forms-date', '{{%forms}}', 'date');
    }

    public function down()
    {
        $this->dropTable('{{%forms}}');
    }
}
