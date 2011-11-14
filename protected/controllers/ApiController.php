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
	  // TODO: return json for render map
	  // @author p'Boy
	  // @author crosalot

    // @return teaser views
	  if ($action == 'view') {
	    # $model = Request::model()->findByPk($id);
	    # $data = $this->renderPartial('request._view', array('model'=>$model), true);
	    # echo CJSON::encode($data);
	  }
	  
	  // @return list of request in json format
	  elseif ($action == 'index') {
	   Request::model()->findAll();
	   # echo CJSON::encode($dataProvider);
	  }

	}


}
