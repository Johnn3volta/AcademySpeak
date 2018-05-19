<?php


namespace frontend\models;


use yii\base\Model;

class CallBack extends Model{
    public $name;
    public $phone;
    public $time_from;
    public $time_to;

    public function rules(){
        return  [
            [['name','phone','time_from','time_to'],'required'],
        ];
    }
}