<?php
return array(
  'adminEmail'=>'webmaster@example.com',
	'location'=>array('level0','level1','level2'),
	'request'=>array(
	  'extra' => array(
	    'double' => array(
	      /* Limit for 5 fields
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  */
	      array('label' => 'สถานการณ์น้ำ', 'prefix' => 'ระดับน้ำ', 'suffix' => 'เซนติเมตร'),
    	  array('label' => 'จำนวนครัวเรือน', 'prefix' => '', 'suffix' => 'ครัวเรือน'),
	    ),
	    'text' => array(
	      /* Limit for 5 fields
    	  array('label' => '',  'editor' => 'textField', 'options' => array()),
    	  array('label' => '',  'editor' => 'dropDownList', 'options' => array('key', 'value')),
    	  array('label' => '',  'editor' => 'textArea', 'options' => array()),
    	  array('label' => '',  'editor' => 'CKEditorWidget', 'options' => array("config" => array(
					"height"=>"100px",
					"width"=>"100%",
					"toolbar"=>"Basic",
				))),
    	  */
    	  array('label' => 'วิธีการเดินทางเข้าพื้นที่', 'editor' => 'CKEditorWidget', 'options' => array("config" => array(
					"height"=>"50px",
					"width"=>"100%",
					"toolbar"=>"Basic",
				))),
    	  array('label' => 'ข้อสังเกตอื่นๆ', 'editor' => 'CKEditorWidget', 'options' => array("config" => array(
					"height"=>"50px",
					"width"=>"100%",
					"toolbar"=>"Basic",
				))),
	    ),
	  ),
	), 
);