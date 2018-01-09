<?php

namespace app\models;

use yii\db\ActiveRecord;

class Personal extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%member}}';
    }

}


