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
		  <label for="xlInput">ชื่อ - นามสกุลผู้ให้ข้อมูล (นาย/นาง/นางสาว)</label>
		  <div class="input">
		    <input class="xlarge" id="" name="Data[0]" size="30" type="text" value="">
		  </div>
		</div><!-- /clearfix -->
		<div class="clearfix">
			<label class="no-float">สถานที่ทํางาน</label>
			<input class="span2" id="" name="Data[1]" type="text"  placeholder="">
			<label class="no-float">หมู่ที่</label>
			<input class="span2" id="" name="Data[2]" type="text"  placeholder="">
			<label class="no-float">ตําบล</label>
			<input class="span2" id="" name="Data[3]" type="text"  placeholder="">
		</div>
		<div class="clearfix">
			<label class="no-float">อําเภอ</label>
			<input class="span2" id="" name="Data[4]" type="text"  placeholder="">
			<label class="no-float">จังหวัด</label>
			<input class="span2" id="" name="Data[5]" type="text"  placeholder="">
			<label class="no-float">โทรศัพท</label>
			<input class="span2" id="" name="Data[6]" type="text"  placeholder="">
		</div>
		<div class="clearfix">
			<label class="no-float">ตําแหน่งทางสังคม</label>
			<input class="span2" id="" name="Data[7]" type="text"  placeholder="">
		</div>
  </fieldset>
  <br/><br/>
  
  
  
<!--       ส่วนที่ 1 ข้อมูลทั่วไปของตําบล -->
  <fieldset>
      <legend>ส่วนที่ 1 ข้อมูลทั่วไปของตําบล</legend>
      <div class="clearfix">
			  <label for="xlInput">1.1 จํานวนครัวเรือน</label>
			  <div class="input">
			    <input class="xlarge" id="" name="Data[8]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
				<label class="no-float">1.2 ประชากรปัจจุบันทั้งหมดโดยประมาณ</label>
				<input class="span2" id="" name="Data[9]" type="text"  placeholder="">
				<label class="no-float">ชาย</label>
				<input class="span2" id="" name="Data[10]" type="text"  placeholder="">
				<label class="no-float">หญิง</label>
				<input class="span2" id="" name="Data[11]" type="text"  placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">โดยเฉลี่ยครัวเรือนละ/คน</label>
				<input class="span2" id="" name="Data[12]" type="text"  placeholder="">
				<label class="no-float">มีประชากรแฝง/คน</label>
				<input class="span2" id="" name="Data[13]" type="text" placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">1.3 การนับถือศาสนา พุทธ(ร้อยละ)</label>
				<input class="span2" id="" name="Data[14]" type="text"  placeholder="">
				<label class="no-float">อิสลาม(ร้อยละ)</label>
				<input class="span2" id="" name="Data[15]" type="text"  placeholder="">
				<label class="no-float">คริสต์(ร้อยละ)</label>
				<input class="span2" id="" name="Data[16]" type="text"  placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">1.4 ส่วนใหญ่ประกอบอาชีพ</label>
				<input class="span2" id="" name="Data[17]" type="text"  placeholder="">
				<label class="no-float">รองลงมา</label>
				<input class="span2" id="" name="Data[18]" type="text"  placeholder="">
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
            <td><input class="span4" id="" name="Data[19]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[20]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="" type="text" placeholder=".span3"></td>
          </tr>
          <tr>
            <th>2</th>
            <td><input class="span4" id="" name="Data[21]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[22]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[23]" type="text" placeholder=".span3"></td>
          </tr>
          <tr>
            <th>3</th>
            <td><input class="span4" id="" name="Data[24]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[25]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[26]" type="text" placeholder=".span3"></td>
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
            <td><input class="span2" id="" name="Data[27]" type="text" placeholder=".span3"></td>
            <td><input class="span2" id="" name="Data[28]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[29]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[30]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[31]" type="text" placeholder=".span3"></td>
          </tr>
          <tr>
            <th>2</th>
            <td><input class="span2" id="" name="Data[32]" type="text" placeholder=".span3"></td>
            <td><input class="span2" id="" name="Data[33]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[34]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[35]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[36]" type="text" placeholder=".span3"></td>
          </tr>
          <tr>
            <th>3</th>
            <td><input class="span2" id="" name="Data[37]" type="text" placeholder=".span3"></td>
            <td><input class="span2" id="" name="Data[38]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[39]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[40]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[41]" type="text" placeholder=".span3"></td>
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
            <td><input class="span4" id="" name="Data[42]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[43]" type="text" placeholder=".span3"></td>
          </tr>
          <tr>
            <th>สูญหาย</th>
            <td><input class="span4" id="" name="Data[44]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[45]" type="text" placeholder=".span3"></td>
          </tr>
          <tr>
            <th>บาดเจ็บ</th>
            <td><input class="span4" id="" name="Data[46]" type="text" placeholder=".span3"></td>
            <td><input class="span4" id="" name="Data[47]" type="text" placeholder=".span3"></td>
          </tr>
        </tbody>
      </table>
      
      <h4>3.1.2 ปัยจัยเสี่ยงต่อความปลอดภัย</h4>
      <div class="clearfix">
			  <label id="optionsRadio">โจรกรรม</label>
	        <label>
	          <input type="radio" checked="" name="Data[48]" value="option1">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" checked="" name="Data[48]" value="option1">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">โจรกรรม</label>
	        <label>
	          <input type="radio" checked="" name="Data[49]" value="option1">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" checked="" name="Data[49]" value="option1">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">สัตว์ร้าย</label>
	        <label>
	          <input type="radio" checked="" name="Data[50]" value="option1">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" checked="" name="Data[50]" value="option1">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">ไฟฟ้า</label>
	        <label>
	          <input type="radio" checked="" name="Data[51]" value="option1">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" checked="" name="Data[51]" value="option1">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label id="optionsRadio">ดินไหล/ถล่ม</label>
	        <label>
	          <input type="radio" checked="" name="Data[52]" value="option1">
	          <span>มี</span>
	        </label>
	        <label>
	          <input type="radio" checked="" name="Data[52]" value="option1">
	          <span>ไม่มี</span>
        </label>
			</div>
			<div class="clearfix">
			  <label for="xlInput">อ่ืน	ๆ โปรดระบ</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[53]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
  
  
  
  <h4>3.1.3 บ้านเรือนพังเสียหายทั้งหลัง</h4>
  <div class="clearfix">
		<label class="no-float">จํานวน/หลัง</label>
		<input class="span2" id="" name="Data[54]" type="text"  placeholder="">
		<label class="no-float">ในพื้นที่ (หมู่)</label>
		<input class="span2" id="" name="Data[55]" type="text"  placeholder="">
	</div>
  
  <h4>3.1.4 ประชาชนไร้ที่อยู่</h4>
  <div class="clearfix">
		<label class="no-float">จํานวน/คน</label>
		<input class="span2" id="" name="Data[56]" type="text"  placeholder="">
		<label class="no-float">ในพื้นที่ (หมู่)</label>
		<input class="span2" id="" name="Data[57]" type="text"  value="" placeholder="">
	</div>
	
	
  <div class="clearfix">
<!-- 			  <label id="optionsRadio">List of ....</label> -->
	  <div class="input">
	    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" checked="" name="Data[58]" value="option1">
	          <span>1) ไม่มีผู้เสียชีวิต หรือสูญหายหรือบาดเจ็บ บ้านเรือนเสีย หายบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[58]" value="option2">
	          <span>2) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดน้อยกว่า 10% ของชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[58]" value="option2">
	          <span>3) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดมากกว่า 10% ของชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[58]" value="option2">
	          <span>4) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บ บ้านเรือนพังเสียหาย ทั้งหมดประมาณ 25% ของชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[58]" value="option2">
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
		<input class="span2" id="" name="Data[59]" type="text"  placeholder="">
		<label class="no-float">ผู้สูงอายุ</label>
		<input class="span2" id="" name="Data[60]" type="text"  placeholder="">
		<label class="no-float">ผู้ป่วย</label>
		<input class="span2" id="" name="Data[61]" type="text"  placeholder="">
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
        <th><input class="span7" id="" name="Data[62]" type="text" placeholder=".span3"></th>
        <td><input class="span5" id="" name="Data[63]" type="text" placeholder=".span3"></td>
        <td><input class="span4" id="" name="Data[64]" type="text" placeholder=".span3"></td>
      </tr>
      <tr>
        <th><input class="span7" id="" name="Data[65]" type="text" placeholder=".span3"></th>
        <td><input class="span5" id="" name="Data[66]" type="text" placeholder=".span3"></td>
        <td><input class="span4" id="" name="Data[67]" type="text" placeholder=".span3"></td>
      </tr>
      <tr>
        <th><input class="span7" id="" name="Data[68]" type="text" placeholder=".span3"></th>
        <td><input class="span5" id="" name="Data[69]" type="text" placeholder=".span3"></td>
        <td><input class="span4" id="" name="Data[70]" type="text" placeholder=".span3"></td>
      </tr>
    </tbody>
  </table>
  
  
  <h4>3.2.3 ความลําบากในการเข้าถึงบรกิารทางแพทย์ (1น้อยทีสุ่ด–5มากท่ีสุด)</h4>
  <h5>พื้นท่ีที่เข้าถงึบรกิารทางการแพทย์ยากลําบากที่สดุคือ</h5>
  <div class="clearfix">
	    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" checked="" name="Data[71]" value="option1">
	          <span>1) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา น้อยกว่า 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[71]" value="option2">
	          <span>2) มีหน่วยพยาบาล ในพื้นที่มากกว่า 1 หน่วย การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[71]" value="option2">
	          <span>3) มีหน่วย พยาบาลใน พื้นที่ การเดิน ทางถึงโรง พยาบาลใช้เวลา ประมาณ 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[71]" value="option2">
	          <span>4) มีหน่วยพยาบาล ในพนื้ ที่การเดิน ทางถึงโรง พยาบาลใช้เวลา เกิน 1 ชม.</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[71]" value="option2">
	          <span>5) ไม่มีหน่วย พยาบาลในพื้นที่ การเดนิทางถึง โรงพยาบาลใช้ เวลาเกิน 1 ชม.</span>
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
		          <input type="radio" checked="" name="Data[72]" value="option1">
		          <span>1) ไม่พบประชาชนมี ภาวะความเครียด</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" name="Data[72]" value="option2">
		          <span>2) มีพบประชาชนมี ภาวะความเครียด แต่สามารถปรับ ตัวได้</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" name="Data[72]" value="option2">
		          <span>3) พบประชาชนมี ภาวะ ความเครียด และมีกรณี ควบคุมสติไม่ได.</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" name="Data[72]" value="option2">
		          <span>4) พบประชาชนมี ภาวะความเครียด และมีความเสี่ยง ฆ่าตัวตาย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input type="radio" name="Data[72]" value="option2">
		          <span>5) พบประชาชนมี ภาวะ ความเครียดและ มีกรณีฆ่าตัวตาย จากภาวะน้ําท่วม</span>
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
          <td><input type="radio" name="Data[73]" value="option2"></td>
          <td><input type="radio" name="Data[73]" value="option2"></td>
          <td><input class="span7" id="" name="Data[74]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>ป้องกันโรคระบาด</td>
          <td><input type="radio" name="Data[75]" value="option2"></td>
          <td><input type="radio" name="Data[75]" value="option2"></td>
          <td><input class="span7" id="" name="Data[76]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>เพิ่มบริการทางการแพทย</td>
          <td><input type="radio" name="Data[77]" value="option2"></td>
          <td><input type="radio" name="Data[77]" value="option2"></td>
          <td><input class="span7" id="" name="Data[78]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>ฟื้นฟูภาวะจิตใจคนในชุมชน</td>
          <td><input type="radio" name="Data[79]" value="option2"></td>
          <td><input type="radio" name="Data[79]" value="option2"></td>
          <td><input class="span7" id="" name="Data[80]" type="text" placeholder=".span3"></td>
        </tr>
      </tbody>
    </table>
    <h5>ลักษณะการสนับสนนุในประเดน็สุขภาพหากเป็นสิ่งของกรณุาบอกจํานวนคร่าวๆ(เพิ่มเติม)</h5>
    <textarea class="xxlarge" id="" name="Data[81]" rows="3"></textarea>
    
  
    <h4>ท่านคิดว่าความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับใด (1น้อยที่สุด – 5 มากท่ีสดุ )</h4>
    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" checked="" name="Data[82]" value="option1">
	          <span>1) ไม่มีปัญหาด้าน การดูแลกลุ่มช่วย เหลือตัวเองไม่ได้ โรคระบาด บริการ ทางการแพทย์ และความเครียด ในชุมชน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[82]" value="option2">
	          <span>2) มีปัญหาด้านการ ดูแลกลุ่มช่วย เหลือตัวเองไม่ได้ โรคระบาด บริการ ทางการแพทย์ และความเครียด ในชุมชนบ้างแต่ ควบคุมได้</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[82]" value="option2">
	          <span>3) มีปัญหาด้านการ ดูแลกลุ่มช่วย เหลือตัวเองไม่ได้ โรคระบาด บริการ ทางการแพทย์ และความเครียด ในชุมชนต้องการ การสนุบสนุนบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[82]" value="option2">
	          <span>4) มีปัญหาด้านบริการทางการ แพทย์ในชุมชนต้องการการสนุบสนุน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="Data[82]" value="option2">
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
			    <input class="xlarge" id="" name="Data[83]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของบ้านโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="" name="Data[84]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="" name="Data[85]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="" name="Data[86]" size="30" type="text">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">พื้นที่ที่บ้านได้รับความเสียหายมากที่สดุ คือ</label>
			  <div class="input">
			    <input class="xlarge" id="" name="Data[87]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			
			
      <h4>3.3.2 สิ่งสาธารณะประโยชน์</h4>
			<h5>(1)สถานีขนส่งมวลชนหรือเส้นทางที่ใช้สัญจรไม่ได้ท้ังทางบกและทางน้ำ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[88]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[89]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[90]" size="30" type="text">
			    </div>
				</li>
			</ol>
			
			
			<h5>(2)โรงเรียน(สถานศึกษา)ได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">โรงเรียนได้รับความเสียหาย/โรงเรียน</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[91]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของโรงเรียนโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[92]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[93]" size="30" type="text" value="<?php echo $Data[93]; ?>">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[94]" size="30" type="text">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">โรงเรียน(สถานศึกษา)ท่ีได้รับความเสียหายมากท่ีสุดคือโรงเรียน</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[95]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			
			
			
			<h5>(3)ศูนย์ดูแลเด็กเล็กได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">ศูนย์ดูแลเด็กเล็กได้รับความเสียหาย/ศูนย์</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[96]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของศนูย์ดูแลเด็กเล็กโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[97]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[98]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[99]" size="30" type="text">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">ศูนย์ดแูลเด็กเล็กที่ได้รับความเสียหายมากที่สดุคือ</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[100]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			
			
			<h5>(4) อําคารของชุมชนได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">อาคารของชุมชนได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[101]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของอาคารชุมชนโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[102]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[103]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[104]" size="30" type="text">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">อาคารชุมชนที่ได้รับความเสียหายมากที่สุดคือ</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[105]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			
			
			<h5>(5) สถานพยาบาลได้รับความเสียหาย</h5>
			<div class="clearfix">
			  <label for="xlInput">สถานพยาบาลได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[106]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหายของสถานพยาบาลโดยทั่วไปคือ</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[107]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[108]" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="Data[109]" size="30" type="text">
			    </div>
				</li>
			</ol>
			<div class="clearfix">
			  <label for="xlInput">สถานพยาบาลที่ได้รับความเสียหายมากที่สุดคือ</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[110]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
      
      
      <h5>(6)ศาสนสถานได้รับความเสียหาย</h5>
      <div class="clearfix">
			  <label for="xlInput">ศาสนสถานได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[111]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">วัด/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[112]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">มัสยิด/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[113]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">โบสถ์คริสต์/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[114]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label for="xlInput">ศาสนสถานที่ได้รับความเสียหายมากที่สุดุคือ</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[115]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
  
  
      <h5>(7) แหล่งท่องเที่ยวได้รับความเสียหาย</h5>
      <div class="clearfix">
			  <label for="xlInput">แหล่งท่องเที่ยวได้รับความเสียหาย/แห่ง</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[116]" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
      <div class="clearfix">
			  <label for="xlInput">แหล่งท่องเที่ยวที่ได้ความเสียหายมากที่สุดคือ</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="Data[117]" size="30" type="text">
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
          <td><input type="radio" name="Data[118]" value="option2"></td>
          <td><input type="radio" name="Data[118]" value="option2"></td>
          <td><input class="span5" id="" name="Data[119]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[120]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>บ่อบาดาล</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input class="span5" id="" name="Data[121]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[122]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>เขื่อน/ฝาย</td>
          <td><input type="radio" name="Data[123]" value="option2"></td>
          <td><input type="radio" name="Data[123]" value="option2"></td>
          <td><input class="span5" id="" name="Data[124]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[125]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>แหล่งน้ำ</td>
          <td><input type="radio" name="Data[126]" value="option2"></td>
          <td><input type="radio" name="Data[126]" value="option2"></td>
          <td><input class="span5" id="" name="Data[127]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[128]" type="text" placeholder=".span3"></td>
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
          <td><input type="radio" name="Data[129]" value="option2"></td>
          <td><input type="radio" name="Data[129]" value="option2"></td>
          <td><input class="span5" id="" name="Data[130]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[131]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>น้ําาเน่ําเสีย</td>
          <td><input type="radio" name="Data[132]" value="option2"></td>
          <td><input type="radio" name="Data[132]" value="option2"></td>
          <td><input class="span5" id="" name="Data[133]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[134]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>มลพิษอื่นๆ</td>
          <td><input type="radio" name="Data[135]" value="option2"></td>
          <td><input type="radio" name="Data[135]" value="option2"></td>
          <td><input class="span5" id="" name="Data[136]" type="text" placeholder=".span3"></td>
          <td><input class="span5" id="" name="Data[137]" type="text" placeholder=".span3"></td>
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
          <td><input type="radio" name="Data[138]" value="option2"></td>
          <td><input type="radio" name="Data[138]" value="option2"></td>
          <td><input class="span7" id="" name="Data[139]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>การซ่อมแซมสิ่งสาธารณะประโยชน์</td>
          <td><input type="radio" name="Data[140]" value="option2"></td>
          <td><input type="radio" name="Data[140]" value="option2"></td>
          <td><input class="span7" id="" name="Data[141]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูแหล่งท่องเที่ยว</td>
          <td><input type="radio" name="Data[142]" value="option2"></td>
          <td><input type="radio" name="Data[142]" value="option2"></td>
          <td><input class="span7" id="" name="Data[143]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูแหล่งน้ำ</td>
          <td><input type="radio" name="Data[144]" value="option2"></td>
          <td><input type="radio" name="Data[144]" value="option2"></td>
          <td><input class="span7" id="" name="Data[145]" type="text" placeholder=".span3"></td>
        </tr>
        <tr>
          <td>การจัดการขยะ/มลพิษ</td>
          <td><input type="radio" name="Data[146]" value="option2"></td>
          <td><input type="radio" name="Data[146]" value="option2"></td>
          <td><input class="span7" id="" name="Data[147]" type="text" placeholder=".span3"></td>
        </tr>
      </tbody>
    </table>
    <h5>ลักษณะการสนับสนุนในประเด็นสภาพแวดล้อมหากเป็นสิ่งของกรุณาบอกจํานวนครา่วๆ(เพิ่มเติม)</h5>
    <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
    
    <br/><br/>
    <h5>ท่านคิดว่าความรุนแรงด้านปัญหาสภาพแวดล้อมในชุมชนอยู่ในระดับใด (1 น้อยทสีุ่ด–5มากที่สุด)</h5>
    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" checked="" name="Data[148]" value="option1">
	          <span>1) อาคารถาวรวัตถุ เส้นทางเสียหายเล็ก น้อยไม่มีปัญหา แหล่งน้ําและมลพิษ</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>2) อาคาร ถาวรวัตถุเส้นทาง แหล่งท่องเที่ยวเสียหาย ไม่มีปัญหา แหล่งน้ําและมลพิษ</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>3) อาคารถาวรวัตถุ เส้นทาง แหล่ง ท่องเที่ยวเสียหาย มีปัญหาแหล่งน้ํา ต้องการสนับสนุนบางส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>4) อาคารถาวรวัตถุ เส้นทาง แหล่งท่อง เที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ํา และมลพิษต้องการ สนับสนุน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>5) อาคารถาวรวัตถุเส้น ทาง แหล่งท่องเที่ยว เสียหายทั้งหมด มีปัญหาแหล่งน้ําและ มลพิษรุนแรงต้องการ สนับสนุนเร่งด่วน</span>
	        </label>
	      </li>
	    </ul>
    
      
      <h3>3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3>
      <h4>3.4.1 พื้นที่การเกษตรเสียหาย</h4>
			<div class="clearfix">
			  <label for="xlInput">พื้นที่การเกษตรเสียหาย/ไร่</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">นาข้าว/ไร่</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">พืชสวน/ไร่</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			
			<div class="clearfix">
			  <label for="xlInput">พืชไร่/ไร่</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->

      
      <h4>3.4.2 พื้นที่ปุศสัตว์เสียหาย ความเสียหาย (โปรดระบุ)</h4>
      <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
      
      
      <h4>3.4.3 พื้นที่ประมงเสียหาย ความเสียหาย (โปรดระบุ)</h4>
      <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
      
      
      <h4>3.4.4 ตลาดย่านธุรกิจเสียหาย (โปรดระบุ)</h4>
      <div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" id="" name="" type="text" placeholder="">
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" id="" name="" type="text" placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" id="" name="" type="text" placeholder="">
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" id="" name="" type="text" placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" id="" name="" type="text" placeholder="">
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" id="" name="" type="text" placeholder="">
			</div>
			
			
			<h4>3.4.5 อุตสําหกรรมเสียหาย</h4>
      <div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" id="" name="" type="text" placeholder="">
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" id="" name="" type="text" placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" id="" name="" type="text" placeholder="">
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" id="" name="" type="text" placeholder="">
			</div>
			<div class="clearfix">
				<label class="no-float">พื้นที่</label>
				<input class="span2" id="" name="" type="text" placeholder="">
				<label class="no-float">ความเสียหาย (โปรดระบุ)</label>
				<input class="span7" id="" name="" type="text" placeholder="">
			</div>
      
      
      <h4>3.4.6 ประมาณการคนวา่งงานจากภัยพิบัติ</h4>
			<div class="clearfix">
			  <label for="xlInput">ประมาณการคนวา่งงานจากภัยพบิตัิ/คน</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">ว่างงานภาคเกษตร/คน</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->

			<div class="clearfix">
			  <label for="xlInput">ว่างงานภาคอุตุ สาหกรรม/คน</label>
			  <div class="input">
			    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			  </div>
			</div><!-- /clearfix -->
			
      
      <h4>3.4.7 กลุ่มอาชีพ</h4>
      <div class="clearfix">
			  <label class="no-float">กลุ่มอําชีพในชุมชนมี/กลุ่ม</label>
			  <input class="span2" id="" name="" type="text" placeholder="">
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">กลุ่มอาชีพ ที่มีความโดดเด่นในชุมชนคือกลุ่ม</label>
			  <input class="span2" id="" name="" type="text" placeholder="">
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">ผลิตภัณฑ์ชุมชนที่โดดเด่นคือ</label>
			  <input class="span2" id="" name="" type="text" placeholder="">
			</div><!-- /clearfix -->
			<div class="clearfix">
			  <label class="no-float">กลุ่มอาชีพท่ีได้รับความเสียหายมี/กลุ่ม</label>
			  <input class="span2" id="" name="" type="text" placeholder="">
			</div><!-- /clearfix -->
			<h5>ลักษณะความเสียหาย/กลุ่ม</h5>
			<ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			    </div>
				</li>
			</ol>
      
      
      <h4>3.4.8 เครื่องจักรอุปกรณ์ประกอบอาชีพี่ทเสียหาย เช่น รถไถ รถกะบะ รถบรรทุก รถมอเตอร์ไซต์ รถยนต์ จักรเย็บ ผ้า อปุ กรณ์กลุ่ม อาชีพ ฯลฯ เครื่องจักร อปุกรณป์ ระกอบอาชีพที่ได้รับความเสียหายมาก คือ</h4>
      <ol>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
			    </div>
				</li>
				<li>
					<div class="clearfix">
				    <input class="xlarge" id="xlInput" name="xlInput" size="30" type="text">
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
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>ระบบโทรศัพท์มือถือ</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>ระบบอินเทอร์เน็ต</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>ระบบไปรษณีย์</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>ระบบวิทยุสื่อสาร</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
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
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การฟ้ืนฟูด้านปศุสัตว์</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การฟ้ืนฟูด้านการประมง</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูธุรกิจอุตสาหกรรม</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูแรงงาน</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การฟื้นฟูกลุ่มอาชีพ</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การซ่อมแซมเครื่องจักรอุปกรณ์ประกอบอาชีพ</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td>การซ่อมแซมระบบสื่อสารโทรคมนาคม</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
      </tbody>
    </table>
    
    <h5>ลักษณะสนับสนุนในประเด็นเศรษฐกิจหากเป็นสิ่งของกรุณาบอกจํานวนคร่าวๆ(เพิ่มเติม)</h5>
    <textarea class="xxlarge" id="textarea2" name="textarea2" rows="3"></textarea>
    
    
    <h4>ท่านคิดว่าความรุนแรงด้านปัญหาเศรษฐกจิ ในชุมชนอยู่ในระดับใด ( 1 น้อยที่สุด – 5 มากท่ีสุด )</h4>
    <ul class="inputs-list">
	      <li>
	        <label>
	          <input type="radio" checked="" name="optionsRadios" value="option1">
	          <span>1) ไม่มีผลกระทบ สามารถทําการ เกษตรในฤดูการ ผลิตครั้งใหม่
ธรุ กิจกิจและ อุตสาหกรรม สามารถดําเนิน การต่อได้</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>2) ได้รับผลกระ ทบแต่สามารถ ทําการเกษตร ในฤดูการผลิต ครั้งใหม่ ธุรกิจ กิจและ อุตสาหกรรม สามารถดําเนิน การต่อได้</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>3) สามารถทําการ เกษตรในฤดูการ ผลิตครั้งใหม่ ธุรกิจกิจและ อุตสาหกรรม สามารถดําเนิน การต่อได้ แต่ ต้องการการ สนับสนุนบาง ส่วน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>4) ไม่สามารถ ทําการเกษตรใน ฤดูการผลิตครั้งใหม่ การฟื้นฟู ธุรกจิ อุตสาหกรรม ต้องใช้เวลา อย่างน้อย 3 เดือนต้องการ การสนับสนุน</span>
	        </label>
	      </li>
	      <li>
	        <label>
	          <input type="radio" name="optionsRadios" value="option2">
	          <span>5) ไม่สามารถดําเนิน กิจกรรมทาง เศรษฐกิจใด ๆ ได้ ประชากรเกินครึ่ง ว่างงาน</span>
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
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td>จัดทําแผนรับมือภัยพิบัติ</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td>ฝึกซ้อมการรับมือภัยพิบัติ</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td>ปรับปรุงระบบผังเมือง/ชุมชน</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
        <tr>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td>อื่น ๆ (โปรดระบุ)</td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
          <td><input type="radio" name="optionsRadios" value="option2"></td>
        </tr>
      </tbody>
    </table>
      
      
  </fieldset>
  
  <div class="actions">
    <input type="submit" class="btn primary" value="Save changes">&nbsp;<button type="reset" class="btn">Cancel</button>
  </div>