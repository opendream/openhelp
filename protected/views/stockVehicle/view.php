<?php
$this->breadcrumbs=array(
	'Stock Vehicles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockVehicle', 'url'=>array('index')),
	array('label'=>'Create StockVehicle', 'url'=>array('create')),
	array('label'=>'Update StockVehicle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockVehicle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockVehicle', 'url'=>array('admin')),
);
?>

<h1>View StockVehicle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transporter_id',
		'vehicle_id',
		'amount',
	),
)); ?>
