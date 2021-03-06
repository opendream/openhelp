
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
    <h1>แบบสำรวจข้อมูลเครือข่ายร่วมสร้างชุมชนท้องถิ่นน่าอยู่เพื่อการจัดการภัยพิบัติ</h1>
    <form action="*" id="" method="post">
      <fieldset>
        <legend>ข้อมูลพื้นที่</legend>
        <div class="clearfix">
          <?php $this->widget('ext.location.LocationWidget', array('model' => $model, 'attribute' => 'location_id')); ?>
    		</div>
    		<div class="clearfix">
    		  <label>วันที่ให้ข้อมูล</label>
    		  <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
              //'name'=>'publishDate',
              'model' => $model,
              'attribute' => 'date_created',
              'value'=>$model->date_created,
                // additional javascript options for the date picker plugin
                'options'=>array(
                  'dateFormat'=>'yy-mm-dd',
                  'defaultDate'=>$model->date_created,
                 ),
          )); ?>
    		</div><!-- /clearfix -->
      </fieldset>
      <br/><br/>
      
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
      </fieldset> <!-- /ข้อมูลทั่วไปของผู้ให้ข้อมูล -->
      <br/><br/>
      
<!-- /// -->
      <fieldset title="ข้อมูลทั่วไปของตำบล" class="info-tambon">
        <legend>ส่วนที่ 1 ข้อมูลทั่วไปของตำบล</legend>
        
        <div class="clearfix">
          <h3>1.1 จำนวนหมู่บ้านทั้งหมดโดยประมาณ</h3>
				  <label class="no-float">จำนวนหมู่บ้าน</label>
					<input class="span1" name="Data[10]" size="10" type="text" value="<?php echo $Data[10]; ?>"> <span>หมู่บ้าน</span>
				</div>
				
				<div class="clearfix">
				  <h3>1.2 ประชากรปัจจุบันทั้งหมดโดยประมาณ</h3>
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
					<h3>1.3 การนับถือศาสนา</h3>
					<label class="no-float">ศาสนาพุทธ</label>
					<input class="span1" name="Data[15]" type="text" value="<?php echo $Data[15]; ?>"> <span>%</span>
					<label class="no-float">คริสต์</label>
					<input class="span1" name="Data[16]" type="text" value="<?php echo $Data[16]; ?>"> <span>%</span>
					<label class="no-float">อิสลาม</label>
					<input class="span1" name="Data[17]" type="text" value="<?php echo $Data[17]; ?>"> <span>%</span>
         </div> 
          
 				 <div class="clearfix">
					 <h3>1.4 การประกอบอาชีพของประชาชนในหมู่บ้าน/ชุมชน</h3>
					 <label class="no-float">ส่วนใหญ่ประกอบอาชีพ</label>
					 <input class="span4" name="Data[18]" type="text" value="<?php echo $Data[18]; ?>">
					 <label class="no-float">รองลงมาคือ</label>
					 <input class="span4" name="Data[19]" type="text" value="<?php echo $Data[19]; ?>"><br />
					 <label class="no-float">การประกอบอาชีพหลากหลาย ได้แก่</label>
					 <input class="span8" name="Data[20]" type="text" value="<?php echo $Data[20]; ?>">
         </div>      
                
 				 <div class="clearfix">
				   <h3>1.5 ข้อมูลด้านการบริการสาธารณะและสาธารณูปโภค</h3>
						
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
                   <label><input type="checkbox" name="Data[23]" value="น้ำประปา" <?php if ($Data[23] == 'value'): ?> checked="checked" <?php endif; ?>> <span>น้ำประปา</span></label>
                 </li>
	               <li><label><input type="checkbox" name="Data[24]" value="น้ำบาดาล" <?php if ($Data[24] == 'value'): ?> checked="checked" <?php endif; ?>> <span>น้ำบาดาล</span></label>
	               </li>
	               <li><label><input type="checkbox" name="Data[25]" value="อื่น ๆ" <?php if ($Data[25] == 'value'): ?> checked="checked" <?php endif; ?>> <span>อื่น ๆ</span> <input class="span4" name="Data[26]" type="text" value="<?php echo $Data[26]; ?>"></label>
	               </li>
               </ul>
             </div> <!-- end input -->
           </div> <!-- /end clearfix 1.5.3 -->
            
           <div class="clearfix">
             <label>1.5.4 แหล่งน้ำเพื่อการบริโภค ได้แก่</label>
             <input class="xlarge" name="Data[27]" size="40" type="text" value="<?php echo $Data[27]; ?>">
           </div>	               
			   </div> <!-- end clearfix 5. --> 
 
         <div class="clearfix">
           <h3>1.6 ข้อมูลด้านสุขภาพของชุมชน</h3> 
             <div class="clearfix indent">1.6.1 กลุ่มผู้ช่วยเหลือตัวเองไม่ได้
	             <ul>
	               <li>
	                 <label class="no-float">จำนวนคนพิการ</label>
					         <input class="span1" name="Data[28]" type="text" value="<?php echo $Data[28]; ?>"> <span>คน</span>
					       </li>
	               <li>
	                 <label class="no-float">จำนวนผู้สูงอายุ</label>
					         <input class="span1" name="Data[29]" type="text" value="<?php echo $Data[29]; ?>"> <span>คน</span>
					       </li>
	               <li>
	                 <label class="no-float">จำนวนผู้ป่วย</label>
					         <input class="span1" name="Data[30]" type="text" value="<?php echo $Data[30]; ?>"> <span>คน</span>
					         <label class="no-float">ระบุโรค</label> <input class="span4" name="Data[31]" type="text" value="<?php echo $Data[31]; ?>">
					         <span class="help-block">(ระบุโรค เช่น ไตวาย มะเร็ง ผู้ป่วยใส่เครื่องช่วยหายใจ อัมพาต ผู้ป่วยทางจิต เป็นต้น) </span>
					       </li>
	             </ul>
             </div> <! -- /end 1.6.1 กลุ่มผู้ช่วยเหลือตัวเองไม่ได้ -->
              
						 <div class="clearfix indent">1.6.2 ผู้ป่วยด้วยโรคเรื้อรังพอช่วยตนเองได้ แต่ต้องได้รับยาและการติดตามอาการเป็นประจำ
               <ul>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคความดัน</label>
						       <input class="span1" name="Data[32]" type="text" value="<?php echo $Data[32]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคเบาหวาน</label>
						       <input class="span1" name="Data[33]" type="text" value="<?php echo $Data[33]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคไต</label>
						       <input class="span1" name="Data[34]" type="text" value="<?php echo $Data[34]; ?>"> <span>คน</span>
                 </li>           
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคหัวใจ</label>
						       <input class="span1" name="Data[35]" type="text" value="<?php echo $Data[35]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคหอบหืด</label>
						       <input class="span1" name="Data[36]" type="text" value="<?php echo $Data[36]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคถุงลมโป่งพอง</label>
					        <input class="span1" name="Data[37]" type="text" value="<?php echo $Data[37]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยโรคอื่นๆได้แก่</label>
  					       <input class="span1" name="Data[38]" type="text" value="<?php echo $Data[38]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนผู้ป่วยเรื้อรังอื่นๆ ที่ต้องได้รับยาประจำ เช่น หัวใจ หอบหืด ถุงลมโป่งพอง ฯลฯ โปรดระบุโรค</label>
                   <input class="span4" name="Data[39]" type="text" value="<?php echo $Data[39]; ?>">
                   <label class="no-float">จำนวน</label>
						       <input class="span1" name="Data[40]" type="text" value="<?php echo $Data[40]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนหญิงตั้งครรภ์</label>
			 		         <input class="span1" name="Data[41]" type="text" value="<?php echo $Data[41]; ?>"> <span>คน</span>
									 <label class="no-float">ระบบอายุครรภ์</label>
									 <input class="span1" name="Data[42]" type="text" value="<?php echo $Data[42]; ?>"> <span>เดือน</span>
                 </li>
                 <li>
                   <label class="no-float">จำนวนเด็กทารกที่ต้องการนมผงจำนวน</label>
						       <input class="span1" name="Data[43]" type="text" value="<?php echo $Data[43]; ?>"> <span>คน</span>
                 </li>
                 <li>
                   <label class="no-float">เด็กอายุต่ำกว่า 5 ขวบจำนวน</label>
						       <input class="span1" name="Data[44]" type="text" value="<?php echo $Data[44]; ?>"> <span>คน</span>
                 </li>
                 <li>
  			           <label id="optionsRadio">การบันทึกทางคลินิกหรือรายงานเกี่ยวกับความกังวลด้านสุขภาพโดยผู้ประกอบวิชาชีพด้านสุขภาพหรือไม่</label>
				           <div class="input">
				             <ul class="inputs-list">
				               <li><label><input type="radio" name="Data[45]" value="มี" <?php if ($Data[45] == 'value'): ?> checked="checked" <?php endif; ?>> <span>มี จัดทำโดย</span> <input class="span4" name="Data[46]" type="text"  value="<?php echo $Data[46]; ?>"></label>
				               </li>
				               <li><label><input type="radio" name="Data[47]" value="ไม่มี" <?php if ($Data[47] == 'value'): ?> checked="checked" <?php endif; ?>> <span>ไม่มี</span></label>
				               </li>
				             </ul>
				            </div> <! -- /input -->
                  </li>
                </ul>
              </div> <!-- /end 1.6.2 ผู้ป่วยด้วยโรคเรื้อรังพอช่วยตนเองได้  -->
            </div><!-- /end 6-->
            
            <div class="clearfix">
                <h3>1.7 แผนที่แสดงขอบเขตและเส้นทางภายในหมู่บ้าน</h3> 
                <label>โดยระบายสีพื้นที่ที่ได้รับผลกระทบจากน้ำท่วม</label>
                <input class="input-file" id="fileInput" name="fileInput" type="file">
            </div>
      </fieldset> <! -- /end ส่วนที่ 1 ข้อมูลทั่วไปของตำบล -->   
      
      <fieldset title="การสำรวจความเสียหาย" class="info-damage">
        <legend>ส่วนที่ 2 การสำรวจความเสียหาย</legend>
        <div class="clearfix">
          <h3>2.1 ในปัจจุบันพื้นที่ของท่านอยู่ในสถานการณ์ใดมากที่สุด</h3>
          <ul class="inputs-list">
            <li><label><input type="radio" name="Data[48]" value="ไม่ได้รับผลกระทบ" <?php if ($Data[48] == 'value'): ?> checked="checked" <?php endif; ?>><span>ไม่ได้รับผลกระทบ</span> <strong>(กรุณาข้ามไปตอบส่วนที่ 3)</strong></label>
            </li>
            <li><label><input type="radio" name="Data[48]" value="กำลังประสบปัญหาน้ำท่วม" <?php if ($Data[48] == 'value'): ?> checked="checked" <?php endif; ?>><span>กำลังประสบปัญหาน้ำท่วม ประมาณร้อยละเท่าไรของพื้นที่</span> <input class="span1" name="Data[49]" type="text"  value="<?php echo $Data[49]; ?>"> <span>เป็นระยะเวลารวม</span> <input class="span1" id="" name="Data[50]" type="text"  value="<?php echo $Data[50]; ?>"> <span>วัน</span></label>
            </li>
            <li><label><input type="radio" name="Data[48]" value="option2" <?php if ($Data[48] == 'value'): ?> checked="checked" <?php endif; ?>><span>น้ำลดแล้ว กำลังอยู่ในช่วงฟื้นฟู โดยประมาณร้อยละ</span> <input class="span1" name="Data[51]" type="text"  value="<?php echo $Data[51]; ?>"> <span>ของพื้นที่</span><span>เป็นระยะเวลารวม</span> <input class="span1" name="Data[52]" type="text"  value="<?php echo $Data[52]; ?>"> <span>วัน</span></label>
						</li>
            <li><label><input type="radio" name="Data[48]" value="พื้นที่กำลังจะรับน้ำท่วม" <?php if ($Data[48] == 'value'): ?> checked="checked" <?php endif; ?>><span>พื้นที่กำลังจะรับน้ำท่วม ในอีกประมาณ</span> <input class="span1" name="Data[53]" type="text"  value="<?php echo $Data[53]; ?>"> <span>วัน</span></label>     
            <p>
		            <label for="textarea">โปรดสรุปสถานการณ์ในปัจจุบันของพื้นที่คร่าวๆ</label>
		            <textarea class="xxlarge indent" id="textarea2" name="Data[54]" rows="3" value="<?php echo $Data[54]; ?>"></textarea>
					  </p>
					  </li>
          </ul>          
        </div> <!-- /end 2.1  ในปัจจุบันพื้นที่ของท่านอยู่ในสถานการณ์ใดมากที่สุด -->
        
	      <div class="clearfix">
	        <h3>2.2 พื้นที่ที่ได้รับผลกระทบในความรับผิดชอบของท่าน</h3>
	        <label class="no-float">มีจำนวน</label>
			    <input class="span1" name="Data[55]" type="text" value="<?php echo $Data[55]; ?>"> <span>หมู่บ้าน</span>
			    <label class="no-float">ได้แก่</label>
			    <input class="span4" name="Data[56]" type="text" value="<?php echo $Data[56]; ?>"><br />
			    <label class="no-float">ประมาณ</label>
			    <input class="span1" name="Data[57]" type="text" value="<?php echo $Data[57]; ?>"> <span>ครัวเรือน</span>
			    <label class="no-float">ผู้ต้องอพยพออกจากครัวเรือนประมาณ</label>
			    <input class="span1" name="Data[58]" type="text" value="<?php echo $Data[58]; ?>"> <span>ครัวเรือน</span>
	      </div> <!-- /end 2.2 พื้นที่ที่ได้รับผลกระทบในความรับผิดชอบของท่าน -->
          
        <div class="clearfix">
          <h3>2.3 คนที่เสียชีวิต สูญหาย หรือบาดเจ็บจากวิกฤตินี้</h3>
          <div class="clearfix">
            <label class="no-float">เสียชีวิต</label>
				    <input class="span1" name="Data[59]" type="text" value="<?php echo $Data[59]; ?>"> <span>คน</span>
				    <input class="span1" name="Data[60]" type="text" value="<?php echo $Data[60]; ?>"> <span>วันที่แล้ว</span>
						<label class="no-float">สาเหตุหลัก</label> <input class="span4" name="Data[61]"  type="text"  value="<?php echo $Data[61]; ?>"> 
				  </div>
          <div class="clearfix">
            <label class="no-float">สูญหาย</label>
				    <input class="span1" name="Data[62]" type="text" value="<?php echo $Data[62]; ?>"> <span>คน</span>
				    <input class="span1" name="Data[63]" type="text" value="<?php echo $Data[63]; ?>"> <span>วันที่แล้ว</span>
						<label class="no-float">สาเหตุหลัก</label> <input class="span4"name="Data[64]" type="text" value="<?php echo $Data[64]; ?>"> 
				  </div>
          <div class="clearfix">
            <label class="no-float">บาดเจ็บ</label>
				    <input class="span1" name="Data[65]" type="text" value="<?php echo $Data[65]; ?>"> <span>คน</span>
				    <input class="span1" name="Data[66]" type="text" value="<?php echo $Data[66]; ?>"> <span>วันที่แล้ว</span>
						<label class="no-float">สาเหตุหลัก</label> <input class="span4" name="Data[67]" type="text"  value="<?php echo $Data[67]; ?>"> 
				  </div>
        </div> <!-- /end 2.3 คนที่เสียชีวิต สูญหาย หรือบาดเจ็บจากวิกฤตินี้ -->          
         
        <div class="clearfix">
          <h3>2.4 พื้นที่มีปัจจัยเสี่ยงต่อความปลอดภัยในชีวิตและทรัพย์สินหรือไม่</h3>
          <ul class="inputs-list">
            <li>
              <label>
                <input type="radio" name="Data[68]" value="ไม่มี" <?php if ($Data[68] == 'value'): ?> checked="checked" <?php endif; ?>>>
                <span>ไม่มี</span>
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="Data[68]" value="มี โปรดเลือก" <?php if ($Data[68] == 'value'): ?> checked="checked" <?php endif; ?>>>
                <span>มี โปรดเลือก</span>
              </label>
              <ul>
	              <li>
	                <label>
	                  <input type="radio" name="Data[68]" value="การโจรกรรมทรัพย์สิน" <?php if ($Data[68] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                  <span>การโจรกรรมทรัพย์สิน</span>
	                </label>
	              </li>
	              <li>
	                <label>
	                  <input type="radio" name="Data[68]" value="สัตว์ร้าย เช่น จระเข้ งู" <?php if ($Data[68] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                  <span>สัตว์ร้าย เช่น จระเข้ งู</span>
	                </label>
	              </li>		
	            	<li>
	                <label>
	                  <input type="radio" name="Data[68]" value="อื่น ๆ" <?php if ($Data[68] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                  <span>อื่น ๆ</span> <input class="span2" name="Data[69]" type="text"  value="<?php echo $Data[69]; ?>">
	                </label>
	              </li>	
              </ul> 
            </li>	
          </ul><! -- /inputs-list -->
        </div> <!-- /end 2.4 พื้นที่มีปัจจัยเสี่ยงต่อความปลอดภัยในชีวิตและทรัพย์สินหรือไม่ -->
          
        <div class="clearfix">
          <h3>2.5 การดำเนินการบรรเทาสาธารณภัยที่ผ่านมา</h3>
          <ul class="inputs-list">
            <li>
              <label>
                <input type="radio" name="Data[70]" value="มีหน่วยงานภายนอกมาช่วยดำเนินการ ได้แก่" <?php if ($Data[70] == 'value'): ?> checked="checked" <?php endif; ?>>>
                <span>มีหน่วยงานภายนอกมาช่วยดำเนินการ ได้แก่</span> <input class="span4" id="" name="" type="text"  placeholder="">
              </label>
            </li>
            <li>
              <label>
                <input type="radio" name="Data[70]" value="พื้นที่จัดการเองโดยการ" <?php if ($Data[70] == 'value'): ?> checked="checked" <?php endif; ?>>>
                <span>พื้นที่จัดการเองโดยการ</span>
              </label>
              <ul>
	              <li>
	                <label>
	                  <input type="radio" name="Data[70]" value="จัดศูนย์ผู้อพยพจำนวน" <?php if ($Data[70] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                  <span>จัดศูนย์ผู้อพยพจำนวน</span> <input class="span1" name="Data[71]" type="text" value="<?php echo $Data[71]; ?>"> <span>ศูนย์</span>
	                  <label class="left">สถานที่</label> <input class="span2" name="Data[72]" type="text" value="<?php echo $Data[72]; ?>">
	                </label>
	              </li>
	              <li>
	                <label>
	                  <input type="radio" name="Data[70]" value="มีระบบเตือนภัยล่งหน้าก่อนเกิดภัยพิบัติ" <?php if ($Data[70] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                  <span>มีระบบเตือนภัยล่งหน้าก่อนเกิดภัยพิบัติ</span>
	                </label>
	              </li>		
	            	<li>
	                <label>
	                  <input type="radio" name="Data[70]" value="มีจัดการด้านอื่นๆ ได้แก่" <?php if ($Data[70] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                  <span>มีจัดการด้านอื่นๆ ได้แก่</span> <input class="span2" name="Data[73]" type="text" value="<?php echo $Data[73]; ?>">
	                </label>
	              </li>	
              </ul> 
            </li>  
          </ul>
        </div> <!-- /end 2.5 -->
      </fieldset> <!-- /fieldset ส่วนที่ 2 การสำรวจความเสียหาย  -->
      <br/><br/>
      
      <fieldset title="ศักยภาพและความต้องการของพื้นที่" class="info-faculty">
        <legend>ส่วนที่ 3 ศักยภาพและความต้องการของพื้นที่</legend>
        <div class="clearfix">
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
            <td><input class="span4" name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
            <td><input class="span4" name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
            <td><input class="span4" name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
            <td><input class="span4" name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 รถบรรทุก 6 ล้อ</th>
            <td><input class="span4" name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
            <td><input class="span4" name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
            <td><input class="span4" name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
            <td><input class="span4" name="Data[81]" type="text" value="<?php echo $Data[81]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 รถบรรทุก 10 ล้อ</th>
            <td><input class="span4" name="Data[82]" type="text" value="<?php echo $Data[82]; ?>"></td>
            <td><input class="span4" name="Data[83]" type="text" value="<?php echo $Data[83]; ?>"></td>
            <td><input class="span4" name="Data[84]" type="text" value="<?php echo $Data[84]; ?>"></td>
            <td><input class="span4" name="Data[85]" type="text" value="<?php echo $Data[85]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.4 รถตู้</th>
            <td><input class="span4" name="Data[86]" type="text" value="<?php echo $Data[86]; ?>"></td>
            <td><input class="span4" name="Data[87]" type="text" value="<?php echo $Data[87]; ?>"></td>
            <td><input class="span4" name="Data[88]" type="text" value="<?php echo $Data[88]; ?>"></td>
            <td><input class="span4" name="Data[89]" type="text" value="<?php echo $Data[89]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">1.5 รถดับเพลิง</th>
            <td><input class="span4" name="Data[90]" type="text" value="<?php echo $Data[90]; ?>"></td>
            <td><input class="span4" name="Data[91]" type="text" value="<?php echo $Data[91]; ?>"></td>
            <td><input class="span4" name="Data[92]" type="text" value="<?php echo $Data[92]; ?>"></td>
            <td><input class="span4" name="Data[93]" type="text" value="<?php echo $Data[93]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.6 รถไฟฟ้าส่องสว่าง</th>
            <td><input class="span4" name="Data[94]" type="text" value="<?php echo $Data[94]; ?>"></td>
            <td><input class="span4" name="Data[95]" type="text" value="<?php echo $Data[95]; ?>"></td>
            <td><input class="span4" name="Data[96]" type="text" value="<?php echo $Data[96]; ?>"></td>
            <td><input class="span4" name="Data[97]" type="text" value="<?php echo $Data[97]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">1.7 อื่นๆ</th>
            <td><input class="span4" name="Data[98]" type="text" value="<?php echo $Data[98]; ?>"></td>
            <td><input class="span4" name="Data[99]" type="text" value="<?php echo $Data[99]; ?>"></td>
            <td><input class="span4" name="Data[100]" type="text" value="<?php echo $Data[100]; ?>"></td>
            <td><input class="span4" name="Data[101]" type="text" value="<?php echo $Data[101]; ?>"></td>
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
            <td><input class="span4" name="Data[102]" type="text" value="<?php echo $Data[102]; ?>"></td>
            <td><input class="span4" name="Data[103]" type="text" value="<?php echo $Data[103]; ?>"></td>
            <td><input class="span4" name="Data[104]" type="text" value="<?php echo $Data[104]; ?>"></td>
            <td><input class="span4" name="Data[105]" type="text" value="<?php echo $Data[105]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 เรือท้องแบนไฟเบอร์</th>
            <td><input class="span4" name="Data[106]" type="text" value="<?php echo $Data[106]; ?>"></td>
            <td><input class="span4" name="Data[107]" type="text" value="<?php echo $Data[107]; ?>"></td>
            <td><input class="span4" name="Data[108]" type="text" value="<?php echo $Data[108]; ?>"></td>
            <td><input class="span4" name="Data[109]" type="text" value="<?php echo $Data[109]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">2.3 เรือเล็กพร้อมพายแบบ HDPE</th>
            <td><input class="span4" name="Data[110]" type="text" value="<?php echo $Data[110]; ?>"></td>
            <td><input class="span4" name="Data[111]" type="text" value="<?php echo $Data[111]; ?>"></td>
            <td><input class="span4" name="Data[112]" type="text" value="<?php echo $Data[112]; ?>"></td>
            <td><input class="span4" name="Data[113]" type="text" value="<?php echo $Data[113]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.4 เรือเล็กพร้อมพายแบบไฟเบอร์</th>
            <td><input class="span4" name="Data[114]" type="text" value="<?php echo $Data[114]; ?>"></td>
            <td><input class="span4" name="Data[115]" type="text" value="<?php echo $Data[115]; ?>"></td>
            <td><input class="span4" name="Data[116]" type="text" value="<?php echo $Data[116]; ?>"></td>
            <td><input class="span4" name="Data[117]" type="text" value="<?php echo $Data[117]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">2.5 เรือยาง</th>
            <td><input class="span4" name="Data[118]" type="text" value="<?php echo $Data[118]; ?>"></td>
            <td><input class="span4" name="Data[119]" type="text" value="<?php echo $Data[119]; ?>"></td>
            <td><input class="span4" name="Data[120]" type="text" value="<?php echo $Data[120]; ?>"></td>
            <td><input class="span4" name="Data[121]" type="text" value="<?php echo $Data[121]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.6 เรือหางยาว</th>
            <td><input class="span4" name="Data[122]" type="text" value="<?php echo $Data[122]; ?>"></td>
            <td><input class="span4" name="Data[123]" type="text" value="<?php echo $Data[123]; ?>"></td>
            <td><input class="span4" name="Data[124]" type="text" value="<?php echo $Data[124]; ?>"></td>
            <td><input class="span4" name="Data[125]" type="text" value="<?php echo $Data[125]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">2.7 เจ็ตสกี</th>
            <td><input class="span4" name="Data[126]" type="text" value="<?php echo $Data[126]; ?>"></td>
            <td><input class="span4" name="Data[127]" type="text" value="<?php echo $Data[127]; ?>"></td>
            <td><input class="span4" name="Data[128]" type="text" value="<?php echo $Data[128]; ?>"></td>
            <td><input class="span4" name="Data[129]" type="text" value="<?php echo $Data[129]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">2.8 เครื่องยนต์เรือ</th>
            <td><input class="span4" name="Data[130]" type="text" value="<?php echo $Data[130]; ?>"></td>
            <td><input class="span4" name="Data[131]" type="text" value="<?php echo $Data[131]; ?>"></td>
            <td><input class="span4" name="Data[132]" type="text" value="<?php echo $Data[132]; ?>"></td>
            <td><input class="span4" name="Data[133]" type="text" value="<?php echo $Data[133]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">2.9 อื่น ๆ</th>
            <td><input class="span4" name="Data[134]" type="text" value="<?php echo $Data[134]; ?>"></td>
            <td><input class="span4" name="Data[135]" type="text" value="<?php echo $Data[135]; ?>"></td>
            <td><input class="span4" name="Data[136]" type="text" value="<?php echo $Data[136]; ?>"></td>
            <td><input class="span4" name="Data[137]" type="text" value="<?php echo $Data[137]; ?>"></td>
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
            <td><input class="span4" name="Data[138]" type="text" value="<?php echo $Data[138]; ?>"></td>
            <td><input class="span4" name="Data[139]" type="text" value="<?php echo $Data[139]; ?>"></td>
            <td><input class="span4" name="Data[140]" type="text" value="<?php echo $Data[140]; ?>"></td>
            <td><input class="span4" name="Data[141]" type="text" value="<?php echo $Data[141]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 ขนาดท่อ 8 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span4" name="Data[142]" type="text" value="<?php echo $Data[142]; ?>"></td>
            <td><input class="span4" name="Data[143]" type="text" value="<?php echo $Data[143]; ?>"></td>
            <td><input class="span4" name="Data[144]" type="text" value="<?php echo $Data[144]; ?>"></td>
            <td><input class="span4" name="Data[145]" type="text" value="<?php echo $Data[145]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">3.3 ขนาดท่อ 10 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span4" name="Data[146]" type="text" value="<?php echo $Data[146]; ?>"></td>
            <td><input class="span4" name="Data[147]" type="text" value="<?php echo $Data[147]; ?>"></td>
            <td><input class="span4" name="Data[148]" type="text" value="<?php echo $Data[148]; ?>"></td>
            <td><input class="span4" name="Data[149]" type="text" value="<?php echo $Data[149]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">3.4 ขนาดท่อ 12 นิ้ว (ไฟฟ้า)</th>
            <td><input class="span4" name="Data[150]" type="text" value="<?php echo $Data[150]; ?>"></td>
            <td><input class="span4" name="Data[151]" type="text" value="<?php echo $Data[151]; ?>"></td>
            <td><input class="span4" name="Data[152]" type="text" value="<?php echo $Data[152]; ?>"></td>
            <td><input class="span4" name="Data[153]" type="text" value="<?php echo $Data[153]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.5 ขนาดท่อ 18 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span4" name="Data[154]" type="text" value="<?php echo $Data[154]; ?>"></td>
            <td><input class="span4" name="Data[155]" type="text" value="<?php echo $Data[155]; ?>"></td>
            <td><input class="span4" name="Data[156]" type="text" value="<?php echo $Data[156]; ?>"></td>
            <td><input class="span4" name="Data[157]" type="text" value="<?php echo $Data[157]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">3.6 อื่น ๆ</th>
            <td><input class="span4" name="Data[158]" type="text" value="<?php echo $Data[158]; ?>"></td>
            <td><input class="span4" name="Data[159]" type="text" value="<?php echo $Data[159]; ?>"></td>
            <td><input class="span4" name="Data[160]" type="text" value="<?php echo $Data[160]; ?>"></td>
            <td><input class="span4" name="Data[161]" type="text" value="<?php echo $Data[161]; ?>"></td>
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
            <td><input class="span4" name="Data[162]" type="text" value="<?php echo $Data[162]; ?>"></td>
            <td><input class="span4" name="Data[163]" type="text" value="<?php echo $Data[163]; ?>"></td>
            <td><input class="span4" name="Data[164]" type="text" value="<?php echo $Data[164]; ?>"></td>
            <td><input class="span4" name="Data[165]" type="text" value="<?php echo $Data[165]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 สุขาชั่วคราวแบบลอยน้ำ</th>
            <td><input class="span4" name="Data[166]" type="text" value="<?php echo $Data[166]; ?>"></td>
            <td><input class="span4" name="Data[167]" type="text" value="<?php echo $Data[167]; ?>"></td>
            <td><input class="span4" name="Data[168]" type="text" value="<?php echo $Data[168]; ?>"></td>
            <td><input class="span4" name="Data[169]" type="text" value="<?php echo $Data[169]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">4.3 สุขาชั่วคราวแบบใช้ถุงดำ</th>
            <td><input class="span4" name="Data[170]" type="text" value="<?php echo $Data[170]; ?>"></td>
            <td><input class="span4" name="Data[171]" type="text" value="<?php echo $Data[171]; ?>"></td>
            <td><input class="span4" name="Data[172]" type="text" value="<?php echo $Data[172]; ?>"></td>
            <td><input class="span4" name="Data[173]" type="text" value="<?php echo $Data[173]; ?>"></td>
          </tr>             
          <tr>
            <th class="indent">4.4 อื่น ๆ</th>
            <td><input class="span4" name="Data[174]" type="text" value="<?php echo $Data[174]; ?>"></td>
            <td><input class="span4" name="Data[175]" type="text" value="<?php echo $Data[175]; ?>"></td>
            <td><input class="span4" name="Data[176]" type="text" value="<?php echo $Data[176]; ?>"></td>
            <td><input class="span4" name="Data[177]" type="text" value="<?php echo $Data[177]; ?>"></td>
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
            <td><input class="span4" name="Data[178]" type="text" value="<?php echo $Data[178]; ?>"></td>
            <td><input class="span4" name="Data[179]" type="text" value="<?php echo $Data[179]; ?>"></td>
            <td><input class="span4" name="Data[180]" type="text" value="<?php echo $Data[180]; ?>"></td>
            <td><input class="span4" name="Data[181]" type="text" value="<?php echo $Data[181]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">5.2 เคลื่อนที่</th>
            <td><input class="span4" name="Data[182]" type="text" value="<?php echo $Data[182]; ?>"></td>
            <td><input class="span4" name="Data[183]" type="text" value="<?php echo $Data[183]; ?>"></td>
            <td><input class="span4" name="Data[184]" type="text" value="<?php echo $Data[184]; ?>"></td>
            <td><input class="span4" name="Data[185]" type="text" value="<?php echo $Data[185]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">5.3 อื่น ๆ</th>
            <td><input class="span4" name="Data[186]" type="text" value="<?php echo $Data[186]; ?>"></td>
            <td><input class="span4" name="Data[187]" type="text" value="<?php echo $Data[187]; ?>"></td>
            <td><input class="span4" name="Data[188]" type="text" value="<?php echo $Data[188]; ?>"></td>
            <td><input class="span4" name="Data[189]" type="text" value="<?php echo $Data[189]; ?>"></td>
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
            <td><input class="span4" name="Data[190]" type="text" value="<?php echo $Data[190]; ?>"></td>
            <td><input class="span4" name="Data[191]" type="text" value="<?php echo $Data[191]; ?>"></td>
            <td><input class="span4" name="Data[192]" type="text" value="<?php echo $Data[192]; ?>"></td>
            <td><input class="span4" name="Data[193]" type="text" value="<?php echo $Data[193]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">6.2 เด็ก</th>
            <td><input class="span4" name="Data[194]" type="text" value="<?php echo $Data[194]; ?>"></td>
            <td><input class="span4" name="Data[195]" type="text" value="<?php echo $Data[195]; ?>"></td>
            <td><input class="span4" name="Data[196]" type="text" value="<?php echo $Data[196]; ?>"></td>
            <td><input class="span4" name="Data[197]" type="text" value="<?php echo $Data[197]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">6.3 อื่น ๆ</th>
            <td><input class="span4" name="Data[198]" type="text" value="<?php echo $Data[198]; ?>"></td>
            <td><input class="span4" name="Data[199]" type="text" value="<?php echo $Data[199]; ?>"></td>
            <td><input class="span4" name="Data[200]" type="text" value="<?php echo $Data[200]; ?>"></td>
            <td><input class="span4" name="Data[201]" type="text" value="<?php echo $Data[201]; ?>"></td>
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
            <td><input class="span4" name="Data[202]" type="text" value="<?php echo $Data[202]; ?>"></td>
            <td><input class="span4" name="Data[203]" type="text" value="<?php echo $Data[203]; ?>"></td>
            <td><input class="span4" name="Data[204]" type="text" value="<?php echo $Data[204]; ?>"></td>
            <td><input class="span4" name="Data[205]" type="text" value="<?php echo $Data[205]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">7.2 ขนาดกลาง 21-500 กิโลวัตต์</th>
            <td><input class="span4" name="Data[206]" type="text" value="<?php echo $Data[206]; ?>"></td>
            <td><input class="span4" name="Data[207]" type="text" value="<?php echo $Data[207]; ?>"></td>
            <td><input class="span4" name="Data[208]" type="text" value="<?php echo $Data[208]; ?>"></td>
            <td><input class="span4" name="Data[209]" type="text" value="<?php echo $Data[209]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">7.3 ขนาดใหญ่ >500 กิโลวัตต์</th>
            <td><input class="span4" name="Data[210]" type="text" value="<?php echo $Data[210]; ?>"></td>
            <td><input class="span4" name="Data[211]" type="text" value="<?php echo $Data[211]; ?>"></td>
            <td><input class="span4" name="Data[212]" type="text" value="<?php echo $Data[212]; ?>"></td>
            <td><input class="span4" name="Data[213]" type="text" value="<?php echo $Data[213]; ?>"></td>
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
            <td><input class="span4" name="Data[214]" type="text" value="<?php echo $Data[214]; ?>"></td>
            <td><input class="span4" name="Data[215]" type="text" value="<?php echo $Data[215]; ?>"></td>
            <td><input class="span4" name="Data[216]" type="text" value="<?php echo $Data[216]; ?>"></td>
            <td><input class="span4" name="Data[217]" type="text" value="<?php echo $Data[217]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">8.2 ขนาดกลาง 21-500 กิโลวัตต์</th>
            <td><input class="span4" name="Data[218]" type="text" value="<?php echo $Data[218]; ?>"></td>
            <td><input class="span4" name="Data[219]" type="text" value="<?php echo $Data[219]; ?>"></td>
            <td><input class="span4" name="Data[220]" type="text" value="<?php echo $Data[220]; ?>"></td>
            <td><input class="span4" name="Data[221]" type="text" value="<?php echo $Data[221]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">8.3 ขนาดใหญ่ >500 กิโลวัตต์</th>
            <td><input class="span4" name="Data[222]" type="text" value="<?php echo $Data[222]; ?>"></td>
            <td><input class="span4" name="Data[223]" type="text" value="<?php echo $Data[223]; ?>"></td>
            <td><input class="span4" name="Data[224]" type="text" value="<?php echo $Data[224]; ?>"></td>
            <td><input class="span4" name="Data[225]" type="text" value="<?php echo $Data[225]; ?>"></td>
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
            <td><input class="span4" name="Data[226]" type="text" value="<?php echo $Data[226]; ?>"></td>
            <td><input class="span4" name="Data[227]" type="text" value="<?php echo $Data[227]; ?>"></td>
            <td><input class="span4" name="Data[228]" type="text" value="<?php echo $Data[228]; ?>"></td>
            <td><input class="span4" name="Data[229]" type="text" value="<?php echo $Data[229]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">9.2 วิทยุแดง</th>
            <td><input class="span4" name="Data[230]" type="text" value="<?php echo $Data[230]; ?>"></td>
            <td><input class="span4" name="Data[231]" type="text" value="<?php echo $Data[231]; ?>"></td>
            <td><input class="span4" name="Data[232]" type="text" value="<?php echo $Data[232]; ?>"></td>
            <td><input class="span4" name="Data[233]" type="text" value="<?php echo $Data[233]; ?>"></td>
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
            <td><input class="span4" name="Data[234]" type="text" value="<?php echo $Data[234]; ?>"></td>
            <td><input class="span4" name="Data[235]" type="text" value="<?php echo $Data[235]; ?>"></td>
            <td><input class="span4" name="Data[236]" type="text" value="<?php echo $Data[236]; ?>"></td>
            <td><input class="span4" name="Data[237]" type="text" value="<?php echo $Data[237]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ความจุของศูนย์จำนวน 50 - 100 คน </th>
            <td><input class="span4" name="Data[238]" type="text" value="<?php echo $Data[238]; ?>"></td>
            <td><input class="span4" name="Data[239]" type="text" value="<?php echo $Data[239]; ?>"></td>
            <td><input class="span4" name="Data[240]" type="text" value="<?php echo $Data[240]; ?>"></td>
            <td><input class="span4" name="Data[241]" type="text" value="<?php echo $Data[241]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ความจุของศูนย์จำนวน  100-200 คน</th>
            <td><input class="span4" name="Data[242]" type="text" value="<?php echo $Data[242]; ?>"></td>
            <td><input class="span4" name="Data[243]" type="text" value="<?php echo $Data[243]; ?>"></td>
            <td><input class="span4" name="Data[244]" type="text" value="<?php echo $Data[244]; ?>"></td>
            <td><input class="span4" name="Data[245]" type="text" value="<?php echo $Data[245]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">1.4 ความจุของศูนย์จำนวน  > 200 คน</th>
            <td><input class="span4" name="Data[246]" type="text" value="<?php echo $Data[246]; ?>"></td>
            <td><input class="span4" name="Data[247]" type="text" value="<?php echo $Data[247]; ?>"></td>
            <td><input class="span4" name="Data[248]" type="text" value="<?php echo $Data[248]; ?>"></td>
            <td><input class="span4" name="Data[249]" type="text" value="<?php echo $Data[249]; ?>"></td>
          </tr> 
          <tr>
            <th>2. บ้านน็อคดาวน์</th>
            <td><input class="span4" name="Data[250]" type="text" value="<?php echo $Data[250]; ?>"></td>
            <td><input class="span4" name="Data[251]" type="text" value="<?php echo $Data[251]; ?>"></td>
            <td><input class="span4" name="Data[252]" type="text" value="<?php echo $Data[252]; ?>"></td>
            <td><input class="span4" name="Data[253]" type="text" value="<?php echo $Data[253]; ?>"></td>
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
            <td><input class="span4" name="Data[254]" type="text" value="<?php echo $Data[254]; ?>"></td>
            <td><input class="span4" name="Data[255]" type="text" value="<?php echo $Data[255]; ?>"></td>
            <td><input class="span4" name="Data[256]" type="text" value="<?php echo $Data[256]; ?>"></td>
            <td><input class="span4" name="Data[257]" type="text" value="<?php echo $Data[257]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">3.2 เต็นท์ที่พักอาศัยชั่วคราว</th>
            <td><input class="span4" name="Data[258]" type="text" value="<?php echo $Data[258]; ?>"></td>
            <td><input class="span4" name="Data[259]" type="text" value="<?php echo $Data[259]; ?>"></td>
            <td><input class="span4" name="Data[260]" type="text" value="<?php echo $Data[260]; ?>"></td>
            <td><input class="span4" name="Data[261]" type="text" value="<?php echo $Data[261]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">3.3 เต็นท์ยกพื้น (ใช้สำหรับพื้นที่ที่มีน้ำท่วมขังเล็กน้อย)</th>
            <td><input class="span4" name="Data[262]" type="text" value="<?php echo $Data[262]; ?>"></td>
            <td><input class="span4" name="Data[263]" type="text" value="<?php echo $Data[263]; ?>"></td>
            <td><input class="span4" name="Data[264]" type="text" value="<?php echo $Data[264]; ?>"></td>
            <td><input class="span4" name="Data[265]" type="text" value="<?php echo $Data[265]; ?>"></td>
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
            <td><input class="span4" name="Data[266]" type="text" value="<?php echo $Data[266]; ?>"></td>
            <td><input class="span4" name="Data[267]" type="text" value="<?php echo $Data[267]; ?>"></td>
            <td><input class="span4" name="Data[268]" type="text" value="<?php echo $Data[268]; ?>"></td>
            <td><input class="span4" name="Data[269]" type="text" value="<?php echo $Data[269]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ร้านขายของใช้และอาหารแห้ง(ซูปเปอร์มาร์เก็ต โชห่วย)</th>
            <td><input class="span4" name="Data[230]" type="text" value="<?php echo $Data[230]; ?>"></td>
            <td><input class="span4" name="Data[231]" type="text" value="<?php echo $Data[231]; ?>"></td>
            <td><input class="span4" name="Data[232]" type="text" value="<?php echo $Data[232]; ?>"></td>
            <td><input class="span4" name="Data[233]" type="text" value="<?php echo $Data[233]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ครัวเคลื่อนที่</th>
            <td><input class="span4" name="Data[234]" type="text" value="<?php echo $Data[234]; ?>"></td>
            <td><input class="span4" name="Data[235]" type="text" value="<?php echo $Data[235]; ?>"></td>
            <td><input class="span4" name="Data[236]" type="text" value="<?php echo $Data[236]; ?>"></td>
            <td><input class="span4" name="Data[237]" type="text" value="<?php echo $Data[237]; ?>"></td>
          </tr>    
          <tr>
            <th class="indent">1.4 เชื้อเพลิงที่ใช้ในการทำอาหาร</th>
            <td><input class="span4" name="Data[238]" type="text" value="<?php echo $Data[238]; ?>"></td>
            <td><input class="span4" name="Data[239]" type="text" value="<?php echo $Data[239]; ?>"></td>
            <td><input class="span4" name="Data[240]" type="text" value="<?php echo $Data[240]; ?>"></td>
            <td><input class="span4" name="Data[241]" type="text" value="<?php echo $Data[241]; ?>"></td>
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
            <td><input class="span4" name="Data[242]" type="text" value="<?php echo $Data[242]; ?>"></td>
            <td><input class="span4" name="Data[243]" type="text" value="<?php echo $Data[243]; ?>"></td>
            <td><input class="span4" name="Data[244]" type="text" value="<?php echo $Data[244]; ?>"></td>
            <td><input class="span4" name="Data[245]" type="text" value="<?php echo $Data[245]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 อุปโภค</th>
            <td><input class="span4" name="Data[246]" type="text" value="<?php echo $Data[246]; ?>"></td>
            <td><input class="span4" name="Data[247]" type="text" value="<?php echo $Data[247]; ?>"></td>
            <td><input class="span4" name="Data[248]" type="text" value="<?php echo $Data[248]; ?>"></td>
            <td><input class="span4" name="Data[249]" type="text" value="<?php echo $Data[249]; ?>"></td>
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
            <td><input class="span4" name="Data[250]" type="text" value="<?php echo $Data[250]; ?>"></td>
            <td><input class="span4" name="Data[251]" type="text" value="<?php echo $Data[251]; ?>"></td>
            <td><input class="span4" name="Data[252]" type="text" value="<?php echo $Data[252]; ?>"></td>
            <td><input class="span4" name="Data[253]" type="text" value="<?php echo $Data[253]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 บริการเคลื่อนที่ (ระบุโดยหน่วยงาน <input class="span3" name="Data[73]" type="text" value="<?php echo $Data[73]; ?>">)</th>
            <td><input class="span4" name="Data[254]" type="text" value="<?php echo $Data[254]; ?>"></td>
            <td><input class="span4" name="Data[255]" type="text" value="<?php echo $Data[255]; ?>"></td>
            <td><input class="span4" name="Data[256]" type="text" value="<?php echo $Data[256]; ?>"></td>
            <td><input class="span4" name="Data[257]" type="text" value="<?php echo $Data[257]; ?>"></td>
          </tr>   
          <tr>
            <th class="indent">3.3 สถานีอนามัย/รพ.สต.</th>
            <td><input class="span4" name="Data[258]" type="text" value="<?php echo $Data[258]; ?>"></td>
            <td><input class="span4" name="Data[259]" type="text" value="<?php echo $Data[259]; ?>"></td>
            <td><input class="span4" name="Data[260]" type="text" value="<?php echo $Data[260]; ?>"></td>
            <td><input class="span4" name="Data[261]" type="text" value="<?php echo $Data[261]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.4 คลิกนิค/ร้านขายยา (ระบุจำนวน <input class="span1" name="Data[73]" type="text"> ร้าน)</th>
            <td><input class="span4" name="Data[262]" type="text" value="<?php echo $Data[262]; ?>"></td>
            <td><input class="span4" name="Data[263]" type="text" value="<?php echo $Data[263]; ?>"></td>
            <td><input class="span4" name="Data[264]" type="text" value="<?php echo $Data[264]; ?>"></td>
            <td><input class="span4" name="Data[265]" type="text" value="<?php echo $Data[265]; ?>"></td>
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
            <td><input class="span4" name="Data[266]" type="text" value="<?php echo $Data[266]; ?>"></td>
            <td><input class="span4" name="Data[267]" type="text" value="<?php echo $Data[267]; ?>"></td>
            <td><input class="span4" name="Data[268]" type="text" value="<?php echo $Data[268]; ?>"></td>
            <td><input class="span4" name="Data[269]" type="text" value="<?php echo $Data[269]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 ผ้าห่มและเครื่องนอน</th>
            <td><input class="span4" name="Data[270]" type="text" value="<?php echo $Data[270]; ?>"></td>
            <td><input class="span4" name="Data[271]" type="text" value="<?php echo $Data[271]; ?>"></td>
            <td><input class="span4" name="Data[272]" type="text" value="<?php echo $Data[272]; ?>"></td>
            <td><input class="span4" name="Data[273]" type="text" value="<?php echo $Data[273]; ?>"></td>
          </tr>     
          <tr>
            <th>5. ภูมิปัญญาท้องถิ่นที่สนับสนุน</th>
            <td><input class="span4" name="Data[274]" type="text" value="<?php echo $Data[274]; ?>"></td>
            <td><input class="span4" name="Data[275]" type="text" value="<?php echo $Data[275]; ?>"></td>
            <td><input class="span4" name="Data[276]" type="text" value="<?php echo $Data[276]; ?>"></td>
            <td><input class="span4" name="Data[277]" type="text" value="<?php echo $Data[277]; ?>"></td>
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
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[278]" <?php if ($Data[278] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[278]" <?php if ($Data[278] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[279]" type="text" value="<?php echo $Data[279]; ?>"></td>
          </tr>          
          <tr>
            <th>2. กิจกรรมการฝึกอบรบการผลิตน้ำหมักจุลินทรีย์ (EM)</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[280]" <?php if ($Data[280] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[280]" <?php if ($Data[280] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[281]" type="text" value="<?php echo $Data[281]; ?>"></td>
          </tr>        
          <tr>
            <th>3. กิจกรรมการฝึกอบรมอาชีพ</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[282]" <?php if ($Data[282] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[282]" <?php if ($Data[282] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[283]" type="text" value="<?php echo $Data[283]; ?>"></td>
          </tr>  
          <tr>
            <th>4. กิจกรรมการจัดหาอาชีพเสริม</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[284]" <?php if ($Data[284] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[284]" <?php if ($Data[284] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[285]" type="text" value="<?php echo $Data[285]; ?>"></td>
          </tr>        
          <tr>
            <th>5. กิจกรรมการฟื้นฟูพื้นที่เกษตรกรรมขนาดเล็ก</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[286]"<?php if ($Data[286] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[286]" <?php if ($Data[286] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[287]" type="text" value="<?php echo $Data[287]; ?>"></td>
          </tr>  
          <tr>
            <th>6. การดูแลผู้ป่วย/ผู้พิการ</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[288]" <?php if ($Data[288] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[288]" <?php if ($Data[288] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[289]" type="text" value="<?php echo $Data[289]; ?>"></td>
          </tr>        
          <tr>
            <th>7. การดูแลสัตว์เลี้ยง</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[290]" <?php if ($Data[290] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[290]" <?php if ($Data[290] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[291]" type="text" value="<?php echo $Data[291]; ?>"></td>
          </tr>  
          <tr>
            <th>8. การจัดการบ้าน/ที่พักอาศัย</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[292]" <?php if ($Data[292] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[292]" <?php if ($Data[292] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[293]" type="text" value="<?php echo $Data[293]; ?>"></td>
          </tr>  
          <tr>
            <th>9. อื่นๆ ระบุ <input class="span3" name="Data[294]" type="text" value="<?php echo $Data[294]; ?>"></th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[295]" <?php if ($Data[295] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[295]" <?php if ($Data[295] == 'value'): ?> checked="checked" <?php endif; ?>>></td>
            <td><input class="span4" name="Data[296]" type="text" value="<?php echo $Data[296]; ?>"></td>
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
                    <input type="checkbox" name="Data[297]" value="ผ่านผู้นำชุมชน" <?php if ($Data[297] == 'value'): ?> checked="checked" <?php endif; ?>>> 
                    <span>ผ่านผู้นำชุมชน</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="Data[298]" value="วิทยุกระจายเสียงท้องถิ่น/เสียงตามสาย" <?php if ($Data[298] == 'value'): ?> checked="checked" <?php endif; ?>>>
                    <span>วิทยุกระจายเสียงท้องถิ่น/เสียงตามสาย</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="Data[299]" value="การประชุม" <?php if ($Data[299] == 'value'): ?> checked="checked" <?php endif; ?>>>
                    <span>การประชุม</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="Data[300]" value="บอร์ดในสถานที่สาธารณะ" <?php if ($Data[300] == 'value'): ?> checked="checked" <?php endif; ?>>>
                    <span>บอร์ดในสถานที่สาธารณะ</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="Data[301]" value="เจ้าหน้าที่ชี้แจง" <?php if ($Data[301] == 'value'): ?> checked="checked" <?php endif; ?>>>
                    <span>เจ้าหน้าที่ชี้แจง</span>
                  </label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" name="Data[302]" value="อื่น ๆ (ระบุ)" <?php if ($Data[302] == 'value'): ?> checked="checked" <?php endif; ?>>>
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
	                    <input type="checkbox" name="Data[303]" value="โทรศัพท์มือถือ" <?php if ($Data[303] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                    <span>โทรศัพท์มือถือ</span>
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="Data[304]" value="อีเมล์" <?php if ($Data[304] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                    <span>อีเมล์</span>
	                  </label>
	                </li>
	                <li>
	                  <label>
	                    <input type="checkbox" name="Data[305]" value="อื่น ๆ (ระบุ)" <?php if ($Data[305] == 'value'): ?> checked="checked" <?php endif; ?>>>
	                    <span>อื่น ๆ (ระบุ)</span> <input class="span3" name="Data[306]" type="text" value="<?php echo $Data[306]; ?>">
	                  </label>
	                </li>
	              </ul>
	            </div>
	          </div>
		        <h3>4.3  ***ข้อมูลผู้ประสานงาน*** </h3>
						<p>เพื่อให้การดำเนินงานเป็นไปด้วยความรวดเร็ว ขอความกรุณากรอกชื่อผู้ประสานงานที่จะรับผิดชอบ</p>
	          <div class="clearfix">
						  <label for="xlInput">ชื่อ - นามสกุลผู้ให้ข้อมูล (นาย/นาง/นางสาว)</label>
						    <input type="text" size="30" name="Data[307]" class="xlarge" value="<?php echo $Data[307]; ?>">
						  					<label class="no-float">ตําแหน่ง</label>
							<input type="text" name="Data[308]" class="span3" value="<?php echo $Data[308]; ?>">
					  </div><!-- /clearfix -->
					  <div class="clearfix">
	
							<label class="no-float">สถานที่ทํางาน</label>
							<input type="text" name="Data[309]" class="span3" value="<?php echo $Data[309]; ?>">
						  <label class="no-float">หมู่ที่</label>
							<input type="text" name="Data[310]" class="span1" value="<?php echo $Data[310]; ?>">
						</div>
						
						<div class="clearfix">
							<label class="no-float">ตําบล</label>
							<input type="text" name="Data[311]" class="span2" value="<?php echo $Data[311]; ?>">
							<label class="no-float">อําเภอ</label>
							<input type="text" name="Data[312]" class="span2" value="<?php echo $Data[312]; ?>">
							<label class="no-float">จังหวัด</label>
							<input type="text" name="Data[313]" class="span2" value="<?php echo $Data[313]; ?>">
						</div>
						<div class="clearfix">
							<label class="no-float">โทรศัพท์</label>
							<input type="text" name="Data[314]" class="span2" value="<?php echo $Data[314]; ?>">
							<label class="no-float">โทรสาร</label>
							<input type="text" name="Data[315]" class="span2" value="<?php echo $Data[315]; ?>">
							<label class="no-float">อีเมล</label>
							<input type="text" name="Data[316]" class="span2" value="<?php echo $Data[316]; ?>">
						</div>
        </fieldset> <!-- /end ส่วนที่ 4 การประสานงาน -->
       
    </form>
