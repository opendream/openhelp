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
				'actions'=>array('index','view', 'locationView', 'locationView2', 'LocationMultiple', 'requestView', 'location'),
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
	
	/**
	 * Lists all models.
	 */
	public function actionLocation()
	{
	  $this->layout='layout1';
	  $this->pageTitle = t('database');
	  
		$this->render('location', array(
 			'page' => isset($_GET['page'])? $_GET['page']: 0,
 			'ipp' => isset($_GET['ipp'])? $_GET['ipp']: 15,
 			'search' => true,
 		));
	}


	/**
	 *  LocationView [level 1]
	 */

	public function actionLocationView($id, $village=null)
	{
	 	 $this->layout='layout1';
	  
		$items = WidgetManager::getItemDetails($id);
		$coordinators = WidgetManager::getCoordinators($id);
		$location_text = LocationHtml::locationView($id, array('style' => 'reverse'));
		$extraLocation0s = WidgetManager::getExtraLocation0s($id, true);
		$allExtraTexts = WidgetManager::getAllExtratexts($id);
		$post_date = WidgetManager::getDateByLocation($id, $village);
		$last_updated = $post_date[0]['last_updated'];
		$cdate = explode(" ", $last_updated);
		$cdate = $cdate[0];
		$sdate = explode("-", $cdate);

		$extraDouble = array(
			'sum' => WidgetManager::getSumExtraDouble($id),
			'water_level' => WidgetManager::getMinMaxExtraDouble($id),
		);
		$params = array(
			'items' => $items, 
			'coordinators' => $coordinators, 
			'location_text' => $location_text,
			'location_extra0s' => $extraLocation0s,
			'extraDouble' => $extraDouble,
			'location_id' => $id,
			'allExtraTexts' => $allExtraTexts,			
			'sdate' => $sdate,
		);
		$this->pageTitle = strip_tags($location_text);
		$this->render('locationView', $params);
	}
	
	public function locationAPI($id, $village=null)
	{
	  
		$items = WidgetManager::getItemDetails($id);
		$coordinators = WidgetManager::getCoordinators($id);
		$location_text = LocationHtml::locationView($id, array('style' => 'reverse'));
		$extraLocation0s = WidgetManager::getExtraLocation0s($id, true);
		$allExtraTexts = WidgetManager::getAllExtratexts($id);
		$post_date = WidgetManager::getDateByLocation($id, $village);
		$last_updated = $post_date[0]['last_updated'];
		$cdate = explode(" ", $last_updated);
		$cdate = $cdate[0];
		$sdate = explode("-", $cdate);

		$extraDouble = array(
			'sum' => WidgetManager::getSumExtraDouble($id),
			'water_level' => WidgetManager::getMinMaxExtraDouble($id),
		);
		$params = array(
			'items' => $items, 
			'coordinators' => $coordinators, 
			'location_text' => $location_text,
			'location_extra0s' => $extraLocation0s,
			'extraDouble' => $extraDouble,
			'location_id' => $id,
			'allExtraTexts' => $allExtraTexts,			
			'sdate' => $sdate,
		);
		$this->pageTitle = strip_tags($location_text);
		return $this->renderPartial('locationView2', $params, true);
	}
	
	public function actionLocationMultiple() {
	  $locations = $_REQUEST['locations'];
	  $name = $_REQUEST['name'];
	  $whereList = array();
	  foreach ($locations as $location) {
	    $whereLocation = array();
	    foreach ($location as $level => $value) {
	      $whereLocation[] = "$level = '$value'";
	    }
	    $whereList[] = '('.implode(' AND ', $whereLocation).')';
	  }
	  $where = implode(' OR ', $whereList);
	  
	  //$selectList = Yii::app()->params['locationDisplay'];
	  //$select = implode(', ', $selectList);
	  
	  $qtxt = "SELECT location.id FROM location, request WHERE location.id = request.location_id AND $where";
    $command = Yii::app()->db->createCommand($qtxt);
    $list = $command->queryAll();
    
    $items = array();
    foreach ($list as $location) {
      $items[$location['id']] = array(
        'label' => LocationHtml::locationView($location['id'], array('style' => 'pain')),
        'html' => self::locationAPI($location['id'])
      );
    }
    $this->renderPartial('_locationMultiple', array('name' => $name, 'items' => $items));
	}
	

	public function actionRequestView($id)
	{
	  $this->layout='layout1';
	  $rid = isset($_GET['rid'])? $_GET['rid']: null;
	  $village = isset($_GET['village'])? $_GET['village']: null;
		$items = WidgetManager::getItemDetails($id, $village, $rid);
		$coordinators = WidgetManager::getCoordinators($id, $village, $rid);
		$location_text = LocationHtml::locationView($id, array('style' => 'reverse'));
		$extraLocation0s = WidgetManager::getExtraLocation0s($id);
		$allExtraTexts = WidgetManager::getAllExtratexts($id, $village, $rid);
		$post_date = WidgetManager::getDateByLocation($id, $village, $rid);
		$last_updated = $post_date[0]['last_updated'];
		$cdate = explode(" ", $last_updated);
		$cdate = $cdate[0];
		$sdate = explode("-", $cdate);


		$extraDouble = array(
			'sum' => WidgetManager::getSumExtraDouble($id),
			'water_level' => WidgetManager::getMinMaxExtraDouble($id),
		);
		$params = array(
			'items' => $items, 
			'coordinators' => $coordinators, 
			'location_text' => $location_text,
			'location_extra0s' => $extraLocation0s,
			'extraDouble' => $extraDouble,
			'location_id' => $id,
			'allExtraTexts' => $allExtraTexts,
			'sdate' => $sdate,
		);
		$this->pageTitle = strip_tags($location_text);
		$this->render('requestView', $params);
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
