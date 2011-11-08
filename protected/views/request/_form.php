<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
	'enableAjaxValidation' => true,
  'clientOptions'=>array(
    'validateOnSubmit'=>false,
  ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="coordinator-list">
		<div class="coordinator-lable">
			<b>ผู้ประสานงาน</b>
	    <?php
	    	foreach ($model->coordinators as $key => $value) {
	    		$fullname = $value->attributes['fullname'];
	    		echo "Fullname: ";
				echo Chtml::textField('Request[coordinators][]', $fullname, array('size'=>60,'maxlength'=>255));

	    	}
		?>			
		</div><!-- / -->
	    <?php echo CHtml::link(Yii::t('locale', 'Add Coordinators'), '#', array('onclick'=>'$("#addCoordinators").dialog("open"); return false;', 'class' => 'add-coordinator')); ?>

	</div><!-- / -->
	<div class="row">
		<?php echo LocationHtml::locationList($model, 'location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>
  
  <div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->listBox($model,'status',LookupManager::requestStatus()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
    <?php echo CHtml::link(Yii::t('locale', 'Add Items'), '#', array('onclick'=>'$("#addRItems").dialog("open"); return false;', 'class' => 'add-items')); ?>

 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->