<?php
$this->breadcrumbs=array(
	'Needs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Need', 'url'=>array('index')),
	array('label'=>'Create Need', 'url'=>array('create')),
	array('label'=>'Update Need', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Need', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Need', 'url'=>array('admin')),
);
?>

<h1>View Need #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_id',
		'amount',
		'detail',
		'request_id',
		'status',
	),
)); ?>
