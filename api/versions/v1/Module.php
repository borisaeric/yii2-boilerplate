<?php

namespace api\versions\v1;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'api\versions\v1\controllers';

    public function init()
    {
        parent::init();
    }
}