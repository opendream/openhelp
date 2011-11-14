<?php
	$cs = Yii::app()->getClientScript();
	$this->pageTitle=Yii::app()->name;
	
	echo $this->renderPartial('_map', array('model'=>$model));

     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/coffee-script.js'), CClientScript::POS_HEAD );
	echo CGoogleApi::init();

	$gload = <<<GLOAD
	google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});
GLOAD;
	$cs->registerScript('gload', $gload);
?>