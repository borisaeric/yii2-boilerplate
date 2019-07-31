<?php

namespace api\versions\v1\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
    public static function tableName()
    {
        return 'country';
    }

    public static function primaryKey()
    {
        return ['code'];
    }

    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required']
        ];
    }
}