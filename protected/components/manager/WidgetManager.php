<?php

class WidgetManager
{

  public static function getCoordinators($id, $village = null, $rid=null) {
    $result = array();
    $location = Location::model()->findByPk($id);
    $result['location'] = $location->label;
    $result['requests'] = $location->requests;

    //get coordinators
    $qtxt = "SELECT distinct coordinator.fullname, coordinator.position, coordinator.tel, request.extra_location0 
         FROM location INNER JOIN request ON location.id = request.location_id
          INNER JOIN request_coordinator ON request.id = request_coordinator.request_id
          INNER JOIN coordinator ON request_coordinator.coordinator_id = coordinator.id
         WHERE location.id = $id ";
    if($village) {
      $qtxt .= " AND request.extra_location0 = '$village'";
    }
    elseif ($rid) {
      $qtxt .= " AND request.id = $rid";
    }
    $qtxt .= " ORDER BY coordinator.fullname";
    Yii::trace($qtxt, 'example');
    $command = Yii::app()->db->createCommand($qtxt);
    $coordinators = $command->queryAll();
    return $coordinators;
  }

  public static function getDateByLocation($id, $village = null, $rid=null)
  {
    $qtxt = "SELECT request.date_created, request.last_updated FROM location INNER JOIN request ON location.id = request.location_id WHERE location.id = $id";

    if($village) {
      $qtxt .= " AND request.extra_location0 = '$village'";
    }
    elseif ($rid) {
      $qtxt .= " AND request.id = $rid";
    }
    $qtxt .= " ORDER BY request.last_updated";
    $command = Yii::app()->db->createCommand($qtxt);
    $dates = $command->queryAll();

    return $dates;
  }


  public static function getRequestReport($id) {
  	//get request by location_id
  	
  	  $labels = array(
  	'request.id' => Yii::t('locale', 'ID'),

  	'date_created' => Yii::t('locale', 'Date Created'),
  	'last_updated' => Yii::t('locale', 'Last Updated'),
  	'status' => Yii::t('locale', 'Status'),
  	"'' as coordinators" => Yii::t('locale', 'Coordinators'),
  	"'' as needs" => Yii::t('locale', 'Needs'),
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
  	
  	$select = implode(', ', array_keys($labels));
  	$qtxt = "SELECT 
     $select
	FROM
     location INNER JOIN request ON location.id = request.location_id
  	WHERE location.id = $id ";
  	$command = Yii::app()->db->createCommand($qtxt);
    $requests = $command->queryAll();

    $labels["coordinators"] = Yii::t('locale', 'Coordinators');
    $labels["needs"] = Yii::t('locale', 'Needs');

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
    	unset($request['id']);
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
      $ln = $item['amount']? log($item['amount']): 0;
      $item['percent'] = $max? floor($ln / log($max) * 100): 0;
      $item['percent'] = $item['percent'] ? $item['percent'] : 1;
    }
    
    return $items;
  }

	public static function getItemDetails($id, $village = null, $rid=null) {
		$qtxt = "SELECT item.id, item.name, item.image_url, sum(need.amount) as amount
     			 FROM location INNER JOIN request ON location.id = request.location_id
     			 	INNER JOIN need ON request.id = need.request_id
     				INNER JOIN item ON need.item_id = item.id
     			 WHERE location.id = $id ";
     	if($village) {
		 	$qtxt .= " AND request.extra_location0 = '$village'";
		}
		elseif ($rid) {
      $qtxt .= " AND request.id = $rid";
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
  	  	  $ln = $item['amount']? log($item['amount']): 0;
          $item['percent'] = $max? floor($ln / log($max) * 100): 0;
       	  $item['percent'] = $max? floor($item['amount'] / $max * 100): 1;
       	}
      	return $items;
	}
	
  // under construction, pls dont use it!
  public static function getExtraDouble($id, $number, $village = null) {
    $double = Yii::app()->params['request']['extra']['double'];
    $params = 'request.extra_double'.$number;
    $results = array();
    $villages = array();

    // get vilages by last_updated
    if(!$village) {
      $qtxt = "SELECT request.extra_location0 as name
        FROM location INNER JOIN request ON location.id = request.location_id 
        WHERE location.id = $id ";
      $command = Yii::app()->db->createCommand($qtxt);
      $villages = $command->queryAll();
    } else {
      $villages[] = array('name' => $village);
    }

    //check match function for each extra_double
    if($double[$number]['func']=='sum') {
      $sumExtraDouble = 0;      
      foreach ($villages as $village) { 
        $villageName = $village['name'];    
        $qtxt = "SELECT $params as value
          FROM request where extra_location0 = '$villageName'
          order by date_created desc";
        $command = Yii::app()->db->createCommand($qtxt);
        $result = $command->queryRow();
        $sumExtraDouble += $result['value'];
      }
      $results[$params]['sum'] = $sumExtraDouble;
      //$results['request.extra_double0.sum'] = $sumExtraDouble;
    } elseif($double[$number]['func']=='min-max') {
      //$results[$params]['min']
      //$results[$params]['max']
      $min = null;
      $max = null;
      foreach ($villages as $village) { 
        $villageName = $village['name'];
        $qtxt = "SELECT min($params) as min, max($params) as max
          FROM request
          WHERE location_id = $id 
          AND extra_location0 = '$villageName'";        

        $command = Yii::app()->db->createCommand($qtxt);
        $minMaxExtraDoubles = $command->queryRow();

        if($min == null || $min > $minMaxExtraDoubles['min']){
          $min = $minMaxExtraDoubles['min'];
        }

        if($max == null || $max < $minMaxExtraDoubles['max']){
          $max = $minMaxExtraDoubles['max'];
        }

      }

      $results[$params]['min'] = $min;
      $results[$params]['max'] = $max; 
    }
    //Yii::trace($qtxt,'example');

    
    return $results;
  }

  public static function getSumExtraDouble($id, $village = null, $rid = null) {
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
        elseif ($rid) {
          $qtxt .= " AND request.id = $rid";
        }
        //Yii::trace($qtxt,'example');

        $command = Yii::app()->db->createCommand($qtxt);
        $sumReqult = $command->queryAll();
        $result['sum_'.$params] = $sumReqult;
      }
    }
    return $result;
  }

  public static function getMinMaxExtraDouble($id, $village = null, $rid = null) {
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
        elseif ($rid) {
          $qtxt .= " AND request.id = $rid";
        }

        Yii::trace($qtxt, 'example');
        $command = Yii::app()->db->createCommand($qtxt);
        $minMaxExtraDoubles = $command->queryRow();
        
        $result[$params] = $minMaxExtraDoubles; 
      }
    }
    return $result;
  }

  public static function getExtraLocation0s($id, $getId = false) {
    if(!$getId) {
      $qtxt = "SELECT distinct request.extra_location0 as label
          FROM location INNER JOIN request ON location.id = request.location_id
          WHERE location.id = $id ";
    }
    else {
      $qtxt = "SELECT distinct request.extra_location0 as label , request.id 
          FROM location INNER JOIN request ON location.id = request.location_id
          WHERE location.id = $id ";
    }
    
    $command = Yii::app()->db->createCommand($qtxt);
    $extraLocation0s = $command->queryAll();
    return $extraLocation0s;
  }

 public static function getAllExtratexts($id, $village = null, $rid = null)
  {
    $result = array();
    foreach (Yii::app()->params['request']['extra']['text'] as $key => $value) {
      $result[$value['label']] = self::getExtratexts($id, $key, $village, $rid);
    }
    return $result;
  }

  public static function getExtratexts($id, $text, $village = null, $rid = null){
    //$result = array();
    $label = Yii::app()->params['request']['extra']['location'][0]['label'];
    $params = 'request.extra_text'.$text;
    
    if ($rid) {
      $select = $params;
    }
    else {
      $select = "concat('[ $label ', request.extra_location0,' ] ',$params)";
    }

    $qtxt = "SELECT $select as label
        FROM location INNER JOIN request ON location.id = request.location_id
        WHERE location.id = $id AND $params <> '' AND $params <> '<p></p>' AND $params IS NOT NULL";
    if($village) {
      $qtxt .= " AND request.extra_location0 = '$village'";
    }
    elseif ($rid) {
      $qtxt .= " AND request.id = $rid";
    }
    
    $command = Yii::app()->db->createCommand($qtxt);
    $extraTexts = $command->queryColumn();
    return $extraTexts;
  }

  public static function getRequestLocation() {
    $qtxt = "SELECT COUNT(id) 
        FROM request";
    $command = Yii::app()->db->createCommand($qtxt);
    $request_location = $command->queryScalar();
    return $request_location;
  }

  public static function getInProcessRequest() {
    $qtxt = "SELECT count(id)
        FROM request
        WHERE status != 2 OR status != 3 ";
    $command = Yii::app()->db->createCommand($qtxt);
    $requestNo = $command->queryScalar();
    return $requestNo;
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
  public static function isActiveFromUrl($menu, $request_uri)
  {
    $_menu = $menu['url'][0];
    $request_uri = str_replace('requestView', 'location', $request_uri);
    $request_uri = str_replace('requestLocation', 'location', $request_uri);

    $pos = false;
    if ($_menu == "/") {
      $_menu = "index.php";

      $request_uri = substr($request_uri, -9);
      if ($_menu == $request_uri) {
        return true;
      }
    } 
    else if (is_array($menu) && strlen($menu['url'][0]) > 1) {
      $url = $menu['url'][0];
      $pos = strpos($request_uri, $url);
    }
    return $pos !== FALSE;
  }
}