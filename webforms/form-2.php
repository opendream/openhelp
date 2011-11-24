<!doctype html>
<html lang="th" dir="ltr">
<head>
	<meta charset="utf-8" />	
	<title>แบบสำรวจข้อมูลเครือข่ายร่วมสร้างชุมชนท้องถิ่นน่าอยู่เพื่อการจัดการภัยพิบัติ</title>	
	<meta name="title" content="Openhelp" />
	<meta name="description" content="แบบสำรวจข้อมูลเครือข่ายร่วมสร้างชุมชนท้องถิ่นน่าอยู่เพื่อการจัดการภัยพิบัติ">
	<meta name="google-site-verification" content="" />
	<link rel="shortcut icon" href="/images/favicon.ico" />
	<!--
<link rel="stylesheet" href="/css/reset.css" />		 	
	<link rel="stylesheet" href="/css/style.css" />
-->
	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
		<style type="text/css">
		.no-float{
			float: none;
			width: 125px;
			display: inline-block;
		}
		
		table input.span3, textarea.span3, table input.span2, textarea.span2{
			margin: 0;
		}
		input.span3, textarea.span3, input.span2, textarea.span2{
			margin-left: 20px;
			margin-right: 20px;
		}
		}
		.clear {clear: both;}
		.indent {padding: 0 0 0 30px}
	</style>
</head>

<body>
<div class="container">
    <h1>แบบสำรวจข้อมูลเครือข่ายร่วมสร้างชุมชนท้องถิ่นน่าอยู่เพื่อการจัดการภัยพิบัติ</h1>
    <form action="*" id="" method="post">
      <fieldset title="ข้อมูลทั่วไปของผู้ให้ข้อมูล" class="info-general">
        <legend>ข้อมูลทั่วไปของผู้ให้ข้อมูล</legend>
        <div class="clearfix">
				  <label>ชื่อ – นามสกุลผู้ให้ข้อมูล (นาย/นาง/นางสาว)</label>
				  <div class="input">
				    <input class="xlarge" name="Data[0]" size="40" type="text" value="<?php echo $Data[0]; ?>">
				  </div>
				</div><!-- /clearfix -->
				<div class="clearfix">
				  <label for="xlInput">สถานที่ทำงาน</label>
				  <div class="input">
				    <input class="xlarge" name="Data[1]" size="30" type="text" value="<?php echo $Data[1]; ?>">
				  </div>
				</div><!-- /clearfix -->
				<div class="clearfix">
					<label class="no-float">สถานที่ทํางาน</label>
					<input class="span2" name="Data[2]" type="text"  value="<?php echo $Data[2]; ?>">
					<label class="no-float">หมู่ที่</label>
					<input class="span2" name="Data[3]" type="text"  value="<?php echo $Data[3]; ?>">
					<label class="no-float">ตําบล</label>
					<input class="span2" name="Data[4]" type="text"  value="<?php echo $Data[4]; ?>">
				</div>
				<div class="clearfix">
					<label class="no-float">อําเภอ</label>
					<input class="span2" name="Data[5]" type="text" value="<?php echo $Data[5]; ?>">
					<label class="no-float">จังหวัด</label>
					<input class="span2" name="Data[6]" type="text" value="<?php echo $Data[6]; ?>">
					<label class="no-float">โทรศัพท์</label>
					<input class="span2" name="Data[7]" type="text" value="<?php echo $Data[7]; ?>">
				</div>
				<div class="clearfix">
				  <label>ตำแหน่งทางสังคม</label>
				  <div class="input">
				    <input class="xlarge" name="Data[8]" size="30" type="text" value="<?php echo $Data[8]; ?>">
				  </div>
				</div><!-- /clearfix -->				
				<div class="clearfix">
				  <label>วันที่ให้ข้อมูล</label>
				  <div class="input">
				    <input class="xlarge" name="Data[9]" size="30" type="text" value="<?php echo $Data[9]; ?>">
				  </div>
				</div><!-- /clearfix -->
      </fieldset> <!-- /ข้อมูลทั่วไปของผู้ให้ข้อมูล -->
      <br/><br/>
      
<!-- /// -->
      <fieldset title="ข้อมูลทั่วไปของตำบล" class="info-tambon">
        <legend>ส่วนที่ 1 ข้อมูลทั่วไปของตำบล</legend>
        <div class="clearfix">
        <p>1. จำนวนหมู่บ้านทั้งหมดโดยประมาณ</p>
				  <label class="no-float">จำนวนหมู่บ้าน</label>
					<input class="span1" name="Data[10]" size="10" type="text" value="<?php echo $Data[10]; ?>"> <span>หมู่บ้าน</span>
				 </div>
				 <div class="clearfix">
				 <p>2. ประชากรปัจจุบันทั้งหมดโดยประมาณ</p>
						<label class="no-float">ประชากรทั้งหมด</label>
						<input class="span1" name="Data[11]" type="text" value="<?php echo $Data[11]; ?>"> <span>คน</span>
						<label class="no-float">ชาย</label>
						<input class="span1" name="Data[12]" type="text" value="<?php echo $Data[12]; ?>"> <span>คน</span>
						<label class="no-float">หญิง</label>
						<input class="span1" name="Data[13]" type="text" value="<?php echo $Data[13]; ?>"> <span>คน</span>
						<label class="no-float">โดยเฉลี่ยครัวเรือนละ</label>
						<input class="span1" name="Data[14]" type="text" value="<?php echo $Data[14]; ?>"> <span>คน</span>
					</div>
					<div class="clearfix">
						<p>3. การนับถือศาสนา</p>
						<label class="no-float">ศาสนาพุทธ</label>
						<input class="span1" name="Data[15]" type="text" value="<?php echo $Data[15]; ?>"> <span>%</span>
						<label class="no-float">คริสต์</label>
						<input class="span1" name="Data[16]" type="text" value="<?php echo $Data[16]; ?>"> <span>%</span>
						<label class="no-float">อิสลาม</label>
						<input class="span1" name="Data[17]" type="text" value="<?php echo $Data[17]; ?>"> <span>%</span>
          </div>  
 				  <div class="clearfix">
						<p>4. การประกอบอาชีพของประชาชนในหมู่บ้าน/ชุมชน</p>
						<label class="no-float">ส่วนใหญ่ประกอบอาชีพ</label>
						<input class="span4" name="Data[18]" type="text" value="<?php echo $Data[18]; ?>">
						<label class="no-float">รองลงมาคือ</label>
						<input class="span4" name="Data[19]" type="text" value="<?php echo $Data[19]; ?>"><br />
						<label class="no-float">การประกอบอาชีพหลากหลาย ได้แก่</label>
						<input class="span8" name="Data[20]" type="text" value="<?php echo $Data[20]; ?>">
          </div>            
 				  <div class="clearfix">
						<p>5. ข้อมูลด้านการบริการสาธารณะและสาธารณูปโภค</p>
					  <div class="clearfix indent">
					    <label class="no-float">1.5.1 สถานที่ที่ชาวบ้านนิยมส่งบุตรหลานไปเรียน จำนวนโรงเรียน</label>
					    <input class="span1" name="Data[21]" type="text" value="<?php echo $Data[21]; ?>"> <span>โรงเรียน</span>
					  </div>
					 	<div class="clearfix">
					    <label class="no-float">1.5.2 จำนวนสถานที่ประกอบพิธีกรรมทางศาสนา</label>
					    <input class="span1" name="Data[22]" type="text" value="<?php echo $Data[22]; ?>"> <span>แห่ง</span>
					  </div>
					  
					 	<div class="clearfix">
						  <label>1.5.3 แหล่งน้ำเพื่อการอุปโภคในหมู่บ้าน/ชุมชนได้แก่</label>
              <div class="input">
                <ul class="inputs-list">
                  <li>
                    <label>
                      <input type="checkbox" name="Data[23]" value="น้ำประปา" <?php if ($Data[23] == 'value'): ?> checked="checked" <?php endif; ?>>
                      <span>น้ำประปา</span>
                    </label>
                  </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="Data[24]" value="น้ำบาดาล" <?php if ($Data[24] == 'value'): ?> checked="checked" <?php endif; ?>>
	                    <span>น้ำบาดาล</span>
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="Data[25]" value="อื่น ๆ" <?php if ($Data[25] == 'value'): ?> checked="checked" <?php endif; ?>>
	                    <span>อื่น ๆ</span> <input class="span4" id="" name="" type="text"  placeholder="">
	                  </label>
	                </li>
                </ul>
              </div> <!-- end input -->
            </div>
            <div class="clearfix">
              <label>1.5.4 แหล่งน้ำเพื่อการบริโภค ได้แก่</label>
               <input class="xlarge" id="Data[0]" size="40" type="text" value="<?php echo $Data[0]; ?>">
            </div>	               
					</div> <!-- end clearfix 5. --> 
 
          <li class="clear">
            <p>ข้อมูลด้านสุขภาพของชุมชน</p>
            <ul>
              <li>กลุ่มผู้ช่วยเหลือตัวเองไม่ได้
                <ul>
                  <li>
                    <label class="no-float">จำนวนคนพิการ</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
						      </li>
                  <li>
                    <label class="no-float">จำนวนผู้สูงอายุ</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
						      </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วย</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
						        <label class="no-float">ระบุโรค</label> <input class="span4" id="" name="" type="text"  placeholder="">
						        <span class="help-block">(ระบุโรค เช่น ไตวาย มะเร็ง ผู้ป่วยใส่เครื่องช่วยหายใจ อัมพาต ผู้ป่วยทางจิต เป็นต้น) </span>
						      </li>
                </ul>
              </li> <! -- /end 1.6.1 กลุ่มผู้ช่วยเหลือตัวเองไม่ได้ -->
              <li>ผู้ป่วยด้วยโรคเรื้อรังพอช่วยตนเองได้ แต่ต้องได้รับยาและการติดตามอาการเป็นประจำ
                <ul>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคความดัน</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคเบาหวาน</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคไต</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>           
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคหัวใจ</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคหอบหืด</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคถุงลมโป่งพอง</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยโรคอื่นๆได้แก่</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนผู้ป่วยเรื้อรังอื่นๆ ที่ต้องได้รับยาประจำ เช่น หัวใจ หอบหืด ถุงลมโป่งพอง ฯลฯ โปรดระบุโรค</label>
                    <input class="span4" id="" name="" type="text"  placeholder="">
                    <label class="no-float">จำนวน</label>
						        <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนหญิงตั้งครรภ์</label>
						        <input class="span4" id="" name="" type="text"  placeholder=""> <span>คน</span>
										<label class="no-float">ระบบอายุครรภ์</label>
										<input class="span8" id="" name="" type="text"  placeholder=""> <span>เดือน</span>
                  </li>
                  <li>
                    <label class="no-float">จำนวนเด็กทารกที่ต้องการนมผงจำนวน</label>
						        <input class="span4" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
                    <label class="no-float">เด็กอายุต่ำกว่า 5 ขวบจำนวน</label>
						        <input class="span4" id="" name="" type="text"  placeholder=""> <span>คน</span>
                  </li>
                  <li>
  			            <label id="optionsRadio">การบันทึกทางคลินิกหรือรายงานเกี่ยวกับความกังวลด้านสุขภาพโดยผู้ประกอบวิชาชีพด้านสุขภาพหรือไม่</label>
				            <div class="input">
				              <ul class="inputs-list">
				                <li>
				                  <label>
				                    <input type="radio" checked="" name="optionsRadios" value="option1">
				                    <span>มี จัดทำโดย</span> <input class="span4" id="" name="" type="text"  placeholder="">
				                  </label>
				                </li>
				                <li>
				                  <label>
				                    <input type="radio" name="optionsRadios" value="option2">
				                    <span>ไม่มี</span>
				                  </label>
				                </li>
				              </ul>
				            </div>
                  </li>
                </ul>
              </li> <! -- /end 1.6.2 ผู้ป่วยด้วยโรคเรื้อรังพอช่วยตนเองได้ -->           
            </ul> <! -- /end 6 -->
            <li class="clear">
              <label for="fileInput">แผนที่แสดงขอบเขตและเส้นทางภายในหมู่บ้าน โดยระบายสีพื้นที่ที่ได้รับผลกระทบจากน้ำท่วม</label>
              <input class="input-file" id="fileInput" name="fileInput" type="file">
            </li>
          </li>             
        </ol>
      </fieldset> <! -- /end ส่วนที่ 1 ข้อมูลทั่วไปของตำบล -->   
      
      <fieldset>
        <legend>ส่วนที่ 2 การสำรวจความเสียหาย</legend>
        <ol>
          <li><p>ในปัจจุบันพื้นที่ของท่านอยู่ในสถานการณ์ใดมากที่สุด</p>
            <ul class="inputs-list">
              <li>
                <label>
                  <input type="radio" checked="" name="optionsRadios" value="option1">
                  <span>ไม่ได้รับผลกระทบ</span> <strong>(กรุณาข้ามไปตอบส่วนที่ 3)</strong>
                </label>
              </li>
              <li>
                <label>
                  <input type="radio" name="optionsRadios" value="option2">
                  <span>กำลังประสบปัญหาน้ำท่วม ประมาณร้อยละเท่าไรของพื้นที่</span> <input class="span1" id="" name="" type="text"  placeholder=""> <span>เป็นระยะเวลารวม</span> <input class="span1" id="" name="" type="text"  placeholder=""> <span>วัน</span>
                </label>
              </li>
              <li>
                <label>
                  <input type="radio" name="optionsRadios" value="option2">
                  <span>น้ำลดแล้ว กำลังอยู่ในช่วงฟื้นฟู โดยประมาณร้อยละ</span> <input class="span1" id="" name="" type="text"  placeholder=""> <span>ของพื้นที่</span><span>เป็นระยะเวลารวม</span> <input class="span1" id="" name="" type="text"  placeholder=""> <span>วัน</span>
                </label>
              </li>
              <li>
                <label>
                  <input type="radio" name="optionsRadios" value="option2">
                  <span>พื้นที่กำลังจะรับน้ำท่วม ในอีกประมาณ</span> <input class="span1" id="" name="" type="text"  placeholder=""> <span>วัน</span>
                </label>     
                <p>
			            <label for="textarea">โปรดสรุปสถานการณ์ในปัจจุบันของพื้นที่คร่าวๆ</label>
			            <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
						  </p>
						  </li>
            </ul>
          </li> <!-- /end 2.1  ในปัจจุบันพื้นที่ของท่านอยู่ในสถานการณ์ใดมากที่สุด -->
          <li><p>พื้นที่ที่ได้รับผลกระทบในความรับผิดชอบของท่าน</p>
            <label class="no-float">มีจำนวน</label>
				    <input class="span1" id="" name="" type="text"  placeholder=""> <span>หมู่บ้าน</span>
				    <label class="no-float">ได้แก่</label>
				    <input class="span4" id="" name="" type="text"  placeholder="">
				    <label class="no-float">ประมาณ</label>
				    <input class="span1" id="" name="" type="text"  placeholder=""> <span>ครัวเรือน</span>
				    <label class="no-float">ผู้ต้องอพยพออกจากครัวเรือนประมาณ</label>
				    <input class="span1" id="" name="" type="text"  placeholder=""> <span>ครัวเรือน</span>
          </li> <!-- /end 2.2 พื้นที่ที่ได้รับผลกระทบในความรับผิดชอบของท่าน -->
          
          <li><p>คนที่เสียชีวิต สูญหาย หรือบาดเจ็บจากวิกฤตินี้</p>
	          <div class="clearfix">
	            <label class="no-float">เสียชีวิต</label>
					    <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
					    <input class="span1" id="" name="" type="text"  placeholder=""> <span>วันที่แล้ว</span>
							<label class="no-float">สาเหตุหลัก</label> <input class="span4" id="" name="" type="text"  placeholder=""> 
					  </div>
	          <div class="clearfix">
	            <label class="no-float">สูญหาย</label>
					    <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
					    <input class="span1" id="" name="" type="text"  placeholder=""> <span>วันที่แล้ว</span>
							<label class="no-float">สาเหตุหลัก</label> <input class="span4" id="" name="" type="text"  placeholder=""> 
					  </div>
	          <div class="clearfix">
	            <label class="no-float">บาดเจ็บ</label>
					    <input class="span1" id="" name="" type="text"  placeholder=""> <span>คน</span>
					    <input class="span1" id="" name="" type="text"  placeholder=""> <span>วันที่แล้ว</span>
							<label class="no-float">สาเหตุหลัก</label> <input class="span4" id="" name="" type="text"  placeholder=""> 
					  </div>
          </li> <!-- /end 2.3 คนที่เสียชีวิต สูญหาย หรือบาดเจ็บจากวิกฤตินี้ -->          
          
          <li><p>พื้นที่มีปัจจัยเสี่ยงต่อความปลอดภัยในชีวิตและทรัพย์สินหรือไม่</p>
            <ul class="inputs-list">
              <li>
                <label>
                  <input type="radio" checked="" name="optionsRadios" value="option1">
                  <span>ไม่มี</span>
                </label>
              </li>
              <li>
                <label>
                  <input type="radio" checked="" name="optionsRadios" value="option2">
                  <span>มี โปรดเลือก</span>
                </label>
                <ul>
		              <li>
		                <label>
		                  <input type="radio" checked="" name="optionsRadios" value="option3">
		                  <span>การโจรกรรมทรัพย์สิน</span>
		                </label>
		              </li>
		              <li>
		                <label>
		                  <input type="radio" checked="" name="optionsRadios" value="option4">
		                  <span>สัตว์ร้าย เช่น จระเข้ งู</span>
		                </label>
		              </li>		
		            	<li>
		                <label>
		                  <input type="radio" checked="" name="optionsRadios" value="option5">
		                  <span>อื่น ๆ</span> <input class="span2" id="" name="" type="text"  placeholder="">
		                </label>
		              </li>	
                </ul> 
              </li>	
            </ul><! -- /inputs-list -->
          </li> <!-- /end 2.4 พื้นที่มีปัจจัยเสี่ยงต่อความปลอดภัยในชีวิตและทรัพย์สินหรือไม่ -->
          
          <li><p>การดำเนินการบรรเทาสาธารณภัยที่ผ่านมา</p>
            <ul class="inputs-list">
              <li>
                <label>
                  <input type="radio" checked="" name="optionsRadios" value="option1">
                  <span>มีหน่วยงานภายนอกมาช่วยดำเนินการ ได้</span> <input class="span4" id="" name="" type="text"  placeholder="">
                </label>
              </li>
              <li>
                <label>
                  <input type="radio" checked="" name="optionsRadios" value="option2">
                  <span>พื้นที่จัดการเองโดยการ</span>
                </label>
                <ul>
		              <li>
		                <label>
		                  <input type="radio" checked="" name="optionsRadios" value="option3">
		                  <span>จัดศูนย์ผู้อพยพจำนวน</span> <input class="span1" id="" name="" type="text"  placeholder=""> <span>ศูนย์</span>
		                  <label class="left">สถานที่</label> <input class="span2" id="" name="" type="text"  placeholder="">
		                </label>
		              </li>
		              <li>
		                <label>
		                  <input type="radio" checked="" name="optionsRadios" value="option4">
		                  <span>มีระบบเตือนภัยล่งหน้าก่อนเกิดภัยพิบัติ</span>
		                </label>
		              </li>		
		            	<li>
		                <label>
		                  <input type="radio" checked="" name="optionsRadios" value="option5">
		                  <span>มีจัดการด้านอื่นๆ ได้แก่</span> <input class="span2" id="" name="" type="text"  placeholder="">
		                </label>
		              </li>	
                </ul> 
               </li>  
             </ul>
           </li> <!-- /end 2.5 การดำเนินการบรรเทาสาธารณภัยที่ผ่านมา -->   
        </ol>
      </fieldset>
      <br/><br/>
      
      <fieldset>
        <legend>ส่วนที่ 3 ศักยภาพและความต้องการของพื้นที่</legend>
        <h3>3.1 ด้านเครื่องมือ/อุปกรณ์</h3>
        <span class="help-block">***กรุณาเติมคำตอบลงในช่องว่างทุกข้อ ถ้าไม่มีกรุณา  ( - )  ดังตัวอย่างข้างบนนี้ ***</span>
        <table class="bordered-table">
        <thead>
          <tr>
            <th width="400">ด้านเครื่องมือ / อุปกรณ์</th>
            <th>จำนวนที่มีอยู่จริงในพื้นที่</th>
            <th>จำนวนที่สามารถให้ความช่วยเหลือในพื้นที่อื่นได้</th>
            <th>จำนวนที่ต้องการการสนับสนุนเพิ่มเติม</th>
            <th>ระดับความต้องการสนับสนุน (วัน)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. รถ</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">1.1 รถกระบะ (สูง)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 รถบรรทุก 6 ล้อ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 รถบรรทุก 10 ล้อ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">1.4 รถตู้</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th class="indent">1.5 รถดับเพลิง</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">1.6 รถไฟฟ้าส่องสว่าง</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th class="indent">1.7 อื่นๆ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
          <tr>
            <th>2. เรือ</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">2.1 เรือท้องแบนแบบอลูมิเนียม</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 เรือท้องแบนไฟเบอร์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">2.3 เรือเล็กพร้อมพายแบบ HDPE</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">2.4 เรือเล็กพร้อมพายแบบไฟเบอร์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th class="indent">2.5 เรือยาง</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">2.6 เรือหางยาว</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th class="indent">2.7 เจ็ตสกี</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
          <tr>
            <th class="indent">2.8 เครื่องยนต์เรือ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>
          <tr>
            <th class="indent">2.9 อื่น ๆ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>                    
          <tr>
            <th>3. เครื่องสูบน้ำ</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">3.1 ขนาดท่อ 8 นิ้ว (ไฟฟ้า)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 ขนาดท่อ 8 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">3.3 ขนาดท่อ 10 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th class="indent">3.4 ขนาดท่อ 12 นิ้ว (ไฟฟ้า)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">3.5 ขนาดท่อ 18 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">3.6 อื่น ๆ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>            
					<tr>
            <th>4. สุขา</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">4.1 รถสุขาเคลื่อนที่</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 สุขาชั่วคราวแบบลอยน้ำ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">4.3 สุขาชั่วคราวแบบใช้ถุงดำ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>             
          <tr>
            <th class="indent">4.4 อื่น ๆ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>             
          <tr>
            <th>5. เครื่องกรองน้ำ</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">5.1 ถาวร</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">5.2 เคลื่อนที่</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">5.3 อื่น ๆ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th>6. เสื้อชูชีพ</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">6.1 ผู้ใหญ่</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">6.2 เด็ก</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">6.3 อื่น ๆ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>                         
          <tr>
            <th>7. เครื่องปั่นไฟแบบเคลื่อนที่</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">7.1 ขนาดเล็ก 1-20 กิโลวัตต์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">7.2 ขนาดกลาง 21-500 กิโลวัตต์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">7.3 ขนาดใหญ่ >500 กิโลวัตต์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>                         
          <tr>
            <th>8. เครื่องปั่นไฟแบบติดตั้ง</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">8.1 ขนาดเล็ก 1-20 กิโลวัตต์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">8.2 ขนาดกลาง 21-500 กิโลวัตต์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">8.3 ขนาดใหญ่ >500 กิโลวัตต์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th>9. วิทยุสื่อสาร</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">9.1 วิทยุดำ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">9.2 วิทยุแดง</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>        
        </tbody>
      </table>
      
      <h3>3.2 ด้านสถานที่</h3>
        <span class="help-block">***กรุณาเติมคำตอบลงในช่องว่างทุกข้อ ถ้าไม่มีกรุณา  ( - ) ***</span>
        <table class="bordered-table">
        <thead>
          <tr>
            <th width="400">ด้านสถานที่</th>
            <th>จำนวนที่มีอยู่จริงในพื้นที่</th>
            <th>จำนวนที่สามารถให้ความช่วยเหลือในพื้นที่อื่นได้</th>
            <th>จำนวนที่ต้องการการสนับสนุนเพิ่มเติม</th>
            <th>ระดับความต้องการสนับสนุน (วัน)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. ศูนย์อพยพ (พักพิง)</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">1.1 ความจุของศูนย์จำนวน  < 50 คน</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ความจุของศูนย์จำนวน 50 - 100 คน </th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ความจุของศูนย์จำนวน  100-200 คน</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
          <tr>
            <th class="indent">1.4 ความจุของศูนย์จำนวน  > 200 คน</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
          <tr>
            <th>2. บ้านน็อคดาวน์</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>
          <tr>
            <th>3. เต็นท์</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr> 
          <tr>
            <th class="indent">3.1 เต็นท์อำนวยการ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
          <tr>
            <th class="indent">3.2 เต็นท์ที่พักอาศัยชั่วคราว</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
          <tr>
            <th class="indent">3.3 เต็นท์ยกพื้น (ใช้สำหรับพื้นที่ที่มีน้ำท่วมขังเล็กน้อย)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr> 
        </tbody>
      </table>
      
      <h3>3.3 ด้านอาหาร/ยารักษาโรค/เครื่องนุ่งห่ม</h3>
        <span class="help-block">***กรุณาเติมคำตอบลงในช่องว่างทุกข้อ ถ้าไม่มีกรุณา  ( - ) ***</span>
        <table class="bordered-table">
        <thead>
          <tr>
            <th width="400">ด้านอาหาร/ยารักษาโรค/เครื่องนุ่งห่ม</th>
            <th>เข้าถึงได้</th>
            <th>เข้าถึงไม่ได้</th>
            <th>ต้องการความช่วยเหลือ</th>
            <th>ระดับความต้องการสนับสนุน (วัน)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. อาหาร</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">1.1 ตลาดสด</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ร้านขายของใช้และอาหารแห้ง(ซูปเปอร์มาร์เก็ต โชห่วย)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ครัวเคลื่อนที่</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>    
          <tr>
            <th class="indent">1.4 เชื้อเพลิงที่ใช้ในการทำอาหาร</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>    
          <tr>
            <th>2. น้ำ</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">2.1 บริโภค</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 อุปโภค</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th>3. สถานพยาบาล</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">3.1 โรงพยาบาลจังหวัด/อำเภอ</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 บริการเคลื่อนที่ (ระบุโดยหน่วยงาน <input class="span3" id="" name="" type="text">)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>   
          <tr>
            <th class="indent">3.3 สถานีอนามัย/รพ.สต.</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">3.4 คลิกนิค/ร้านขายยา (ระบุจำนวน <input class="span1" id="" name="" type="text"> ร้าน)</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>   
          <tr>
            <th>4. เครื่องนุ่งห่ม</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="indent">4.1 เสื้อผ้า</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 ผ้าห่มและเครื่องนอน</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>     
          <tr>
            <th>5. ภูมิปัญญาท้องถิ่นที่สนับสนุน</th>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>
        </tbody>
      </table>      

      <h3>3.4 กิจกรรมที่ชุมชนคาดว่าจะทำแผนเพื่อขอรับการสนับสนุนจากเครือข่าย</h3>
        <table class="bordered-table">
        <thead>
          <tr>
            <th width="500">กิจกรรม</th>
            <th>กิจกรรมที่ชุมชนสามารถดำเนินการเองได้</th>
            <th>กิจกรรมที่ต้องการขอรับการสนับสนุน</th>
            <th>สิ่งที่ขอรับการสนับสนุน(กรุณาเขียนระบุ)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. กิจกรรมการทำความสะอาดพื้นที่ (Big Cleaning Day)</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>          
          <tr>
            <th>2. กิจกรรมการฝึกอบรบการผลิตน้ำหมักจุลินทรีย์ (EM)</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>        
          <tr>
            <th>3. กิจกรรมการฝึกอบรมอาชีพ</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th>4. กิจกรรมการจัดหาอาชีพเสริม</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>        
          <tr>
            <th>5. กิจกรรมการฟื้นฟูพื้นที่เกษตรกรรมขนาดเล็ก</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th>6. การดูแลผู้ป่วย/ผู้พิการ</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>        
          <tr>
            <th>7. การดูแลสัตว์เลี้ยง</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th>7. การจัดการบ้าน/ที่พักอาศัย</th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
          <tr>
            <th>7. อื่นๆ ระบุ <input class="span3" id="" name="" type="text"></th>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input type="radio" value="option1" name="optionsRadios" checked=""></td>
            <td><input class="span4" id="" name="" type="text"></td>
          </tr>  
        </tbody>
      </table>      
      </fidldset> <!-- /end ส่วนที่ 3 ศักยภาพและความต้องการของพื้นที่ -->
			<br /><br />

      <fieldset>
        <legend>ส่วนที่ 4 การประสานงาน</legend>
        <h3>4.1 ในยามเกิดภัยพิบัติ ชุมชนรับทราบข่าวสารจากหน่วยงานของท่านด้วยแหล่งใด (ตอบได้มากกว่า 1 ข้อ)</h3>
        <div class="clearfix">
            <label id="optionsCheckboxes">เลือกรายการ</label>
            <div class="input">
              <ul class="inputs-list">
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option1">
                    <span>ผ่านผู้นำชุมชน</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option2">
                    <span>วิทยุกระจายเสียงท้องถิ่น/เสียงตามสาย</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option3">
                    <span>การประชุม</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option4">
                    <span>บอร์ดในสถานที่สาธารณะ</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option5">
                    <span>เจ้าหน้าที่ชี้แจง</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" value="option6">
                    <span>อื่น ๆ (ระบุ)</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
	        <h3>4.2 ประเภทของสื่อที่ท่านสะดวกในการติดต่อกับโครงการ</h3>
	        <div class="clearfix">
	            <label id="optionsCheckboxes">เลือกรายการ</label>
	            <div class="input">
	              <ul class="inputs-list">
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option1">
	                    <span>โทรศัพท์มือถือ</span>
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option2">
	                    <span>อีเมล์</span>
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="optionsCheckboxes" value="option3">
	                    <span>อื่น ๆ (ระบุ)</span> <input class="span3" id="" name="" type="text">
	                  </label>
	                </li>
	              </ul>
	            </div>
	          </div>
		        <h3>4.3  ***ข้อมูลผู้ประสานงาน*** </h3>
						<p>เพื่อให้การดำเนินงานเป็นไปด้วยความรวดเร็ว ขอความกรุณากรอกชื่อผู้ประสานงานที่จะรับผิดชอบ</p>
          <div class="clearfix">
					  <label for="xlInput">ชื่อ - นามสกุลผู้ให้ข้อมูล (นาย/นาง/นางสาว)</label>
					    <input type="text" size="30" name="xlInput" id="xlInput" class="xlarge">
					  					<label class="no-float">ตําแหน่ง</label>
						<input type="text" placeholder="" name="" id="" class="span3">
				  </div><!-- /clearfix -->
				  <div class="clearfix">

						<label class="no-float">สถานที่ทํางาน</label>
						<input type="text" placeholder="" name="" id="" class="span3">
					  <label class="no-float">หมู่ที่</label>
						<input type="text" placeholder="" name="" id="" class="span1">
					</div>
					
					<div class="clearfix">
						<label class="no-float">ตําบล</label>
						<input type="text" placeholder="" name="" id="" class="span2">
						<label class="no-float">อําเภอ</label>
						<input type="text" placeholder="" name="" id="" class="span2">
						<label class="no-float">จังหวัด</label>
						<input type="text" placeholder="" name="" id="" class="span2">
					</div>
					<div class="clearfix">
						<label class="no-float">โทรศัพท์</label>
						<input type="text" placeholder="" name="" id="" class="span2">
						<label class="no-float">โทรสาร</label>
						<input type="text" placeholder="" name="" id="" class="span2">
						<label class="no-float">อีเมล</label>
						<input type="text" placeholder="" name="" id="" class="span2">
					</div>







          
      </fieldset> <!-- /end ส่วนที่ 4 การประสานงาน -->
       
    </form>
</div>  <!-- end container -->
</body>
</html>
