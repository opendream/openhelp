<?php
$this->breadcrumbs=array(
	'Donators'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donator', 'url'=>array('index')),
	array('label'=>'Manage Donator', 'url'=>array('admin')),
);
?>

<h1>Create Donator</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>