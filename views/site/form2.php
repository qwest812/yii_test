<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>



<?php

echo $email.'ffff'.$name;

$f= ActiveForm::begin([
    'method'=>'post',
    'options'=>['enctype'=>'multipart/form-data'],

]);
?>

<?//=$f->field($form,'name')->label('Your name')?>
<?//=$f->field($form, 'email')->label('Your email')?>
<?//=$f->field($form, 'file')->fileInput()?>

<?//= Html::submitButton('Send',['class' => 'btn btn-primary']);?>
<?php ActiveForm::end()?>
