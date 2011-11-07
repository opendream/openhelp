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
    $request = new Request();
    $request->attributes = $model->attributes;
    $request->save(true);
  }
}
