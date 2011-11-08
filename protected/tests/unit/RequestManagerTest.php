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
    
    $attr1['detail']         = 'aaa';   // Request
    $attr1['location_id']    = '';       // Location
    //$attr1['coordinators'][] = 'นายมา';   // Request_coordinator
    //$attr1['coordinators'][] = 'นายมี';    
    
    //$this->assertNotNull($request->create($attr1)->id);
    $this->assertNull($request->create($attr1)->id);
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
