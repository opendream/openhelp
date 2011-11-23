<?php
$this->menu=array(
	array('label'=>'List Webform', 'url'=>array('index')),
	array('label'=>'Create Webform', 'url'=>array('create')),
	//array('label'=>'Update Webform', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Webform', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Webform', 'url'=>array('admin')),
);
?>

<?php require(substr(bu(Yii::app()->params['webforms'][$url]['file']), 1)); ?>
