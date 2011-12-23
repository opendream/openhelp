<?php
$this->menu=array(
	array('label'=>t('View'), 'url'=>array('index')),
);
?>

<link rel="stylesheet" href="<?php echo bu('css/bootstrap.min.css'); ?>">
<script type="text/javascript" src="<?php echo bu('js/jquery.scrolltofixed.js'); ?>"></script>


<div class="webform-content drop-shadow curved curved-hz-1">
<h1><?php echo $this->pageTitle; ?></h1>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'content-form',
	'enableAjaxValidation'=>false,
)); ?>


<div class="actions">
  <input type="submit" class="btn primary" value="<?php echo t('Save changes'); ?>">&nbsp;<button type="reset" class="btn"><?php echo t('Cancel'); ?></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo t('Please, alway save.') ?>
</div>

<?php echo $this->getProfile($user); ?>

<?php $this->endWidget(); ?>
</div>

<script type="text/javascript">
  $('.actions').scrollToFixed();
</script>