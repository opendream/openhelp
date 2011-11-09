<?php
/**
* 
*/
class RequestManagerTest extends CDbTestCase
{
  
  function testCreate()
  {
    $request = new RequestManager;

    // insert without null properties
    $attr1 = array();    
    $attr1['detail']         = 'aaa';   // Request
    $attr1['location_id']    = 1;       // Location
    $attr1['coordinators']['name'][] = 'นายแดง';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายเขียว';  
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['tel'][] = '';
    $attr1['coordinators']['tel'][] = ''; 
    $attr1['coordinators']['detail'][] = '';
    $attr1['coordinators']['detail'][] = ''; 
    $attr1['items']['id'][] = '1';
    $attr1['items']['amount'][] = '1'; 
    $attr1['items']['detail'][] = 'test'; 
    
    $instance = $request->create($attr1);
    $this->assertNotNull($instance->id);
    $this->assertEquals(1, count($instance->needs));

    //update request
    $attrUdate = array();
    $attrUdate['detail']         = 'update';   // Request
    $attrUdate['location_id']    = 1;       // Location
    $attrUdate['coordinators']['name'][] = 'นายมา';   // Request_coordinator
    $attrUdate['coordinators']['name'][] = 'นายมี';
    $attrUdate['coordinators']['position'][] = '';
    $attrUdate['coordinators']['position'][] = '';
    $attrUdate['coordinators']['tel'][] = '';
    $attrUdate['coordinators']['tel'][] = '';   
    $attrUdate['coordinators']['detail'][] = '';
    $attrUdate['coordinators']['detail'][] = ''; 
    $attrUdate['status']    = 0;       // Status
    $attrUdate['items']['id'][] = '1';
    $attrUdate['items']['id'][] = '2';
    $attrUdate['items']['amount'][] = '20'; 
    $attrUdate['items']['amount'][] = '10'; 
    $attrUdate['items']['detail'][] = 'test'; 
    $attrUdate['items']['detail'][] = 'test2';
    //$attrUdate['items']['id'][] = array();
    
    $this->assertNotNull($request->update($instance, $attrUdate));
    $instance = Request::model()->findByPk($instance->id);
    $this->assertEquals(2, count($instance->needs));

    //delete request
    $this->assertTrue($request->delete($instance));    
  }
  
  function testGetCoordinators()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    // $attr1['detail']         = 'aaa';   // Request
    // $attr1['location_id']    = 1;       // Location
    $attr1['coordinators']['name'][] = 'นายยยย';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'ฟหกด'; 
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['tel'][] = '';
    $attr1['coordinators']['tel'][] = ''; 
    $attr1['coordinators']['detail'][] = '';
    $attr1['coordinators']['detail'][] = '';   
    
    $instance = $request->getCoordinators($attr1['coordinators']);

    $this->assertNotNull($instance);
    $this->assertEquals(2, count($instance));
  }
  
  function testCreateNullLocation()
  {
    $request = new RequestManager;
    //insert with null location
    $attr1 = array();    
    $attr1['detail']         = 'aaxxa';   // Request
    $attr1['location_id']    = '';       // Location
    $attr1['coordinators']['name'][] = 'mr x';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายมี';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['tel'][] = '';
    $attr1['coordinators']['tel'][] = ''; 
    $attr1['coordinators']['detail'][] = '';
    $attr1['coordinators']['detail'][] = ''; 
    $attr1['items']['id'][] = '';   
    $attr1['items']['amount'][] = '';
    //$attr1['items']['detail'][] = '';
    
    $instance = $request->create($attr1);
    $this->assertNotNull($instance->id);
    $this->assertNull($instance->location_id);

    //update location
    $attrUdate = array();
    $attrUdate['detail']         = 'update';   // Request
    $attrUdate['status']         = 0;   // Request status
    $attrUdate['location_id']    = 2;       // Location
    $this->assertNotNull($request->update($instance, $attrUdate));
    $this->assertEquals(2, $instance->location_id);
    //delete request
    $this->assertTrue($request->delete($instance)); 
  }

  /*function testCreateNullCoordinators()
  {
    $request = new RequestManager;
    $attr1 = array();
    
    $attr1['detail']         = 'aaxxy';   // Request
    $attr1['location_id']    = '';       // Location
    $attr1['items']['id'][] = '';
    $attr1['items']['amount'][] = '';
        
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
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['tel'][] = '';
    $attr1['coordinators']['tel'][] = '';   
    $attr1['coordinators']['detail'][] = '';
    $attr1['coordinators']['detail'][] = ''; 
    $attr1['status']    = 0;       // Status
    $attr1['items']['id'][] = array();
    $criteria = new CDbCriteria;
    $criteria->compare('detail', 'aaxxa');
    $this->assertNotNull($request->update(Request::model()->find($criteria), $attr1));    
  }

  function testInsertNeeds(){
    $request = new RequestManager;

    $criteria = new CDbCriteria;
    $criteria->compare('detail', 'update');
    $reqInstance = Request::model()->find($criteria); 

    $attr1 = array();
    $attr1['items']['id'][] = '1';
    $attr1['items']['id'][] = '2';
    $attr1['items']['amount'][] = '11';
    $attr1['items']['amount'][] = '12';
    $attr1['items']['detail'][] = 'test insert';
    $attr1['items']['detail'][] = 'test insert2';

    $result = $request->insertNeeds($reqInstance->id, $attr1['items']);
    $this->assertEquals(2, count($result));
  }

  function testDelete()
  {
    $request = new RequestManager;

    $criteria = new CDbCriteria;
    $criteria->compare('detail', 'update');
    $this->assertTrue($request->delete(Request::model()->find($criteria)));    
  }  */
}
