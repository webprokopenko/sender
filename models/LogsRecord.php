<?php

namespace app\models;

use yii\db\ActiveRecord;


class LogsRecord extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%logs}}';
    }

    public function rules()
    {
        return [
            [['date_response', 'message_response'], 'required'],
            ['id', 'integer'],
            [['date_response'], 'date', 'format' => 'php:Y-m-d'],
            [['message_response'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_response' => 'Date Response',
            'message_response' => 'Message Response',
        ];
    }
}
