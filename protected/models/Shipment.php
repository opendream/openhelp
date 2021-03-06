<?php

/**
 * This is the model class for table "shipment".
 *
 * The followings are the available columns in table 'shipment':
 * @property string $id
 * @property string $transporter_id
 * @property string $vehicle_id
 * @property integer $amount
 * @property string $need_id
 *
 * The followings are the available model relations:
 * @property Transporter $transporter
 * @property Vehicle $vehicle
 * @property Need $need
 */
class Shipment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Shipment the static model class
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
		return 'shipment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transporter_id, vehicle_id, need_id', 'required'),
			array('amount', 'numerical', 'integerOnly'=>true),
			array('transporter_id, vehicle_id, need_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transporter_id, vehicle_id, amount, need_id', 'safe', 'on'=>'search'),
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
			'transporter' => array(self::BELONGS_TO, 'Transporter', 'transporter_id'),
			'vehicle' => array(self::BELONGS_TO, 'Vehicle', 'vehicle_id'),
			'need' => array(self::BELONGS_TO, 'Need', 'need_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'transporter_id' => 'Transporter',
			'vehicle_id' => 'Vehicle',
			'amount' => 'Amount',
			'need_id' => 'Need',
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
		$criteria->compare('transporter_id',$this->transporter_id,true);
		$criteria->compare('vehicle_id',$this->vehicle_id,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('need_id',$this->need_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}