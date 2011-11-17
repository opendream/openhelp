<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level0')); ?>:</b>
	<?php echo CHtml::encode($data->level0); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level1')); ?>:</b>
	<?php echo CHtml::encode($data->level1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level2')); ?>:</b>
	<?php echo CHtml::encode($data->level2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level3')); ?>:</b>
	<?php echo CHtml::encode($data->level3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level4')); ?>:</b>
	<?php echo CHtml::encode($data->level4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level5')); ?>:</b>
	<?php echo CHtml::encode($data->level5); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lng')); ?>:</b>
	<?php echo CHtml::encode($data->lng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disabled')); ?>:</b>
	<?php echo CHtml::encode($data->disabled); ?>
	<br />

	*/ ?>

</div>