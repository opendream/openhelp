<?php
$this->breadcrumbs=array(
	'Stock Vehicles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockVehicle', 'url'=>array('index')),
	array('label'=>'Create StockVehicle', 'url'=>array('create')),
	array('label'=>'View StockVehicle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockVehicle', 'url'=>array('admin')),
);
?>

<h1>Update StockVehicle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>