<?php

/**
 * This is the model class for table "webform".
 *
 * The followings are the available columns in table 'webform':
 * @property string $id
 * @property string $type
 * @property string $date_created
 * @property string $last_updated
 * @property string $user_id
 * @property string $location_id
 * @property string $data
 *
 * The followings are the available model relations:
 * @property User $user
 * @property Location $location
 */
class Webform extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Webform the static model class
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
		return 'webform';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, date_created, last_updated', 'required'),
			array('type', 'length', 'max'=>60),
			array('user_id, location_id', 'length', 'max'=>20),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, date_created, last_updated, user_id, location_id, data', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'type' => 'Type',
			'date_created' => 'Date Created',
			'last_updated' => 'Last Updated',
			'user_id' => 'User',
			'location_id' => 'Location',
			'data' => 'Data',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('location_id',$this->location_id,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}