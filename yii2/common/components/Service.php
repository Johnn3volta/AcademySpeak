<?php

namespace common\components;


use yii\base\Component;

class Service extends Component{



    public function sayHello(){
        return 'Hello';
    }

    public function statusCode($code){
        $str = '';
        $arr = str_split($code);
        for($i = 0;$i <= count($arr);$i++){
            $str .= "<span>$arr[$i]</span>";
        }

        return $str;
    }

}