<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'Update Request', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>View Request #<?php echo $model->id; ?></h1>
<?php
$coordinator = $this->renderPartial('_coordinators', array('model'=>$model), true);
$needs = $this->renderPartial('_needs', array('model'=>$model), true);

$attributes = array(
  array(
    'label' => Yii::t('locale', 'Location'),
    'type' => 'raw',
    'value' => LocationHtml::locationView($model->location_id)
  ),
  array(
    'label' => Yii::t('locale', 'Last updated'),
    'value' => $model->last_updated
  ),
  array(
    'label' => Yii::t('locale', 'Date created'),
    'value' => $model->date_created
  ),
  array(
    'label' => Yii::t('locale', 'Detail'),
    'type' => 'raw',
    'value' => $model->detail
  ),
  array(
    'label' => Yii::t('locale', 'Coordinators'),
    'type' => 'raw',
    'value' => $coordinator
  ),
  array(
    'label' => Yii::t('locale', 'Needs/Helps'),
    'type' => 'raw',
    'value' => $needs
  ),
);

?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>$attributes
)); ?>
