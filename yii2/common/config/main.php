<?php
require __DIR__ . '/../../functions.php';

return [
    'language'   => 'ru-RU',
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules'    => [
        'yii2images' => [
            'class'                   => 'rico\yii2images\Module',
            'imagesStorePath'         => Yii::getAlias('@myStore'),
            'imagesCachePath'         => Yii::getAlias('@myCache'),
            'graphicsLibrary'         => 'GD',
            'placeHolderPath'         => Yii::getAlias('@noImage'),
            'imageCompressionQuality' => 100,
        ],
    ],
];
