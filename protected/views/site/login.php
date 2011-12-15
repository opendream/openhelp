<div class="webform-content">
  
  <h1><?php echo t('Login'); ?></h1>

  <?php $form=$this->beginWidget('CActiveForm', array(
  	'id'=>'login-form',
  	'enableClientValidation'=>true,
  	'clientOptions'=>array(
  		'validateOnSubmit'=>true,
  	),
  )); ?>

  	<div class="row">
  		<?php echo t('Username'); ?>
  		<?php echo $form->textField($model,'username'); ?>
  		<?php echo $form->error($model,'username'); ?>
  	</div>

  	<div class="row">
  		<?php echo t('Password'); ?>
  		<?php echo $form->passwordField($model,'password'); ?>
  		<?php echo $form->error($model,'password'); ?>
  	</div>

  	<div class="row rememberMe">
  		<?php echo $form->checkBox($model,'rememberMe'); ?>
  		<?php echo t('Remember me next time'); ?>
  		<?php echo $form->error($model,'rememberMe'); ?>
  	</div>

  	<div class="row buttons">
  		<?php echo CHtml::submitButton(t('Login')); ?>
  	</div>

  <?php $this->endWidget(); ?>
</div>