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

.row-me {
  overflow: hidden;
}

.row-me > div {
  float: left;
}
</style>

<fieldset> <!-- fieldset -->
    <fieldset class="section1"> <!-- fieldset -->
  		<h3>ข้อมูลพื่นที่</h3>
  		
  		<div class="target">
      	<div class="clearfix">
      	<?php $this->widget('ext.location.LocationMultipleWidget', array('model' => $model, 'attribute' => 'locations')); ?>
        </div>
      </div>
    </fieldset>
    
    <fieldset class="section2"> <!-- fieldset -->
  		<h3>ข้อมูลพื่นที่เพิ่มเติม</h3>
      
			<div class="clearfix label-s">
    		<label class="no-float">หมู่ท่</label>
  			<input class="span1" name="Data[4]" type="text" placeholder="-" value="<?php echo $Data[4]; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
    		<label class="no-float">หมู่บ้าน</label>
  			<input class="span5" name="Data[1]" type="text" placeholder="-" value="<?php echo $Data[1]; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
    		<label class="no-float">ซอย</label>
    		<input class="span5" name="Data[2]" type="text" placeholder="-" value="<?php echo $Data[2]; ?>">
  		</div>

  		<div class="clearfix label-s">
    		<label class="no-float">ถนน</label>
  			<input class="span5" name="Data[3]" type="text" placeholder="-" value="<?php echo $Data[3]; ?>">
  		</div>

  		<div class="clearfix label-s">
    		<label class="no-float">บ้านเลขที่</label>
  			<input class="span1" name="Data[5]" type="text" placeholder="-" value="<?php echo $Data[5]; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
    		<label class="no-float">รหัสไปรษณีย์</label>
  			<input class="span2" name="Data[6]" type="text" placeholder="-" value="<?php echo $Data[6]; ?>">
  		</div>
		
  	</fieldset>
  	
	  <fieldset class="section3"> <!-- fieldset -->
  		<h3>ข้อมูลผู้ติดต่อ</h3>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">ชื่อ-นามสกุล</label>
  			<input class="span8" name="Webform[filter0]" type="text" placeholder="-" value="<?php echo $Webform['filter0']; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">อายุ</label>
  			<input class="span1" name="Data[12]" type="text" placeholder="-" value="<?php echo $Data[12]; ?>">
  			<label class="no-float unit">ปี</label>
  		</div>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">เพศ</label>
  			<input class="span1" name="Data[13]" type="text" placeholder="-" value="<?php echo $Data[13]; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">เบอร์โทรศัพท์</label>
  			<input class="span8" name="Data[14]" type="text" placeholder="-" value="<?php echo $Data[14]; ?>">
  		</div>
  		
  		<div class="clearfix label-s">
	  		<label class="no-float">จำนวนสมาชิกในครอบครัว</label>
  			<input class="span1" name="Data[15]" type="text" placeholder="-" value="<?php echo $Data[15]; ?>">
  			<label class="no-float unit">คน</label>
  		</div>
  		
  	</fieldset>
  	
  	<fieldset class="section4"> <!-- fieldset -->
  		<h3>รายละเอียดอื่นๆ</h3>
      
			<div class="clearfix label-s">
    		<label class="no-float"> </label>
  			<input class="span10" name="Data[76]" type="text" placeholder="-" value="<?php echo $Data[76]; ?>">
  		</div>
		
  	</fieldset>
  	
  	<fieldset class="section5"> <!-- fieldset -->
    		<h3>รายละเอียดสมาชิกแต่ละคนในครอบครัว</h3>
    		
    		<br />
        <fieldset> <!-- fieldset member 1 -->
        		<h4>สมาชิกคนที่ 1</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[20]" type="text" placeholder="-" value="<?php echo $Data[20]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[21]" type="text" placeholder="-" value="<?php echo $Data[21]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[22]" type="text" placeholder="-" value="<?php echo $Data[22]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[23]" type="text" placeholder="-" value="<?php echo $Data[23]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[24]" type="text" placeholder="-" value="<?php echo $Data[24]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[25]" type="text" placeholder="-" value="<?php echo $Data[25]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[26]" type="text" placeholder="-" value="<?php echo $Data[26]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 2 -->
        		<h4>สมาชิกคนที่ 2</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[27]" type="text" placeholder="-" value="<?php echo $Data[27]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[28]" type="text" placeholder="-" value="<?php echo $Data[28]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[29]" type="text" placeholder="-" value="<?php echo $Data[29]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[30]" type="text" placeholder="-" value="<?php echo $Data[30]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[31]" type="text" placeholder="-" value="<?php echo $Data[31]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[32]" type="text" placeholder="-" value="<?php echo $Data[32]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[33]" type="text" placeholder="-" value="<?php echo $Data[33]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 3 -->
        		<h4>สมาชิกคนที่ 3</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[34]" type="text" placeholder="-" value="<?php echo $Data[34]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[35]" type="text" placeholder="-" value="<?php echo $Data[35]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[36]" type="text" placeholder="-" value="<?php echo $Data[36]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[37]" type="text" placeholder="-" value="<?php echo $Data[37]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[38]" type="text" placeholder="-" value="<?php echo $Data[38]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[39]" type="text" placeholder="-" value="<?php echo $Data[39]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[40]" type="text" placeholder="-" value="<?php echo $Data[40]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 4 -->
        		<h4>สมาชิกคนที่ 4</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[41]" type="text" placeholder="-" value="<?php echo $Data[41]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[42]" type="text" placeholder="-" value="<?php echo $Data[42]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[43]" type="text" placeholder="-" value="<?php echo $Data[43]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[44]" type="text" placeholder="-" value="<?php echo $Data[44]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[45]" type="text" placeholder="-" value="<?php echo $Data[45]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[46]" type="text" placeholder="-" value="<?php echo $Data[46]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[47]" type="text" placeholder="-" value="<?php echo $Data[47]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 5 -->
        		<h4>สมาชิกคนที่ 5</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[48]" type="text" placeholder="-" value="<?php echo $Data[48]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[49]" type="text" placeholder="-" value="<?php echo $Data[49]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[50]" type="text" placeholder="-" value="<?php echo $Data[50]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[51]" type="text" placeholder="-" value="<?php echo $Data[51]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[52]" type="text" placeholder="-" value="<?php echo $Data[52]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[53]" type="text" placeholder="-" value="<?php echo $Data[53]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[54]" type="text" placeholder="-" value="<?php echo $Data[54]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 6 -->
        		<h4>สมาชิกคนที่ 6</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[55]" type="text" placeholder="-" value="<?php echo $Data[55]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[56]" type="text" placeholder="-" value="<?php echo $Data[56]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[57]" type="text" placeholder="-" value="<?php echo $Data[57]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[58]" type="text" placeholder="-" value="<?php echo $Data[58]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[59]" type="text" placeholder="-" value="<?php echo $Data[59]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[60]" type="text" placeholder="-" value="<?php echo $Data[60]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[61]" type="text" placeholder="-" value="<?php echo $Data[61]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 7 -->
        		<h4>สมาชิกคนที่ 7</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[62]" type="text" placeholder="-" value="<?php echo $Data[62]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[63]" type="text" placeholder="-" value="<?php echo $Data[63]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[64]" type="text" placeholder="-" value="<?php echo $Data[64]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[65]" type="text" placeholder="-" value="<?php echo $Data[65]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[66]" type="text" placeholder="-" value="<?php echo $Data[66]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[67]" type="text" placeholder="-" value="<?php echo $Data[67]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[68]" type="text" placeholder="-" value="<?php echo $Data[68]; ?>">
        		</div>
    		
    		</fieldset>
    		<br />
    		
        <fieldset> <!-- fieldset member 8 -->
        		<h4>สมาชิกคนที่ 8</h4>
        		<div class="clearfix label-s">
      	  		<label class="no-float">ชื่อ-นามสกุล</label>
        			<input class="span8" name="Data[69]" type="text" placeholder="-" value="<?php echo $Data[69]; ?>">
        		</div>
    		    
    		    <div class="row-me">
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">เพศ</label>
            			<input class="span1" name="Data[70]" type="text" placeholder="-" value="<?php echo $Data[70]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">อายุ</label>
            			<input class="span1" name="Data[71]" type="text" placeholder="-" value="<?php echo $Data[71]; ?>">
            		</div>
            		<div class="clearfix label-s span4">
          	  		<label class="no-float">สถานะ</label>
            			<input class="span1" name="Data[72]" type="text" placeholder="-" value="<?php echo $Data[72]; ?>">
            		</div>

        		</div>
        		
    		  	<div class="clearfix label-s">
      	  		<label class="no-float">โรคประจำตัว</label>
        			<input class="span10" name="Data[73]" type="text" placeholder="-" value="<?php echo $Data[73]; ?>">
        		</div>
        		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ข้อกำหนดของร่างกาย</label>
        			<input class="span10" name="Data[74]" type="text" placeholder="-" value="<?php echo $Data[74]; ?>">
        		</div>
    		
        		<div class="clearfix label-s">
      	  		<label class="no-float">ความจำเป็นพื้นฐาน</label>
        			<input class="span10" name="Data[75]" type="text" placeholder="-" value="<?php echo $Data[75]; ?>">
        		</div>
    		
    		</fieldset>

    	</fieldset>
</fieldset> <!-- end fieldset -->


