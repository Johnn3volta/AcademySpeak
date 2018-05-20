<?php


namespace frontend\widgets;


use frontend\models\CallBackForm;
use Yii;
use yii\base\Widget;


class CallBack extends Widget{

    public $from_time = [
        10 => '10:00',
        11 => '11:00',
        12 => '12:00',
        13 => '13:00',
        14 => '14:00',
        15 => '15:00',
        16 => '16:00',
        17 => '17:00',
        18 => '18:00',
        19 => '19:00',
    ];

    public $to_time = [
        11 => '11:00',
        12 => '12:00',
        13 => '13:00',
        14 => '14:00',
        15 => '15:00',
        16 => '16:00',
        17 => '17:00',
        18 => '18:00',
        19 => '19:00',
        20 => '20:00',
    ];

    public function run(){
        $model = new CallBackForm();

        return $this->render('call-back', [
            'model'     => $model,
            'from_time' => $this->from_time,
            'to_time'   => $this->to_time,
        ]);
    }
}