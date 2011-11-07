<?php
$this->breadcrumbs=array(
	'Stock Vehicles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockVehicle', 'url'=>array('index')),
	array('label'=>'Manage StockVehicle', 'url'=>array('admin')),
);
?>

<h1>Create StockVehicle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>