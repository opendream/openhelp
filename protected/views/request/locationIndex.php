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
$qtxt = "SELECT $select FROM location, request WHERE location.id = request.location_id AND $where GROUP BY $groupBy ORDER BY last_updated DESC LIMIT $page, $ipp";

$command = Yii::app()->db->createCommand($qtxt);
$locationList = $command->queryAll();

$qtext = "SELECT * FROM item";
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
	      <?php
          $command = Yii::app()->db->createCommand($qtxt);
          $itemList = $command->queryAll();
	      ?>
	      <?php foreach ($itemList as $item): ?>
	      <li class="need-<?php echo $item['id']; ?>">
	        <img 
	          src="<?php echo $item['image_url'] ?>" 
	          alt="<?php echo $item['name'] ?>" 
	          title="<?php echo $item['name'] ?>" 
	          class="in-active"/>
	        </li>
	      <?php endforeach ?>
        <li class="need-1"><img src="images/need-1.png" alt="เสื้อผ้า" title="เสื้อผ้า" class="in-active"/></li>
        <li class="need-2"><img src="images/need-2.png" alt="เครื่องสูบน้ำ" title="เครื่องสูบน้ำ" /></li>
        <li class="need-3"><img src="images/need-3.png" alt="เครื่องกันหนาว" title="เครื่องกันหนาว" class="in-active"/></li>
        <li class="need-4"><img src="images/need-4.png" alt="เครื่องกำเนิดกระแสไฟฟ้า" title="เครื่องกำเนิดกระแสไฟฟ้า"/></li>
        <li class="need-5"><img src="images/need-5.png" alt="น้ำมันเชื้อเพลิง" title="น้ำมันเชื้อเพลิง"/></li>
        <li class="need-6"><img src="images/need-6.png" alt="ก๊าซหุงต้ม" title="ก๊าซหุงต้ม"/></li>
        <li class="need-7"><img src="images/need-7.png" alt="ถุงยังชีพ" title="ถุงยังชีพ"/></li>
        <li class="need-8"><img src="images/need-8.png" alt="น้ำ" title="น้ำ" class="in-active"/></li>
        <li class="need-9"><img src="images/need-9.png" alt="สุขาลอยน้ำ" title="สุขาลอยน้ำ" class="in-active"/></li>
        <li class="need-10"><img src="images/need-10.png" alt="เรือ" title="เรือ"/></li>
        <li class="need-11"><img src="images/need-11.png" alt="ยารักษาโรค" title="ยารักษาโรค"/></li>
        <li class="need-12"><img src="images/need-12.png" alt="เต้นท์ที่พัก" title="เต้นท์ที่พัก"/></li>
        <li class="need-13"><img src="images/need-13.png" alt="อื่น ๆ" title="อื่น ๆ"/></li>
      </ul>
    </div> <!-- /db-item3 -->
	</article><!-- /db-list -->
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
        <li class="need-1"><img src="images/need-1.png" alt="เสื้อผ้า" title="เสื้อผ้า" class="in-active"/></li>
        <li class="need-2"><img src="images/need-2.png" alt="เครื่องสูบน้ำ" title="เครื่องสูบน้ำ" /></li>
        <li class="need-3"><img src="images/need-3.png" alt="เครื่องกันหนาว" title="เครื่องกันหนาว" class="in-active"/></li>
        <li class="need-4"><img src="images/need-4.png" alt="เครื่องกำเนิดกระแสไฟฟ้า" title="เครื่องกำเนิดกระแสไฟฟ้า"/></li>
        <li class="need-5"><img src="images/need-5.png" alt="น้ำมันเชื้อเพลิง" title="น้ำมันเชื้อเพลิง"/></li>
        <li class="need-6"><img src="images/need-6.png" alt="ก๊าซหุงต้ม" title="ก๊าซหุงต้ม"/></li>
        <li class="need-7"><img src="images/need-7.png" alt="ถุงยังชีพ" title="ถุงยังชีพ"/></li>
        <li class="need-8"><img src="images/need-8.png" alt="น้ำ" title="น้ำ" class="in-active"/></li>
        <li class="need-9"><img src="images/need-9.png" alt="สุขาลอยน้ำ" title="สุขาลอยน้ำ" class="in-active"/></li>
        <li class="need-10"><img src="images/need-10.png" alt="เรือ" title="เรือ"/></li>
        <li class="need-11"><img src="images/need-11.png" alt="ยารักษาโรค" title="ยารักษาโรค"/></li>
        <li class="need-12"><img src="images/need-12.png" alt="เต้นท์ที่พัก" title="เต้นท์ที่พัก"/></li>
        <li class="need-13"><img src="images/need-13.png" alt="อื่น ๆ" title="อื่น ๆ"/></li>
      </ul>
    </div> <!-- /db-item3 -->
	</article><!-- /db-list -->  
  <p class="readmore"><a href="#">readmore</a></p>     
</div> <!-- end section-database -->