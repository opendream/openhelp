<?php
$this->breadcrumbs=array(
	'Donated Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DonatedItem', 'url'=>array('index')),
	array('label'=>'Manage DonatedItem', 'url'=>array('admin')),
);
?>

<h1>Create DonatedItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>