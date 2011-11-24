<div class="webform-content">
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