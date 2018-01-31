<?php
namespace app\models;
use Yii;
use yii\base\Model;

class MyForm2 extends Model
{

    public $name;
    public $email;
    public  $file;


    public function rules(){

        return [
           'all'=> [['name','email'],'required','message'=>'empty'],
            'email_rul'=>[
                ['email'],
                'email',
                'message'=>'fff'],
            'name_rul'=>[
                ['name'],
                'string','max' => 10,
                'message'=>'max10',
                'tooLong' => 'Too Long,
                 max 10',
            ],
            'name_min'=>[['name'], 'string', 'min'=>3, 'message'=>'min3', 'tooShort' => 'Too Short, min 3', ],
            'file_rul'=>[['file'], 'file', 'extensions'=>'jpg,png,txt,doc', 'wrongExtension'=>'выберите подходящий тип фпйла'],
        ];
    }

}