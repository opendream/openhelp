<div class="webform-content webform-user">
  
  <h1><?php echo t('Registration'); ?></h1>

  <?php $form=$this->beginWidget('CActiveForm', array(
  	'id'=>'user-form',
  	'enableAjaxValidation'=>true,
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

  	<div class="row text">
  		<?php echo t('Email'); ?>
  		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
  		<?php echo $form->error($model,'email'); ?>
  	</div>
	
  	<?php if ($showType): ?>
  	<div class="row dropdown">
  		<?php echo t('Type'); ?>
  		<?php echo $form->dropDownList($model,'type',$types); ?>
  		<?php echo $form->error($model,'type'); ?>
  	</div>
  	<?php else: ?>
  	<?php echo CHtml::hiddenField('User[type]', $_GET['type']); ?>
  	<?php endif ?>


  	<div class="row buttons">
  		<?php echo CHtml::submitButton(t('Register')); ?>
  	</div>

  <?php $this->endWidget(); ?>

</div><!-- form -->
