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
	
	<div class="row location-list">
	  <h3>Select Location</h3>
		<?php echo LocationHtml::locationList($model, 'location_id'); ?>
		
		<div class="detail-list">
			<?php echo $form->labelEx($model,'detail'); ?>
			<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'detail'); ?>
	  </div>
		
	</div> <!-- end location-list -->

	<div class="row coordinator-list">
		<div class="coordinator-lable">
			<h3>Coordinators</h3>
	    <?php
	    	foreach ($model->coordinators as $key => $value) {
	    		$fullname = $value->attributes['fullname'];
	    		echo "Fullname: ";
				echo Chtml::textField('Request[coordinators][]', $fullname, array('size'=>60,'maxlength'=>255));

	    	}
		?>			
		</div><!-- /coordinator-lable -->
		<table class="coordinators"><thead><th>Column1</th><th>Column2</th></thead><tbody></tbody></table>
	    <?php echo CHtml::link(Yii::t('locale', 'Add Coordinators'), '#', array('onclick'=>'$("#addCoordinators").dialog("open"); return false;', 'class' => 'add-coordinator')); ?>
	</div><!-- /coordinator-list -->
  
  	<?php if ($model->isNewRecord == false): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->listBox($model,'status',LookupManager::requestStatus()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<?php endif; ?>

	<div class="row need-list">
		<?php echo $form->labelEx($model,'Needs'); ?>
		<h3>Need</h3>
		<div class="items"> </div>
		<?php echo $form->error($model,'items'); ?>
    <?php echo CHtml::link(Yii::t('locale', 'Add need'), '#', array('onclick'=>'$("#addRItems").dialog("open"); return false;', 'class' => 'add-items')); ?>
	</div> <!-- end need-list -->
	
 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('locale', 'Create') : Yii::t('locale', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->