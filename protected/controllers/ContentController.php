<?php

class ContentController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/layout1';

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
	  $this->layout='//layouts/layout1';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($type)
	{
		$model=new Content;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Content']))
		{
			$model->attributes=$_POST['Content'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		
		$model->type = $type;
		$model->last_updated = $model->date_created = date('Y-m-d H:i:s');

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

		if(isset($_POST['Content']))
		{
			$model->attributes=$_POST['Content'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		
		$model->last_updated = date('Y-m-d H:i:s');

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
			$this->loadModel($id)->delete();

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
	  $this->layout='//layouts/layout1';

	  $type = isset($_GET['type'])? $_GET['type']: null;
	  
	  if ($type && !isset(Yii::app()->params['content'][$type])) {
	    throw new CHttpException(400,'Invalid request. Please do not repeat this request again.'); 
	  }
	  
	  if ($type) {
	    $contentConf = Yii::app()->params['content'][$type];
	    $contentConf['type'] = $type;
  	  $contentConf['name'] = isset($contentConf['name'])? $contentConf['name']: $type;
  	  $contentConf['detail'] = isset($contentConf['detail'])? $contentConf['detail']: '';
	  }
	  else {
	    $contentConf = array('name' => Yii::t('locale', 'Contents'), 'detail' => '');
	  }
	  
	  $this->pageTitle = $contentConf['name'];

	  
	  
	  $options = array(
		  'criteria'=>array(
        'order'=>'date_created DESC',
        //'with'=>array('title', 'date_created', 'detail'),
      ),
      'pagination'=>array(
        'pageSize'=>20,
      )
    );
    
    if ($type) {
      $options['criteria']['condition'] = "type='$type'";
    }
    
		$dataProvider=new CActiveDataProvider('Content', $options);
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'contentConf'=>$contentConf,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Content('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Content']))
			$model->attributes=$_GET['Content'];

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
		$model=Content::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='content-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
