<?php
$this->breadcrumbs=array(
	'Category Items',
);

$this->menu=array(
	array('label'=>'Create CategoryItem', 'url'=>array('create')),
	array('label'=>'Manage CategoryItem', 'url'=>array('admin')),
);
?>

<h1>Category Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
