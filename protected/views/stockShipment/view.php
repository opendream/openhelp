<?php
$this->breadcrumbs=array(
	'Stock Shipments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockShipment', 'url'=>array('index')),
	array('label'=>'Create StockShipment', 'url'=>array('create')),
	array('label'=>'Update StockShipment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockShipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockShipment', 'url'=>array('admin')),
);
?>

<h1>View StockShipment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transporter_id',
		'shipment_id',
		'amount',
	),
)); ?>
