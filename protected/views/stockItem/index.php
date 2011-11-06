<?php
$this->breadcrumbs=array(
	'Stock Items',
);

$this->menu=array(
	array('label'=>'Create StockItem', 'url'=>array('create')),
	array('label'=>'Manage StockItem', 'url'=>array('admin')),
);
?>

<h1>Stock Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
