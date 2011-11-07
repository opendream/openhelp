<?php
class FormsController extends Controller
{
  public $layout='//layouts/empty';
  
  public function actionLocationlistbox($level, $value)
  {
	  $level = str_replace('level', '', $level);
	  $current = 'level'. ($level);
	  $children = 'level'. ($level+1);
	  
	  $address = Yii::app()->params['location'];
	  $firstLevelCol = $address[0];
	  $endLevelCol = end($address);
	  
	  if ($current == $endLevelCol) {
	   $qtxt = "SELECT id FROM location WHERE ";
	  }
	  else {
  	  $qtxt = "SELECT DISTINCT $firstLevelCol FROM location";
  		$command = Yii::app()->db->createCommand($qtxt);
  		$firstLevelRows = $command->queryAll();
  		foreach ($firstLevelRows as $row) {
  		  $firstLevel[$row[$firstLevelCol]] = $row[$firstLevelCol];
  		}
  			  
  	  $qtxt = "SELECT $children FROM location WHERE $current = '$value'";
  		$command = Yii::app()->db->createCommand($qtxt);
  		$rows = $command->queryAll();
  		$easyRows = array();
  		foreach ($rows as $row) {
  		  $easyRows[$row[$children]] = $row[$children];
  		}
		
  		$model = new Request;
    	$locationModel = new Location;
    	$this->render('locationlistbox', array(
    	  'model' => $model,
    	  'locationModel' => $locationModel,
    	  'firstLevel' => $firstLevel,
    	  'address' => $children,
    	  'rows' => $easyRows,
    	));
	  }
  
  }
}