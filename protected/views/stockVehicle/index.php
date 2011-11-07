<?php
$this->breadcrumbs=array(
	'Stock Vehicles',
);

$this->menu=array(
	array('label'=>'Create StockVehicle', 'url'=>array('create')),
	array('label'=>'Manage StockVehicle', 'url'=>array('admin')),
);
?>

<h1>Stock Vehicles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
