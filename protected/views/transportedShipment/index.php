<?php
$this->breadcrumbs=array(
	'Transported Shipments',
);

$this->menu=array(
	array('label'=>'Create TransportedShipment', 'url'=>array('create')),
	array('label'=>'Manage TransportedShipment', 'url'=>array('admin')),
);
?>

<h1>Transported Shipments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
