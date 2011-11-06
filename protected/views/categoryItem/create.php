<?php
$this->breadcrumbs=array(
	'Category Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CategoryItem', 'url'=>array('index')),
	array('label'=>'Manage CategoryItem', 'url'=>array('admin')),
);
?>

<h1>Create CategoryItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>