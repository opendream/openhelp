<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transporter_id')); ?>:</b>
	<?php echo CHtml::encode($data->transporter_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('need_id')); ?>:</b>
	<?php echo CHtml::encode($data->need_id); ?>
	<br />


</div>