<?php 
/**
* Lookup Manager
*/
class LookupManager 
{
  public static function requestStatus()
  {
    return array(
      '0' => 'REQUEST_STATUS_OPEN',
      '1' => 'REQUEST_STATUS_PROCESS',
      '2' => 'REQUEST_STATUS_CLOSED',
    );
  }
  
  public static function requestDefaultStatus()
  {
    return array(
      '0' => 'REQUEST_STATUS_OPEN',
    );
  }
  
  public static function needStatus()
  {
    return array(
      '0' => 'NEED_STATUS_WAIT',
      '1' => 'NEED_STATUS_DONATED',
      '2' => 'NEED_STATUS_SHIPMENT',
      '3' => 'NEED_STATUS_COMPLETED',
    );
  }
}
