<?php
class FormsController extends Controller
{
  public $layout='//layouts/empty';
  
  public function actionLocationlistbox($model)
  {
    $model = new $model;

    $attribute = isset($_GET['attribute'])? $_GET['attribute']:'locaion_id';
    $join = isset($_GET['join'])? $_GET['join']: 0;
    $multiple = isset($_GET['multiple'])? $_GET['multiple']: 0;
    
    $query = $_GET['query'];
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

	  
	  $qtxt = "SELECT $children FROM $from WHERE $where";

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
  	));
	
  
  }
  
}