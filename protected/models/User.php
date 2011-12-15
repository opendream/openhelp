<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $group
 * @property string $type
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Webform[] $webforms
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}
	
	public function sameAttribute($attribute) {
	  if ($this->$attribute == 'admin') {
	    $this->addError($attribute, t('{attribute} already exists'));
	  }
	  
    if ($user = $this->find("$attribute=:$attribute", array(":$attribute" => $this->$attribute))) {
      if ($this->isNewRecord) {
        $this->addError($attribute, t('{attribute} already exists'), array('{attribute}' => $attribute));
  	  }
  	  else {
  	    if ($this->id != $user->id) {
  	      $this->addError($attribute, t('{attribute} already exists'), array('{attribute}' => $attribute));
  	    }
  	  }
	  }
	}


	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('username, password, email, group, type', 'length', 'max'=>128),
			array('username, email', 'sameAttribute'),
			array('email', 'CEmailValidator'),
			
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, group, type, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'webforms' => array(self::HAS_MANY, 'Webform', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'group' => 'Group',
			'type' => 'Type',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('group',$this->group,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 * Checks if the given password is correct.
	 * @param string the password to be validated
	 * @return boolean whether the password is valid
	 */
	public function validatePassword($password)
	{
		return md5($password)===$this->password;
	}
}