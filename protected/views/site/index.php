<?php $this->pageTitle=Yii::app()->name; ?>


<?php echo $this->renderPartial('_map', array('model'=>$model)); ?>
<?php 
	$assetsDir = dirname(__FILE__).'/assets';
	$cs = Yii::app()->getClientScript();
     // Publishing and registering JavaScript file
     $cs->registerScriptFile(
        Yii::app()->assetManager->publish($assetsDir.'/coffee-script.js'), CClientScript::POS_HEAD );
// 	$script = <<<SCRIPT
// 	window.mapLoadded = function(argument) {
// 		alert('yo');
// 	}	
// SCRIPT;
// 	$cs->registerScript('amp', $script);
?>

<?php 
	echo CGoogleApi::init();
	// $opts = ".CJavaScript::encode($options);
	$gload = <<<GLOAD
	google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});
GLOAD;

	$cs->registerScript('gload', $gload);

?>


