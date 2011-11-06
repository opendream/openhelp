<?php
$this->breadcrumbs=array(
	'Coordinators'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Coordinator', 'url'=>array('index')),
	array('label'=>'Create Coordinator', 'url'=>array('create')),
	array('label'=>'Update Coordinator', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Coordinator', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coordinator', 'url'=>array('admin')),
);
?>

<h1>View Coordinator #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fullname',
		'position',
		'tel',
		'detail',
	),
)); ?>
