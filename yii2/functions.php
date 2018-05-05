<?php

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}


function _log($data){

    \Yii::info(\yii\helpers\VarDumper::dumpAsString($data, 5), '_');
}

function _end($data){
    echo \yii\helpers\VarDumper::dumpAsString($data, 5, true);
    exit();
}

///**
// * @return yii\console\Application
// */
//function app(){
//    return \Yii::$app;
//}