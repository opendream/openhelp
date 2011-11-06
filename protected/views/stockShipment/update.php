<?php
$this->breadcrumbs=array(
	'Stock Shipments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockShipment', 'url'=>array('index')),
	array('label'=>'Create StockShipment', 'url'=>array('create')),
	array('label'=>'View StockShipment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockShipment', 'url'=>array('admin')),
);
?>

<h1>Update StockShipment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>