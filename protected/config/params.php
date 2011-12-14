<?php
return array(
  'adminEmail'=>'webmaster@example.com',
  'siteName' => 'FloodTambon',
  'logo' => 'images/infoaid.png',
	'location'=>array('level0','level1','level2', 'level3'),
	'locationDisplay'=>array('level1','level2', 'level3'),
	'webforms' => array(
	  'reliefsurvey' => array(
	    'name' => 'พื้นที่ต้องการฟื้นฟู',
	    'label' => 'แบบสํารวจเพื่อการฟื้นฟูชุมชนหลังสถานการณ์ภัยพิบัติระดับตําบล', 
	    'file' => 'webforms/reliefsurvey.php',
	    'sections' => array(
	      'request' => array(
	        'title' => 'ข้อมูลจาก floodtambon.org',
	        'url' => '',
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
	    'filters' => array(
	      'data' => array(
	        'filter0' => array(
  	        'label' => 'tmp',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	        'prefix' => '',
  	      ),
	      ),
	      'title' => array(
	        'filter' => 'เลือกประเด็น:', 
	        'detail' => 'ประเด็น',
	      )
	    ),
	  ),	  
	),
);
