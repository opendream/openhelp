<?php
/**
* Request Manager
*/
class RequestManager
{
  /**
  * Create a request
  */
  function create($model)
  {
    $request = new Request;
    if (isset($model)) {
      
      $request->detail = $model['detail'];
      $request->status = Request::REQUEST_STATUS_OPEN;

      $request->location_id = $model['location_id'];
      if($model['location_id']=='')
        $request->location_id = null;
      
      if ($request->save()) {  
        // Find coordinator
        if(isset($model['coordinators'])) {            
          $coordinators = $model['coordinators'];
          $coordinatorsIds = $this->getCoordinators($coordinators);

          foreach ($coordinatorsIds as $cId) {
            // Bridge table
            $this->insertRequestCoordinator($request->id, $cId->id);
          }
        }

        // Save Needs
        if (isset($model['needs'])) {

        }
      }
    }
    return $request;
  }

  /*
  * Update a request 
  * an argument $model (CActiveRecord) 
  */
  function update($model, $params)
  {
    if (isset($model)) {
      $model->detail = $params['detail'];
      $model->status = $params['status'];
      
      // Location Validation
      $model->location_id = $params['location_id'];
      if($params['location_id']=='')
        $model->location_id = null;
      
      // Remove all related coordinator request
      $req_coors = $this->findRequestCoordinators($model->id);
      foreach ($req_coors as $req_coor) $req_coor->delete();

      if ($model->save()) {      
        if (isset($params['coordinators']) && count($params['coordinators']) > 0) {
          // Find coordinator
          $coordinators = $params['coordinators'];
          $coordinatorsIds = $this->getCoordinators($coordinators);

          foreach ($coordinatorsIds as $cId) {
            // Bridge table
            $tmp = $this->findRequestCoordinator($model->id, $cId->id);

            if ($tmp==NULL) {
              $this->insertRequestCoordinator($model->id, $cId->id);
            }
          }
        }
      }
    }
    // Return Request Model
    return $model;
  }

  function delete($model)
  {
    if(isset($model->coordinators)){  
      $req_coors = $this->findRequestCoordinators($model->id);

      foreach ($req_coors as $req_coor) {
        $req_coor->delete();
      }
    }
    return $model->delete();
  }

  function insertRequestCoordinator($requestId,$coordinatorId)
  {
    $rc = new RequestCoordinator;
    $rc->request_id = $requestId;
    $rc->coordinator_id = $coordinatorId;
    return $rc->save();
  }

  function findRequestCoordinators($requestId)
  {
    $criteria = new CDbCriteria;
    $criteria->compare('request_id',$requestId);
    return RequestCoordinator::model()->findAll($criteria);
  } 

  function findRequestCoordinator($requestId,$coordinatorId)
  {
    $criteria = new CDbCriteria;
    $criteria->compare('request_id',$requestId);
    $criteria->compare('coordinator_id',$coordinatorId);
    return RequestCoordinator::model()->find($criteria);
  }

  function getCoordinators($coordinators)
  {
    // Get Coordinator Id 
    // Coordinator Wrapper
    // array($id, $coordinator_name)
    $coordinatorIds = array();
    
    for ($i=0; $i < count($coordinators['name']) ; $i++) { 

      Yii::trace('###############################'.$coordinators['name'][$i].'###############################','example');

      if ($tmp = $this->findCoordinator($coordinators['name'][$i])) {
        $coordinatorIds[]=$tmp;
      } else {
        // Create one if does not exist
        $insCoordinator = $this->insertCoordinator($coordinators['name'][$i]);

        if ($insCoordinator) {
          $coordinatorIds[]=$insCoordinator;
        }
      }
    }
    /*
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
    */
    return $coordinatorIds;
  }
  
  /*
  * find a location $param = location detail
  */
  function findLocation($param)
  { 
    if (isset($param)) {
      $criteria = new CDbCriteria;
      $location = Location::model()->find($criteria);
      return $location;
    }
  }
  
  function findCoordinator($param)
  {
    if ($param != '' && $param != NULL) {
      $criteria = new CDbCriteria;
      $criteria->compare('fullname',$param);

      $coordinator = Coordinator::model()->find($criteria);
      return $coordinator;
    }
    return NULL;
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

  function insertNeed($reqId, $param)
  {
    $need = new Coordinator;
    $need->name = $param['name'];
    $need->amount = $param['amount'];
    $need->detail = $param['detail'];
    $need->request_id = $reqId;
    return $need->save() ? $need : false;
  }
}
