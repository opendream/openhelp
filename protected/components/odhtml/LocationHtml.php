<?php 

Class LocationHtml extends CHtml {
  public static function locationView ($id=0, $options=array()) {
    $output = '';
    if ($id) {
      $locationModel = new Location;
      
      $output .= '<ul>';
      
      $levels = Yii::app()->params['location'];
      if (isset($options['showLatLng']) && $options['showLatLng']) {
        $levels[] = 'lat';
        $levels[] = 'lng';
      }
      $levels = implode(', ', $levels);

      $qtxt = "SELECT $levels FROM location WHERE id = '$id'";
      $command = Yii::app()->db->createCommand($qtxt);
      $row = $command->queryRow();

      foreach ($row as $level => $value) {
        $output .= '<li>';
        $output .= '<span class="label">'.CHtml::activeLabelEx($locationModel, Yii::t('locale', $level)).'</span>';
        $output .= '<span class="'.$level.'">'.$value.'</span>';
        $output .= '</li>';
        
      }
      
      $output .= '</ul>';
      
      if (isset($options['showMap'])) {
        # TODO: show google map
      }
    }
    return $output;
  }
  
  public static function locationList ($model, $attribute='location_id', $id=NULL) {
    
    $addresses = Yii::app()->params['location'];
    $firstLevelCol = array_shift($addresses);
    $children = $addresses[0];

    $locationModel = new Location;
    if ($id) {
      $locationModel = $this->loadModel($id);
      foreach ($addresses as $level) {
        # code...
      }
    }

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
          'attribute' => $attribute,
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
    $output .=   CHtml::activeHiddenField($model, $attribute);
    $output .= '</span>';
    $output .= '<span id="Location_'.$firstLevelCol.'_wrapper" class="'.implode(' ', $addresses).'">';
    $output .=   CHtml::activeLabelEx($locationModel,Yii::t('locale',"$firstLevelCol"));
    $output .=   CHtml::activedropDownList($locationModel, $firstLevelCol, $firstLevel, $locationOptions);
    $output .= '</span>';

    while (!empty($addresses)) {
      $address = array_shift($addresses);
      $output .= '<span id="Location_'.$address.'_wrapper" class="'.implode(' ', $addresses).'">';
    	$output .=   CHtml::activeLabelEx($locationModel, Yii::t('locale', $address));
    	$output .=   Chtml::activedropDownList($locationModel, $address, array(), $defaultOptions);
    	$output .= '</span>';
    }
    
    return $output;
  }
  
  public function loadModel($id)
	{
		$model=Location::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}