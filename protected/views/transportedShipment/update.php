<?php
$this->breadcrumbs=array(
	'Transported Shipments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransportedShipment', 'url'=>array('index')),
	array('label'=>'Create TransportedShipment', 'url'=>array('create')),
	array('label'=>'View TransportedShipment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TransportedShipment', 'url'=>array('admin')),
);
?>

<h1>Update TransportedShipment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>