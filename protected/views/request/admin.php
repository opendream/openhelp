<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('request-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Requests</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'detail',
		'locationLabel',
		/*array(
			'name' => 'location_id',
			'header' => 'location',
			'value' => 'isset($data->location)? $data->location->label : null ',
		),*/
		/*array(
		  'name' => 'location.name',	
		  'header' => 'location',
		  'value' => 'LookupManager::getLocationString($data->location_id)',
		  'filter' => true,
		),*/
		array(
		  'name' => 'status',
		  'value' => 'Yii::t("locale",LookupManager::getRequestStatus($data->status))',
		  'filter' => LookupManager::requestStatus(),
		),
		'date_created',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
