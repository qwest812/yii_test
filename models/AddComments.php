<?php
/**
 * Created by PhpStorm.
 * User: PC-1
 * Date: 02.02.2018
 * Time: 12:22
 */

namespace app\models;

use Yii;
use yii\base\Model;

class AddComments extends Model
{


    public $name='';
    public $comments='';
    public $checkBox='';
    public $checkBoxList=array();

    public function rules(){
        return [
//            'all'=>[['name','text','checkBox'],'required', 'massage'=>'no empty']
        ];
    }
    public function attributeLabels()
        {
            return [
                'name' => 'Название',
                'comments'            => 'Комментарий',
                'checkBox'            => '',
                'checkBoxList'            => 'Чекбокс список',
            ];
        }

}