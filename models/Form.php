<?php
namespace app\models;

use yii\base\Model;

class Form extends Model
{
    public $name;
    public $message;
    public $file;

    public function rules()
    {
        return [
            [['name','message'],'required'],
            ['name','string','max'=>255],
            [['file'],'file', 'extensions'=>'jpg, png'],
            ['message', 'string', 'length' => [10, 255]],
        ];
    }

}