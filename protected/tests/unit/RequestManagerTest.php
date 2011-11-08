<?php
/**
* 
*/
class RequestManagerTest extends CDbTestCase
{
  
  function testCreate()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    // Request
    $attr1['detail']       = 'aaa';
    
    // Location
    $attr1['location_id']  = 1;

    // Request_coordinator
    $attr1['coordinators'][] = 'นายมา';
    $attr1['coordinators'][] = 'นายมี';
    
    $this->assertNotNull($request->actionCreate($attr1));
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
    $attrs = 'นายขาว';
    $this->assertNotNull($request->findCoordinator($attrs));
  }
  
  /*
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
  */
}
