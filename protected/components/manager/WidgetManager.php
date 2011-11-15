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

	public static function getItemDetails($id, $village = null, $idOnly = null) {
		$qtxt = "SELECT item.id, item.name, item.image_url, sum(need.amount) as amount
     			 FROM location INNER JOIN request ON location.id = request.location_id
     			 	INNER JOIN need ON request.id = need.request_id
     				INNER JOIN item ON need.item_id = item.id
     			 WHERE location.id = $id ";
     	if($village) {
		 	$qtxt .= " AND request.extra_location0 = '$village'";
		}
	 	$qtxt .= "  GROUP BY item.id, item.name, item.image_url";
	 	$command = Yii::app()->db->createCommand($qtxt);
	 	if ($idOnly) {
	 	    $items = $command->queryColumn();
	 	} else {
      	  	$items = $command->queryAll();
      	  	$models = Item::model()->findAll();
      	  	for ($i=0; $i < count($models); $i++) { 
      	  		if(!self::findItemById($items, $models[$i]['id'])) {
      	  			$items[] = array('id' => $models[$i]['id'], 'name' => $models[$i]['name'], 'image_url' => $models[$i]['id'], 'amount' => 0);
      	  		}
      	  	}
    	}
      	return $items;
	}

	public static function getExtraDouble($id, $number, $village = null) {
		$double = Yii::app()->params['request']['extra']['double'];
		$params = 'request.extra_double'.$number;
		$villages = array();
		if(!$village) {
			$qtxt = "SELECT request.extra_location0 as village
				FROM location INNER JOIN request ON location.id = request.location_id 
				WHERE location.id = $id ";
			$command = Yii::app()->db->createCommand($qtxt);
			$villages = $command->queryAll();
		} else {
		 	$villages[] = array('village' => $village);
		}

		if($double[$number]['func']=='sum') {

		} elseif($double[$number]['func']=='min-max') {
			
		}
		//Yii::trace($qtxt,'example');

		
		$result['sum_'.$params] = $sumReqult;
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
		//$result = array();
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

	public static function getRequestLocation() {
		$qtxt = "SELECT distinct location_id 
				FROM request
     			WHERE status != 2 OR status != 3 ";
     	$command = Yii::app()->db->createCommand($qtxt);
		$request_location = $command->queryColumn();
		return count($request_location);
	}

	public static function getInProcessRequest() {
		$qtxt = "SELECT count(id) as requestNo
				FROM request
     			WHERE status != 2 OR status != 3 ";
     	$command = Yii::app()->db->createCommand($qtxt);
		$requestNo = $command->queryColumn();
		return $requestNo['requestNo'];
	}

	public static function findItemById($items, $id) {
		foreach ($items as $item) {
			if($item['id']==$id) {
				return true;
			}
		}
		return false;
	}

}