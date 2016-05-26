<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
?>
<?$f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
<?=$f->errorSummary($form);?>
<?=$f->field($form, 'name')?>
<?=$f->field($form, 'message')?>
<?=$f->field($form, 'file')->fileInput()?>
<?=Html::submitButton('Send')?>
<?php ActiveForm::end();?>