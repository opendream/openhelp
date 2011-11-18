<?php
$this->breadcrumbs=array(
	'Contents',
);

$this->menu=array(
	array('label'=>'Create Content', 'url'=>array('create')),
	array('label'=>'Manage Content', 'url'=>array('admin')),
);
?>

<div id="content-item" class="drop-shadow curved curved-hz-1">
  <header><h1><?php echo $contentConf['name']; ?></h1></header>
  <?php echo $contentConf['detail']; ?>
</div>

<div id="content-item-list" class="drop-shadow curved curved-hz-1">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>
