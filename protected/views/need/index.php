<?php
$this->breadcrumbs=array(
	'Needs',
);

$this->menu=array(
	array('label'=>'Create Need', 'url'=>array('create')),
	array('label'=>'Manage Need', 'url'=>array('admin')),
);
?>

<h1>Needs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
