<?php
$this->breadcrumbs=array(
	'Donators'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donator', 'url'=>array('index')),
	array('label'=>'Create Donator', 'url'=>array('create')),
	array('label'=>'View Donator', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Donator', 'url'=>array('admin')),
);
?>

<h1>Update Donator <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>