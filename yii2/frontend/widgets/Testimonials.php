<?php


namespace frontend\widgets;


use yii\base\Widget;

class Testimonials extends Widget{

    public function run(){
        return $this->render('testimonials');
    }
}