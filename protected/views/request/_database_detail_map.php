<section id = "map" class="drop-shadow curved curved-hz-1">
    <div id="map_canvas" style="width:540px; height:240px"></div>
</section>
<?php 
    $assetsDir = dirname(__FILE__).'/assets';
    $cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/doMap.js'), CClientScript::POS_HEAD);
                
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/markerclusterer.js'), CClientScript::POS_HEAD);
         
 ?>


