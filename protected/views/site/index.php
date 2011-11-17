<?php

	$this->pageTitle=Yii::app()->name;

?>
<div id="header-top">
  <?php $this->renderPartial('_map'); ?>
</div> <!-- end header-top -->

<div id="content">
  <div id="section-stat" class="drop-shadow curved curved-hz-1">
    <section class="st-area">
		  <header><h1><?php echo Yii::t('locale', 'Summary needs'); ?></h1></header>
      <?php $this->renderPartial('//request/summary'); ?>
	  </section> <!-- /st-area -->
    <section class="st-need">

		  <header><h1><?php echo Yii::t('locale', 'All needs'); ?></h1></header>
      <?php $this->renderPartial('//need/summary'); ?>
	  </section> <!-- /st-need -->
  </div> <!-- end section-stat -->

  <div id="section-database">
    <?php $this->renderPartial('//request/location', array(
 			'query'=> array(),
 			'page' => 0,
 			'ipp' => 10,
 			'search' => true,
 		)); ?>
  </div> <!-- end section-database -->
</div> <!-- end content -->
