<?php
$this->breadcrumbs=array(
	'Transporters',
);

$this->menu=array(
	array('label'=>'Create Transporter', 'url'=>array('create')),
	array('label'=>'Manage Transporter', 'url'=>array('admin')),
);
?>

<h1>Transporters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
