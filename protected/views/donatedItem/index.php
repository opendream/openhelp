<?php
$this->breadcrumbs=array(
	'Donated Items',
);

$this->menu=array(
	array('label'=>'Create DonatedItem', 'url'=>array('create')),
	array('label'=>'Manage DonatedItem', 'url'=>array('admin')),
);
?>

<h1>Donated Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
