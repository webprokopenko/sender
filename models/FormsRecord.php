<?php

namespace app\models;

use yii\db\ActiveRecord;


class FormsRecord extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%forms}}';
    }

    public function rules()
    {
        return [
            [['date', 'name', 'message'], 'required'],
            ['id', 'integer'],
            [['date'], 'date', 'format' => 'php:Y-m-d'],
            [['message','name','file'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date Create',
            'name' => 'Name',
            'message' => 'Message',
        ];
    }
}
