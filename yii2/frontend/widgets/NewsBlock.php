<?php
namespace frontend\widgets;

use yii\base\Widget;

class NewsBlock extends Widget{

    public function run(){
        return $this->render('newsblock');
    }
}