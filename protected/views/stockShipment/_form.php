<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stock-shipment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'transporter_id'); ?>
		<?php echo $form->textField($model,'transporter_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'transporter_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipment_id'); ?>
		<?php echo $form->textField($model,'shipment_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'shipment_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amount'); ?>
		<?php echo $form->textField($model,'amount'); ?>
		<?php echo $form->error($model,'amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->