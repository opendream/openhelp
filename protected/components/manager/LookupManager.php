<?php 
/**
* Lookup Manager
*/
class LookupManager
{
  private static $request_items,$need_items;

  public static function requestStatus()
  {
    if (!self::$request_items) {
      self::$request_items = array(
        0 => self::getStringLocale('REQUEST_STATUS_OPEN'),
        1 => self::getStringLocale('REQUEST_STATUS_PROCESS'),
        2 => self::getStringLocale('REQUEST_STATUS_CLOSED'),
        3 => self::getStringLocale('REQUEST_STATUS_CANCELLED'),
      );
    }
    return self::$request_items;
  }

  public static function getRequestStatus($status)
  {
    return Yii::t('locale',self::$request_items[$status]);
  }
  
  public static function needStatus()
  {
    if (!self::$need_items) {
      self::$need_items = array(
      0 => 'NEED_STATUS_WAIT',
      1 => 'NEED_STATUS_DONATED',
      2 => 'NEED_STATUS_SHIPMENT',
      3 => 'NEED_STATUS_COMPLETED',
    );
    }
    return self::$need_items;
  }

  public static function getNeedStatus($status)
  {
    return Yii::t('locale',self::$need_items[$status]);
  }

  /*
  * Localization Status
  */
  public static function getStringLocale($param)
  {
    return Yii::t('locale',$param);
  }
  
  public static function getItemName($param)
  {
    if($param){
      return Item::model()->findByPk($param)->name;
    }
    return '';
  }

  public static function getLocationString($location)
  {
    if($location){
      $locationString = '';
      foreach (Yii::app()->params['location'] as $level) {
        $locationString .= $location->attributes[$level].' ';
      };
      return $locationString;
    }
    return ''; 
  }
}
