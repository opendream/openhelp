<?php
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
	$this->pageTitle=Yii::app()->name;

	$this->renderPartial('_map');

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