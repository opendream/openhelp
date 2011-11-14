<?php
return array(
  'adminEmail'=>'webmaster@example.com',
	'location'=>array('level0','level1','level2'),
	'request'=>array(
	  'extra' => array(
	    'double' => array(
	      /* Limit for 10 fields
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  */
    	  // Remove this when make this project to opensource ==================================================
	      array('label' => 'สถานการณ์น้ำ', 'prefix' => 'ระดับน้ำ', 'suffix' => 'เมตร'),
    	  array('label' => 'จำนวนครัวเรือน', 'prefix' => '', 'suffix' => 'ครัวเรือน'),
	    ),
	    'text' => array(
	      /* Limit for 10 fields
    	  array('label' => '',  'editor' => 'textField', 'options' => array()),
    	  array('label' => '',  'editor' => 'dropDownList', 'options' => array('key', 'value')),
    	  array('label' => '',  'editor' => 'textArea', 'options' => array()),
    	  array('label' => '',  'editor' => 'CKEditorWidget', 'options' => array("config" => array(
					"height"=>"100px",
					"width"=>"100%",
					"toolbar"=>"Basic",
				))),
    	  */
    	  // Remove this when make this project to opensource ==================================================
    	  array('label' => 'ความเร่งด่วน', 'editor' => 'dropDownList', 'options' => array(
    	   'มากที่สุด' => 'มากที่สุด',
    	   'มาก' => 'มาก',
    	   'ปานกลาง' => 'ปานกลาง',
    	   'น้อย' => 'น้อย',
    	  )),
    	  array('label' => 'หมู่บ้าน', 'editor' => 'textField'),
    	  array('label' => 'ปัญหาอื่นๆ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
    	  array('label' => 'ลักษณะของชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ประวัติความช่วยเหลือ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ทรัพยากรที่มีในชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'การเดินทางเข้าชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ข้อสังเกตุอื่นๆ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'การจัดการในชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
	    ),
	  ),
	), 
);