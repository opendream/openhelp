<?php
$this->breadcrumbs=array(
	'Transporters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Transporter', 'url'=>array('index')),
	array('label'=>'Manage Transporter', 'url'=>array('admin')),
);
?>

<h1>Create Transporter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>