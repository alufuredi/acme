<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190902_220402_create_user_table extends Migration {

    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey()->unsigned(),
            'uid' => $this->string(60)->notNull(),
            'username' => $this->string(45)->notNull(),
            'email' => $this->string(255)->notNull(),
            'password' => $this->string(60)->notNull(),
            'status' => $this->integer(4)->notNull(),
            'contact_email' => $this->boolean()->notNull()->defaultValue(FALSE),
            'contact_phone' => $this->boolean()->notNull()->defaultValue(FALSE),
            'created' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated' => $this->dateTime()->notNull()->defaultValue( '1000-01-01 00:00:00')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable('{{%user}}');
    }

}
