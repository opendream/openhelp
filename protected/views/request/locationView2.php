<article id="entry-1" class="entry">
<header>
  <?php if (isset($location_id)): ?>
  <a class="export-csv" href="<?php echo au("export/location/$location_id"); ?>" title="<?php echo Yii::t('locale', 'Export to CSV'); ?>"><?php echo Yii::t('locale', 'Export to CSV'); ?></a>
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


<section class="st-need drop-shadow curved curved-hz-1">
	  <header><h2>สิ่งของที่ต้องการ</h2></header>
	  <ul>
	  <?php foreach ($items as $item): ?>
	  <li class="need-<?php print $item['id']?>">
           <img src="<?php echo bu() ?>/images/need-<?php echo $item['id'] ?>.png" alt="<?php echo $item['name'] ?>" title="<?php echo $item['name'] ?>" class="in-active"/>
            <div class="bar">
	            <div style="width: 0px;" width="<?php echo $item['percent'] ?>">
		            <span class="value"><?php echo $item['amount'] ?></span>
	            </div>
            </div>
		    <div class="tooltip-popup"> <?php echo $item['name'] ?> </div>
	  </li>
	  <?php endforeach; ?>
	  </ul>
</section> <!-- /st-need -->



<?php $coordinators_params = array(
	'coordinators' => $coordinators,
	'location_text' => $location_text,
	'allExtraTexts' => $allExtraTexts,
); ?>
<section class="st-request drop-shadow curved curved-hz-1">
    <h2>ข้อมูลพื้นที่</h2>
    <p><?php echo $location_text ?></p>
    <h2>ผู้ประสานงานในพื้นที่</h2>
    <table class="zebra-striped request_coordinators">
        <thead>
          <tr><th>ชื่อ - นามสกุล</th><th>ตำแหน่ง</th><th>เบอร์โทรศัพท์</th><th>หมู่บ้าน</th></tr>
        </thead>
        <tbody>
        <?php foreach ($coordinators as $person): ?>
          <tr><td><?php echo $person['fullname'] ?></td><td><?php echo $person['position']?></td><td><?php echo $person['tel'] ?></td><td><?php echo $person['extra_location0'] ?></td></tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <div class="request_extra_text">
    <?php foreach ($allExtraTexts as $label => $value): ?>  
      <?php if (!empty($value)): ?>
        <div>
        <h2><?php echo $label ?></h2>
            <ul>
            <?php foreach ($value as $node): ?>
                <li><?php echo $node; ?></li>
            <?php endforeach ?>
            </ul>
        </div><!-- /sth -->
      <?php endif ?>
    <?php endforeach ?>
    </div>
</section> <!-- /st-detail -->
<?php     
    Yii::app()->clientScript->registerScript('odd_even',"
    $('tr:odd').addClass('odd');
    $('tr:even').addClass('even');
    ",CClientScript::POS_READY);
?>