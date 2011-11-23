<?php

class WidgetManagerTest extends CDbTestCase
{

	public $fixtures=array('location'=>'Location', 'item' => 'Item', 'categoryItem' => 'CategoryItem', 'coordinator' => 'Coordinator', 'request' => 'Request', 'request_coordinator' => 'RequestCoordinator');

	function testGetCoordinators(){
		$this->assertEquals(1, count(Request::model()->findAll()));
		$this->assertEquals(3, count(Location::model()->findAll()));
		$result = WidgetManager::getCoordinators(1);
		$this->assertNotNull($result);
		$this->assertEquals(2, count($result));

		$result = WidgetManager::getCoordinators(1, 'หมู่บ้าน เอ');
		$this->assertNotNull($result);
		$this->assertEquals(0, count($result));

		$result = WidgetManager::getCoordinators(1, '1');
		$this->assertEquals(2, count($result));
	}

	function testGetItemDetails(){
		$result = WidgetManager::getItemDetails(1);
		$this->assertNotNull($result);
		

		$result = WidgetManager::getItemDetails(1, 'หมู่บ้าน เอ');
		$this->assertNotNull($result);
		$this->assertEquals(13, count($result));
	}

	function testGetSumExtraDouble(){
		$result = WidgetManager::getSumExtraDouble(1);
		$this->assertNotNull($result);
		

		$result = WidgetManager::getSumExtraDouble(1, 'หมู่บ้าน เอ');
		$this->assertNotNull($result);
	}

	function testGetMinMaxExtraDouble(){
		$result = WidgetManager::getMinMaxExtraDouble(1);
		$this->assertNotNull($result);
		

		$result = WidgetManager::getMinMaxExtraDouble(1, 'หมู่บ้าน เอ');
		$this->assertNotNull($result);
	}

	function testGetExtraDouble(){
		$result = WidgetManager::getExtraDouble(1, 0);
		$this->assertNotNull($result);
		$this->assertEquals(250, $result['request.extra_double0']['sum']);
		$result = WidgetManager::getExtraDouble(1, 1);
		$this->assertEquals(499, $result['request.extra_double1']['sum']);
		$result = WidgetManager::getExtraDouble(1, 2);
		$this->assertEquals(1.8, $result['request.extra_double2']['min']);
		$this->assertEquals(1.8, $result['request.extra_double2']['max']);
	}
}