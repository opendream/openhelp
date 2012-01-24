<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
.no-float {
	float: none;
	width: 125px;
	display: inline-block;
}
input.span3, textarea.span3, input.span2, textarea.span2, input.span7, input.span1, input.span4 {
	margin-left: 10px;
	margin-right: 10px;
}
legend.group{
	font-size: 18px;
}
.label-s label {
	width: 120px;
}
</style>

  <div class="target">
    <h2>พื้นที่ประสบภัย</h2>
  	<div class="clearfix">
  	<?php $this->widget('ext.location.LocationMultipleWidget', array('model' => $model, 'attribute' => 'locations')); ?>
    </div>
  </div>

	<fieldset> <!-- fieldset -->

  	<fieldset class="section1"> <!-- fieldset -->
  		<legend>พื้นที่ประสบภัย</legend>
  		<div class="clearfix label-s">
  			<label class="no-float">วันที่เกิดเหตุการณ์</label>
  			<input class="span2" name="Data[34]" type="text" placeholder="วันที่" value="<?php echo $Data[34]; ?>">
  			<label class="no-float">ยุติเหตุการณ์</label>
  			<input class="span2" name="Data[35]" type="text" placeholder="วันที่" value="<?php echo $Data[35]; ?>">
  		</div>
  		<div class="clearfix label-s">
  			<label class="no-float">มูลค่าความเสียหาย</label>
  			<input class="span2" name="Data[36]" type="text" placeholder="บาท" value="<?php echo $Data[36]; ?>">
  		</div>
  	</fieldset>
	
		<fieldset class="section2"> <!-- fieldset -->
			<legend>ความเสียหายที่สำรวจ</legend>
				<fieldset> <!-- fieldset -->
					<legend class="group">ด้านชีวิต</legend>
					<div class="clearfix label-s">
						<label class="no-float">จำนวนคน</label>
						<input class="span2" name="Data[0]" type="text" placeholder="คน" value="<?php echo $Data[0]; ?>">
						<label class="no-float">จำนวนครัวเรือน</label>
						<input class="span2" name="Data[1]" type="text" placeholder="คน" value="<?php echo $Data[1]; ?>">
						<label class="no-float">จำนวนผู้อบยพ</label>
						<input class="span2" name="Data[2]" type="text" placeholder="แห่ง" value="<?php echo $Data[2]; ?>">
					</div>
					
					<div class="clearfix label-s">
						<label class="no-float">เสียชีวิต</label>
						<input class="span2" name="Data[3]" type="text" placeholder="คน" value="<?php echo $Data[3]; ?>">
						<label class="no-float">สูญหาย</label>
						<input class="span2" name="Data[4]" type="text" placeholder="คน" value="<?php echo $Data[4]; ?>">
						<label class="no-float">บาดเจ็บ</label>
						<input class="span2" name="Data[5]" type="text" placeholder="คน" value="<?php echo $Data[5]; ?>">
					</div>
	    </fieldset> <!-- end fieldset -->
    
    
			<fieldset>
				<legend  class="group">ด้านทรัพย์สิน</legend>
				<div class="clearfix label-s">
					<label class="no-float">บ้านเรือนทั้งหลัง</label>
					<input class="span2" name="Data[6]" type="text" placeholder="หลัง" value="<?php echo $Data[6]; ?>">
					<label class="no-float">บ้านเรือนบางส่วน</label>
					<input class="span2" name="Data[7]" type="text" placeholder="หลัง" value="<?php echo $Data[7]; ?>">
					<label class="no-float">อาคารพิชย์</label>
					<input class="span2" name="Data[8]" type="text" placeholder="คน" value="<?php echo $Data[8]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">โรงงาน</label>
					<input class="span2" name="Data[9]" type="text" placeholder="แห่ง" value="<?php echo $Data[9]; ?>">
					<label class="no-float">โรงแรม</label>
					<input class="span2" name="Data[10]" type="text" placeholder="แห่ง" value="<?php echo $Data[10]; ?>">
					<label class="no-float">ยานยนต์</label>
					<input class="span2" name="Data[11]" type="text" placeholder="คัน" value="<?php echo $Data[11]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">เรือประมง</label>
					<input class="span2" name="Data[12]" type="text" placeholder="ลำ" value="<?php echo $Data[12]; ?>">
					<label class="no-float">ปศุสัตว์</label>
					<input class="span2" name="Data[13]" type="text" placeholder="ตัว" value="<?php echo $Data[13]; ?>">
					<label class="no-float">สัตว์ปีก</label>
					<input class="span2" name="Data[14]" type="text" placeholder="ตัว" value="<?php echo $Data[14]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">พื้นที่การเกษตร</label>
					<input class="span2" name="Data[15]" type="text" placeholder="ไร่" value="<?php echo $Data[15]; ?>">
					<label class="no-float">บ่อปลา/กุ้ง/ตะพาบ</label>
					<input class="span2" name="Data[16]" type="text" placeholder="ตัว" value="<?php echo $Data[16]; ?>">
				</div>
			</fieldset>
    
    
	    <fieldset> <!-- fieldset -->
		    <legend  class="group">ด้านสิ่งสาธารณประโยชน์</legend>
		    <div class="clearfix label-s">
					<label class="no-float">ถนน</label>
					<input class="span1" name="Data[17]" type="text" placeholder="สาย" value="<?php echo $Data[17]; ?>">
					<label class="no-float">สะพาน/คอ</label>
					<input class="span1" name="Data[18]" type="text" placeholder="แห่ง" value="<?php echo $Data[18]; ?>">
					<label class="no-float">เหมือง</label>
					<input class="span1" name="Data[19]" type="text" placeholder="แห่ง" value="<?php echo $Data[19]; ?>">
					<label class="no-float">วัด</label>
					<input class="span1" name="Data[20]" type="text" placeholder="แห่ง" value="<?php echo $Data[20]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">โรงเรียน</label>
					<input class="span1" name="Data[21]" type="text" placeholder="แห่ง" value="<?php echo $Data[21]; ?>">
					<label class="no-float">สถานที่ราชการ</label>
					<input class="span1" name="Data[22]" type="text" placeholder="แห่ง" value="<?php echo $Data[22]; ?>">
					<label class="no-float">บ่อน้ำ</label>
					<input class="span1" name="Data[23]" type="text" placeholder="แห่ง" value="<?php echo $Data[23]; ?>">
					<label class="no-float">อ่างเก็บน้ำ</label>
					<input class="span1" name="Data[24]" type="text" placeholder="แห่ง" value="<?php echo $Data[24]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">ท่อระบายน้ำ</label>
					<input class="span1" name="Data[25]" type="text" placeholder="แห่ง" value="<?php echo $Data[25]; ?>">
					<label class="no-float">ฝาย/ทำนบ/พนังกั้นน้ำ</label>
					<input class="span1" name="Data[26]" type="text" placeholder="แห่ง" value="<?php echo $Data[26]; ?>">
				</div>
	    </fieldset> <!-- end fieldset -->
    
    
	    <fieldset> <!-- end fieldset -->
		    <legend  class="group">การให้ความช่วยเหลือ</legend>
		    <div class="clearfix label-s">
					<label class="no-float">เรือท้องแบน</label>
					<input class="span2" name="Data[27]" type="text" placeholder="ลำ" value="<?php echo $Data[27]; ?>">
					<label class="no-float">รถยนต์/รถบรรถุก</label>
					<input class="span2" name="Data[28]" type="text" placeholder="คัน" value="<?php echo $Data[28]; ?>">
					<label class="no-float">เครื่องสูบน้ำ</label>
					<input class="span2" name="Data[29]" type="text" placeholder="เครื่อง" value="<?php echo $Data[29]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">เครื่องอุปโภค-บริโภค</label>
					<input class="span2" name="Data[30]" type="text" placeholder="ชุด" value="<?php echo $Data[30]; ?>">
					<label class="no-float">ข้าวกล่อง</label>
					<input class="span2" name="Data[31]" type="text" placeholder="กล่อง" value="<?php echo $Data[31]; ?>">
					<label class="no-float">น้ำดื่ม</label>
					<input class="span2" name="Data[32]" type="text" placeholder="ลิตร/ขวด" value="<?php echo $Data[32]; ?>">
				</div>
				
				<div class="clearfix label-s">
					<label class="no-float">ยารักษาโรค</label>
					<input class="span2" name="Data[33]" type="text" placeholder="ชุด" value="<?php echo $Data[33]; ?>">
				</div>
	    </fieldset> <!-- end fieldset -->
	    
    
		</fieldset> <!-- end fieldset -->
	</fieldset> <!-- end fieldset -->