<?php

class ExportController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/empty';

	/**
	 * Lists all models.
	 */
	public function actionLocation($id)
	{
	  
	  header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=".LocationHtml::locationView($id, array('style' => 'pain')).".csv");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    foreach(WidgetManager::getRequestReport($id) as $row) {
      $rowList = array();
      foreach ($row as $col => $value) {
        $rowList[] = '"'.str_replace('"', '\"', $value).'"';
      }
      echo implode(',', $rowList)."\n";
    }
	  exit();
	}



}
