<?php
/**
* Lookup
*/
class LookupManagerTest extends CTestCase
{
  
  function testLookup()
  {
    $req = LookupManager::requestStatus();
    
    $status = 1;
    $reqCurrent = LookupManager::requestCurrentStatus($status);

    $this->assertNotNull($reqCurrent);
  }
}
