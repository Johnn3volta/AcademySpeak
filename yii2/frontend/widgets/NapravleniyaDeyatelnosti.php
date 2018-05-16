<?php


namespace frontend\widgets;


use yii\base\Widget;

class NapravleniyaDeyatelnosti extends Widget{

    public function run(){
        return $this->render('napravleniya-deyatelnosti');
    }
}