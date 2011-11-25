
<h1><?php echo $this->pageTitle; ?></h1>

<div class="webform-content drop-shadow curved curved-hz-1">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->hiddenField($model,'type'); ?>
<?php echo $this->getWebForm($type, $model, $Data); ?>

<div class="actions">
  <input type="submit" class="btn primary" value="<?php echo t('Save changes'); ?>">&nbsp;<button type="reset" class="btn"><?php echo t('Cancel'); ?></button>
</div>

<?php $this->endWidget(); ?>
</div>