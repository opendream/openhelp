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
 * @property string $extra_text0
 * @property string $extra_text1
 * @property string $extra_text2
 * @property string $extra_text3
 * @property string $extra_text4
 * @property double $extra_double0
 * @property double $extra_double1
 * @property double $extra_double2
 * @property double $extra_double3
 * @property double $extra_double4
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Need[] $needs
 * @property Location $location
 * @property Coordinator[] $coordinators
 */
class Request extends CActiveRecord
{
	const REQUEST_STATUS_OPEN = 0;
	const REQUEST_STATUS_PROCESS = 1;
    const REQUEST_STATUS_CLOSED = 2;
    const REQUEST_STATUS_CANCELLED = 3;

    private $_locationLabel;

    public function getLocationLabel()
	{
	    if ($this->_locationLabel === null && $this->location !== null)
	    {
	        $this->_locationLabel = $this->location->label;
	    }
	    return $this->_locationLabel;
	}
	public function setLocationLabel($value)
	{
	    $this->_locationLabel = $value;
	}
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
			// array('date_created, last_updated', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('extra_double0, extra_double1, extra_double2, extra_double3, extra_double4', 'numerical'),
			array('location_id', 'length', 'max'=>20),
			array('detail, extra_text0, extra_text1, extra_text2, extra_text3, extra_text4', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_created, last_updated, location_id, locationLabel, detail, extra_text0, extra_text1, extra_text2, extra_text3, extra_text4, extra_double0, extra_double1, extra_double2, extra_double3, extra_double4, status', 'safe', 'on'=>'search'),
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
			'extra_text0' => 'Extra Text0',
			'extra_text1' => 'Extra Text1',
			'extra_text2' => 'Extra Text2',
			'extra_text3' => 'Extra Text3',
			'extra_text4' => 'Extra Text4',
			'extra_double0' => 'Extra Double0',
			'extra_double1' => 'Extra Double1',
			'extra_double2' => 'Extra Double2',
			'extra_double3' => 'Extra Double3',
			'extra_double4' => 'Extra Double4',
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
		$criteria->with = "location";
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('last_updated',$this->last_updated,true);
		$criteria->compare('location_id',$this->location_id,true);
		$criteria->compare('location.label',$this->locationLabel,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('extra_text0',$this->extra_text0,true);
		$criteria->compare('extra_text1',$this->extra_text1,true);
		$criteria->compare('extra_text2',$this->extra_text2,true);
		$criteria->compare('extra_text3',$this->extra_text3,true);
		$criteria->compare('extra_text4',$this->extra_text4,true);
		$criteria->compare('extra_double0',$this->extra_double0);
		$criteria->compare('extra_double1',$this->extra_double1);
		$criteria->compare('extra_double2',$this->extra_double2);
		$criteria->compare('extra_double3',$this->extra_double3);
		$criteria->compare('extra_double4',$this->extra_double4);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	protected function beforeValidate()
	{
		if($this->getIsNewRecord())
			$this->date_created = time();
		$this->last_updated = time();
		return true;
	}

	public function behaviors()
	{
		return array(
			'timestamps' => array(
			'class' => 'zii.behaviors.CTimestampBehavior',
			'createAttribute' => 'date_created',
			'updateAttribute' => 'last_updated',
			'setUpdateOnCreate' => true,
			),
		);
	}

}
