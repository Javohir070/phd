<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
use kartik\mpdf\Pdf;
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        // 'html2pdf' => [
        //     'class' => '\yii2tech\html2pdf\Manager',
        //     'viewPath' => '@app/views/layouts',
        //     'layout' => 'pdf',
        //     'converter' => 'wkhtmltopdf',
        // ],
        'pdf' => [
            'class' => Pdf::classname(),
            'format' => Pdf::FORMAT_A4,
            'orientation' => Pdf::ORIENT_PORTRAIT,
            'destination' => 'D',
            // refer settings section for all configuration options
        ],
        'assetManager' => [
            'basePath'=>'@webroot/web/assets',
            'baseUrl'=>'@web/web/assets'
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'uz-UZ',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'sarvar-markaz',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
            'authTimeout' => 5*60*60,
            'enableSession' => true,
            'autoRenewCookie' => true,
        ],
        'session' => [
            'class' => 'yii\web\Session',
            'cookieParams' => ['lifetime' => 5*60*60]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        // 'authManager' => [
        //     'class' => 'yii\rbac\DbManager',
        // ],
        // 'authManager' => [
        //    'class' => 'app\components\MyManager',
        // ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
           'enableStrictParsing' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/sre',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                  //'quiz/<controller:\w+>/<action:\w+>/<id:\d+>' => 'quiz/<controller>/<action>',
                  '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                  'defaultRoute' => '/site/index',
                  'admin' => '/site/login',
            ],
        ],
        
    ],
    

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        //'allowedIPs' => ['*'],
    ];
}

return $config;
