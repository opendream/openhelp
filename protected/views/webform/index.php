<?php
$this->breadcrumbs=array(
	'Webforms',
);

$this->menu=array(
	array('label'=>'Create Webform', 'url'=>array('create')),
	array('label'=>'Manage Webform', 'url'=>array('admin')),
);
?>

<h1>Webforms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
