<?php
 
// this file must be stored in:
// protected/components/WebUser.php
 
class WebUser extends CWebUser {
 	
	/**
	 * @return integer the ID of the user record
	 */
	public function getIntId()
	{
	  if (Yii::app()->user->id == 'admin') {
	    return 0;
	  }
	  $user = User::model()->findByAttributes(array('username' =>Yii::app()->user->id));
    return $user->id;
	}
	
	public function inGroup($group)
	{
	  if (Yii::app()->user->id == 'admin') {
	    return true;
	  }
	  $user = User::model()->findByAttributes(array('username' =>Yii::app()->user->id));
	  if ($user->group == 'webmaster') {
	    return true;
	  }
	  
    return $group == $user->group;
	}
	
	public function getGroup()
	{
	  if (Yii::app()->user->id == 'admin') {
	    return 'webmaster';
	  }
	  $user = User::model()->findByAttributes(array('username' =>Yii::app()->user->id));

    return $user->group;
	}
}
?>