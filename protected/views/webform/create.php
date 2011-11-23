<?php

$this->menu=array(
	array('label'=>'List Webform', 'url'=>array('index')),
	array('label'=>'Manage Webform', 'url'=>array('admin')),
);
?>
<form action=".">
<input type="hidden" name="type" value="<?php echo $type; ?>" />
<?php require(substr(bu(Yii::app()->params['webforms'][$type]['file']), 1)); ?>
</form>