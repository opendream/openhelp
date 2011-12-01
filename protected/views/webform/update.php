
<?php
$this->menu=array(
	array('label'=>'List Webform', 'url'=>array('index')),
	array('label'=>'Create Webform', 'url'=>array('create')),
	array('label'=>'View Webform', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<div class="webform-content drop-shadow curved curved-hz-1">


<h1><?php echo t('Update').' '.Yii::app()->params['webforms'][$model->type]['label'] ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>