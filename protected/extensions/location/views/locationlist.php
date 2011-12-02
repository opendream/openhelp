<?php

$addresses = Yii::app()->params['location'];
$orgAddresses = $addresses;

$firstLevelCol = array_shift($addresses);
$children = $addresses[0];
$locationModel = new Location;

    
$from = 'location';
$queryWhereList = array(1);
$where = '1';

if ($join) {
  $from .= ", $join";
  $queryWhereList[] = "location.id = $join.location_id";
  $where = "location.id = $join.location_id";
}

$mattr = $model->$attribute;
$mattrId = $mattr;

if ($multiple) {
  $mattr = isset($mattr[$index])? $mattr[$index]: 0;
  $mattrId = $mattr? $mattr->id: $mattr;
  $attribute = $attribute."[$index]";
}
if ($mattrId || isset($_REQUEST['Location'])) {
  $selectList = implode(', ', $orgAddresses);
  if (isset($_REQUEST['Location'])) {
    $query = array_filter($_REQUEST['Location']);
    //$model = (object) $query;
    $locationModel = new Location;
    $locationModel->attributes = $query;

    foreach ($query as $level => $value) {
      $queryWhereList[] = $level.'="'.$value.'"';
    }


    $queryWhere = implode(' AND ', $queryWhereList);
    $qtxt = "SELECT $selectList FROM $from WHERE $queryWhere";
  }
  else {
    $id = $mattrId;
    $locationModel = $multiple? $model->locations[$index]: $model->location;
    $qtxt = "SELECT $selectList FROM location WHERE id = $id";

  }
  
  //print $qtxt;
  //exit();
  $command = Yii::app()->db->createCommand($qtxt);
  $row = $command->queryRow();

  $levelList = array_keys($row);
  array_pop($row);
  $whereList = array(array_shift($levelList) => 1);
  foreach ($row as $level => $value) {
    $selectLevel = array_shift($levelList);
    $whereList[$selectLevel] = $level.'="'.$value.'"';
  }
  
  $whereList = array_reverse($whereList);
  if ($join) {
    $whereList[] = "location.id = $join.location_id";
  }
  $levelData = array();
  $whereListLoop = $whereList;
  foreach ($whereListLoop as $level => $value) {
    $where = implode(' AND ', $whereList);
    $qtxt = "SELECT DISTINCT $level FROM $from WHERE $where";
    $command = Yii::app()->db->createCommand($qtxt);
    $data = $command->queryColumn(array($level));
    $levelData[$level] = array_combine($data, $data);
    array_shift($whereList);
    
    
  }
  
  
}

$qtxt = "SELECT DISTINCT $firstLevelCol FROM $from WHERE $where";
$command = Yii::app()->db->createCommand($qtxt);
$firstLevelRows = $command->queryAll();
foreach ($firstLevelRows as $row) {
  $firstLevel[$row[$firstLevelCol]] = $row[$firstLevelCol];
}

$defaultOptions = array('prompt' => '- '. Yii::t('locale', $firstLevelCol). ' -');
$locationOptions = $defaultOptions;
if ($children) {
  $locationOptions['ajax'] = array(
    'type' => 'GET',
    'url' => CController::createUrl("/forms/locationlistbox"),
    'update' => '#Location_'.$children.'_wrapper',
    'data' => array(
      'model' => get_class($model),
      'attribute' => $attribute,
      'query' => array(
        $firstLevelCol => array(
          'value' => "js:$(this).val()",
          'childrenLevels' => "js:$(this).parent().attr('class')",
        )
      ),
      'join' => $join,
    )
  );
  $locationOptions['onchange'] = 'js:$("#Location_'.$children.'").change().focus()';
}
else {
  # TODO: Update location_id
}
$output = '';
$output .= '<span id="Location_id_wrapper">';
if ($multiple) {
  $output .=  '<input id="Webform_locations_'.$index.'" type="hidden" name="Webform[locations]['.$index.']" value="'.$mattrId.'">';
}
else {
  $output .=   CHtml::activeHiddenField($model, $attribute);
}
$output .= '</span>';
$output .= '<span id="Location_'.$firstLevelCol.'_wrapper" class="'.implode(' ', $addresses).'">';
//$output .=   CHtml::activeLabelEx($locationModel,Yii::t('locale',"$firstLevelCol"));
$output .=   CHtml::activedropDownList($locationModel, $firstLevelCol, $firstLevel, $locationOptions);
$output .= '</span>';

while (!empty($addresses)) {

  $address = array_shift($addresses);
  $defaultOptions = array('prompt' => '- '. Yii::t('locale', $address). ' -');
    
  $data = (isset($id) || isset($_REQUEST['Location']))? $levelData[$address]: array();
  
  $output .= '<span id="Location_'.$address.'_wrapper" class="'.implode(' ', $addresses).'">';
	//$output .=   CHtml::activeLabelEx($locationModel, Yii::t('locale', $address));
	$output .=   Chtml::activedropDownList($locationModel, $address, $data, $defaultOptions);
	$output .= '</span>';
}

echo $output;

?>