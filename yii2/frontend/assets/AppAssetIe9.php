<?php


namespace frontend\assets;


use yii\web\AssetBundle;
use yii\web\View;

class AppAssetIe9 extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'js/vendor/html5shiv.min.js',
        'js/vendor/respond.min.js',
    ];
    public $depends = [
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
        'condition' => 'lte IE9'
    ];
}