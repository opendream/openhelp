<?php
	echo $this->renderPartial('_database_detail_lastupdate');
	echo $this->renderPartial('_database_detail_map');
	echo $this->renderPartial('_database_detail_need', array('items' => $items	));
	$coordinators_params = array(
		'coordinators' => $coordinators,
		'journey' => $extra['journey'],
		'remark' => $extra['remark'],
		'location_text' => $location_text
	);
	echo $this->renderPartial('_database_detail_coordinators', $coordinators_params);
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



?>
	