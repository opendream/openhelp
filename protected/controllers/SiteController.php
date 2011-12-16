<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
				'layout' => 'layout1',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		require_once('protected/controllers/WebformController.php');
	  
		$this->layout='//layouts/layout1';
	  $this->pageTitle = '';
	  
	  $levels = Yii::app()->params['location'];
	  $levels = array_combine($levels, array_fill(0, count($levels), ''));
	  $locationFilterStatus = Yii::app()->params['locationFilterStatus'];
	  
	  //$type = 'reliefsurvey';
    $types = array_keys(Yii::app()->params['webforms']);
    
    $nameAll = $filtersAll = $stylesAll = array();
	  foreach ($types as $type) {
	    $nameAll[$type] = Yii::app()->params['webforms'][$type]['name'];
  	  $filtersAll[$type] = Yii::app()->params['webforms'][$type]['filters'];
  	  $colorAll[$type] = Yii::app()->params['webforms'][$type]['color'];
      $stylesAll[$type] = WebformController::rebuildStyles(Yii::app()->params['webforms'][$type]['color']);
	  }
	  
	  $all = 1;
	  
	  $showFilter = $locationFilterStatus['all'];
	  foreach ($filtersAll as $_type => $_filters) {
	    $showFilter += $_filters['status']['all'];
	  }
	  
	  $about = isset(Yii::app()->params['about'])? Yii::app()->params['about']: '';
    
	  $this->render('//webform/index', get_defined_vars());
		
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
	  $this->layout='//layouts/layout1';
	  $this->pageTitle = t('Login');
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}

    $type = isset($_GET['type'])? $_GET['type']: '';
		// display the login form
		$this->render('login',array('model'=>$model, 'type' => $type));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

}
