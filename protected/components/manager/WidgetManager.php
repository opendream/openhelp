<?php

class WidgetManager
{
	public static function getCoordinators($id, $village = null) {
		$result = array();
	  	$location = Location::model()->findByPk($id);
	  	$result['location'] = $location->label;
	  	$result['requests'] = $location->requests;

	  	//get coordinators
	  	$qtxt = "SELECT distinct coordinator.fullname, coordinator.position, coordinator.tel
				 FROM location INNER JOIN request ON location.id = request.location_id
     				INNER JOIN request_coordinator ON request.id = request_coordinator.request_id
     				INNER JOIN coordinator ON request_coordinator.coordinator_id = coordinator.id
				 WHERE location.id = $id ";
		if($village) {
		 	$qtxt .= " AND request.extra_location0 = '$village'";
		}
		$qtxt .= " ORDER BY coordinator.fullname";
		Yii::trace($qtxt, 'example');
      	$command = Yii::app()->db->createCommand($qtxt);
      	$coordinators = $command->queryAll();
      	return $coordinators;
	}

	public static function getItemDetails($id, $village = null) {
		$qtxt = "SELECT item.id, item.name, sum(need.amount)
     			 FROM location INNER JOIN request ON location.id = request.location_id
     			 	INNER JOIN need ON request.id = need.request_id
     				INNER JOIN item ON need.item_id = item.id
     			 WHERE location.id = $id ";
     	if($village) {
		 	$qtxt .= " AND request.extra_location0 = '$village'";
		}
	 	$qtxt .= "  GROUP BY item.id, item.name";
	 	$command = Yii::app()->db->createCommand($qtxt);
      	$items = $command->queryAll();
      	return $items;
	}

	public static function getSumExtraDouble($id, $village = null) {
		$result = array();
		$double = Yii::app()->params['request']['extra']['double'];
      	for ($i=0; $i < count($double); $i++) { 

      		if($double[$i]['func']=='sum') {
      			$params = 'request.extra_double'.$i;
      			$qtxt = "SELECT sum($params) as sum_extra_double$i 
					 FROM location INNER JOIN request ON location.id = request.location_id 
					 WHERE location.id = $id ";
				if($village) {
				 	$qtxt .= " AND request.extra_location0 = '$village'";
				}
				//Yii::trace($qtxt,'example');

				$command = Yii::app()->db->createCommand($qtxt);
		      	$sumReqult = $command->queryAll();
		      	$result['sum_'.$params] = $sumReqult;
      		}
      	}
      	return $result;
	}

	public static function getMinMaxExtraDouble($id, $village = null) {
		$result = array();
		$double = Yii::app()->params['request']['extra']['double'];
      	for ($i=0; $i < count($double); $i++) { 
      		if($double[$i]['func']=='min-max') {
      			$params = 'request.extra_double'.$i;
      			$qtxt = "SELECT min($params) as min, max($params) as max
				FROM location INNER JOIN request ON location.id = request.location_id
     			WHERE location.id = $id ";
     			if($village) {
				 	$qtxt .= " AND request.extra_location0 = '$village'";
				}

     			Yii::trace($qtxt, 'example');
     			$command = Yii::app()->db->createCommand($qtxt);
		     	$minMaxExtraDoubles = $command->queryRow();
		     	
		      	$result[$params] = $minMaxExtraDoubles;	
		    }
      	}
      	return $result;
	}

	public static function getExtraLocation0s($id) {
		$qtxt = "SELECT distinct request.extra_location0 as label
				FROM location INNER JOIN request ON location.id = request.location_id
     			WHERE location.id = $id ";
     	
     	$command = Yii::app()->db->createCommand($qtxt);
		$extraLocation0s = $command->queryAll();
		return $extraLocation0s;
	}

	public static function getExtratexts($id, $text, $village = null){
		$result = array();
		$params = 'request.extra_text'.$text;

		$qtxt = "SELECT concat(request.extra_location0,' ',$params) as label
				FROM location INNER JOIN request ON location.id = request.location_id
     			WHERE location.id = $id ";
     	if($village) {
			$qtxt .= " AND request.extra_location0 = '$village'";
		}
     	
     	$command = Yii::app()->db->createCommand($qtxt);
		$extraTexts = $command->queryAll();
		return $extraTexts;
	}

}