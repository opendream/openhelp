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
        if (isset($model['items'])) {
          $this->insertNeeds($request->id, $model['items']);
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
      

      if ($model->save()) {    
        // Remove all related coordinator request
        $req_coors = $this->findRequestCoordinators($model->id);
        foreach ($req_coors as $req_coor) $req_coor->delete();
        
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
        
        // Remove all need request
        foreach ($model->needs as $need) $need->delete(); 
        if (isset($params['items']) && count($params['items']) > 0) {
          $this->insertNeeds($model->id, $params['items']);
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
    if($model->needs!=null){
      foreach ($model->needs as $need) {
        $need->delete();
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
      $name = isset($coordinators['name'][$i]) ? $coordinators['name'][$i] : '';
      $position = isset($coordinators['position'][$i]) ? $coordinators['position'][$i] : '';
      $tel = isset($coordinators['tel'][$i]) ? $coordinators['tel'][$i] : '';
      $detail = isset($coordinators['detail'][$i]) ? $coordinators['detail'][$i] : '';
      
      if ($tmp = $this->findCoordinator($name, $position, $tel)) {
        $coordinatorIds[]=$tmp;
      } else {
        // Create one if does not exist
        $insCoordinator = $this->insertCoordinator($name, $position, $tel, $detail);

        if ($insCoordinator) {
          $coordinatorIds[]=$insCoordinator;
        }
      }
    }    
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
  
  function findCoordinator($fullname, $position='', $tel='')
  {
    $criteria = new CDbCriteria;
    if ($fullname != '' && $fullname != NULL) {      
      $criteria->compare('fullname',$fullname);
    } 
    if ($position != '' && $position != NULL) {      
      $criteria->compare('position',$position);
    } 
    if ($tel != '' && $tel != NULL) {      
      $criteria->compare('tel',$tel);
    } 

      $coordinator = Coordinator::model()->find($criteria);
    
    return $coordinator;    
  }
  
  function insertCoordinator($fullname, $position, $tel, $detail)
  {
    $coordinator = new Coordinator;
    $coordinator->fullname = $fullname;
    $coordinator->position = $position;
    $coordinator->tel = $tel;
    return $coordinator->save() ? $coordinator : false;
  }

  function insertNeeds($reqId, $items){
    $needs = array();
    for ($i=0; $i < count($items['id']); $i++) { 
      $itemId = isset($items['id'][$i])? $items['id'][$i] : null;
      $amount = isset($items['amount'][$i])? $items['amount'][$i] : 0;
      $detail = isset($items['detail'][$i])? $items['detail'][$i] : '';
      $needs[] = $this->insertNeed($reqId, $itemId, $amount, $detail);
    }
    return $needs;
  }

  function insertNeed($reqId, $itemId, $amount, $detail)
  {
    $need = new Need;
    $need->amount = $amount;
    $need->detail = $detail;
    $need->request_id = $reqId;
    $need->item_id = $itemId;
    $need->status = Need::NEED_STATUS_WAIT;
    if ($need->validate()) {
      return $need->save() ? $need : false;
    }
    return false;
  }
}
