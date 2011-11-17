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
            throw new CHttpException(404,'No Data.');	   
	    $result = $this->renderPartial('//request/_view', array('data'=>$data), true);
	    echo CJSON::encode($result);
	  }
	  
	  elseif ($action == 'location') {
   		$result = $this->renderPartial('//request/location', array(
   			'query'=>isset($_GET['query'])? $_GET['query']: array(),
   			'page' => isset($_GET['page'])? $_GET['page']: 0,
   			'ipp' => isset($_GET['ipp'])? $_GET['ipp']: 10,
   		), true);
   		echo CJSON::encode($result);
	  }
	  
	  // @return list of request in json format
	  elseif ($action == 'index') {
	  	$locations = WidgetManager::getVillageByLocation();
	    echo CJSON::encode($locations);
	  } 
	  elseif ($action == 'locationView') {
	  	$locations = WidgetManager::getVillageByLocation($id);
	    echo CJSON::encode($locations);
	  }

	}


}
