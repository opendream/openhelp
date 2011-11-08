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
    $attr1['location_id']    = 1;       // Location
    $attr1['coordinators'][] = 'นายมา';   // Request_coordinator
    $attr1['coordinators'][] = 'นายมี';    
    
    $this->assertNotNull($request->create($attr1)->id);
    //$this->assertNull($request->create($attr1)->id);
  }

  function testCreateNullLocation()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    $attr1['detail']         = 'aaxxa';   // Request
    $attr1['location_id']    = '';       // Location
    $attr1['coordinators'][] = 'mr x';   // Request_coordinator
    $attr1['coordinators'][] = 'นายมี';    
    
    $this->assertNotNull($request->create($attr1)->id);
    $this->assertNull($request->create($attr1)->location_id);
  }

  function testCreateNullCoordinators()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    $attr1['detail']         = 'aaxxa';   // Request
    $attr1['location_id']    = '';       // Location
    //$attr1['coordinators'][] = 'นายมา';   // Request_coordinator
    //$attr1['coordinators'][] = 'นายมี';    
    
    $this->assertNull($request->create($attr1)->id);    
  }
   
  function testFindCoordinator()
  {
    $request = new RequestManager;
    $attrs = 'mr x';
    $this->assertNotNull($request->findCoordinator($attrs));
  }
    
}
