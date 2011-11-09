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
	    	foreach ($model->coordinators as $key => $value): 
	    		$_fullname = $value->attributes['fullname'];
	    		$_position = $value->attributes['position'];
	    		$_tel	 = $value->attributes['tel'];
	    		$_detail = $value->attributes['detail'];
	    	?> 
	    		<div class="coordinator-item">
				    <div class="row-item">
				        <span class="coordinator-item name">name: </span>
				        <input name="Request[coordinators][name][]" type="text" value="<?php print $_fullname; ?>"> 
				    </div>
				    <div class="row-item">
				        <span class="coordinator-item position">position: </span>
				        <input name="Request[coordinators][position][]" type="text" value="<?php print $_position	; ?>"> 
				    </div>
				    <div class="row-item">
				        <span class="coordinator-item tel">tel: </span>
				        <input name="Request[coordinators][tel][]" type="text" value="<?php print $_tel; ?>"> 
				    </div>
				    <div class="row-item">
				        <span class="coordinator-item detail">Detail: </span>
				        <input name="Request[coordinators][detail][]" type="text" value="<?php print $_detail; ?>"> 
				    </div>
				    <span class="detete">
				        <a href="#" alt="delete" class="coordinator-item-delete delete">delete</a>
				    </span>
				</div> 	    		
			<?php endforeach; ?>	    		
	</div><!-- Coordination List/ -->
	    <?php echo CHtml::link(Yii::t('locale', 'Add Coordinators'), '#', array('onclick'=>'$("#addCoordinators").dialog("open"); return false;', 'class' => 'add-coordinator')); ?>
	</div><!-- / -->

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

	<div class="row need-list">
		<?php echo $form->labelEx($model,'Needs'); ?>
		<h3>Need</h3>
		<div class="items"> </div>
		<?php echo $form->error($model,'items'); ?>
    <?php echo CHtml::link(Yii::t('locale', 'Add need'), '#', array('onclick'=>'$("#addRItems").dialog("open"); return false;', 'class' => 'add-items')); ?>

	</div> <!-- MAY BE HERE. end need-list -->
	
 
	<div class="need items"> 
		 <?php 
		   foreach ($model->needs as $key => $value):
		     $_amount = $value->attributes['amount'];
		  ?>
			 <div class="item-wrapper"> 
			    <div class="selected_text">
			        <span class="item-name"> ปลากระป๋อง </span>
			        <input type="hidden" name="Request[items][id][]" value="<?php print $_amount ?>">
			        amount: <input type="text" name="Request[items][amount][]" value="<?php print $_amount ?>">
			    </div> 
			    <span class="item-delete delete">
			        <a href="#" alt="delete" class="needs-item-delete delete">delete</a>
			    </span>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('locale', 'Create') : Yii::t('locale', 'Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
