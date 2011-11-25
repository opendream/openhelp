<div class="view">
  <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
  <?php echo LocationHtml::locationView($data->location_id, array(
    'style' => 'endLevelLink',
    'link' => CController::createUrl("/webform/view/".$data->id),
  )); ?>

	<b><?php echo t(CHtml::encode($data->getAttributeLabel('date_created'))); ?>:</b>
	<?php echo CHtml::encode($data->date_created); ?>
	<br />
	
	<b><?php echo t('Author'); ?>:</b>
	<?php echo CHtml::encode($data->user->username); ?>
	<br />


</div>