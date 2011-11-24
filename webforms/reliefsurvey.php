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
      <?php $this->widget('ext.location.LocationWidget', array('model' => $model, 'attribute' => 'location_id0')); ?>
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
			<input class="span2"  name="Data[2]" type="text"  placeholder="" value="<?php echo $Data[2]; ?>">
			<label class="no-float">ตําบล</label>
			<input class="span2"  name="Data[3]" type="text"  placeholder="" value="<?php echo $Data[3]; ?>">
		</div>
		<div class="clearfix">
			<label class="no-float">อําเภอ</label>
			<input class="span2"  name="Data[4]" type="text"  placeholder="" value="<?php echo $Data[4]; ?>">
			<label class="no-float">จังหวัด</label>
			<input class="span2"  name="Data[5]" type="text"  placeholder="" value="<?php echo $Data[5]; ?>">
			<label class="no-float">โทรศัพท</label>
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
			    <input class="xlarge"  name="Data[8]" size="30" type="text" value="<?php echo $Data[8]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
				<label class="no-float">1.2 ประชากรปัจจุบันทั้งหมดโดยประมาณ</label>
				<input class="span2"  name="Data[9]" type="text"  placeholder="" value="<?php echo $Data[9]; ?>">
				<label class="no-float">ชาย</label>
				<input class="span2"  name="Data[10]" type="text"  placeholder="" value="<?php echo $Data[10]; ?>">
				<label class="no-float">หญิง</label>
				<input class="span2"  name="Data[11]" type="text"  placeholder="" value="<?php echo $Data[11]; ?>">
			</div>
			<div class="clearfix">
				<label class="no-float">โดยเฉลี่ยครัวเรือนละ/คน</label>
				<input class="span2"  name="Data[12]" type="text"  placeholder="" value="<?php echo $Data[12]; ?>">
				<label class="no-float">มีประชากรแฝง/คน</label>
				<input class="span2"  name="Data[13]" type="text" placeholder="" value="<?php echo $Data[13]; ?>">
			</div>
			<div class="clearfix">
				<label class="no-float">1.3 การนับถือศาสนา พุทธ(ร้อยละ)</label>
				<input class="span2"  name="Data[14]" type="text"  placeholder="" value="<?php echo $Data[14]; ?>">
				<label class="no-float">อิสลาม(ร้อยละ)</label>
				<input class="span2"  name="Data[15]" type="text"  placeholder="" value="<?php echo $Data[15]; ?>">
				<label class="no-float">คริสต์(ร้อยละ)</label>
				<input class="span2"  name="Data[16]" type="text"  placeholder="" value="<?php echo $Data[16]; ?>">
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
      <h3>ระดับตําบล</h3>
			<table class="bordered-table">
        <thead>
          <tr>
            <th>#</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ตําแหน่ง</th>
            <th>เบอร์โทร</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td><input class="span4"  name="Data[19]" type="text" placeholder="" value="<?php echo $Data[19]; ?>"></td>
            <td><input class="span4"  name="Data[20]" type="text" placeholder="" value="<?php echo $Data[20]; ?>"></td>
            <td><input class="span4"  name="Data[215]" type="text" placeholder="" value="<?php echo $Data[215]; ?>"></td>
          </tr>
          <tr>
            <th>2</th>
            <td><input class="span4"  name="Data[21]" type="text" placeholder="" value="<?php echo $Data[21]; ?>"></td>
            <td><input class="span4"  name="Data[22]" type="text" placeholder="" value="<?php echo $Data[22]; ?>"></td>
            <td><input class="span4"  name="Data[23]" type="text" placeholder="" value="<?php echo $Data[23]; ?>"></td>
          </tr>
          <tr>
            <th>3</th>
            <td><input class="span4"  name="Data[24]" type="text" placeholder="" value="<?php echo $Data[24]; ?>"></td>
            <td><input class="span4"  name="Data[25]" type="text" placeholder="" value="<?php echo $Data[25]; ?>"></td>
            <td><input class="span4"  name="Data[26]" type="text" placeholder="" value="<?php echo $Data[26]; ?>"></td>
          </tr>
        </tbody>
      </table>
      
      <h3>ระดับหมู่บ้ําน</h3>
			<table class="bordered-table">
        <thead>
          <tr>
            <th>#</th>
            <th>หมู่ที่</th>
            <th>ชื่อหมู่บ้าน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ตําแหน่ง</th>
            <th>เบอร์โทร</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td><input class="span2"  name="Data[27]" type="text" placeholder="" value="<?php echo $Data[27]; ?>"></td>
            <td><input class="span2"  name="Data[28]" type="text" placeholder="" value="<?php echo $Data[28]; ?>"></td>
            <td><input class="span4"  name="Data[29]" type="text" placeholder="" value="<?php echo $Data[29]; ?>"></td>
            <td><input class="span4"  name="Data[30]" type="text" placeholder="" value="<?php echo $Data[30]; ?>"></td>
            <td><input class="span4"  name="Data[31]" type="text" placeholder="" value="<?php echo $Data[31]; ?>"></td>
          </tr>
          <tr>
            <th>2</th>
            <td><input class="span2"  name="Data[32]" type="text" placeholder="" value="<?php echo $Data[32]; ?>"></td>
            <td><input class="span2"  name="Data[33]" type="text" placeholder="" value="<?php echo $Data[33]; ?>"></td>
            <td><input class="span4"  name="Data[34]" type="text" placeholder="" value="<?php echo $Data[34]; ?>"></td>
            <td><input class="span4"  name="Data[35]" type="text" placeholder="" value="<?php echo $Data[35]; ?>"></td>
            <td><input class="span4"  name="Data[36]" type="text" placeholder="" value="<?php echo $Data[36]; ?>"></td>
          </tr>
          <tr>
            <th>3</th>
            <td><input class="span2"  name="Data[37]" type="text" placeholder="" value="<?php echo $Data[37]; ?>"></td>
            <td><input class="span2"  name="Data[38]" type="text" placeholder="" value="<?php echo $Data[38]; ?>"></td>
            <td><input class="span4"  name="Data[39]" type="text" placeholder="" value="<?php echo $Data[39]; ?>"></td>
            <td><input class="span4"  name="Data[40]" type="text" placeholder="" value="<?php echo $Data[40]; ?>"></td>
            <td><input class="span4"  name="Data[41]" type="text" placeholder="" value="<?php echo $Data[41]; ?>"></td>
          </tr>
        </tbody>
      </table>
  </fieldset>
  <br/><br/>
  
  
<!--       ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู -->
  <fieldset>
      <legend>ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู</legend>
      <h3>3.1 ความเสยี หายต่อชีวิตและความปลอดภัย</h3>
      <h4>3.1.1 ผู้เสียชีวิต สูญหาย บาดเจ็บ</h4>
      <table class="bordered-table">
        <thead>
          <tr>
            <th>ประเภท</th>
            <th>จํานวน</th>
            <th>สาเหตุหลัก</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>เสียชีวิต</th>
            <td><input class="span4"  name="Data[42]" type="text" placeholder="" value="<?php echo $Data[42]; ?>"></td>
            <td><input class="span4"  name="Data[43]" type="text" placeholder="" value="<?php echo $Data[43]; ?>"></td>
          </tr>
          <tr>
            <th>สูญหาย</th>
            <td><input class="span4"  name="Data[44]" type="text" placeholder="" value="<?php echo $Data[44]; ?>"></td>
            <td><input class="span4"  name="Data[45]" type="text" placeholder="" value="<?php echo $Data[45]; ?>"></td>
          </tr>
          <tr>
            <th>บาดเจ็บ</th>
            <td><input class="span4"  name="Data[46]" type="text" placeholder="" value="<?php echo $Data[46]; ?>"></td>
            <td><input class="span4"  name="Data[47]" type="text" placeholder="" value="<?php echo $Data[47]; ?>"></td>
          </tr>
        </tbody>
      </table>
      
      <h4>3.1.2 ปัยจัยเสี่ยงต่อความปลอดภัย</h4>
      <div class="clearfix">
			  <label id="optionsRadio">โจรกรรม</label>
	        <label>
	          <input type="radio" <?php if ($Data[48] == 'มี'): ?> checked="checked" <?php endif; ?> name="Data[48]" value="มี">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" <?php if ($Data[48] == 'ไม่มี'): ?> checked="checked" <?php endif; ?> name="Data[48]" value="ไม่มี">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">โจรกรรม</label>
	        <label>
	          <input type="radio" <?php if ($Data[49] == 'มี'): ?> checked="checked" <?php endif; ?>  name="Data[49]" value="มี">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" <?php if ($Data[49] == 'ไม่มี'): ?> checked="checked" <?php endif; ?>   name="Data[49]" value="ไม่มี">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">สัตว์ร้าย</label>
	        <label>
	          <input type="radio" <?php if ($Data[50] == 'มี'): ?> checked="checked" <?php endif; ?>  name="Data[50]" value="มี">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" <?php if ($Data[50] == 'ไม่มี'): ?> checked="checked" <?php endif; ?>  name="Data[50]" value="ไม่มี">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">ไฟฟ้า</label>
	        <label>
	          <input type="radio" <?php if ($Data[51] == 'มี'): ?> checked="checked" <?php endif; ?>  name="Data[51]" value="มี">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" <?php if ($Data[51] == 'ไม่มี'): ?> checked="checked" <?php endif; ?>  name="Data[51]" value="ไม่มี">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">ดินไหล/ถล่ม</label>
	        <label>
	          <input type="radio" <?php if ($Data[52] == 'มี'): ?> checked="checked" <?php endif; ?>  name="Data[52]" value="มี">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" <?php if ($Data[52] == 'ไม่มี'): ?> checked="checked" <?php endif; ?>  name="Data[52]" value="ไม่มี">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label for="xlInput">อ่ืน	ๆ โปรดระบ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[53]" size="30" type="text" value="<?php echo $Data[53]; ?>">
			  </div>
			</div><!-- /clearfix -->
  
  
  
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
		<input class="span2"  name="Data[57]" type="text"  value="" placeholder="" value="<?php echo $Data[57]; ?>">
	</div>
	
	
  <div class="clearfix">
<!-- 			  <label id="optionsRadio">List of ....</label> -->
	  <div class="input">
	    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[58] == '1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสีย หายบางส่วน'): ?> checked="checked" <?php endif; ?>  name="Data[58]" value="1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสีย หายบางส่วน">
	          <span>1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสีย หายบางส่วน</span>
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
	          <span>5) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 50% ของชุมชน</span>
	        </label>
	      </li>
	    </ul>
	  </div>
	</div>
  
  
  <h3>3.2 สุขภาพ</h3>
  <h4>3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้</h4>
  <div class="clearfix">
		<label class="no-float">คนพิการ</label>
		<input class="span2"  name="Data[59]" type="text"  placeholder="" value="<?php echo $Data[59]; ?>" >
		<label class="no-float">ผู้สูงอายุ</label>
		<input class="span2"  name="Data[60]" type="text"  placeholder="" value="<?php echo $Data[60]; ?>" >
		<label class="no-float">ผู้ป่วย</label>
		<input class="span2"  name="Data[61]" type="text"  placeholder="" value="<?php echo $Data[61]; ?>" >
	</div>
  
  
  <h4>3.2.2 ตรวจพบโรคระบาดในพื้นที่ในช่วงภัยพิบัติ</h4>
  <table class="bordered-table">
    <thead>
      <tr>
        <th>พื้นที่</th>
        <th>โรค</th>
        <th>จํานวนผู้่ป่วย</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><input class="span7"  name="Data[62]" type="text" placeholder="" value="<?php echo $Data[62]; ?>" ></th>
        <td><input class="span5"  name="Data[63]" type="text" placeholder="" value="<?php echo $Data[63]; ?>" ></td>
        <td><input class="span4"  name="Data[64]" type="text" placeholder="" value="<?php echo $Data[64]; ?>" ></td>
      </tr>
      <tr>
        <th><input class="span7"  name="Data[65]" type="text" placeholder="" value="<?php echo $Data[65]; ?>" ></th>
        <td><input class="span5"  name="Data[66]" type="text" placeholder="" value="<?php echo $Data[66]; ?>" ></td>
        <td><input class="span4"  name="Data[67]" type="text" placeholder="" value="<?php echo $Data[67]; ?>" ></td>
      </tr>
      <tr>
        <th><input class="span7"  name="Data[68]" type="text" placeholder="" value="<?php echo $Data[68]; ?>" ></th>
        <td><input class="span5"  name="Data[69]" type="text" placeholder="" value="<?php echo $Data[69]; ?>" ></td>
        <td><input class="span4"  name="Data[70]" type="text" placeholder="" value="<?php echo $Data[70]; ?>" ></td>
      </tr>
    </tbody>
  </table>
  
  
  <h4>3.2.3 ความลําบากในการเข้าถึงบรกิารทางแพทย์ (1น้อยทีสุ่ด–5มากท่ีสุด)</h4>
  <h5>พื้นท่ีที่เข้าถงึบรกิารทางการแพทย์ยากลําบากที่สดุคือ</h5>
  <div class="clearfix">
	    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[71] == '1) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา น้อยกว่า 1 ชม.'): ?> checked="checked" <?php endif; ?> name="Data[71]" value="1) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา น้อยกว่า 1 ชม.">
	          <span>1) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา น้อยกว่า 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[71] == '2) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.'): ?> checked="checked" <?php endif; ?> name="Data[71]" value="2) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.">
	          <span>2) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[71] == '3) มีหน่วย พยาบาลใน พื้นที่ การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.'): ?> checked="checked" <?php endif; ?>  name="Data[71]" value="3) มีหน่วย พยาบาลใน พื้นที่ การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.">
	          <span>3) มีหน่วย พยาบาลใน พื้นที่ การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[71] == '4) มีหน่วยพยาบาล ในพนื้ ที่การเดิน ทางถึงโรง พยาบาลใช้เวลา เกิน 1 ชม.'): ?> checked="checked" <?php endif; ?>  name="Data[71]" value="4) มีหน่วยพยาบาล ในพนื้ ที่การเดิน ทางถึงโรง พยาบาลใช้เวลา เกิน 1 ชม.">
	          <span>4) มีหน่วยพยาบาล ในพนื้ ที่การเดิน ทางถึงโรง พยาบาลใช้เวลา เกิน 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[71] == '5) ไม่มีหน่วย พยาบาลในพื้นที่ การเดินทางถึง โรงพยาบาลใช้ เวลาเกิน 1 ชม.'): ?> checked="checked" <?php endif; ?>  name="Data[71]" value="5) ไม่มีหน่วย พยาบาลในพื้นที่ การเดินทางถึง โรงพยาบาลใช้ เวลาเกิน 1 ชม.">
	          <span>5) ไม่มีหน่วย พยาบาลในพื้นที่ การเดินทางถึง โรงพยาบาลใช้ เวลาเกิน 1 ชม.</span>
	        </label>
	      </li>
	    </ul>
	  </div>
	  
	  
	  <h4>3.2.4 ระดับความเครียด และความกังวลของคนในชุมชน (1น้อยที่สุด – 5 มากที่สุด)</h4>
    <h5>พ้ืนที่ที่ประชาชนมีภาวะความเครียดมากท่ีสุดคือ</h5>
    <div class="clearfix">
		    <ul class="inputs-list">
		      <li>
		        <label>
		          <input type="radio" <?php if ($Data[72] == '1) ไม่พบประชาชนมี ภาวะความเครียด'): ?> checked="checked" <?php endif; ?>  name="Data[72]" value="1) ไม่พบประชาชนมี ภาวะความเครียด">
		          <span>1) ไม่พบประชาชนมี ภาวะความเครียด</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" <?php if ($Data[72] == '2) มีพบประชาชนมีภาวะความเครียด แต่สามารถปรับตัวได้'): ?> checked="checked" <?php endif; ?> name="Data[72]" value="2) มีพบประชาชนมีภาวะความเครียด แต่สามารถปรับตัวได้">
		          <span>2) มีพบประชาชนมีภาวะความเครียด แต่สามารถปรับตัวได้</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" <?php if ($Data[72] == '3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้'): ?> checked="checked" <?php endif; ?> name="Data[72]" value="3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้">
		          <span>3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" <?php if ($Data[72] == '4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย'): ?> checked="checked" <?php endif; ?> name="Data[72]" value="4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย">
		          <span>4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" <?php if ($Data[72] == '5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ําท่วม'): ?> checked="checked" <?php endif; ?> name="Data[72]" value="5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ําท่วม">
		          <span>5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ําท่วม</span>
		        </label>
		      </li>
		    </ul>
		  </div>
  
      
      <h4>กิจกรรมที่ชุมชนดําเนินการเองได้</h4>
      <table class="bordered-table">
      <thead>
        <tr>
          <th>#</th>
          <th>ดําเนินการเองได้</th>
          <th>ต้องการสนับสนุน</th>
          <th>ลักษณะการสนับสนุนและจํานวน</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้</td>
          <td><input type="radio" <?php if ($Data[73] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?>  name="Data[73]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[73] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[73]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[74]" type="text" placeholder="" value="<?php echo $Data[74]; ?>"></td>
        </tr>
        <tr>
          <td>ป้องกันโรคระบาด</td>
          <td><input type="radio" <?php if ($Data[75] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?>  name="Data[75]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[75] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[75]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[76]" type="text" placeholder="" value="<?php echo $Data[76]; ?>"></td>
        </tr>
        <tr>
          <td>เพิ่มบริการทางการแพทย</td>
          <td><input type="radio" <?php if ($Data[77] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[77]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[77] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[77]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[78]" type="text" placeholder="" value="<?php echo $Data[78]; ?>"></td>
        </tr>
        <tr>
          <td>ฟื้นฟูภาวะจิตใจคนในชุมชน</td>
          <td><input type="radio" <?php if ($Data[79] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[79]" value="ดําเนินการเองได้"></td>
          <td><input type="radio" <?php if ($Data[79] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[79]" value="ต้องการสนับสนุน"></td>
          <td><input class="span7"  name="Data[80]" type="text" placeholder="" value="<?php echo $Data[80]; ?>"></td>
        </tr>
      </tbody>
    </table>
    <h5>ลักษณะการสนับสนนุในประเดน็สุขภาพหากเป็นสิ่งของกรณุาบอกจํานวนคร่าวๆ(เพิ่มเติม)</h5>
    <textarea class="xxlarge"  name="Data[81]" rows="3"><?php echo $Data[81]; ?></textarea>
    
  
    <h4>ท่านคิดว่าความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับใด (1น้อยที่สุด – 5 มากท่ีสดุ )</h4>
    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[82] == '1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียด ในชุมชน'): ?> checked="checked" <?php endif; ?> name="Data[82]" value="1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียด ในชุมชน">
	          <span>1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียด ในชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[82] == '2) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียดในชุมชนบ้างแต่ควบคุมได้'): ?> checked="checked" <?php endif; ?> name="Data[82]" value="2) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียดในชุมชนบ้างแต่ควบคุมได้">
	          <span>2) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์ และความเครียดในชุมชนบ้างแต่ควบคุมได้</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[82] == '3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์และความเครียดในชุมชนต้องการการสนุบสนุนบางส่วน'): ?> checked="checked" <?php endif; ?> name="Data[82]" value="3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์และความเครียดในชุมชนต้องการการสนุบสนุนบางส่วน">
	          <span>3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้โรคระบาดบริการทางการแพทย์และความเครียดในชุมชนต้องการการสนุบสนุนบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[82] == '4) มีปัญหาด้านบริการทางการแพทย์ในชุมชนต้องการการสนุบสนุน'): ?> checked="checked" <?php endif; ?> name="Data[82]" value="4) มีปัญหาด้านบริการทางการแพทย์ในชุมชนต้องการการสนุบสนุน">
	          <span>4) มีปัญหาด้านบริการทางการแพทย์ในชุมชนต้องการการสนุบสนุน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[82] == '5) มีปัญหาด้านโรค ระบาดและบริการ ทางการแพทย์ในชุมชนต้องการการสนุบสนุนเร่งด่วน'): ?> checked="checked" <?php endif; ?> name="Data[82]" value="5) มีปัญหาด้านโรค ระบาดและบริการ ทางการแพทย์ในชุมชนต้องการการสนุบสนุนเร่งด่วน">
	          <span>5) มีปัญหาด้านโรค ระบาดและบริการ ทางการแพทย์ในชุมชนต้องการการสนุบสนุนเร่งด่วน</span>
	        </label>
	      </li>
	    </ul>
	    <br/>
  
      <h3>3.3 สภาพแวดล้อม (ข้อมูลบํางประเด็นขอให้อบต.ประสํานกับหน่วยงํานในพื้นที่)</h3>
      <h4>3.3.1การซ่อมแซมที่อยู่อาศัย</h4>
      <div class="clearfix">
			  <label for="xlInput">ที่อยู่อาศัยที่ได้รับความเสียหาย/หลังคาเรือน</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[83]" size="30" type="text" value="<?php echo $Data[83]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของบ้านโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[84]" size="30" type="text" value="<?php echo $Data[84]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[85]" size="30" type="text" value="<?php echo $Data[85]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[86]" size="30" type="text" value="<?php echo $Data[86]; ?>">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">พื้นที่ที่บ้านได้รับความเสียหายมากที่สดุ คือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[87]" size="30" type="text" value="<?php echo $Data[87]; ?>">
			  </div>
			</div><!-- /clearfix -->
			
			
      <h4>3.3.2 สิ่งสาธารณะประโยชน์</h4>
			<h5>(1)สถานีขนส่งมวลชนหรือเส้นทางที่ใช้สัญจรไม่ได้ท้ังทางบกและทางน้ำ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[88]" size="30" type="text" value="<?php echo $Data[88]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[89]" size="30" type="text" value="<?php echo $Data[89]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[90]" size="30" type="text" value="<?php echo $Data[90]; ?>">
			    </div>
				</li>
			</ol>
			
			
			<h5>(2)โรงเรียน(สถานศึกษา)ได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">โรงเรียนได้รับความเสียหาย/โรงเรียน</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[91]" size="30" type="text" value="<?php echo $Data[91]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของโรงเรียนโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[92]" size="30" type="text" value="<?php echo $Data[92]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[93]" size="30" type="text" value="<?php echo $Data[93]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
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
			
			
			
			<h5>(3)ศูนย์ดูแลเด็กเล็กได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">ศูนย์ดูแลเด็กเล็กได้รับความเสียหาย/ศูนย์</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[96]" size="30" type="text" value="<?php echo $Data[96]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของศนูย์ดูแลเด็กเล็กโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[97]" size="30" type="text" value="<?php echo $Data[97]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[98]" size="30" type="text" value="<?php echo $Data[98]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[99]" size="30" type="text" value="<?php echo $Data[99]; ?>">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">ศูนย์ดแูลเด็กเล็กที่ได้รับความเสียหายมากที่สดุคือ</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[100]" size="30" type="text" value="<?php echo $Data[100]; ?>">
			  </div>
			</div><!-- /clearfix -->
			
			
			<h5>(4) อําคารของชุมชนได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">อาคารของชุมชนได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[101]" size="30" type="text" value="<?php echo $Data[101]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของอาคารชุมชนโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[102]" size="30" type="text" value="<?php echo $Data[102]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[103]" size="30" type="text" value="<?php echo $Data[103]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
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
			    <input class="xlarge"  name="Data[106]" size="30" type="text" value="<?php echo $Data[106]; ?>">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของสถานพยาบาลโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[107]" size="30" type="text" value="<?php echo $Data[107]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[108]" size="30" type="text" value="<?php echo $Data[108]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
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
			    <input class="xlarge"  name="Data[111]" size="30" type="text" value="<?php echo $Data[111]; ?>">
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
			    <input class="xlarge"  name="Data[116]" size="30" type="text" value="<?php echo $Data[116]; ?>">
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
          <th>#</th>
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
          <td><input class="span5"  name="Data[119]" type="text" placeholder="" value="<?php echo $Data[119]; ?>"></td>
          <td><input class="span5"  name="Data[120]" type="text" placeholder="" value="<?php echo $Data[120]; ?>"></td>
        </tr>
        <tr>
          <td>บ่อบาดาล</td>
          <td><input type="radio" <?php if (Data[216] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[216]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[216] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[216]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span5"  name="Data[121]" type="text" placeholder="" value="<?php echo $Data[121]; ?>"></td>
          <td><input class="span5"  name="Data[122]" type="text" placeholder="" value="<?php echo $Data[122]; ?>"></td>
        </tr>
        <tr>
          <td>เขื่อน/ฝาย</td>
          <td><input type="radio" <?php if ($Data[123] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[123]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[123] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[123]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span5"  name="Data[124]" type="text" placeholder="" value="<?php echo $Data[124]; ?>"></td>
          <td><input class="span5"  name="Data[125]" type="text" placeholder="" value="<?php echo $Data[125]; ?>"></td>
        </tr>
        <tr>
          <td>แหล่งน้ำ</td>
          <td><input type="radio" <?php if ($Data[126] == 'มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[126]" value="มีความเสียหาย"></td>
          <td><input type="radio" <?php if ($Data[126] == 'ไม่มีความเสียหาย'): ?> checked="checked" <?php endif; ?> name="Data[126]" value="ไม่มีความเสียหาย"></td>
          <td><input class="span5"  name="Data[127]" type="text" placeholder="" value="<?php echo $Data[127]; ?>"></td>
          <td><input class="span5"  name="Data[128]" type="text" placeholder="" value="<?php echo $Data[128]; ?>"></td>
        </tr>
      </tbody>
    </table>
      
    
    <h4>3.3.4 ขยะ/มลพิษ</h4>
      <table class="bordered-table">
      <thead>
        <tr>
          <th>#</th>
          <th>มีปัญหา</th>
          <th>ไม่มีปัญหา</th>
          <th>พื้นที่ (หมู่บ้าน)</th>
          <th>ลักษณะปัญหา</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>กํารจัดกํารขยะ</td>
          <td><input type="radio" <?php if ($Data[129] == 'ปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[129]" value="ปัญหา"></td>
          <td><input type="radio" <?php if ($Data[129] == 'ไม่มีปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[129]" value="ไม่มีปัญหา"></td>
          <td><input class="span5"  name="Data[130]" type="text" placeholder="" value="<?php echo $Data[130]; ?>"></td>
          <td><input class="span5"  name="Data[131]" type="text" placeholder="" value="<?php echo $Data[131]; ?>"></td>
        </tr>
        <tr>
          <td>น้ําาเน่ําเสีย</td>
          <td><input type="radio" <?php if ($Data[132] == 'ปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[132]" value="ปัญหา"></td>
          <td><input type="radio" <?php if ($Data[132] == 'ไม่มีปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[132]" value="ไม่มีปัญหา"></td>
          <td><input class="span5"  name="Data[133]" type="text" placeholder="" value="<?php echo $Data[133]; ?>"></td>
          <td><input class="span5"  name="Data[134]" type="text" placeholder="" value="<?php echo $Data[134]; ?>"></td>
        </tr>
        <tr>
          <td>มลพิษอื่นๆ</td>
          <td><input type="radio" <?php if ($Data[135] == 'ปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[135]" value="ปัญหา"></td>
          <td><input type="radio" <?php if ($Data[135] == 'ไม่มีปัญหา'): ?> checked="checked" <?php endif; ?> name="Data[135]" value="ไม่มีปัญหา"></td>
          <td><input class="span5"  name="Data[136]" type="text" placeholder="" value="<?php echo $Data[136]; ?>"></td>
          <td><input class="span5"  name="Data[137]" type="text" placeholder="" value="<?php echo $Data[137]; ?>"></td>
        </tr>
      </tbody>
    </table>
      
    
    <h5>กิจกรรมที่ชุมชนดําเนินการเองได้</h5>
    <table class="bordered-table">
      <thead>
        <tr>
          <th>#</th>
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
          <td><input type="radio" <?php if ($Data[144] == 'ดําเนินการเองได้'): ?> checked="checked" <?php endif; ?> name="Data[144]" value="ดําเนินการเอง130
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
    <h5>ลักษณะการสนับสนุนในประเด็นสภาพแวดล้อมหากเป็นสิ่งของกรุณาบอกจํานวนครา่วๆ(เพิ่มเติม)</h5>
    <textarea class="xxlarge" name="Data[148]" rows="3"><?php echo $Data[148]; ?></textarea>
    
    <br/><br/>
    <h5>ท่านคิดว่าความรุนแรงด้านปัญหาสภาพแวดล้อมในชุมชนอยู่ในระดับใด (1 น้อยทสีุ่ด–5มากที่สุด)</h5>
    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio"<?php if ($Data[149] == '1) อาคารถาวรวัตถุ เส้นทางเสียหายเล็ก น้อยไม่มีปัญหา แหล่งน้ําและมลพิษ'): ?> checked="checked" <?php endif; ?>name="Data[149]" value="1) อาคารถาวรวัตถุ เส้นทางเสียหายเล็ก น้อยไม่มีปัญหา แหล่งน้ําและมลพิษ">
	          <span>1) อาคารถาวรวัตถุ เส้นทางเสียหายเล็ก น้อยไม่มีปัญหา แหล่งน้ําและมลพิษ</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[149] == '2) อาคาร ถาวรวัตถุเส้นทาง แหล่งท่องเที่ยวเสียหาย ไม่มีปัญหา แหล่งน้ําและมลพิษ'): ?> checked="checked" <?php endif; ?> name="Data[149]" value="2) อาคาร ถาวรวัตถุเส้นทาง แหล่งท่องเที่ยวเสียหาย ไม่มีปัญหา แหล่งน้ําและมลพิษ">
	          <span>2) อาคาร ถาวรวัตถุเส้นทาง แหล่งท่องเที่ยวเสียหาย ไม่มีปัญหา แหล่งน้ําและมลพิษ</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[149] == '3) อาคารถาวรวัตถุ เส้นทาง แหล่ง ท่องเที่ยวเสียหาย มีปัญหาแหล่งน้ํา ต้องการสนับสนุนบางส่วน'): ?> checked="checked" <?php endif; ?> name="Data[149]" value="3) อาคารถาวรวัตถุ เส้นทาง แหล่ง ท่องเที่ยวเสียหาย มีปัญหาแหล่งน้ํา ต้องการสนับสนุนบางส่วน">
	          <span>3) อาคารถาวรวัตถุ เส้นทาง แหล่ง ท่องเที่ยวเสียหาย มีปัญหาแหล่งน้ํา ต้องการสนับสนุนบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[149] == '4) อาคารถาวรวัตถุ เส้นทาง แหล่งท่อง เที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ํา และมลพิษต้องการ สนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[149]" value="4) อาคารถาวรวัตถุ เส้นทาง แหล่งท่อง เที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ํา และมลพิษต้องการ สนับสนุน">
	          <span>4) อาคารถาวรวัตถุ เส้นทาง แหล่งท่อง เที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ํา และมลพิษต้องการ สนับสนุน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[149] == '5) อาคารถาวรวัตถุเส้น ทาง แหล่งท่องเที่ยว เสียหายทั้งหมด มีปัญหาแหล่งน้ําและ มลพิษรุนแรงต้องการ สนับสนุนเร่งด่วน'): ?> checked="checked" <?php endif; ?>  name="Data[149]" value="5) อาคารถาวรวัตถุเส้น ทาง แหล่งท่องเที่ยว เสียหายทั้งหมด มีปัญหาแหล่งน้ําและ มลพิษรุนแรงต้องการ สนับสนุนเร่งด่วน">
	          <span>5) อาคารถาวรวัตถุเส้น ทาง แหล่งท่องเที่ยว เสียหายทั้งหมด มีปัญหาแหล่งน้ําและ มลพิษรุนแรงต้องการ สนับสนุนเร่งด่วน</span>
	        </label>
	      </li>
	    </ul>
    
      
      <h3>3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3>
      <h4>3.4.1 พื้นที่การเกษตรเสียหาย</h4>
			<div class="clearfix">
			  <label for="xlInput">พื้นที่การเกษตรเสียหาย/ไร่</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[150]" size="30" type="text" value="<?php echo $Data[150]; ?>">
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">นาข้าว/ไร่</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[151]" size="30" type="text" value="<?php echo $Data[151]; ?>" >
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">พืชสวน/ไร่</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[152]" size="30" type="text" value="<?php echo $Data[152]; ?>" >
			  </div>
			</div><!-- /clearfix -->
			
			<div class="clearfix">
			  <label for="xlInput">พืชไร่/ไร่</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[153]" size="30" type="text" value="<?php echo $Data[153]; ?>" >
			  </div>
			</div><!-- /clearfix -->

      
      <h4>3.4.2 พื้นที่ปุศสัตว์เสียหาย ความเสียหาย (โปรดระบุ)</h4>
      <textarea class="xxlarge" name="Data[154]" rows="3"><?php echo $Data[154]; ?></textarea>
      
      
      <h4>3.4.3 พื้นที่ประมงเสียหาย ความเสียหาย (โปรดระบุ)</h4>
      <textarea class="xxlarge" name="Data[155]" rows="3"><?php echo $Data[155]; ?></textarea>
      
      
      <h4>3.4.4 ตลาดย่านธุรกิจเสียหาย (โปรดระบุ)</h4>
      <div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" name="Data[156]" type="text" placeholder="" value="<?php echo $Data[156]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" name="Data[157]" type="text" placeholder="" value="<?php echo $Data[157]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[158]" type="text" placeholder="" value="<?php echo $Data[158]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7"  name="Data[159]" type="text" placeholder="" value="<?php echo $Data[159]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[160]" type="text" placeholder="" value="<?php echo $Data[160]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7"  name="Data[161]" type="text" placeholder="" value="<?php echo $Data[161]; ?>" >
			</div>
			
			
			<h4>3.4.5 อุตสําหกรรมเสียหาย</h4>
      <div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[162]" type="text" placeholder="" value="<?php echo $Data[162]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7"  name="Data[163]" type="text" placeholder="" value="<?php echo $Data[162]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[164]" type="text" placeholder="" value="<?php echo $Data[164]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7"  name="Data[165]" type="text" placeholder="" value="<?php echo $Data[165]; ?>" >
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2"  name="Data[166]" type="text" placeholder="" value="<?php echo $Data[166]; ?>" >
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7"  name="Data[167]" type="text" placeholder="" value="<?php echo $Data[167]; ?>" >
			</div>
      
      
      <h4>3.4.6 ประมาณการคนวา่งงานจากภัยพิบัติ</h4>
			<div class="clearfix">
			  <label for="xlInput">ประมาณการคนวา่งงานจากภัยพบิตัิ/คน</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[168]" size="30" type="text" value="<?php echo $Data[168]; ?>" >
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">ว่างงานภาคเกษตร/คน</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[169]" size="30" type="text" value="<?php echo $Data[169]; ?>" >
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">ว่างงานภาคอุตุ สาหกรรม/คน</label>
			  <div class="input">
			    <input class="xlarge"  name="Data[170]" size="30" type="text" value="<?php echo $Data[170]; ?>" >
			  </div>
			</div><!-- /clearfix -->
			
      
      <h4>3.4.7 กลุ่มอาชีพ</h4>
      <div class="clearfix">
			  <label class="no-float">กลุ่มอําชีพในชุมชนมี/กลุ่ม</label>
			  <input class="span2"  name="Data[171]" type="text" placeholder="" value="<?php echo $Data[171]; ?>" >
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">กลุ่มอาชีพ ที่มีความโดดเด่นในชุมชนคือกลุ่ม</label>
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
					<div class="clearfix">
				    <input class="xlarge"  name="Data[175]" size="30" type="text" value="<?php echo $Data[175]; ?>" >
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[176]" size="30" type="text" value="<?php echo $Data[176]; ?>" >
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[177]" size="30" type="text" value="<?php echo $Data[177]; ?>" >
			    </div>
				</li>
			</ol>
      
      
      <h4>3.4.8 เครื่องจักรอุปกรณ์ประกอบอาชีพี่ทเสียหาย เช่น รถไถ รถกะบะ รถบรรทุก รถมอเตอร์ไซต์ รถยนต์ จักรเย็บ ผ้า อปุ กรณ์กลุ่ม อาชีพ ฯลฯ เครื่องจักร อปุกรณป์ ระกอบอาชีพที่ได้รับความเสียหายมาก คือ</h4>
      <ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[178]" size="30" type="text" value="<?php echo $Data[178]; ?>" >
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[179]" size="30" type="text" value="<?php echo $Data[179]; ?>" >
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge"  name="Data[180]" size="30" type="text" value="<?php echo $Data[180]; ?>" >
			    </div>
				</li>
			</ol>
			
			
			
			<h4>3.4.9 ปัญหาการส่ือสารโทรคมนาคมในพื้น ที่</h4>
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
    
    
    <h4>กิจกรรมทชี่มุชนดําเนินการเองได้(ถ้ําไม่มีไม่ต้องกรอก)</h4>
    <table class="bordered-table">
      <thead>
        <tr>
          <th></th>
          <th>ดําเนินการเอง</th>
          <th>ต้องการสนับสนุน</th>
          <th>ลักษณะการสนับสนุนและจําานวน</th>
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
    
    <h5>ลักษณะสนับสนุนในประเด็นเศรษฐกิจหากเป็นสิ่งของกรุณาบอกจํานวนคร่าวๆ(เพิ่มเติม)</h5>
    <textarea class="xxlarge" name="Data[201]" rows="3"><?php echo $Data[201]; ?></textarea>
    
    
    <h4>ท่านคิดว่าความรุนแรงด้านปัญหาเศรษฐกจิ ในชุมชนอยู่ในระดับใด ( 1 น้อยที่สุด – 5 มากท่ีสุด )</h4>
    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[202] == '1) ไม่มีผลกระทบสามารถทําการเกษตรในฤดูการผลิตครั้งใหม่
ธรุ กิจกิจและ อุตสาหกรรมสามารถดําเนินการต่อได้'): ?> checked="checked" <?php endif; ?> name="Data[202]" value="1) ไม่มีผลกระทบสามารถทําการเกษตรในฤดูการผลิตครั้งใหม่
ธรุ กิจกิจและ อุตสาหกรรมสามารถดําเนินการต่อได้">
	          <span>1) ไม่มีผลกระทบสามารถทําการเกษตรในฤดูการผลิตครั้งใหม่
ธรุ กิจกิจและ อุตสาหกรรมสามารถดําเนินการต่อได้</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[203] == '2) ได้รับผลกระทบแต่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรม สามารถดําเนินการต่อได้'): ?> checked="checked" <?php endif; ?> name="Data[203]" value="2) ได้รับผลกระทบแต่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรม สามารถดําเนินการต่อได้">
	          <span>2) ได้รับผลกระทบแต่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรม สามารถดําเนินการต่อได้</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[204] == '3) สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดําเนินการต่อได้ แต่ ต้องการการสนับสนุนบางส่วน'): ?> checked="checked" <?php endif; ?> name="Data[204]" value="3) สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดําเนินการต่อได้ แต่ ต้องการการสนับสนุนบางส่วน">
	          <span>3) สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดําเนินการต่อได้ แต่ ต้องการการสนับสนุนบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[205] == '4) ไม่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่การฟื้นฟูธุรกจิ อุตสาหกรรม ต้องใช้เวลาอย่างน้อย 3 เดือนต้องการการสนับสนุน'): ?> checked="checked" <?php endif; ?> name="Data[205]" value="4) ไม่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่การฟื้นฟูธุรกจิ อุตสาหกรรม ต้องใช้เวลาอย่างน้อย 3 เดือนต้องการการสนับสนุน">
	          <span>4) ไม่สามารถทําการเกษตรในฤดูการผลิตครั้งใหม่การฟื้นฟูธุรกจิ อุตสาหกรรม ต้องใช้เวลาอย่างน้อย 3 เดือนต้องการการสนับสนุน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" <?php if ($Data[206] == '5) ไม่สามารถดําเนินกิจกรรมทางเศรษฐกิจใดๆ ได้ ประชากรเกินครึ่งว่างงาน'): ?> checked="checked" <?php endif; ?> name="Data[206]" value="5) ไม่สามารถดําเนินกิจกรรมทางเศรษฐกิจใดๆ ได้ ประชากรเกินครึ่งว่างงาน">
	          <span>5) ไม่สามารถดําเนินกิจกรรมทางเศรษฐกิจใดๆ ได้ ประชากรเกินครึ่งว่างงาน</span>
	        </label>
	      </li>
	    </ul>
      
      
      <h4>3.5 ชุมชนท่านมีการเตรียมการรับมือภัยพิบัติในอนาคตอย่างไร</h4>
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
          <td>อื่น ๆ (โปรดระบุ)</td>
          <td><input type="radio" <?php if ($Data[214] == 'ดําเนินการเอง'): ?> checked="checked" <?php endif; ?> name="Data[214]" value="ดําเนินการเอง"></td>
          <td><input type="radio" <?php if ($Data[214] == 'ต้องการสนับสนุน'): ?> checked="checked" <?php endif; ?>name="Data[214]" value="ต้องการสนับสนุน"></td>
        </tr>
      </tbody>
    </table>
      
      
  </fieldset>
  
  <div class="actions">
    <input type="submit" class="btn primary" value="Save changes">&nbsp;<button type="reset" class="btn">Cancel</button>
  </div>