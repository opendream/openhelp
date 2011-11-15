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

  <div id="section-report" class="drop-shadow curved curved-hz-1">
    <header><h2>รายงานสถานการณ์</h2></header>
    <article id="rp-sticky">
	    <span>13 พ.ย. 54 - 21.39 น.</span>
      <h3><a href="#">จ.นครราชสีมา อ.อำเภอเมือง ต.สุรนารี ระดับน้ำคลี่คลายแล้ว</a></h3>
      <p>สอศ.มอบนโยบายให้อาชีวศึกษาจังหวัดประสานงานกับหน่วยงานต่างๆ เพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น... </p>
    </article> <!-- /rp-sticky -->
    <div id="rp-list">
        <article><span>13 พ.ย. 54 - 21.39 น.</span><p><a href="#">จ.ชัยนาท อ.หันคา ต.บ้านเชี่ยน ระดับน้ำคลี่คลายแล้วอยู่ระหว่างฟื้นฟู</a></p></article>
        <article><span>13 พ.ย. 54 - 21.39 น.</span><p><a href="#">จ.ชัยนาท อ.หันคา ต.บ้านเชี่ยน ระดับน้ำคลี่คลายแล้วอยู่ระหว่างฟื้นฟู</a></p></article>
				<article><span>13 พ.ย. 54 - 21.39 น.</span><p><a href="#">จ.ชัยนาท อ.หันคา ต.บ้านเชี่ยน ระดับน้ำคลี่คลายแล้วอยู่ระหว่างฟื้นฟู</a></p></article>
        <article><span>13 พ.ย. 54 - 21.39 น.</span><p><a href="#">จ.ชัยนาท อ.หันคา ต.บ้านเชี่ยน ระดับน้ำคลี่คลายแล้วอยู่ระหว่างฟื้นฟู</a></p></article>
        <article><span>13 พ.ย. 54 - 21.39 น.</span><p><a href="#">จ.ชัยนาท อ.หันคา ต.บ้านเชี่ยน ระดับน้ำคลี่คลายแล้วอยู่ระหว่างฟื้นฟู</a></p></article>
				<article><span>13 พ.ย. 54 - 21.39 น.</span><p><a href="#">จ.ชัยนาท อ.หันคา ต.บ้านเชี่ยน ระดับน้ำคลี่คลายแล้วอยู่ระหว่างฟื้นฟู</a></p></article>
    </div> <!-- /rp-list -->
    <p class="readmore"><a href="#">readmore</a></p>
  </div> <!-- end section-report -->

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
    <?php $this->renderPartial('//request/location', array(
 			'query'=> array(),
 			'page' => 0,
 			'ipp' => 10,
 		)); ?>
  </div> <!-- end section-database -->
</div> <!-- end content -->
