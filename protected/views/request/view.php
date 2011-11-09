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
<div class="view request-view">
  <div class="Request_location">
    <?php echo LocationHtml::locationView($model->location_id); ?>
  </div>
  <div class="label Label_Request_last_updated">
    <b><?php echo Yii::t('locale', $model->getAttributeLabel('last_updated')); ?></b>
  </div>
  <div class="detail Request_last_updated">
    <?php echo $model->last_updated; ?>
  </div>
  
  <div class="label Label_Request_date_created">
    <b><?php echo Yii::t('locale', $model->getAttributeLabel('date_created')); ?></b>
  </div>
  <div class="detail Request_date_created">
    <?php echo $model->date_created; ?>
  </div>
  
  <div class="label Label_Request_detail">
    <b><?php echo Yii::t('locale', $model->getAttributeLabel('detail')); ?></b>
  </div>
  <div class="detail Request_detail">
    <?php echo $model->detail; ?>
  </div>
  
  <div class="label Label_Request_coordinators">
    <b><?php echo Yii::t('locale', 'Coordinators')?></b>
  </div>
  <div class="Request_coordinators">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>new CArrayDataProvider($model->coordinators),
        'columns'=>array(
          array('name' => 'fullname', 'header' => Yii::t('locale', 'Full name'), 'value' => '$data->fullname'),
          array('name' => 'position', 'header' => Yii::t('locale', 'Position'), 'value' => '$data->position'),
          array('name' => 'tel', 'header' => Yii::t('locale', 'Tel.'), 'value' => '$data->tel'),
          array('name' => 'detail', 'header' => Yii::t('locale', 'Detail'), 'value' => '$data->detail'),
        ),
    )); ?>
  </div>
  
  <div class="label Label_Request_needs">
    <b><?php echo Yii::t('locale', 'Needs')?></b>
  </div>
  <div class="Request_needs">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>new CArrayDataProvider($model->needs),
        'columns'=>array(
          array('name' => 'item.name', 'header' => Yii::t('locale', 'Name'), 'value' => '$data->item->name'),
          array('name' => 'amount', 'header' => Yii::t('locale', 'Amount'), 'value' => '$data->amount'),
          array('name' => 'detail', 'header' => Yii::t('locale', 'Detail'), 'value' => '$data->detail'),
        ),
    )); ?>
  </div>
</div>
