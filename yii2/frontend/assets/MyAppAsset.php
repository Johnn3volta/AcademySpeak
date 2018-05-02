<?php


namespace frontend\assets;
use yii\web\AssetBundle;


/**
 * Main frontend application asset bundle.
 */
class MyAppAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/styles-merged.css',
        'css/style.min.css',
        'css/custom.css',
    ];
    public $js = [
        'js/scripts.min.js',
        'js/main.min.js',
//        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}