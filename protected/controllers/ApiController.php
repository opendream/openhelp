<?php

class ApiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column2';

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('api'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Lists all models.
	 */
	public function actionRequest($action, $id=null)
	{
    // @return teaser views
	  if ($action == 'view') {
	    # TODO: @nazt, @crosalot
	    # $data = query requests under $id of location and prepare summary data to easy view
	    $data = Request::model()->findByPk($id);
		if($data === null)
			throw new CHttpException(404,'The requested page does not exist.');
	    $result = $this->renderPartial('//request/_view', array('data'=>$data), true);
	    echo CJSON::encode($result);
	  }
	  
	  elseif ($action == 'locationIndex') {
   		$result = $this->renderPartial('//request/locationIndex', array(
   			'query'=>isset($_GET['query'])? $_GET['query']: array(),
   			'page' => isset($_GET['page'])? $_GET['page']: 0,
   			'ipp' => isset($_GET['ipp'])? $_GET['ipp']: 10,
   		), true);
   		echo $result;
	  }
	  
	  // @return list of request in json format
	  elseif ($action == 'index') {
	   $requests = Request::model()->findAll();
	   $locations = new CMap();
	   //$locations = array();
	   foreach ($requests as $request) {
	   		$locations[$request->location_id] = array('label'=>$request->location['label'], 'lat'=>$request->location['lat'], 'lng'=>$request->location['lng']);	
	   }
	   
	   echo CJSON::encode($locations->toArray());
	  }

	  elseif ($action == 'location') {
	  	$result = array();
	  	$location = Location::model()->findByPk($id);
	  	$result['location'] = $location->label;
	  	$result['requests'] = $location->requests;

	  	//get coordinators
	  	$qtxt = "SELECT distinct coordinator.fullname, coordinator.position, coordinator.tel
				 FROM location INNER JOIN request ON location.id = request.location_id
     				INNER JOIN request_coordinator ON request.id = request_coordinator.request_id
     				INNER JOIN coordinator ON request_coordinator.coordinator_id = coordinator.id
				 WHERE location.id = $id
				 ORDER BY coordinator.fullname";
      	$command = Yii::app()->db->createCommand($qtxt);
      	$coordinators = $command->queryAll();
      	$result['coordinators'] = $coordinators;
      	// get items detail
      	$qtxt = "SELECT item.id, item.name, need.amount
     			 FROM location INNER JOIN request ON location.id = request.location_id
     			 	INNER JOIN need ON request.id = need.request_id
     				INNER JOIN item ON need.item_id = item.id
     			 WHERE location.id = $id
	 			 ORDER BY item.id";
	 	$command = Yii::app()->db->createCommand($qtxt);
      	$items = $command->queryAll();
      	$result['items'] = $items;
      	
      	$qtxt = "SELECT sum(request.extra_double0) as household 
					FROM location INNER JOIN request ON location.id = request.location_id
					WHERE location.id = $id";
		$command = Yii::app()->db->createCommand($qtxt);
      	$household = $command->queryRow();
      	$result['household'] = $household;

      	$qtxt = "SELECT min(request.extra_double1) as minLevel, max(request.extra_double1) as maxLevel
				FROM location INNER JOIN request ON location.id = request.location_id
     			WHERE location.id = $id";
     	$command = Yii::app()->db->createCommand($qtxt);
     	$water_level = $command->queryRow();
      	$result['water_level'] = $water_level;

	  	echo CJSON::encode($result);
	  }

	}


}
