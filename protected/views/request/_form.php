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
		</div><!-- / -->
	    <?php echo CHtml::link('เพิ่มผู้ประสานงาน', '#', array('onclick'=>'$("#addCoordinators").dialog("open"); return false;',)); ?>
		
	</div><!-- / -->
	<div class="row">
		<?php echo $form->textField($model,'location_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'location_id'); ?>
		
		<?php $addresses = Yii::app()->params['location']; ?>
    
    <?php foreach ($addresses as $address): ?>
      <?php
      $children = 'level'.(str_replace('level', '', $address) + 1);
      $locationOptions = array(
				'prompt' => Yii::t('locale', '- Select -'),
        'ajax' => array(
          'type' => 'GET',
          'url' => CController::createUrl("/forms/locationlistbox"),
          'update' => '#Location_'.$children.'_wrapper',
          'data'=>array(
            'level'=>$address,
            'value'=>'js:this.value',
          ),
        ),
        'onchange'=>'js:$("#Location_'.$children.'").focus()',
        
      );
      ?>
      <span id="Location_<?php echo $address ?>_wrapper" class="col">
    		<?php echo $form->labelEx($locationModel,Yii::t('locale',"$address")); ?>

    		<?php if ($address == $addresses[0]): ?>
    		<?php echo $form->dropDownList($locationModel,"$address", $firstLevel, $locationOptions); ?>
    		<?php else: ?>
    		<?php echo $form->dropDownList($locationModel,"$address", array(), $locationOptions); ?>
    		<?php endif; ?>
    		
    		<?php echo $form->error($locationModel,"$address"); ?>
    	</span>
    <?php endforeach ?>

		
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
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->