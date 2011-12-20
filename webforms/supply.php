<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
		<style type="text/css">
		h2{
			font-size: 18px;
			font-weight: normal;
		}
		h3{
			font-size: 13px;
			font-weight: normal;
		}
		fieldset legend{
			padding: 0;
		}
		fieldset{
			*margin: 0;
		}
		#Location_level0_wrapper, #Location_level1_wrapper, #Location_level2_wrapper, #Location_level3_wrapper {
			float: left;
			width: 160px;
			margin: 0 15px 0 0;
			display: block;
		}
		.xxlarge{
			height: 70px;
		}
		#location-add{
			padding: 4px 10px;
			border: 1px solid #333;
			background: #555;
			color: whiteSmoke;
		}
		.check-fix-ie{
			width: 30px;
		}
		</style>
<!-- เลือกพื้นที่เป้าหมาย -->
<div class="target">
  <h2>พื้นที่เป้าหมาย</h2>
	<div class="clearfix">
	<?php $this->widget('ext.location.LocationMultipleWidget', array('model' => $model, 'attribute' => 'locations')); ?>
  </div>
</div>

<!-- เงินทุน -->
	<fieldset>
		<legend>บริษัทหรือองค์กรของท่านได้เข้าไปมีส่วนร่วมในช่วยเหลืออย่างไร</legend>
		<div class="clearfix">
		  <label>เงินทุนสนับสนุน (บาท)</label>
		  <div class="input">
		    <input class="xlarge" name="Data[0]" size="30" type="text" value="<?php echo $Data[0]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>รายละเอียดเพิ่มเติม</label>
		  <div class="input">
		    <input class="xlarge" name="Data[1]" size="50" type="text" value="<?php echo $Data[1]; ?>">
		  </div>
		</div>
	</fieldset>

<!-- Flag -->
	<fieldset class="clearfix">
		<legend>สถานะดำเนินการ</legend>
		<input type="radio"/> &nbsp; <span>ดำเนินการแล้ว</span>
		<input type="radio"/> &nbsp; <span>มีแผนที่จะดำเนินการ</span>
	</fieldset>

<!-- รายละเอียดโครงการ -->
	<fieldset>
		<legend>รายละเอียกโครงการ</legend>
		<div class="clearfix">
		  <label>ชื่อโครงการ</label>
		  <div class="input">
		    <input class="xlarge" name="Data[2]" size="30" type="text" value="<?php echo $Data[2]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>ลักษณะโครงการ</label>
		  <div class="input">
		    <input class="xlarge" name="Data[3]" size="50" type="text" value="<?php echo $Data[3]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>เป้าหมาย</label>
		  <div class="input">
		    <input class="xlarge" name="Data[4]" size="30" type="text" value="<?php echo $Data[4]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>พื้นที่เป้าหมาย</label>
		  <div class="input">
		    <input class="xlarge" name="Data[5]" size="50" type="text" value="<?php echo $Data[5]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>ระยะเวลา</label>
		  <div class="input">
		    <input class="xlarge" name="Data[6]" size="50" type="text" value="<?php echo $Data[6]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>งบประมาณ</label>
		  <div class="input">
		    <input class="xlarge" name="Data[7]" size="30" type="text" value="<?php echo $Data[7]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>สถานะโครงการปัจจุบัน</label>
		  <div class="input">
		    <input class="xlarge" name="Data[8]" size="50" type="text" value="<?php echo $Data[8]; ?>">
		  </div>
		</div>
	</fieldset>

<!-- ประเด็นของโครงการ -->
	<fieldset>
		<legend>ประเด็นของโครงการ</legend>
		<div class="clearfix">
		  <label id="optionsCheckboxes">(สามารถเลือกได้มากกว่า 1 ข้อ)</label>
		  <div class="input">
		    <ul class="inputs-list check-list">
		      <li>
		        <label>
		          <input id="ytWebform_filter0" type="hidden" value="0" name="Webform[filter0]"><input name="Webform[filter0]" id="Webform_filter0" value="1" type="checkbox" class="check-fix-ie">					          <span>การเกษตร</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter1" type="hidden" value="0" name="Webform[filter1]"><input name="Webform[filter1]" id="Webform_filter1" value="1" type="checkbox" class="check-fix-ie">					          <span>การจัดการภัยพิบัติ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter2" type="hidden" value="0" name="Webform[filter2]"><input name="Webform[filter2]" id="Webform_filter2" value="1" type="checkbox" class="check-fix-ie">					          <span>เศรษฐกิจและการฟื้นฟูอาชีพ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter3" type="hidden" value="0" name="Webform[filter3]"><input name="Webform[filter3]" id="Webform_filter3" value="1" type="checkbox" class="check-fix-ie">					          <span>การศึกษา</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter4" type="hidden" value="0" name="Webform[filter4]"><input name="Webform[filter4]" id="Webform_filter4" value="1" type="checkbox" class="check-fix-ie">					          <span>สิ่งแวดล้อม</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter5" type="hidden" value="0" name="Webform[filter5]"><input name="Webform[filter5]" id="Webform_filter5" value="1" type="checkbox" class="check-fix-ie">					          <span>อาหาร</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter6" type="hidden" value="0" name="Webform[filter6]"><input name="Webform[filter6]" id="Webform_filter6" value="1" type="checkbox" class="check-fix-ie">					          <span>สุขภาพ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter7" type="hidden" value="0" name="Webform[filter7]"><input name="Webform[filter7]" id="Webform_filter7" value="1" type="checkbox" class="check-fix-ie">					          <span>ที่อยู่อาศัย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter8" type="hidden" value="0" name="Webform[filter8]"><input name="Webform[filter8]" id="Webform_filter8" value="1" type="checkbox" class="check-fix-ie">					          <span>สาธารณสุขและน้ำสะอาด</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter9" type="hidden" value="0" name="Webform[filter9]"><input name="Webform[filter9]" id="Webform_filter9" value="1" type="checkbox" class="check-fix-ie">					          <span>ความเท่าเทียม สิทธิมนุษยชน ความยุติธรรม และประชาธิปไตย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter10" type="hidden" value="0" name="Webform[filter10]"><input name="Webform[filter10]" id="Webform_filter10" value="1" type="checkbox" class="check-fix-ie">					          <span>อื่นๆ (โปรดระบุ)</span>
						  <input class="xlarge" name="Data[23]" size="30" type="text" value="" >
		        </label>
		      </li>
		    </ul>
		  </div>
		</div>
	</fieldset>
	
<!-- แนท -->
	<fieldset>
		<legend>ข้อมูลผู้ประสานงาน</legend>
		<div class="clearfix">
		  <label>ชื่อผู้ประสานงานโครงการ</label>
		  <div class="input">
		    <input class="xlarge" name="Data[9]" size="50" type="text" value="<?php echo $Data[9]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>Email</label>
		  <div class="input">
		    <input class="xlarge" name="Data[10]" size="30" type="text" value="<?php echo $Data[10]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>เบอร์โทรศัพท์</label>
		  <div class="input">
		    <input class="xlarge" name="Data[11]" size="50" type="text" value="<?php echo $Data[11]; ?>">
		  </div>
		</div>
	</fieldset>

<!-- รายละเอียดเพิ่มเติม -->
	<fieldset>
		<legend>รายละเอียดเพิ่มเติม</legend>
		<div class="clearfix">
		  <label></label>
		  <div class="input">
		    <textarea name="Data[12]" row="8" cols="50" class="xxlarge"><?php echo $Data[12]; ?></textarea>
		  </div>
		</div>
	</fieldset>


<!-- ข้อมูลอื่นๆ -->
	<fieldset>
		<legend>ข้อมูลอื่นๆ</legend>
		<div class="clearfix">
		  <h3>ปัญหาที่กลุ่ม/องค์กรของท่านพบในการทำงานมีอะไรบ้าง</h3>
		  <div class="input">
		    <textarea name="Data[13]" row="8" cols="50" class="xxlarge"><?php echo $Data[13]; ?></textarea>
		  </div>
		</div>
		<div class="clearfix">
		  <h3>ท่านมีข้อเสนอหรือข้อแนะนำใดๆ ที่จะช่วยส่งเสริมความร่วมมือในการรับมือ/แก้ไข/ฟื้นฟู ปัญหาอุทกภัยครั้งนี้ระหว่างองค์กรหรือภาคส่วนต่างๆ</h3>
		  <div class="input">
		    <textarea name="Data[14]" row="8" cols="50" class="xxlarge"><?php echo $Data[14]; ?></textarea>
		  </div>
		</div>
		<div class="clearfix">
		  <h3>ปัจจัยอะไรบ้างที่กลุ่ม/องค์กรของท่านใช้ในการพิจารณาในการทำโครงการหรือในการเลือกพื้นที่ทำโครงการ : (เรียงลำดับความสำคัญจากมากไปน้อย; 1 = มากที่สุด, 5 = น้อยที่สุด)</h3>
		</div>
		<div class="clearfix">
		  <label>1.</label>
		  <div class="input">
		    <input class="xlarge" name="Data[15]" size="50" type="text" value="<?php echo $Data[15]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>2.</label>
		  <div class="input">
		    <input class="xlarge" name="Data[16]" size="50" type="text" value="<?php echo $Data[16]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>3.</label>
		  <div class="input">
		    <input class="xlarge" name="Data[17]" size="50" type="text" value="<?php echo $Data[17]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>4.</label>
		  <div class="input">
		    <input class="xlarge" name="Data[18]" size="50" type="text" value="<?php echo $Data[18]; ?>">
		  </div>
		</div>
		<div class="clearfix">
		  <label>5.</label>
		  <div class="input">
		    <input class="xlarge" name="Data[19]" size="50" type="text" value="<?php echo $Data[19]; ?>">
		  </div>
		</div>
	</fieldset>