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

		// add new request
		$request = new Request();
		$request->detail = 'aaa';
		$request->location_id = 1;
        $request->extra_text4 = 'extra_text4';
        $request->extra_text5 = 'extra_text5';
        $request->extra_text6 = 'extra_text6';
        $request->extra_text9 = 'extra_text7';

        $request->extra_double0 = 250;
        $request->extra_double1 = 401;
        $request->extra_double2 = 0.8;
        $request->extra_location0 = 2;
        $request->date_created = '2011-11-01';
        $request->last_updated = '2011-11-01';
        $request->status = 0;
        $request->save();

        $result = WidgetManager::getExtraDouble(1, 0);
		$this->assertNotNull($result);
		$this->assertEquals(500, $result['request.extra_double0']['sum']);
		$result = WidgetManager::getExtraDouble(1, 1);
		$this->assertEquals(900, $result['request.extra_double1']['sum']);
		$result = WidgetManager::getExtraDouble(1, 2);
		$this->assertEquals(0.8, $result['request.extra_double2']['min']);
		$this->assertEquals(1.8, $result['request.extra_double2']['max']);

		// add new request, so replace extra_location0 = 1
		$request1 = new Request();
		$request1->detail = 'aaa';
		$request1->location_id = 1;
        $request1->extra_text4 = 'extra_text4';
        $request1->extra_text5 = 'extra_text5';
        $request1->extra_text6 = 'extra_text6';
        $request1->extra_text9 = 'extra_text7';

        $request1->extra_double0 = 200;
        $request1->extra_double1 = 399;
        $request1->extra_double2 = 2.8;
        $request1->extra_location0 = 1;
        $request1->date_created = '2011-11-07';
        $request1->last_updated = '2011-11-07';
        $request1->status = 0;
        $request1->save();

        $result = WidgetManager::getExtraDouble(1, 0);
		$this->assertNotNull($result);
		$this->assertEquals(450, $result['request.extra_double0']['sum']);
		$result = WidgetManager::getExtraDouble(1, 1);
		$this->assertEquals(800, $result['request.extra_double1']['sum']);
		$result = WidgetManager::getExtraDouble(1, 2);
		$this->assertEquals(0.8, $result['request.extra_double2']['min']);
		$this->assertEquals(2.8, $result['request.extra_double2']['max']);

		// add new request, so replace extra_location0 = 1
		$request2 = new Request();
		$request2->detail = 'aaa';
		$request2->location_id = 1;
        $request2->extra_text4 = 'extra_text4';
        $request2->extra_text5 = 'extra_text5';
        $request2->extra_text6 = 'extra_text6';
        $request2->extra_text9 = 'extra_text7';

        $request2->extra_double0 = 500;
        $request2->extra_double1 = 599;
        $request2->extra_double2 = 3.8;
        $request2->extra_location0 = 1;
        $request2->date_created = '2011-10-31';
        $request2->last_updated = '2011-10-31';
        $request2->status = 0;
        $request2->save();

        $result = WidgetManager::getExtraDouble(1, 0);
		$this->assertNotNull($result);
		$this->assertEquals(450, $result['request.extra_double0']['sum']);
		$result = WidgetManager::getExtraDouble(1, 1);
		$this->assertEquals(800, $result['request.extra_double1']['sum']);
		$result = WidgetManager::getExtraDouble(1, 2);
		$this->assertEquals(0.8, $result['request.extra_double2']['min']);
		$this->assertEquals(2.8, $result['request.extra_double2']['max']);
	}
}