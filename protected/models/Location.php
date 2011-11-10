<?php

/**
 * This is the model class for table "location".
 *
 * The followings are the available columns in table 'location':
 * @property string $id
 * @property string $level0
 * @property string $level1
 * @property string $level2
 * @property string $level3
 * @property string $level4
 * @property string $level5
 * @property string $label
 * @property string $lat
 * @property string $lng
 *
 * The followings are the available model relations:
 * @property Donator[] $donators
 * @property Request[] $requests
 * @property Transporter[] $transporters
 */
class Location extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Location the static model class
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
		return 'location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('level0, level1, level2, level3, level4, level5, label, lat, lng', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, level0, level1, level2, level3, level4, level5, label, lat, lng', 'safe', 'on'=>'search'),
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
			'donators' => array(self::HAS_MANY, 'Donator', 'location_id'),
			'requests' => array(self::HAS_MANY, 'Request', 'location_id'),
			'transporters' => array(self::HAS_MANY, 'Transporter', 'location_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'level0' => 'Level0',
			'level1' => 'Level1',
			'level2' => 'Level2',
			'level3' => 'Level3',
			'level4' => 'Level4',
			'level5' => 'Level5',
			'label' => 'Label',
			'lat' => 'Lat',
			'lng' => 'Lng',
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
		$criteria->compare('level0',$this->level0,true);
		$criteria->compare('level1',$this->level1,true);
		$criteria->compare('level2',$this->level2,true);
		$criteria->compare('level3',$this->level3,true);
		$criteria->compare('level4',$this->level4,true);
		$criteria->compare('level5',$this->level5,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lng',$this->lng,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}