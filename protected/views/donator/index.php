<?php
$this->breadcrumbs=array(
	'Donators',
);

$this->menu=array(
	array('label'=>'Create Donator', 'url'=>array('create')),
	array('label'=>'Manage Donator', 'url'=>array('admin')),
);
?>

<h1>Donators</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
