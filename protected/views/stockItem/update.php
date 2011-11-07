<?php
$this->breadcrumbs=array(
	'Stock Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockItem', 'url'=>array('index')),
	array('label'=>'Create StockItem', 'url'=>array('create')),
	array('label'=>'View StockItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockItem', 'url'=>array('admin')),
);
?>

<h1>Update StockItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>