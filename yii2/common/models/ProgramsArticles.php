<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "programs_articles".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url
 * @property int $parent_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ProgramsCats $parent
 */
class ProgramsArticles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programs_articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'title', 'description', 'url', 'created_at', 'updated_at'], 'required'],
            [['text'], 'string'],
            [['parent_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'title', 'description', 'keywords', 'url'], 'string', 'max' => 150],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProgramsCats::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'url' => 'Url',
            'parent_id' => 'Parent ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(ProgramsCats::class, ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\activequery\ProgramsArticlesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\activequery\ProgramsArticlesQuery(get_called_class());
    }
}
