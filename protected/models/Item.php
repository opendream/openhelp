<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property string $id
 * @property string $name
 * @property string $category_item_id
 *
 * The followings are the available model relations:
 * @property DonatedItem[] $donatedItems
 * @property CategoryItem $categoryItem
 * @property StockItem[] $stockItems
 */
class Item extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Item the static model class
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
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>255),
			array('category_item_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, category_item_id', 'safe', 'on'=>'search'),
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
			'donatedItems' => array(self::HAS_MANY, 'DonatedItem', 'item_id'),
			'categoryItem' => array(self::BELONGS_TO, 'CategoryItem', 'category_item_id'),
			'stockItems' => array(self::HAS_MANY, 'StockItem', 'item_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'category_item_id' => 'Category Item',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('category_item_id',$this->category_item_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Return list of all item
	 */

	 public function getItemList()
	 {
		$item_list = CHtml::listData(Item::model()->findAll(),'id','name');
		return $item_list;
	 }

	/**
	 * Retrieves a list of categoryItem options.
	 *
	 * @return array of 'value' => 'text'
	 */
	public function getCategoryOptions() {
		return CHtml::listData(CategoryItem::model()->findAll(),'id','name');
	}

}