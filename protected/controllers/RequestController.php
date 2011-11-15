<?php

class RequestController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Request;
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Request']))
		{
			//$model->attributes=$_POST['Request'];

			// Request Manager
			$reqManager = new RequestManager;
			$model = $reqManager->create($_POST['Request']);

			if($model->id!=null){

				$this->redirect(array('view','id'=>$model->id));
			} 
			// else {
			// 	Yii::app()->user->setFlash('error', 'save error');
			//     $this->controller->redirect(array('request/index'));
			// }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Request']))
		{
			$reqManager = new RequestManager;
			$model = $reqManager->update($model, $_POST['Request']);

			if($model->id!=null)
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$model = $this->loadModel($id);

			// RequestManager Serivce
			$reqManager = new RequestManager;
			$reqManager->delete($model);

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Request');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Request('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Request']))
			$model->attributes=$_GET['Request'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionLocation($id)
	{
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
      	
      	
      	

      	/* 	get sum from setting params
      	 *	get min from setting params
      	 *  get max from setting params
      	*/
      	$double = Yii::app()->params['request']['extra']['double'];
      	for ($i=0; $i < count($double); $i++) { 
      		if($double[$i]['func']=='sum') {
      			$params = 'request'.'extra_double'.$i;
      			$qtxt = "SELECT sum($params) as sum_extra_double$i 
					 FROM location INNER JOIN request ON location.id = request.location_id 
					 WHERE location.id = $id";
				$command = Yii::app()->db->createCommand($qtxt);
		      	$sum_result = $command->queryRow();
		      	$result['sum_'.$params] = $sum_result;
      		}
      		elseif($double[$i]['func']=='min-max') {
      			$params = 'request'.'extra_double'.$i;
      			$qtxt = "SELECT min($params) as min_extra_double$i, max($params) as max_extra_double$i
				FROM location INNER JOIN request ON location.id = request.location_id
     			WHERE location.id = $id";

		     	$command = Yii::app()->db->createCommand($qtxt);
		     	$water_level = $command->queryRow();

		      	$result['min_'.$params] = $water_level['min_extra_double$i'];
		      	$result['max_'.$params] = $water_level['max_extra_double$i'];

      		}
      	}
      	
      	/*$qtxt = "SELECT min(request.extra_double1) as minLevel, max(request.extra_double1) as maxLevel
				FROM location INNER JOIN request ON location.id = request.location_id
     			WHERE location.id = $id";
     	$command = Yii::app()->db->createCommand($qtxt);
     	$water_level = $command->queryRow();
      	$result['water_level'] = $water_level;*/

	  	echo CJSON::encode($result);	
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Request::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='request-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
