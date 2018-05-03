<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "programs_articles".
 *
 * @property int $id
 * @property string $name
 * @property string $seo_h1
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
class ProgramsArticles extends \yii\db\ActiveRecord{

    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::class,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName(){
        return 'programs_articles';
    }

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            [
                ['name', 'text', 'title', 'description', 'url', 'parent_id'],
                'required',
            ],
            [['text'], 'string'],
            [['parent_id', 'created_at', 'updated_at'], 'integer'],
            [
                ['name', 'title', 'description', 'keywords', 'url', 'seo_h1'],
                'string',
                'max' => 150,
            ],
            [
                ['parent_id'],
                'exist',
                'skipOnError'     => true,
                'targetClass'     => ProgramsCats::class,
                'targetAttribute' => ['parent_id' => 'id'],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        return [
            'id'          => 'ID',
            'name'        => 'Название',
            'text'        => 'Текст',
            'title'       => 'Тайтл(Title)',
            'description' => 'Описание страницы(Description)',
            'keywords'    => 'Кейвордс(Keywords) ',
            'url'         => 'ЧПУ',
            'parent_id'   => 'Родительская категория',
            'created_at'  => 'Создан',
            'updated_at'  => 'Обновлен',
            'seo_h1'      => 'Заголовок H1',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent(){
        return $this->hasOne(ProgramsCats::class, ['id' => 'parent_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\activequery\ProgramsArticlesQuery the active
     *     query used by this AR class.
     */
    public static function find(){
        return new \common\models\activequery\ProgramsArticlesQuery(get_called_class());
    }

    public function parentsCats(){
        return $parentsCategories = ProgramsCats::find()->select('name')->indexBy('id')->column();
    }
}
