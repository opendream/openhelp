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
    //$transaction=Request::model()->dbConnection->beginTransaction();
    //$trans = Yii::app()->db->beginTransaction();
    //try {
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
          //$trans->commit();
        }
      /*} catch(Exception $e) {
          //$transaction->rollBack();
          $trans->rollBack();
      }*/
    return $request;
  }

  /*
  * Update a request 
  * an argument $model (CActiveRecord) 
  */
  function update($model, $params)
  {
    if (isset($model)) {
      //$trans = Yii::app()->db->beginTransaction();
      //try{
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
        //$trans->commit();
      /*}catch(Exception $e){
        //$tran->rollBack();
      }*/
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

  function insertRequest($request, $params){
    // map detail
    if(isset($params['detail'])){
      $request->detail = $params['detail'];
    }
    // map date_created
    if(isset($params['date_created']) && $params['date_created'] != '') {
      //$request->date_created = date('Y-m-d H:i:s',strtotime($params['date_created']));
      $request->date_created = $params['date_created'];
    } else if($request->date_created == null) {
      $request->date_created = date('Y-m-d');
    }
    // add last_updated
    $request->last_updated = date('Y-m-d H:i:s');
    // map status
    if(isset($params['status'])){
      $request->status = $params['status'];
    }else{
      $request->status = Request::REQUEST_STATUS_OPEN;
    }
    // map extra_text
    if(isset($params['extra_text0'])){
      $request->extra_text0 = $params['extra_text0'];
    }
    if(isset($params['extra_text1'])){
      $request->extra_text1 = $params['extra_text1'];
    }
    if(isset($params['extra_text2'])){
      $request->extra_text2 = $params['extra_text2'];
    }
    if(isset($params['extra_text3'])){
      $request->extra_text3 = $params['extra_text3'];
    }
    if(isset($params['extra_text4'])){
      $request->extra_text4 = $params['extra_text4'];
    }
    if(isset($params['extra_text5'])){
      $request->extra_text5 = $params['extra_text5'];
    }
    if(isset($params['extra_text6'])){
      $request->extra_text6 = $params['extra_text6'];
    }
    if(isset($params['extra_text7'])){
      $request->extra_text7 = $params['extra_text7'];
    }
    if(isset($params['extra_text8'])){
      $request->extra_text8 = $params['extra_text8'];
    }
    if(isset($params['extra_text9'])){
      $request->extra_text9 = $params['extra_text9'];
    }
    if(isset($params['extra_text10'])){
      $request->extra_text10 = $params['extra_text10'];
    }
    if(isset($params['extra_text11'])){
      $request->extra_text11 = $params['extra_text11'];
    }
    if(isset($params['extra_text12'])){
      $request->extra_text12 = $params['extra_text12'];
    }
    if(isset($params['extra_text13'])){
      $request->extra_text13 = $params['extra_text13'];
    }
    if(isset($params['extra_text14'])){
      $request->extra_text14 = $params['extra_text14'];
    }
    // map extra_double
    if(isset($params['extra_double0'])){
      $request->extra_double0 = $params['extra_double0'];
    }
    if(isset($params['extra_double1'])){
      $request->extra_double1 = $params['extra_double1'];
    }
    if(isset($params['extra_double2'])){
      $request->extra_double2 = $params['extra_double2'];
    }
    if(isset($params['extra_double3'])){
      $request->extra_double3 = $params['extra_double3'];
    }
    if(isset($params['extra_double4'])){
      $request->extra_double4 = $params['extra_double4'];
    }
    if(isset($params['extra_double5'])){
      $request->extra_double5 = $params['extra_double5'];
    }
    if(isset($params['extra_double6'])){
      $request->extra_double6 = $params['extra_double6'];
    }
    if(isset($params['extra_double7'])){
      $request->extra_double7 = $params['extra_double7'];
    }
    if(isset($params['extra_double8'])){
      $request->extra_double8 = $params['extra_double8'];
    }
    if(isset($params['extra_double9'])){
      $request->extra_double9 = $params['extra_double9'];
    }
    // map extra_location
    if(isset($params['extra_location0'])){
      $request->extra_location0 = $params['extra_location0'];
    }
    if(isset($params['extra_location1'])){
      $request->extra_location1 = $params['extra_location1'];
    }
    if(isset($params['extra_location2'])){
      $request->extra_location2 = $params['extra_location2'];
    }
    if(isset($params['extra_location3'])){
      $request->extra_location3 = $params['extra_location3'];
    }
    if(isset($params['extra_location4'])){
      $request->extra_location4 = $params['extra_location4'];
    }
    // map location
    $request->location_id = $params['location_id'];
    if($params['location_id']=='')
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
    //$trans = Yii::app()->db->beginTransaction();
    //try{
      Yii::trace('call insert need', 'example');
      for ($i=0; $i < count($items['id']); $i++) { 
        $itemId = isset($items['id'][$i])? $items['id'][$i] : null;
        //print 'yyyyy'.$items['amount'][$i].'xxxxx';
        //exit();
        $amount = isset($items['amount'][$i])? $items['amount'][$i] : 0;
        $detail = isset($items['detail'][$i])? $items['detail'][$i] : '';
        $needs[] = $this->insertNeed($reqId, $itemId, $amount, $detail);
      }
      //$trans->commit();
    /*} catch(Exception $e) {
      //$trans->rollBack();
      Yii::trace('call rollback', 'example');
      throw new CException('type miss match!');
    }*/
    return $needs;
  }

  function insertNeed($reqId, $itemId, $amount, $detail)
  {
    $need = new Need;
    $need->amount = $amount? $amount: 0;
    $need->detail = $detail? $detail: '';
    $need->request_id = $reqId;
    $need->item_id = $itemId;
    $need->status = Need::NEED_STATUS_WAIT;
    return $need->save() ? $need : false;
    //return $need->save() ? $need : throw new CException('could not save need');
  }
}
