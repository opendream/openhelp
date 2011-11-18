<article id="entry-1" class="entry">
<header>
  <h1 class="location-header"><?php print $location_text ?></h1>
  <?php if (isset($location_id)): ?>
  <a class="export-csv" href="<?php echo CController::createUrl("/export/location/$location_id"); ?>" title="<?php echo Yii::t('locale', 'Export to CSV'); ?>"><?php echo Yii::t('locale', 'Export to CSV'); ?></a>
  <?php endif ?>
</header>
<section class="st-update drop-shadow curved curved-hz-1">
<div id="entry-date">
    <span class="year"><?php echo $sdate[0]; ?></span>
    <span class="day"><?php echo $sdate[2]; ?></span>
    <span class="month"><?php echo $sdate[1]; ?></span>
</div> <!-- /entry-date -->

  <div class="entry-update extra-double">
    <header><h2>อัพเดทล่าสุด</h2></header>
    <?php 
    	$family_num = $extraDouble['sum']['sum_request.extra_double0'][0]['sum_extra_double0']; 
    	$people_num = $extraDouble['sum']['sum_request.extra_double1'][0]['sum_extra_double1'];
    
     ?>

    <p class="extra-double-lebel-0">จำนวนครัวเรือน <strong><?php echo $family_num ?></strong></p>
	<p class="extra-double-lebel-2">จำนวนประชากร <strong><?php echo $people_num ?></strong></p>
	<p class="extra-double-lebel-1">ระดับน้ำ (เมตร)<strong><?php echo $extraDouble['water_level']['request.extra_double2']['min']; ?></strong></p>
  </div> <!-- /entry-update -->
</section> <!-- /st-detail -->
