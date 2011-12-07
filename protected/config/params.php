<?php
return array(
  'adminEmail'=>'webmaster@example.com',
  'siteName' => 'FloodTambon',
  'logo' => 'images/infoaid.png',
	'location'=>array('level0','level1','level2', 'level3'),
	'locationDisplay'=>array('level1','level2', 'level3'),
	'webforms' => array(
	  'reliefsurvey' => array(
	    'name' => 'ฟื้นฟูตำบล',
	    'label' => 'แบบสํารวจเพื่อการฟื้นฟูชุมชนหลังสถานการณ์ภัยพิบัติระดับตําบล', 
	    'file' => 'webforms/reliefsurvey.php',
	    'filters' => array(
	      'data' => array(
  	      'filter0' => array(
  	        'label' => 'ความเสียหายต่อชีวิตและความปลอดภัย',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	      ),
  	      'filter1' => array(
  	        'label' => 'สุขภาพ',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	      ),
  	      'filter2' => array(
  	        'label' => 'สภาพแวดล้อม',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	      ),
  	      'filter3' => array(
  	        'label' => 'เศรษฐกิจ',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	      ),
  	      'filter4' => array(
  	        'label' => 'การเตรียมรับมือภัยพิบัติในอนาคต',
  	        'description' => '',
  	        'widget' => 'dropDownList',
  	      ),
	      ),
	      'all' => array(
	        'label' => 'ทั้งหมด',
	        'description' => '',
	        'widget' => 'activeRadioButtonList',
	      ),
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
