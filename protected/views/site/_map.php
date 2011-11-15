<div id="map_canvas" style="width:100%; height:460px"></div>

<?php 
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/coffee-script.js'), CClientScript::POS_HEAD );
	echo CGoogleApi::init();

	$gload = <<<GLOAD
	google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});
GLOAD;
	$cs->registerScript('gload', $gload);
	$basePath = Yii::app()->getRequest()->getBaseUrl();
	$options = array('basePath' => $basePath);

	$js_settings_str = CJavaScript::encode($options);
	echo CHtml::Script('var Yii= Yii || {}; Yii.settings = ' . $js_settings_str);	
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/doMap.js'), CClientScript::POS_HEAD);
        
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/markerclusterer.js'), CClientScript::POS_HEAD);
         
 ?>
