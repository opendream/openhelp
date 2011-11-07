<?php
/**
* 
*/
class RequestManagerTest extends CDbTestCase
{
  
  function testCreate()
  {
    $request = new RequestManager();
    $attrs = new Request();
    $attrs->location_id = 1;
    $attrs->detail = 'aaa';
    $attrs->date_created = '2011-01-01';
    $attrs->last_updated = '2011-01-01';
    $this->assertTrue($request->actionCreate($attrs));
  }
}
