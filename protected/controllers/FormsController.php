<?php
class FormsController extends Controller
{
  public $layout='//layouts/empty';
  
  public function actionLocationlistbox($model)
  {
    $model = new $model;

    $field = isset($_GET['field'])? $_GET['field']:'locaion_id';
    
    $query = $_GET['query'];
	  $current = key($query);
	  
	  $childrenTree = explode(' ', $query[$current]['childrenLevels']);
	  
	  $children = array_shift($childrenTree);
	  // For end of level select id
	  $children = $children? $children: 'id';
	  
	  $queryTree = array_reverse(array_diff(Yii::app()->params['location'], $childrenTree));
	  

	  $where = array();
	  foreach ($query as $key => $value) {
	    $where[] = $key." = '".$value['value']."'";
	  }
	  $where = implode(' AND ', $where);
	  
	  $qtxt = "SELECT $children FROM location WHERE $where";

		$command = Yii::app()->db->createCommand($qtxt);
		$rows = $command->queryAll();
		$easyRows = array();
		foreach ($rows as $row) {
		  $easyRows[$row[$children]] = $row[$children];
		}
  	
  	$locationModel = new Location;
  	$this->render('locationlistbox', array(
  	  'model' => $model,
  	  'field' => $field,
  	  'locationModel' => $locationModel,
  	  'current' => $children,
  	  'rows' => $easyRows,
  	  'childrenTree' => $childrenTree,
  	  'queryTree' => $queryTree,
  	  'children' => empty($childrenTree)? 'id': $childrenTree[0],
  	));
	
  
  }
  
}