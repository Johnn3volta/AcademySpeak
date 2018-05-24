<?php
$params = array_merge(require __DIR__ . '/../../common/config/params.php', require __DIR__ . '/../../common/config/params-local.php', require __DIR__ . '/params.php', require __DIR__ . '/params-local.php');

return [
    'id'                  => 'app-frontend',
    'basePath'            => dirname(__DIR__),
    'layout'              => 'myLayout',
    'name'                => 'Speak Studio',
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => [
                'name'     => '_identity-frontend',
                'httpOnly' => true,
            ],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager'   => [
            'enablePrettyUrl'     => true,
            'enableStrictParsing' => true,
            'showScriptName'      => false,
            'rules'               => [
                '/'                                                          => 'site/index',
                '<action:(about|contact|captcha|call-back|price-list|diagnostika)>'      => 'site/<action>',
                'napravleniya-deyatelnosti'                                  => 'programs-cats/index',
                'napravleniya-deyatelnosti/<url:[\w-]+>'                     => 'programs-cats/program',
                'napravleniya-deyatelnosti/<parent_url:[\w-]+>/<url:[\w-]+>' => 'program-article/index',
//                '<parent_url:[\w-]+>/<url:[\w-]+>/print-out-blank' => 'product/print-out-blank',
//                '<parent_url:[\w-]+>/<url:[\w-]+>' => 'product/view'
            ],
        ],
        'service'      => [
            'class' => 'frontend\components\Service',
        ],
    ],
    'params'              => $params,
];
