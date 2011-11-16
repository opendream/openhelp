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
	public function actionLocation()
	{
	  $rows = array(
      array('col0' => '0-0', 'col1' => '0-1', 'col1' => '0-2'), 
      array('col0' => '1-0', 'col1' => '1-1', 'col1' => '1-2'),
      array('col0' => '2-0', 'col1' => '2-1', 'col1' => '2-2'),
    );
	  $this->export($rows);
	}
	
	public function export($rows, $addHeader=false, $sCol=',', $sRow="\n")
	{
    
    // Header ============================================
    if ($addHeader) {
      $labels = array(
        'coordinators' => Yii::t('locale', 'Coordinators'),
        'needs'        => Yii::t('locale', 'Needs'),
        'date_created' => Yii::t('locale', 'Date Created'),
        'last_updated' => Yii::t('locale', 'Last Updated'),
        'status'       => Yii::t('locale', 'Status'),
      );
      foreach(Yii::app()->params['location'] as $key) {
        $labels[$key] = Yii::t('locale', $key);
      }
      foreach (Yii::app()->params['extra_location'] as $key => $value) {
        $labels['extra_location'.$key] = $value['label'];
      }
      foreach (Yii::app()->params['extra_double'] as $key => $value) {
        $labels['extra_double'.$key] = $value['label'];
      }
      foreach (Yii::app()->params['extra_text'] as $key => $value) {
        $labels['extra_text'.$key] = $value['label'];
      }

      $first = current($rows);
      $header = array();
      foreach ($first as $col => $value) {
        $header[$col] = isset($labels[$col])? $labels[$col]: $col;
      }
      $header['end'] = '""';
      $rows = $header + $rows;
    }

    
    // Data ============================================    
    foreach ($rows as $row) {
      foreach ($row as $col => $value) {
        if (is_array($value)) {
          $this->export($value, false, ':', '/');
        }
        else {
          echo '"'.$value.'"'.$sCol;
        }
      }
      echo '""'.$sRow;
    }
  }


}