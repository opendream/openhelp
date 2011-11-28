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
	input.span3, textarea.span3, input.span2, textarea.span2, input.span7{
		margin-left: 20px;
		margin-right: 20px;
	}
</style>

<h1>แบบสํารวจเพื่อการฟื้นฟูชุมชนหลังสถานการณ์ภัยพิบัติระดับตําบล</h1>
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
  
  
  
<!--       ข้อมูลทั่วไปของผู้ให้ข้อมูล -->
  <fieldset>
      <legend>ข้อมูลทั่วไปของผู้ให้ข้อมูล</legend>
      <div class="clearfix">
		  <label>ชื่อ - นามสกุลผู้ให้ข้อมูล (นาย/นาง/นางสาว)</label>
		  <div class="input">
		    <input class="xlarge"  name="Data[0]" size="30" type="text" value="<?php echo $Data[0]; ?>">
		  </div>
		</div><!-- /clearfix -->
		<div class="clearfix">
			<label class="no-float">สถานที่ทํางาน</label>
			<input class="span2"  name="Data[1]" type="text"  placeholder="" value="<?php echo $Data[1]; ?>">
			<label class="no-float">หมู่ที่</label>
			<input class="span1"  name="Data[2]" type="text"  placeholder="" value="<?php echo $Data[2]; ?>">
			<label class="no-float">ตําบล</label>
			<input class="span2"  name="Data[3]" type="text"  placeholder="" value="<?php echo $Data[3]; ?>">
		</div>
		<div class="clearfix">
			<label class="no-float">อําเภอ</label>
			<input class="span2"  name="Data[4]" type="text"  placeholder="" value="<?php echo $Data[4]; ?>">
			<label class="no-float">จังหวัด</label>
			<input class="span2"  name="Data[5]" type="text"  placeholder="" value="<?php echo $Data[5]; ?>">
			<label class="no-float">โทรศัพท์</label>
			<input class="span2"  name="Data[6]" type="text"  placeholder="" value="<?php echo $Data[6]; ?>">
		</div>
		<div class="clearfix">
			<label class="no-float">ตําแหน่งทางสังคม</label>
			<input class="span2"  name="Data[7]" type="text"  placeholder="" value="<?php echo $Data[7]; ?>">
		</div>
  </fieldset>
  <br/><br/>
  
  
  
<!--       ส่วนที่ 1 ข้อมูลทั่วไปของตําบล -->
  <fieldset>
      <legend>ส่วนที่ 1 ข้อมูลทั่วไปของตําบล</legend>
      <div class="clearfix">
			  <label>1.1 จํานวนครัวเรือน</label>
			  <div class="input">
			    <input class="span1"  name="Data[8]" size="30" type="text" value="<?php echo $Data[8]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
				<label class="no-float">1.2 ประชากรปัจจุบันทั้งหมดโดยประมาณ</label>
				<input class="span1"  name="Data[9]" type="text"  placeholder="" value="<?php echo $Data[9]; ?>">
				<label class="no-float">ชาย</label>
				<input class="span1"  name="Data[10]" type="text"  placeholder="" value="<?php echo $Data[10]; ?>">
				<label class="no-float">หญิง</label>
				<input class="span1"  name="Data[11]" type="text"  placeholder="" value="<?php echo $Data[11]; ?>">
			</div>
			<div class="clearfix">
				<label class="no-float">โดยเฉลี่ยครัวเรือนละ/คน</label>
				<input class="span1"  name="Data[12]" type="text"  placeholder="" value="<?php echo $Data[12]; ?>">
				<label class="no-float">มีประชากรแฝง/คน</label>
				<input class="span1"  name="Data[13]" type="text" placeholder="" value="<?php echo $Data[13]; ?>">
			</div>
			<div class="clearfix">
				<label class="no-float">1.3 การนับถือศาสนา พุทธ (ร้อยละ)</label>
				<input class="span1"  name="Data[14]" type="text"  placeholder="" value="<?php echo $Data[14]; ?>">
				<label class="no-float">อิสลาม (ร้อยละ)</label>
				<input class="span1"  name="Data[15]" type="text"  placeholder="" value="<?php echo $Data[15]; ?>">
				<label class="no-float">คริสต์ (ร้อยละ)</label>
				<input class="span1"  name="Data[16]" type="text"  placeholder="" value="<?php echo $Data[16]; ?>">
			</div>
			<div class="clearfix">
				<label class="no-float">1.4 ส่วนใหญ่ประกอบอาชีพ</label>
				<input class="span2"  name="Data[17]" type="text"  placeholder="" value="<?php echo $Data[17]; ?>">
				<label class="no-float">รองลงมา</label>
				<input class="span2"  name="Data[18]" type="text"  placeholder="" value="<?php echo $Data[18]; ?>">
			</div>
  </fieldset>
  <br/><br/>
  
  
<!--       ส่วนที่ 2 ข้อมูลผู้ประสานงานในพื้นที่ -->
  <fieldset>
      <legend>ส่วนที่ 2 ข้อมูลผู้ประสานงานในพื้นที่</legend>
      <h3>ระดับตําบล/เทศบาล</h3>
			<table class="bordered-table">
        <thead>
          <tr>
            <th>ชื่อตำบล/เทศบาล</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ตําแหน่ง</th>
            <th>เบอร์โทร</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input class="span4"  name="Data[217]" type="text" placeholder="" value="<?php echo $Data[217]; ?>"></td>
            <td><input class="span4"  name="Data[19]" type="text" placeholder="" value="<?php echo $Data[19]; ?>"></td>
            <td><input class="span4"  name="Data[20]" type="text" placeholder="" value="<?php echo $Data[20]; ?>"></td>
            <td><input class="span4"  name="Data[215]" type="text" placeholder="" value="<?php echo $Data[215]; ?>"></td>
          </tr>
        </tbody>
      </table>
      
      <h3>ระดับหมู่บ้าน/ชุมชน</h3>
			<table class="bordered-table">
        <thead>
          <tr>
            <th>ชื่อหมู่บ้าน/ชุมชน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ตําแหน่ง</th>
            <th>เบอร์โทร</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input class="span2"  name="Data[28]" type="text" placeholder="" value="<?php echo $Data[28]; ?>"></td>
            <td><input class="span4"  name="Data[29]" type="text" placeholder="" value="<?php echo $Data[29]; ?>"></td>
            <td><input class="span4"  name="Data[30]" type="text" placeholder="" value="<?php echo $Data[30]; ?>"></td>
            <td><input class="span4"  name="Data[31]" type="text" placeholder="" value="<?php echo $Data[31]; ?>"></td>
          </tr>
          <tr>
            <td><input class="span2"  name="Data[33]" type="text" placeholder="" value="<?php echo $Data[33]; ?>"></td>
            <td><input class="span4"  name="Data[34]" type="text" placeholder="" value="<?php echo $Data[34]; ?>"></td>
            <td><input class="span4"  name="Data[35]" type="text" placeholder="" value="<?php echo $Data[35]; ?>"></td>
            <td><input class="span4"  name="Data[36]" type="text" placeholder="" value="<?php echo $Data[36]; ?>"></td>
          </tr>
          <tr>
            <td><input class="span2"  name="Data[38]" type="text" placeholder="" value="<?php echo $Data[38]; ?>"></td>
            <td><input class="span4"  name="Data[39]" type="text" placeholder="" value="<?php echo $Data[39]; ?>"></td>
            <td><input class="span4"  name="Data[40]" type="text" placeholder="" value="<?php echo $Data[40]; ?>"></td>
            <td><input class="span4"  name="Data[41]" type="text" placeholder="" value="<?php echo $Data[41]; ?>"></td>
          </tr>
          <tr>
            <td><input class="span2"  name="Data[21]" type="text" placeholder="" value="<?php echo $Data[21]; ?>"></td>
            <td><input class="span4"  name="Data[22]" type="text" placeholder="" value="<?php echo $Data[22]; ?>"></td>
            <td><input class="span4"  name="Data[23]" type="text" placeholder="" value="<?php echo $Data[23]; ?>"></td>
            <td><input class="span4"  name="Data[24]" type="text" placeholder="" value="<?php echo $Data[24]; ?>"></td>
          </tr>
          <tr>
            <td><input class="span2"  name="Data[25]" type="text" placeholder="" value="<?php echo $Data[25]; ?>"></td>
            <td><input class="span4"  name="Data[26]" type="text" placeholder="" value="<?php echo $Data[26]; ?>"></td>
            <td><input class="span4"  name="Data[27]" type="text" placeholder="" value="<?php echo $Data[27]; ?>"></td>
            <td><input class="span4"  name="Data[32]" type="text" placeholder="" value="<?php echo $Data[32]; ?>"></td>
          </tr>
        </tbody>
      </table>
  </fieldset>
  <br/><br/>
  
  
<!--       ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู -->
  <fieldset>
    <legend>ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู</legend>
	<table class="bordered-table">
	  <thead>
	    <tr>
	      <th scope="col" colspan="1" rowspan="2">ประเด็นความเสียหาย</th>
	      <th colspan="5" rowspan="1" scope="col">พื้นที่ที่ได้รับความเสียหาย</th>
	      <th scope="col" colspan="1" rowspan="2">สรุปรวม(เพื่อเป็นภาพตำบล)</th>
	      <th scope="col" colspan="1" rowspan="2">รายละเอียดเพิ่มเติม</th>
	    </tr>
	    <tr>
	      <th>หมู่ <input class="span1"  name="Data[42]" type="text" value="<?php echo $Data[42]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[43]" type="text" value="<?php echo $Data[43]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[44]" type="text" value="<?php echo $Data[44]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[45]" type="text" value="<?php echo $Data[45]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[46]" type="text" value="<?php echo $Data[46]; ?>"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td colspan="8" class="table-lv1"><h3>3.1 ความเสียหายต่อชีวิต</h3></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.1.1 ผู้เสียหายต่อชีวิตและความปลอดภัย (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- เสียชีวิต</td>
	      <td><input class="span2"  name="Data[47]" type="text" value="<?php echo $Data[47]; ?>"></td>
	      <td><input class="span2"  name="Data[563]" type="text" value="<?php echo $Data[563]; ?>"></td>
	      <td><input class="span2"  name="Data[564]" type="text" value="<?php echo $Data[564]; ?>"></td>
	      <td><input class="span2"  name="Data[565]" type="text" value="<?php echo $Data[565]; ?>"></td>
	      <td><input class="span2"  name="Data[566]" type="text" value="<?php echo $Data[566]; ?>"></td>
	      <td><input class="span2"  name="Data[567]" type="text" value="<?php echo $Data[567]; ?>"></td>
	      <td><input class="span4"  name="Data[568]" type="text" value="<?php echo $Data[568]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- สูญหาย</td>
	      <td><input class="span2"  name="Data[569]" type="text" value="<?php echo $Data[569]; ?>"></td>
	      <td><input class="span2"  name="Data[570]" type="text" value="<?php echo $Data[570]; ?>"></td>
	      <td><input class="span2"  name="Data[571]" type="text" value="<?php echo $Data[571]; ?>"></td>
	      <td><input class="span2"  name="Data[572]" type="text" value="<?php echo $Data[572]; ?>"></td>
	      <td><input class="span2"  name="Data[573]" type="text" value="<?php echo $Data[573]; ?>"></td>
	      <td><input class="span2"  name="Data[574]" type="text" value="<?php echo $Data[574]; ?>"></td>
	      <td><input class="span4"  name="Data[575]" type="text" value="<?php echo $Data[575]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- บาดเจ็บ</td>
	      <td><input class="span2"  name="Data[576]" type="text" value="<?php echo $Data[576]; ?>"></td>
	      <td><input class="span2"  name="Data[577]" type="text" value="<?php echo $Data[577]; ?>"></td>
	      <td><input class="span2"  name="Data[578]" type="text" value="<?php echo $Data[578]; ?>"></td>
	      <td><input class="span2"  name="Data[579]" type="text" value="<?php echo $Data[579]; ?>"></td>
	      <td><input class="span2"  name="Data[580]" type="text" value="<?php echo $Data[580]; ?>"></td>
	      <td><input class="span2"  name="Data[581]" type="text" value="<?php echo $Data[581]; ?>"></td>
	      <td><input class="span4"  name="Data[582]" type="text" value="<?php echo $Data[582]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.1.2 ปัจจัยเสี่ยงต่อความปลอดภัย</h4></td>
	    </tr>
	    <tr>
	      <td>- โจรกรรม</td>
	      <td><input type="checkbox" name="Data[604]" value="โจรกรรม" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[605]" value="โจรกรรม" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[606]" value="โจรกรรม" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[607]" value="โจรกรรม" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[608]" value="โจรกรรม" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
	      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- สัตว์ร้าย</td>
	      <td><input type="checkbox" name="Data[611]" value="สัตว์ร้าย" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[612]" value="สัตว์ร้าย" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[613]" value="สัตว์ร้าย" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[614]" value="สัตว์ร้าย" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[615]" value="สัตว์ร้าย" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
	      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ไฟฟ้า</td>
	      <td><input type="checkbox" name="Data[618]" value="ไฟฟ้า" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ไฟฟ้า" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ไฟฟ้า" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ไฟฟ้า" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ไฟฟ้า" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ดินไหล/ถล่ม</td>
	      <td><input type="checkbox" name="Data[625]" value="ดินไหล/ถล่ม" <?php if ($Data[625] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[626]" value="ดินไหล/ถล่ม" <?php if ($Data[626] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[627]" value="ดินไหล/ถล่ม" <?php if ($Data[627] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[628]" value="ดินไหล/ถล่ม" <?php if ($Data[628] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[629]" value="ดินไหล/ถล่ม" <?php if ($Data[629] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[630]" type="text" value="<?php echo $Data[630]; ?>"></td>
	      <td><input class="span4"  name="Data[631]" type="text" value="<?php echo $Data[631]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่นๆ <input class="span2"  name="Data[632]" type="text" value="<?php echo $Data[632]; ?>"></td>
	      <td><input type="checkbox" name="Data[633]" value="อื่น ๆ" <?php if ($Data[633] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[634]" value="อื่น ๆ" <?php if ($Data[634] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[635]" value="อื่น ๆ" <?php if ($Data[635] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[636]" value="อื่น ๆ" <?php if ($Data[636] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[637]" value="อื่น ๆ" <?php if ($Data[637] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[638]" type="text" value="<?php echo $Data[638]; ?>"></td>
	      <td><input class="span4"  name="Data[639]" type="text" value="<?php echo $Data[639]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv1"><h3>3.2 สุขภาพ</h3></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้ (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- คนพิการ</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ผู้สูงอายุ</td>
	      <td><input class="span2"  name="Data[647]" type="text" value="<?php echo $Data[647]; ?>"></td>
	      <td><input class="span2"  name="Data[648]" type="text" value="<?php echo $Data[648]; ?>"></td>
	      <td><input class="span2"  name="Data[649]" type="text" value="<?php echo $Data[649]; ?>"></td>
	      <td><input class="span2"  name="Data[650]" type="text" value="<?php echo $Data[650]; ?>"></td>
	      <td><input class="span2"  name="Data[651]" type="text" value="<?php echo $Data[651]; ?>"></td>
	      <td><input class="span2"  name="Data[652]" type="text" value="<?php echo $Data[652]; ?>"></td>
	      <td><input class="span4"  name="Data[653]" type="text" value="<?php echo $Data[653]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ผู้ป่วย</td>
	      <td><input class="span2"  name="Data[48]" type="text" value="<?php echo $Data[48]; ?>"></td>
	      <td><input class="span2"  name="Data[49]" type="text" value="<?php echo $Data[49]; ?>"></td>
	      <td><input class="span2"  name="Data[50]" type="text" value="<?php echo $Data[50]; ?>"></td>
	      <td><input class="span2"  name="Data[51]" type="text" value="<?php echo $Data[51]; ?>"></td>
	      <td><input class="span2"  name="Data[52]" type="text" value="<?php echo $Data[52]; ?>"></td>
	      <td><input class="span2"  name="Data[53]" type="text" value="<?php echo $Data[53]; ?>"></td>
	      <td><input class="span4"  name="Data[54]" type="text" value="<?php echo $Data[54]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- เด็กทารก</td>
	      <td><input class="span2"  name="Data[55]" type="text" value="<?php echo $Data[55]; ?>"></td>
	      <td><input class="span2"  name="Data[56]" type="text" value="<?php echo $Data[56]; ?>"></td>
	      <td><input class="span2"  name="Data[57]" type="text" value="<?php echo $Data[57]; ?>"></td>
	      <td><input class="span2"  name="Data[58]" type="text" value="<?php echo $Data[58]; ?>"></td>
	      <td><input class="span2"  name="Data[59]" type="text" value="<?php echo $Data[59]; ?>"></td>
	      <td><input class="span2"  name="Data[60]" type="text" value="<?php echo $Data[60]; ?>"></td>
	      <td><input class="span4"  name="Data[61]" type="text" value="<?php echo $Data[61]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- เด็กอายุต่ำกว่า 5 ขวบ</td>
	      <td><input class="span2"  name="Data[583]" type="text" value="<?php echo $Data[583]; ?>"></td>
	      <td><input class="span2"  name="Data[584]" type="text" value="<?php echo $Data[584]; ?>"></td>
	      <td><input class="span2"  name="Data[585]" type="text" value="<?php echo $Data[585]; ?>"></td>
	      <td><input class="span2"  name="Data[586]" type="text" value="<?php echo $Data[586]; ?>"></td>
	      <td><input class="span2"  name="Data[587]" type="text" value="<?php echo $Data[587]; ?>"></td>
	      <td><input class="span2"  name="Data[588]" type="text" value="<?php echo $Data[588]; ?>"></td>
	      <td><input class="span4"  name="Data[589]" type="text" value="<?php echo $Data[589]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ผู้ป่วยทางจิต</td>
	      <td><input class="span2"  name="Data[590]" type="text" value="<?php echo $Data[590]; ?>"></td>
	      <td><input class="span2"  name="Data[591]" type="text" value="<?php echo $Data[591]; ?>"></td>
	      <td><input class="span2"  name="Data[592]" type="text" value="<?php echo $Data[592]; ?>"></td>
	      <td><input class="span2"  name="Data[593]" type="text" value="<?php echo $Data[593]; ?>"></td>
	      <td><input class="span2"  name="Data[594]" type="text" value="<?php echo $Data[594]; ?>"></td>
	      <td><input class="span2"  name="Data[595]" type="text" value="<?php echo $Data[595]; ?>"></td>
	      <td><input class="span4"  name="Data[596]" type="text" value="<?php echo $Data[596]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.2 ตรวจพบโรคระบาดในพื้นที่ในช่วงพิบัติ</h4></td>
	    </tr>
	    <tr>
	      <td>- โรค <input class="span2"  name="Data[62]" type="text" value="<?php echo $Data[62]; ?>"></td>
	      <td><input class="span2"  name="Data[63]" type="text" value="<?php echo $Data[63]; ?>"></td>
	      <td><input class="span2"  name="Data[64]" type="text" value="<?php echo $Data[64]; ?>"></td>
	      <td><input class="span2"  name="Data[65]" type="text" value="<?php echo $Data[65]; ?>"></td>
	      <td><input class="span2"  name="Data[66]" type="text" value="<?php echo $Data[66]; ?>"></td>
	      <td><input class="span2"  name="Data[67]" type="text" value="<?php echo $Data[67]; ?>"></td>
	      <td><input class="span2"  name="Data[68]" type="text" value="<?php echo $Data[68]; ?>"></td>
	      <td><input class="span4"  name="Data[69]" type="text" value="<?php echo $Data[69]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- โรค <input class="span2"  name="Data[70]" type="text" value="<?php echo $Data[70]; ?>"></td>
	      <td><input class="span2"  name="Data[597]" type="text" value="<?php echo $Data[597]; ?>"></td>
	      <td><input class="span2"  name="Data[598]" type="text" value="<?php echo $Data[598]; ?>"></td>
	      <td><input class="span2"  name="Data[599]" type="text" value="<?php echo $Data[599]; ?>"></td>
	      <td><input class="span2"  name="Data[600]" type="text" value="<?php echo $Data[600]; ?>"></td>
	      <td><input class="span2"  name="Data[601]" type="text" value="<?php echo $Data[601]; ?>"></td>
	      <td><input class="span2"  name="Data[602]" type="text" value="<?php echo $Data[602]; ?>"></td>
	      <td><input class="span4"  name="Data[603]" type="text" value="<?php echo $Data[603]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.3 ความลำบากในการเข้าถึงบริการทางด้านการแพทย์ <strong>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</strong></h4></td>
	    </tr>
	    <tr>
	      <td>1) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาน้อยกว่า 1 ชม.</strong></td>
	      <td><input class="span1"  name="Data[654]" type="text" value="<?php echo $Data[654]; ?>"></td>
	      <td><input class="span1"  name="Data[655]" type="text" value="<?php echo $Data[655]; ?>"></td>
	      <td><input class="span1"  name="Data[656]" type="text" value="<?php echo $Data[656]; ?>"></td>
	      <td><input class="span1"  name="Data[657]" type="text" value="<?php echo $Data[657]; ?>"></td>
	      <td><input class="span1"  name="Data[658]" type="text" value="<?php echo $Data[658]; ?>"></td>
	      <td><input class="span2"  name="Data[659]" type="text" value="<?php echo $Data[659]; ?>"></td>
	      <td><input class="span4"  name="Data[660]" type="text" value="<?php echo $Data[660]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>2) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
	      <td><input class="span1"  name="Data[661]" type="text" value="<?php echo $Data[661]; ?>"></td>
	      <td><input class="span1"  name="Data[662]" type="text" value="<?php echo $Data[662]; ?>"></td>
	      <td><input class="span1"  name="Data[663]" type="text" value="<?php echo $Data[663]; ?>"></td>
	      <td><input class="span1"  name="Data[664]" type="text" value="<?php echo $Data[664]; ?>"></td>
	      <td><input class="span1"  name="Data[665]" type="text" value="<?php echo $Data[665]; ?>"></td>
	      <td><input class="span2"  name="Data[666]" type="text" value="<?php echo $Data[666]; ?>"></td>
	      <td><input class="span4"  name="Data[667]" type="text" value="<?php echo $Data[667]; ?>"></td>
	    </tr>	 	        
	    <tr>
	      <td>3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
	      <td><input class="span1"  name="Data[668]" type="text" value="<?php echo $Data[668]; ?>"></td>
	      <td><input class="span1"  name="Data[669]" type="text" value="<?php echo $Data[669]; ?>"></td>
	      <td><input class="span1"  name="Data[670]" type="text" value="<?php echo $Data[670]; ?>"></td>
	      <td><input class="span1"  name="Data[671]" type="text" value="<?php echo $Data[671]; ?>"></td>
	      <td><input class="span1"  name="Data[672]" type="text" value="<?php echo $Data[672]; ?>"></td>
	      <td><input class="span2"  name="Data[673]" type="text" value="<?php echo $Data[673]; ?>"></td>
	      <td><input class="span4"  name="Data[674]" type="text" value="<?php echo $Data[674]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
	      <td><input class="span1"  name="Data[675]" type="text" value="<?php echo $Data[675]; ?>"></td>
	      <td><input class="span1"  name="Data[676]" type="text" value="<?php echo $Data[676]; ?>"></td>
	      <td><input class="span1"  name="Data[677]" type="text" value="<?php echo $Data[677]; ?>"></td>
	      <td><input class="span1"  name="Data[678]" type="text" value="<?php echo $Data[678]; ?>"></td>
	      <td><input class="span1"  name="Data[679]" type="text" value="<?php echo $Data[679]; ?>"></td>
	      <td><input class="span2"  name="Data[680]" type="text" value="<?php echo $Data[680]; ?>"></td>
	      <td><input class="span4"  name="Data[681]" type="text" value="<?php echo $Data[681]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>5) <strong>ไม่มี</strong>หน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
	      <td><input class="span1"  name="Data[682]" type="text" value="<?php echo $Data[682]; ?>"></td>
	      <td><input class="span1"  name="Data[683]" type="text" value="<?php echo $Data[683]; ?>"></td>
	      <td><input class="span1"  name="Data[684]" type="text" value="<?php echo $Data[684]; ?>"></td>
	      <td><input class="span1"  name="Data[685]" type="text" value="<?php echo $Data[685]; ?>"></td>
	      <td><input class="span1"  name="Data[686]" type="text" value="<?php echo $Data[686]; ?>"></td>
	      <td><input class="span2"  name="Data[687]" type="text" value="<?php echo $Data[687]; ?>"></td>
	      <td><input class="span4"  name="Data[688]" type="text" value="<?php echo $Data[688]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.4 ระดับความเครียด และความกังวลของคนในชุมชน <span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่) </span></h4></td>
	    </tr>
	    <tr>
	      <td>1) ไม่พบประชาชนมีภาวะความเครียด</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>2) พบประชาชนมีภาวะความเครียดแต่สามารถปรับตัวได้</td>
	      <td><input class="span1"  name="Data[696]" type="text" value="<?php echo $Data[696]; ?>"></td>
	      <td><input class="span1"  name="Data[697]" type="text" value="<?php echo $Data[697]; ?>"></td>
	      <td><input class="span1"  name="Data[698]" type="text" value="<?php echo $Data[698]; ?>"></td>
	      <td><input class="span1"  name="Data[699]" type="text" value="<?php echo $Data[699]; ?>"></td>
	      <td><input class="span1"  name="Data[700]" type="text" value="<?php echo $Data[700]; ?>"></td>
	      <td><input class="span2"  name="Data[701]" type="text" value="<?php echo $Data[701]; ?>"></td>
	      <td><input class="span4"  name="Data[702]" type="text" value="<?php echo $Data[702]; ?>"></td>
	    </tr>	 	        
	    <tr>
	      <td>3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้</td>
	      <td><input class="span1"  name="Data[703]" type="text" value="<?php echo $Data[703]; ?>"></td>
	      <td><input class="span1"  name="Data[704]" type="text" value="<?php echo $Data[704]; ?>"></td>
	      <td><input class="span1"  name="Data[705]" type="text" value="<?php echo $Data[705]; ?>"></td>
	      <td><input class="span1"  name="Data[706]" type="text" value="<?php echo $Data[706]; ?>"></td>
	      <td><input class="span1"  name="Data[707]" type="text" value="<?php echo $Data[707]; ?>"></td>
	      <td><input class="span2"  name="Data[708]" type="text" value="<?php echo $Data[708]; ?>"></td>
	      <td><input class="span4"  name="Data[709]" type="text" value="<?php echo $Data[709]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย</td>
	      <td><input class="span1"  name="Data[710]" type="text" value="<?php echo $Data[710]; ?>"></td>
	      <td><input class="span1"  name="Data[711]" type="text" value="<?php echo $Data[711]; ?>"></td>
	      <td><input class="span1"  name="Data[712]" type="text" value="<?php echo $Data[712]; ?>"></td>
	      <td><input class="span1"  name="Data[713]" type="text" value="<?php echo $Data[713]; ?>"></td>
	      <td><input class="span1"  name="Data[714]" type="text" value="<?php echo $Data[714]; ?>"></td>
	      <td><input class="span2"  name="Data[715]" type="text" value="<?php echo $Data[715]; ?>"></td>
	      <td><input class="span4"  name="Data[716]" type="text" value="<?php echo $Data[716]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ำท่วม</td>
	      <td><input class="span1"  name="Data[717]" type="text" value="<?php echo $Data[717]; ?>"></td>
	      <td><input class="span1"  name="Data[718]" type="text" value="<?php echo $Data[718]; ?>"></td>
	      <td><input class="span1"  name="Data[719]" type="text" value="<?php echo $Data[719]; ?>"></td>
	      <td><input class="span1"  name="Data[720]" type="text" value="<?php echo $Data[720]; ?>"></td>
	      <td><input class="span1"  name="Data[721]" type="text" value="<?php echo $Data[721]; ?>"></td>
	      <td><input class="span2"  name="Data[722]" type="text" value="<?php echo $Data[722]; ?>"></td>
	      <td><input class="span4"  name="Data[723]" type="text" value="<?php echo $Data[723]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.5 กิจกรรมที่ชุมชนที่ต้องการการสนับสนุน</h4></td>
	    </tr>
	    <tr>
	      <td>- การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้</td>
	      <td><input type="checkbox" name="Data[604]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[605]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[606]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[607]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[608]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
	      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ป้องกันโรคระบาด</td>
	      <td><input type="checkbox" name="Data[611]" value="ป้องกันโรคระบาด" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[612]" value="ป้องกันโรคระบาด" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[613]" value="ป้องกันโรคระบาด" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[614]" value="ป้องกันโรคระบาด" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[615]" value="ป้องกันโรคระบาด" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
	      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- เพิ่มบริการทางการแพทย์</td>
	      <td><input type="checkbox" name="Data[618]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ฟื้นฟูภาวะจิตใจคนในชุมชน</td>
	      <td><input type="checkbox" name="Data[625]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[625] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[626]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[626] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[627]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[627] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[628]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[628] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[629]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[629] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[630]" type="text" value="<?php echo $Data[630]; ?>"></td>
	      <td><input class="span4"  name="Data[631]" type="text" value="<?php echo $Data[631]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.6 ความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับ<span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</span></h4></td>
	    </tr>
	    <tr>
	      <td>1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้ ไม่มีโรคระบาด  มีบริการทางการแพทย์ และไม่มีความเครียดในชุมชน</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>2) มีปัญหาด้านการดูแล กลุ่มช่วยเหลือตัวเองไม่ได้  มีโรคระบาด มีบริการทางการแพทย์และมีความเครียดในชุมชนบ้างแต่ควบคุมได้</td>
	      <td><input class="span1"  name="Data[696]" type="text" value="<?php echo $Data[696]; ?>"></td>
	      <td><input class="span1"  name="Data[697]" type="text" value="<?php echo $Data[697]; ?>"></td>
	      <td><input class="span1"  name="Data[698]" type="text" value="<?php echo $Data[698]; ?>"></td>
	      <td><input class="span1"  name="Data[699]" type="text" value="<?php echo $Data[699]; ?>"></td>
	      <td><input class="span1"  name="Data[700]" type="text" value="<?php echo $Data[700]; ?>"></td>
	      <td><input class="span2"  name="Data[701]" type="text" value="<?php echo $Data[701]; ?>"></td>
	      <td><input class="span4"  name="Data[702]" type="text" value="<?php echo $Data[702]; ?>"></td>
	    </tr>	 	        
	    <tr>
	      <td>3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้ มีโรคระบาด มีบริการทางการแพทย์และมีความเครียดในชุมชน และต้องการการสนับสนุนบางส่วน</td>
	      <td><input class="span1"  name="Data[703]" type="text" value="<?php echo $Data[703]; ?>"></td>
	      <td><input class="span1"  name="Data[704]" type="text" value="<?php echo $Data[704]; ?>"></td>
	      <td><input class="span1"  name="Data[705]" type="text" value="<?php echo $Data[705]; ?>"></td>
	      <td><input class="span1"  name="Data[706]" type="text" value="<?php echo $Data[706]; ?>"></td>
	      <td><input class="span1"  name="Data[707]" type="text" value="<?php echo $Data[707]; ?>"></td>
	      <td><input class="span2"  name="Data[708]" type="text" value="<?php echo $Data[708]; ?>"></td>
	      <td><input class="span4"  name="Data[709]" type="text" value="<?php echo $Data[709]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>4) มีปัญหาด้านบริการทางการแพทย์ในชุมชน และชุมชนต้องการการสนับสนุน</td>
	      <td><input class="span1"  name="Data[710]" type="text" value="<?php echo $Data[710]; ?>"></td>
	      <td><input class="span1"  name="Data[711]" type="text" value="<?php echo $Data[711]; ?>"></td>
	      <td><input class="span1"  name="Data[712]" type="text" value="<?php echo $Data[712]; ?>"></td>
	      <td><input class="span1"  name="Data[713]" type="text" value="<?php echo $Data[713]; ?>"></td>
	      <td><input class="span1"  name="Data[714]" type="text" value="<?php echo $Data[714]; ?>"></td>
	      <td><input class="span2"  name="Data[715]" type="text" value="<?php echo $Data[715]; ?>"></td>
	      <td><input class="span4"  name="Data[716]" type="text" value="<?php echo $Data[716]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>5) มีปัญหาด้านโรคระบาดและบริการทางการแพทย์ในชุมชน  และชุมชนต้องการการสนับสนุนเร่งด่วน</td>
	      <td><input class="span1"  name="Data[717]" type="text" value="<?php echo $Data[717]; ?>"></td>
	      <td><input class="span1"  name="Data[718]" type="text" value="<?php echo $Data[718]; ?>"></td>
	      <td><input class="span1"  name="Data[719]" type="text" value="<?php echo $Data[719]; ?>"></td>
	      <td><input class="span1"  name="Data[720]" type="text" value="<?php echo $Data[720]; ?>"></td>
	      <td><input class="span1"  name="Data[721]" type="text" value="<?php echo $Data[721]; ?>"></td>
	      <td><input class="span2"  name="Data[722]" type="text" value="<?php echo $Data[722]; ?>"></td>
	      <td><input class="span4"  name="Data[723]" type="text" value="<?php echo $Data[723]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv1"><h3>3.3  สภาพแวดล้อมที่ได้รับผลกระทบ</h3></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.2.1 ที่อยู่อาศัย (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ที่อยู่อาศัยได้รับความเสียหาย</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- บริเวณบ้านที่ได้รับความเสียหาย</td>
	      <td><input class="span2"  name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
	      <td><input class="span2"  name="Data[81]" type="text" value="<?php echo $Data[81]; ?>"></td>
	      <td><input class="span2"  name="Data[82]" type="text" value="<?php echo $Data[82]; ?>"></td>
	      <td><input class="span2"  name="Data[724]" type="text" value="<?php echo $Data[724]; ?>"></td>
	      <td><input class="span2"  name="Data[725]" type="text" value="<?php echo $Data[725]; ?>"></td>
	      <td><input class="span2"  name="Data[726]" type="text" value="<?php echo $Data[726]; ?>"></td>
	      <td><input class="span4"  name="Data[727]" type="text" value="<?php echo $Data[727]; ?>"></td>
	    </tr>	    		    	    
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.2 สิ่งสาธารณะประโยชน์ของชุมชน (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ถนนชำรุด (สาย)</td>
	      <td><input class="span2"  name="Data[728]" type="text" value="<?php echo $Data[728]; ?>"></td>
	      <td><input class="span2"  name="Data[729]" type="text" value="<?php echo $Data[729]; ?>"></td>
	      <td><input class="span2"  name="Data[730]" type="text" value="<?php echo $Data[730]; ?>"></td>
	      <td><input class="span2"  name="Data[731]" type="text" value="<?php echo $Data[731]; ?>"></td>
	      <td><input class="span2"  name="Data[732]" type="text" value="<?php echo $Data[732]; ?>"></td>
	      <td><input class="span2"  name="Data[733]" type="text" value="<?php echo $Data[733]; ?>"></td>
	      <td><input class="span4"  name="Data[734]" type="text" value="<?php echo $Data[734]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- สถานีขนส่งทางบก</td>
	      <td><input class="span2"  name="Data[735]" type="text" value="<?php echo $Data[735]; ?>"></td>
	      <td><input class="span2"  name="Data[736]" type="text" value="<?php echo $Data[736]; ?>"></td>
	      <td><input class="span2"  name="Data[737]" type="text" value="<?php echo $Data[737]; ?>"></td>
	      <td><input class="span2"  name="Data[738]" type="text" value="<?php echo $Data[738]; ?>"></td>
	      <td><input class="span2"  name="Data[739]" type="text" value="<?php echo $Data[739]; ?>"></td>
	      <td><input class="span2"  name="Data[740]" type="text" value="<?php echo $Data[740]; ?>"></td>
	      <td><input class="span4"  name="Data[741]" type="text" value="<?php echo $Data[741]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>- สถานีขนส่งทางน้ำ</td>
	      <td><input class="span2"  name="Data[742]" type="text" value="<?php echo $Data[742]; ?>"></td>
	      <td><input class="span2"  name="Data[743]" type="text" value="<?php echo $Data[743]; ?>"></td>
	      <td><input class="span2"  name="Data[744]" type="text" value="<?php echo $Data[744]; ?>"></td>
	      <td><input class="span2"  name="Data[745]" type="text" value="<?php echo $Data[745]; ?>"></td>
	      <td><input class="span2"  name="Data[746]" type="text" value="<?php echo $Data[746]; ?>"></td>
	      <td><input class="span2"  name="Data[747]" type="text" value="<?php echo $Data[747]; ?>"></td>
	      <td><input class="span4"  name="Data[748]" type="text" value="<?php echo $Data[748]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ศาลาที่พักผู้โดยสาร</td>
	      <td><input class="span2"  name="Data[749]" type="text" value="<?php echo $Data[749]; ?>"></td>
	      <td><input class="span2"  name="Data[750]" type="text" value="<?php echo $Data[750]; ?>"></td>
	      <td><input class="span2"  name="Data[751]" type="text" value="<?php echo $Data[751]; ?>"></td>
	      <td><input class="span2"  name="Data[752]" type="text" value="<?php echo $Data[752]; ?>"></td>
	      <td><input class="span2"  name="Data[753]" type="text" value="<?php echo $Data[753]; ?>"></td>
	      <td><input class="span2"  name="Data[754]" type="text" value="<?php echo $Data[754]; ?>"></td>
	      <td><input class="span4"  name="Data[755]" type="text" value="<?php echo $Data[755]; ?>"></td>
	    </tr>	    
	    <tr>
	      <td>- ตลิ่ง (แห่ง)</td>
	      <td><input class="span2"  name="Data[756]" type="text" value="<?php echo $Data[756]; ?>"></td>
	      <td><input class="span2"  name="Data[757]" type="text" value="<?php echo $Data[757]; ?>"></td>
	      <td><input class="span2"  name="Data[758]" type="text" value="<?php echo $Data[758]; ?>"></td>
	      <td><input class="span2"  name="Data[759]" type="text" value="<?php echo $Data[759]; ?>"></td>
	      <td><input class="span2"  name="Data[760]" type="text" value="<?php echo $Data[760]; ?>"></td>
	      <td><input class="span2"  name="Data[761]" type="text" value="<?php echo $Data[761]; ?>"></td>
	      <td><input class="span4"  name="Data[762]" type="text" value="<?php echo $Data[762]; ?>"></td>
	    </tr>	  
	    <tr>
	      <td>- เสาไฟฟ้าหมู่บ้าน (ต้น)</td>
	      <td><input class="span2"  name="Data[763]" type="text" value="<?php echo $Data[763]; ?>"></td>
	      <td><input class="span2"  name="Data[764]" type="text" value="<?php echo $Data[764]; ?>"></td>
	      <td><input class="span2"  name="Data[765]" type="text" value="<?php echo $Data[765]; ?>"></td>
	      <td><input class="span2"  name="Data[766]" type="text" value="<?php echo $Data[766]; ?>"></td>
	      <td><input class="span2"  name="Data[767]" type="text" value="<?php echo $Data[767]; ?>"></td>
	      <td><input class="span2"  name="Data[768]" type="text" value="<?php echo $Data[768]; ?>"></td>
	      <td><input class="span4"  name="Data[769]" type="text" value="<?php echo $Data[769]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- หม้อแปลง (หม้อ)</td>
	      <td><input class="span2"  name="Data[770]" type="text" value="<?php echo $Data[770]; ?>"></td>
	      <td><input class="span2"  name="Data[771]" type="text" value="<?php echo $Data[771]; ?>"></td>
	      <td><input class="span2"  name="Data[772]" type="text" value="<?php echo $Data[772]; ?>"></td>
	      <td><input class="span2"  name="Data[64]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ (โปรดระบุ) <input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.4 อาคารสาธารณะของชุมชน  (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ศาลาประชาคม</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ศาลาเอนกประสงค์</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>	 
	    <tr>
	      <td>- ลานกีฬา</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ(โปรดระบุ) <input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>	
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.5 ศาสนสถาน (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- วัด</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- มัสยิด</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- โบสถ์คริสต์</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- โบราณสถาน</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ(โปรดระบุ) <input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.6 สถานที่ราชการ (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- สำนักงานอปท.</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ที่ว่าการอำเภอ</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- สถานีตำรวจ</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- รพ.สต.</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- โรงพยาบาล</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- โรงเรียน</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ศูนย์พัฒนาเด็กเล็ก</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ (โปรดระบุ) <input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.7 สถานที่ท่องเที่ยว (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบุ <input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ระบุ <input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.8 แหล่งน้ำ (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบบประปา</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- บ่อน้ำตื้น</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- บ่อบาดาล</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- เขื่อน/ฝ้าย</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    <tr>
	      <td>- ห้วย/หนอง/คลอง/บึง</td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ <input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
	      <td><input class="span2"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
	      <td><input class="span2"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
	      <td><input class="span2"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
	      <td><input class="span2"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
	      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
	      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
	    </tr>	      
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.3.9 ปัญหาขยะ/น้ำเน่าเสีย/มลพิษ</h4></td>
	    </tr>
	    <tr>
	      <td>- ปัญหาขยะ</td>
	      <td><input type="checkbox" name="Data[604]" value="ปัญหาขยะ" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[605]" value="ปัญหาขยะ" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[606]" value="ปัญหาขยะ" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[607]" value="ปัญหาขยะ" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[608]" value="ปัญหาขยะ" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
	      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- น้ำเน่าเสีย</td>
	      <td><input type="checkbox" name="Data[611]" value="น้ำเน่าเสีย" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[612]" value="น้ำเน่าเสีย" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[613]" value="น้ำเน่าเสีย" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[614]" value="น้ำเน่าเสีย" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[615]" value="น้ำเน่าเสีย" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
	      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- มลพิษอื่น ๆ ระบุ <input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input type="checkbox" name="Data[618]" value="มลพิษอื่น ๆ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="มลพิษอื่น ๆ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="มลพิษอื่น ๆ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="มลพิษอื่น ๆ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="มลพิษอื่น ๆ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    
	    
	    
	    
	    
	    <tr>
	      <td colspan="8" class="table-lv1"><h3>3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.1พื้นที่การเกษตรเสียหาย (ระบุจำนวนไร่)</h4></td>
	    </tr>
	    <tr>
	      <td>- นาข้าว</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- พืชสวน</td>
	      <td><input class="span2"  name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
	      <td><input class="span2"  name="Data[81]" type="text" value="<?php echo $Data[81]; ?>"></td>
	      <td><input class="span2"  name="Data[82]" type="text" value="<?php echo $Data[82]; ?>"></td>
	      <td><input class="span2"  name="Data[724]" type="text" value="<?php echo $Data[724]; ?>"></td>
	      <td><input class="span2"  name="Data[725]" type="text" value="<?php echo $Data[725]; ?>"></td>
	      <td><input class="span2"  name="Data[726]" type="text" value="<?php echo $Data[726]; ?>"></td>
	      <td><input class="span4"  name="Data[727]" type="text" value="<?php echo $Data[727]; ?>"></td>
	    </tr>	    		    	    
	    <tr>
	      <td>-พืชไร่</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ <input class="span2"  name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
	      <td><input class="span2"  name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
	      <td><input class="span2"  name="Data[81]" type="text" value="<?php echo $Data[81]; ?>"></td>
	      <td><input class="span2"  name="Data[82]" type="text" value="<?php echo $Data[82]; ?>"></td>
	      <td><input class="span2"  name="Data[724]" type="text" value="<?php echo $Data[724]; ?>"></td>
	      <td><input class="span2"  name="Data[725]" type="text" value="<?php echo $Data[725]; ?>"></td>
	      <td><input class="span2"  name="Data[726]" type="text" value="<?php echo $Data[726]; ?>"></td>
	      <td><input class="span4"  name="Data[727]" type="text" value="<?php echo $Data[727]; ?>"></td>
	    </tr>	
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.2 พื้นที่ปศุสัตว์เสียหาย (ระบุจำนวนไร่)</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบุ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.3 สัตว์เลี้ยง (ระบุจำนวน)</h4></td>
	    </tr>
      <tr>
	      <td>- หมู</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
      <tr>
	      <td>- วัว/ควาย</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
      <tr>
	      <td>- เป็ด</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
      <tr>
	      <td>- ไก่</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
      <tr>
	      <td>- แพะ</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>	    <tr>
	      <td>- อื่น ๆ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.3 พื้นที่ประมงเสียหาย (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบุ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.4 ตลาด ย่านธุรกิจเสียหาย (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบุ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.5 อุตสาหกรรมเสียหาย (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบุ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.6 ประมาณการคนที่ได้รับผลกระทบจากภัยพิบัติ (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- จำนวนคนได้รับผลกระทบ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.7 ประมาณการคนที่ได้รับว่างงาน จากภัยพิบัติ (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- จำนวนคนว่างงาน <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.8 กลุ่มอาชีพ (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- จำนวนกลุ่มอาชีพในชุมชน</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- กลุ่มอาชีพที่ได้รับความเสียหาย </td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.9 เครื่องจักร อุปกรณ์ประกอบอาชีพ ที่เสียหาย (ระบุจำนวน)</h4></td>
	    </tr>
	    <tr>
	      <td>- รถไถ</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- รถกระบะ</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- รถบรรทุก</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- รถมอเตอร์ไซต์</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- รถยนต์</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- จักรเย็บผ้า</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อุปกรณ์กลุ่มอาชีพ</td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>	    
	    <tr>
	      <td>- อื่นๆ <input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
	      <td><input class="span2"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
	      <td><input class="span2"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
	      <td><input class="span2"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
	      <td><input class="span2"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
	      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
	      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.10 ปัญหาการสื่อสารโทรคมนาคมในพื้นที่</h4></td>
	    </tr>
	    <tr>
	      <td>- ระบบโทรศัพท์พื้นฐาน</td>
	      <td><input type="checkbox" name="Data[618]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ระบบโทรศัพท์มือถือ</td>
	      <td><input type="checkbox" name="Data[618]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ระบบอินเทอร์เน็ต</td>
	      <td><input type="checkbox" name="Data[618]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ระบบไปรษณีย์</td>
	      <td><input type="checkbox" name="Data[618]" value="ระบบไปรษณีย์" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ระบบไปรษณีย์" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ระบบไปรษณีย์" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ระบบไปรษณีย์" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ระบบไปรษณีย์" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ระบบวิทยุสื่อสาร</td>
	      <td><input type="checkbox" name="Data[618]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.11 กิจกรรมที่ชุมชนต้องการการสนับสนุน</h4></td>
	    </tr>
	    <tr>
	      <td>- การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)</td>
	      <td><input type="checkbox" name="Data[618]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- การฟื้นฟูด้านปศุสัตว์</td>
	      <td><input type="checkbox" name="Data[618]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- การฟื้นฟูด้านการประมง</td>
	      <td><input type="checkbox" name="Data[618]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- การฟื้นฟูธุรกิจ อุตสาหกรรม</td>
	      <td><input type="checkbox" name="Data[618]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- การฟื้นฟูแรงงาน</td>
	      <td><input type="checkbox" name="Data[618]" value="การฟื้นฟูแรงงาน" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การฟื้นฟูแรงงาน" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การฟื้นฟูแรงงาน" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การฟื้นฟูแรงงาน" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การฟื้นฟูแรงงาน" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- การฟื้นฟูด้านกลุ่มอาชีพ</td>
	      <td><input type="checkbox" name="Data[618]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	      <td>- การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ</td>
	      <td><input type="checkbox" name="Data[618]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	      <td>- การซ่อมแซมระบบสื่อสารโทรคมนาคม</td>
	      <td><input type="checkbox" name="Data[618]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td colspan="8" class="table-lv2"><h4>3.4.12  ระดับความรุนแรงด้านปัญหาเศรษฐกิจในชุมชน<span>(ให้เลือก 1 น้อยที่สุด - 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</span></h4></td>
	    </tr>
	    <tr>
	      <td>1) ไม่มีผลกระทบสามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>2) ได้รับผลกระทบแต่สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>3) สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้ แต่ต้องการการสนับสนุนบางส่วน</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>4) ไม่สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ การฟื้นฟูธุรกิจอุตสาหกรรมต้องใช้เวลาอย่างน้อย 3เดือนต้องการการสนับสนุน</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td>5) ไม่สามารถดำเนินกิจกรรมทางเศรษฐกิจใด ๆ ได้ประชากรเกินครึ่งว่างงาน</td>
	      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
	      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
	      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
	      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
	      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
	      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
	      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
	    </tr>	
	    <tr>
	      <td colspan="8" class="table-lv1"><h3>3.5 ชุมชนมีการเตรียมการรับมือภัยพิบัติในอนาคต</h3></td>
	    </tr>
	    <tr>
	      <td>- จัดทำแผนรับมือภัยพิบัติ</td>
	      <td><input type="checkbox" name="Data[618]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- ฝึกซ้อมการรับมือภัยพิบัติ</td>
	      <td><input type="checkbox" name="Data[618]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>	    
	    <tr>
	      <td>- ปรับปรุงระบบผังเมือง/ชุมชน</td>
	      <td><input type="checkbox" name="Data[618]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	    <tr>
	      <td>- อื่น ๆ <input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input type="checkbox" name="Data[618]" value="อื่น ๆ" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[619]" value="อื่น ๆ" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[620]" value="อื่น ๆ" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[621]" value="อื่น ๆ" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input type="checkbox" name="Data[622]" value="อื่น ๆ" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
	      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
	    </tr>
	  </tbody>
	</table>    
    





		









      

  
  <h4>3.1.3 บ้านเรือนพังเสียหายทั้งหลัง</h4>
  <div class="clearfix">
		<label class="no-float">จํานวน/หลัง</label>
		<input class="span2"  name="Data[54]" type="text"  placeholder="" value="<?php echo $Data[54]; ?>">
		<label class="no-float">ในพื้นที่ (หมู่)</label>
		<input class="span2"  name="Data[55]" type="text"  placeholder="" value="<?php echo $Data[55]; ?>">
	</div>
  
  <h4>3.1.4 ประชาชนไร้ที่อยู่</h4>
  <div class="clearfix">
		<label class="no-float">จํานวน/คน</label>
		<input class="span2"  name="Data[56]" type="text"  placeholder="" value="<?php echo $Data[56]; ?>">
		<label class="no-float">ในพื้นที่ (หมู่)</label>
		<input class="span2"  name="Data[57]" type="text"  placeholder="" value="<?php echo $Data[57]; ?>">
	</div>
	
	
  <div class="clearfix">
<!-- 			  <label id="optionsRadio">List of ....</label> -->
	  <div class="input">
	    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[58] == '1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสีย หายบางส่วน'): ?> checked="checked" <?php endif; ?>  name="Data[58]" value="1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสีย หายบางส่วน">
	          <span>1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสียหายบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[58] == '2) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดน้อยกว่า 10% ของชุมชน'): ?> checked="checked" <?php endif; ?> name="Data[58]" value="2) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดน้อยกว่า 10% ของชุมชน">
	          <span>2) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดน้อยกว่า 10% ของชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[58] == '3) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 10% ของชุมชน'): ?> checked="checked" <?php endif; ?> name="Data[58]" value="3) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 10% ของชุมชน">
	          <span>3) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 10% ของชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[58] == '4) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดประมาณ 25% ของชุมชน'): ?> checked="checked" <?php endif; ?> name="Data[58]" value="4) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดประมาณ 25% ของชุมชน">
	          <span>4) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดประมาณ 25% ของชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[58] == '5) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 50% ของชุมชน'): ?> checked="checked" <?php endif; ?>name="Data[58]" value="5) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 50% ของชุมชน">
	          <span>5) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหายทั้งหมดมากกว่า 50% ของชุมชน</span>
	        </label>
	      </li>
	    </ul>
	  </div>
	</div>
  
  

  

  
  <h4>3.2.3 ความลําบากในการเข้าถึงบริการทางแพทย์ (1 น้อยที่สุด – 5 มากท่ีสุด)</h4>
  <h5>พื้นท่ีที่เข้าถึงบริการทางการแพทย์ยากลําบากที่สุดคือ</h5>
  <div class="clearfix radio-list">
      <?php echo CHtml::activeRadioButtonList($model, 'filter0', array(
        1 => '1) มีหน่วยพยาบาลในพื้นที่มากกว่า 1 หน่วย การเดินทางถึงโรงพยาบาลใช้เวลาน้อยกว่า 1 ชม.',
        2 => '2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1 หน่วย การเดินทางถึงโรงพยาบาลใช้เวลาประมาณ 1 ชม.',
        3 => '3) มีหน่วย พยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาลใช้เวลาประมาณ 1 ชม.',
        4 => '4) มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม.',
        5 => '5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม.',
      )) ?>
	  </div>
	  
	  
	  <h4>3.2.4 ระดับความเครียดและความกังวลของคนในชุมชน (1 น้อยที่สุด – 5 มากที่สุด)</h4>
    <h5>พ้ืนที่ที่ประชาชนมีภาวะความเครียดมากท่ีสุดคือ</h5>
    <div class="clearfix radio-list">
      <?php echo CHtml::activeRadioButtonList($model, 'filter1', array(
        1 => '1) ไม่พบประชาชนมีภาวะความเครียด',
        2 => '2) มีพบประชาชนมีภาวะความเครียด แต่สามารถปรับตัวได้',
        3 => '3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้',
        4 => '4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย',
        5 => '5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ําท่วม',
      )) ?>

		  </div>
  
      

    
  
    <h4>ท่านคิดว่าความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับใด (1 น้อยที่สุด – 5 มากท่ีสุด )</h4>
    <div class="clearfix radio-list">
      <?php echo CHtml::activeRadioButtonList($model, 'filter2', array(
        1 => '1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียดในชุมชน',
        2 => '2) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียดในชุมชนบ้างแต่ควบคุมได้',
        3 => '3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์และความเครียดในชุมชนต้องการการสนับสนุนบางส่วน',
        4 => '4) มีปัญหาด้านบริการทางการแพทย์ในชุมชนต้องการการสนับสนุน',
        5 => '5) มีปัญหาด้านโรคระบาดและบริการทางการแพทย์ในชุมชนต้องการการสนับสนุนเร่งด่วน',
      )) ?>
    </div>

	    <br/>
  
      <h3>3.3 สภาพแวดล้อม (ข้อมูลบางประเด็นขอให้ อบต. ประสานกับหน่วยงานในพื้นที่)</h3>
      <h4>3.3.1 การซ่อมแซมที่อยู่อาศัย</h4>
      <div class="clearfix">
			  <label for="xlInput">ที่อยู่อาศัยที่ได้รับความเสียหาย/หลังคาเรือน</label>
			  <div class="input">
			    <input class="span2"  name="Data[83]" size="30" type="text" value="<?php echo $Data[83]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของบ้านโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[84]" size="30" type="text" value="<?php echo $Data[84]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[85]" size="30" type="text" value="<?php echo $Data[85]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[86]" size="30" type="text" value="<?php echo $Data[86]; ?>">
			    </div>
				</li>
			</ol>
			<div class="list-textbox">
			  <label for="xlInput">พื้นที่ที่บ้านได้รับความเสียหายมากที่สุด คือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[87]" size="30" type="text" value="<?php echo $Data[87]; ?>">
			  </div>
			</div><!-- /clearfix -->
			
			
      <h4>3.3.2 สิ่งสาธารณะประโยชน์</h4>
			<h5>(1) สถานีขนส่งมวลชนหรือเส้นทางที่ใช้สัญจรไม่ได้ท้ังทางบกและทางน้ำ</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[88]" size="30" type="text" value="<?php echo $Data[88]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[89]" size="30" type="text" value="<?php echo $Data[89]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[90]" size="30" type="text" value="<?php echo $Data[90]; ?>">
			    </div>
				</li>
			</ol>
			
			
			<h5>(2) โรงเรียน(สถานศึกษา)ได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">โรงเรียนได้รับความเสียหาย/โรงเรียน</label>
			  <div class="input">
			    <input class="span2"  name="Data[91]" size="30" type="text" value="<?php echo $Data[91]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของโรงเรียนโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[92]" size="30" type="text" value="<?php echo $Data[92]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[93]" size="30" type="text" value="<?php echo $Data[93]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[94]" size="30" type="text" value="<?php echo $Data[94]; ?>">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">โรงเรียน(สถานศึกษา)ท่ีได้รับความเสียหายมากท่ีสุดคือโรงเรียน</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[95]" size="30" type="text" value="<?php echo $Data[95]; ?>">
			  </div>
			</div><!-- /clearfix -->
			
			
			
			<h5>(3) ศูนย์ดูแลเด็กเล็กได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">ศูนย์ดูแลเด็กเล็กได้รับความเสียหาย/ศูนย์</label>
			  <div class="input">
			    <input class="span2"  name="Data[96]" size="30" type="text" value="<?php echo $Data[96]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของศูนย์ดูแลเด็กเล็กโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[97]" size="30" type="text" value="<?php echo $Data[97]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[98]" size="30" type="text" value="<?php echo $Data[98]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[99]" size="30" type="text" value="<?php echo $Data[99]; ?>">
			    </div>
				</li>
			</ol>
			<div class="list-textbox">
			  <label for="xlInput">ศูนย์ดแูลเด็กเล็กที่ได้รับความเสียหายมากที่สดุคือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[100]" size="30" type="text" value="<?php echo $Data[100]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix"></div>
			
			<h5>(4) อาคารของชุมชนได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">อาคารของชุมชนได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="span2"  name="Data[101]" size="30" type="text" value="<?php echo $Data[101]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของอาคารชุมชนโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[102]" size="30" type="text" value="<?php echo $Data[102]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[103]" size="30" type="text" value="<?php echo $Data[103]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[104]" size="30" type="text" value="<?php echo $Data[104]; ?>">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">อาคารชุมชนที่ได้รับความเสียหายมากที่สุดคือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[105]" size="30" type="text" value="<?php echo $Data[105]; ?>">
			  </div>
			</div><!-- /clearfix -->
			
			
			<h5>(5) สถานพยาบาลได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">สถานพยาบาลได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="span2"  name="Data[106]" size="30" type="text" value="<?php echo $Data[106]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของสถานพยาบาลโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[107]" size="30" type="text" value="<?php echo $Data[107]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[108]" size="30" type="text" value="<?php echo $Data[108]; ?>">
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[109]" size="30" type="text" value="<?php echo $Data[109]; ?>">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">สถานพยาบาลที่ได้รับความเสียหายมากที่สุดคือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[110]" size="30" type="text" value="<?php echo $Data[110]; ?>">
			  </div>
			</div><!-- /clearfix -->
      
      
      <h5>(6)ศาสนสถานได้รับความเสียหาย</h5>
      <div class="clearfix">
			  <label for="xlInput">ศาสนสถานได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="span2"  name="Data[111]" size="30" type="text" value="<?php echo $Data[111]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">วัด/แห่ง</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[112]" size="30" type="text" value="<?php echo $Data[112]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">มัสยิด/แห่ง</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[113]" size="30" type="text" value="<?php echo $Data[113]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">โบสถ์คริสต์/แห่ง</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[114]" size="30" type="text" value="<?php echo $Data[114]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">ศาสนสถานที่ได้รับความเสียหายมากที่สุดุคือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[115]" size="30" type="text" value="<?php echo $Data[115]; ?>">
			  </div>
			</div><!-- /clearfix -->
  
  
      <h5>(7) แหล่งท่องเที่ยวได้รับความเสียหาย</h5>
      <div class="clearfix">
			  <label for="xlInput">แหล่งท่องเที่ยวได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="span2"  name="Data[116]" size="30" type="text" value="<?php echo $Data[116]; ?>">
			  </div>
			</div><!-- /clearfix -->
      <div class="clearfix">
			  <label for="xlInput">แหล่งท่องเที่ยวที่ได้ความเสียหายมากที่สุดคือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[117]" size="30" type="text" value="<?php echo $Data[117]; ?>">
			  </div>
			</div><!-- /clearfix -->
  
  
      <h4>3.3.3 แหล่งน้ำ</h4>
      <table class="bordered-table">
      <thead>
        <tr>
          <th></th>
          <th>มีความเสียหาย</th>
          <th>ไม่มีความเสียหาย</th>
          <th>พื้นที่ (หมู่บ้าน)</th>
          <th>ลักษณะปัญหา</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ระบบประปา</td>
          <td><input type="radio" <?php if ($Data[118] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[118]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[118] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[118]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span2"  name="Data[119]" type="text" placeholder="" value="<?php echo $Data[119]; ?>"></td>
          <td><input class="span5"  name="Data[120]" type="text" placeholder="" value="<?php echo $Data[120]; ?>"></td>
        </tr>
        <tr>
          <td>บ่อบาดาล</td>
          <td><input type="radio" <?php if ($Data[216] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[216]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[216] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[216]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span2"  name="Data[121]" type="text" placeholder="" value="<?php echo $Data[121]; ?>"></td>
          <td><input class="span5"  name="Data[122]" type="text" placeholder="" value="<?php echo $Data[122]; ?>"></td>
        </tr>
        <tr>
          <td>เขื่อน/ฝาย</td>
          <td><input type="radio" <?php if ($Data[123] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[123]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[123] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[123]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span2"  name="Data[124]" type="text" placeholder="" value="<?php echo $Data[124]; ?>"></td>
          <td><input class="span5"  name="Data[125]" type="text" placeholder="" value="<?php echo $Data[125]; ?>"></td>
        </tr>
        <tr>
          <td>แหล่งน้ำ</td>
          <td><input type="radio" <?php if ($Data[126] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[126]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[126] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[126]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span2"  name="Data[127]" type="text" placeholder="" value="<?php echo $Data[127]; ?>"></td>
          <td><input class="span5"  name="Data[128]" type="text" placeholder="" value="<?php echo $Data[128]; ?>"></td>
        </tr>
      </tbody>
    </table>
      
    
    <h4>3.3.4 ขยะ/มลพิษ</h4>
      <table class="bordered-table">
      <thead>
        <tr>
          <th></th>
          <th>มีปัญหา</th>
          <th>ไม่มีปัญหา</th>
          <th>พื้นที่ (หมู่บ้าน)</th>
          <th>ลักษณะปัญหา</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>การจัดการขยะ</td>
          <td><input type="radio" <?php if ($Data[129] == 'ปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[129]" value="ปัญหา"></td>
          <td><input type="radio" <?php if ($Data[129] == 'ไม่มีปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[129]" value="ไม่มีปัญหา"></td>
          <td><input class="span2"  name="Data[130]" type="text" placeholder="" value="<?php echo $Data[130]; ?>"></td>
          <td><input class="span5"  name="Data[131]" type="text" placeholder="" value="<?php echo $Data[131]; ?>"></td>
        </tr>
        <tr>
          <td>น้ำเน่าเสีย</td>
          <td><input type="radio" <?php if ($Data[132] == 'ปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[132]" value="ปัญหา"></td>
          <td><input type="radio" <?php if ($Data[132] == 'ไม่มีปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[132]" value="ไม่มีปัญหา"></td>
          <td><input class="span2"  name="Data[133]" type="text" placeholder="" value="<?php echo $Data[133]; ?>"></td>
          <td><input class="span5"  name="Data[134]" type="text" placeholder="" value="<?php echo $Data[134]; ?>"></td>
        </tr>
        <tr>
          <td>มลพิษอื่นๆ</td>
          <td><input type="radio" <?php if ($Data[135] == 'ปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[135]" value="ปัญหา"></td>
          <td><input type="radio" <?php if ($Data[135] == 'ไม่มีปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[135]" value="ไม่มีปัญหา"></td>
          <td><input class="span2"  name="Data[136]" type="text" placeholder="" value="<?php echo $Data[136]; ?>"></td>
          <td><input class="span5"  name="Data[137]" type="text" placeholder="" value="<?php echo $Data[137]; ?>"></td>
        </tr>
      </tbody>
    </table>
      
    
    <h5>กิจกรรมที่ชุมชนดําเนินการเองได้</h5>
    <table class="bordered-table">
      <thead>
        <tr>
          <th></th>
          <th>ดําเนินการเองได้</th>
          <th>ต้องการสนับสนุน</th>
          <th>ลักษณะการสนับสนุนและจํานวน</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>การซ่อมแซมที่อยู่อาศัย</td>
          <td><input type="radio" <?php if ($Data[138] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[138]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[138] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[138]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[139]" type="text" placeholder="" value="<?php echo $Data[139]; ?>"></td>
        </tr>
        <tr>
          <td>การซ่อมแซมสิ่งสาธารณะประโยชน์</td>
          <td><input type="radio" <?php if ($Data[140] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[140]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[140] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[140]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[141]" type="text" placeholder="" value="<?php echo $Data[141]; ?>"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูแหล่งท่องเที่ยว</td>
          <td><input type="radio" <?php if ($Data[142] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[142]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[142] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[142]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[143]" type="text" placeholder="" value="<?php echo $Data[143]; ?>"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูแหล่งน้ำ</td>
          <td><input type="radio" <?php if ($Data[144] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[144]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[144] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[144]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[145]" type="text" placeholder="" value="<?php echo $Data[145]; ?>"></td>
        </tr>
        <tr>
          <td>การจัดการขยะ/มลพิษ</td>
          <td><input type="radio" <?php if ($Data[146] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[146]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[146] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[146]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[147]" type="text" placeholder="" value="<?php echo $Data[147]; ?>"></td>
        </tr>
      </tbody>
    </table>
    <h5>ลักษณะการสนับสนุนในประเด็นสภาพแวดล้อมหากเป็นสิ่งของกรุณาบอกจํานวนครา่วๆ (เพิ่มเติม)</h5>
    <textarea class="xxlarge" name="Data[148]" rows="3"><?php echo $Data[148]; ?></textarea>
    
    <br/><br/>
    <h5>ท่านคิดว่าความรุนแรงด้านปัญหาสภาพแวดล้อมในชุมชนอยู่ในระดับใด (1 น้อยที่สุด–5 มากที่สุด)</h5>
    <div class="clearfix radio-list">
      <?php echo CHtml::activeRadioButtonList($model, 'filter3', array(
        1 => '1) อาคารถาวร วัตถุ เส้นทางเสียหายเล็กน้อย ไม่มีปัญหาแหล่งน้ําและมลพิษ',
        2 => '2) อาคารถาวร วัตถุ เส้นทาง แหล่งท่องเที่ยวเสียหาย ไม่มีปัญหาแหล่งน้ําและมลพิษ',
        3 => '3) อาคารถาวร วัตถุ เส้นทาง แหล่งท่องเที่ยวเสียหาย มีปัญหาแหล่งน้ํา ต้องการสนับสนุนบางส่วน',
        4 => '4) อาคารถาวร วัตถุ เส้นทาง แหล่งท่องเที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ํา และมลพิษต้องการสนับสนุน',
        5 => '5) อาคารถาวร วัตถุ เส้นทาง แหล่งท่องเที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ําและมลพิษรุนแรงต้องการสนับสนุนเร่งด่วน',
      )) ?>
    </div>
    
      
      <h3>3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3>
      <h4>3.4.1 พื้นที่การเกษตรเสียหาย</h4>
			<div class="clearfix">
			  <label for="xlInput">พื้นที่การเกษตรเสียหาย/ไร่</label>
			  <div class="input">
			    <input class="span2"  name="Data[150]" size="30" type="text" value="<?php echo $Data[150]; ?>">
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">นาข้าว/ไร่</label>
			  <div class="input">
			    <input class="span2"  name="Data[151]" size="30" type="text" value="<?php echo $Data[151]; ?>" >
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">พืชสวน/ไร่</label>
			  <div class="input">
			    <input class="span2"  name="Data[152]" size="30" type="text" value="<?php echo $Data[152]; ?>" >
			  </div>
			</div><!-- /clearfix -->
			
			<div class="clearfix">
			  <label for="xlInput">พืชไร่/ไร่</label>
			  <div class="input">
			    <input class="span2"  name="Data[153]" size="30" type="text" value="<?php echo $Data[153]; ?>" >
			  </div>
			</div><!-- /clearfix -->

      
      <h4>3.4.2 พื้นที่ปศุสัตว์เสียหาย ความเสียหาย (โปรดระบุ)</h4>
      <div class="clearfix">
      <textarea class="xxlarge" name="Data[154]" rows="3"><?php echo $Data[154]; ?></textarea>
      </div>
      
      
      <h4>3.4.3 พื้นที่ประมงเสียหาย ความเสียหาย (โปรดระบุ)</h4>
      <div class="clearfix">
      <textarea class="xxlarge" name="Data[155]" rows="3"><?php echo $Data[155]; ?></textarea>
      </div>
      
      
      <h4>3.4.4 ตลาดย่านธุรกิจเสียหาย (โปรดระบุ)</h4>
      <div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" name="Data[156]" type="text" placeholder="" value="<?php echo $Data[156]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span5" name="Data[157]" type="text" placeholder="" value="<?php echo $Data[157]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[158]" type="text" placeholder="" value="<?php echo $Data[158]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span5"  name="Data[159]" type="text" placeholder="" value="<?php echo $Data[159]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[160]" type="text" placeholder="" value="<?php echo $Data[160]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span5"  name="Data[161]" type="text" placeholder="" value="<?php echo $Data[161]; ?>" >
			</div>
			
			
			<h4>3.4.5 อุตสาหกรรมเสียหาย</h4>
      <div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[162]" type="text" placeholder="" value="<?php echo $Data[162]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span5"  name="Data[163]" type="text" placeholder="" value="<?php echo $Data[162]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[164]" type="text" placeholder="" value="<?php echo $Data[164]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span5"  name="Data[165]" type="text" placeholder="" value="<?php echo $Data[165]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[166]" type="text" placeholder="" value="<?php echo $Data[166]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span5"  name="Data[167]" type="text" placeholder="" value="<?php echo $Data[167]; ?>" >
			</div>
      
      
      <h4>3.4.6 ประมาณการคนว่างงานจากภัยพิบัติ</h4>
			<div class="clearfix">
			  <label for="xlInput">ประมาณการคนว่างงานจากภัยพิบัติ/คน</label>
			  <div class="input">
			    <input class="span2"  name="Data[168]" size="30" type="text" value="<?php echo $Data[168]; ?>" >
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">ว่างงานภาคเกษตร/คน</label>
			  <div class="input">
			    <input class="span2"  name="Data[169]" size="30" type="text" value="<?php echo $Data[169]; ?>" >
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">ว่างงานภาคอุตสาหกรรม/คน</label>
			  <div class="input">
			    <input class="span2"  name="Data[170]" size="30" type="text" value="<?php echo $Data[170]; ?>" >
			  </div>
			</div><!-- /clearfix -->
			
      
      <h4>3.4.7 กลุ่มอาชีพ</h4>
      <div class="clearfix">
			  <label class="no-float">กลุ่มอาชีพในชุมชนมี/กลุ่ม</label>
			  <input class="span2"  name="Data[171]" type="text" placeholder="" value="<?php echo $Data[171]; ?>" >
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">กลุ่มอาชีพที่มีความโดดเด่นในชุมชนคือกลุ่ม</label>
			  <input class="span2"  name="Data[172]" type="text" placeholder="" value="<?php echo $Data[172]; ?>" >
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">ผลิตภัณฑ์ชุมชนที่โดดเด่นคือ</label>
			  <input class="span2"  name="Data[173]" type="text" placeholder="" value="<?php echo $Data[173]; ?>" >
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">กลุ่มอาชีพท่ีได้รับความเสียหายมี/กลุ่ม</label>
			  <input class="span2"  name="Data[174]" type="text" placeholder="" value="<?php echo $Data[174]; ?>" >
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหาย/กลุ่ม</h5>
			<ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[175]" size="30" type="text" value="<?php echo $Data[175]; ?>" >
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[176]" size="30" type="text" value="<?php echo $Data[176]; ?>" >
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[177]" size="30" type="text" value="<?php echo $Data[177]; ?>" >
			    </div>
				</li>
			</ol>
      
      
      <h4>3.4.8 เครื่องจักรอุปกรณ์ประกอบอาชีพที่เสียหาย เช่น รถไถ รถกะบะ รถบรรทุก รถมอเตอร์ไซต์ รถยนต์ จักรเย็บผ้า อุปกรณ์กลุ่มอาชีพ ฯลฯ เครื่องจักร อุปกรณ์ประกอบอาชีพที่ได้รับความเสียหายมาก คือ</h4>
      <ol>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[178]" size="30" type="text" value="<?php echo $Data[178]; ?>" >
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[179]" size="30" type="text" value="<?php echo $Data[179]; ?>" >
			    </div>
				</li>
				<li>
					<div class="list-textbox">
				    <input class="xlarge"  name="Data[180]" size="30" type="text" value="<?php echo $Data[180]; ?>" >
			    </div>
				</li>
			</ol>
			
			
			
			<h4>3.4.9 ปัญหาการส่ือสารโทรคมนาคมในพื้นที่</h4>
			<table class="bordered-table">
      <thead>
        <tr>
          <th>ปัญหา</th>
          <th>มี</th>
          <th>ไม่มี</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ระบบโทรศัพท์พ้ืนฐาน</td>
          <td><input type="radio" <?php if ($Data[181] == 'มีปัญหาระบบโทรศัพท์พ้ืนฐาน'): ?> checked="checked" <?php endif; ?> name="Data[181]" value="มีปัญหาระบบโทรศัพท์พ้ืนฐาน"></td>
          <td><input type="radio" <?php if ($Data[181] == 'ไม่มีปัญหาระบบโทรศัพท์พ้ืนฐาน'): ?> checked="checked" <?php endif; ?> name="Data[181]" value="ไม่มีปัญหาระบบโทรศัพท์พ้ืนฐาน"></td>
        </tr>
        <tr>
          <td>ระบบโทรศัพท์มือถือ</td>
          <td><input type="radio" <?php if ($Data[182] == 'มีปัญหาระบบโทรศัพท์มือถือ'): ?> checked="checked" <?php endif; ?> name="Data[182]" value="มีปัญหาระบบโทรศัพท์มือถือ"></td>
          <td><input type="radio" <?php if ($Data[182] == 'ไม่มีปัญหาระบบโทรศัพท์มือถือ'): ?> checked="checked" <?php endif; ?> name="Data[182]" value="ไม่มีปัญหาระบบโทรศัพท์มือถือ"></td>
        </tr>
        <tr>
          <td>ระบบอินเทอร์เน็ต</td>
          <td><input type="radio" <?php if ($Data[183] == 'มีปัญหาระบบอินเทอร์เน็ต'): ?> checked="checked" <?php endif; ?> name="Data[183]" value="มีปัญหาระบบอินเทอร์เน็ต"></td>
          <td><input type="radio" <?php if ($Data[183] == 'ไม่มีปัญหาระบบอินเทอร์เน็ต'): ?> checked="checked" <?php endif; ?> name="Data[183]" value="ไม่มีปัญหาระบบอินเทอร์เน็ต"></td>
        </tr>
        <tr>
          <td>ระบบไปรษณีย์</td>
          <td><input type="radio" <?php if ($Data[184] == 'มีปัญหาระบบไปรษณีย์'): ?> checked="checked" <?php endif; ?> name="Data[184]" value="มีปัญหาระบบไปรษณีย์"></td>
          <td><input type="radio" <?php if ($Data[184] == 'ไม่มีปัญหาระบบไปรษณีย์'): ?> checked="checked" <?php endif; ?> name="Data[184]" value="ไม่มีปัญหาระบบไปรษณีย์"></td>
        </tr>
        <tr>
          <td>ระบบวิทยุสื่อสาร</td>
          <td><input type="radio" <?php if ($Data[185] == 'มีปัญหาระบบวิทยุสื่อสาร'): ?> checked="checked" <?php endif; ?> name="Data[185]" value="มีปัญหาระบบวิทยุสื่อสาร"></td>
          <td><input type="radio" <?php if ($Data[185] == 'ไม่มีปัญหาระบบวิทยุสื่อสาร'): ?> checked="checked" <?php endif; ?> name="Data[185]" value="ไม่มีปัญหาระบบวิทยุสื่อสาร"></td>
        </tr>
      </tbody>
    </table>
    
    
    <h4>กิจกรรมที่ชุมชนดําเนินการเองได้ (ถ้าไม่มีไม่ต้องกรอก)</h4>
    <table class="bordered-table">
      <thead>
        <tr>
          <th></th>
          <th>ดําเนินการเอง</th>
          <th>ต้องการสนับสนุน</th>
          <th>ลักษณะการสนับสนุนและจํานวน</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)</td>
          <td><input type="radio" <?php if ($Data[186] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[186]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[186] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[186]" value="ต้องการสนับสนุน"></td>
          <td><input class="xlarge"  name="Data[187]" size="30" type="text" value="<?php echo $Data[187]; ?>" ></td>
        </tr>
        <tr>
          <td>การฟ้ืนฟูด้านปศุสัตว์</td>
          <td><input type="radio" <?php if ($Data[188] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[188]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[188] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[188]" value="ต้องการสนับสนุน"></td>
          <td><input class="xlarge"  name="Data[189]" size="30" type="text" value="<?php echo $Data[189]; ?>" ></td>
        </tr>
        <tr>
          <td>การฟ้ืนฟูด้านการประมง</td>
          <td><input type="radio" <?php if ($Data[190] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[190]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[190] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[190]" value="ต้องการสนับสนุน"></td>
          <td><input class="xlarge"  name="Data[191]" size="30" type="text" value="<?php echo $Data[191]; ?>" ></td>
        </tr>
        <tr>
          <td>การฟื้นฟูธุรกิจอุตสาหกรรม</td>
          <td><input type="radio" <?php if ($Data[191] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[191]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[191] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[191]" value="ต้องการสนับสนุน"></td>
          <td><input class="xlarge"  name="Data[192]" size="30" type="text" value="<?php echo $Data[192]; ?>" ></td>
        </tr>
        <tr>
          <td>การฟื้นฟูแรงงาน</td>
          <td><input type="radio" <?php if ($Data[193] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[193]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[193] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[193]" value="ต้องการสนับสนุน"></td>
          <td><input class="xlarge"  name="Data[194]" size="30" type="text" value="<?php echo $Data[194]; ?>" ></td>
        </tr>
        <tr>
          <td>การฟื้นฟูกลุ่มอาชีพ</td>
          <td><input type="radio" <?php if ($Data[195] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[195]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[195] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[195]" value="ต้องการสนับสนุน"></td>
          <td><input class="xlarge"  name="Data[196]" size="30" type="text" value="<?php echo $Data[196]; ?>" ></td>
        </tr>
        <tr>
          <td>การซ่อมแซมเครื่องจักรอุปกรณ์ประกอบอาชีพ</td>
          <td><input type="radio" <?php if ($Data[197] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[197]" value="option2"></td>
          <td><input type="radio" <?php if ($Data[197] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[197]" value="option2"></td>
          <td><input class="xlarge"  name="Data[198]" size="30" type="text" value="<?php echo $Data[198]; ?>" ></td>
        </tr>
        <tr>
          <td>การซ่อมแซมระบบสื่อสารโทรคมนาคม</td>
          <td><input type="radio" <?php if ($Data[199] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[199]" value="option2"></td>
          <td><input type="radio" <?php if ($Data[199] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[199]" value="option2"></td>
          <td><input class="xlarge"  name="Data[200]" size="30" type="text" value="<?php echo $Data[200]; ?>" ></td>
        </tr>
      </tbody>
    </table>
    
    <h5>ลักษณะสนับสนุนในประเด็นเศรษฐกิจหากเป็นสิ่งของกรุณาบอกจํานวนคร่าวๆ (เพิ่มเติม)</h5>
    <div class="clearfix">
    <textarea class="xxlarge" name="Data[201]" rows="3"><?php echo $Data[201]; ?></textarea>
    </div>
    
    
    <h4>ท่านคิดว่าความรุนแรงด้านปัญหาเศรษฐกิจในชุมชนอยู่ในระดับใด ( 1 น้อยที่สุด – 5 มากท่ีสุด )</h4>
		
	  <div class="clearfix radio-list">
    <?php echo CHtml::activeRadioButtonList($model, 'filter4', array(
      1 => '1) ไม่มีผลกระทบสามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ ธรุ กิจกิจและ อุตสาหกรรมสามารถดําเนินการต่อได้',
      2 => '2) ได้รับผลกระทบแต่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรม สามารถดําเนินการต่อได้',
      3 => '3) สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดําเนินการต่อได้ แต่ ต้องการการสนับสนุนบางส่วน',
      4 => '4) ไม่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่การฟื้นฟูธุรกจิ อุตสาหกรรม ต้องใช้เวลาอย่างน้อย 3 เดือนต้องการการสนับสนุน',
      5 => '5) ไม่สามารถดําเนินกิจกรรมทางเศรษฐกิจใดๆ ได้ ประชากรเกินครึ่งว่างงาน',
    )) ?>
    </div>
      
      <h4>3.5 การจัดการภัยพิบัติ</h4>
    <table class="bordered-table">
      <thead>
        <tr>
          <th>มี</th>
          <th>กิจกรรม</th>
          <th>ดําเนินการเอง</th>
          <th>ต้องการสนับสนุน</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" <?php if ($Data[207] == 'มี'): ?> checked="checked" <?php endif; ?> name="Data[207]" value="มี"></td>
          <td>จัดทําแผนรับมือภัยพิบัติ</td>
          <td><input type="radio" <?php if ($Data[208] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[208]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[208] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[208]" value="ต้องการสนับสนุน"></td>
        </tr>
        <tr>
          <td><input type="checkbox" <?php if ($Data[209] == 'มี'): ?> checked="checked" <?php endif; ?> name="Data[209]" value="มี"></td>
          <td>ฝึกซ้อมการรับมือภัยพิบัติ</td>
          <td><input type="radio" <?php if ($Data[210] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[210]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[210] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[210]" value="ต้องการสนับสนุน"></td>
        </tr>
        <tr>
          <td><input type="checkbox" <?php if ($Data[211] == 'มี'): ?> checked="checked" <?php endif; ?> name="Data[211]" value="มี"></td>
          <td>ปรับปรุงระบบผังเมือง/ชุมชน</td>
          <td><input type="radio" <?php if ($Data[212] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[212]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[212] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[212]" value="ต้องการสนับสนุน"></td>
        </tr>
        <tr>
          <td><input type="checkbox" <?php if ($Data[213] == 'มี'): ?> checked="checked" <?php endif; ?> name="Data[213]" value="มี"></td>
          <td>อื่นๆ (โปรดระบุ)</td>
          <td><input type="radio" <?php if ($Data[214] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[214]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[214] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?>name="Data[214]" value="ต้องการสนับสนุน"></td>
        </tr>
      </tbody>
    </table>
      
      
  </fieldset>
  
  
  
  <!-- /////////////////////// -->
      <fieldset title="การสำรวจศักยภาพและความต้องการของตำบล" class="info-faculty">
        <legend>ส่วนที่ 4 การสำรวจศักยภาพและความต้องการของตำบล</legend>
        <div class="clearfix">
        <h3>4.1 ด้านเครื่องมือ/อุปกรณ์</h3>
        <span class="help-block">***กรุณาเติมคำตอบลงในช่องว่างทุกข้อ ถ้าไม่มีกรุณา  ( - )  ดังตัวอย่างข้างบนนี้ ***</span>
        <table class="bordered-table">
        <thead>
          <tr>
            <th colspan="1" rowspan="2">ด้านเครื่องมือ / อุปกรณ์</th>
            <th colspan="3" valign="middle">จำนวน</th>
            <th colspan="1" rowspan="2">ระดับความต้องการสนับสนุน (วัน)</th>
          </tr>
          <tr>
            <th>จำนวนที่มีอยู่จริงในพื้นที่</th>
            <th>จำนวนที่สามารถให้ความช่วยเหลือในพื้นที่อื่นได้</th>
            <th>จำนวนที่ต้องการการสนับสนุนเพิ่มเติม</th>
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
            <td><input class="span2" name="Data[254]" type="text" value="<?php echo $Data[254]; ?>"></td>
            <td><input class="span2" name="Data[255]" type="text" value="<?php echo $Data[255]; ?>"></td>
            <td><input class="span2" name="Data[256]" type="text" value="<?php echo $Data[256]; ?>"></td>
            <td><input class="span2" name="Data[257]" type="text" value="<?php echo $Data[257]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 รถบรรทุก 6 ล้อ</th>
            <td><input class="span2" name="Data[258]" type="text" value="<?php echo $Data[258]; ?>"></td>
            <td><input class="span2" name="Data[259]" type="text" value="<?php echo $Data[259]; ?>"></td>
            <td><input class="span2" name="Data[260]" type="text" value="<?php echo $Data[260]; ?>"></td>
            <td><input class="span2" name="Data[261]" type="text" value="<?php echo $Data[261]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 รถบรรทุก 10 ล้อ</th>
            <td><input class="span2" name="Data[262]" type="text" value="<?php echo $Data[262]; ?>"></td>
            <td><input class="span2" name="Data[263]" type="text" value="<?php echo $Data[263]; ?>"></td>
            <td><input class="span2" name="Data[264]" type="text" value="<?php echo $Data[264]; ?>"></td>
            <td><input class="span2" name="Data[265]" type="text" value="<?php echo $Data[265]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.4 รถพยาบาล</th>
            <td><input class="span2" name="Data[266]" type="text" value="<?php echo $Data[266]; ?>"></td>
            <td><input class="span2" name="Data[267]" type="text" value="<?php echo $Data[267]; ?>"></td>
            <td><input class="span2" name="Data[268]" type="text" value="<?php echo $Data[268]; ?>"></td>
            <td><input class="span2" name="Data[269]" type="text" value="<?php echo $Data[269]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">1.5 รถตรวจการ</th>
            <td><input class="span2" name="Data[270]" type="text" value="<?php echo $Data[270]; ?>"></td>
            <td><input class="span2" name="Data[271]" type="text" value="<?php echo $Data[271]; ?>"></td>
            <td><input class="span2" name="Data[272]" type="text" value="<?php echo $Data[272]; ?>"></td>
            <td><input class="span2" name="Data[273]" type="text" value="<?php echo $Data[273]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.6 รถดับเพลิง</th>
            <td><input class="span2" name="Data[274]" type="text" value="<?php echo $Data[274]; ?>"></td>
            <td><input class="span2" name="Data[275]" type="text" value="<?php echo $Data[275]; ?>"></td>
            <td><input class="span2" name="Data[276]" type="text" value="<?php echo $Data[276]; ?>"></td>
            <td><input class="span2" name="Data[277]" type="text" value="<?php echo $Data[277]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">1.7 รถบรรทุกน้ำพร้อมหัวฉีดน้ำ</th>
            <td><input class="span2" name="Data[278]" type="text" value="<?php echo $Data[278]; ?>"></td>
            <td><input class="span2" name="Data[279]" type="text" value="<?php echo $Data[279]; ?>"></td>
            <td><input class="span2" name="Data[280]" type="text" value="<?php echo $Data[280]; ?>"></td>
            <td><input class="span2" name="Data[281]" type="text" value="<?php echo $Data[281]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">1.8 รถกระเช้าไฟฟ้า</th>
            <td><input class="span2" name="Data[37]" type="text" value="<?php echo $Data[37]; ?>"></td>
            <td><input class="span2" name="Data[218]" type="text" value="<?php echo $Data[218]; ?>"></td>
            <td><input class="span2" name="Data[219]" type="text" value="<?php echo $Data[219]; ?>"></td>
            <td><input class="span2" name="Data[220]" type="text" value="<?php echo $Data[220]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.9 รถขยะ</th>
            <td><input class="span2" name="Data[221]" type="text" value="<?php echo $Data[221]; ?>"></td>
            <td><input class="span2" name="Data[222]" type="text" value="<?php echo $Data[222]; ?>"></td>
            <td><input class="span2" name="Data[223]" type="text" value="<?php echo $Data[223]; ?>"></td>
            <td><input class="span2" name="Data[224]" type="text" value="<?php echo $Data[224]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.10 รถเจซีบี</th>
            <td><input class="span2" name="Data[225]" type="text" value="<?php echo $Data[225]; ?>"></td>
            <td><input class="span2" name="Data[226]" type="text" value="<?php echo $Data[226]; ?>"></td>
            <td><input class="span2" name="Data[227]" type="text" value="<?php echo $Data[227]; ?>"></td>
            <td><input class="span2" name="Data[228]" type="text" value="<?php echo $Data[228]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.11 รถแบคโฮ</th>
            <td><input class="span2" name="Data[229]" type="text" value="<?php echo $Data[229]; ?>"></td>
            <td><input class="span2" name="Data[230]" type="text" value="<?php echo $Data[230]; ?>"></td>
            <td><input class="span2" name="Data[231]" type="text" value="<?php echo $Data[231]; ?>"></td>
            <td><input class="span2" name="Data[232]" type="text" value="<?php echo $Data[232]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.12 รถเกลี่ยถนน</th>
            <td><input class="span2" name="Data[233]" type="text" value="<?php echo $Data[233]; ?>"></td>
            <td><input class="span2" name="Data[234]" type="text" value="<?php echo $Data[234]; ?>"></td>
            <td><input class="span2" name="Data[235]" type="text" value="<?php echo $Data[235]; ?>"></td>
            <td><input class="span2" name="Data[236]" type="text" value="<?php echo $Data[236]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.13 รถบดถนน</th>
            <td><input class="span2" name="Data[237]" type="text" value="<?php echo $Data[237]; ?>"></td>
            <td><input class="span2" name="Data[238]" type="text" value="<?php echo $Data[238]; ?>"></td>
            <td><input class="span2" name="Data[239]" type="text" value="<?php echo $Data[239]; ?>"></td>
            <td><input class="span2" name="Data[240]" type="text" value="<?php echo $Data[240]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.14 รถไถ</th>
            <td><input class="span2" name="Data[241]" type="text" value="<?php echo $Data[241]; ?>"></td>
            <td><input class="span2" name="Data[242]" type="text" value="<?php echo $Data[242]; ?>"></td>
            <td><input class="span2" name="Data[243]" type="text" value="<?php echo $Data[243]; ?>"></td>
            <td><input class="span2" name="Data[244]" type="text" value="<?php echo $Data[244]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.15 รถไฟฟ้าส่องสว่าง</th>
            <td><input class="span2" name="Data[245]" type="text" value="<?php echo $Data[245]; ?>"></td>
            <td><input class="span2" name="Data[246]" type="text" value="<?php echo $Data[246]; ?>"></td>
            <td><input class="span2" name="Data[247]" type="text" value="<?php echo $Data[247]; ?>"></td>
            <td><input class="span2" name="Data[248]" type="text" value="<?php echo $Data[248]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">1.16 อื่นๆ <input class="span4" name="Data[249]" type="text" value="<?php echo $Data[249]; ?>"></th>
            <td><input class="span2" name="Data[250]" type="text" value="<?php echo $Data[250]; ?>"></td>
            <td><input class="span2" name="Data[251]" type="text" value="<?php echo $Data[251]; ?>"></td>
            <td><input class="span2" name="Data[252]" type="text" value="<?php echo $Data[252]; ?>"></td>
            <td><input class="span2" name="Data[253]" type="text" value="<?php echo $Data[253]; ?>"></td>
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
            <td><input class="span2" name="Data[282]" type="text" value="<?php echo $Data[282]; ?>"></td>
            <td><input class="span2" name="Data[283]" type="text" value="<?php echo $Data[283]; ?>"></td>
            <td><input class="span2" name="Data[284]" type="text" value="<?php echo $Data[284]; ?>"></td>
            <td><input class="span2" name="Data[285]" type="text" value="<?php echo $Data[285]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 เรือท้องแบนไฟเบอร์</th>
            <td><input class="span2" name="Data[286]" type="text" value="<?php echo $Data[286]; ?>"></td>
            <td><input class="span2" name="Data[287]" type="text" value="<?php echo $Data[287]; ?>"></td>
            <td><input class="span2" name="Data[288]" type="text" value="<?php echo $Data[288]; ?>"></td>
            <td><input class="span2" name="Data[289]" type="text" value="<?php echo $Data[289]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">2.3 เรือเล็กพร้อมพายแบบ HDPE</th>
            <td><input class="span2" name="Data[290]" type="text" value="<?php echo $Data[290]; ?>"></td>
            <td><input class="span2" name="Data[291]" type="text" value="<?php echo $Data[291]; ?>"></td>
            <td><input class="span2" name="Data[292]" type="text" value="<?php echo $Data[292]; ?>"></td>
            <td><input class="span2" name="Data[293]" type="text" value="<?php echo $Data[293]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.4 เรือเล็กพร้อมพายแบบไฟเบอร์</th>
            <td><input class="span2" name="Data[294]" type="text" value="<?php echo $Data[294]; ?>"></td>
            <td><input class="span2" name="Data[295]" type="text" value="<?php echo $Data[295]; ?>"></td>
            <td><input class="span2" name="Data[296]" type="text" value="<?php echo $Data[296]; ?>"></td>
            <td><input class="span2" name="Data[297]" type="text" value="<?php echo $Data[297]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">2.5 เรือยาง</th>
            <td><input class="span2" name="Data[298]" type="text" value="<?php echo $Data[298]; ?>"></td>
            <td><input class="span2" name="Data[299]" type="text" value="<?php echo $Data[299]; ?>"></td>
            <td><input class="span2" name="Data[300]" type="text" value="<?php echo $Data[300]; ?>"></td>
            <td><input class="span2" name="Data[301]" type="text" value="<?php echo $Data[301]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.6 เรือหางยาว</th>
            <td><input class="span2" name="Data[302]" type="text" value="<?php echo $Data[302]; ?>"></td>
            <td><input class="span2" name="Data[303]" type="text" value="<?php echo $Data[303]; ?>"></td>
            <td><input class="span2" name="Data[304]" type="text" value="<?php echo $Data[304]; ?>"></td>
            <td><input class="span2" name="Data[305]" type="text" value="<?php echo $Data[305]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">2.7 เจ็ตสกี</th>
            <td><input class="span2" name="Data[306]" type="text" value="<?php echo $Data[306]; ?>"></td>
            <td><input class="span2" name="Data[307]" type="text" value="<?php echo $Data[307]; ?>"></td>
            <td><input class="span2" name="Data[308]" type="text" value="<?php echo $Data[308]; ?>"></td>
            <td><input class="span2" name="Data[309]" type="text" value="<?php echo $Data[309]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">2.8 เครื่องยนต์เรือ</th>
            <td><input class="span2" name="Data[310]" type="text" value="<?php echo $Data[310]; ?>"></td>
            <td><input class="span2" name="Data[311]" type="text" value="<?php echo $Data[311]; ?>"></td>
            <td><input class="span2" name="Data[312]" type="text" value="<?php echo $Data[312]; ?>"></td>
            <td><input class="span2" name="Data[313]" type="text" value="<?php echo $Data[313]; ?>"></td>
          </tr>
          <tr>
            <th class="indent">2.9 อื่น ๆ <input class="span4" name="Data[318]" type="text" value="<?php echo $Data[318]; ?>"></th>
            <td><input class="span2" name="Data[314]" type="text" value="<?php echo $Data[314]; ?>"></td>
            <td><input class="span2" name="Data[315]" type="text" value="<?php echo $Data[315]; ?>"></td>
            <td><input class="span2" name="Data[316]" type="text" value="<?php echo $Data[316]; ?>"></td>
            <td><input class="span2" name="Data[317]" type="text" value="<?php echo $Data[317]; ?>"></td>
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
            <td><input class="span2" name="Data[319]" type="text" value="<?php echo $Data[319]; ?>"></td>
            <td><input class="span2" name="Data[320]" type="text" value="<?php echo $Data[320]; ?>"></td>
            <td><input class="span2" name="Data[321]" type="text" value="<?php echo $Data[321]; ?>"></td>
            <td><input class="span2" name="Data[322]" type="text" value="<?php echo $Data[322]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 ขนาดท่อ 8 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span2" name="Data[323]" type="text" value="<?php echo $Data[323]; ?>"></td>
            <td><input class="span2" name="Data[324]" type="text" value="<?php echo $Data[324]; ?>"></td>
            <td><input class="span2" name="Data[325]" type="text" value="<?php echo $Data[325]; ?>"></td>
            <td><input class="span2" name="Data[326]" type="text" value="<?php echo $Data[326]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">3.3 ขนาดท่อ 10 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span2" name="Data[327]" type="text" value="<?php echo $Data[327]; ?>"></td>
            <td><input class="span2" name="Data[328]" type="text" value="<?php echo $Data[328]; ?>"></td>
            <td><input class="span2" name="Data[329]" type="text" value="<?php echo $Data[329]; ?>"></td>
            <td><input class="span2" name="Data[330]" type="text" value="<?php echo $Data[330]; ?>"></td>
          </tr>  
          <tr>
            <th class="indent">3.4 ขนาดท่อ 12 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span2" name="Data[331]" type="text" value="<?php echo $Data[331]; ?>"></td>
            <td><input class="span2" name="Data[332]" type="text" value="<?php echo $Data[332]; ?>"></td>
            <td><input class="span2" name="Data[333]" type="text" value="<?php echo $Data[333]; ?>"></td>
            <td><input class="span2" name="Data[334]" type="text" value="<?php echo $Data[334]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.5 ขนาดท่อ 18 นิ้ว (น้ำมันดีเซล)</th>
            <td><input class="span2" name="Data[335]" type="text" value="<?php echo $Data[335]; ?>"></td>
            <td><input class="span2" name="Data[336]" type="text" value="<?php echo $Data[336]; ?>"></td>
            <td><input class="span2" name="Data[337]" type="text" value="<?php echo $Data[337]; ?>"></td>
            <td><input class="span2" name="Data[338]" type="text" value="<?php echo $Data[338]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">3.6 อื่นๆ <input class="span4" name="Data[339]" type="text" value="<?php echo $Data[339]; ?>"></th>
            <td><input class="span2" name="Data[340]" type="text" value="<?php echo $Data[340]; ?>"></td>
            <td><input class="span2" name="Data[341]" type="text" value="<?php echo $Data[341]; ?>"></td>
            <td><input class="span2" name="Data[342]" type="text" value="<?php echo $Data[342]; ?>"></td>
            <td><input class="span2" name="Data[343]" type="text" value="<?php echo $Data[343]; ?>"></td>
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
            <td><input class="span2" name="Data[344]" type="text" value="<?php echo $Data[344]; ?>"></td>
            <td><input class="span2" name="Data[345]" type="text" value="<?php echo $Data[345]; ?>"></td>
            <td><input class="span2" name="Data[346]" type="text" value="<?php echo $Data[346]; ?>"></td>
            <td><input class="span2" name="Data[347]" type="text" value="<?php echo $Data[347]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 สุขาชั่วคราวแบบลอยน้ำ</th>
            <td><input class="span2" name="Data[348]" type="text" value="<?php echo $Data[348]; ?>"></td>
            <td><input class="span2" name="Data[349]" type="text" value="<?php echo $Data[349]; ?>"></td>
            <td><input class="span2" name="Data[350]" type="text" value="<?php echo $Data[350]; ?>"></td>
            <td><input class="span2" name="Data[351]" type="text" value="<?php echo $Data[351]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">4.3 สุขาชั่วคราวแบบใช้ถุงดำ</th>
            <td><input class="span2" name="Data[352]" type="text" value="<?php echo $Data[352]; ?>"></td>
            <td><input class="span2" name="Data[353]" type="text" value="<?php echo $Data[353]; ?>"></td>
            <td><input class="span2" name="Data[354]" type="text" value="<?php echo $Data[354]; ?>"></td>
            <td><input class="span2" name="Data[355]" type="text" value="<?php echo $Data[355]; ?>"></td>
          </tr>             
          <tr>
            <th class="indent">4.4 อื่นๆ <input class="span4" name="Data[174]" type="text" value="<?php echo $Data[174]; ?>"></th>
            <td><input class="span2" name="Data[356]" type="text" value="<?php echo $Data[356]; ?>"></td>
            <td><input class="span2" name="Data[357]" type="text" value="<?php echo $Data[357]; ?>"></td>
            <td><input class="span2" name="Data[358]" type="text" value="<?php echo $Data[358]; ?>"></td>
            <td><input class="span2" name="Data[359]" type="text" value="<?php echo $Data[359]; ?>"></td>
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
            <td><input class="span2" name="Data[360]" type="text" value="<?php echo $Data[360]; ?>"></td>
            <td><input class="span2" name="Data[361]" type="text" value="<?php echo $Data[361]; ?>"></td>
            <td><input class="span2" name="Data[362]" type="text" value="<?php echo $Data[362]; ?>"></td>
            <td><input class="span2" name="Data[363]" type="text" value="<?php echo $Data[363]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">5.2 เคลื่อนที่</th>
            <td><input class="span2" name="Data[364]" type="text" value="<?php echo $Data[364]; ?>"></td>
            <td><input class="span2" name="Data[365]" type="text" value="<?php echo $Data[365]; ?>"></td>
            <td><input class="span2" name="Data[366]" type="text" value="<?php echo $Data[366]; ?>"></td>
            <td><input class="span2" name="Data[367]" type="text" value="<?php echo $Data[367]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">5.3 อื่นๆ <input class="span4" name="Data[186]" type="text" value="<?php echo $Data[186]; ?>"></th>
            <td><input class="span2" name="Data[368]" type="text" value="<?php echo $Data[368]; ?>"></td>
            <td><input class="span2" name="Data[369]" type="text" value="<?php echo $Data[369]; ?>"></td>
            <td><input class="span2" name="Data[370]" type="text" value="<?php echo $Data[370]; ?>"></td>
            <td><input class="span2" name="Data[371]" type="text" value="<?php echo $Data[371]; ?>"></td>
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
            <td><input class="span2" name="Data[372]" type="text" value="<?php echo $Data[372]; ?>"></td>
            <td><input class="span2" name="Data[373]" type="text" value="<?php echo $Data[373]; ?>"></td>
            <td><input class="span2" name="Data[374]" type="text" value="<?php echo $Data[374]; ?>"></td>
            <td><input class="span2" name="Data[375]" type="text" value="<?php echo $Data[375]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">6.2 เด็ก</th>
            <td><input class="span2" name="Data[376]" type="text" value="<?php echo $Data[376]; ?>"></td>
            <td><input class="span2" name="Data[377]" type="text" value="<?php echo $Data[377]; ?>"></td>
            <td><input class="span2" name="Data[378]" type="text" value="<?php echo $Data[378]; ?>"></td>
            <td><input class="span2" name="Data[379]" type="text" value="<?php echo $Data[379]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">6.3 อื่นๆ <input class="span4" name="Data[380]" type="text" value="<?php echo $Data[380]; ?>"></th>
            <td><input class="span2" name="Data[381]" type="text" value="<?php echo $Data[381]; ?>"></td>
            <td><input class="span2" name="Data[382]" type="text" value="<?php echo $Data[382]; ?>"></td>
            <td><input class="span2" name="Data[383]" type="text" value="<?php echo $Data[383]; ?>"></td>
            <td><input class="span2" name="Data[384]" type="text" value="<?php echo $Data[384]; ?>"></td>
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
            <td><input class="span2" name="Data[385]" type="text" value="<?php echo $Data[385]; ?>"></td>
            <td><input class="span2" name="Data[386]" type="text" value="<?php echo $Data[386]; ?>"></td>
            <td><input class="span2" name="Data[387]" type="text" value="<?php echo $Data[387]; ?>"></td>
            <td><input class="span2" name="Data[388]" type="text" value="<?php echo $Data[388]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">7.2 ขนาดกลาง 21-500 กิโลวัตต์</th>
            <td><input class="span2" name="Data[389]" type="text" value="<?php echo $Data[389]; ?>"></td>
            <td><input class="span2" name="Data[390]" type="text" value="<?php echo $Data[390]; ?>"></td>
            <td><input class="span2" name="Data[391]" type="text" value="<?php echo $Data[391]; ?>"></td>
            <td><input class="span2" name="Data[392]" type="text" value="<?php echo $Data[392]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">7.3 ขนาดใหญ่ >500 กิโลวัตต์</th>
            <td><input class="span2" name="Data[393]" type="text" value="<?php echo $Data[393]; ?>"></td>
            <td><input class="span2" name="Data[394]" type="text" value="<?php echo $Data[394]; ?>"></td>
            <td><input class="span2" name="Data[395]" type="text" value="<?php echo $Data[395]; ?>"></td>
            <td><input class="span2" name="Data[396]" type="text" value="<?php echo $Data[396]; ?>"></td>
          </tr>   
          <tr>
            <th class="indent">7.4 อื่นๆ <input class="span4" name="Data[397]" type="text" value="<?php echo $Data[397]; ?>"></th>
            <td><input class="span2" name="Data[398]" type="text" value="<?php echo $Data[398]; ?>"></td>
            <td><input class="span2" name="Data[399]" type="text" value="<?php echo $Data[399]; ?>"></td>
            <td><input class="span2" name="Data[400]" type="text" value="<?php echo $Data[400]; ?>"></td>
            <td><input class="span2" name="Data[401]" type="text" value="<?php echo $Data[401]; ?>"></td>
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
            <td><input class="span2" name="Data[402]" type="text" value="<?php echo $Data[402]; ?>"></td>
            <td><input class="span2" name="Data[403]" type="text" value="<?php echo $Data[403]; ?>"></td>
            <td><input class="span2" name="Data[404]" type="text" value="<?php echo $Data[404]; ?>"></td>
            <td><input class="span2" name="Data[405]" type="text" value="<?php echo $Data[405]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">8.2 ขนาดกลาง 21-500 กิโลวัตต์</th>
            <td><input class="span2" name="Data[406]" type="text" value="<?php echo $Data[406]; ?>"></td>
            <td><input class="span2" name="Data[407]" type="text" value="<?php echo $Data[407]; ?>"></td>
            <td><input class="span2" name="Data[408]" type="text" value="<?php echo $Data[408]; ?>"></td>
            <td><input class="span2" name="Data[409]" type="text" value="<?php echo $Data[409]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">8.3 ขนาดใหญ่ >500 กิโลวัตต์</th>
            <td><input class="span2" name="Data[410]" type="text" value="<?php echo $Data[410]; ?>"></td>
            <td><input class="span2" name="Data[411]" type="text" value="<?php echo $Data[411]; ?>"></td>
            <td><input class="span2" name="Data[412]" type="text" value="<?php echo $Data[412]; ?>"></td>
            <td><input class="span2" name="Data[413]" type="text" value="<?php echo $Data[413]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">8.4 อื่นๆ <input class="span4" name="Data[414]" type="text" value="<?php echo $Data[414]; ?>"></th>
            <td><input class="span2" name="Data[415]" type="text" value="<?php echo $Data[415]; ?>"></td>
            <td><input class="span2" name="Data[416]" type="text" value="<?php echo $Data[416]; ?>"></td>
            <td><input class="span2" name="Data[417]" type="text" value="<?php echo $Data[417]; ?>"></td>
            <td><input class="span2" name="Data[418]" type="text" value="<?php echo $Data[418]; ?>"></td>
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
            <td><input class="span2" name="Data[419]" type="text" value="<?php echo $Data[419]; ?>"></td>
            <td><input class="span2" name="Data[420]" type="text" value="<?php echo $Data[420]; ?>"></td>
            <td><input class="span2" name="Data[421]" type="text" value="<?php echo $Data[421]; ?>"></td>
            <td><input class="span2" name="Data[422]" type="text" value="<?php echo $Data[422]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">9.2 วิทยุแดง</th>
            <td><input class="span2" name="Data[423]" type="text" value="<?php echo $Data[423]; ?>"></td>
            <td><input class="span2" name="Data[424]" type="text" value="<?php echo $Data[424]; ?>"></td>
            <td><input class="span2" name="Data[425]" type="text" value="<?php echo $Data[425]; ?>"></td>
            <td><input class="span2" name="Data[426]" type="text" value="<?php echo $Data[426]; ?>"></td>
          </tr>        
          <tr>
            <th class="indent">9.3 อื่นๆ <input class="span4" name="Data[427]" type="text" value="<?php echo $Data[427]; ?>"></th>
            <td><input class="span2" name="Data[428]" type="text" value="<?php echo $Data[428]; ?>"></td>
            <td><input class="span2" name="Data[429]" type="text" value="<?php echo $Data[429]; ?>"></td>
            <td><input class="span2" name="Data[430]" type="text" value="<?php echo $Data[430]; ?>"></td>
            <td><input class="span2" name="Data[431]" type="text" value="<?php echo $Data[431]; ?>"></td>
          </tr>
          <tr>
            <th>10. เชือกกู้ภัย</th>
            <td><input class="span2" name="Data[432]" type="text" value="<?php echo $Data[432]; ?>"></td>
            <td><input class="span2" name="Data[433]" type="text" value="<?php echo $Data[433]; ?>"></td>
            <td><input class="span2" name="Data[434]" type="text" value="<?php echo $Data[434]; ?>"></td>
            <td><input class="span2" name="Data[435]" type="text" value="<?php echo $Data[435]; ?>"></td>
          </tr>
          <tr>
            <th>11. เลื่อยยนต์</th>
            <td><input class="span2" name="Data[436]" type="text" value="<?php echo $Data[436]; ?>"></td>
            <td><input class="span2" name="Data[437]" type="text" value="<?php echo $Data[437]; ?>"></td>
            <td><input class="span2" name="Data[438]" type="text" value="<?php echo $Data[438]; ?>"></td>
            <td><input class="span2" name="Data[439]" type="text" value="<?php echo $Data[439]; ?>"></td>
          </tr>            
        </tbody>
      </table>
      
      <h3>4.2 ด้านสถานที่</h3>
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
            <td><input class="span2" name="Data[440]" type="text" value="<?php echo $Data[440]; ?>"></td>
            <td><input class="span2" name="Data[441]" type="text" value="<?php echo $Data[441]; ?>"></td>
            <td><input class="span2" name="Data[442]" type="text" value="<?php echo $Data[442]; ?>"></td>
            <td><input class="span2" name="Data[443]" type="text" value="<?php echo $Data[443]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ความจุของศูนย์จำนวน 50 - 100 คน </th>
            <td><input class="span2" name="Data[444]" type="text" value="<?php echo $Data[444]; ?>"></td>
            <td><input class="span2" name="Data[445]" type="text" value="<?php echo $Data[445]; ?>"></td>
            <td><input class="span2" name="Data[446]" type="text" value="<?php echo $Data[446]; ?>"></td>
            <td><input class="span2" name="Data[447]" type="text" value="<?php echo $Data[447]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ความจุของศูนย์จำนวน  100-200 คน</th>
            <td><input class="span2" name="Data[448]" type="text" value="<?php echo $Data[448]; ?>"></td>
            <td><input class="span2" name="Data[449]" type="text" value="<?php echo $Data[449]; ?>"></td>
            <td><input class="span2" name="Data[450]" type="text" value="<?php echo $Data[450]; ?>"></td>
            <td><input class="span2" name="Data[451]" type="text" value="<?php echo $Data[451]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">1.4 ความจุของศูนย์จำนวน  > 200 คน</th>
            <td><input class="span2" name="Data[452]" type="text" value="<?php echo $Data[452]; ?>"></td>
            <td><input class="span2" name="Data[453]" type="text" value="<?php echo $Data[453]; ?>"></td>
            <td><input class="span2" name="Data[454]" type="text" value="<?php echo $Data[454]; ?>"></td>
            <td><input class="span2" name="Data[455]" type="text" value="<?php echo $Data[455]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">1.5 อื่นๆ <input class="span4" name="Data[456]" type="text" value="<?php echo $Data[456]; ?>"></th>
            <td><input class="span2" name="Data[457]" type="text" value="<?php echo $Data[457]; ?>"></td>
            <td><input class="span2" name="Data[458]" type="text" value="<?php echo $Data[458]; ?>"></td>
            <td><input class="span2" name="Data[459]" type="text" value="<?php echo $Data[459]; ?>"></td>
            <td><input class="span2" name="Data[460]" type="text" value="<?php echo $Data[460]; ?>"></td>
          </tr> 
          <tr>
            <th>2. บ้านน็อคดาวน์</th>
            <td><input class="span2" name="Data[461]" type="text" value="<?php echo $Data[461]; ?>"></td>
            <td><input class="span2" name="Data[462]" type="text" value="<?php echo $Data[462]; ?>"></td>
            <td><input class="span2" name="Data[463]" type="text" value="<?php echo $Data[463]; ?>"></td>
            <td><input class="span2" name="Data[464]" type="text" value="<?php echo $Data[464]; ?>"></td>
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
            <td><input class="span2" name="Data[465]" type="text" value="<?php echo $Data[465]; ?>"></td>
            <td><input class="span2" name="Data[466]" type="text" value="<?php echo $Data[466]; ?>"></td>
            <td><input class="span2" name="Data[467]" type="text" value="<?php echo $Data[467]; ?>"></td>
            <td><input class="span2" name="Data[468]" type="text" value="<?php echo $Data[468]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">3.2 เต็นท์ที่พักอาศัยชั่วคราว</th>
            <td><input class="span2" name="Data[469]" type="text" value="<?php echo $Data[469]; ?>"></td>
            <td><input class="span2" name="Data[470]" type="text" value="<?php echo $Data[470]; ?>"></td>
            <td><input class="span2" name="Data[471]" type="text" value="<?php echo $Data[471]; ?>"></td>
            <td><input class="span2" name="Data[472]" type="text" value="<?php echo $Data[472]; ?>"></td>
          </tr> 
          <tr>
            <th class="indent">3.3 เต็นท์ยกพื้น (ใช้สำหรับพื้นที่ที่มีน้ำท่วมขังเล็กน้อย)</th>
            <td><input class="span2" name="Data[473]" type="text" value="<?php echo $Data[473]; ?>"></td>
            <td><input class="span2" name="Data[474]" type="text" value="<?php echo $Data[474]; ?>"></td>
            <td><input class="span2" name="Data[475]" type="text" value="<?php echo $Data[475]; ?>"></td>
            <td><input class="span2" name="Data[476]" type="text" value="<?php echo $Data[476]; ?>"></td>
          </tr> 
        </tbody>
      </table>
      
      <h3>4.3 ด้านอาหาร/ยารักษาโรค/เครื่องนุ่งห่ม</h3>
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
            <td><input class="span4" name="Data[477]" type="text" value="<?php echo $Data[477]; ?>"></td>
            <td><input class="span4" name="Data[478]" type="text" value="<?php echo $Data[478]; ?>"></td>
            <td><input class="span4" name="Data[479]" type="text" value="<?php echo $Data[479]; ?>"></td>
            <td><input class="span2" name="Data[480]" type="text" value="<?php echo $Data[480]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ร้านขายของใช้และอาหารแห้ง(ซูปเปอร์มาร์เก็ต โชห่วย)</th>
            <td><input class="span4" name="Data[481]" type="text" value="<?php echo $Data[481]; ?>"></td>
            <td><input class="span4" name="Data[482]" type="text" value="<?php echo $Data[482]; ?>"></td>
            <td><input class="span4" name="Data[483]" type="text" value="<?php echo $Data[483]; ?>"></td>
            <td><input class="span2" name="Data[484]" type="text" value="<?php echo $Data[484]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ครัวเคลื่อนที่</th>
            <td><input class="span4" name="Data[485]" type="text" value="<?php echo $Data[485]; ?>"></td>
            <td><input class="span4" name="Data[486]" type="text" value="<?php echo $Data[486]; ?>"></td>
            <td><input class="span4" name="Data[487]" type="text" value="<?php echo $Data[487]; ?>"></td>
            <td><input class="span2" name="Data[488]" type="text" value="<?php echo $Data[488]; ?>"></td>
          </tr>    
          <tr>
            <th class="indent">1.4 เชื้อเพลิงที่ใช้ในการทำอาหาร</th>
            <td><input class="span4" name="Data[489]" type="text" value="<?php echo $Data[489]; ?>"></td>
            <td><input class="span4" name="Data[490]" type="text" value="<?php echo $Data[490]; ?>"></td>
            <td><input class="span4" name="Data[491]" type="text" value="<?php echo $Data[491]; ?>"></td>
            <td><input class="span2" name="Data[492]" type="text" value="<?php echo $Data[492]; ?>"></td>
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
            <td><input class="span4" name="Data[493]" type="text" value="<?php echo $Data[493]; ?>"></td>
            <td><input class="span4" name="Data[494]" type="text" value="<?php echo $Data[494]; ?>"></td>
            <td><input class="span4" name="Data[495]" type="text" value="<?php echo $Data[495]; ?>"></td>
            <td><input class="span2" name="Data[496]" type="text" value="<?php echo $Data[496]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 อุปโภค</th>
            <td><input class="span4" name="Data[497]" type="text" value="<?php echo $Data[497]; ?>"></td>
            <td><input class="span4" name="Data[498]" type="text" value="<?php echo $Data[498]; ?>"></td>
            <td><input class="span4" name="Data[499]" type="text" value="<?php echo $Data[499]; ?>"></td>
            <td><input class="span2" name="Data[500]" type="text" value="<?php echo $Data[500]; ?>"></td>
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
            <td><input class="span4" name="Data[501]" type="text" value="<?php echo $Data[501]; ?>"></td>
            <td><input class="span4" name="Data[502]" type="text" value="<?php echo $Data[502]; ?>"></td>
            <td><input class="span4" name="Data[503]" type="text" value="<?php echo $Data[503]; ?>"></td>
            <td><input class="span2" name="Data[504]" type="text" value="<?php echo $Data[504]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 บริการเคลื่อนที่ (ระบุโดยหน่วยงาน <input class="span3" name="Data[505]" type="text" value="<?php echo $Data[505]; ?>">)</th>
            <td><input class="span4" name="Data[506]" type="text" value="<?php echo $Data[506]; ?>"></td>
            <td><input class="span4" name="Data[507]" type="text" value="<?php echo $Data[507]; ?>"></td>
            <td><input class="span4" name="Data[508]" type="text" value="<?php echo $Data[508]; ?>"></td>
            <td><input class="span2" name="Data[509]" type="text" value="<?php echo $Data[509]; ?>"></td>
          </tr>   
          <tr>
            <th class="indent">3.3 สถานีอนามัย/รพ.สต.</th>
            <td><input class="span4" name="Data[510]" type="text" value="<?php echo $Data[510]; ?>"></td>
            <td><input class="span4" name="Data[511]" type="text" value="<?php echo $Data[511]; ?>"></td>
            <td><input class="span4" name="Data[512]" type="text" value="<?php echo $Data[512]; ?>"></td>
            <td><input class="span2" name="Data[513]" type="text" value="<?php echo $Data[513]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.4 คลิกนิค/ร้านขายยา (ระบุจำนวน <input class="span1" name="Data[514]" type="text" value="<?php echo $Data[514]; ?>"> ร้าน)</th>
            <td><input class="span4" name="Data[515]" type="text" value="<?php echo $Data[515]; ?>"></td>
            <td><input class="span4" name="Data[516]" type="text" value="<?php echo $Data[516]; ?>"></td>
            <td><input class="span4" name="Data[517]" type="text" value="<?php echo $Data[517]; ?>"></td>
            <td><input class="span2" name="Data[518]" type="text" value="<?php echo $Data[518]; ?>"></td>
          </tr>   
           <tr>
            <th class="indent">3.5 ศูนย์บริการสาธารณะสุข</th>
            <td><input class="span4" name="Data[519]" type="text" value="<?php echo $Data[519]; ?>"></td>
            <td><input class="span4" name="Data[520]" type="text" value="<?php echo $Data[520]; ?>"></td>
            <td><input class="span4" name="Data[521]" type="text" value="<?php echo $Data[521]; ?>"></td>
            <td><input class="span2" name="Data[522]" type="text" value="<?php echo $Data[522]; ?>"></td>
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
            <td><input class="span4" name="Data[523]" type="text" value="<?php echo $Data[523]; ?>"></td>
            <td><input class="span4" name="Data[524]" type="text" value="<?php echo $Data[524]; ?>"></td>
            <td><input class="span4" name="Data[525]" type="text" value="<?php echo $Data[525]; ?>"></td>
            <td><input class="span2" name="Data[526]" type="text" value="<?php echo $Data[526]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 ผ้าห่มและเครื่องนอน</th>
            <td><input class="span4" name="Data[527]" type="text" value="<?php echo $Data[527]; ?>"></td>
            <td><input class="span4" name="Data[528]" type="text" value="<?php echo $Data[528]; ?>"></td>
            <td><input class="span4" name="Data[529]" type="text" value="<?php echo $Data[529]; ?>"></td>
            <td><input class="span2" name="Data[530]" type="text" value="<?php echo $Data[530]; ?>"></td>
          </tr>     
          <tr>
            <th>5. ภูมิปัญญาท้องถิ่นที่สนับสนุน</th>
            <td><input class="span4" name="Data[531]" type="text" value="<?php echo $Data[531]; ?>"></td>
            <td><input class="span4" name="Data[532]" type="text" value="<?php echo $Data[532]; ?>"></td>
            <td><input class="span4" name="Data[533]" type="text" value="<?php echo $Data[533]; ?>"></td>
            <td><input class="span2" name="Data[534]" type="text" value="<?php echo $Data[534]; ?>"></td>
          </tr>
        </tbody>
      </table>      

      <h3>4.4 กิจกรรมที่ชุมชนคาดว่าจะทำแผนเพื่อขอรับการสนับสนุนจากเครือข่าย</h3>
        <table class="bordered-table">
        <thead>
          <tr>
            <th >กิจกรรม</th>
            <th>กิจกรรมที่ชุมชนสามารถดำเนินการเองได้</th>
            <th>กิจกรรมที่ต้องการขอรับการสนับสนุน</th>
            <th>สิ่งที่ขอรับการสนับสนุน(กรุณาเขียนระบุ)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. กิจกรรมการทำความสะอาดพื้นที่ (Big Cleaning Day)</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[535]" <?php if ($Data[535] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[536]" <?php if ($Data[536] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[537]" type="text" value="<?php echo $Data[537]; ?>"></td>
          </tr>          
          <tr>
            <th>2. กิจกรรมการฝึกอบรบการผลิตน้ำหมักจุลินทรีย์ (EM)</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[538]" <?php if ($Data[538] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[539]" <?php if ($Data[539] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[540]" type="text" value="<?php echo $Data[540]; ?>"></td>
          </tr>        
          <tr>
            <th>3. กิจกรรมการฝึกอบรมอาชีพ</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[541]" <?php if ($Data[541] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[542]" <?php if ($Data[542] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[543]" type="text" value="<?php echo $Data[543]; ?>"></td>
          </tr>  
          <tr>
            <th>4. กิจกรรมการจัดหาอาชีพเสริม</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[544]" <?php if ($Data[544] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[545]" <?php if ($Data[545] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[546]" type="text" value="<?php echo $Data[546]; ?>"></td>
          </tr>        
          <tr>
            <th>5. กิจกรรมการฟื้นฟูพื้นที่เกษตรกรรมขนาดเล็ก</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[547]"<?php if ($Data[547] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[548]" <?php if ($Data[548] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[549]" type="text" value="<?php echo $Data[549]; ?>"></td>
          </tr>  
          <tr>
            <th>6. การดูแลผู้ป่วย/ผู้พิการ</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[550]" <?php if ($Data[550] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[551]" <?php if ($Data[551] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[552]" type="text" value="<?php echo $Data[552]; ?>"></td>
          </tr>        
          <tr>
            <th>7. การดูแลสัตว์เลี้ยง</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[553]" <?php if ($Data[553] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[554]" <?php if ($Data[554] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[555]" type="text" value="<?php echo $Data[555]; ?>"></td>
          </tr>  
          <tr>
            <th>8. การจัดการบ้าน/ที่พักอาศัย</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[556]" <?php if ($Data[556] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[557]" <?php if ($Data[557] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[558]]" type="text" value="<?php echo $Data[558]; ?>"></td>
          </tr>  
          <tr>
            <th>9. อื่นๆ ระบุ <input class="span3" name="Data[559]" type="text" value="<?php echo $Data[559]; ?>"></th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[560]" <?php if ($Data[560] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[561]" <?php if ($Data[561] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[562]" type="text" value="<?php echo $Data[562]; ?>"></td>
          </tr>  
        </tbody>
      </table>      
      </fidldset> <!-- /end ส่วนที่ 3 ศักยภาพและความต้องการของพื้นที่ -->
  
  
