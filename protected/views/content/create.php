<h1><?php echo t('Create'); ?> <?php echo Yii::app()->params['content'][$model->type]['name']; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>