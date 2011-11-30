<?php

class WebformController extends Controller
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
				'actions'=>array('create','update', 'list', 'delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function getWebForm($type, $model, $Data) {
    ob_start();
    ob_implicit_flush(false);
    require(substr(bu(Yii::app()->params['webforms'][$type]['file']), 1));
    return ob_get_clean();
  }

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
	  $this->layout='//layouts/layout1';
	  
	  $model=$this->loadModel($id);
	  $this->pageTitle = Yii::app()->params['webforms'][$model->type]['label'];
	  
	  //print_r(unserialize($model->data)+array_fill(0, 4000, ''));

    $this->render('view', array(
      'type' => $model->type, 
      'model' => $model,
      'Data' => unserialize($model->data) + array_fill(0, 4000, ''),
    ));
    
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($type)
	{
	  $this->layout='//layouts/layout1';
	  $this->pageTitle = t('Create').' '.Yii::app()->params['webforms'][$type]['label'];
	  $this->menu=array(
    	array('label'=>t('List'), 'url'=>array('list?type='.$type)),
    );
	  
	  $model = new Webform;
	  
	  $data = array_fill(0, 4000, '');
		if(isset($_POST['Webform']))
		{
		  $attributes = $_POST['Webform'];
		  $attributes['type'] = $type;
		  $attributes['date_created'] = (isset($attributes['date_created']) && $attributes['date_created'])? $attributes['date_created']: date('Y-m-d H:i:s');
		  $attributes['last_updated'] = date('Y-m-d H:i:s');
		  $attributes['user_id'] = Yii::app()->user->getIntId();
		  $attributes['data'] = serialize($_POST['Data']);
			$model->attributes=array_filter($attributes);
			//print_r($attributes);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
    $this->render('create', array(
      'type' => $type, 
      'model' => $model,
      'Data' => $data,
    ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
	  $this->layout='//layouts/layout1';
	  
	  $model=$this->loadModel($id);
		if (Yii::app()->user->getGroup() == 'webform' && $model->user_id != Yii::app()->user->getIntId()) {
	    $this->redirect(array('list?type='.$type));
	    exit();
	  }
		
	  $this->pageTitle = t('Update').' '.Yii::app()->params['webforms'][$model->type]['label'];
	  $this->menu=array(
    	array('label'=>t('List'), 'url'=>array('list?type='.$model->type)),
    	array('label'=>t('Create'), 'url'=>array('create?type='.$model->type)),
    	array('label'=>t('View'), 'url'=>array('view', 'id'=>$model->id)),
    	array('label'=>t('Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id, 'type' => $model->type),'confirm'=>'Are you sure you want to delete this item?')),
    	
    );
    

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
    $data = array_fill(0, 4000, '');
		if(isset($_POST['Webform']))
		{
			$attributes = $_POST['Webform'];
		  $attributes['type'] = $model->type;
		  $attributes['date_created'] = (isset($attributes['date_created']) && $attributes['date_created'])? $attributes['date_created']: date('Y-m-d H:i:s');
		  $attributes['last_updated'] = date('Y-m-d H:i:s');
		  $attributes['user_id'] = Yii::app()->user->getIntId();
		  $attributes['data'] = serialize($_POST['Data']);
		  //print_r(array_filter($attributes));
			$model->attributes=array_filter($attributes);
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'type' => $model->type, 
      'model' => $model,
      'Data' => unserialize($model->data) + $data,
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
			if (Yii::app()->user->getGroup() == 'webform' && $model->user_id != Yii::app()->user->getIntId()) {
  	    $this->redirect(array('list?type='.$type));
  	    exit();
  	  }
  	  
  	  $model->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('list?type='.$_REQUEST['type']));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionList($type)
	{
	  $this->layout='//layouts/layout1';
	  $user = Yii::app()->user;
	  $this->pageTitle = Yii::app()->params['webforms'][$type]['label'];
		$condition = "type='$type'";
		
		if ($user->getGroup() == 'webform') {
		  $user_id = $user->getIntId();
		  $condition .= " AND user_id=$user_id";
		}
		
		$dataProvider=new CActiveDataProvider('Webform', array(
		  'criteria'=>array(
        'condition'=>$condition,
        'order'=>'date_created DESC',
      ),
		));
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
			'type'=>$type,
		));
	}
	
	/**
	 * Lists all models.
	 */
	public function actionIndex($type)
	{
	  $this->layout='//layouts/layout1';
	  
	  
	  $filters = Yii::app()->params['webforms'][$type]['filters'];
	  $filters['type'] = $type;
	  $this->render('//webform/index', get_defined_vars());
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Webform('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Webform']))
			$model->attributes=$_GET['Webform'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Webform::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='webform-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
