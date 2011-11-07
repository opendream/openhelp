<?php
/**
* 
*/
class RequestManagerTest extends CDbTestCase
{
  
  function testCreate()
  {
    $request = new RequestManager;
    $attr1 = new Request;
    
    // Request
    $attr1->detail = 'aaa';
    $attr1->date_created = '2011-01-01';
    $attr1->last_updated = '2011-01-01';
    
    // Location
    $attr1->location_id = 1;
    
    // Request_coordinator
    $attr2 = array(
      'fullname' => 'นายขาว',
      'position' => 'อบต.',
      'tel' => '191',
      'detail' =>'',
    );
    $this->assertNotNull($request->actionCreate($attr1,$attr2));
  }
  /*
  function testGetLocation()
  {
    $request = new RequestManager;
    
    $attrs = array(
      'level0' => 'กรุงเทพมหานคร',
      'level1' => 'พระนคร',
    );
    $this->assertNotNull($request->getLocation($attrs));
  }
  */
  
  function testFindCoordinator()
  {
    $request = new RequestManager;
    $attrs = array(
      'fullname' => 'นายขาว',
      'position' => 'อบต.',
      'tel' => '191',
    );
    
    $this->assertNotNull($request->findCoordinator($attrs));
  }
  
  function testInsertCoordinator()
  {
    $coordinator = new RequestManager;
    $attrs = array(
      'fullname' => 'ลุงมา',
      'position' => 'ผู้ใหญ่บ้าน',
      'tel' => '1133',
      'detail' => '',
    );
    $this->assertTrue($coordinator->insertCoordinator($attrs));
  }
}
