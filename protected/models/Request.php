<?php

/**
 * This is the model class for table "request".
 *
 * The followings are the available columns in table 'request':
 * @property string $id
 * @property string $date_created
 * @property string $last_updated
 * @property string $location_id
 * @property string $detail
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Need[] $needs
 * @property Location $location
 * @property Coordinator[] $coordinators
 */
class Request extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Request the static model class
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
		return 'request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_created, last_updated', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('location_id', 'length', 'max'=>20),
			array('detail', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_created, last_updated, location_id, detail, status', 'safe', 'on'=>'search'),
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
			'needs' => array(self::HAS_MANY, 'Need', 'request_id'),
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'coordinators' => array(self::MANY_MANY, 'Coordinator', 'request_coordinator(request_id, coordinator_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date_created' => 'Date Created',
			'last_updated' => 'Last Updated',
			'location_id' => 'Location',
			'detail' => 'Detail',
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
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('location_id',$this->location_id,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}