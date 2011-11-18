<?php
	echo $this->renderPartial('_database_detail_lastupdate', array('extraDouble' => $extraDouble, 'location_text' => $location_text, 'location_id' => $location_id));
	echo $this->renderPartial('_database_detail_map', array('location_id' => $location_id));
	echo $this->renderPartial('_database_detail_need', array('items' => $items	));

	$coordinators_params = array(
		'coordinators' => $coordinators,
		'location_text' => $location_text,
		'allExtraTexts' => $allExtraTexts,
	);
	echo $this->renderPartial('_database_detail_coordinators', $coordinators_params);
	echo $this->renderPartial('_database_detail_villages', array('location_extra0s' => $location_extra0s, 'location_id' => $location_id));

	//SCRIPT
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
	$options = array('basePath' => $basePath, 'location_id' => $location_id);
	$js_settings_str = CJavaScript::encode($options);
	echo CHtml::Script('var Yii= Yii || {}; Yii.settings = ' . $js_settings_str);
?>