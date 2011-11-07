<?php
$this->breadcrumbs=array(
	'Stock Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockItem', 'url'=>array('index')),
	array('label'=>'Manage StockItem', 'url'=>array('admin')),
);
?>

<h1>Create StockItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>