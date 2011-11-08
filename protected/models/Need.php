<?php

/**
 * This is the model class for table "need".
 *
 * The followings are the available columns in table 'need':
 * @property string $id
 * @property string $item_id
 * @property integer $amount
 * @property string $detail
 * @property string $request_id
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property DonatedItem[] $donatedItems
 * @property Item $item
 * @property Request $request
 * @property Shipment[] $shipments
 */
class Need extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Need the static model class
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
		return 'need';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, request_id, status', 'required'),
			array('amount, status', 'numerical', 'integerOnly'=>true),
			array('item_id, request_id', 'length', 'max'=>20),
			array('detail', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, amount, detail, request_id, status', 'safe', 'on'=>'search'),
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
			'donatedItems' => array(self::HAS_MANY, 'DonatedItem', 'need_id'),
			'item' => array(self::BELONGS_TO, 'Item', 'item_id'),
			'request' => array(self::BELONGS_TO, 'Request', 'request_id'),
			'shipments' => array(self::HAS_MANY, 'Shipment', 'need_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'item_id' => 'Item',
			'amount' => 'Amount',
			'detail' => 'Detail',
			'request_id' => 'Request',
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
		$criteria->compare('item_id',$this->item_id,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('request_id',$this->request_id,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}