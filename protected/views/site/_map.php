<div id="map_canvas" style="width:800px; height:460px"></div>

<?php 
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/doMap.js'), CClientScript::POS_HEAD);
        
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/markerclusterer.js'), CClientScript::POS_HEAD);
         
 ?>
