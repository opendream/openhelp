<?php
$this->breadcrumbs=array(
	'Donators'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Donator', 'url'=>array('index')),
	array('label'=>'Create Donator', 'url'=>array('create')),
	array('label'=>'Update Donator', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Donator', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donator', 'url'=>array('admin')),
);
?>

<h1>View Donator #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fullname',
		'tel',
		'location_id',
		'detail',
	),
)); ?>
