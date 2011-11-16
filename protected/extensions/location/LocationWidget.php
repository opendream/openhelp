<?php

class LocationWidget extends CInputWidget
{

	public function run()
	{
		if(!isset($this->model)){
			throw new CHttpException(500,'"model" have to be set!');
		}
		if(!isset($this->attribute)){
		  $this->attribute = 'location_id';
			//throw new CHttpException(500,'"attribute" have to be set!');
		}

		$controller=$this->controller;
		$action=$controller->action;
		$this->render('locationlist',array(
			"model"=>$this->model,
			"attribute"=>$this->attribute,
		));
	}
}
?>