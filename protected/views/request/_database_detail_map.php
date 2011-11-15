<div id="map_canvas" style="width:560px; height:200px"></div>

<?php 
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/doMap.js'), CClientScript::POS_HEAD);

 ?>
