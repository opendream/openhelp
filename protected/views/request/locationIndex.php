<?php

$addresses = Yii::app()->params['location'];
// GROUP BY ==========
$groupByList = $addresses;
$groupBy = implode(', ', $groupByList);

// SELECT =======
$selectList = $addresses;
$extraDouble = Yii::app()->params['request']['extra']['double'];			
foreach ($extraDouble as $key => $value) {
  $key = 'extra_double'.$key;
  if ($value['func'] == 'min-max') {
    $col = "CONCAT(MIN($key), '-', MAX($key)) AS $key";
  }
  elseif (!isset($value['func']) || empty($value['func']) || $value['func'] == 'sum') {
    $col = "SUM($key) AS $key";
  }
  $selectList[] = $col;
}
$select = implode(', ', $selectList);

// WHERE ========
$whereList = array(1);
foreach ($query as $level => $value) {
  $whereList[] = $level.'='.$value;
}
$where = implode(' AND ', $whereList);

// SOLO ==========   
$qtxt = "SELECT location.id AS id, $select FROM location, request WHERE location.id = request.location_id AND $where GROUP BY $groupBy ORDER BY last_updated DESC LIMIT $page, $ipp";

$command = Yii::app()->db->createCommand($qtxt);
$locationList = $command->queryAll();

$qtxt = "SELECT * FROM item";
$command = Yii::app()->db->createCommand($qtxt);
$itemList = $command->queryAll();

?>

<div id="section-database" class="drop-shadow curved curved-hz-1">
  <header><h2>ฐานข้อมูล</h2>
  <form action="*" enctype="multipart/form-data" id="Location_level0" method="post">
    <label for="Location">จังหวัด</label>

    <select name="" id="Location-level0">
			<option value="">- เลือก -</option>
			<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
			<option value="สมุทรปราการ">สมุทรปราการ</option>
			<option value="นนทบุรี">นนทบุรี</option>
			<option value="ปทุมธานี">ปทุมธานี</option>
			<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
		</select>
	</header>
	<?php foreach ($locationList as $location): ?>	 
	<article class="db-list">
	  <hgroup class="db-item1">
	    <h2><a href="#">ต.บ้านเชี่ยน</a> <span class="location">อ.พุทธมณฑล จ.นครปฐม</span></h2>
	  </hgroup> <!-- /db-item1 -->
	  <div class="db-item2">
		  <div>
			  <strong>จำนวนครัวเรือน :</strong>
			  <span class="family">(421 ครัวเรือน)</span>
		  </div>
		  <div>
		    <strong>ระดับน้ำโดยเฉลี่ย :</strong>
		    <span class="flood">1.5-3 เมตร</span>
	    </div>
	  </div> <!-- /db-item2 -->
    <div class="db-item3">
	    <ul>
	      <?php $itemDetails = WidgetManager::getItemDetails(303, null, true);?>
	      <?php foreach ($itemList as $item): ?>
	      <li class="need-<?php echo $item['id']; ?>">
	        <img 
	          src="<?php echo bu($item['image_url']); ?>" 
	          alt="<?php echo $item['name']; ?>" 
	          title="<?php echo $item['name']; ?>" 
	          class="<?php echo in_array($item['id'], $itemDetails)? 'active': 'in-active';  ?>"/>
	        </li>
	      <?php endforeach ?>
      </ul>
    </div> <!-- /db-item3 -->
	</article><!-- /db-list -->
  <?php endforeach ?>

  <p class="readmore"><a href="#">readmore</a></p>     
</div> <!-- end section-database -->