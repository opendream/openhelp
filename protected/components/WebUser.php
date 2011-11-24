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
}
?>