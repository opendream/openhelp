<?php
$this->breadcrumbs=array(
	'Category Items'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CategoryItem', 'url'=>array('index')),
	array('label'=>'Create CategoryItem', 'url'=>array('create')),
	array('label'=>'View CategoryItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CategoryItem', 'url'=>array('admin')),
);
?>

<h1>Update CategoryItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>