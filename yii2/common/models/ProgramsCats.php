<?php

namespace common\models;

use common\models\activequery\ProgramsCatsQuery;
use Yii;

/**
 * This is the model class for table "programs_cats".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url
 * @property int $cteated_at
 * @property int $updated_at
 *
 * @property ProgramsArticles[] $programsArticles
 */
class ProgramsCats extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programs_cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'title', 'description', 'url', 'cteated_at', 'updated_at'], 'required'],
            [['text'], 'string'],
            [['cteated_at', 'updated_at'], 'integer'],
            [['name', 'title', 'description', 'keywords', 'url'], 'string', 'max' => 150],
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
            'cteated_at' => 'Cteated At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramsArticles()
    {
        return $this->hasMany(ProgramsArticles::class, ['parent_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProgramsCatsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProgramsCatsQuery(get_called_class());
    }
}
