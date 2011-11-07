<?php
$this->breadcrumbs=array(
	'Transported Shipments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransportedShipment', 'url'=>array('index')),
	array('label'=>'Manage TransportedShipment', 'url'=>array('admin')),
);
?>

<h1>Create TransportedShipment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>