<div class="webform-content">

<?php
$this->menu=array(
	array('label'=>t('List'), 'url'=>array('index')),
	array('label'=>t('Update'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>t('Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<?php echo str_replace(
  array(
    '<input',
    '<textarea',
    '<select',
  ), 
  array(
    '<input disabled="disabled"',
    '<textarea disabled="disabled"',
    '<select disabled="disabled"',
  ), 
  $this->getWebForm($type, $model, $Data)
); ?>

</div>
