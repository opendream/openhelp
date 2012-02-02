<?php
return array(
  'salt' => '1qa2ws3ed', // private key first change only
  'adminEmail'=>'webmaster@example.com',
  'siteEmail'=>'confirm@infoaid.org',
  'siteName' => 'InfoAid',
  'googleAnalytic' => 'UA-21899818-2',
  'logo' => 'images/infoaid.png',
	'location'=>array('level0','level1','level2', 'level3'),
	'locationDisplay'=>array('level1','level2', 'level3'),
	'locationFilterStatus'=> array(
	  'all' => 0,
	  'type' => 1,
	),
	
	'webforms' => array(
	  // Webform 1 ========================================================================
	  'reliefsurvey' => array(
	    'name' => 'พื้นที่ต้องการฟื้นฟู',
	    'childName' => 'ข้อมูลจาก Floodtambon',
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
	        'all' => 1,
	        'type' => 1,
	      ),
	      'title' => array(
	        'filter' => 'เลือกประเด็น:',
	        'detail' => 'ส่วนที่ 3 ประเด็นความเสียหาย', 
	        'filterAll' => 'ข้อมูลจาก Floodtambon'
	      )
	    )
	  ),
	  // Webform 2 ========================================================================
	  
	  'supply' => array(
	    'name' => 'โครงการฟื้นฟู',
	    'label' => 'แบบสำรวจโครงการเพื่อช่วยเหลือ / ฟื้นฟูพื้นที่ประสบภัยน้ำท่วม', 
	    'file' => 'webforms/supply.php',
	    'profile' => array(
	      'file' => 'profiles/supply.php',
	      'show' => true,
	    ),
	    'sections' => array(
	      'filter' => array(
          'title' => 'รายละเอียด',
        ),
      ),
      'detail' => '.section1, .section2, .section3, .section5',
	    'color' => '79,167,104',
	    'popup' => '',
	    'filters' => array(
	      'data' => array(
          'filter0' => array(
  	        'label' => 'การเกษตร',
  	        'description' => 'การเกษตร',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter1' => array(
  	        'label' => 'การจัดการภัยพิบัติ',
  	        'description' => 'การจัดการภัยพิบัติ',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter2' => array(
  	        'label' => 'เศรษฐกิจและการฟื้นฟูอาชีพ',
  	        'description' => 'เศรษฐกิจและการฟื้นฟูอาชีพ',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter3' => array(
  	        'label' => 'การศึกษา',
  	        'description' => 'การศึกษา',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter4' => array(
  	        'label' => 'สิ่งแวดล้อม',
  	        'description' => 'สิ่งแวดล้อม',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter5' => array(
  	        'label' => 'อาหาร',
  	        'description' => 'อาหาร',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter5' => array(
  	        'label' => 'สุขภาพ',
  	        'description' => 'สุขภาพ',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter6' => array(
  	        'label' => 'ที่อยู่อาศัย',
  	        'description' => 'ที่อยู่อาศัย',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter7' => array(
  	        'label' => 'สาธารณสุขและน้ำสะอาด',
  	        'description' => 'สาธารณสุขและน้ำสะอาด',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter8' => array(
  	        'label' => 'สิทธิมนุษยชน',
  	        'description' => 'ความเท่าเทียม สิทธิมนุษยชน ความยุติธรรม และประชาธิปไตย',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
  	      'filter9' => array(
  	        'label' => 'อื่นๆ',
  	        'description' => 'อื่นๆ',
  	        'widget' => 'checkBox',
  	        'prefix' => '',
  	      ),
	      ),
	      'status' => array(
	        'all' => 1,
	        'type' => 1,
	      ),
	      'title' => array(
	        'filter' => 'เลือกประเด็น:', 
	        'detail' => 'ประเด็น',
	        'filterAll' => 'โครงการฟื้นฟู',
	      )
	    ),
	  ),
	  
	  // Webform 3 ========================================================================
	  'journalist' => array(
	    'name' => 'นักข่าวพลเมือง',
	    'label' => 'ข่าวพื้นที่', 
	    'file' => 'webforms/journalist.php',
	    'sections' => array(
	      'filter' => array(
          'title' => 'รายละเอียด',
        ),
      ),
      'detail' => '.section1, .section2',
	    'color' => '42,174,185',
	    'popup' => '<h1 style ="text-align:center;margin:10px 0;font-size:20px;font-weight:bold;">กำลังอยู่ในขั้นตอนดำเนินการ</h1>',
	    'filters' => array(
	      'data' => array(
          // No filter
	      ),
	      'status' => array(
	        'all' => 0,
	        'type' => 0,
	      ),
	      'title' => array(
	        'filter' => '', 
	        'detail' => '',
	        'filterAll' => 'นักข่าวพลเมือง',
	      )
	    ),
	  ),
	  
	  // Webform 4 ========================================================================
	  'pp' => array(
	    'parent' => 'reliefsurvey',
      'name' => 'ข้อมูลจาก ปภ.',
      'label' => 'ข้อมูลจาก ปภ.', 
      'file' => 'webforms/pp.php',
      'sections' => array(
        'filter' => array(
          'title' => 'รายละเอียด',
        ),
      ),
      'detail' => '.section1, .section2',
      'color' => '200,180,50',
      'popup' => '',
      'filters' => array(
        'data' => array(
          // No filter
        ),
        'status' => array(
          'all' => 1,
          'type' => 0,
        ),
        'title' => array(
          'filter' => 'ข้อมูลจาก ปภ.', 
          'detail' => '',
          'filterAll' => 'ข้อมูลจาก ปภ.',
        )
      ),
    ),
    
    // Webform 5 ========================================================================
	  'school' => array(
	    'parent' => 'reliefsurvey',
      'name' => 'ข้อมูลจาก โรงเรียน',
      'label' => 'ข้อมูลจาก โรงเรียน', 
      'file' => 'webforms/school.php',
      'sections' => array(
        'filter' => array(
          'title' => 'รายละเอียด',
        ),
      ),
      'maptitle' => 'filter3',
      'maplabel' => 'โรงเรียน',
      'detail' => '.section1',
      'color' => '153,76,197',
      'popup' => '',
      'filters' => array(
        'data' => array(
          // No filter
        ),
        'status' => array(
          'all' => 1,
          'type' => 0,
        ),
        'title' => array(
          'filter' => 'ข้อมูลจาก โรงเรียน', 
          'detail' => '',
          'filterAll' => 'ข้อมูลจาก โรงเรียน',
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

<p style = "margin-bottom:10px;font-size:11px;color:#787878;line-height:18px;">ระบบนี้ร่วมกันพัฒนาโดย <a href = "http://www.changefusion.org/" target = "blank">ChangeFusion<a> และ
<a href = "http://www.opendream.co.th/" target = "blank">Opendream</a> เพื่อเป็นต้นแบบของการใช้งานระบบ
ภูมิสารสนเทศแบบเปิด (OpenGIS) เพื่อการจัดการ
ข้อมูลเพื่อสาธารณประโยชน์</p>',

);
