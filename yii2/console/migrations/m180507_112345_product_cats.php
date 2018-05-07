<?php

use yii\db\Migration;

/**
 * Class m180507_112345_product_cats
 */
class m180507_112345_product_cats extends Migration{

    /**
     * {@inheritdoc}
     */
    public function safeUp(){
        $this->createTable('programs_cats', [
            'id'          => $this->primaryKey(),
            'name'        => $this->string()->notNull(),
            'seo_h1'      => $this->string()->notNull()->unique(),
            'text'        => $this->text()->notNull(),
            'title'       => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'keywords'    => $this->string(),
            'url'         => $this->string()->notNull(),
            'created_at'  => $this->integer(),
            'updated_at'  => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(){

        $this->dropTable('programs_cats');

        return true;

    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180507_112345_product_cats cannot be reverted.\n";

        return false;
    }
    */
}
