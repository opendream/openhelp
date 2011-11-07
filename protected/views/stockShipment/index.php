<?php
$this->breadcrumbs=array(
	'Stock Shipments',
);

$this->menu=array(
	array('label'=>'Create StockShipment', 'url'=>array('create')),
	array('label'=>'Manage StockShipment', 'url'=>array('admin')),
);
?>

<h1>Stock Shipments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
