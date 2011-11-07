<?php
$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Vehicle', 'url'=>array('index')),
	array('label'=>'Create Vehicle', 'url'=>array('create')),
	array('label'=>'Update Vehicle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vehicle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

<h1>View Vehicle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
