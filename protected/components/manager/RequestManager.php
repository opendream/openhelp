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
      // impl transaction    
      if ($this->insertRequest($request, $model)) {  
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
      //end of transaction
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
      if ($this->insertRequest($model, $params)) {    
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
      //$detail = isset($coordinators['detail'][$i]) ? $coordinators['detail'][$i] : '';

      if ($tmp = $this->findCoordinator($name, $position, $tel)) {

        $coordinatorIds[]=$tmp;
      } else {
        // Create one if does not exist
        $insCoordinator = $this->insertCoordinator($name, $position, $tel);//, $detail);

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

  function insertRequest($request, $model){
    // map detail
    if(isset($model['detail'])){
      $request->detail = $model['detail'];
    }
    // map date_created
    if(isset($mode['date_created']) && $mode['date_created'] != '') {
     // $request->date_created = CDateTimeParser::parse($model['date_created'], 'yyyy-MM-dd');
      $request->date_created = DateTime::createFromFormat('yyyy-MM-dd', $model['date_created']);
    } else if($request->date_created == null) {
      $request->date_created = time();
    }
    // add last_updated
    $request->last_updated = time();
    // map status
    if(isset($model['status'])){
      $request->status = $model['status'];
    }else{
      $request->status = Request::REQUEST_STATUS_OPEN;
    }
    // map extra_text
    if(isset($model['extra_text0'])){
      $request->extra_text0 = $model['extra_text0'];
    }
    if(isset($model['extra_text1'])){
      $request->extra_text1 = $model['extra_text1'];
    }
    if(isset($model['extra_text2'])){
      $request->extra_text2 = $model['extra_text2'];
    }
    if(isset($model['extra_text3'])){
      $request->extra_text3 = $model['extra_text3'];
    }
    if(isset($model['extra_text4'])){
      $request->extra_text4 = $model['extra_text4'];
    }
    if(isset($model['extra_text5'])){
      $request->extra_text5 = $model['extra_text5'];
    }
    if(isset($model['extra_text6'])){
      $request->extra_text6 = $model['extra_text6'];
    }
    if(isset($model['extra_text7'])){
      $request->extra_text7 = $model['extra_text7'];
    }
    if(isset($model['extra_text8'])){
      $request->extra_text8 = $model['extra_text8'];
    }
    if(isset($model['extra_text9'])){
      $request->extra_text9 = $model['extra_text9'];
    }
    // map extra_double
    if(isset($model['extra_double0'])){
      $request->extra_double0 = $model['extra_double0'];
    }
    if(isset($model['extra_double1'])){
      $request->extra_double1 = $model['extra_double1'];
    }
    if(isset($model['extra_double2'])){
      $request->extra_double2 = $model['extra_double2'];
    }
    if(isset($model['extra_double3'])){
      $request->extra_double3 = $model['extra_double3'];
    }
    if(isset($model['extra_double4'])){
      $request->extra_double4 = $model['extra_double4'];
    }
    if(isset($model['extra_double5'])){
      $request->extra_double5 = $model['extra_double5'];
    }
    if(isset($model['extra_double6'])){
      $request->extra_double6 = $model['extra_double6'];
    }
    if(isset($model['extra_double7'])){
      $request->extra_double7 = $model['extra_double7'];
    }
    if(isset($model['extra_double8'])){
      $request->extra_double8 = $model['extra_double8'];
    }
    if(isset($model['extra_double9'])){
      $request->extra_double9 = $model['extra_double9'];
    }
    // map location
    $request->location_id = $model['location_id'];
    if($model['location_id']=='')
      $request->location_id = null;
    
    return $request->save();    
  }
  
  function insertCoordinator($fullname, $position, $tel)//, $detail)
  {
    $coordinator = new Coordinator;
    $coordinator->fullname = $fullname;
    $coordinator->position = $position;
    $coordinator->tel = $tel;
    //$coordinator->detail = $detail;
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

    return $need->save() ? $need : false;
  }
}
