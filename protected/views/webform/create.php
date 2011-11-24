<?php
$this->menu=array(
	array('label'=>'List Webform', 'url'=>array('index')),
	array('label'=>'Manage Webform', 'url'=>array('admin')),
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->hiddenField($model,'type'); ?>
<?php echo $form->hiddenField($model,'last_updated'); ?>

<?php
$output = $this->getWebForm($type, $model, $Data);
$output = str_replace(array(
    '<input',
    '<textarea',
    '<select',
  ), array(
    '<input disabled="disabled"',
    '<textarea disabled="disabled"',
    '<select disabled="disabled"',
  ), $output);

echo $output;
?>

<?php $this->endWidget(); ?>