<?php
$this->breadcrumbs=array(
	'Shipments',
);

$this->menu=array(
	array('label'=>'Create Shipment', 'url'=>array('create')),
	array('label'=>'Manage Shipment', 'url'=>array('admin')),
);
?>

<h1>Shipments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
