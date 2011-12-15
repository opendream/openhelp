<?php
return array(
  'adminEmail'=>'webmaster@example.com',
  'siteEmail'=>'site@example.com',
  'siteName' => 'InfoAid',
  'salt' => '1qa2ws3ed',
  'googleAnalytic' => 'UA-21899818-2',
  'logo' => 'images/infoaid.png',
	'location'=>array('level0','level1','level2', 'level3'),
	'locationDisplay'=>array('level1','level2', 'level3'),
	'locationFilterStatus'=> array(
	  'all' => 0,
	  'type' => 1,
	),
	'webforms' => array(
	  'reliefsurvey' => array(
	    'name' => 'พื้นที่ต้องการฟื้นฟู',
	    'label' => 'แบบสํารวจเพื่อการฟื้นฟูชุมชนหลังสถานการณ์ภัยพิบัติระดับตําบล', 
	    'file' => 'webforms/reliefsurvey.php',
	    'popup' => '',
	    'sections' => array(
	      'request' => array(
	        'title' => 'ข้อมูลจาก floodtambon.org',
	        'url' => 'http://floodtambon.org/index.php/request/LocationMultiple',
	        // eval data
	        'data' => '$data = array("name" => "request", "locations" => array());
          foreach ($model->locations as $location) {
            $data["locations"][] = array(
              "level0" => $location->level0,
              "level1" => $location->level1,
              "level2" => $location->level2,
              "level3" => $location->level3,
            );
          }',
	      ),
	      'filter' => array(
	        'title' => 'รายละเอียด',
	      ),
	    ),
	    'detail' => '.section1, .section2',
	    'color' => '210,100,74',
	    'filters' => array(
	      'data' => array(
  	      'filter0' => array(
  	        'label' => 'ความเสียหายต่อชีวิตและความปลอดภัย',
  	        'description' => 'ความเสียหายต่อชีวิตและความปลอดภัย',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	        'options' => array(1 => 'ระดับ 1', 2 => 'ระดับ 2', 3 => 'ระดับ 3', 4 => 'ระดับ 4', 5 => 'ระดับ 5'),
  	      ),
  	      'filter1' => array(
  	        'label' => 'สุขภาพ',
  	        'description' => 'การสาธารณสุข',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	        'options' => array(1 => 'ระดับ 1', 2 => 'ระดับ 2', 3 => 'ระดับ 3', 4 => 'ระดับ 4', 5 => 'ระดับ 5'),
  	      ),
  	      'filter2' => array(
  	        'label' => 'สภาพแวดล้อม',
  	        'description' => 'ที่อยู่อาศัย, สิ่งสาธารณประโยชน์, การศึกษา, สิ่งแวดล้อม, แหล่งน้ำ',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	        'options' => array(1 => 'ระดับ 1', 2 => 'ระดับ 2', 3 => 'ระดับ 3', 4 => 'ระดับ 4', 5 => 'ระดับ 5'),
  	      ),
  	      'filter3' => array(
  	        'label' => 'เศรษฐกิจ',
  	        'description' => 'การฟื้นฟูอาชีพ, การเกษตรและอาหาร, การสื่อสารโทรคมนาคม',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	        'options' => array(1 => 'ระดับ 1', 2 => 'ระดับ 2', 3 => 'ระดับ 3', 4 => 'ระดับ 4', 5 => 'ระดับ 5'),
  	      ),
	      ),
	      'status' => array(
	        'all' => 0,
	        'type' => 1,
	      ),
	      'title' => array(
	        'filter' => 'เลือกประเด็น:',
	        'detail' => 'ส่วนที่ 3 ประเด็นความเสียหาย', 
	      )
	    )
	  ),
	  'supply' => array(
	    'name' => 'โครงการฟื้นฟู',
	    'label' => 'แบบสำรวจโครงการเพื่อช่วยเหลือ / ฟื้นฟูพื้นที่ประสบภัยน้ำท่วม', 
	    'file' => 'webforms/supply.php',
	    'sections' => array(),
	    'color' => '0,100,74',
	    'popup' => '<h1 style ="text-align:center;margin:10px 0;font-size:20px;font-weight:bold;">กำลังอยู่ในขั้นตอนดำเนินการ</h1>',
	    'filters' => array(
	      'data' => array(
	        'filter0' => array(
  	        'label' => 'tmp',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	        'prefix' => '',
  	      ),
	      ),
	      'status' => array(
	        'all' => 0,
	        'type' => 0,
	      ),
	      'title' => array(
	        'filter' => 'เลือกประเด็น:', 
	        'detail' => 'ประเด็น',
	      )
	    ),
	  ),	  
	),
	'about' => '
<p style = "margin-bottom:10px;font-size:12px;line-height:18px;"><span style = "font-size:18px;font-weight:bold;">infoAid</span> เป็นการริเริ่มในการรวบรวมข้อมูลเพื่อ
การฟื้นฟูพื้นที่ภัยพิบัติจากมหาอุทกภัยปี 2554  เพื่อให้
หน่วยงานต่างๆ ทั้งภาคเอกชน ประชาสังคม และหน่วย
งานรัฐ เข้าถึงข้อมูลความต้องการฟื้นฟูของพื้นที่ และ
พื้นที่ทำโครงการฟื้นฟูของหน่วยงานต่างๆ โดยแสดงผล
ในรูปแบบแผนที่และประเภทความต้องการ และ
โครงการฟื้นฟู</p>

<h2 style = "margin-bottom:5px;font-size:16px;font-weight:bold;">การใช้งาน</h2>
<h3 style = "margin-bottom:10px;font-size:14px;font-weight:bold;">พื้นที่ต้องการฟื้นฟู</h3>
<ul style = "margin-bottom:10px;font-size:12px;line-height:18px;list-style:disc inside;">
<li>เลือกการแสดงผลแบบแผนที่ หรือ แบบรายการ</li>
<li>เลือกกรองข้อมูลบนกล่องซ้ายมือ โดยเลือกประเด็นที่
  สนใจและระดับความรุนแรง (1 น้อย - 5 มาก)
  และพื้นที่</li>
</ul>

<h3 style = "margin-bottom:10px;font-size:14px;font-weight:bold;">โครงการฟื้นฟู</h3>
<ul style = "margin-bottom:10px;font-size:12px;line-height:18px;list-style:disc inside;">
<li>เลือกการแสดงผลแบบแผนที่ หรือ แบบรายการ</li>
<li>เลือกกรองข้อมูลบนกล่องซ้ายมือ โดยเลือกประเด็น
  โครงการและพื้นที่</li>
</ul>

<p style = "margin-bottom:10px;font-size:11px;color:#787878;line-height:18px;">ระบบนี้ร่วมกันพัฒนาโดย <a href = "http://www.changefusion.org/" target = "blank">ChangeFusion<a> และ
<a href = "http://www.opendream.co.th/" target = "blank">Opendream</a> เพื่อเป็นต้นแบบของการใช้งานระบบ
ภูมิสารสนเทศแบบเปิด (OpenGIS) เพื่อการจัดการ
ข้อมูลเพื่อสาธารณประโยชน์</p>',

);
