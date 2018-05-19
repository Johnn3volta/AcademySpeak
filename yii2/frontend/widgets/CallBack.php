<?php


namespace frontend\widgets;


use yii\base\Widget;

class CallBack extends Widget{

    public function run(){
        $model = new CallBack();

        return $this->render('call-back',['model' => $model]);
    }
}