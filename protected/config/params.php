<?php
return array(
  'adminEmail'=>'webmaster@example.com',
	'location'=>array('level0','level1','level2', 'level3'),
	'locationDisplay'=>array('level1','level2', 'level3'),
	'pages' => array(
	  'volunteer' => array('label' => 'อาสาสมัคร', 'file' => 'pages/volunteer.html'),
	  'about' => array('label' => 'เกี่ยวกับเรา', 'url' => 'about', 'file' => 'pages/about.html'),
	),
	'content' => array(
	  'situation' => array(
	    'name' => 'สถานการณ์ประจำวัน',
	    'detail' => '<p>สอศ.มอบนโยบายให้อาชีวศึกษาจังหวัดประสานงานกับหน่วยงานต่างๆ เพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น สอศ.มอบ นโยบายให้ อาชีวศึกษาจังหวัดประสานงานกับหน่วยงานต่างๆ เพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น เพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น สอศ.มอบ นโยบายให้ อาชีวศึกษาจังหวัดประสานงานกับหน่วยงานต่างๆ เพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น</p>
	    <p>เพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น สอศ.มอบ นโยบายให้ อาชีวศึกษาจังหวัดประเพื่อร่วมให้ความช่วยเหลือ โดยได้กำหนดให้ความช่วยเหลือเป็น สอศ.มอบ นโยบายให้ อาชีวศึกษาจังหวัดประสาน งานกับหน่วยงานต่างๆ เพื่อร่วมให้ความช่วยเหลือ</p>',
	  ),
	  'news' => array(
	    'name' => 'ข่าวพื้นที่ประสบภัย',
	    'detail' => '',
	  )
	),
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

    	  array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านสุขภาวะ', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
    	  array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านเศรษฐกิจ', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านสิ่งแวดล้อม', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'สถานการณ์ปัญหาในชุมชน - ด้านเยาวชน', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'สถานการณ์ปัญหาในชุมชน - ปัญหาอื่นๆ', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ทรัพยากรและการจัดการในชุมชน', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ลักษณะชุมชน', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'การเดินทางเข้าชุมชน', 'editor' => 'textArea', 'options' => array(
					"height"=>"50px",
				)),
				array('label' => 'ข้อสังเกตอื่นๆ', 'editor' => 'textArea', 'options' => array(
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
