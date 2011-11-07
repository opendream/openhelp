<?php
/**
* Request Manager
*/
class RequestManager
{
  /**
  * Create a request
  */
  function actionCreate($model,$coordinatorArg)
  {
    $request = new Request;
    if (isset($model)) {
      $request->attributes = $model->attributes;
      if ($request->save())
      {      
        // Find coordinator
        $coordinator = $this->findCoordinator($coordinatorArg);
      
        if (!isset($coordinator)) {
          // Create if does not exist
          $coordinator = new Coordinator;
          $coordinator->fullname = $coordinatorArg['fullname'];
          $coordinator->position = $coordinatorArg['position'];
          $coordinator->tel      = $coordinatorArg['tel'];
          $coordinator->detail   = $coordinatorArg['detail'];
          $coordinator->save();
        }
      
        // Bridge table
        $rc = new RequestCoordinator;
        $rc->request_id = $request->id;
        $rc->coordinator_id = $coordinator->id;
        $rc->save();
      
        return $request->id;
      }
    }
  }
  
  function getLocation($model)
  { 
    if (isset($model)) {
      $criteria = new CDbCriteria;
      $locations = Location::model()->find($criteria);
      return $locations;
    }
  }
  
  function findCoordinator($model)
  {
    $criteria = new CDbCriteria;
    $criteria->compare('fullname',$model['fullname']);
    $criteria->compare('position',$model['position']);
    $criteria->compare('tel',$model['tel']);
    $coordinator = Coordinator::model()->find($criteria);
    return $coordinator;
  }
  
  function insertCoordinator($model)
  {
    $coordinator = new Coordinator;
    $coordinator->fullname = $model['fullname'];
    $coordinator->position = $model['position'];
    $coordinator->tel = $model['tel'];
    $coordinator->detail = $model['detail'];
    return $coordinator->save();
  }
}
