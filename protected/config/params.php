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
	    'filters' => array(
	      'data' => array(
  	      'filter0' => array(
  	        'label' => 'ความเสียหายต่อชีวิตและความปลอดภัย',
  	        'description' => 'ความเสียหายต่อชีวิตและความปลอดภัย',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	      ),
  	      'filter1' => array(
  	        'label' => 'สุขภาพ',
  	        'description' => 'การสาธารณสุข',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	      ),
  	      'filter2' => array(
  	        'label' => 'สภาพแวดล้อม',
  	        'description' => 'ที่อยู่อาศัย, สิ่งสาธารณประโยชน์, การศึกษา, สิ่งแวดล้อม, แหล่งน้ำ',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
  	      ),
  	      'filter3' => array(
  	        'label' => 'เศรษฐกิจ',
  	        'description' => 'การฟื้นฟูอาชีพ, การเกษตรและอาหาร, การสื่อสารโทรคมนาคม',
  	        'widget' => 'dropDownList',
  	        'prefix' => 'ระดับ ',
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
	        'location' => 'เลือกพื้นที่:',
	      )
	    )
	  ),
	  'supply' => array(
	    'name' => 'โครงการฟื้นฟู',
	    'label' => 'แบบสำรวจโครงการเพื่อช่วยเหลือ / ฟื้นฟูพื้นที่ประสบภัยน้ำท่วม', 
	    'file' => 'webforms/supply.php',
	    'filters' => array(
	      'data' => array(
	        'filter0' => array(
  	        'label' => 'tmp',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	      )
	      )
	    ),
	  ),	  
	),
);
