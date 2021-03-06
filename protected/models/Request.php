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
 * @property string $extra_location0
 * @property string $extra_location1
 * @property string $extra_location2
 * @property string $extra_location3
 * @property string $extra_location4
 * @property string $extra_text0
 * @property string $extra_text1
 * @property string $extra_text2
 * @property string $extra_text3
 * @property string $extra_text4
 * @property string $extra_text5
 * @property string $extra_text6
 * @property string $extra_text7
 * @property string $extra_text8
 * @property string $extra_text9
 * @property string $extra_text10
 * @property string $extra_text11
 * @property string $extra_text12
 * @property string $extra_text13
 * @property string $extra_text14
 * @property double $extra_double0
 * @property double $extra_double1
 * @property double $extra_double2
 * @property double $extra_double3
 * @property double $extra_double4
 * @property double $extra_double5
 * @property double $extra_double6
 * @property double $extra_double7
 * @property double $extra_double8
 * @property double $extra_double9
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
			array('extra_double0, extra_double1, extra_double2, extra_double3, extra_double4, extra_double5, extra_double6, extra_double7, extra_double8, extra_double9', 'numerical'),
			array('location_id', 'length', 'max'=>20),
			array('extra_location0, extra_location1, extra_location2, extra_location3, extra_location4', 'length', 'max'=>255),
			array('detail, extra_text0, extra_text1, extra_text2, extra_text3, extra_text4, extra_text5, extra_text6, extra_text7, extra_text8, extra_text9', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_created, last_updated, location_id, locationLabel, detail, extra_location0, extra_location1, extra_location2, extra_location3, extra_location4, extra_text0, extra_text1, extra_text2, extra_text3, extra_text4, extra_double0, extra_double1, extra_double2, extra_double3, extra_double4, status', 'safe', 'on'=>'search'),
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
			'extra_location0' => 'Extra Location0',
			'extra_location1' => 'Extra Location1',
			'extra_location2' => 'Extra Location2',
			'extra_location3' => 'Extra Location3',
			'extra_location4' => 'Extra Location4',
			'extra_text0' => 'Extra Text0',
			'extra_text1' => 'Extra Text1',
			'extra_text2' => 'Extra Text2',
			'extra_text3' => 'Extra Text3',
			'extra_text4' => 'Extra Text4',
			'extra_text5' => 'Extra Text5',
			'extra_text6' => 'Extra Text6',
			'extra_text7' => 'Extra Text7',
			'extra_text8' => 'Extra Text8',
			'extra_text9' => 'Extra Text9',
			'extra_text10' => 'Extra Text10',
			'extra_text11' => 'Extra Text11',
			'extra_text12' => 'Extra Text12',
			'extra_text13' => 'Extra Text13',
			'extra_text14' => 'Extra Text14',
			'extra_double0' => 'Extra Double0',
			'extra_double1' => 'Extra Double1',
			'extra_double2' => 'Extra Double2',
			'extra_double3' => 'Extra Double3',
			'extra_double4' => 'Extra Double4',
			'extra_double5' => 'Extra Double5',
			'extra_double6' => 'Extra Double6',
			'extra_double7' => 'Extra Double7',
			'extra_double8' => 'Extra Double8',
			'extra_double9' => 'Extra Double9',
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
		$criteria->compare('extra_location0',$this->extra_location0,true);
		$criteria->compare('extra_location1',$this->extra_location1,true);
		$criteria->compare('extra_location2',$this->extra_location2,true);
		$criteria->compare('extra_location3',$this->extra_location3,true);
		$criteria->compare('extra_location4',$this->extra_location4,true);
		$criteria->compare('extra_text0',$this->extra_text0,true);
		$criteria->compare('extra_text1',$this->extra_text1,true);
		$criteria->compare('extra_text2',$this->extra_text2,true);
		$criteria->compare('extra_text3',$this->extra_text3,true);
		$criteria->compare('extra_text4',$this->extra_text4,true);
		$criteria->compare('extra_text5',$this->extra_text5,true);
		$criteria->compare('extra_text6',$this->extra_text6,true);
		$criteria->compare('extra_text7',$this->extra_text7,true);
		$criteria->compare('extra_text8',$this->extra_text8,true);
		$criteria->compare('extra_text9',$this->extra_text9,true);
		$criteria->compare('extra_text10',$this->extra_text10,true);
		$criteria->compare('extra_text11',$this->extra_text11,true);
		$criteria->compare('extra_text12',$this->extra_text12,true);
		$criteria->compare('extra_text13',$this->extra_text13,true);
		$criteria->compare('extra_text14',$this->extra_text14,true);
		$criteria->compare('extra_double0',$this->extra_double0);
		$criteria->compare('extra_double1',$this->extra_double1);
		$criteria->compare('extra_double2',$this->extra_double2);
		$criteria->compare('extra_double3',$this->extra_double3);
		$criteria->compare('extra_double4',$this->extra_double4);
		$criteria->compare('extra_double5',$this->extra_double5);
		$criteria->compare('extra_double6',$this->extra_double6);
		$criteria->compare('extra_double7',$this->extra_double7);
		$criteria->compare('extra_double8',$this->extra_double8);
		$criteria->compare('extra_double9',$this->extra_double9);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/*protected function beforeValidate()
	{
		$this->last_updated = time();
		return true;
	}

	public function behaviors()
	{
		return array(
			'timestamps' => array(
			'class' => 'zii.behaviors.CTimestampBehavior',
			//'createAttribute' => 'date_created',
			'updateAttribute' => 'last_updated',
			'setUpdateOnCreate' => true,
			),
		);
	}*/

}
