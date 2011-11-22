<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'View Request', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Request', 'url'=>array('admin')),
	array('label'=>'Location Request', 'url'=>array('admin?Request[locationLabel]='.$model->location->label)),
);
?>

<h1>Update Request <?php echo $model->id; ?></h1>
<?php echo $this->renderPartial('_dialog', array('model'=>$model)); ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_dialog_item', array('model'=>$model)); ?>
