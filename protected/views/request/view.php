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
  <div class="label Label_Request_location">
    <h3><?php echo Yii::t('locale', $model->getAttributeLabel('location')); ?></h3>
  </div>
  <div class="Request_location">
    <div class="main-location">
      <?php echo LocationHtml::locationView($model->location_id); ?>
    </div>
    <div class="extra-double">
      <?php $extraDouble = Yii::app()->params['request']['extra']['double']; ?>

    	<?php if ($extraDouble): ?>
    	<div class="extra-double">
    	    <table>
    	      <tbody>
        	  <?php foreach ($extraDouble as $key => $row): ?>
            <tr>
              <td id="extra-double-label-<?php echo $key; ?>" class="extra-double-label"><?php echo $row['label']; ?></td>
              <td class="extra-double-input">
                <span id="extra-double-prefic-<?php echo $key; ?>" class="extra-double-prefix"><?php echo $row['prefix']; ?></span>
                <span id="extra-double-value-<?php echo $key; ?>" class="extra-double-value">
                  <?php echo $model->getAttribute('extra_double'.$key); ?>
                </span>
                <span id="extra-double-suffix-<?php echo $key; ?>" class="extra-double-suffix"><?php echo $row['suffix']; ?></span>
              </td>
            </tr>
        	  <?php endforeach ?>
        	  </tbody>
      	  </table>
    	</div>
    	<?php endif ?>
    </div>
  </div>
  <div class="label Label_Request_last_updated">
    <h3><?php echo Yii::t('locale', $model->getAttributeLabel('last_updated')); ?></h3>
  </div>
  <div class="detail Request_last_updated">
    <?php echo $model->last_updated; ?>
  </div>
  
  <div class="label Label_Request_date_created">
    <h3><?php echo Yii::t('locale', $model->getAttributeLabel('date_created')); ?></h3>
  </div>
  <div class="detail Request_date_created">
    <?php echo $model->date_created; ?>
  </div>

  <div class="label Label_Request_coordinators">
    <h3><?php echo Yii::t('locale', 'Coordinators')?></h3>
  </div>
  <div class="Request_coordinators">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>new CArrayDataProvider($model->coordinators),
        'columns'=>array(
          array('name' => 'fullname', 'header' => Yii::t('locale', 'Full name'), 'value' => '$data->fullname'),
          array('name' => 'position', 'header' => Yii::t('locale', 'Position'), 'value' => '$data->position'),
          array('name' => 'tel', 'header' => Yii::t('locale', 'Tel.'), 'value' => '$data->tel'),
        ),
    )); ?>
  </div>
  
  <div class="label Label_Request_needs">
    <h3><?php echo Yii::t('locale', 'Needs')?></h3>
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
  
  <?php $extraText = Yii::app()->params['request']['extra']['text']; ?>
  
  <?php if ($extraText): ?>
	  <?php foreach ($extraText as $key => $row): ?>
	    <?php if ($model->getAttribute('extra_text'.$key)): ?>
	      <div class="label Label_Request_extra_text<?php echo $key; ?>">
      	  <h3><?php echo Yii::t('locale', $row['label']); ?></h3>
        </div>
        <div class="detail Request_extra_text<?php echo $key; ?>">
          <?php echo $model->getAttribute('extra_text'.$key); ?>
        </div>
	    <?php endif ?>
	  <?php endforeach ?>
	<?php endif ?>

  
  
</div>
