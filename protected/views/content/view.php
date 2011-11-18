<?php
$this->menu=array(
	array('label'=>t('List'  ).' '.t('Content'), 'url'=>array('index')),
	array('label'=>t('View'  ).' '.t('Content'), 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>t('Create').' '.t('Content'), 'url'=>array('create')),
	array('label'=>t('Update').' '.t('Content'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>t('Delete').' '.t('Content'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>t('Are you sure you want to delete this item?'))),
	array('label'=>t('Manage Content'), 'url'=>array('admin')),
);
?>


<div id="post" class="drop-shadow curved curved-hz-1">
  <article>
    <header><h1><?php echo CHtml::encode($model->title); ?></h1></header>
    <span class="date-time"><?php echo date('d/m/Y - H:i', strtotime($model->date_created)); ?></span>
    <div class="detail"><?php echo $model->detail; ?></div>
  </article>
</div>
