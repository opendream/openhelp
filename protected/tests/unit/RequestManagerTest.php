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
    $attr1['coordinators']['name'][] = 'นายแดง';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายเขียว';    
    
    $instance = $request->create($attr1);
    $this->assertNotNull($instance->id);
    //$this->assertNull($request->create($attr1)->id);
  }
  
  function testGetCoordinators()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    // $attr1['detail']         = 'aaa';   // Request
    // $attr1['location_id']    = 1;       // Location
    $attr1['coordinators']['name'][] = 'นายยยย';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'ฟหกด';    
    
    $instance = $request->getCoordinators($attr1['coordinators']);

    $this->assertNotNull($instance);
    $this->assertEquals(2, count($instance));
  }
  
  function testCreateNullLocation()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    $attr1['detail']         = 'aaxxa';   // Request
    $attr1['location_id']    = '';       // Location
    $attr1['coordinators']['name'][] = 'mr x';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายมี';    
    
    $instance = $request->create($attr1);
    $this->assertNotNull($instance->id);
    $this->assertNull($instance->location_id);
  }

  function testCreateNullCoordinators()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    $attr1['detail']         = 'aaxxy';   // Request
    $attr1['location_id']    = '';       // Location
    $attr1['coordinators']['name'][]   = array();
        
    $instance = $request->create($attr1);    
    $this->assertNotNull($instance->id); 

    $coordinators = $request->findRequestCoordinators($instance->id);

    $this->assertEquals(0, count($coordinators));   
  }
   
  function testFindCoordinator()
  {
    $request = new RequestManager;
    $attrs = 'mr x';
    $this->assertNotNull($request->findCoordinator($attrs));
  }
    
  function testUpdate()
  {
    $request = new RequestManager;
    $attr1 = array();

    $attr1['detail']         = 'update';   // Request
    $attr1['location_id']    = 1;       // Location
    $attr1['coordinators']['name'][] = 'นายมา';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายมี';    
    $attr1['status']    = 0;       // Status
    
    $criteria = new CDbCriteria;
    $criteria->compare('detail', 'aaa');
    $this->assertNotNull($request->update(Request::model()->find($criteria), $attr1));    
  }

  function testDelete()
  {
    $request = new RequestManager;

    $criteria = new CDbCriteria;
    $criteria->compare('detail', 'aaxxa');
    $this->assertTrue($request->delete(Request::model()->find($criteria)));    
  }
  
}
