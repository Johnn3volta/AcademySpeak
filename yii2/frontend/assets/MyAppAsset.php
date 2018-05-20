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
        'css/style.css',
        'css/magnific-popup.css',
        'css/custom.css',
    ];
    public $js = [
//        'js/scripts.js',
        'js/vendor/jquery.flexslider-min.js',
        'js/vendor/jquery.waypoints.min.js',
        'js/vendor/owl.carousel.min.js',
        'js/vendor/jquery.countTo.js',
        'js/vendor/jquery.easing.1.3.js',
        'js/vendor/imagesloaded.pkgd.min.js',
        'js/vendor/isotope.pkgd.min.js',
        'js/vendor/jquery.appear.js',
        'js/vendor/jquery.stellar.min.js',
        'js/vendor/photoswipe.min.js',
        'js/vendor/photoswipe-ui-default.min.js',
        'js/magnific-popup.min.js',
        'js/main.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle'
    ];
}