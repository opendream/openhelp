<?php
$this->menu=array(
	array('label'=>t('Create'), 'url'=>array('create?type='.$model->type)),
	array('label'=>t('Update'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>t('Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>t('Are you sure you want to delete this item?'))),
);
?>


<div id="post" class="drop-shadow curved curved-hz-1">
  <article>
    <header><h1><?php echo CHtml::encode($model->title); ?></h1></header>
    <span class="date-time"><?php echo date('d/m/Y - H:i', strtotime($model->date_created)); ?></span>
    <div class="detail"><?php echo $model->detail; ?></div>
  </article>
</div>
