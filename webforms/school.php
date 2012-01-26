<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.no-float {
	float: none;
	width: 125px;
	display: inline-block;
}
input.span3, textarea.span3, input.span2, textarea.span2, input.span7, input.span1, input.span4, input.span5 {
	margin-left: 10px;
	margin-right: 10px;
}
legend.group{
	font-size: 18px;
}
.label-s label {
	width: 120px;
}
.unit{
	text-align: left;
}
.input-xxlarge, input.xxlarge, textarea.xxlarge, select.xxlarge {
	width: 530px;
	height: 50px;
	margin-left: 10px;
	margin-right: 10px;
}
</style>

<fieldset> <!-- fieldset -->
	<fieldset class="section1"> <!-- fieldset -->
  		<h3>รายการโครงสร้างพื้นฐาน /หน่วยงานรับผิดชอบ</h3>
  		<div class="clearfix label-s">
	  		<label class="no-float">ชื่อ</label>
  			<input class="span5" name="Data[0]" type="text" placeholder="-" value="<?php echo $Data[0]; ?>">
  		</div>
  		
  		<h3>ลักษณะความเสียหายที่ส่งผลต่อประสิทธิภาพการใช้ประโยน์</h3>
  		<div class="clearfix label-s">
	  		<label class="no-float"></label>
        <textarea class="xxlarge" id="textareaภ" name="textarea2" rows="3"></textarea>
  		</div>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">จำนวน(หน่วย</label>
  			<input class="span1" name="Data[0]" type="text" placeholder="-" value="<?php echo $Data[0]; ?>">
  			<label class="no-float unit">หลัง</label>
  		</div>
  		
  		<h3>ระบุพื้นที่ตั้ง</h3>
  		<div class="clearfix label-s">
	  		<label class="no-float">อำเภอ</label>
  			<input class="span2" name="Data[0]" type="text" placeholder="-" value="<?php echo $Data[0]; ?>">
  			<label class="no-float">จังหวัด</label>
  			<input class="span2" name="Data[0]" type="text" placeholder="-" value="<?php echo $Data[0]; ?>">
  			<label class="no-float">เขต</label>
  			<input class="span2" name="Data[0]" type="text" placeholder="-" value="<?php echo $Data[0]; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">มูลค่าความเสียหายเบื้องต้น</label>
  			<input class="span2" name="Data[0]" type="text" placeholder="-" value="<?php echo $Data[0]; ?>">
  			<label class="no-float unit">บาท</label>
  		</div>
  		
  		<h3>รูปแบบแนวทางการฟื้นฟู(บูรณะซ่อมแซม/ก่อสร้างใหม่/อื่นๆ)</h3>
  		<div class="clearfix label-s">
	  		<label class="no-float"></label>
        <textarea class="xxlarge" id="textareaภ" name="textarea2" rows="3"></textarea>
  		</div>
  		
  	</fieldset>
</fieldset> <!-- end fieldset -->

