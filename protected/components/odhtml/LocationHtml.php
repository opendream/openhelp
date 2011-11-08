<?php 

Class LocationHtml {
  
  static public function locationList ($model, $field='location_id') {
    
    $addresses = Yii::app()->params['location'];
    $firstLevelCol = array_shift($addresses);
    $children = $addresses[0];

    $locationModel = new Location;

    $qtxt = "SELECT DISTINCT $firstLevelCol FROM location";
    $command = Yii::app()->db->createCommand($qtxt);
    $firstLevelRows = $command->queryAll();
    foreach ($firstLevelRows as $row) {
      $firstLevel[$row[$firstLevelCol]] = $row[$firstLevelCol];
    }

    $defaultOptions = array('prompt' => Yii::t('locale', '- Select -'));
    $locationOptions = $defaultOptions;
    if ($children) {
      $locationOptions['ajax'] = array(
        'type' => 'GET',
        'url' => CController::createUrl("/forms/locationlistbox"),
        'update' => '#Location_'.$children.'_wrapper',
        'data' => array(
          'model' => get_class($model),
          'field' => $field,
          'query' => array(
            $firstLevelCol => array(
              'value' => "js:$(this).val()",
              'childrenLevels' => "js:$(this).parent().attr('class')",
            )
          ),
        )
      );
      $locationOptions['onchange'] = 'js:$("#Location_'.$children.'").focus()';
    }
    else {
      # TODO: Update location_id
    }
    $output = '';
    $output .= '<span id="Location_id_wrapper">';
    $output .=   CHtml::activeHiddenField($model, $field);
    $output .= '</span>';
    $output .= '<span id="Location_'.$firstLevelCol.'_wrapper" class="'.implode(' ', $addresses).'">';
    $output .=   CHtml::activeLabelEx($locationModel,Yii::t('locale',"$firstLevelCol"));
    $output .=   CHtml::activedropDownList($locationModel, $firstLevelCol, $firstLevel, $locationOptions);
    $output .= '</span>';

    while (!empty($addresses)) {
      $address = array_shift($addresses);
      $output .= '<span id="Location_'.$address.'_wrapper" class="'.implode(' ', $addresses).'">';
    	$output .=   CHtml::activeLabelEx($locationModel,Yii::t('locale',"$address"));
    	$output .=   Chtml::activedropDownList($locationModel,"$address", array(), $defaultOptions);
    	$output .= '</span>';
    }
    
    return $output;
  }
}