<?php
$this->breadcrumbs=array(
	'Donated Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DonatedItem', 'url'=>array('index')),
	array('label'=>'Create DonatedItem', 'url'=>array('create')),
	array('label'=>'Update DonatedItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DonatedItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DonatedItem', 'url'=>array('admin')),
);
?>

<h1>View DonatedItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'donator_id',
		'item_id',
		'amount',
		'need_id',
	),
)); ?>
