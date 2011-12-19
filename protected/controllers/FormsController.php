<?php
class FormsController extends Controller
{
  public $layout='//layouts/empty';
  
  public function actionLocationlistbox()
  {
    $model = isset($_REQUEST['model'])? $_REQUEST['model']:'Location';
    $model = new $model;

    $attribute = isset($_REQUEST['attribute'])? $_REQUEST['attribute']:'locaion_id';
    $join = isset($_REQUEST['join'])? $_REQUEST['join']: 0;
    $multiple = isset($_REQUEST['multiple'])? $_REQUEST['multiple']: 0;
    $onclick = isset($_REQUEST['onclick'])? $_REQUEST['onclick']: '';
    
    $query = $_REQUEST['query'];
	  $current = key($query);
	  
	  $childrenTree = explode(' ', $query[$current]['childrenLevels']);
	  
	  $children = array_shift($childrenTree);
	  // For end of level select id
	  $children = $children? $children: 'id';
	  
	  $queryTree = array_reverse(array_diff(Yii::app()->params['location'], $childrenTree));
	  

	  $where = array();
	  $from = 'location';
	  if ($join) {
	    if ($multiple) {
	      $mjoin = $join.'_location';
        $from .= ", $join, $mjoin";
        $where[] = "$mjoin.location_id = location.id";
        $where[] = "$mjoin.$join"."_id = $join.id";
	    }
	    else {
	      $from .= ", $join";
  	    $where[] = "location.id = $join.location_id";
	    }
	  }
	  foreach ($query as $key => $value) {
	    $where[] = $key." = '".$value['value']."'";
	  }
	  $where = implode(' AND ', $where);

	  $select = $children == 'id'? 'location.id': $children;
	  $qtxt = "SELECT $select FROM $from WHERE $where";

		$command = Yii::app()->db->createCommand($qtxt);
		$rows = $command->queryAll();
		$easyRows = array();
		foreach ($rows as $row) {
		  $easyRows[$row[$children]] = $row[$children];
		}
  	
  	$locationModel = new Location;
  	$this->render('locationlistbox', array(
  	  'model' => $model,
  	  'attribute' => $attribute,
  	  'locationModel' => $locationModel,
  	  'current' => $children,
  	  'rows' => $easyRows,
  	  'childrenTree' => $childrenTree,
  	  'queryTree' => $queryTree,
  	  'children' => empty($childrenTree)? 'id': $childrenTree[0],
  	  'join' => $join,
  	  'multiple' => $multiple,
  	  'onclick' => $onclick,
  	));
	
  
  }
  
  public function actionGetLocationFromLevels() {
    $levels = $_GET['levels'];
    $model = $_GET['model'];
    $join = isset($_GET['join'])? $_GET['join']: '';
    
    
    $where = '1';
    foreach ($levels as $level => $value) {
      $where .= " AND $level = '$value'";
    }
    $qtxt = "SELECT id FROM location WHERE $where";
    $command = Yii::app()->db->createCommand($qtxt);
    $locations = (object) $command->queryAll();
        
    $output = $this->render('locationselected', array('model' => $model, 'locations' => $locations, 'join' => $join), true);
    if ($_GET['json']) {
      echo CJSON::encode($output);
    }
    else {
      echo $output;
    }
  	
  }
  
}