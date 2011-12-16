<?php
 
// this file must be stored in:
// protected/components/WebUser.php

class WebUser extends CWebUser {
 	public $account;
 	
  function __construct() {
    parent::init();
    $this->account = User::model()->find('username=:username', array(':username' => $this->id));
  }
  
	/**
	 * @return integer the ID of the user record
	 */
	public function getIntId()
	{
	  if (Yii::app()->user->id == 'admin') {
	    return 0;
	  }
	  if ($this->isGuest) {
	    return 0;
	  }
    return $this->account->id;
	}
	
	public function inGroup($group)
	{
	  if ($this->id == 'admin') {
	    return true;
	  }
	  if ($this->account->group == 'webmaster') {
	    return true;
	  }
	  
    return $group == $this->account->group;
	}
	
	public function getGroup()
	{
	  if ($this->id == 'admin') {
	    return 'webmaster';
	  }
	  elseif ($this->isGuest) {
	    return '';
	  }
    return $this->account->group;
	}
	
	public function getType()
	{
	  if ($this->id == 'admin') {
	    return '';
	  }
	  elseif ($this->isGuest) {
	    return '';
	  }
    return $this->account->type;
	}
	
	public function can($op1, $op2, $model, $type=null, $id=null) {	  
	  if ($this->getGroup() == 'webmaster') {
	    return true;
	  }
	  
	  switch ($op1) {
	   case 'create':
       return $this->getGroup() == $model && $this->getType() == $type;
	   case 'update':
	   case 'delete':
	     if ($op2 == 'any') {
	       if ($this->getGroup() == 'webform') {
	         return false;
	       }
	       return $this->getGroup() == $model && $this->getType() == $type;
	     }
	     elseif ($op2 == 'own') {
	       if (!$id) {
	         return false;
	       }
	       $omodel = new $model;
	       return $this->getIntId() == $omodel->findByPk($id)->user_id;
	     }
	   default:
       return false;
	  }
	}
	
	public function check($op1, $op2, $model, $type=null, $id=null) {
	  if (!$this->can($op1, $op2, $model, $type, $id)) {
	    throw new CHttpException(403,'Access denine.');
	  }
	}
}
?>