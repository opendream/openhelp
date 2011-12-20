<?php

class LocationMultipleWidget extends CInputWidget
{
  public $join;
  public $multiple;
  public $index;
  public $onclick;

	public function run()
	{
	  // Force to multiple
	  $this->multiple = 1;
	  
		if(!isset($this->model)){
			throw new CHttpException(500,'"model" have to be set!');
		}
		if(!isset($this->attribute)){
		  $this->attribute = 'location_id';
			//throw new CHttpException(500,'"attribute" have to be set!');
		}
		if(!isset($this->join)){
		  $this->join = 0;
	  }
	  if(!isset($this->index)){
		  $this->index = 0;
	  }
	  if(!isset($this->onclick)){
		  $this->onclick = '';
	  }
	  

		$controller=$this->controller;
		$action=$controller->action;
		$this->render('locationmultiple',array(
			"model"=>$this->model,
			"attribute"=>$this->attribute,
			"join" => $this->join,
			"multiple" => $this->multiple,
			"index" => $this->index,
			"onclick" => $this->onclick,
		));
	}
}
?>