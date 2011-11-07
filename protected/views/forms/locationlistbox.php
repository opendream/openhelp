<?php
$addresses = Yii::app()->params['location'];

$children = 'level'.(str_replace('level', '', $address) + 1);
$locationOptions = array(
	'prompt' => Yii::t('locale', '- Select -'),
  'ajax' => array(
    'type' => 'GET',
    'url' => CController::createUrl("/forms/locationlistbox"),
    'update' => '#Location_'.$children.'_wrapper',
    'data'=>array(
      'level'=>$address,
      'value'=>'js:this.value',
    ),
  ),
  'onchange'=>'js:$("#Location_'.$children.'").focus()',
  
);
echo CHtml::activeLabel($locationModel,Yii::t('locale',"$address"));
echo CHtml::activeDropDownList($locationModel,"$address", $rows, $locationOptions);
?>
