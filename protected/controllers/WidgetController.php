<?php

class WidgetController extends Controller {

  public function actionAll() {
    require_once('protected/controllers/WebformController.php');
	  
		$this->layout='//layouts/widget';
	  $this->pageTitle = '';
	  
	  $levels = Yii::app()->params['location'];
	  $levels = array_combine($levels, array_fill(0, count($levels), ''));
	  $locationFilterStatus = Yii::app()->params['locationFilterStatus'];
	  
	  //$type = 'reliefsurvey';
    $types = array_reverse(array_keys(Yii::app()->params['webforms']));
    
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
    
	  $output = $this->render('//webform/index', get_defined_vars(), true);
	  if (isset($_GET['callback'])) {
	    print $_GET['callback'].'('.CJSON::encode($output).')';
	  }
	  elseif (isset($_GET['var'])) {
	    print $_GET['var'].' = '.CJSON::encode($output);
	  }
	  else {
	    echo $output;
	  }
  }

}