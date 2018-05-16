<?php


namespace frontend\widgets;


use yii\base\Widget;

class Teachers extends Widget{

    public function run(){
        return $this->render('teachers');
    }

}