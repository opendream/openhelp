<?php
$this->breadcrumbs=array(
	'Shipments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Shipment', 'url'=>array('index')),
	array('label'=>'Create Shipment', 'url'=>array('create')),
	array('label'=>'Update Shipment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Shipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Shipment', 'url'=>array('admin')),
);
?>

<h1>View Shipment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transporter_id',
		'vehicle_id',
		'amount',
		'need_id',
	),
)); ?>
