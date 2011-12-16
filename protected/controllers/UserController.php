<?php

class UserController extends Controller
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
				'actions'=>array('index','view', 'registration', 'recovery', 'activation', 'resendactivation'),
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
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
		  $attributes = $_POST['User'];
		  $attributes['password'] = md5($attributes['password']);
			$model->attributes=$attributes;
			if($model->save())
				$this->redirect(array('create'));
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

		if(isset($_POST['User']))
		{
		  $attributes = $_POST['User'];
  		$attributes['password'] = ($attributes['password'] != $model->password)? md5($attributes['password']): $model->password;
			$model->attributes=$attributes;
			
			if($model->save())
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
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

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
		$model=User::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function sendMail($to) {
	  $header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$header .= 'From: ' . $to['from'] . "\r\n";
		$header .= 'To: ' . $to['to'] . "\r\n";
	  return mail($to['to'], $to['subject'], $to['body'], $header);
	}
	
	public function actionRegistration() {
	  
	  $this->layout = '//layouts/layout1';
	  $this->pageTitle = t('Registration');
	  
	  $model = new User;

		$this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
		  $attributes = $_POST['User'];
		  $attributes['status'] = 0;
		  $attributes['group'] = 'webform';
		  $attributes['password'] = md5($attributes['password']);
		  
			$model->attributes = $attributes;
			
			if($model->save()) {
			  // Send email			  
			  $body = t('Verify your account "{username}" on {server} link {activation_url}', 'locale', array(
			    '{username}' => $model->username,
			    '{server}' => $_SERVER['SERVER_NAME'],
			    '{activation_url}' => au('user/activation?username='.$model->username.'&key='.md5($model->username.Yii::app()->params['salt']))
			  ));			  
  			$mail = array(
					'from' => Yii::app()->params['siteEmail'],
					'to' => $model->email,
					'subject' => t('Verify your account.'),
					'body' => $body,
  			);
  			self::sendMail($mail);
			  
			  Yii::app()->user->setFlash('success', t('Thank you for your registration. Please check your email for confirm your email.'));
			  $this->redirect(array('/site/login'));
			}
			else {
			  $model->password = $_POST['User']['password'];
			}
			  
		}
    
    $types = array();
    foreach(Yii::app()->params['webforms'] as $type => $value) {
      $types[$type] = $value['name'];
    }
    $showType = !(isset($_GET['type']) && in_array($_GET['type'], array_keys($types)));

		$this->render('registration', get_defined_vars());
		
	}

	public function actionActivation($username, $key) {
		if (!Yii::app()->user->isGuest) {
			Yii::app()->user->setFlash('error', t('You are already logged in, please log out to activate your account'));
			$this->redirect(Yii::app()->user->returnUrl);
		}
    
    if ($key == md5($username.Yii::app()->params['salt'])) {
      $model = new User;
      $model->find('username=:username', array(':username' => $username));
      if (!$model) {
        Yii::app()->user->setFlash('error', t('Invalid username "{username}"', 'locale', array('{username}' => $username)));
        $this->redirect(Yii::app()->user->returnUrl);
      }
      $model->status = 1;
      $model->save();
      Yii::app()->user->setFlash('success', t('Your account "{username}" has been completed. Please, login to join with {sitename}.', 'locale', array(
        '{username}' => $username,
        '{sitename}' => Yii::app()->params['siteName'],
      )));
      $this->redirect(array('/site/login'));
		  
    }
	}
	
	public function actionRecovery() {
    $this->layout = '//layouts/layout1';
	  $this->pageTitle = t('Recovery');
	  
	  $model = new User;

		if(isset($_POST['User'])) {
		  
		  $attributes = $_POST['User'];
		  
  	  $model = User::model()->find('username=:username', array(':username' => $attributes['username']));
  	  
  	  if (!$model) {
  	    $model = new User;
  	    $model->attributes = $_POST['User'];
  	    Yii::app()->user->setFlash('error', t('Invalid username "{username}".', 'locale', array('{username}' => $attributes['username'])));
  	  }
  	  else {
  	    $body = t('Change password account, "{username}" on {server}. Your new password is "{password}" ,confirm link {activation_url}', 'locale', array(
			    '{username}' => $model->username,
			    '{server}' => $_SERVER['SERVER_NAME'],
			    '{password}' => $attributes['password'],
			    '{activation_url}' => au('user/activation?username='.$model->username.'&password='.md5($attributes['password']).'&key='.md5($model->username.Yii::app()->params['salt']))
			  ));			  
  			$mail = array(
					'from' => Yii::app()->params['siteEmail'],
					'to' => $model->email,
					'subject' => t('Verify change password.'),
					'body' => $body,
  			);
  			self::sendMail($mail);
  			Yii::app()->user->setFlash('error', t('Please check your email for confirm new password.'));
  			$this->redirect('/site/login');
  	  }
			  
		}

		$this->render('recovery', get_defined_vars());

	}

}
