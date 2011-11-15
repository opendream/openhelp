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

	}


}
