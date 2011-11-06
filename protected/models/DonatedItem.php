<?php

/**
 * This is the model class for table "donated_item".
 *
 * The followings are the available columns in table 'donated_item':
 * @property string $id
 * @property string $donator_id
 * @property string $item_id
 * @property integer $amount
 * @property string $need_id
 */
class DonatedItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return DonatedItem the static model class
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
		return 'donated_item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('donator_id, item_id, need_id', 'required'),
			array('amount', 'numerical', 'integerOnly'=>true),
			array('donator_id, item_id, need_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, donator_id, item_id, amount, need_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'donator_id' => 'Donator',
			'item_id' => 'Item',
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
		$criteria->compare('donator_id',$this->donator_id,true);
		$criteria->compare('item_id',$this->item_id,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('need_id',$this->need_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}