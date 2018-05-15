<?php

namespace common\models;

use common\models\activequery\ProgramsCatsQuery;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "programs_cats".
 *
 * @property int $id
 * @property string $name
 * @property string $seo_h1
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ProgramsArticles[] $programs-articles
 */
class ProgramsCats extends \yii\db\ActiveRecord{

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
        return 'programs_cats';
    }

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            [['name', 'text', 'title', 'description','seo_h1'], 'required'],
            [['url'], 'unique'],
            [['text'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [
                ['name', 'title', 'description', 'keywords', 'url', 'seo_h1',],
                'string',
                'max' => 255,
            ],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels(){
        return [
            'id'          => 'ID',
            'name'        => 'Название',
            'seo_h1'      => 'Заголовок H1',
            'text'        => 'Текст',
            'title'       => 'Тайтл',
            'description' => 'Опсиание страницы(Description)',
            'keywords'    => 'Ключевые слова(Keywords)',
            'url'         => 'ЧПУ',
            'image'       => 'Картинка',
            'created_at'  => 'Создан',
            'updated_at'  => 'Обновлен',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramsArticles(){
        return $this->hasMany(ProgramsArticles::class, ['parent_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProgramsCatsQuery the active query used by this AR class.
     */
    public static function find(){
        return new ProgramsCatsQuery(get_called_class());
    }

    //вынести в компонент
    public function upload(){
        if($this->validate()){
            $path = Yii::getAlias('@myStore'). $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path,true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }

    public static function viewProgItems(){
        $items = [];
        $cats = ProgramsCats::find()->select(['name', 'url'])->asArray()->all();
        for ($i = 0; $i < count($cats); $i++) {
            $items[] = [
                'label' => $cats[$i]['name'],
                'url'   => '/napravleniya-deyatelnosti/' . $cats[$i]['url'],
            ];
        }

        return $items;
    }
}
