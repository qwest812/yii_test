<?php

namespace app\models;

use Yii;
use yii\base\Model;
class MyForm extends Model{

    public $name;
    public $email;
    public  $file;

    public function rules(){
        return [
          [['name','email'],'required', 'message'=>'некоректный поле для ввода'],
            ['email','email', 'message'=>'некоректный email адресс'],
            [['file'],'file', 'extensions'=>'jpg,png', 'skipOnEmpty'=>false, 'maxFiles'=>3]
        ];
    }

}