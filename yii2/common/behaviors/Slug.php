<?php

namespace common\behaviors;

use dosamigos\transliterator\TransliteratorHelper;
use yii;
use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\helpers\Inflector;

class Slug extends Behavior{

    public $in_attribute = 'name';

    public $out_attribute = 'url';

    public $translit = true;

    public function events(){
        return [
            ActiveRecord::EVENT_BEFORE_VALIDATE => 'getSlug',
        ];
    }

    public function getSlug($event){
        if(empty($this->owner->{$this->out_attribute})){
            $this->owner->{$this->out_attribute} = $this->generateSlug($this->owner->{$this->in_attribute});
        }else{
            $this->owner->{$this->out_attribute} = $this->generateSlug($this->owner->{$this->out_attribute});
        }
    }

    private function generateSlug($slug){
        $slug = $this->slugify($slug);

        return $slug;
    }

    private function slugify($slug){
        if($this->translit){
            return Inflector::slug(TransliteratorHelper::process($slug), '-', true);
        }else{
            return $this->slug($slug, '-', true);
        }
    }

    private function slug($string, $replacement = '-', $lowercase = true){
        $string = preg_replace('/[^\p{L}\p{Nd}]+/u', $replacement, $string);
        $string = trim($string, $replacement);

        return $lowercase ? strtolower($string) : $string;
    }
}