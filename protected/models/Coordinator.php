<?php

/**
 * This is the model class for table "coordinator".
 *
 * The followings are the available columns in table 'coordinator':
 * @property string $id
 * @property string $fullname
 * @property string $position
 * @property string $tel
 * @property string $detail
 *
 * The followings are the available model relations:
 * @property Request[] $requests
 */
class Coordinator extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Coordinator the static model class
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
		return 'coordinator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fullname', 'required'),
			array('fullname, position, tel', 'length', 'max'=>255),
			array('detail', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fullname, position, tel, detail', 'safe', 'on'=>'search'),
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
			'requests' => array(self::MANY_MANY, 'Request', 'request_coordinator(coordinator_id, request_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fullname' => 'Fullname',
			'position' => 'Position',
			'tel' => 'Tel',
			'detail' => 'Detail',
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
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}