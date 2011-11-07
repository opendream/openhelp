<?php
$this->breadcrumbs=array(
	'Donated Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DonatedItem', 'url'=>array('index')),
	array('label'=>'Create DonatedItem', 'url'=>array('create')),
	array('label'=>'View DonatedItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DonatedItem', 'url'=>array('admin')),
);
?>

<h1>Update DonatedItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>