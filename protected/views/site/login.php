<?php
$model=new LoginForm;

// if it is ajax validation request
if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
{
	echo CActiveForm::validate($model);
	Yii::app()->end();
}

// collect user input data
if(isset($_POST['LoginForm']))
{
	$model->attributes=$_POST['LoginForm'];
	// validate user input and redirect to the previous page if valid
	if($model->validate() && $model->login())
		$this->redirect(Yii::app()->user->returnUrl);
}

$type = isset($_GET['type'])? $_GET['type']: '';

?>
<div class="webform-content webform-user">
  
  <h1><?php echo t('Login'); ?></h1>

  <?php $form=$this->beginWidget('CActiveForm', array(
  	'id'=>'login-form',
  	'action'=>bu('site/login'.($type? '?type='.$type: '')),
  	'enableClientValidation'=>true,
  	'clientOptions'=>array(
  		'validateOnSubmit'=>true,
  	),
  )); ?>

  	<div class="row text">
  		<?php echo t('Username'); ?>
  		<?php echo $form->textField($model,'username'); ?>
  		<?php echo $form->error($model,'username'); ?>
  	</div>

  	<div class="row text">
  		<?php echo t('Password'); ?>
  		<?php echo $form->passwordField($model,'password'); ?>
  		<?php echo $form->error($model,'password'); ?>
  	</div>

  	<div class="row checkbox rememberMe">
  		<?php echo $form->checkBox($model,'rememberMe'); ?>
  		<?php echo t('Remember me next time'); ?>
  		<?php echo $form->error($model,'rememberMe'); ?>
  	</div>
  	
  	<div class="row link registration">
      <?php $suffix = $type? '?type='.$type: ''; ?>
  		<?php echo l(t('Registration'), '/user/registration'.$suffix); ?>
  	</div>
  	<div class="row link recovery">
  		<?php echo l(t('Recovery'), '/user/recovery'); ?>
  	</div>

  	<div class="row buttons">
  		<?php echo CHtml::submitButton(t('Login')); ?>
  	</div>

  <?php $this->endWidget(); ?>
</div>
