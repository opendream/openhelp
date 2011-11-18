<?php

class PageController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/layout1';


	/**
	 * Lists all models.
	 */
	public function actionView($url)
	{
	  $html = file_get_contents(substr(bu(Yii::app()->params['pages'][$url]['file']), 1));
    $this->render('view', array('html' => $html));
	}


}
