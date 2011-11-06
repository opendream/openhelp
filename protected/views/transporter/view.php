<?php
$this->breadcrumbs=array(
	'Transporters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Transporter', 'url'=>array('index')),
	array('label'=>'Create Transporter', 'url'=>array('create')),
	array('label'=>'Update Transporter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Transporter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transporter', 'url'=>array('admin')),
);
?>

<h1>View Transporter #<?php echo $model->id; ?></h1>

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
