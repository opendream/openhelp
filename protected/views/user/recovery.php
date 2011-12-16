<div class="webform-content webform-user">
  
  <h1><?php echo t('Recovery'); ?></h1>

  <?php $form=$this->beginWidget('CActiveForm', array(
  	'id'=>'user-form',
  	'enableAjaxValidation'=>false,
  )); ?>

  	<div class="row text">
  		<?php echo t('Username'); ?>
  		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
  		<?php echo $form->error($model,'username'); ?>
  	</div>

  	<div class="row text">
  		<?php echo t('Password'); ?>
  		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
  		<?php echo $form->error($model,'password'); ?>
  	</div>

  	<div class="row buttons">
  		<?php echo CHtml::submitButton(t('Request new password')); ?>
  	</div>

  <?php $this->endWidget(); ?>

</div><!-- form -->
