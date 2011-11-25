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
 * @property string $filter0
 * @property string $filter1
 * @property string $filter2
 * @property string $filter3
 * @property string $filter4
 * @property string $filter5
 * @property string $filter6
 * @property string $filter7
 * @property string $filter8
 * @property string $filter9
 * @property string $filter10
 * @property string $filter11
 * @property string $filter12
 * @property string $filter13
 * @property string $filter14
 *
 * The followings are the available model relations:
 * @property Location $location
 * @property User $user
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
			array('filter0, filter1, filter2, filter3, filter4, filter5, filter6, filter7, filter8, filter9, filter10, filter11, filter12, filter13, filter14', 'length', 'max'=>128),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, date_created, last_updated, user_id, location_id, data, filter0, filter1, filter2, filter3, filter4, filter5, filter6, filter7, filter8, filter9, filter10, filter11, filter12, filter13, filter14', 'safe', 'on'=>'search'),
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
			'location' => array(self::BELONGS_TO, 'Location', 'location_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
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
			'filter0' => 'Filter0',
			'filter1' => 'Filter1',
			'filter2' => 'Filter2',
			'filter3' => 'Filter3',
			'filter4' => 'Filter4',
			'filter5' => 'Filter5',
			'filter6' => 'Filter6',
			'filter7' => 'Filter7',
			'filter8' => 'Filter8',
			'filter9' => 'Filter9',
			'filter10' => 'Filter10',
			'filter11' => 'Filter11',
			'filter12' => 'Filter12',
			'filter13' => 'Filter13',
			'filter14' => 'Filter14',
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
		$criteria->compare('filter0',$this->filter0,true);
		$criteria->compare('filter1',$this->filter1,true);
		$criteria->compare('filter2',$this->filter2,true);
		$criteria->compare('filter3',$this->filter3,true);
		$criteria->compare('filter4',$this->filter4,true);
		$criteria->compare('filter5',$this->filter5,true);
		$criteria->compare('filter6',$this->filter6,true);
		$criteria->compare('filter7',$this->filter7,true);
		$criteria->compare('filter8',$this->filter8,true);
		$criteria->compare('filter9',$this->filter9,true);
		$criteria->compare('filter10',$this->filter10,true);
		$criteria->compare('filter11',$this->filter11,true);
		$criteria->compare('filter12',$this->filter12,true);
		$criteria->compare('filter13',$this->filter13,true);
		$criteria->compare('filter14',$this->filter14,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}