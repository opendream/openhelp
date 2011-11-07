<?php
$this->breadcrumbs=array(
	'Stock Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockItem', 'url'=>array('index')),
	array('label'=>'Create StockItem', 'url'=>array('create')),
	array('label'=>'Update StockItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockItem', 'url'=>array('admin')),
);
?>

<h1>View StockItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'donator_id',
		'item_id',
		'amount',
	),
)); ?>
