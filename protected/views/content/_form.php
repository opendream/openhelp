<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<?php echo $form->hiddenField($model,'type',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->hiddenField($model,'date_created'); ?>
		<?php echo $form->hiddenField($model,'last_updated'); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php $this->widget('ext.ckeditor.CKEditorWidget', array(
		  "model"=>$model, 
      "attribute"=>'detail',
      "defaultValue"=>$model->getAttribute('detail'),
      "config" => array(
				"toolbar"=>array(
				  array('Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', 'Table', 'Image'),
				),
        "filebrowserBrowseUrl" => Yii::app()->baseUrl.'/filemanager/browser/default/browser.html?Connector='.Yii::app()->baseUrl.'/filemanager/connectors/php/connector.php',
        "filebrowserImageBrowseUrl" =>  Yii::app()->baseUrl.'/filemanager/browser/default/browser.html?Type=Image&Connector='.Yii::app()->baseUrl.'/filemanager/connectors/php/connector.php',
      )
		)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->