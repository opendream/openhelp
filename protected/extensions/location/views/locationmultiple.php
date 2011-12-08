<?php


$this->render('locationlist',array(
	"model"=>$model,
	"attribute"=>$attribute,
	"join" => $join,
	"multiple" => $multiple,
	"index" => $index,
	"onclick" => $onclick,
));

?>