<?php
$this->breadcrumbs=array(
	'Coordinators'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coordinator', 'url'=>array('index')),
	array('label'=>'Create Coordinator', 'url'=>array('create')),
	array('label'=>'View Coordinator', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Coordinator', 'url'=>array('admin')),
);
?>

<h1>Update Coordinator <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>