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
	        'title' => 'ความต้องการ',
	        'url' => '',
	      ),
	    ),
	    'detail' => array(
	      '.section1', 'section2'
	      /*
	      'group0' => array(
	        'title' => 'ข้อมูลทั่วไป', 
	        'children' => array(
	          array('prefix' => 'จํานวนครัวเรือน', 'suffix' => 'ครัวเรือน', 'data' => 8),
	          
	          array('type' => 'head', 'data' => 'ประชากรปัจจุบันทั้งหมด'),
	          array('prefix' => 'โดยประมาณ', 'suffix' => 'คน', 'data' => 9),
	          array('prefix' => 'ชาย', 'suffix' => 'คน', 'data' => 10),
	          array('prefix' => 'โดยเฉลี่ยครัวเรือนละ', 'suffix' => 'คน', 'data' => 12),
	          array('prefix' => 'มีประชากรแฝง', 'suffix' => 'คน', 'data' => 13),
	          
	          array('type' => 'head', 'data' => 'การนับถือศาสนา'),
	          array('prefix' => 'พุทธ (ร้อยละ)', 'data' => 14),
	          array('prefix' => 'อิสลาม (ร้อยละ)', 'data' => 15),
	          array('prefix' => 'คริสต์ (ร้อยละ)', 'data' => 16),
	          
	          array('type' => 'head', 'data' => 'การประกอบอาชีพ'),
	          array('prefix' => 'ส่วนใหญ่ประกอบอาชีพ', 'data' => 17),
	          array('prefix' => 'รองลงมา', 'data' => 18),
	        )
	      ),
	      'group1' => array(
	        'title' => 'ผู้ประสานงานในพื้นที่', 
	        'children' => array(
	          
	          array('type' => 'head', 'data' => 'ระดับตําบล/เทศบาล'),
	          
	          array('prefix' => 'จํานวนครัวเรือน', 'suffix' => 'ครัวเรือน', 'data' => 8),
	          
	        )
	      ),
	      */
	    ),
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
  	      /*
  	      'filter4' => array(
  	        'label' => 'การเตรียมรับมือภัยพิบัติในอนาคต',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	      ),
  	      */
	      ),
	      'title' => array(
	        'filter' => 'เลือกประเด็น:', 
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
	        'location' => 'เลือกพื้นที่:',
	      )
	    ),
	  ),	  
	),
);
