<script src="<?php echo bu('js/jquery.scrolltofixed.js'); ?>"></script>
<div class="webform-content drop-shadow curved curved-hz-1">
<h1><?php echo $this->pageTitle; ?></h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>


<div class="actions">
  <input type="submit" class="btn primary" value="<?php echo t('Save changes'); ?>">&nbsp;<button type="reset" class="btn"><?php echo t('Cancel'); ?></button>
</div>
<script>
    $('.actions').scrollToFixed({ marginTop: -19 });
</script>

<?php echo $form->hiddenField($model,'type'); ?>
<?php echo $this->getWebForm($type, $model, $Data); ?>

<div class="actions">
  <input type="submit" class="btn primary" value="<?php echo t('Save changes'); ?>">&nbsp;<button type="reset" class="btn"><?php echo t('Cancel'); ?></button>
</div>
<?php $this->endWidget(); ?>
</div>