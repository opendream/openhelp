<?php 
/**
* Lookup Manager
*/
class LookupManager 
{
  private static $_items=array(
    '0' => 'REQUEST_STATUS_OPEN',
    '1' => 'REQUEST_STATUS_PROCESS',
    '2' => 'REQUEST_STATUS_CLOSED',
    '3' => 'REQUEST_STATUS_CANCELLED',
  );

  public static function requestStatus()
  {
    return self::$_items;
  }
  
  public static function getRequestStatus($status)
  {
    return self::$_items[$status];
  }
  
  public static function needStatus()
  {
    return array(
      0 => 'NEED_STATUS_WAIT',
      1 => 'NEED_STATUS_DONATED',
      2 => 'NEED_STATUS_SHIPMENT',
      3 => 'NEED_STATUS_COMPLETED',
    );
  }
}
