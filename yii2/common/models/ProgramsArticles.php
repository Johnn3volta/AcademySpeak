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
 * @property string $text2
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url
 * @property string $price
 * @property int $parent_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ProgramsCats $parent
 */
class ProgramsArticles extends \yii\db\ActiveRecord{

    public $image;

    public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::class,
            ],
            'slug'  => [
                'class'         => 'common\behaviors\Slug',
                'in_attribute'  => 'seo_h1',
                'out_attribute' => 'url',
                'translit'      => true,
            ],
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
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
                ['name', 'text', 'title', 'parent_id', 'seo_h1'],
                'required',
            ],
            [['url'], 'unique'],
            [['text','text2'], 'string'],
            [['parent_id', 'created_at', 'updated_at'], 'integer'],
            [
                ['name', 'title', 'description', 'keywords', 'url', 'seo_h1'],
                'string',
                'max' => 255,
            ],
            [['price'], 'number'],
            [['image'], 'file', 'extensions' => 'png, jpg'],
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
            'text2'       => 'Доп. информация',
            'title'       => 'Тайтл(Title)',
            'description' => 'Описание страницы(Description)',
            'keywords'    => 'Кейвордс(Keywords) ',
            'url'         => 'ЧПУ',
            'price'       => 'Цена',
            'image'       => 'Картинка',
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
        return $parentsCategories = ProgramsCats::find()
                                                ->select('name')
                                                ->indexBy('id')
                                                ->column();
    }

    public function upload(){
        if($this->validate()){
            $path = Yii::getAlias('@myStore') . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);

            return true;
        }else{
            return false;
        }
    }
}
