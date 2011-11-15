<section id="map" style="width:400px; height:200px" class="drop-shadow curved curved-hz-1">
 
</section>
<?php 
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/doMap.js'), CClientScript::POS_HEAD);
 ?>


