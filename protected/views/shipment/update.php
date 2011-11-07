<?php
$this->breadcrumbs=array(
	'Shipments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shipment', 'url'=>array('index')),
	array('label'=>'Create Shipment', 'url'=>array('create')),
	array('label'=>'View Shipment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Shipment', 'url'=>array('admin')),
);
?>

<h1>Update Shipment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>