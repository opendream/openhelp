<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'type',array('size'=>60,'maxlength'=>60)); ?>
	<?php echo $form->hiddenField($model,'last_updated'); ?>


	<div class="row">
		<?php echo t('Title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
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
	
	
	<div class="row">
	  <?php echo t('Date Created'); ?>
	  <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        //'name'=>'publishDate',
        'model' => $model,
        'attribute' => 'date_created',
        'value'=>$model->date_created,
          // additional javascript options for the date picker plugin
          'options'=>array(
            'dateFormat'=>'yy-mm-dd',
            'defaultDate'=>$model->date_created,
           ),
    )); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->