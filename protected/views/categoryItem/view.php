<?php
$this->breadcrumbs=array(
	'Category Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CategoryItem', 'url'=>array('index')),
	array('label'=>'Create CategoryItem', 'url'=>array('create')),
	array('label'=>'Update CategoryItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CategoryItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CategoryItem', 'url'=>array('admin')),
);
?>

<h1>View CategoryItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'detail',
	),
)); ?>
