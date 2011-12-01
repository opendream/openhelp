<?php
$this->menu=array(
	array('label'=>t('Create'), 'url'=>array('create?type='.$type)),
);
?>
<div class="webform-content drop-shadow curved curved-hz-1">

<h1><?php echo $this->pageTitle; ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>