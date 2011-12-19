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
				'actions'=>array('index','view', 'clusterer', 'detail', 'create'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update', 'list', 'delete'),
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
	  $Webform = $model;
    ob_start();
    ob_implicit_flush(false);
    require(substr(bu(Yii::app()->params['webforms'][$type]['file']), 1));
    return ob_get_clean();
  }
  
  public function actionClusterer($color='210,100,74', $radius=40) {
    header("Pragma: public"); // required 
    header("Expires: 0"); 
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
    header("Cache-Control: private",false); // required for certain browsers
    header('Content-type: image/png');
    
    
    $this->layout='//layouts/empty';
    $radius = $radius;
    
    $image = imagecreatetruecolor($radius, $radius);
    
    $wite = imagecolorallocate($image, 254, 254, 254);
    imagecolortransparent($image, $wite);
    
    imageSmoothArc($image, $radius/2-1, $radius/2-1, $radius*2, $radius*2, array(254, 254, 254, 0), 0, 2*M_PI);
    
    
    imageSmoothArc($image, $radius/2-1, $radius/2-1, $radius-1, $radius-1, array(255, 255, 255, 0), 0, 2*M_PI);
    
    $color = explode(',', $color);
    $color[] = 0;
    imageSmoothArc($image, $radius/2-1, $radius/2-1, $radius-11, $radius-11, $color,  0, 2*M_PI);
    

    imagepng($image);
    imagedestroy($image);
  }
  
  
	public function rebuildStyles($color) {
	  return array(
      array(
        'url'=> bu("webform/clusterer?radius=35&color=$color"),
        'height'=> 35,
        'width'=> 35,
        'textColor'=> '#ffffff',
        'textSize'=> 11
      ),
      array(
        'url'=> bu("webform/clusterer?radius=40&color=$color"),
        'height'=> 40,
        'width'=> 40,
        'textColor'=> '#ffffff',
        'textSize'=> 11
      ),
      array(
        'url'=> bu("webform/clusterer?radius=50&color=$color"),
        'height'=> 50,
        'width'=> 50,
        'textColor'=> '#ffffff',
        'textSize'=> 11
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
	  
	  $model=$this->loadModel($id);
	  $type = $model->type;
	  $this->pageTitle = Yii::app()->params['webforms'][$type]['label'];
	  
	  if (Yii::app()->user->can('update', 'own', 'webform', $type, $id)) {
      $this->menu=array(
      	array('label'=>t('List'), 'url'=>array('list?type='.$type)),
      	array('label'=>t('Update'), 'url'=>array('update', 'id'=>$model->id)),
      	array('label'=>t('Delete'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id, 'type' => $type),'confirm'=>'Are you sure you want to delete this item?')),
      ); 
	  }
	  
    $data = safe_unserialize($model->data);
    $data = $data? ($data + array_fill(0, 4000, '')): array_fill(0, 4000, '');
    $this->render('view', array(
      'type' => $type, 
      'model' => $model,
      'Data' => $data,
    ));
    
	}
	


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($type)
	{
    if (!Yii::app()->user->can('create', 'own', 'webform', $type)) {
      $this->redirect('/site/login?type='.$type);
    }
	  
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
		  $model->locations = array_filter($attributes['locations']);

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
	  Yii::app()->user->check('update', 'own', 'webform', $model->type, $id);
	  
		
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
			//print_r($attributes);
			//exit();
		  
		  $attributes['type'] = $model->type;
		  $attributes['date_created'] = (isset($attributes['date_created']) && $attributes['date_created'])? $attributes['date_created']: date('Y-m-d H:i:s');
		  $attributes['last_updated'] = date('Y-m-d H:i:s');
		  $attributes['user_id'] = Yii::app()->user->getIntId();
		  $attributes['data'] = serialize($_POST['Data']);
		  //print_r(array_filter($attributes));
			$model->attributes=array_filter($attributes);
			$model->locations = array_filter($attributes['locations']);
			//print_r($model->locations);
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
    $mdata = safe_unserialize($model->data);
    $mdata = $mdata? $mdata: array();
		$this->render('create',array(
			'type' => $model->type, 
      'model' => $model,
      'Data' => $mdata + $data,
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
			
			Yii::app()->user->check('delete', 'own', 'webform', $model->type, $id);
  	  
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
	  Yii::app()->user->check('create', 'own', 'webform', $type);
	  
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
	  $this->pageTitle = Yii::app()->params['webforms'][$type]['label'];
	  
	  $levels = Yii::app()->params['location'];
	  $levels = array_combine($levels, array_fill(0, count($levels), ''));
	  $popup = Yii::app()->params['webforms'][$type]['popup'];
	  
	  $types = array($type);
	  
	  $nameAll = array($type => Yii::app()->params['webforms'][$type]['name']);
	  $filtersAll = array($type => Yii::app()->params['webforms'][$type]['filters']);
	  $colorAll = array($type => Yii::app()->params['webforms'][$type]['color']);
	  $stylesAll = array($type => self::rebuildStyles(Yii::app()->params['webforms'][$type]['color']));
	  $locationFilterStatus = Yii::app()->params['locationFilterStatus'];
	  
	  $showFilter = $locationFilterStatus['type'];
	  foreach ($filtersAll as $_type => $_filters) {
	    $showFilter += $_filters['status']['type'];
	  }
	  
	  $this->render('//webform/index', get_defined_vars());
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionDetail($id)
	{
	  $this->layout='//layouts/layout1';
	  
	  $model=$this->loadModel($id);
	  
	  $type = $model->type;
	  $this->pageTitle = Yii::app()->params['webforms'][$type]['label'];
	  
	  $filters = Yii::app()->params['webforms'][$type]['filters']['data'];
	  $sections = !empty(Yii::app()->params['webforms'][$type]['sections'])? Yii::app()->params['webforms'][$type]['sections']: 0;
	  $styles = self::rebuildStyles(Yii::app()->params['webforms'][$type]['color']);

	  $datas = array();
	  if ($sections) {
	    foreach ($sections as $name => $section) {
	      if (isset($section['url'])) {
	        $data = array();
          eval($section['data']);

          $resp = yii_http_request($section['url'], array('Content-Type' => 'application/x-www-form-urlencoded'), 'POST', http_build_query($data));
          if (trim($resp->data)) {
            $datas[$name] = $resp->data;
          }
	      }
	    }
	  }
	  

	  
    $this->render('detail', get_defined_vars());
    
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
