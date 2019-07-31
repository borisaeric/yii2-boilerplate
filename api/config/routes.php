<?php

use yii\web\UrlRule as WebUrlRule;
use yii\rest\UrlRule as RestUrlRule;

return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => 'v1/time',
        'pluralize' => false,
        'patterns' => [
            'GET,HEAD' => 'index',
            '' => 'options',
        ]
    ],
];
