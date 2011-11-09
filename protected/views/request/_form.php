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
  	<?php
    $this->widget('ext.ckeditor.CKEditorWidget',array(
      "model"=>$model,
      "attribute"=>'detail',
      "defaultValue"=>"Test Text",
      "config" => array(
          "height"=>"200px",
          "width"=>"100%",
          "toolbar"=>"Basic",
          ),
      ) );
    ?>
    <?php echo $form->error($model,'detail'); ?>
	</div>
  
  <?php if ($model->isNewRecord == false): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->listBox($model,'status',LookupManager::requestStatus()); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<?php endif; ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Needs'); ?>
		<div class="items"> </div>
		<?php echo $form->error($model,'items'); ?>
	</div>

    <?php echo CHtml::link(Yii::t('locale', 'Add need'), '#', array('onclick'=>'$("#addRItems").dialog("open"); return false;', 'class' => 'add-items')); ?>

 
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('locale', 'Create') : Yii::t('locale', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->