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
	    'file' => 'webforms/reliefsurvey.php'
	  ),
	  'supply' => array(
	    'name' => 'โครงการฟื้นฟู',
	    'label' => 'แบบสำรวจโครงการเพื่อช่วยเหลือ / ฟื้นฟูพื้นที่ประสบภัยน้ำท่วม', 
	    'file' => 'webforms/supply.php'
	  ),	  
	),
);
