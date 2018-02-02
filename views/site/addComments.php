<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$form=ActiveForm::begin([
        'method'=>'post'
    ]);
echo $form->field($model,'name')->label('Your Name');
echo $form->field($model,'comments')->textarea(['rows'=>6])->label('Comments');
echo $form->field($model,'checkBox')->checkbox(['value'=>'fff','checked ' => '']);
echo $form->field($model, 'checkBoxList[]')->checkboxList(['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C',]);
echo Html::submitButton('Add');



ActiveForm::end();?>