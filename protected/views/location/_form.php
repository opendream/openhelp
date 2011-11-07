<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'location-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <?php $addresses = Yii::app()->params['location'];?>
    
    <?php foreach ($addresses as $address): ?>
        <div class="row">
    		<?php echo $form->labelEx($model,Yii::t('locale',"$address")); ?>
    		<?php echo $form->textField($model,"$address",array('size'=>60,'maxlength'=>255)); ?>
    		<?php echo $form->error($model,"$address"); ?>
    	</div>
    <?php endforeach ?>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('locale', 'lat')); ?>
		<?php echo $form->textField($model,'lat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,Yii::t('locale', 'lng')); ?>
		<?php echo $form->textField($model,'lng',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lng'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->