<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'request-form',
	'enableAjaxValidation'=>false,
	'enableAjaxValidation' => true,
  'clientOptions'=>array(
	'validateOnSubmit'=>false,
  ),
)); ?>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row location-list">
	  <h3><?php echo Yii::t('locale', 'Location'); ?></h3>
		<?php echo LocationHtml::locationList($model, 'location_id'); ?>
		
		
  	<?php $extraDouble = Yii::app()->params['request']['extra']['double']; ?>

  	<?php if ($extraDouble): ?>
  	<div class="extra-double">
  	    <table>
  	      <tbody>
      	  <?php foreach ($extraDouble as $key => $row): ?>
          <tr>
            <td id="extra-double-label-<?php echo $key; ?>" class="extra-double-label"><?php echo $row['label']; ?></td>
            <td class="extra-double-input">
              <span id="extra-double-prefic-<?php echo $key; ?>" class="extra-double-prefix"><?php echo $row['prefix']; ?></span>
              <span id="extra-double-value-<?php echo $key; ?>" class="extra-double-value">
                <?php echo $form->textField($model,'extra_double'.$key); ?>
              </span>
              <span id="extra-double-suffix-<?php echo $key; ?>" class="extra-double-suffix"><?php echo $row['suffix']; ?></span>
              <?php echo $form->error($model,'extra_double'.$key); ?>
            </td>
          </tr>
      	  <?php endforeach ?>
      	  </tbody>
    	  </table>
  	</div>
  	<?php endif ?>
  	
  	<div class="date-created row">
			<h3><?php echo Yii::t('locale', 'Date Created'); ?></h3>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
          //'name'=>'publishDate',
          'model' => $model,
          'attribute' => 'date_created',
          'value'=>$model->date_created,
            // additional javascript options for the date picker plugin
            'options'=>array(
              'showAnim'=>'fold',
              'showButtonPanel'=>true,
              //'autoSize'=>true,
              'dateFormat'=>'yy-mm-dd',
              'defaultDate'=>$model->date_created,
             ),
      )); ?>
		</div> <!-- row /-->
		
	</div> <!-- end location-list -->

	<div class="row coordinator-list">
			<h3><?php echo Yii::t('locale', 'Coordinators'); ?></h3>
			<table class="coordinators">
				<thead>
					<th><?php echo Yii::t('locale', 'Full name', array()); ?></th>
					<th><?php echo Yii::t('locale', 'Position', array()); ?></th>
					<th><?php echo Yii::t('locale', 'Tel.', array()); ?></th>
					<th></th>
				</thead>
				<tbody>
		<?php foreach ($model->coordinators as $key => $value):
					$_fullname = $value->attributes['fullname'];
					$_position = $value->attributes['position'];
					$_tel	 = $value->attributes['tel'];?>
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
						<td class='row-item operations'
							<span class='delete'>
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
		<table class="needs">
			<thead>
				<th><?php echo Yii::t('locale', 'Name', array()); ?></th>
				<th><?php echo Yii::t('locale', 'Amount', array()); ?></th>
				<th><?php echo Yii::t('locale', 'Detail', array()); ?></th>
				<th></th>
			</thead>
			<tbody>
			 <?php 
				foreach ($model->needs as $need):
					$_id = $need->item_id;
					$_amount = $need->amount;
					$_item_name = LookupManager::getItemName($need->item_id);
					$_detail = $need->detail;
			 ?>
					<tr>
						<td class="row-item item-name">
							<span class='item-name'><?php print $_item_name; ?></span>
							<input type="hidden" name="Request[items][id][]" value="<?php print $_id ?>">
						</td>
						<td class="row-item detail">
							<input type="text" name="Request[items][amount][]" value="<?php print $_amount ?>">
						</td>
						<td>
							<input type="text" name="Request[items][detail][]" value="<?php print $_detail; ?>">
						</td>
						<td>
							<span class="item-delete delete">
								<a href="#" alt="delete" class="needs-item-delete delete">delete</a>
							</span>
						</td>
					</tr>
			<?php endforeach; ?>
		</tbody>
		</table>		
		<?php echo CHtml::link(Yii::t('locale', 'Add need'), '#', array('onclick'=>'$("#addRItems").dialog("open"); return false;', 'class' => 'add-items')); ?>

	</div> <!-- row need-list /-->

	
	<?php $extraText = Yii::app()->params['request']['extra']['text']; ?>
	
	<?php if ($extraText): ?>
	  <?php foreach ($extraText as $key => $row): ?>
	  <div id="extra-text-<?php echo $key; ?>" class="extra-text-<?php echo $key; ?>-list">
  	  <h3><?php echo Yii::t('locale', $row['label']); ?></h3>
  	  <?php
  	    $options =  (!isset($row['options']) || !$row['options'])? array(): $row['options'];
  	    $editor = (!isset($row['editor']) || !$row['editor'])? 'textField': $row['editor'];
  	  ?>
  	  <?php if ($editor == 'CKEditorWidget' || $editor == 'ext.ckeditor.CKEditorWidget'): ?>	    
  	    <?php
  	      $dummy = $options;
  	      $options = array(
  	        "model"=>$model, 
  	        "attribute"=>'extra_text'.$key,
  	        "defaultValue"=>$model->getAttribute('extra_text'.$key),

    			);
    			$config = array(
  					"height"=>"200px",
  					"width"=>"100%",
  					"toolbar"=>array(
  					  array('Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', 'Image'),
  					),
            
            "filebrowserBrowseUrl" => '/filemanager/browser/default/browser.html?Connector=/filemanager/connectors/php/connector.php',
            "filebrowserImageBrowseUrl" =>  '/filemanager/browser/default/browser.html?Type=Image&     Connector=/filemanager/connectors/php/connector.php',
  				);
    			$options['config'] = $dummy;
    			$options['config'] += $config;
    		?>
        <div class="ckeditor-wrapper">
          <?php $this->widget('ext.ckeditor.CKEditorWidget', $options); ?>
        </div>
    	<?php else: ?>
    	  <?php echo $form->{$editor}($model,'extra_text'.$key, $options); ?>
    	  <?php echo $form->error($model,'extra_text'.$key); ?>
  	  <?php endif ?>
    </div>
	  <?php endforeach ?>
	<?php endif ?>
	
	<?php echo $form->hiddenField($model,'detail'); ?>
	
	<?php if ($model->isNewRecord == false): ?>

		<div class="status row">
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

<script type="text/javascript">
</script>
