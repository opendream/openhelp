<fieldset>
	<legend>ข้อมูลทั่วไปของกลุ่ม / องค์กร</legend>

  <h3>ประเภทของกลุ่ม / องค์กร :</h3>
  <div class="clearfix">
  	<label class="no-float">บริษัท</label>
  	<input type="radio"<?php if ($User['profile0'] == "บริษัท"): ?> checked="checked"<? endif; ?> name="User[profile0]" value="บริษัท">
  	<label class="no-float">มูลนิธิ</label>
  	<input type="radio"<?php if ($User['profile0'] == "มูลนิธิ"): ?> checked="checked"<? endif; ?> name="User[profile0]" value="มูลนิธิ">
  	<label class="no-float">หน่วยงานสาธารณะประโยชน์ (NGO)</label>
  	<input type="radio"<?php if ($User['profile0'] == "หน่วยงานสาธารณะประโยชน์ (NGO)"): ?> checked="checked"<? endif; ?> name="User[profile0]" value="หน่วยงานสาธารณะประโยชน์ (NGO)">
  	<label class="no-float">หน่วยงานรัฐ</label>
  	<input type="radio"<?php if ($User['profile0'] == "หน่วยงานรัฐ"): ?> checked="checked"<? endif; ?> name="User[profile0]" value="หน่วยงานรัฐ">
  	<label class="no-float">กลุ่มอาสาสมัคร</label>
  	<input type="radio"<?php if ($User['profile0'] == "กลุ่มอาสาสมัคร"): ?> checked="checked"<? endif; ?> name="User[profile0]" value="กลุ่มอาสาสมัคร">
  	<label class="no-float">อื่นๆ</label>
  	<input type="radio"<?php if ($User['profile0'] == "อื่นๆ"): ?> checked="checked"<? endif; ?> name="User[profile0]" value="อื่นๆ">
  </div>

  <h3>ชื่อกลุ่ม / องค์กร</h3>
  <div class="clearfix">
    <div class="input">
      <input class="xlarge"  name="Data[1]" size="30" type="text" value="<?php echo $Data[1]; ?>" >
    </div>
  </div><!-- /clearfix -->

  <h3>ข้อมูลการติดต่อ</h3>
  <div class="clearfix">
    <label >ชื่อผู้ติดต่อ / ประสานงาน</label>
    <div class="input">
      <input class="xlarge"  name="Data[2]" size="30" type="text" value="<?php echo $Data[2]; ?>" >
    </div>
  </div><!-- /clearfix -->
  <div class="clearfix">
    <label >Email</label>
    <div class="input">
      <input class="xlarge"  name="Data[3]" size="30" type="text" value="<?php echo $Data[3]; ?>">
    </div>
  </div><!-- /clearfix -->
  <div class="clearfix">
    <label >เบอร์โทรศัพท์</label>
    <div class="input">
      <input class="xlarge"  name="Data[4]" size="30" type="text" value="<?php echo $Data[4]; ?>" >
    </div>
  </div><!-- /clearfix -->
  
</fieldset>
