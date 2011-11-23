<?php
$this->breadcrumbs=array(
	'Webforms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Webform', 'url'=>array('index')),
	array('label'=>'Manage Webform', 'url'=>array('admin')),
);
?>

<h1>Create Webform</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>