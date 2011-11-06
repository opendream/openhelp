<?php
$this->breadcrumbs=array(
	'Transported Shipments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TransportedShipment', 'url'=>array('index')),
	array('label'=>'Create TransportedShipment', 'url'=>array('create')),
	array('label'=>'Update TransportedShipment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TransportedShipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransportedShipment', 'url'=>array('admin')),
);
?>

<h1>View TransportedShipment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transporter_id',
		'shipment_id',
		'amount',
		'need_id',
	),
)); ?>
