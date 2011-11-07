<?php
$this->breadcrumbs=array(
	'Transporters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transporter', 'url'=>array('index')),
	array('label'=>'Create Transporter', 'url'=>array('create')),
	array('label'=>'View Transporter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Transporter', 'url'=>array('admin')),
);
?>

<h1>Update Transporter <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>