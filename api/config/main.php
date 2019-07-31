<?php

use yii\web\Response;
use yii\web\JsonParser;
use api\versions\v1\Module;
use common\models\User;
use yii\log\FileTarget;

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$routes = require ('routes.php');

return [
    'id' => 'app-api',
    'version' => '1.0.0',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@api/versions/v1',
            'class' => Module::class,
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => User::class,
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'rules' => $routes,
        ],
        'request' => [
            'parsers' => [
                'application/json' => JsonParser::class
            ]
        ],
        'response' => [
            'class' => Response::class,
            'format' => Response::FORMAT_JSON,
        ],
    ],
    'params' => $params,
];
