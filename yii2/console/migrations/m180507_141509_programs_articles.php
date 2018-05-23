<?php

use yii\db\Migration;

/**
 * Class m180507_141509_programs_articles
 */
class m180507_141509_programs_articles extends Migration{

    /**
     * {@inheritdoc}
     */
    public function safeUp(){
        $this->createTable('programs_articles', [
            'id'          => $this->primaryKey(),
            'name'        => $this->string()->notNull(),
            'seo_h1'      => $this->string()->notNull(),
            'text'        => $this->text()->notNull(),
            'text2'       => $this->text(),
            'title'       => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'keywords'    => $this->string()->notNull(),
            'url'         => $this->string()->notNull(),
            'parent_id'   => $this->integer(),
            'price'       => $this->integer(),
            'created_at'  => $this->integer(),
            'updated_at'  => $this->integer(),
        ]);

        $this->createIndex('idx-programs_acrticles-parent_id', 'programs_articles', 'parent_id');
        $this->addForeignKey('fk-programs_articles-parent_id', 'programs_articles', 'parent_id', 'programs_cats', 'id', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(){
        $this->dropForeignKey('fk-programs_articles-parent_id', 'programs_articles');
        $this->dropIndex('idx-programs_acrticles-parent_id', 'programs_articles');
        $this->dropTable('programs_articles');

        return true;
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180507_141509_programs_articles cannot be reverted.\n";

        return false;
    }
    */
}
