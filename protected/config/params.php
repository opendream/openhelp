<?php
return array(
  'adminEmail'=>'webmaster@example.com',
	'location'=>array('level0','level1','level2'),
	'request'=>array(
	  'extra' => array(
	    'location' => array(
	      array('label' => 'หมู่บ้าน', 'prefix' => '', 'suffix' => ''),
	    ),
	    'double' => array(
	      /* Limit for 10 fields
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  array('label' => '', 'prefix' => '', 'suffix' => ''),
    	  */
    	  // Remove this when make this project to opensource ==================================================
    	  array('label' => 'จำนวนครัวเรือน', 'prefix' => '', 'suffix' => 'ครัวเรือน', 'func' => 'sum'),
    	  array('label' => 'จำนวนประชากร', 'prefix' => '', 'suffix' => 'คน', 'func' => 'sum'),
    	  array('label' => 'ระดับน้ำ', 'prefix' => '', 'suffix' => 'เมตร', 'func' => 'min-max'),
	      
	    ),
	    'text' => array(
	      /* Limit for 15 fields
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

    	  array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านสุขภาวะ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
    	  array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านเศรษฐกิจ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านสิ่งแวดล้อม', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านเยาวชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'สถานการณ์ปัญหาในชุมชน - ปัญหาอื่นๆ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ทรัพยากรและการจัดการในชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ลักษณะชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'การเดินทางเข้าชุมชน', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ข้อสังเกตอื่นๆ', 'editor' => 'CKEditorWidget', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ความเร่งด่วน', 'editor' => 'dropDownList', 'options' => array(
    	   'มากที่สุด' => 'มากที่สุด',
    	   'มาก' => 'มาก',
    	   'ปานกลาง' => 'ปานกลาง',
    	   'น้อย' => 'น้อย',
    	  )),
	    ),
	  ),
	), 
);
