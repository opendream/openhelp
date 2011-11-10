<div class="view request-list">

	<strong class="label"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</strong>
	<div class="detail"><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></div>

	<strong class="label"><?php echo CHtml::encode($data->getAttributeLabel('date_created')); ?>:</strong>
	<div class="detail"><?php echo CHtml::encode($data->date_created); ?></div>

	<strong class="label"><?php echo CHtml::encode($data->getAttributeLabel('last_updated')); ?>:</strong>
	<div class="detail"><?php echo CHtml::encode($data->last_updated); ?></div>

	<strong class="label"><?php echo CHtml::encode($data->getAttributeLabel('location_id')); ?>:</strong>
	<div class="detail"><?php echo LocationHtml::locationView($data->location_id); ?></div>

</div>