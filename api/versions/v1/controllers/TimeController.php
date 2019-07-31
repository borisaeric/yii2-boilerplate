<?php

namespace api\versions\v1\controllers;

use api\components\responses\SuccessResponse;
use DateTime;
use yii\rest\Controller;

class TimeController extends Controller
{
    public function actionIndex()
    {
        $now = new DateTime();

        $data = [
            'iso' => $now->format('c'),
            'timestamp' => $now->format('U'),
        ];

        return (new SuccessResponse($data))->asArray();
    }
}
