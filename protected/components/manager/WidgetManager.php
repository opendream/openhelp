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

  public static function getDateByLocation($id, $village = null)
  {
    $qtxt = "SELECT date_created, date_updated INNER JOIN request ON location.id = request.location_id WHERE location_id = $id";
    if($village) {
      $qtxt .= " AND request.extra_location0 = '$village'";
    }
    $qtxt .= " ORDER BY coordinator.fullname";
    $command = Yii::app()->db->createCommand($qtxt);

    $dates = $command->queryAll();
    print_r($dates);
  }


  public static function getRequestReport($id) {
  	//get request by location_id
  	$qtxt = "SELECT 
     request.id, request.date_created, request.last_updated, request.extra_location0, request.extra_location1, request.extra_location2, request.extra_location3, request.extra_location4, request.extra_text0, request.extra_text1, request.extra_text2, request.extra_text3, request.extra_text4, request.extra_text5, request.extra_text6, request.extra_text7, request.extra_text8, request.extra_text9, request.extra_text10, request.extra_text11, request.extra_text12, request.extra_text13, request.extra_text14, request.extra_double0, request.extra_double1, request.extra_double2, request.extra_double3, request.extra_double4, request.extra_double5, request.extra_double6, request.extra_double7, request.extra_double8, request.extra_double9, location.level0, location.level1, location.level2
	FROM
     location INNER JOIN request ON location.id = request.location_id
  	WHERE location.id = $id ";
  	$command = Yii::app()->db->createCommand($qtxt);
    $requests = $command->queryAll();



    // add needs and coordinators
    foreach ($requests as &$request) {
    	$coordinators = self::getCoodinators($request['id']);
    	if($coordinators) {
    		$request['coordinators'] = self::mergeRows($coordinators);
    	}

    	$needs = self::getNeeds($request['id']);
    	if($needs) {
    		$request['needs'] = self::mergeRows($needs);
    	}
    }

    $labels = array(
	'coordinators' => Yii::t('locale', 'Coordinators'),
	'needs' => Yii::t('locale', 'Needs'),
	'date_created' => Yii::t('locale', 'Date Created'),
	'last_updated' => Yii::t('locale', 'Last Updated'),
	'status' => Yii::t('locale', 'Status'),
	);
	foreach(Yii::app()->params['location'] as $key) {
		$labels[$key] = Yii::t('locale', $key);	
	}
	foreach (Yii::app()->params['request']['extra']['location'] as $key => $value) {
		$labels['extra_location'.$key] = $value['label'];
	}
	foreach (Yii::app()->params['request']['extra']['double'] as $key => $value) {
		$labels['extra_double'.$key] = $value['label'];
	}
	foreach (Yii::app()->params['request']['extra']['text'] as $key => $value) {
		$labels['extra_text'.$key] = $value['label'];
	}

	$first = $requests[0];
	$header = array();
	foreach ($first as $col => $value) {
		$header[$col] = isset($labels[$col])? $labels[$col]: $col;
		//Yii::trace('result '.$col.' value '.$value, 'example');
	}
	$header = array(-1 => $header);
	$requests = $header + $requests;
	//Yii::trace('result '.$first, 'example');

	return $requests;
  }


  public static function mergeRows($rows) {
  	$str = '';
  	$limited = count($rows);
  	for ($i = 0; $i < $limited; $i++) {
  		//$row = $rows[$i];
  		$size = count($rows[$i]);
  		$index = 0;
  		foreach ($rows[$i] as $attrbute) {
  			$str .= $attrbute;
  			if($index < $size - 1) {
  				$str .= ':';
  			}
  			$index++;
  		}
  		if($i < $limited - 1) {
  			$str .= '/';
  		}
  	}
  	return $str;
  }


  public static function getNeeds($request_id) {
  	$qtxt = "SELECT
			     item.name, need.amount 
			FROM
     			item INNER JOIN need ON item.id = need.item_id
  			WHERE need.request_id = $request_id ";
  	$command = Yii::app()->db->createCommand($qtxt);
    $requests = $command->queryAll();
    return $requests;
  }


  public static function getCoodinators($request_id) {
  	$qtxt = "SELECT
     			coordinator.fullname, coordinator.position, coordinator.tel
			FROM
     			coordinator INNER JOIN request_coordinator ON coordinator.id = request_coordinator.coordinator_id
     		WHERE request_coordinator.request_id = $request_id ";
    $command = Yii::app()->db->createCommand($qtxt);
    $coordinators = $command->queryAll();
    return $coordinators;
  }


  public static function getAllItemDetails() {
    $qtxt = "SELECT item.id, item.name, item.image_url, sum(need.amount) as amount
         FROM location INNER JOIN request ON location.id = request.location_id
          INNER JOIN need ON request.id = need.request_id
          INNER JOIN item ON need.item_id = item.id
         GROUP BY item.id, item.name, item.image_url";
    $command = Yii::app()->db->createCommand($qtxt);
    
    $items = $command->queryAll();
    
    $sum = 0;
    $max = 0;
    foreach ($items as $item) {
      $sum += $item['amount'];
      if ($max < $item['amount']) {
      $max = $item['amount'];
      }
    }
    
    $models = Item::model()->findAll();
    for ($i=0; $i < count($models); $i++) { 
      if(!self::findItemById($items, $models[$i]['id'])) {
        $items[] = array('id' => $models[$i]['id'], 'name' => $models[$i]['name'], 'image_url' => $models[$i]['image_url'], 'amount' => 0);
      }
    }
    
    foreach ($items as &$item) {
      $item['percent'] = $max? floor($item['amount'] / $max * 100): 0;
      $item['percent'] = $item['percent'] ? $item['percent'] : 1;
    }
    
    return $items;
  }

	public static function getItemDetails($id, $village = null) {
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

  	  	$items = $command->queryAll();
  	  	
  	  	$sum = 0;
      	$max = 0;
      	foreach ($items as $item) {
      	  $sum += $item['amount'];
      	  if ($max < $item['amount']) {
      	    $max = $item['amount'];
      	  }
      	}
  	  	
  	  	$models = Item::model()->findAll();
  	  	for ($i=0; $i < count($models); $i++) { 
  	  		if(!self::findItemById($items, $models[$i]['id'])) {
  	  			$items[] = array('id' => $models[$i]['id'], 'name' => $models[$i]['name'], 'image_url' => $models[$i]['image_url'], 'amount' => 0);
  	  		}
  	  	}
  	  	
  	  	foreach ($items as &$item) {
       	  $item['percent'] = $max? floor($item['amount'] / $max * 100): 0;
       	}
      	return $items;
	}
	
  // under construction, pls dont use it!
  public static function getExtraDouble($id, $number, $village = null) {
    $double = Yii::app()->params['request']['extra']['double'];
    $params = 'request.extra_double'.$number;
    $results = array();
    $villages = array();
    if(!$village) {
      $qtxt = "SELECT request.extra_location0 as name
        FROM location INNER JOIN request ON location.id = request.location_id 
        WHERE location.id = $id ";
      $command = Yii::app()->db->createCommand($qtxt);
      $villages = $command->queryAll();
    } else {
      $villages[] = array('name' => $village);
    }

    if($double[$number]['func']=='sum') {
      $sumExtraDouble = 0;      
      foreach ($villages as $village) { 
        $villageName = $village['name'];    
        $qtxt = "SELECT $params as value
          FROM request where $params = $villageName
          order by date_created desc";
        $command = Yii::app()->db->createCommand($qtxt);
        $result = $command->queryRow();
        $sumExtraDouble += $result['value'];
      }
      $results[$params] = $sumExtraDouble;
    } elseif($double[$number]['func']=='min-max') {
      
    }
    //Yii::trace($qtxt,'example');

    
    return $results;
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

 public static function getAllExtratexts($id, $village = null)
  {
    $result = array();
    foreach (Yii::app()->params['request']['extra']['text'] as $key => $value) {
      $result[$value['label']] = self::getExtratexts($id, $key, $village);
    }
    return $result;
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
    return $requestNo[0];
  }

  public static function findItemById($items, $id) {
    foreach ($items as $item) {
      if($item['id']==$id) {
        return true;
      }
    }
    return false;
  }

  public static function getAllLocations($rid = null)
  {
     $requests = Request::model()->findAll();
     $locations = new CMap();
     //$locations = array();
     foreach ($requests as $request) {
      $locations[$request->location_id] = array('label'=>$request->location['label'], 'lat'=>$request->location['lat'], 'lng'=>$request->location['lng']);  
     }
     return $locations->toArray();
  }

  public static function getVillageByLocation($id = null, $village = null) {
    $result = array();
    if ($id === null) {
      return self::getAllLocations();
    }
    
    $location = Location::model()->findByPk($id);
    $result['location'] = $location->label;
    $result['requests'] = $location->requests;

    $locations = new CMap();
    foreach ($result['requests'] as $request) {
      $locations[$request->id] = array(
        'label' => $request->extra_location0,
        'lat' => $location->lat,
        'lng' => $location->lng
      );
    }
    return $locations->toArray();
  }

}