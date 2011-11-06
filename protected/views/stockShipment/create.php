<?php
$this->breadcrumbs=array(
	'Stock Shipments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockShipment', 'url'=>array('index')),
	array('label'=>'Manage StockShipment', 'url'=>array('admin')),
);
?>

<h1>Create StockShipment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>