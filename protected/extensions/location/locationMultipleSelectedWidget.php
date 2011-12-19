<?php

class LocationMultipleSelectedWidget extends CInputWidget
{
  public $locations;
  public $model;
  public $join;

	public function run()
	{
		$this->render('locationselected',array(
		  "model" => $this->model,
			"locations"=>$this->locations,
			"join"=>$this->join,
		));
	}
}
?>