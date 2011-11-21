<?php
$this->menu=array(
  array('label'=>t('Create'), 'url'=>array('create?type='.$model->type)),
	array('label'=>t('View'  ), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>t('Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>t('Are you sure you want to delete this item?'))),
);
?>

<h1>Update Content <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>