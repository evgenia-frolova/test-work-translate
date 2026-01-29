<?php

use yii\db\Migration;

class m260129_124108_init_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%translator_info}}', [
            'id'         => $this->primaryKey(),
            'name'       => $this->string()->notNull(),
            'language'   => $this->string()->notNull(),
            'phone'      => $this->string()->notNull(),
            'is_weekend' => $this->boolean()->defaultValue(0),
        ]);
        
        $this->createIndex('idx_language', '{{%translator_info}}', 'language');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%translator_info}}');
    }

    
}
