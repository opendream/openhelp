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
	  <h3><?php echo Yii::t('locale', 'Location'); ?></h3>
		<?php echo LocationHtml::locationList($model, 'location_id'); ?>
	</div> <!-- end location-list -->

	<div class="row coordinator-list">
			<h3><?php echo Yii::t('locale', 'Coordinators'); ?></h3>
			<table class="coordinators">
				<thead>
					<th>Name</th>
					<th>Position</th>
					<th>Tel</th>
					<th>Detail</th>
					<th>Operation</th>
				</thead>
				<tbody>
	    <?php foreach ($model->coordinators as $key => $value):
		    		$_fullname = $value->attributes['fullname'];
		    		$_position = $value->attributes['position'];
		    		$_tel	 = $value->attributes['tel'];
		    		$_detail = $value->attributes['detail']; ?>
					<tr>
					    <td class="row-item name">
					        <input name="Request[coordinators][name][]" type="text" value="<?php print $_fullname; ?>"> 
					    </td>
					    <td class="row-item position">
					        <input name="Request[coordinators][position][]" type="text" value="<?php print $_position; ?>"> 
					    </td>
					    <td class="row-item tel">
					        <input name="Request[coordinators][tel][]" type="text" value="<?php print $_tel; ?>"> 
					    </td>
					    <td class="row-item detail">
					        <input name="Request[coordinators][detail][]" type="text" value="<?php print $_detail; ?>"> 
					    </td>
		                <td class='row-item operations'
		                    <span class='detete'>
		                        <a href='#' alt='delete' class='coordinator-item-delete delete'>delete</a>
		                    </span>                
		                </td>
					</tr>  		
		<?php endforeach; ?>	    		
				</tbody>
			</table>	
			<?php echo CHtml::link(Yii::t('locale', 'Add Coordinators'), '#', array('onclick'=>'$("#addCoordinators").dialog("open"); return false;', 'class' => 'add-coordinator')); ?>
	    
	</div><!-- Coordination List/ -->

	<div class="row need-list">
		<h3><?php echo Yii::t('locale', 'Needs'); ?></h3>
		<div class="items"> </div>
		<?php echo $form->error($model,'items'); ?>
		<?php echo CHtml::link(Yii::t('locale', 'Add need'), '#', array('onclick'=>'$("#addRItems").dialog("open"); return false;', 'class' => 'add-items')); ?>

	</div> <!-- row need-list /-->
	<div class="need items"> 
		 <?php 
		   foreach ($model->needs as $key => $value):
		     $_amount = $value->attributes['amount']; ?>
			 <div class="item-wrapper"> 
			    <div class="selected_text">
			        <span class="item-name"> ปลากระป๋อง </span>
			        <input type="hidden" name="Request[items][id][]" value="<?php print $_amount ?>">
			        amount: <input type="text" name="Request[items][amount][]" value="<?php print $_amount ?>">
			    </div> <!-- selected text /-->
			    <span class="item-delete delete">
			        <a href="#" alt="delete" class="needs-item-delete delete">delete</a>
			    </span>
			</div>
			<!-- item-wrapper /-->
		<?php endforeach; ?>
	</div> <!-- need items /-->
	
	
	<div class="detail-list">
		<?php echo $form->labelEx($model,'detail'); ?>
	  	<?php
	    	$this->widget('ext.ckeditor.CKEditorWidget',array(
				"model"=>$model,
				"attribute"=>'detail',
				"defaultValue"=>"",
				"config" => array(
				    "height"=>"200px",
				    "width"=>"100%",
				    "toolbar"=>"Basic",
					), // config
	     		) // widget options
	     	); // widget
	    ?>
	    <?php echo $form->error($model,'detail'); ?>
	</div> 	<!-- detail-list / -->
	
	<?php if ($model->isNewRecord == false): ?>

		<div class="row">
			<h3><?php echo Yii::t('locale', 'Status'); ?></h3>
			<?php echo $form->dropDownList($model,'status',LookupManager::requestStatus()); ?>
			<?php echo $form->error($model,'status'); ?>
		</div> <!-- row /-->
	<?php endif; ?>
  
  
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('locale', 'Create') : Yii::t('locale', 'Save')); ?>
	</div> <!-- row buttons /-->
	<?php $this->endWidget(); ?>

</div><!-- form -->
