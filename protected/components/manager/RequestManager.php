<?php
/**
* Request Manager
*/
class RequestManager
{
  /**
  * Create a request
  */
  function actionCreate($model)
  {
    $request = new Request;
    if (isset($model)) {
      $request->detail = $model['detail'];
      $request->date_created = time();
      $request->last_updated = time();
      $request->location_id = $model['location_id'];

      if ($request->save())
      {      
        // Find coordinator
        $coordinators = $model['coordinators'];
        $coordinatorsIds = $this->getCoordinatorId($coordinators);

        foreach ($coordinatorsIds as $cId) {
          // Bridge table
          $rc = new RequestCoordinator;
          $rc->request_id = $request->id;
          $rc->coordinator_id = $cId->id;
          $rc->save();
        }

        // Return Request Model
        return $request;
      }
    }
    return false;
  }

  function getCoordinatorId($coordinators)
  {
    // Get Coordinator Id 
    // Coordinator Wrapper
    // array($id, $coordinator_name)
    $coordinatorIds = array();

    foreach ($coordinators as $coordinator) 
    {
      // append a coordinator Id 
      if ($tmp = $this->findCoordinator($coordinator)) {
        $coordinatorIds[]=$tmp;
      } else {
        // Create one if does not exist
        $insCoordinator = $this->insertCoordinator($coordinator);

        if ($insCoordinator) {
          $coordinatorIds[]=$insCoordinator;
        }
      }
    }

    return $coordinatorIds;
  }
  
  function getLocation($model)
  { 
    if (isset($model)) {
      $criteria = new CDbCriteria;
      $locations = Location::model()->find($criteria);
      return $locations;
    }
  }
  
  function findCoordinator($param)
  {
    $criteria = new CDbCriteria;
    $criteria->compare('fullname',$param);

    $coordinator = Coordinator::model()->find($criteria);
    return $coordinator;
  }
  
  function insertCoordinator($param)
  {
    $coordinator = new Coordinator;
    $coordinator->fullname = $param;
    // $coordinator->position = $model['position'];
    // $coordinator->tel = $model['tel'];
    // $coordinator->detail = $model['detail'];
    return $coordinator->save() ? $coordinator : false;
  }
}
