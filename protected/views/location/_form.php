<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'location-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'level0'); ?>
		<?php echo $form->textField($model,'level0',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'level0'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level1'); ?>
		<?php echo $form->textField($model,'level1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'level1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level2'); ?>
		<?php echo $form->textField($model,'level2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'level2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level3'); ?>
		<?php echo $form->textField($model,'level3',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'level3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level4'); ?>
		<?php echo $form->textField($model,'level4',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'level4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level5'); ?>
		<?php echo $form->textField($model,'level5',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'level5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lng'); ?>
		<?php echo $form->textField($model,'lng',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lng'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->