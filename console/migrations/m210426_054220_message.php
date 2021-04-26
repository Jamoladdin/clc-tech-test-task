<?php

use yii\db\Migration;

/**
 * Class m210426_054220_message
 */
class m210426_054220_message extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('message', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210426_054220_message cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210426_054220_message cannot be reverted.\n";

        return false;
    }
    */
}
