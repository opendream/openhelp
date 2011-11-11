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
    $attr1['extra_text0'] = 'sexy';
    $attr1['extra_double0'] = 9.99;
    $attr1['location_id']    = 1;       // Location
    $attr1['date_created']    = '2011-11-01'; 
    $attr1['coordinators']['name'][] = 'นายแดง';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายเขียว';  
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['tel'][] = '';
    $attr1['coordinators']['tel'][] = ''; 
    //$attr1['coordinators']['detail'][] = '';
    //$attr1['coordinators']['detail'][] = ''; 
    $attr1['items']['id'][] = '1';
    $attr1['items']['amount'][] = '1'; 
    $attr1['items']['detail'][] = 'test'; 
    
    $instance = $request->create($attr1);
    $this->assertNotNull($instance->id);
    $this->assertEquals(1, count($instance->needs));
    $this->assertEquals('sexy', $instance->extra_text0);
    $this->assertEquals(9.99, $instance->extra_double0);

    //update request
    $attrUdate = array();
    $attrUdate['detail']         = 'update';   // Request
    $attrUdate['extra_text1'] = 'hot';
    $attrUdate['extra_double0'] = 0.99;
    $attrUdate['location_id']    = 1;       // Location
    $attrUdate['date_created']    = '2011-11-03'; 
    $attrUdate['coordinators']['name'][] = 'นายมา';   // Request_coordinator
    $attrUdate['coordinators']['name'][] = 'หนุ่มน้อ หึหึ';
    $attrUdate['coordinators']['position'][] = '';
    $attrUdate['coordinators']['position'][] = '';
    $attrUdate['coordinators']['tel'][] = '';
    $attrUdate['coordinators']['tel'][] = '';   
    $attrUdate['coordinators']['detail'][] = '';
    $attrUdate['coordinators']['detail'][] = 'detail test'; 
    $attrUdate['status']    = 2;       // Status
    $attrUdate['items']['id'][] = '1';
    $attrUdate['items']['id'][] = '2';
    $attrUdate['items']['amount'][] = '20'; 
    $attrUdate['items']['amount'][] = '10'; 
    $attrUdate['items']['detail'][] = 'test'; 
    $attrUdate['items']['detail'][] = 'test2';
    //$attrUdate['items']['id'][] = array();
    
    $instance = Request::model()->findByPk($instance->id);
    $this->assertNotNull($request->update($instance, $attrUdate)); 
    $instance = Request::model()->findByPk($instance->id);   
    $this->assertEquals(2, count($instance->needs));
    $this->assertEquals(2, $instance->status);
    $this->assertEquals('sexy', $instance->extra_text0);
    $this->assertEquals('hot', $instance->extra_text1);
    $this->assertEquals(0.99, $instance->extra_double0);

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
    $attr1['coordinators']['position'][] = 'อบต';
    $attr1['coordinators']['position'][] = 'ตำรวจ';
    $attr1['coordinators']['tel'][] = '1231';
    $attr1['coordinators']['tel'][] = '321'; 
    $attr1['coordinators']['detail'][] = 'ก๊าก1';
    //$attr1['coordinators']['detail'][] = '';   
    
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
    //$attr1['date_created']    = '2011-11-01'; 
    $attr1['coordinators']['name'][] = 'mr x';   // Request_coordinator
    $attr1['coordinators']['name'][] = 'นายมี';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['position'][] = '';
    $attr1['coordinators']['tel'][] = '';
    $attr1['coordinators']['tel'][] = ''; 
    //$attr1['coordinators']['detail'][] = '';
    //$attr1['coordinators']['detail'][] = ''; 
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
    //$this->assertTrue($request->delete($instance)); 
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
