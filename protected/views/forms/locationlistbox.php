<?php


if ($current == 'id') {
  $id = array_shift($rows);
  echo CHtml::activeHiddenField($model, $field, array('value'=>$id));
}
else {
  $query = array();
  foreach ($queryTree as $level) {
    $query[$level]['value'] = "js:$('#Location_$level').val()";
    $query[$level]['childrenLevels'] = "js:$(this).parent().attr('class')";
  }
  $locationOptions = array(
  	'prompt' => Yii::t('locale', '- Select -'),
    'ajax' => array(
      'type' => 'GET',
      'url' => CController::createUrl("/forms/locationlistbox"),
      'update' => '#Location_'.$children.'_wrapper',
      'data' => array(
        'model' => get_class($model),
        'field' => $field,
        'query' => $query,
      ),
    ),
    'onchange'=>'js:$("#Location_'.$children.'").focus()',
  
  );
  
  $output = '';
  $output .=   CHtml::activeLabel($locationModel, Yii::t('locale', $current));
  $output .=   CHtml::activeDropDownList($locationModel, $current, $rows, $locationOptions);
  echo $output;
}
?>
