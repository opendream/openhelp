<?php
$this->menu=array(
	array('label'=>'List Webform', 'url'=>array('index')),
	array('label'=>'Create Webform', 'url'=>array('create')),
	array('label'=>'View Webform', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Webform', 'url'=>array('admin')),
);
?>

<h1>Update Webform <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>