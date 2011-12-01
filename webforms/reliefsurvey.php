<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
<link rel="stylesheet" href="/css/defaultTheme.css">
<style type="text/css">
	.no-float{
		float: none;
		width: 125px;
		display: inline-block;
	}
	.float-none {float: none;}
	
	table input.span3, textarea.span3, table input.span2, textarea.span2{
		margin: 0;
	}
	table .span1 {width: 30px; margin-left: 0; margin-right: 0;}
	
	input.span3, textarea.span3, input.span2, textarea.span2, input.span7, input.span1,  input.span4{
    margin-left: 10px;
		margin-right: 10px;
	}
	
	fieldset.section3 tbody tr td, .section2 tbody tr td{padding: 5px;}
	fieldset.section3 .table-inner{
    border: 1px solid #eee;
	}
	   .table-inner {}
	     .table-lv1 {background: #a3a3a3; color: #fff;}
	       .table-lv1 h3 {}
	     .table-lv2 {background: #c1c1c1;}

	fieldset.section3 .tabletwo {
	  width: 100%;
	}

	fieldset.section3 .tabletwo input.span4 {margin-left: 0; margin-right: 0;}
	fieldset.section3 .tabletwo input.span1 {margin-left: 0; margin-right: 0;}
	.no-padding {padding: 0 !important}
  .label-s label {
    width: 100px;
  }
  label.label-ss {width: 60px}
  
  .section1 label {width: 150px; }
  .section2 table tbody tr td input {
    margin-left: 0;
    margin-right: 0;
  }
  
  .center tbody tr td{text-align: center;}
  h3 {
    margin: 0 0  10px;
    text-align: left;
  }
  h4 {text-align: left;}
	.clear {clear: both;}
	.indent {padding: 0 0 0 30px}
	table thead tr th {text-align: center; vertical-align: middle; border: 1px solid #eee; padding: 5px;}  
	table tbody tr th {vertical-align: middle; background: #ececec; text-align: left;}
	table tbody tr td {
	  vertical-align: middle; 
	  -webkit-border-radius: 0 !important; 
	  -moz-border-radius: 0 !important; 
	  border-radius: 0 !important; 
	  border-left: 1px solid #eee; 
	  border-bottom: 1px solid #eee;
	  text-align: left;
	}
 .help-block {margin: 0 0 5px;}
 .al-left {text-align: left !important;}
 
 td.h-line {height: 40px;}
 h3.h-line,  h4.h-line {position: absolute; line-height: 0}
 
 /* table */ 
 .fht-table th,  .section3-table th {/* padding: 0; */}
 .fht-table td,  .section3-table td{vertical-align: middle; line-height: 1.5em; text-align: center;} 

 .fht-table td {background: #e3e3e3;}
 .bgheadlv1 {background: #a3a3a3 !important;} 
 .bgheadlv2 {background: #c1c1c1 !important;}
 .section3-table td {background: transparent} 

 .fht-fixed-column thead th {
   font-size: 15px;
   vertical-align: middle;
   color: #fff;
   background: #919191;
 }
 .fht-table th {
   background: #666;
   font-size: 13px;
   color: #fff;
   line-height: 30px;
 }
 
 .section3 textarea {width: 140px;}
 
 
</style>


  <fieldset>
    <legend>ข้อมูลพื้นที่</legend>
    <div class="clearfix">
		  <label class="float-none">วันที่ให้ข้อมูล</label>
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
    <div class="clearfix">
      <?php $this->widget('ext.location.LocationWidget', array('model' => $model, 'attribute' => 'locations', 'multiple' => true, 'index' => 0)); ?>
		</div>
  </fieldset>
  <br/><br/>
  
  
  
<!-- ข้อมูลทั่วไปของผู้ให้ข้อมูล -->
  <fieldset title="ข้อมูลทั่วไปของผู้ให้ข้อมูล" class="data-general">
      <legend>ข้อมูลทั่วไปของผู้ให้ข้อมูล</legend>
      <div class="clearfix">
		  <label>ชื่อ - นามสกุลผู้ให้ข้อมูล <span>(นาย/นาง/นางสาว)</span></label>
		  <div class="input">
		    <input class="xlarge"  name="Data[0]" size="60" type="text" value="<?php echo $Data[0]; ?>">
		  </div>
		</div><!-- /clearfix -->
		<div class="clearfix label-s">
			<label class="no-float">สถานที่ทํางาน</label>
			<input class="span2"  name="Data[1]" type="text"  placeholder="" value="<?php echo $Data[1]; ?>">
			<label class="no-float">หมู่ที่</label>
			<input class="span1"  name="Data[2]" type="text"  placeholder="" value="<?php echo $Data[2]; ?>">
			<label class="no-float">ตําบล</label>
			<input class="span2"  name="Data[3]" type="text"  placeholder="" value="<?php echo $Data[3]; ?>">
		</div>
		<div class="clearfix label-s">
			<label class="no-float">อําเภอ</label>
			<input class="span2"  name="Data[4]" type="text"  placeholder="" value="<?php echo $Data[4]; ?>">
			<label class="no-float">จังหวัด</label>
			<input class="span2"  name="Data[5]" type="text"  placeholder="" value="<?php echo $Data[5]; ?>">
			<label class="no-float">โทรศัพท์</label>
			<input class="span2"  name="Data[6]" type="text"  placeholder="" value="<?php echo $Data[6]; ?>">
		</div>
		<div class="clearfix label-s">
			<label class="no-float">ตําแหน่งทางสังคม</label>
			<input class="span4"  name="Data[7]" type="text"  placeholder="" value="<?php echo $Data[7]; ?>">
		</div>		
  </fieldset>
  <br/><br/>
  
  
  
<!-- ส่วนที่ 1 ข้อมูลทั่วไปของตําบล -->
  <fieldset title="ข้อมูลทั่วไปของตําบล" class="section1">
      <legend>ส่วนที่ 1 ข้อมูลทั่วไปของตําบล</legend>
      <div class="clearfix">
			  <label class="no-floa">1.1 จํานวนครัวเรือน</label>
			  <div class="input">
			    <input class="span2"  name="Data[8]" size="30" type="text" value="<?php echo $Data[8]; ?>"> <span>ครัวเรือน</span>
			  </div>
			</div><!-- /clearfix -->
			<div class="clearfix">
				<label class="no-float">1.2 ประชากรปัจจุบันทั้งหมดโดยประมาณ</label>
				<input class="span1"  name="Data[9]" type="text"  placeholder="" value="<?php echo $Data[9]; ?>"> <span>คน</span>
				<label class="no-float label-ss">ชาย</label>
				<input class="span1"  name="Data[10]" type="text"  placeholder="" value="<?php echo $Data[10]; ?>"> <span>คน</span>
				<label class="no-float label-ss">หญิง</label>
				<input class="span1"  name="Data[11]" type="text"  placeholder="" value="<?php echo $Data[11]; ?>"> <span>คน</span>
			</div>
			<div class="clearfix">
				<label class="no-float">โดยเฉลี่ยครัวเรือนละ</label>
				<input class="span1"  name="Data[12]" type="text"  placeholder="" value="<?php echo $Data[12]; ?>"> <span>คน</span>
				<label class="no-float">มีประชากรแฝง</label> 
				<input class="span1"  name="Data[13]" type="text" placeholder="" value="<?php echo $Data[13]; ?>"> <span>คน</span>
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
				<input class="span3"  name="Data[17]" type="text"  placeholder="" value="<?php echo $Data[17]; ?>">
				<label class="no-float">รองลงมา</label>
				<input class="span3"  name="Data[18]" type="text"  placeholder="" value="<?php echo $Data[18]; ?>">
			</div>
  </fieldset>
  <br/><br/>
  
  
<!-- ส่วนที่ 2 ข้อมูลผู้ประสานงานในพื้นที่ -->
  <fieldset title="ข้อมูลผู้ประสานงานในพื้นที่" class="section2">
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
      <div class="table-village">
				<table class="bordered-table table-village-tb">
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
	            <td><input class="span4"  name="Data[1323]" type="text" placeholder="" value="<?php echo $Data[1323]; ?>"></td>
	            <td><input class="span4"  name="Data[1324]" type="text" placeholder="" value="<?php echo $Data[1324]; ?>"></td>
	            <td><input class="span4"  name="Data[1325]" type="text" placeholder="" value="<?php echo $Data[1325]; ?>"></td>
	            <td><input class="span4"  name="Data[1326]" type="text" placeholder="" value="<?php echo $Data[1326]; ?>"></td>
	          </tr>
	          <tr>
	            <td><input class="span4"  name="Data[1327]" type="text" placeholder="" value="<?php echo $Data[1327]; ?>"></td>
	            <td><input class="span4"  name="Data[1328]" type="text" placeholder="" value="<?php echo $Data[1328]; ?>"></td>
	            <td><input class="span4"  name="Data[1329]" type="text" placeholder="" value="<?php echo $Data[1329]; ?>"></td>
	            <td><input class="span4"  name="Data[1330]" type="text" placeholder="" value="<?php echo $Data[1330]; ?>"></td>
	          </tr>
	          <tr>
	            <td><input class="span4"  name="Data[1331]" type="text" placeholder="" value="<?php echo $Data[1331]; ?>"></td>
	            <td><input class="span4"  name="Data[1332]" type="text" placeholder="" value="<?php echo $Data[1332]; ?>"></td>
	            <td><input class="span4"  name="Data[1333]" type="text" placeholder="" value="<?php echo $Data[1333]; ?>"></td>
	            <td><input class="span4"  name="Data[1334]" type="text" placeholder="" value="<?php echo $Data[1334]; ?>"></td>
	          </tr>
	          <tr>
	            <td><input class="span4"  name="Data[1335]" type="text" placeholder="" value="<?php echo $Data[1335]; ?>"></td>
	            <td><input class="span4"  name="Data[1336]" type="text" placeholder="" value="<?php echo $Data[1336]; ?>"></td>
	            <td><input class="span4"  name="Data[1337]" type="text" placeholder="" value="<?php echo $Data[1337]; ?>"></td>
	            <td><input class="span4"  name="Data[1338]" type="text" placeholder="" value="<?php echo $Data[1338]; ?>"></td>
	          </tr>
	          <tr>
	            <td><input class="span4"  name="Data[1339]" type="text" placeholder="" value="<?php echo $Data[1339]; ?>"></td>
	            <td><input class="span4"  name="Data[1340]" type="text" placeholder="" value="<?php echo $Data[1340]; ?>"></td>
	            <td><input class="span4"  name="Data[1341]" type="text" placeholder="" value="<?php echo $Data[1341]; ?>"></td>
	            <td><input class="span4"  name="Data[1342]" type="text" placeholder="" value="<?php echo $Data[1342]; ?>"></td>
	          </tr>          
	          <tr>
	            <td><input class="span4"  name="Data[1232]" type="text" placeholder="" value="<?php echo $Data[1232]; ?>"></td>
	            <td><input class="span4"  name="Data[1233]" type="text" placeholder="" value="<?php echo $Data[1233]; ?>"></td>
	            <td><input class="span4"  name="Data[1234]" type="text" placeholder="" value="<?php echo $Data[1234]; ?>"></td>
	            <td><input class="span4"  name="Data[1235]" type="text" placeholder="" value="<?php echo $Data[1235]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1236]" type="text" placeholder="" value="<?php echo $Data[1236]; ?>"></td>
	            <td><input class="span4"  name="Data[1237]" type="text" placeholder="" value="<?php echo $Data[1237]; ?>"></td>
	            <td><input class="span4"  name="Data[1238]" type="text" placeholder="" value="<?php echo $Data[1238]; ?>"></td>
	            <td><input class="span4"  name="Data[1239]" type="text" placeholder="" value="<?php echo $Data[1239]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1240]" type="text" placeholder="" value="<?php echo $Data[1240]; ?>"></td>
	            <td><input class="span4"  name="Data[1241]" type="text" placeholder="" value="<?php echo $Data[1241]; ?>"></td>
	            <td><input class="span4"  name="Data[1242]" type="text" placeholder="" value="<?php echo $Data[1242]; ?>"></td>
	            <td><input class="span4"  name="Data[1243]" type="text" placeholder="" value="<?php echo $Data[1243]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1244]" type="text" placeholder="" value="<?php echo $Data[1244]; ?>"></td>
	            <td><input class="span4"  name="Data[1245]" type="text" placeholder="" value="<?php echo $Data[1245]; ?>"></td>
	            <td><input class="span4"  name="Data[1246]" type="text" placeholder="" value="<?php echo $Data[1246]; ?>"></td>
	            <td><input class="span4"  name="Data[1247]" type="text" placeholder="" value="<?php echo $Data[1247]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1248]" type="text" placeholder="" value="<?php echo $Data[1248]; ?>"></td>
	            <td><input class="span4"  name="Data[1249]" type="text" placeholder="" value="<?php echo $Data[1249]; ?>"></td>
	            <td><input class="span4"  name="Data[1250]" type="text" placeholder="" value="<?php echo $Data[1250]; ?>"></td>
	            <td><input class="span4"  name="Data[1251]" type="text" placeholder="" value="<?php echo $Data[1251]; ?>"></td>
	          </tr>
	          <tr>
	            <td><input class="span4"  name="Data[1252]" type="text" placeholder="" value="<?php echo $Data[1252]; ?>"></td>
	            <td><input class="span4"  name="Data[1253]" type="text" placeholder="" value="<?php echo $Data[1253]; ?>"></td>
	            <td><input class="span4"  name="Data[1254]" type="text" placeholder="" value="<?php echo $Data[1254]; ?>"></td>
	            <td><input class="span4"  name="Data[1255]" type="text" placeholder="" value="<?php echo $Data[1255]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1256]" type="text" placeholder="" value="<?php echo $Data[1256]; ?>"></td>
	            <td><input class="span4"  name="Data[1257]" type="text" placeholder="" value="<?php echo $Data[1257]; ?>"></td>
	            <td><input class="span4"  name="Data[1258]" type="text" placeholder="" value="<?php echo $Data[1258]; ?>"></td>
	            <td><input class="span4"  name="Data[1259]" type="text" placeholder="" value="<?php echo $Data[1259]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1260]" type="text" placeholder="" value="<?php echo $Data[1260]; ?>"></td>
	            <td><input class="span4"  name="Data[1261]" type="text" placeholder="" value="<?php echo $Data[1261]; ?>"></td>
	            <td><input class="span4"  name="Data[1262]" type="text" placeholder="" value="<?php echo $Data[1262]; ?>"></td>
	            <td><input class="span4"  name="Data[1263]" type="text" placeholder="" value="<?php echo $Data[1263]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1264]" type="text" placeholder="" value="<?php echo $Data[1264]; ?>"></td>
	            <td><input class="span4"  name="Data[1265]" type="text" placeholder="" value="<?php echo $Data[1265]; ?>"></td>
	            <td><input class="span4"  name="Data[1266]" type="text" placeholder="" value="<?php echo $Data[1266]; ?>"></td>
	            <td><input class="span4"  name="Data[1267]" type="text" placeholder="" value="<?php echo $Data[1267]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1268]" type="text" placeholder="" value="<?php echo $Data[1268]; ?>"></td>
	            <td><input class="span4"  name="Data[1269]" type="text" placeholder="" value="<?php echo $Data[1269]; ?>"></td>
	            <td><input class="span4"  name="Data[1270]" type="text" placeholder="" value="<?php echo $Data[1270]; ?>"></td>
	            <td><input class="span4"  name="Data[1271]" type="text" placeholder="" value="<?php echo $Data[1271]; ?>"></td>
	          </tr>
	          <tr>
	            <td><input class="span4"  name="Data[1272]" type="text" placeholder="" value="<?php echo $Data[1272]; ?>"></td>
	            <td><input class="span4"  name="Data[1273]" type="text" placeholder="" value="<?php echo $Data[1273]; ?>"></td>
	            <td><input class="span4"  name="Data[1274]" type="text" placeholder="" value="<?php echo $Data[1274]; ?>"></td>
	            <td><input class="span4"  name="Data[1275]" type="text" placeholder="" value="<?php echo $Data[1275]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1276]" type="text" placeholder="" value="<?php echo $Data[1276]; ?>"></td>
	            <td><input class="span4"  name="Data[1277]" type="text" placeholder="" value="<?php echo $Data[1277]; ?>"></td>
	            <td><input class="span4"  name="Data[1278]" type="text" placeholder="" value="<?php echo $Data[1278]; ?>"></td>
	            <td><input class="span4"  name="Data[1279]" type="text" placeholder="" value="<?php echo $Data[1279]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1280]" type="text" placeholder="" value="<?php echo $Data[1280]; ?>"></td>
	            <td><input class="span4"  name="Data[1281]" type="text" placeholder="" value="<?php echo $Data[1281]; ?>"></td>
	            <td><input class="span4"  name="Data[1282]" type="text" placeholder="" value="<?php echo $Data[1282]; ?>"></td>
	            <td><input class="span4"  name="Data[1283]" type="text" placeholder="" value="<?php echo $Data[1283]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1284]" type="text" placeholder="" value="<?php echo $Data[1284]; ?>"></td>
	            <td><input class="span4"  name="Data[1285]" type="text" placeholder="" value="<?php echo $Data[1285]; ?>"></td>
	            <td><input class="span4"  name="Data[1286]" type="text" placeholder="" value="<?php echo $Data[1286]; ?>"></td>
	            <td><input class="span4"  name="Data[1287]" type="text" placeholder="" value="<?php echo $Data[1287]; ?>"></td>
	          </tr>                                                                                        
	          <tr>                                                                                         
	            <td><input class="span4"  name="Data[1288]" type="text" placeholder="" value="<?php echo $Data[1288]; ?>"></td>
	            <td><input class="span4"  name="Data[1289]" type="text" placeholder="" value="<?php echo $Data[1289]; ?>"></td>
	            <td><input class="span4"  name="Data[1290]" type="text" placeholder="" value="<?php echo $Data[1290]; ?>"></td>
	            <td><input class="span4"  name="Data[1291]" type="text" placeholder="" value="<?php echo $Data[1291]; ?>"></td>
	          </tr>      
	        </tbody>
	      </table>
	    </div>
  </fieldset>
  <br/><br/>

  
  
<!-- ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู -->
  <fieldset title="การสํารวจเพื่อการฟื้นฟู" class="section3">
  <legend>ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู</legend>
  <span class="help-block">*** กรุณาเลื่อนแถบเลื่อนด้านล่าง (scrollbar) ของตาราง เพื่อทำการกรอกข้อมูลในแต่ละหมู่ ***</span>
	<table class="bordered-top section3-table">
	  <thead>
	    <tr>
	      <th>ประเด็นความเสียหาย</th>  
	      <th>สรุปรวม<br />(เพื่อเป็นภาพตำบล)</th>
	      <th>รายละเอียดเพิ่มเติม</th>
	      <th>หมู่ <input class="span1"  name="Data[42]" type="text" value="<?php echo $Data[42]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[43]" type="text" value="<?php echo $Data[43]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[44]" type="text" value="<?php echo $Data[44]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[45]" type="text" value="<?php echo $Data[45]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[46]" type="text" value="<?php echo $Data[46]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1344]" type="text" value="<?php echo $Data[1344]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1345]" type="text" value="<?php echo $Data[1345]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1346]" type="text" value="<?php echo $Data[1346]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1347]" type="text" value="<?php echo $Data[1347]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1348]" type="text" value="<?php echo $Data[1348]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1349]" type="text" value="<?php echo $Data[1349]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1350]" type="text" value="<?php echo $Data[1350]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1351]" type="text" value="<?php echo $Data[1351]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1352]" type="text" value="<?php echo $Data[1352]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1353]" type="text" value="<?php echo $Data[1353]; ?>"></th>	      
	      <th>หมู่ <input class="span1"  name="Data[1354]" type="text" value="<?php echo $Data[1354]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1355]" type="text" value="<?php echo $Data[1355]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1356]" type="text" value="<?php echo $Data[1356]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1357]" type="text" value="<?php echo $Data[1357]; ?>"></th>
	      <th>หมู่ <input class="span1"  name="Data[1358]" type="text" value="<?php echo $Data[1358]; ?>"></th>	      	      

	    </tr>
	  </thead>
	  <tbody>

		    <tr class="table-lv1">
		      <td class="h-line bgheadlv1" style="width: 260px;"><div style="width: 260px;"><h3 class="h-line">3.1 ความเสียหายต่อชีวิต</h3></div></td>
		      <td class="bgheadlv1" style="width: 115px;"><div style="width: 115px;"></div></td>
		      <td class="bgheadlv1" style="width: 170px;"><div style="width: 170px;"></div></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.1.1 ผู้เสียหายต่อชีวิตและความปลอดภัย (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
        <!--
		    <tr>
		      <th colspan="23" class="table-lv2" style="width:100%"><h4>3.1.1 ผู้เสียหายต่อชีวิตและความปลอดภัย (ระบุจำนวน)</h4></th>
		    </tr>
		    -->

		    <tr>
		      <td class="al-left">- เสียชีวิต</td>
		      <td><input class="span3"  name="Data[567]" type="text" value="<?php echo $Data[567]; ?>"></td>
		      <td><input class="span4"  name="Data[568]" type="text" value="<?php echo $Data[568]; ?>"></td>
		      <td><input class="span1"  name="Data[47]" type="text" value="<?php echo $Data[47]; ?>"></td>
		      <td><input class="span1"  name="Data[563]" type="text" value="<?php echo $Data[563]; ?>"></td>
		      <td><input class="span1"  name="Data[564]" type="text" value="<?php echo $Data[564]; ?>"></td>
		      <td><input class="span1"  name="Data[565]" type="text" value="<?php echo $Data[565]; ?>"></td>
		      <td><input class="span1"  name="Data[566]" type="text" value="<?php echo $Data[566]; ?>"></td>
		      <td><input class="span1"  name="Data[1359]" type="text" value="<?php echo $Data[1359]; ?>"></td>
		      <td><input class="span1"  name="Data[1360]" type="text" value="<?php echo $Data[1360]; ?>"></td>
		      <td><input class="span1"  name="Data[1361]" type="text" value="<?php echo $Data[1361]; ?>"></td>
		      <td><input class="span1"  name="Data[1362]" type="text" value="<?php echo $Data[1362]; ?>"></td>
		      <td><input class="span1"  name="Data[1363]" type="text" value="<?php echo $Data[1363]; ?>"></td>
		      <td><input class="span1"  name="Data[1364]" type="text" value="<?php echo $Data[1364]; ?>"></td>
		      <td><input class="span1"  name="Data[1365]" type="text" value="<?php echo $Data[1365]; ?>"></td>
		      <td><input class="span1"  name="Data[1366]" type="text" value="<?php echo $Data[1366]; ?>"></td>
		      <td><input class="span1"  name="Data[1367]" type="text" value="<?php echo $Data[1367]; ?>"></td>
		      <td><input class="span1"  name="Data[1368]" type="text" value="<?php echo $Data[1368]; ?>"></td>
		      <td><input class="span1"  name="Data[1369]" type="text" value="<?php echo $Data[1369]; ?>"></td>
		      <td><input class="span1"  name="Data[1370]" type="text" value="<?php echo $Data[1370]; ?>"></td>
		      <td><input class="span1"  name="Data[1371]" type="text" value="<?php echo $Data[1371]; ?>"></td>
		      <td><input class="span1"  name="Data[1372]" type="text" value="<?php echo $Data[1372]; ?>"></td>
		      <td><input class="span1"  name="Data[1373]" type="text" value="<?php echo $Data[1373]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- สูญหาย</td>
		      <td><input class="span3"  name="Data[574]" type="text" value="<?php echo $Data[574]; ?>"></td>
		      <td><input class="span4"  name="Data[575]" type="text" value="<?php echo $Data[575]; ?>"></td>
		      <td><input class="span1"  name="Data[569]" type="text" value="<?php echo $Data[569]; ?>"></td>
		      <td><input class="span1"  name="Data[570]" type="text" value="<?php echo $Data[570]; ?>"></td>
		      <td><input class="span1"  name="Data[571]" type="text" value="<?php echo $Data[571]; ?>"></td>
		      <td><input class="span1"  name="Data[572]" type="text" value="<?php echo $Data[572]; ?>"></td>
		      <td><input class="span1"  name="Data[573]" type="text" value="<?php echo $Data[573]; ?>"></td>
		      <td><input class="span1"  name="Data[1374]" type="text" value="<?php echo $Data[1374]; ?>"></td>
		      <td><input class="span1"  name="Data[1375]" type="text" value="<?php echo $Data[1375]; ?>"></td>
		      <td><input class="span1"  name="Data[1376]" type="text" value="<?php echo $Data[1376]; ?>"></td>
		      <td><input class="span1"  name="Data[1377]" type="text" value="<?php echo $Data[1377]; ?>"></td>
		      <td><input class="span1"  name="Data[1378]" type="text" value="<?php echo $Data[1378]; ?>"></td>
		      <td><input class="span1"  name="Data[1379]" type="text" value="<?php echo $Data[1379]; ?>"></td>
		      <td><input class="span1"  name="Data[1380]" type="text" value="<?php echo $Data[1380]; ?>"></td>
		      <td><input class="span1"  name="Data[1381]" type="text" value="<?php echo $Data[1381]; ?>"></td>
		      <td><input class="span1"  name="Data[1382]" type="text" value="<?php echo $Data[1382]; ?>"></td>
		      <td><input class="span1"  name="Data[1383]" type="text" value="<?php echo $Data[1383]; ?>"></td>
		      <td><input class="span1"  name="Data[1384]" type="text" value="<?php echo $Data[1384]; ?>"></td>
		      <td><input class="span1"  name="Data[1385]" type="text" value="<?php echo $Data[1385]; ?>"></td>
		      <td><input class="span1"  name="Data[1386]" type="text" value="<?php echo $Data[1386]; ?>"></td>
		      <td><input class="span1"  name="Data[1387]" type="text" value="<?php echo $Data[1387]; ?>"></td>
		      <td><input class="span1"  name="Data[1388]" type="text" value="<?php echo $Data[1388]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- บาดเจ็บ</td>
		      <td><input class="span3"  name="Data[581]" type="text" value="<?php echo $Data[581]; ?>"></td>
		      <td><input class="span4"  name="Data[582]" type="text" value="<?php echo $Data[582]; ?>"></td>
		      <td><input class="span1"  name="Data[576]" type="text" value="<?php echo $Data[576]; ?>"></td>
		      <td><input class="span1"  name="Data[577]" type="text" value="<?php echo $Data[577]; ?>"></td>
		      <td><input class="span1"  name="Data[578]" type="text" value="<?php echo $Data[578]; ?>"></td>
		      <td><input class="span1"  name="Data[579]" type="text" value="<?php echo $Data[579]; ?>"></td>
		      <td><input class="span1"  name="Data[580]" type="text" value="<?php echo $Data[580]; ?>"></td>
		      <td><input class="span1"  name="Data[1389]" type="text" value="<?php echo $Data[1389]; ?>"></td>
		      <td><input class="span1"  name="Data[1390]" type="text" value="<?php echo $Data[1390]; ?>"></td>
		      <td><input class="span1"  name="Data[1391]" type="text" value="<?php echo $Data[1391]; ?>"></td>
		      <td><input class="span1"  name="Data[1392]" type="text" value="<?php echo $Data[1392]; ?>"></td>
		      <td><input class="span1"  name="Data[1393]" type="text" value="<?php echo $Data[1393]; ?>"></td>
		      <td><input class="span1"  name="Data[1394]" type="text" value="<?php echo $Data[1394]; ?>"></td>
		      <td><input class="span1"  name="Data[1395]" type="text" value="<?php echo $Data[1395]; ?>"></td>
		      <td><input class="span1"  name="Data[1396]" type="text" value="<?php echo $Data[1396]; ?>"></td>
		      <td><input class="span1"  name="Data[1397]" type="text" value="<?php echo $Data[1397]; ?>"></td>
		      <td><input class="span1"  name="Data[1398]" type="text" value="<?php echo $Data[1398]; ?>"></td>
		      <td><input class="span1"  name="Data[1399]" type="text" value="<?php echo $Data[1399]; ?>"></td>
		      <td><input class="span1"  name="Data[1400]" type="text" value="<?php echo $Data[1400]; ?>"></td>
		      <td><input class="span1"  name="Data[1401]" type="text" value="<?php echo $Data[1401]; ?>"></td>
		      <td><input class="span1"  name="Data[1402]" type="text" value="<?php echo $Data[1402]; ?>"></td>
		      <td><input class="span1"  name="Data[1403]" type="text" value="<?php echo $Data[1403]; ?>"></td>

		    </tr>

		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.1.2 ปัจจัยเสี่ยงต่อความปลอดภัย</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
<!--
		   <tr>
		      <th colspan="8" class="table-lv2"><h4>3.1.2 ปัจจัยเสี่ยงต่อความปลอดภัย</h4></th>
		    </tr>
-->
		   
		    <tr>
		      <td class="al-left">- โจรกรรม</td>
		      <td><input class="span3"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
		      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
		      <td><input type="checkbox" name="Data[604]" value="โจรกรรม" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[605]" value="โจรกรรม" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[606]" value="โจรกรรม" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[607]" value="โจรกรรม" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[608]" value="โจรกรรม" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1404]" value="โจรกรรม" <?php if ($Data[1404] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1405]" value="โจรกรรม" <?php if ($Data[1405] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1406]" value="โจรกรรม" <?php if ($Data[1406] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1407]" value="โจรกรรม" <?php if ($Data[1407] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1408]" value="โจรกรรม" <?php if ($Data[1408] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1409]" value="โจรกรรม" <?php if ($Data[1409] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1410]" value="โจรกรรม" <?php if ($Data[1410] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1411]" value="โจรกรรม" <?php if ($Data[1411] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1412]" value="โจรกรรม" <?php if ($Data[1412] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1413]" value="โจรกรรม" <?php if ($Data[1413] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1414]" value="โจรกรรม" <?php if ($Data[1414] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1415]" value="โจรกรรม" <?php if ($Data[1415] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1416]" value="โจรกรรม" <?php if ($Data[1416] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1417]" value="โจรกรรม" <?php if ($Data[1417] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1418]" value="โจรกรรม" <?php if ($Data[1418] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- สัตว์ร้าย</td>
		      <td><input class="span3"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
		      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
		      <td><input type="checkbox" name="Data[611]" value="สัตว์ร้าย" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[612]" value="สัตว์ร้าย" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[613]" value="สัตว์ร้าย" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[614]" value="สัตว์ร้าย" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[615]" value="สัตว์ร้าย" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1419]" value="สัตว์ร้าย" <?php if ($Data[1419] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1420]" value="สัตว์ร้าย" <?php if ($Data[1420] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1421]" value="สัตว์ร้าย" <?php if ($Data[1421] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1422]" value="สัตว์ร้าย" <?php if ($Data[1422] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1423]" value="สัตว์ร้าย" <?php if ($Data[1423] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1424]" value="สัตว์ร้าย" <?php if ($Data[1424] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1425]" value="สัตว์ร้าย" <?php if ($Data[1425] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1426]" value="สัตว์ร้าย" <?php if ($Data[1426] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1427]" value="สัตว์ร้าย" <?php if ($Data[1427] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1428]" value="สัตว์ร้าย" <?php if ($Data[1428] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1429]" value="สัตว์ร้าย" <?php if ($Data[1429] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1430]" value="สัตว์ร้าย" <?php if ($Data[1430] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1431]" value="สัตว์ร้าย" <?php if ($Data[1431] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1432]" value="สัตว์ร้าย" <?php if ($Data[1432] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1433]" value="สัตว์ร้าย" <?php if ($Data[1433] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ไฟฟ้า</td>
		      <td><input class="span3"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
		      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
		      <td><input type="checkbox" name="Data[618]" value="ไฟฟ้า" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[619]" value="ไฟฟ้า" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[620]" value="ไฟฟ้า" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[621]" value="ไฟฟ้า" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[622]" value="ไฟฟ้า" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1434]" value="ไฟฟ้า" <?php if ($Data[1434] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1435]" value="ไฟฟ้า" <?php if ($Data[1435] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1436]" value="ไฟฟ้า" <?php if ($Data[1436] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1437]" value="ไฟฟ้า" <?php if ($Data[1437] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1438]" value="ไฟฟ้า" <?php if ($Data[1438] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1439]" value="ไฟฟ้า" <?php if ($Data[1439] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1440]" value="ไฟฟ้า" <?php if ($Data[1440] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1441]" value="ไฟฟ้า" <?php if ($Data[1441] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1442]" value="ไฟฟ้า" <?php if ($Data[1442] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1443]" value="ไฟฟ้า" <?php if ($Data[1443] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1444]" value="ไฟฟ้า" <?php if ($Data[1444] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1445]" value="ไฟฟ้า" <?php if ($Data[1445] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1446]" value="ไฟฟ้า" <?php if ($Data[1446] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1447]" value="ไฟฟ้า" <?php if ($Data[1447] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1448]" value="ไฟฟ้า" <?php if ($Data[1448] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ดินไหล/ถล่ม</td>
		      <td><input class="span3"  name="Data[630]" type="text" value="<?php echo $Data[630]; ?>"></td>
		      <td><input class="span4"  name="Data[631]" type="text" value="<?php echo $Data[631]; ?>"></td>
		      <td><input type="checkbox" name="Data[625]" value="ดินไหล/ถล่ม" <?php if ($Data[625] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[626]" value="ดินไหล/ถล่ม" <?php if ($Data[626] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[627]" value="ดินไหล/ถล่ม" <?php if ($Data[627] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[628]" value="ดินไหล/ถล่ม" <?php if ($Data[628] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[629]" value="ดินไหล/ถล่ม" <?php if ($Data[629] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1449]" value="ดินไหล/ถล่ม" <?php if ($Data[1449] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1450]" value="ดินไหล/ถล่ม" <?php if ($Data[1450] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1451]" value="ดินไหล/ถล่ม" <?php if ($Data[1451] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1452]" value="ดินไหล/ถล่ม" <?php if ($Data[1452] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1453]" value="ดินไหล/ถล่ม" <?php if ($Data[1453] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1454]" value="ดินไหล/ถล่ม" <?php if ($Data[1454] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1455]" value="ดินไหล/ถล่ม" <?php if ($Data[1455] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1456]" value="ดินไหล/ถล่ม" <?php if ($Data[1456] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1457]" value="ดินไหล/ถล่ม" <?php if ($Data[1457] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1458]" value="ดินไหล/ถล่ม" <?php if ($Data[1458] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1459]" value="ดินไหล/ถล่ม" <?php if ($Data[1459] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1460]" value="ดินไหล/ถล่ม" <?php if ($Data[1460] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1461]" value="ดินไหล/ถล่ม" <?php if ($Data[1461] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1462]" value="ดินไหล/ถล่ม" <?php if ($Data[1462] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1463]" value="ดินไหล/ถล่ม" <?php if ($Data[1463] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่นๆ <input class="span3"  name="Data[632]" type="text" value="<?php echo $Data[632]; ?>"></td>
		      <td><input class="span3"  name="Data[638]" type="text" value="<?php echo $Data[638]; ?>"></td>
		      <td><input class="span4"  name="Data[639]" type="text" value="<?php echo $Data[639]; ?>"></td>
		      <td><input type="checkbox" name="Data[633]" value="อื่น ๆ" <?php if ($Data[633] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[634]" value="อื่น ๆ" <?php if ($Data[634] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[635]" value="อื่น ๆ" <?php if ($Data[635] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[636]" value="อื่น ๆ" <?php if ($Data[636] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[637]" value="อื่น ๆ" <?php if ($Data[637] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1464]" value="อื่น ๆ" <?php if ($Data[1464] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1465]" value="อื่น ๆ" <?php if ($Data[1465] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1466]" value="อื่น ๆ" <?php if ($Data[1466] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1467]" value="อื่น ๆ" <?php if ($Data[1467] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1468]" value="อื่น ๆ" <?php if ($Data[1468] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1469]" value="อื่น ๆ" <?php if ($Data[1469] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1470]" value="อื่น ๆ" <?php if ($Data[1470] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1471]" value="อื่น ๆ" <?php if ($Data[1471] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1472]" value="อื่น ๆ" <?php if ($Data[1472] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1473]" value="อื่น ๆ" <?php if ($Data[1473] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1474]" value="อื่น ๆ" <?php if ($Data[1474] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1475]" value="อื่น ๆ" <?php if ($Data[1475] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1476]" value="อื่น ๆ" <?php if ($Data[1476] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1477]" value="อื่น ๆ" <?php if ($Data[1477] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1478]" value="อื่น ๆ" <?php if ($Data[1478] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.1.3 บ้านเรือนพังเสียหาย</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>

		    <tr>
		      <td class="al-left">บ้านเรือนพังเสียหายทั้งหลัง (จำนวนหลัง)</td>
		      <td><input class="span3"  name="Data[1869]" type="text" value="<?php echo $Data[1869]; ?>"></td>
		      <td><input class="span4"  name="Data[1870]" type="text" value="<?php echo $Data[1870]; ?>"></td>
		      <td><input class="span1"  name="Data[1871]" type="text" value="<?php echo $Data[1871]; ?>"></td>
		      <td><input class="span1"  name="Data[1872]" type="text" value="<?php echo $Data[1872]; ?>"></td>
		      <td><input class="span1"  name="Data[1873]" type="text" value="<?php echo $Data[1873]; ?>"></td>
		      <td><input class="span1"  name="Data[1874]" type="text" value="<?php echo $Data[1874]; ?>"></td>
		      <td><input class="span1"  name="Data[1875]" type="text" value="<?php echo $Data[1875]; ?>"></td>
		      <td><input class="span1"  name="Data[1876]" type="text" value="<?php echo $Data[1876]; ?>"></td>
		      <td><input class="span1"  name="Data[1877]" type="text" value="<?php echo $Data[1877]; ?>"></td>
		      <td><input class="span1"  name="Data[1878]" type="text" value="<?php echo $Data[1878]; ?>"></td>
		      <td><input class="span1"  name="Data[1879]" type="text" value="<?php echo $Data[1879]; ?>"></td>
		      <td><input class="span1"  name="Data[1880]" type="text" value="<?php echo $Data[1880]; ?>"></td>
		      <td><input class="span1"  name="Data[1881]" type="text" value="<?php echo $Data[1881]; ?>"></td>
		      <td><input class="span1"  name="Data[1882]" type="text" value="<?php echo $Data[1882]; ?>"></td>
		      <td><input class="span1"  name="Data[1883]" type="text" value="<?php echo $Data[1883]; ?>"></td>
		      <td><input class="span1"  name="Data[1884]" type="text" value="<?php echo $Data[1884]; ?>"></td>
		      <td><input class="span1"  name="Data[1885]" type="text" value="<?php echo $Data[1885]; ?>"></td>
		      <td><input class="span1"  name="Data[1886]" type="text" value="<?php echo $Data[1886]; ?>"></td>
		      <td><input class="span1"  name="Data[1887]" type="text" value="<?php echo $Data[1887]; ?>"></td>
		      <td><input class="span1"  name="Data[1888]" type="text" value="<?php echo $Data[1888]; ?>"></td>
		      <td><input class="span1"  name="Data[1889]" type="text" value="<?php echo $Data[1889]; ?>"></td>
		      <td><input class="span1"  name="Data[1890]" type="text" value="<?php echo $Data[1890]; ?>"></td>

		    </tr>

		    </tr>
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.1.4 ประชาชนไร้ที่อยู่อาศัย</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>

		    <tr>
		      <td class="al-left">ประชาชนไร้ที่อยู่อาศัย (จำนวนคน)</td>
		      <td><input class="span3"  name="Data[1891]" type="text" value="<?php echo $Data[1891]; ?>"></td>
		      <td><input class="span4"  name="Data[1892]" type="text" value="<?php echo $Data[1892]; ?>"></td>
		      <td><input class="span1"  name="Data[1893]" type="text" value="<?php echo $Data[1893]; ?>"></td>
		      <td><input class="span1"  name="Data[1894]" type="text" value="<?php echo $Data[1894]; ?>"></td>
		      <td><input class="span1"  name="Data[1895]" type="text" value="<?php echo $Data[1895]; ?>"></td>
		      <td><input class="span1"  name="Data[1896]" type="text" value="<?php echo $Data[1896]; ?>"></td>
		      <td><input class="span1"  name="Data[1897]" type="text" value="<?php echo $Data[1897]; ?>"></td>
		      <td><input class="span1"  name="Data[1898]" type="text" value="<?php echo $Data[1898]; ?>"></td>
		      <td><input class="span1"  name="Data[1899]" type="text" value="<?php echo $Data[1899]; ?>"></td>
		      <td><input class="span1"  name="Data[1900]" type="text" value="<?php echo $Data[1900]; ?>"></td>
		      <td><input class="span1"  name="Data[1901]" type="text" value="<?php echo $Data[1901]; ?>"></td>
		      <td><input class="span1"  name="Data[1902]" type="text" value="<?php echo $Data[1902]; ?>"></td>
		      <td><input class="span1"  name="Data[1903]" type="text" value="<?php echo $Data[1903]; ?>"></td>
		      <td><input class="span1"  name="Data[1904]" type="text" value="<?php echo $Data[1904]; ?>"></td>
		      <td><input class="span1"  name="Data[1905]" type="text" value="<?php echo $Data[1905]; ?>"></td>
		      <td><input class="span1"  name="Data[1906]" type="text" value="<?php echo $Data[1906]; ?>"></td>
		      <td><input class="span1"  name="Data[1907]" type="text" value="<?php echo $Data[1907]; ?>"></td>
		      <td><input class="span1"  name="Data[1908]" type="text" value="<?php echo $Data[1908]; ?>"></td>
		      <td><input class="span1"  name="Data[1909]" type="text" value="<?php echo $Data[1909]; ?>"></td>
		      <td><input class="span1"  name="Data[1910]" type="text" value="<?php echo $Data[1910]; ?>"></td>
		      <td><input class="span1"  name="Data[1911]" type="text" value="<?php echo $Data[1911]; ?>"></td>
		      <td><input class="span1"  name="Data[1912]" type="text" value="<?php echo $Data[1912]; ?>"></td>

		    </tr>


		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.1.5 ความเสียหายต่อชีวิตและความปลอดภัย (1 น้อยที่สุด - 5 มากที่สุด)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		 

		    		   
		    <tr>
		      <td class="al-left">1) <strong>ไม่มี</strong>ผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บบ้านเรือนเสียหายบางส่วน</td>
		      <td><input type="radio" value="1" name="Webform[filter0]" <?php if ($Webform['filter0'] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td rowspan="5"><textarea name="Data[1764]" row="8"><?php echo $Data[1764]; ?></textarea></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1913]" <?php if ($Data[1913] == '1'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>	

		    <tr>
		      <td class="al-left">2) มีผู้เสียชีวิตหรือสูญหาย หรือบาดเจ็บบ้านเรือนพังเสียหายทั้งหมด<strong>น้อยกว่า10%</strong>ของชุมชน</td>
		      <td><input type="radio" value="2" name="Webform[filter0]" <?php if ($Webform['filter0'] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1913]" <?php if ($Data[1913] == '2'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>		    
		    <tr>
		      <td class="al-left">3) มีผู้เสียชีวิตหรือสูญหายหรือบาดเจ็บบ้านเรือนพังเสียหายทั้งหมด<strong>มากกว่า10%</strong>ของชุมชน</td>
		      <td><input type="radio" value="3" name="Webform[filter0]" <?php if ($Webform['filter0'] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1913]" <?php if ($Data[1913] == '3'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>		   
		    <tr>
		      <td class="al-left">4) มีผู้เสียชีวิตสูญหายและบาดเจ็บบ้านเรือนพังเสียหาย<strong>ทั้งหมดประมาณ25%</strong>ของชุมชน</td>
		      <td><input type="radio" value="4" name="Webform[filter0]" <?php if ($Webform['filter0'] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1913]" <?php if ($Data[1913] == '4'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>		   
		    <tr>
		      <td class="al-left">5) มีผู้เสียชีวิตสูญหายและบาดเจ็บจำนวนมากบ้านเรือนเสียหาย<strong>ทั้งหมดมากกว่า50%</strong>ของชุมชน</td>
		      <td><input type="radio" value="5" name="Webform[filter0]" <?php if ($Webform['filter0'] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1913]" <?php if ($Data[1913] == '5'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	
	   

<!--
		    <tr>
		      <th colspan="8" class="table-lv1"><h3>3.2 สุขภาพ</h3></th>
		    </tr>
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้ (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv1">
		      <td class="h-line bgheadlv1"><h3 class="h-line">3.2 สุขภาพ</h3></td>
		      <td class="bgheadlv1"></td>
		      <td class="bgheadlv1"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้ (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		   
		    <tr>
		      <td class="al-left">- คนพิการ</td>
		      <td><input class="span3"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
		      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
		      <td><input class="span1"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
		      <td><input class="span1"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
		      <td><input class="span1"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
		      <td><input class="span1"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
		      <td><input class="span1"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
		      <td><input class="span1"  name="Data[1479]" type="text" value="<?php echo $Data[1479]; ?>"></td>
		      <td><input class="span1"  name="Data[1480]" type="text" value="<?php echo $Data[1480]; ?>"></td>
		      <td><input class="span1"  name="Data[1481]" type="text" value="<?php echo $Data[1481]; ?>"></td>
		      <td><input class="span1"  name="Data[1482]" type="text" value="<?php echo $Data[1482]; ?>"></td>
		      <td><input class="span1"  name="Data[1483]" type="text" value="<?php echo $Data[1483]; ?>"></td>
		      <td><input class="span1"  name="Data[1484]" type="text" value="<?php echo $Data[1484]; ?>"></td>
		      <td><input class="span1"  name="Data[1485]" type="text" value="<?php echo $Data[1485]; ?>"></td>
		      <td><input class="span1"  name="Data[1486]" type="text" value="<?php echo $Data[1486]; ?>"></td>
		      <td><input class="span1"  name="Data[1487]" type="text" value="<?php echo $Data[1487]; ?>"></td>
		      <td><input class="span1"  name="Data[1488]" type="text" value="<?php echo $Data[1488]; ?>"></td>
		      <td><input class="span1"  name="Data[1489]" type="text" value="<?php echo $Data[1489]; ?>"></td>
		      <td><input class="span1"  name="Data[1490]" type="text" value="<?php echo $Data[1490]; ?>"></td>
		      <td><input class="span1"  name="Data[1491]" type="text" value="<?php echo $Data[1491]; ?>"></td>
		      <td><input class="span1"  name="Data[1492]" type="text" value="<?php echo $Data[1492]; ?>"></td>
		      <td><input class="span1"  name="Data[1493]" type="text" value="<?php echo $Data[1493]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ผู้สูงอายุ</td>
		      <td><input class="span3"  name="Data[652]" type="text" value="<?php echo $Data[652]; ?>"></td>
		      <td><input class="span4"  name="Data[653]" type="text" value="<?php echo $Data[653]; ?>"></td>
		      <td><input class="span1"  name="Data[647]" type="text" value="<?php echo $Data[647]; ?>"></td>
		      <td><input class="span1"  name="Data[648]" type="text" value="<?php echo $Data[648]; ?>"></td>
		      <td><input class="span1"  name="Data[649]" type="text" value="<?php echo $Data[649]; ?>"></td>
		      <td><input class="span1"  name="Data[650]" type="text" value="<?php echo $Data[650]; ?>"></td>
		      <td><input class="span1"  name="Data[651]" type="text" value="<?php echo $Data[651]; ?>"></td>
		      <td><input class="span1"  name="Data[1494]" type="text" value="<?php echo $Data[1494]; ?>"></td>
		      <td><input class="span1"  name="Data[1495]" type="text" value="<?php echo $Data[1495]; ?>"></td>
		      <td><input class="span1"  name="Data[1496]" type="text" value="<?php echo $Data[1496]; ?>"></td>
		      <td><input class="span1"  name="Data[1497]" type="text" value="<?php echo $Data[1497]; ?>"></td>
		      <td><input class="span1"  name="Data[1498]" type="text" value="<?php echo $Data[1498]; ?>"></td>
		      <td><input class="span1"  name="Data[1499]" type="text" value="<?php echo $Data[1499]; ?>"></td>
		      <td><input class="span1"  name="Data[1501]" type="text" value="<?php echo $Data[1501]; ?>"></td>
		      <td><input class="span1"  name="Data[1502]" type="text" value="<?php echo $Data[1502]; ?>"></td>
		      <td><input class="span1"  name="Data[1503]" type="text" value="<?php echo $Data[1503]; ?>"></td>
		      <td><input class="span1"  name="Data[1504]" type="text" value="<?php echo $Data[1504]; ?>"></td>
		      <td><input class="span1"  name="Data[1505]" type="text" value="<?php echo $Data[1505]; ?>"></td>
		      <td><input class="span1"  name="Data[1506]" type="text" value="<?php echo $Data[1506]; ?>"></td>
		      <td><input class="span1"  name="Data[1507]" type="text" value="<?php echo $Data[1507]; ?>"></td>
		      <td><input class="span1"  name="Data[1508]" type="text" value="<?php echo $Data[1508]; ?>"></td>
		      <td><input class="span1"  name="Data[1509]" type="text" value="<?php echo $Data[1509]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ผู้ป่วย</td>
		      <td><input class="span3"  name="Data[53]" type="text" value="<?php echo $Data[53]; ?>"></td>
		      <td><input class="span4"  name="Data[54]" type="text" value="<?php echo $Data[54]; ?>"></td>
		      <td><input class="span1"  name="Data[48]" type="text" value="<?php echo $Data[48]; ?>"></td>
		      <td><input class="span1"  name="Data[49]" type="text" value="<?php echo $Data[49]; ?>"></td>
		      <td><input class="span1"  name="Data[50]" type="text" value="<?php echo $Data[50]; ?>"></td>
		      <td><input class="span1"  name="Data[51]" type="text" value="<?php echo $Data[51]; ?>"></td>
		      <td><input class="span1"  name="Data[52]" type="text" value="<?php echo $Data[52]; ?>"></td>
		      <td><input class="span1"  name="Data[1500]" type="text" value="<?php echo $Data[1500]; ?>"></td>
		      <td><input class="span1"  name="Data[1510]" type="text" value="<?php echo $Data[1510]; ?>"></td>
		      <td><input class="span1"  name="Data[1511]" type="text" value="<?php echo $Data[1511]; ?>"></td>
		      <td><input class="span1"  name="Data[1512]" type="text" value="<?php echo $Data[1512]; ?>"></td>
		      <td><input class="span1"  name="Data[1513]" type="text" value="<?php echo $Data[1513]; ?>"></td>
		      <td><input class="span1"  name="Data[1514]" type="text" value="<?php echo $Data[1514]; ?>"></td>
		      <td><input class="span1"  name="Data[1515]" type="text" value="<?php echo $Data[1515]; ?>"></td>
		      <td><input class="span1"  name="Data[1516]" type="text" value="<?php echo $Data[1516]; ?>"></td>
		      <td><input class="span1"  name="Data[1517]" type="text" value="<?php echo $Data[1517]; ?>"></td>
		      <td><input class="span1"  name="Data[1518]" type="text" value="<?php echo $Data[1518]; ?>"></td>
		      <td><input class="span1"  name="Data[1519]" type="text" value="<?php echo $Data[1519]; ?>"></td>
		      <td><input class="span1"  name="Data[1520]" type="text" value="<?php echo $Data[1520]; ?>"></td>
		      <td><input class="span1"  name="Data[1521]" type="text" value="<?php echo $Data[1521]; ?>"></td>
		      <td><input class="span1"  name="Data[1522]" type="text" value="<?php echo $Data[1522]; ?>"></td>
		      <td><input class="span1"  name="Data[1523]" type="text" value="<?php echo $Data[1523]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- เด็กทารก</td>
		      <td><input class="span3"  name="Data[60]" type="text" value="<?php echo $Data[60]; ?>"></td>
		      <td><input class="span4"  name="Data[61]" type="text" value="<?php echo $Data[61]; ?>"></td>
		      <td><input class="span1"  name="Data[55]" type="text" value="<?php echo $Data[55]; ?>"></td>
		      <td><input class="span1"  name="Data[56]" type="text" value="<?php echo $Data[56]; ?>"></td>
		      <td><input class="span1"  name="Data[57]" type="text" value="<?php echo $Data[57]; ?>"></td>
		      <td><input class="span1"  name="Data[58]" type="text" value="<?php echo $Data[58]; ?>"></td>
		      <td><input class="span1"  name="Data[59]" type="text" value="<?php echo $Data[59]; ?>"></td>
		      <td><input class="span1"  name="Data[1524]" type="text" value="<?php echo $Data[1524]; ?>"></td>
		      <td><input class="span1"  name="Data[1525]" type="text" value="<?php echo $Data[1525]; ?>"></td>
		      <td><input class="span1"  name="Data[1526]" type="text" value="<?php echo $Data[1526]; ?>"></td>
		      <td><input class="span1"  name="Data[1527]" type="text" value="<?php echo $Data[1527]; ?>"></td>
		      <td><input class="span1"  name="Data[1528]" type="text" value="<?php echo $Data[1528]; ?>"></td>
		      <td><input class="span1"  name="Data[1529]" type="text" value="<?php echo $Data[1529]; ?>"></td>
		      <td><input class="span1"  name="Data[1530]" type="text" value="<?php echo $Data[1530]; ?>"></td>
		      <td><input class="span1"  name="Data[1531]" type="text" value="<?php echo $Data[1531]; ?>"></td>
		      <td><input class="span1"  name="Data[1532]" type="text" value="<?php echo $Data[1532]; ?>"></td>
		      <td><input class="span1"  name="Data[1533]" type="text" value="<?php echo $Data[1533]; ?>"></td>
		      <td><input class="span1"  name="Data[1534]" type="text" value="<?php echo $Data[1534]; ?>"></td>
		      <td><input class="span1"  name="Data[1535]" type="text" value="<?php echo $Data[1535]; ?>"></td>
		      <td><input class="span1"  name="Data[1536]" type="text" value="<?php echo $Data[1536]; ?>"></td>
		      <td><input class="span1"  name="Data[1537]" type="text" value="<?php echo $Data[1537]; ?>"></td>
		      <td><input class="span1"  name="Data[1538]" type="text" value="<?php echo $Data[1538]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- เด็กอายุต่ำกว่า 5 ขวบ</td>
		      <td><input class="span3"  name="Data[588]" type="text" value="<?php echo $Data[588]; ?>"></td>
		      <td><input class="span4"  name="Data[589]" type="text" value="<?php echo $Data[589]; ?>"></td>
		      <td><input class="span1"  name="Data[583]" type="text" value="<?php echo $Data[583]; ?>"></td>
		      <td><input class="span1"  name="Data[584]" type="text" value="<?php echo $Data[584]; ?>"></td>
		      <td><input class="span1"  name="Data[585]" type="text" value="<?php echo $Data[585]; ?>"></td>
		      <td><input class="span1"  name="Data[586]" type="text" value="<?php echo $Data[586]; ?>"></td>
		      <td><input class="span1"  name="Data[587]" type="text" value="<?php echo $Data[587]; ?>"></td>
		      <td><input class="span1"  name="Data[1539]" type="text" value="<?php echo $Data[1539]; ?>"></td>
		      <td><input class="span1"  name="Data[1540]" type="text" value="<?php echo $Data[1540]; ?>"></td>
		      <td><input class="span1"  name="Data[1541]" type="text" value="<?php echo $Data[1541]; ?>"></td>
		      <td><input class="span1"  name="Data[1542]" type="text" value="<?php echo $Data[1542]; ?>"></td>
		      <td><input class="span1"  name="Data[1543]" type="text" value="<?php echo $Data[1543]; ?>"></td>
		      <td><input class="span1"  name="Data[1544]" type="text" value="<?php echo $Data[1544]; ?>"></td>
		      <td><input class="span1"  name="Data[1545]" type="text" value="<?php echo $Data[1545]; ?>"></td>
		      <td><input class="span1"  name="Data[1546]" type="text" value="<?php echo $Data[1546]; ?>"></td>
		      <td><input class="span1"  name="Data[1547]" type="text" value="<?php echo $Data[1547]; ?>"></td>
		      <td><input class="span1"  name="Data[1548]" type="text" value="<?php echo $Data[1548]; ?>"></td>
		      <td><input class="span1"  name="Data[1549]" type="text" value="<?php echo $Data[1549]; ?>"></td>
		      <td><input class="span1"  name="Data[1550]" type="text" value="<?php echo $Data[1550]; ?>"></td>
		      <td><input class="span1"  name="Data[1551]" type="text" value="<?php echo $Data[1551]; ?>"></td>
		      <td><input class="span1"  name="Data[1552]" type="text" value="<?php echo $Data[1552]; ?>"></td>
		      <td><input class="span1"  name="Data[1553]" type="text" value="<?php echo $Data[1553]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ผู้ป่วยทางจิต</td>
		      <td><input class="span3"  name="Data[595]" type="text" value="<?php echo $Data[595]; ?>"></td>
		      <td><input class="span4"  name="Data[596]" type="text" value="<?php echo $Data[596]; ?>"></td>
		      <td><input class="span1"  name="Data[590]" type="text" value="<?php echo $Data[590]; ?>"></td>
		      <td><input class="span1"  name="Data[591]" type="text" value="<?php echo $Data[591]; ?>"></td>
		      <td><input class="span1"  name="Data[592]" type="text" value="<?php echo $Data[592]; ?>"></td>
		      <td><input class="span1"  name="Data[593]" type="text" value="<?php echo $Data[593]; ?>"></td>
		      <td><input class="span1"  name="Data[594]" type="text" value="<?php echo $Data[594]; ?>"></td>
		      <td><input class="span1"  name="Data[1554]" type="text" value="<?php echo $Data[1554]; ?>"></td>
		      <td><input class="span1"  name="Data[1555]" type="text" value="<?php echo $Data[1555]; ?>"></td>
		      <td><input class="span1"  name="Data[1556]" type="text" value="<?php echo $Data[1556]; ?>"></td>
		      <td><input class="span1"  name="Data[1557]" type="text" value="<?php echo $Data[1557]; ?>"></td>
		      <td><input class="span1"  name="Data[1558]" type="text" value="<?php echo $Data[1558]; ?>"></td>
		      <td><input class="span1"  name="Data[1559]" type="text" value="<?php echo $Data[1559]; ?>"></td>
		      <td><input class="span1"  name="Data[1560]" type="text" value="<?php echo $Data[1560]; ?>"></td>
		      <td><input class="span1"  name="Data[1561]" type="text" value="<?php echo $Data[1561]; ?>"></td>
		      <td><input class="span1"  name="Data[1562]" type="text" value="<?php echo $Data[1562]; ?>"></td>
		      <td><input class="span1"  name="Data[1563]" type="text" value="<?php echo $Data[1563]; ?>"></td>
		      <td><input class="span1"  name="Data[1564]" type="text" value="<?php echo $Data[1564]; ?>"></td>
		      <td><input class="span1"  name="Data[1565]" type="text" value="<?php echo $Data[1565]; ?>"></td>
		      <td><input class="span1"  name="Data[1566]" type="text" value="<?php echo $Data[1566]; ?>"></td>
		      <td><input class="span1"  name="Data[1567]" type="text" value="<?php echo $Data[1567]; ?>"></td>
		      <td><input class="span1"  name="Data[1568]" type="text" value="<?php echo $Data[1568]; ?>"></td>

		    </tr>

		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.2.2 ตรวจพบโรคระบาดในพื้นที่ในช่วงพิบัติ (ระบุโรคและจำนวนผู้ป่วย)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		    
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.2 ตรวจพบโรคระบาดในพื้นที่ในช่วงพิบัติ (ระบุโรคและจำนวนผู้ป่วย)</h4></th>
		    </tr>
-->
		   
		    <tr>
		      <td class="al-left">- โรค <input class="span3"  name="Data[62]" type="text" value="<?php echo $Data[62]; ?>"></td>
		      <td><input class="span3"  name="Data[68]" type="text" value="<?php echo $Data[68]; ?>"></td>
		      <td><input class="span4"  name="Data[69]" type="text" value="<?php echo $Data[69]; ?>"></td>
		      <td><input class="span1"  name="Data[63]" type="text" value="<?php echo $Data[63]; ?>"></td>
		      <td><input class="span1"  name="Data[64]" type="text" value="<?php echo $Data[64]; ?>"></td>
		      <td><input class="span1"  name="Data[65]" type="text" value="<?php echo $Data[65]; ?>"></td>
		      <td><input class="span1"  name="Data[66]" type="text" value="<?php echo $Data[66]; ?>"></td>
		      <td><input class="span1"  name="Data[67]" type="text" value="<?php echo $Data[67]; ?>"></td>
		      <td><input class="span1"  name="Data[1569]" type="text" value="<?php echo $Data[1569]; ?>"></td>
		      <td><input class="span1"  name="Data[1570]" type="text" value="<?php echo $Data[1570]; ?>"></td>
		      <td><input class="span1"  name="Data[1571]" type="text" value="<?php echo $Data[1571]; ?>"></td>
		      <td><input class="span1"  name="Data[1572]" type="text" value="<?php echo $Data[1572]; ?>"></td>
		      <td><input class="span1"  name="Data[1573]" type="text" value="<?php echo $Data[1573]; ?>"></td>
		      <td><input class="span1"  name="Data[1574]" type="text" value="<?php echo $Data[1574]; ?>"></td>
		      <td><input class="span1"  name="Data[1575]" type="text" value="<?php echo $Data[1575]; ?>"></td>
		      <td><input class="span1"  name="Data[1576]" type="text" value="<?php echo $Data[1576]; ?>"></td>
		      <td><input class="span1"  name="Data[1577]" type="text" value="<?php echo $Data[1577]; ?>"></td>
		      <td><input class="span1"  name="Data[1578]" type="text" value="<?php echo $Data[1578]; ?>"></td>
		      <td><input class="span1"  name="Data[1579]" type="text" value="<?php echo $Data[1579]; ?>"></td>
		      <td><input class="span1"  name="Data[1580]" type="text" value="<?php echo $Data[1580]; ?>"></td>
		      <td><input class="span1"  name="Data[1581]" type="text" value="<?php echo $Data[1581]; ?>"></td>
		      <td><input class="span1"  name="Data[1582]" type="text" value="<?php echo $Data[1582]; ?>"></td>
		      <td><input class="span1"  name="Data[1583]" type="text" value="<?php echo $Data[1583]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- โรค <input class="span3"  name="Data[70]" type="text" value="<?php echo $Data[70]; ?>"></td>
		      <td><input class="span3"  name="Data[602]" type="text" value="<?php echo $Data[602]; ?>"></td>
		      <td><input class="span4"  name="Data[603]" type="text" value="<?php echo $Data[603]; ?>"></td>
		      <td><input class="span1"  name="Data[597]" type="text" value="<?php echo $Data[597]; ?>"></td>
		      <td><input class="span1"  name="Data[598]" type="text" value="<?php echo $Data[598]; ?>"></td>
		      <td><input class="span1"  name="Data[599]" type="text" value="<?php echo $Data[599]; ?>"></td>
		      <td><input class="span1"  name="Data[600]" type="text" value="<?php echo $Data[600]; ?>"></td>
		      <td><input class="span1"  name="Data[601]" type="text" value="<?php echo $Data[601]; ?>"></td>
		      <td><input class="span1"  name="Data[1584]" type="text" value="<?php echo $Data[1584]; ?>"></td>
		      <td><input class="span1"  name="Data[1585]" type="text" value="<?php echo $Data[1585]; ?>"></td>
		      <td><input class="span1"  name="Data[1586]" type="text" value="<?php echo $Data[1586]; ?>"></td>
		      <td><input class="span1"  name="Data[1587]" type="text" value="<?php echo $Data[1587]; ?>"></td>
		      <td><input class="span1"  name="Data[1588]" type="text" value="<?php echo $Data[1588]; ?>"></td>
		      <td><input class="span1"  name="Data[1589]" type="text" value="<?php echo $Data[1589]; ?>"></td>
		      <td><input class="span1"  name="Data[1590]" type="text" value="<?php echo $Data[1590]; ?>"></td>
		      <td><input class="span1"  name="Data[1591]" type="text" value="<?php echo $Data[1591]; ?>"></td>
		      <td><input class="span1"  name="Data[1592]" type="text" value="<?php echo $Data[1592]; ?>"></td>
		      <td><input class="span1"  name="Data[1593]" type="text" value="<?php echo $Data[1593]; ?>"></td>
		      <td><input class="span1"  name="Data[1594]" type="text" value="<?php echo $Data[1594]; ?>"></td>
		      <td><input class="span1"  name="Data[1595]" type="text" value="<?php echo $Data[1595]; ?>"></td>
		      <td><input class="span1"  name="Data[1596]" type="text" value="<?php echo $Data[1596]; ?>"></td>
		      <td><input class="span1"  name="Data[1597]" type="text" value="<?php echo $Data[1597]; ?>"></td>
		      <td><input class="span1"  name="Data[1598]" type="text" value="<?php echo $Data[1598]; ?>"></td>

		    </tr>
		    
		    <tr>
		      <td class="al-left">- โรค <input class="span3"  name="Data[1343]" type="text" value="<?php echo $Data[1343]; ?>"></td>
		      <td><input class="span3"  name="Data[1297]" type="text" value="<?php echo $Data[1297]; ?>"></td>
		      <td><input class="span4"  name="Data[1298]" type="text" value="<?php echo $Data[1298]; ?>"></td>
		      <td><input class="span1"  name="Data[1292]" type="text" value="<?php echo $Data[1292]; ?>"></td>
		      <td><input class="span1"  name="Data[1293]" type="text" value="<?php echo $Data[1293]; ?>"></td>
		      <td><input class="span1"  name="Data[1294]" type="text" value="<?php echo $Data[1294]; ?>"></td>
		      <td><input class="span1"  name="Data[1295]" type="text" value="<?php echo $Data[1295]; ?>"></td>
		      <td><input class="span1"  name="Data[1296]" type="text" value="<?php echo $Data[1296]; ?>"></td>
		      <td><input class="span1"  name="Data[1599]" type="text" value="<?php echo $Data[1599]; ?>"></td>
		      <td><input class="span1"  name="Data[1600]" type="text" value="<?php echo $Data[1600]; ?>"></td>
		      <td><input class="span1"  name="Data[1601]" type="text" value="<?php echo $Data[1601]; ?>"></td>
		      <td><input class="span1"  name="Data[1602]" type="text" value="<?php echo $Data[1602]; ?>"></td>
		      <td><input class="span1"  name="Data[1603]" type="text" value="<?php echo $Data[1603]; ?>"></td>
		      <td><input class="span1"  name="Data[1604]" type="text" value="<?php echo $Data[1604]; ?>"></td>
		      <td><input class="span1"  name="Data[1605]" type="text" value="<?php echo $Data[1605]; ?>"></td>
		      <td><input class="span1"  name="Data[1606]" type="text" value="<?php echo $Data[1606]; ?>"></td>
		      <td><input class="span1"  name="Data[1607]" type="text" value="<?php echo $Data[1607]; ?>"></td>
		      <td><input class="span1"  name="Data[1608]" type="text" value="<?php echo $Data[1608]; ?>"></td>
		      <td><input class="span1"  name="Data[1609]" type="text" value="<?php echo $Data[1609]; ?>"></td>
		      <td><input class="span1"  name="Data[1610]" type="text" value="<?php echo $Data[1610]; ?>"></td>
		      <td><input class="span1"  name="Data[1611]" type="text" value="<?php echo $Data[1611]; ?>"></td>
		      <td><input class="span1"  name="Data[1612]" type="text" value="<?php echo $Data[1612]; ?>"></td>
		      <td><input class="span1"  name="Data[1613]" type="text" value="<?php echo $Data[1613]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- โรค <input class="span3"  name="Data[1299]" type="text" value="<?php echo $Data[1299]; ?>"></td>
		      <td><input class="span3"  name="Data[1305]" type="text" value="<?php echo $Data[1305]; ?>"></td>
		      <td><input class="span4"  name="Data[1306]" type="text" value="<?php echo $Data[1306]; ?>"></td>
		      <td><input class="span1"  name="Data[1300]" type="text" value="<?php echo $Data[1300]; ?>"></td>
		      <td><input class="span1"  name="Data[1301]" type="text" value="<?php echo $Data[1301]; ?>"></td>
		      <td><input class="span1"  name="Data[1302]" type="text" value="<?php echo $Data[1302]; ?>"></td>
		      <td><input class="span1"  name="Data[1303]" type="text" value="<?php echo $Data[1303]; ?>"></td>
		      <td><input class="span1"  name="Data[1304]" type="text" value="<?php echo $Data[1304]; ?>"></td>
		      <td><input class="span1"  name="Data[1614]" type="text" value="<?php echo $Data[1614]; ?>"></td>
		      <td><input class="span1"  name="Data[1615]" type="text" value="<?php echo $Data[1615]; ?>"></td>
		      <td><input class="span1"  name="Data[1616]" type="text" value="<?php echo $Data[1616]; ?>"></td>
		      <td><input class="span1"  name="Data[1617]" type="text" value="<?php echo $Data[1617]; ?>"></td>
		      <td><input class="span1"  name="Data[1618]" type="text" value="<?php echo $Data[1618]; ?>"></td>
		      <td><input class="span1"  name="Data[1619]" type="text" value="<?php echo $Data[1619]; ?>"></td>
		      <td><input class="span1"  name="Data[1620]" type="text" value="<?php echo $Data[1620]; ?>"></td>
		      <td><input class="span1"  name="Data[1621]" type="text" value="<?php echo $Data[1621]; ?>"></td>
		      <td><input class="span1"  name="Data[1622]" type="text" value="<?php echo $Data[1622]; ?>"></td>
		      <td><input class="span1"  name="Data[1623]" type="text" value="<?php echo $Data[1623]; ?>"></td>
		      <td><input class="span1"  name="Data[1624]" type="text" value="<?php echo $Data[1624]; ?>"></td>
		      <td><input class="span1"  name="Data[1625]" type="text" value="<?php echo $Data[1625]; ?>"></td>
		      <td><input class="span1"  name="Data[1626]" type="text" value="<?php echo $Data[1626]; ?>"></td>
		      <td><input class="span1"  name="Data[1627]" type="text" value="<?php echo $Data[1627]; ?>"></td>
		      <td><input class="span1"  name="Data[1628]" type="text" value="<?php echo $Data[1628]; ?>"></td>
		    </tr>
		    <tr>
		      <td class="al-left">- โรค <input class="span3"  name="Data[1307]" type="text" value="<?php echo $Data[1307]; ?>"></td>
		      <td><input class="span3"  name="Data[1313]" type="text" value="<?php echo $Data[1313]; ?>"></td>
		      <td><input class="span4"  name="Data[1314]" type="text" value="<?php echo $Data[1314]; ?>"></td>
		      <td><input class="span1"  name="Data[1308]" type="text" value="<?php echo $Data[1308]; ?>"></td>
		      <td><input class="span1"  name="Data[1309]" type="text" value="<?php echo $Data[1309]; ?>"></td>
		      <td><input class="span1"  name="Data[1310]" type="text" value="<?php echo $Data[1310]; ?>"></td>
		      <td><input class="span1"  name="Data[1311]" type="text" value="<?php echo $Data[1311]; ?>"></td>
		      <td><input class="span1"  name="Data[1312]" type="text" value="<?php echo $Data[1312]; ?>"></td>
		      <td><input class="span1"  name="Data[1629]" type="text" value="<?php echo $Data[1629]; ?>"></td>
		      <td><input class="span1"  name="Data[1630]" type="text" value="<?php echo $Data[1630]; ?>"></td>
		      <td><input class="span1"  name="Data[1631]" type="text" value="<?php echo $Data[1631]; ?>"></td>
		      <td><input class="span1"  name="Data[1632]" type="text" value="<?php echo $Data[1632]; ?>"></td>
		      <td><input class="span1"  name="Data[1633]" type="text" value="<?php echo $Data[1633]; ?>"></td>
		      <td><input class="span1"  name="Data[1634]" type="text" value="<?php echo $Data[1634]; ?>"></td>
		      <td><input class="span1"  name="Data[1635]" type="text" value="<?php echo $Data[1635]; ?>"></td>
		      <td><input class="span1"  name="Data[1636]" type="text" value="<?php echo $Data[1636]; ?>"></td>
		      <td><input class="span1"  name="Data[1637]" type="text" value="<?php echo $Data[1637]; ?>"></td>
		      <td><input class="span1"  name="Data[1638]" type="text" value="<?php echo $Data[1638]; ?>"></td>
		      <td><input class="span1"  name="Data[1639]" type="text" value="<?php echo $Data[1639]; ?>"></td>
		      <td><input class="span1"  name="Data[1640]" type="text" value="<?php echo $Data[1640]; ?>"></td>
		      <td><input class="span1"  name="Data[1641]" type="text" value="<?php echo $Data[1641]; ?>"></td>
		      <td><input class="span1"  name="Data[1642]" type="text" value="<?php echo $Data[1642]; ?>"></td>
		      <td><input class="span1"  name="Data[1643]" type="text" value="<?php echo $Data[1643]; ?>"></td>
		    </tr>
		    <tr>
		      <td class="al-left">- โรค <input class="span3"  name="Data[1315]" type="text" value="<?php echo $Data[1315]; ?>"></td>
		      <td><input class="span3"  name="Data[1321]" type="text" value="<?php echo $Data[1321]; ?>"></td>
		      <td><input class="span4"  name="Data[1322]" type="text" value="<?php echo $Data[1322]; ?>"></td>
		      <td><input class="span1"  name="Data[1316]" type="text" value="<?php echo $Data[1316]; ?>"></td>
		      <td><input class="span1"  name="Data[1317]" type="text" value="<?php echo $Data[1317]; ?>"></td>
		      <td><input class="span1"  name="Data[1318]" type="text" value="<?php echo $Data[1318]; ?>"></td>
		      <td><input class="span1"  name="Data[1319]" type="text" value="<?php echo $Data[1319]; ?>"></td>
		      <td><input class="span1"  name="Data[1320]" type="text" value="<?php echo $Data[1320]; ?>"></td>
		      <td><input class="span1"  name="Data[1644]" type="text" value="<?php echo $Data[1644]; ?>"></td>
		      <td><input class="span1"  name="Data[1645]" type="text" value="<?php echo $Data[1645]; ?>"></td>
		      <td><input class="span1"  name="Data[1646]" type="text" value="<?php echo $Data[1646]; ?>"></td>
		      <td><input class="span1"  name="Data[1647]" type="text" value="<?php echo $Data[1647]; ?>"></td>
		      <td><input class="span1"  name="Data[1648]" type="text" value="<?php echo $Data[1648]; ?>"></td>
		      <td><input class="span1"  name="Data[1649]" type="text" value="<?php echo $Data[1649]; ?>"></td>
		      <td><input class="span1"  name="Data[1650]" type="text" value="<?php echo $Data[1650]; ?>"></td>
		      <td><input class="span1"  name="Data[1651]" type="text" value="<?php echo $Data[1651]; ?>"></td>
		      <td><input class="span1"  name="Data[1652]" type="text" value="<?php echo $Data[1652]; ?>"></td>
		      <td><input class="span1"  name="Data[1653]" type="text" value="<?php echo $Data[1653]; ?>"></td>
		      <td><input class="span1"  name="Data[1654]" type="text" value="<?php echo $Data[1654]; ?>"></td>
		      <td><input class="span1"  name="Data[1655]" type="text" value="<?php echo $Data[1655]; ?>"></td>
		      <td><input class="span1"  name="Data[1656]" type="text" value="<?php echo $Data[1656]; ?>"></td>
		      <td><input class="span1"  name="Data[1657]" type="text" value="<?php echo $Data[1657]; ?>"></td>
		      <td><input class="span1"  name="Data[1658]" type="text" value="<?php echo $Data[1658]; ?>"></td>
		    </tr>
		   
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.3 ความลำบากในการเข้าถึงบริการทางด้านการแพทย์ <strong>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</strong></h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.2.3 ความลำบากในการเข้าถึงบริการทางด้านการแพทย์ (1 น้อยที่สุด - 5 มากที่สุด)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		 
		    		   
		    <tr>
		      <td class="al-left">1) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาน้อยกว่า 1 ชม.</strong></td>
		      <td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td rowspan="5"><textarea name="Data[1765]" row="8"><?php echo $Data[1765]; ?>1tarea></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1737]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>	
		    <tr>
		      <td class="al-left">2) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
		      <td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1737]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	 	        

		    <tr>
		      <td class="al-left">3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
		      <td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1737]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	 


		    <tr>
		      <td class="al-left">4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
		      <td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1737]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	 

		    <tr>
		      <td class="al-left">5) <strong>ไม่มี</strong>หน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
		      <td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1737]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	

		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.2.4 ระดับความเครียดและความกังวลของคนในชุมชน (1 น้อยที่สุด - 5 มากที่สุด)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.4 ระดับความเครียด และความกังวลของคนในชุมชน <span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่) </span></h4></th>
		    </tr>
-->
		   
		    <tr>
		      <td class="al-left">1) ไม่พบประชาชนมีภาวะความเครียด</td>
		      <td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td rowspan="5"><textarea name="Data[1766]" row="8"><?php echo $Data[1766]; ?>1tarea></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1738]" <?php if ($Data[1737] == '1'): ?> checked="checked" <?php endif; ?>></td> 

		    </tr>	
		    <tr>
		      <td class="al-left">2) พบประชาชนมีภาวะความเครียดแต่สามารถปรับตัวได้</td>
		      <td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1738]" <?php if ($Data[1737] == '2'): ?> checked="checked" <?php endif; ?>></td> 

		    <tr>
		      <td class="al-left">3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้</td>
		      <td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1738]" <?php if ($Data[1737] == '3'): ?> checked="checked" <?php endif; ?>></td> 
		    </tr>	 
		    <tr>
		      <td class="al-left">4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย</td>
		      <td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1738]" <?php if ($Data[1737] == '4'): ?> checked="checked" <?php endif; ?>></td> 		    
			  </tr>	 
		    <tr>
		      <td class="al-left">5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ำท่วม</td>
		      <td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1738]" <?php if ($Data[1737] == '5'): ?> checked="checked" <?php endif; ?>></td> 
		    </tr>	 
		    
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.2.5 กิจกรรมที่ชุมชนที่ต้องการการสนับสนุน</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>			    
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.5 กิจกรรมที่ชุมชนที่ต้องการการสนับสนุน</h4></th>
		    </tr>
-->
		   
		    <tr>
		      <td class="al-left">- การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้</td>
		      <td><input class="span3"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
		      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
		      <td><input type="checkbox" name="Data[604]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[605]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[606]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[607]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[608]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1809]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1809] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1810]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1810] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1811]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1811] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1812]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1812] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1813]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1813] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1814]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1814] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1815]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1815] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1816]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1816] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1817]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1817] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1818]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1818] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1819]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1819] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1820]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1820] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1821]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1821] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1822]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1822] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1823]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[1823] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>
		    <tr>
		      <td class="al-left">- ป้องกันโรคระบาด</td>
		      <td><input class="span3"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
		      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
		      <td><input type="checkbox" name="Data[611]" value="ป้องกันโรคระบาด" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[612]" value="ป้องกันโรคระบาด" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[613]" value="ป้องกันโรคระบาด" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[614]" value="ป้องกันโรคระบาด" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[615]" value="ป้องกันโรคระบาด" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1824]" value="ป้องกันโรคระบาด" <?php if ($Data[1824] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1825]" value="ป้องกันโรคระบาด" <?php if ($Data[1825] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1826]" value="ป้องกันโรคระบาด" <?php if ($Data[1826] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1827]" value="ป้องกันโรคระบาด" <?php if ($Data[1827] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1828]" value="ป้องกันโรคระบาด" <?php if ($Data[1828] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1829]" value="ป้องกันโรคระบาด" <?php if ($Data[1829] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1830]" value="ป้องกันโรคระบาด" <?php if ($Data[1830] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1831]" value="ป้องกันโรคระบาด" <?php if ($Data[1831] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1832]" value="ป้องกันโรคระบาด" <?php if ($Data[1832] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1833]" value="ป้องกันโรคระบาด" <?php if ($Data[1833] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1834]" value="ป้องกันโรคระบาด" <?php if ($Data[1834] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1835]" value="ป้องกันโรคระบาด" <?php if ($Data[1835] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1836]" value="ป้องกันโรคระบาด" <?php if ($Data[1836] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1837]" value="ป้องกันโรคระบาด" <?php if ($Data[1837] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1838]" value="ป้องกันโรคระบาด" <?php if ($Data[1838] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>
		    <tr>
		      <td class="al-left">- เพิ่มบริการทางการแพทย์</td>
		      <td><input class="span3"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
		      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>	
		      <td><input type="checkbox" name="Data[618]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[619]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[620]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[621]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[622]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1839]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1839] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1840]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1840] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1841]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1841] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1842]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1842] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1843]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1843] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1844]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1844] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1845]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1845] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1846]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1846] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1847]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1847] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1848]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1848] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1849]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1849] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1850]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1850] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1851]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1851] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1852]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1852] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1853]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[1853] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>
		    <tr>
		      <td class="al-left">- ฟื้นฟูภาวะจิตใจคนในชุมชน</td>
		      <td><input class="span3"  name="Data[630]" type="text" value="<?php echo $Data[630]; ?>"></td>
		      <td><input class="span4"  name="Data[631]" type="text" value="<?php echo $Data[631]; ?>"></td>
		      <td><input type="checkbox" name="Data[625]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[625] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[626]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[626] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[627]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[627] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[628]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[628] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[629]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[629] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1854]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1854] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1855]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1855] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1856]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1856] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1857]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1857] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1858]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1858] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1859]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1859] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1860]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1860] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1861]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1861] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1862]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1862] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1863]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1863] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1864]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1864] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1865]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1865] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1866]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1866] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1867]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1867] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1868]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[1868] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.6 ความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับ<span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</span></h4></th>
		    </tr>
-->

		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.2.6 ความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับ(1 น้อยที่สุด - 5 มากที่สุด)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		
		   
		    <tr>
		      <td class="al-left">1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้ไม่มีโรคระบาดมีบริการทางการแพทย์และไม่มีความเครียดในชุมชน</td>
		      <td><input type="radio" value="1" name="Webform[filter1]" <?php if ($Webform['filter1'] == '1'): ?> checked="checked" <?php endif; ?>></td>
				  <td rowspan="5"><textarea name="Data[1767]" row="8"><?php echo $Data[1767]; ?></textarea></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1734]" <?php if ($Data[1734] == '1'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	
		    
		    <tr>
		      <td class="al-left">2) มีปัญหาด้านการดูแล กลุ่มช่วยเหลือตัวเองไม่ได้มีโรคระบาดมีบริการทางการแพทย์และมีความเครียดในชุมชนบ้างแต่ควบคุมได้</td>
		      <td><input type="radio" value="2" name="Webform[filter1]" <?php if ($Webform['filter1'] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1734]" <?php if ($Data[1734] == '2'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	 	        
		    <tr>
		      <td class="al-left">3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้มีโรคระบาดมีบริการทางการแพทย์และมีความเครียดในชุมชนและต้องการการสนับสนุนบางส่วน</td>
		      <td><input type="radio" value="3" name="Webform[filter1]" <?php if ($Webform['filter1'] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1734]" <?php if ($Data[1734] == '3'): ?> checked="checked" <?php endif; ?>></td>
			  </tr>	 
		    <tr>
		      <td class="al-left">4) มีปัญหาด้านบริการทางการแพทย์ในชุมชนและชุมชนต้องการการสนับสนุน</td>
		      <td><input type="radio" value="4" name="Webform[filter1]" <?php if ($Webform['filter1'] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1734]" <?php if ($Data[1734] == '4'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	 
		    <tr>
		      <td class="al-left">5) มีปัญหาด้านโรคระบาดและบริการทางการแพทย์ในชุมชน และชุมชนต้องการการสนับสนุนเร่งด่วน</td>
		      <td><input type="radio" value="5" name="Webform[filter1]" <?php if ($Webform['filter1'] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1734]" <?php if ($Data[1734] == '5'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>
		    <tr class="table-lv1">
		      <td class="h-line bgheadlv1"><h3 class="h-line">3.3  สภาพแวดล้อมที่ได้รับผลกระทบ</h3></td>
		      <td class="bgheadlv1"></td>
		      <td class="bgheadlv1"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>			    
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.1 ที่อยู่อาศัย (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>	
		   
		    <tr>
		      <td class="al-left">- ที่อยู่อาศัยได้รับความเสียหาย</td>
		      <td><input class="span3"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
		      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
		      <td><input class="span1"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
		      <td><input class="span1"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
		      <td><input class="span1"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
		      <td><input class="span1"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
		      <td><input class="span1"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
		      <td><input class="span1"  name="Data[1944]" type="text" value="<?php echo $Data[1944]; ?>"></td>
		      <td><input class="span1"  name="Data[1945]" type="text" value="<?php echo $Data[1945]; ?>"></td>
		      <td><input class="span1"  name="Data[1946]" type="text" value="<?php echo $Data[1946]; ?>"></td>
		      <td><input class="span1"  name="Data[1947]" type="text" value="<?php echo $Data[1947]; ?>"></td>
		      <td><input class="span1"  name="Data[1948]" type="text" value="<?php echo $Data[1948]; ?>"></td>
		      <td><input class="span1"  name="Data[1949]" type="text" value="<?php echo $Data[1949]; ?>"></td>
		      <td><input class="span1"  name="Data[1950]" type="text" value="<?php echo $Data[1950]; ?>"></td>
		      <td><input class="span1"  name="Data[1951]" type="text" value="<?php echo $Data[1951]; ?>"></td>
		      <td><input class="span1"  name="Data[1952]" type="text" value="<?php echo $Data[1952]; ?>"></td>
		      <td><input class="span1"  name="Data[1953]" type="text" value="<?php echo $Data[1953]; ?>"></td>
		      <td><input class="span1"  name="Data[1954]" type="text" value="<?php echo $Data[1954]; ?>"></td>
		      <td><input class="span1"  name="Data[1955]" type="text" value="<?php echo $Data[1955]; ?>"></td>
		      <td><input class="span1"  name="Data[1956]" type="text" value="<?php echo $Data[1956]; ?>"></td>
		      <td><input class="span1"  name="Data[1957]" type="text" value="<?php echo $Data[1957]; ?>"></td>
		      <td><input class="span1"  name="Data[1958]" type="text" value="<?php echo $Data[1958]; ?>"></td>
		    </tr>
		    <tr>
		      <td class="al-left">- บริเวณบ้านที่ได้รับความเสียหาย</td>
		      <td><input class="span3"  name="Data[726]" type="text" value="<?php echo $Data[726]; ?>"></td>
		      <td><input class="span4"  name="Data[727]" type="text" value="<?php echo $Data[727]; ?>"></td>	
		      <td><input class="span1"  name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
		      <td><input class="span1"  name="Data[81]" type="text" value="<?php echo $Data[81]; ?>"></td>
		      <td><input class="span1"  name="Data[82]" type="text" value="<?php echo $Data[82]; ?>"></td>
		      <td><input class="span1"  name="Data[724]" type="text" value="<?php echo $Data[724]; ?>"></td>
		      <td><input class="span1"  name="Data[725]" type="text" value="<?php echo $Data[725]; ?>"></td>
		      <td><input class="span1"  name="Data[1959]" type="text" value="<?php echo $Data[1959]; ?>"></td>
		      <td><input class="span1"  name="Data[1960]" type="text" value="<?php echo $Data[1960]; ?>"></td>
		      <td><input class="span1"  name="Data[1961]" type="text" value="<?php echo $Data[1961]; ?>"></td>
		      <td><input class="span1"  name="Data[1962]" type="text" value="<?php echo $Data[1962]; ?>"></td>
		      <td><input class="span1"  name="Data[1963]" type="text" value="<?php echo $Data[1963]; ?>"></td>
		      <td><input class="span1"  name="Data[1964]" type="text" value="<?php echo $Data[1964]; ?>"></td>
		      <td><input class="span1"  name="Data[1965]" type="text" value="<?php echo $Data[1965]; ?>"></td>
		      <td><input class="span1"  name="Data[1966]" type="text" value="<?php echo $Data[1966]; ?>"></td>
		      <td><input class="span1"  name="Data[1967]" type="text" value="<?php echo $Data[1967]; ?>"></td>
		      <td><input class="span1"  name="Data[1968]" type="text" value="<?php echo $Data[1968]; ?>"></td>
		      <td><input class="span1"  name="Data[1969]" type="text" value="<?php echo $Data[1969]; ?>"></td>
		      <td><input class="span1"  name="Data[1970]" type="text" value="<?php echo $Data[1970]; ?>"></td>
		      <td><input class="span1"  name="Data[1971]" type="text" value="<?php echo $Data[1971]; ?>"></td>
		      <td><input class="span1"  name="Data[1972]" type="text" value="<?php echo $Data[1972]; ?>"></td>
		      <td><input class="span1"  name="Data[1973]" type="text" value="<?php echo $Data[1973]; ?>"></td>
		    </tr>	    	

<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.3.2 สิ่งสาธารณะประโยชน์ของชุมชน (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.2 สิ่งสาธารณะประโยชน์ของชุมชน (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    		   
		    <tr>
		      <td class="al-left">- ถนนชำรุด (สาย)</td>
		      <td><input class="span3"  name="Data[733]" type="text" value="<?php echo $Data[733]; ?>"></td>
		      <td><input class="span4"  name="Data[734]" type="text" value="<?php echo $Data[734]; ?>"></td>	
		      <td><input class="span1"  name="Data[728]" type="text" value="<?php echo $Data[728]; ?>"></td>
		      <td><input class="span1"  name="Data[729]" type="text" value="<?php echo $Data[729]; ?>"></td>
		      <td><input class="span1"  name="Data[730]" type="text" value="<?php echo $Data[730]; ?>"></td>
		      <td><input class="span1"  name="Data[731]" type="text" value="<?php echo $Data[731]; ?>"></td>
		      <td><input class="span1"  name="Data[732]" type="text" value="<?php echo $Data[732]; ?>"></td>
		      <td><input class="span1"  name="Data[1975]" type="text" value="<?php echo $Data[1975]; ?>"></td>
		      <td><input class="span1"  name="Data[1976]" type="text" value="<?php echo $Data[1976]; ?>"></td>
		      <td><input class="span1"  name="Data[1977]" type="text" value="<?php echo $Data[1977]; ?>"></td>
		      <td><input class="span1"  name="Data[1978]" type="text" value="<?php echo $Data[1978]; ?>"></td>
		      <td><input class="span1"  name="Data[1979]" type="text" value="<?php echo $Data[1979]; ?>"></td>
		      <td><input class="span1"  name="Data[1980]" type="text" value="<?php echo $Data[1980]; ?>"></td>
		      <td><input class="span1"  name="Data[1981]" type="text" value="<?php echo $Data[1981]; ?>"></td>
		      <td><input class="span1"  name="Data[1982]" type="text" value="<?php echo $Data[1982]; ?>"></td>
		      <td><input class="span1"  name="Data[1983]" type="text" value="<?php echo $Data[1983]; ?>"></td>
		      <td><input class="span1"  name="Data[1984]" type="text" value="<?php echo $Data[1984]; ?>"></td>		    
		      <td><input class="span1"  name="Data[1985]" type="text" value="<?php echo $Data[1985]; ?>"></td>
		      <td><input class="span1"  name="Data[1986]" type="text" value="<?php echo $Data[1986]; ?>"></td>
		      <td><input class="span1"  name="Data[1987]" type="text" value="<?php echo $Data[1987]; ?>"></td>
		      <td><input class="span1"  name="Data[1988]" type="text" value="<?php echo $Data[1988]; ?>"></td>
		      <td><input class="span1"  name="Data[1989]" type="text" value="<?php echo $Data[1989]; ?>"></td>
		    </tr>
		    <tr>
		      <td class="al-left">- สถานีขนส่งทางบก</td>
		      <td><input class="span3"  name="Data[740]" type="text" value="<?php echo $Data[740]; ?>"></td>
		      <td><input class="span4"  name="Data[741]" type="text" value="<?php echo $Data[741]; ?>"></td>
		      <td><input class="span1"  name="Data[735]" type="text" value="<?php echo $Data[735]; ?>"></td>
		      <td><input class="span1"  name="Data[736]" type="text" value="<?php echo $Data[736]; ?>"></td>
		      <td><input class="span1"  name="Data[737]" type="text" value="<?php echo $Data[737]; ?>"></td>
		      <td><input class="span1"  name="Data[738]" type="text" value="<?php echo $Data[738]; ?>"></td>
		      <td><input class="span1"  name="Data[739]" type="text" value="<?php echo $Data[739]; ?>"></td>
		      <td><input class="span1"  name="Data[1990]" type="text" value="<?php echo $Data[1990]; ?>"></td>
		      <td><input class="span1"  name="Data[1991]" type="text" value="<?php echo $Data[1991]; ?>"></td>
		      <td><input class="span1"  name="Data[1992]" type="text" value="<?php echo $Data[1992]; ?>"></td>
		      <td><input class="span1"  name="Data[1993]" type="text" value="<?php echo $Data[1993]; ?>"></td>
		      <td><input class="span1"  name="Data[1994]" type="text" value="<?php echo $Data[1994]; ?>"></td>
		      <td><input class="span1"  name="Data[1995]" type="text" value="<?php echo $Data[1995]; ?>"></td>
		      <td><input class="span1"  name="Data[1996]" type="text" value="<?php echo $Data[1996]; ?>"></td>
		      <td><input class="span1"  name="Data[1997]" type="text" value="<?php echo $Data[1997]; ?>"></td>
		      <td><input class="span1"  name="Data[1998]" type="text" value="<?php echo $Data[1998]; ?>"></td>
		      <td><input class="span1"  name="Data[1999]" type="text" value="<?php echo $Data[1999]; ?>"></td>
		      <td><input class="span1"  name="Data[2000]" type="text" value="<?php echo $Data[2000]; ?>"></td>
		      <td><input class="span1"  name="Data[2001]" type="text" value="<?php echo $Data[2001]; ?>"></td>
		      <td><input class="span1"  name="Data[2002]" type="text" value="<?php echo $Data[2002]; ?>"></td>
		      <td><input class="span1"  name="Data[2003]" type="text" value="<?php echo $Data[2003]; ?>"></td>
		      <td><input class="span1"  name="Data[2004]" type="text" value="<?php echo $Data[2004]; ?>"></td>
		    </tr>	 
		    <tr>
		      <td class="al-left">- สถานีขนส่งทางน้ำ</td>
		      <td><input class="span3"  name="Data[747]" type="text" value="<?php echo $Data[747]; ?>"></td>
		      <td><input class="span4"  name="Data[748]" type="text" value="<?php echo $Data[748]; ?>"></td>
		      <td><input class="span1"  name="Data[742]" type="text" value="<?php echo $Data[742]; ?>"></td>
		      <td><input class="span1"  name="Data[743]" type="text" value="<?php echo $Data[743]; ?>"></td>
		      <td><input class="span1"  name="Data[744]" type="text" value="<?php echo $Data[744]; ?>"></td>
		      <td><input class="span1"  name="Data[745]" type="text" value="<?php echo $Data[745]; ?>"></td>
		      <td><input class="span1"  name="Data[746]" type="text" value="<?php echo $Data[746]; ?>"></td>
		      <td><input class="span1"  name="Data[2005]" type="text" value="<?php echo $Data[2005]; ?>"></td>
		      <td><input class="span1"  name="Data[2006]" type="text" value="<?php echo $Data[2006]; ?>"></td>
		      <td><input class="span1"  name="Data[2007]" type="text" value="<?php echo $Data[2007]; ?>"></td>
		      <td><input class="span1"  name="Data[2008]" type="text" value="<?php echo $Data[2008]; ?>"></td>
		      <td><input class="span1"  name="Data[2009]" type="text" value="<?php echo $Data[2009]; ?>"></td>
		      <td><input class="span1"  name="Data[2010]" type="text" value="<?php echo $Data[2010]; ?>"></td>
		      <td><input class="span1"  name="Data[2011]" type="text" value="<?php echo $Data[2011]; ?>"></td>
		      <td><input class="span1"  name="Data[2012]" type="text" value="<?php echo $Data[2012]; ?>"></td>
		      <td><input class="span1"  name="Data[2013]" type="text" value="<?php echo $Data[2013]; ?>"></td>
		      <td><input class="span1"  name="Data[2014]" type="text" value="<?php echo $Data[2014]; ?>"></td>
		      <td><input class="span1"  name="Data[2015]" type="text" value="<?php echo $Data[2015]; ?>"></td>
		      <td><input class="span1"  name="Data[2016]" type="text" value="<?php echo $Data[2016]; ?>"></td>
		      <td><input class="span1"  name="Data[2017]" type="text" value="<?php echo $Data[2017]; ?>"></td>
		      <td><input class="span1"  name="Data[2018]" type="text" value="<?php echo $Data[2018]; ?>"></td>
		      <td><input class="span1"  name="Data[2019]" type="text" value="<?php echo $Data[2019]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ศาลาที่พักผู้โดยสาร</td>
		      <td><input class="span3"  name="Data[754]" type="text" value="<?php echo $Data[754]; ?>"></td>
		      <td><input class="span4"  name="Data[755]" type="text" value="<?php echo $Data[755]; ?>"></td>
		      <td><input class="span1"  name="Data[749]" type="text" value="<?php echo $Data[749]; ?>"></td>
		      <td><input class="span1"  name="Data[750]" type="text" value="<?php echo $Data[750]; ?>"></td>
		      <td><input class="span1"  name="Data[751]" type="text" value="<?php echo $Data[751]; ?>"></td>
		      <td><input class="span1"  name="Data[752]" type="text" value="<?php echo $Data[752]; ?>"></td>
		      <td><input class="span1"  name="Data[753]" type="text" value="<?php echo $Data[753]; ?>"></td>
		      <td><input class="span1"  name="Data[2020]" type="text" value="<?php echo $Data[2020]; ?>"></td>
		      <td><input class="span1"  name="Data[2021]" type="text" value="<?php echo $Data[2021]; ?>"></td>
		      <td><input class="span1"  name="Data[2022]" type="text" value="<?php echo $Data[2022]; ?>"></td>
		      <td><input class="span1"  name="Data[2023]" type="text" value="<?php echo $Data[2023]; ?>"></td>
		      <td><input class="span1"  name="Data[2024]" type="text" value="<?php echo $Data[2024]; ?>"></td>
		      <td><input class="span1"  name="Data[2025]" type="text" value="<?php echo $Data[2025]; ?>"></td>
		      <td><input class="span1"  name="Data[2026]" type="text" value="<?php echo $Data[2026]; ?>"></td>
		      <td><input class="span1"  name="Data[2027]" type="text" value="<?php echo $Data[2027]; ?>"></td>
		      <td><input class="span1"  name="Data[2028]" type="text" value="<?php echo $Data[2028]; ?>"></td>
		      <td><input class="span1"  name="Data[2029]" type="text" value="<?php echo $Data[2029]; ?>"></td>
		      <td><input class="span1"  name="Data[2030]" type="text" value="<?php echo $Data[2030]; ?>"></td>
		      <td><input class="span1"  name="Data[2031]" type="text" value="<?php echo $Data[2031]; ?>"></td>
		      <td><input class="span1"  name="Data[2032]" type="text" value="<?php echo $Data[2032]; ?>"></td>
		      <td><input class="span1"  name="Data[2033]" type="text" value="<?php echo $Data[2033]; ?>"></td>
		      <td><input class="span1"  name="Data[2034]" type="text" value="<?php echo $Data[2034]; ?>"></td>

		    </tr>	    
		    <tr>
		      <td class="al-left">- ตลิ่ง (แห่ง)</td>
		      <td><input class="span3"  name="Data[761]" type="text" value="<?php echo $Data[761]; ?>"></td>
		      <td><input class="span4"  name="Data[762]" type="text" value="<?php echo $Data[762]; ?>"></td>
		      <td><input class="span1"  name="Data[756]" type="text" value="<?php echo $Data[756]; ?>"></td>
		      <td><input class="span1"  name="Data[757]" type="text" value="<?php echo $Data[757]; ?>"></td>
		      <td><input class="span1"  name="Data[758]" type="text" value="<?php echo $Data[758]; ?>"></td>
		      <td><input class="span1"  name="Data[759]" type="text" value="<?php echo $Data[759]; ?>"></td>
		      <td><input class="span1"  name="Data[760]" type="text" value="<?php echo $Data[760]; ?>"></td>
		      <td><input class="span1"  name="Data[2035]" type="text" value="<?php echo $Data[2035]; ?>"></td>
		      <td><input class="span1"  name="Data[2036]" type="text" value="<?php echo $Data[2036]; ?>"></td>
		      <td><input class="span1"  name="Data[2037]" type="text" value="<?php echo $Data[2037]; ?>"></td>
		      <td><input class="span1"  name="Data[2038]" type="text" value="<?php echo $Data[2038]; ?>"></td>
		      <td><input class="span1"  name="Data[2039]" type="text" value="<?php echo $Data[2039]; ?>"></td>
		      <td><input class="span1"  name="Data[2040]" type="text" value="<?php echo $Data[2040]; ?>"></td>
		      <td><input class="span1"  name="Data[2041]" type="text" value="<?php echo $Data[2041]; ?>"></td>
		      <td><input class="span1"  name="Data[2042]" type="text" value="<?php echo $Data[2042]; ?>"></td>
		      <td><input class="span1"  name="Data[2043]" type="text" value="<?php echo $Data[2043]; ?>"></td>
		      <td><input class="span1"  name="Data[2044]" type="text" value="<?php echo $Data[2044]; ?>"></td>
		      <td><input class="span1"  name="Data[2045]" type="text" value="<?php echo $Data[2045]; ?>"></td>
		      <td><input class="span1"  name="Data[2046]" type="text" value="<?php echo $Data[2046]; ?>"></td>
		      <td><input class="span1"  name="Data[2047]" type="text" value="<?php echo $Data[2047]; ?>"></td>
		      <td><input class="span1"  name="Data[2048]" type="text" value="<?php echo $Data[2048]; ?>"></td>
		      <td><input class="span1"  name="Data[2049]" type="text" value="<?php echo $Data[2049]; ?>"></td>

		    </tr>	  
		    <tr>
		      <td class="al-left">- เสาไฟฟ้าหมู่บ้าน (ต้น)</td>
		      <td><input class="span3"  name="Data[768]" type="text" value="<?php echo $Data[768]; ?>"></td>
		      <td><input class="span4"  name="Data[769]" type="text" value="<?php echo $Data[769]; ?>"></td>
		      <td><input class="span1"  name="Data[763]" type="text" value="<?php echo $Data[763]; ?>"></td>
		      <td><input class="span1"  name="Data[764]" type="text" value="<?php echo $Data[764]; ?>"></td>
		      <td><input class="span1"  name="Data[765]" type="text" value="<?php echo $Data[765]; ?>"></td>
		      <td><input class="span1"  name="Data[766]" type="text" value="<?php echo $Data[766]; ?>"></td>
		      <td><input class="span1"  name="Data[767]" type="text" value="<?php echo $Data[767]; ?>"></td>
		      <td><input class="span1"  name="Data[2050]" type="text" value="<?php echo $Data[2050]; ?>"></td>
		      <td><input class="span1"  name="Data[2051]" type="text" value="<?php echo $Data[2051]; ?>"></td>
		      <td><input class="span1"  name="Data[2052]" type="text" value="<?php echo $Data[2052]; ?>"></td>
		      <td><input class="span1"  name="Data[2053]" type="text" value="<?php echo $Data[2053]; ?>"></td>
		      <td><input class="span1"  name="Data[2054]" type="text" value="<?php echo $Data[2054]; ?>"></td>
		      <td><input class="span1"  name="Data[2055]" type="text" value="<?php echo $Data[2055]; ?>"></td>
		      <td><input class="span1"  name="Data[2056]" type="text" value="<?php echo $Data[2056]; ?>"></td>
		      <td><input class="span1"  name="Data[2057]" type="text" value="<?php echo $Data[2057]; ?>"></td>
		      <td><input class="span1"  name="Data[2058]" type="text" value="<?php echo $Data[2058]; ?>"></td>
		      <td><input class="span1"  name="Data[2059]" type="text" value="<?php echo $Data[2059]; ?>"></td>
		      <td><input class="span1"  name="Data[2060]" type="text" value="<?php echo $Data[2060]; ?>"></td>
		      <td><input class="span1"  name="Data[2061]" type="text" value="<?php echo $Data[2061]; ?>"></td>
		      <td><input class="span1"  name="Data[2062]" type="text" value="<?php echo $Data[2062]; ?>"></td>
		      <td><input class="span1"  name="Data[2063]" type="text" value="<?php echo $Data[2063]; ?>"></td>
		      <td><input class="span1"  name="Data[2064]" type="text" value="<?php echo $Data[2064]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- หม้อแปลง (หม้อ)</td>
		      <td><input class="span3"  name="Data[775]" type="text" value="<?php echo $Data[775]; ?>"></td>
		      <td><input class="span4"  name="Data[776]" type="text" value="<?php echo $Data[776]; ?>"></td>
		      <td><input class="span1"  name="Data[770]" type="text" value="<?php echo $Data[770]; ?>"></td>
		      <td><input class="span1"  name="Data[771]" type="text" value="<?php echo $Data[771]; ?>"></td>
		      <td><input class="span1"  name="Data[772]" type="text" value="<?php echo $Data[772]; ?>"></td>
		      <td><input class="span1"  name="Data[773]" type="text" value="<?php echo $Data[773]; ?>"></td>
		      <td><input class="span1"  name="Data[774]" type="text" value="<?php echo $Data[774]; ?>"></td>
		      <td><input class="span1"  name="Data[2064]" type="text" value="<?php echo $Data[2064]; ?>"></td>
		      <td><input class="span1"  name="Data[2065]" type="text" value="<?php echo $Data[2065]; ?>"></td>
		      <td><input class="span1"  name="Data[2066]" type="text" value="<?php echo $Data[2066]; ?>"></td>
		      <td><input class="span1"  name="Data[2067]" type="text" value="<?php echo $Data[2067]; ?>"></td>
		      <td><input class="span1"  name="Data[2068]" type="text" value="<?php echo $Data[2068]; ?>"></td>
		      <td><input class="span1"  name="Data[2069]" type="text" value="<?php echo $Data[2069]; ?>"></td>
		      <td><input class="span1"  name="Data[2070]" type="text" value="<?php echo $Data[2070]; ?>"></td>
		      <td><input class="span1"  name="Data[2071]" type="text" value="<?php echo $Data[2071]; ?>"></td>
		      <td><input class="span1"  name="Data[2072]" type="text" value="<?php echo $Data[2072]; ?>"></td>
		      <td><input class="span1"  name="Data[2073]" type="text" value="<?php echo $Data[2073]; ?>"></td>
		      <td><input class="span1"  name="Data[2074]" type="text" value="<?php echo $Data[2074]; ?>"></td>
		      <td><input class="span1"  name="Data[2075]" type="text" value="<?php echo $Data[2075]; ?>"></td>
		      <td><input class="span1"  name="Data[2076]" type="text" value="<?php echo $Data[2076]; ?>"></td>
		      <td><input class="span1"  name="Data[2077]" type="text" value="<?php echo $Data[2077]; ?>"></td>
		      <td><input class="span1"  name="Data[2078]" type="text" value="<?php echo $Data[2078]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ (โปรดระบุ) <input class="span3"  name="Data[777]" type="text" value="<?php echo $Data[777]; ?>"></td>
		      <td><input class="span3"  name="Data[783]" type="text" value="<?php echo $Data[783]; ?>"></td>
		      <td><input class="span4"  name="Data[784]" type="text" value="<?php echo $Data[784]; ?>"></td>
		      <td><input class="span1"  name="Data[778]" type="text" value="<?php echo $Data[778]; ?>"></td>
		      <td><input class="span1"  name="Data[779]" type="text" value="<?php echo $Data[779]; ?>"></td>
		      <td><input class="span1"  name="Data[780]" type="text" value="<?php echo $Data[780]; ?>"></td>
		      <td><input class="span1"  name="Data[781]" type="text" value="<?php echo $Data[781]; ?>"></td>
		      <td><input class="span1"  name="Data[782]" type="text" value="<?php echo $Data[782]; ?>"></td>
		      <td><input class="span1"  name="Data[2079]" type="text" value="<?php echo $Data[2079]; ?>"></td>
		      <td><input class="span1"  name="Data[2080]" type="text" value="<?php echo $Data[2080]; ?>"></td>
		      <td><input class="span1"  name="Data[2081]" type="text" value="<?php echo $Data[2081]; ?>"></td>
		      <td><input class="span1"  name="Data[2082]" type="text" value="<?php echo $Data[2082]; ?>"></td>
		      <td><input class="span1"  name="Data[2083]" type="text" value="<?php echo $Data[2083]; ?>"></td>
		      <td><input class="span1"  name="Data[2084]" type="text" value="<?php echo $Data[2084]; ?>"></td>
		      <td><input class="span1"  name="Data[2085]" type="text" value="<?php echo $Data[2085]; ?>"></td>
		      <td><input class="span1"  name="Data[2086]" type="text" value="<?php echo $Data[2086]; ?>"></td>
		      <td><input class="span1"  name="Data[2087]" type="text" value="<?php echo $Data[2087]; ?>"></td>
		      <td><input class="span1"  name="Data[2088]" type="text" value="<?php echo $Data[2088]; ?>"></td>
		      <td><input class="span1"  name="Data[2089]" type="text" value="<?php echo $Data[2089]; ?>"></td>
		      <td><input class="span1"  name="Data[2090]" type="text" value="<?php echo $Data[2090]; ?>"></td>
		      <td><input class="span1"  name="Data[2091]" type="text" value="<?php echo $Data[2091]; ?>"></td>
		      <td><input class="span1"  name="Data[2092]" type="text" value="<?php echo $Data[2092]; ?>"></td>
		      <td><input class="span1"  name="Data[2093]" type="text" value="<?php echo $Data[2093]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.3.4 อาคารสาธารณะของชุมชน  (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.4 อาคารสาธารณะของชุมชน  (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		   
		    <tr>
		      <td class="al-left">- ศาลาประชาคม</td>
		      <td><input class="span3"  name="Data[790]" type="text" value="<?php echo $Data[790]; ?>"></td>
		      <td><input class="span4"  name="Data[791]" type="text" value="<?php echo $Data[791]; ?>"></td>
		      <td><input class="span1"  name="Data[785]" type="text" value="<?php echo $Data[785]; ?>"></td>
		      <td><input class="span1"  name="Data[786]" type="text" value="<?php echo $Data[786]; ?>"></td>
		      <td><input class="span1"  name="Data[787]" type="text" value="<?php echo $Data[787]; ?>"></td>
		      <td><input class="span1"  name="Data[788]" type="text" value="<?php echo $Data[788]; ?>"></td>
		      <td><input class="span1"  name="Data[789]" type="text" value="<?php echo $Data[789]; ?>"></td>
		      <td><input class="span1"  name="Data[2094]" type="text" value="<?php echo $Data[2094]; ?>"></td>
		      <td><input class="span1"  name="Data[2095]" type="text" value="<?php echo $Data[2095]; ?>"></td>
		      <td><input class="span1"  name="Data[2096]" type="text" value="<?php echo $Data[2096]; ?>"></td>
		      <td><input class="span1"  name="Data[2097]" type="text" value="<?php echo $Data[2097]; ?>"></td>
		      <td><input class="span1"  name="Data[2098]" type="text" value="<?php echo $Data[2098]; ?>"></td>
		      <td><input class="span1"  name="Data[2099]" type="text" value="<?php echo $Data[2099]; ?>"></td>
		      <td><input class="span1"  name="Data[2100]" type="text" value="<?php echo $Data[2100]; ?>"></td>
		      <td><input class="span1"  name="Data[2101]" type="text" value="<?php echo $Data[2101]; ?>"></td>
		      <td><input class="span1"  name="Data[2102]" type="text" value="<?php echo $Data[2102]; ?>"></td>
		      <td><input class="span1"  name="Data[2103]" type="text" value="<?php echo $Data[2103]; ?>"></td>
		      <td><input class="span1"  name="Data[2104]" type="text" value="<?php echo $Data[2104]; ?>"></td>
		      <td><input class="span1"  name="Data[2105]" type="text" value="<?php echo $Data[2105]; ?>"></td>
		      <td><input class="span1"  name="Data[2106]" type="text" value="<?php echo $Data[2106]; ?>"></td>
		      <td><input class="span1"  name="Data[2107]" type="text" value="<?php echo $Data[2107]; ?>"></td>
		      <td><input class="span1"  name="Data[2108]" type="text" value="<?php echo $Data[2108]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ศาลาเอนกประสงค์</td>
		      <td><input class="span3"  name="Data[797]" type="text" value="<?php echo $Data[797]; ?>"></td>
		      <td><input class="span4"  name="Data[798]" type="text" value="<?php echo $Data[798]; ?>"></td>
		      <td><input class="span1"  name="Data[792]" type="text" value="<?php echo $Data[792]; ?>"></td>
		      <td><input class="span1"  name="Data[793]" type="text" value="<?php echo $Data[793]; ?>"></td>
		      <td><input class="span1"  name="Data[794]" type="text" value="<?php echo $Data[794]; ?>"></td>
		      <td><input class="span1"  name="Data[795]" type="text" value="<?php echo $Data[795]; ?>"></td>
		      <td><input class="span1"  name="Data[796]" type="text" value="<?php echo $Data[796]; ?>"></td>
		      <td><input class="span1"  name="Data[2109]" type="text" value="<?php echo $Data[2109]; ?>"></td>
		      <td><input class="span1"  name="Data[2110]" type="text" value="<?php echo $Data[2110]; ?>"></td>
		      <td><input class="span1"  name="Data[2111]" type="text" value="<?php echo $Data[2111]; ?>"></td>
		      <td><input class="span1"  name="Data[2112]" type="text" value="<?php echo $Data[2112]; ?>"></td>
		      <td><input class="span1"  name="Data[2113]" type="text" value="<?php echo $Data[2113]; ?>"></td>
		      <td><input class="span1"  name="Data[2114]" type="text" value="<?php echo $Data[2114]; ?>"></td>
		      <td><input class="span1"  name="Data[2115]" type="text" value="<?php echo $Data[2115]; ?>"></td>
		      <td><input class="span1"  name="Data[2116]" type="text" value="<?php echo $Data[2116]; ?>"></td>
		      <td><input class="span1"  name="Data[2117]" type="text" value="<?php echo $Data[2117]; ?>"></td>
		      <td><input class="span1"  name="Data[2118]" type="text" value="<?php echo $Data[2118]; ?>"></td>
		      <td><input class="span1"  name="Data[2119]" type="text" value="<?php echo $Data[2119]; ?>"></td>
		      <td><input class="span1"  name="Data[2120]" type="text" value="<?php echo $Data[2120]; ?>"></td>
		      <td><input class="span1"  name="Data[2121]" type="text" value="<?php echo $Data[2121]; ?>"></td>
		      <td><input class="span1"  name="Data[2122]" type="text" value="<?php echo $Data[2122]; ?>"></td>
		      <td><input class="span1"  name="Data[2123]" type="text" value="<?php echo $Data[2123]; ?>"></td>

		    </tr>	 
		    <tr>
		      <td class="al-left">- ลานกีฬา</td>
		      <td><input class="span3"  name="Data[805]" type="text" value="<?php echo $Data[805]; ?>"></td>
		      <td><input class="span4"  name="Data[806]" type="text" value="<?php echo $Data[806]; ?>"></td>	
		      <td><input class="span1"  name="Data[799]" type="text" value="<?php echo $Data[799]; ?>"></td>
		      <td><input class="span1"  name="Data[800]" type="text" value="<?php echo $Data[801]; ?>"></td>
		      <td><input class="span1"  name="Data[802]" type="text" value="<?php echo $Data[802]; ?>"></td>
		      <td><input class="span1"  name="Data[803]" type="text" value="<?php echo $Data[803]; ?>"></td>
		      <td><input class="span1"  name="Data[804]" type="text" value="<?php echo $Data[804]; ?>"></td>
		      <td><input class="span1"  name="Data[2124]" type="text" value="<?php echo $Data[2124]; ?>"></td>
		      <td><input class="span1"  name="Data[2125]" type="text" value="<?php echo $Data[2125]; ?>"></td>
		      <td><input class="span1"  name="Data[2126]" type="text" value="<?php echo $Data[2126]; ?>"></td>
		      <td><input class="span1"  name="Data[2127]" type="text" value="<?php echo $Data[2127]; ?>"></td>
		      <td><input class="span1"  name="Data[2128]" type="text" value="<?php echo $Data[2128]; ?>"></td>
		      <td><input class="span1"  name="Data[2129]" type="text" value="<?php echo $Data[2129]; ?>"></td>
		      <td><input class="span1"  name="Data[2130]" type="text" value="<?php echo $Data[2130]; ?>"></td>
		      <td><input class="span1"  name="Data[2131]" type="text" value="<?php echo $Data[2131]; ?>"></td>
		      <td><input class="span1"  name="Data[2132]" type="text" value="<?php echo $Data[2132]; ?>"></td>
		      <td><input class="span1"  name="Data[2133]" type="text" value="<?php echo $Data[2133]; ?>"></td>
		      <td><input class="span1"  name="Data[2134]" type="text" value="<?php echo $Data[2134]; ?>"></td>
		      <td><input class="span1"  name="Data[2135]" type="text" value="<?php echo $Data[2135]; ?>"></td>
		      <td><input class="span1"  name="Data[2136]" type="text" value="<?php echo $Data[2136]; ?>"></td>
		      <td><input class="span1"  name="Data[2137]" type="text" value="<?php echo $Data[2137]; ?>"></td>
		      <td><input class="span1"  name="Data[2138]" type="text" value="<?php echo $Data[2138]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ(โปรดระบุ) <input class="span3"  name="Data[807]" type="text" value="<?php echo $Data[807]; ?>"></td>
		      <td><input class="span3"  name="Data[813]" type="text" value="<?php echo $Data[813]; ?>"></td>
		      <td><input class="span4"  name="Data[814]" type="text" value="<?php echo $Data[814]; ?>"></td>
		      <td><input class="span1"  name="Data[808]" type="text" value="<?php echo $Data[808]; ?>"></td>
		      <td><input class="span1"  name="Data[809]" type="text" value="<?php echo $Data[809]; ?>"></td>
		      <td><input class="span1"  name="Data[810]" type="text" value="<?php echo $Data[810]; ?>"></td>
		      <td><input class="span1"  name="Data[811]" type="text" value="<?php echo $Data[811]; ?>"></td>
		      <td><input class="span1"  name="Data[812]" type="text" value="<?php echo $Data[812]; ?>"></td>
		      <td><input class="span1"  name="Data[2139]" type="text" value="<?php echo $Data[2139]; ?>"></td>
		      <td><input class="span1"  name="Data[2140]" type="text" value="<?php echo $Data[2140]; ?>"></td>
		      <td><input class="span1"  name="Data[2141]" type="text" value="<?php echo $Data[2141]; ?>"></td>
		      <td><input class="span1"  name="Data[2142]" type="text" value="<?php echo $Data[2142]; ?>"></td>
		      <td><input class="span1"  name="Data[2143]" type="text" value="<?php echo $Data[2143]; ?>"></td>
		      <td><input class="span1"  name="Data[2144]" type="text" value="<?php echo $Data[2144]; ?>"></td>
		      <td><input class="span1"  name="Data[2145]" type="text" value="<?php echo $Data[2145]; ?>"></td>
		      <td><input class="span1"  name="Data[2146]" type="text" value="<?php echo $Data[2146]; ?>"></td>
		      <td><input class="span1"  name="Data[2147]" type="text" value="<?php echo $Data[2147]; ?>"></td>
		      <td><input class="span1"  name="Data[2148]" type="text" value="<?php echo $Data[2148]; ?>"></td>
		      <td><input class="span1"  name="Data[2149]" type="text" value="<?php echo $Data[2149]; ?>"></td>
		      <td><input class="span1"  name="Data[2150]" type="text" value="<?php echo $Data[2150]; ?>"></td>
		      <td><input class="span1"  name="Data[2151]" type="text" value="<?php echo $Data[2151]; ?>"></td>
		      <td><input class="span1"  name="Data[2152]" type="text" value="<?php echo $Data[2152]; ?>"></td>
		      <td><input class="span1"  name="Data[2153]" type="text" value="<?php echo $Data[2153]; ?>"></td>

		    </tr>	
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.3.5 ศาสนสถาน (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.5 ศาสนสถาน (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		   
		    <tr>
		      <td class="al-left">- วัด</td>
		      <td><input class="span3"  name="Data[820]" type="text" value="<?php echo $Data[820]; ?>"></td>
		      <td><input class="span4"  name="Data[821]" type="text" value="<?php echo $Data[821]; ?>"></td>
		      <td><input class="span1"  name="Data[815]" type="text" value="<?php echo $Data[815]; ?>"></td>
		      <td><input class="span1"  name="Data[816]" type="text" value="<?php echo $Data[816]; ?>"></td>
		      <td><input class="span1"  name="Data[817]" type="text" value="<?php echo $Data[817]; ?>"></td>
		      <td><input class="span1"  name="Data[818]" type="text" value="<?php echo $Data[818]; ?>"></td>
		      <td><input class="span1"  name="Data[819]" type="text" value="<?php echo $Data[819]; ?>"></td>
		      <td><input class="span1"  name="Data[2153]" type="text" value="<?php echo $Data[2153]; ?>"></td>
		      <td><input class="span1"  name="Data[2154]" type="text" value="<?php echo $Data[2154]; ?>"></td>
		      <td><input class="span1"  name="Data[2155]" type="text" value="<?php echo $Data[2155]; ?>"></td>
		      <td><input class="span1"  name="Data[2156]" type="text" value="<?php echo $Data[2156]; ?>"></td>
		      <td><input class="span1"  name="Data[2157]" type="text" value="<?php echo $Data[2157]; ?>"></td>
		      <td><input class="span1"  name="Data[2158]" type="text" value="<?php echo $Data[2158]; ?>"></td>
		      <td><input class="span1"  name="Data[2159]" type="text" value="<?php echo $Data[2159]; ?>"></td>
		      <td><input class="span1"  name="Data[2160]" type="text" value="<?php echo $Data[2160]; ?>"></td>
		      <td><input class="span1"  name="Data[2161]" type="text" value="<?php echo $Data[2161]; ?>"></td>
		      <td><input class="span1"  name="Data[2162]" type="text" value="<?php echo $Data[2162]; ?>"></td>
		      <td><input class="span1"  name="Data[2163]" type="text" value="<?php echo $Data[2163]; ?>"></td>
		      <td><input class="span1"  name="Data[2164]" type="text" value="<?php echo $Data[2164]; ?>"></td>
		      <td><input class="span1"  name="Data[2165]" type="text" value="<?php echo $Data[2165]; ?>"></td>
		      <td><input class="span1"  name="Data[2166]" type="text" value="<?php echo $Data[2166]; ?>"></td>
		      <td><input class="span1"  name="Data[2167]" type="text" value="<?php echo $Data[2167]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- มัสยิด</td>
		      <td><input class="span3"  name="Data[827]" type="text" value="<?php echo $Data[827]; ?>"></td>
		      <td><input class="span4"  name="Data[828]" type="text" value="<?php echo $Data[828]; ?>"></td>
		      <td><input class="span1"  name="Data[822]" type="text" value="<?php echo $Data[822]; ?>"></td>
		      <td><input class="span1"  name="Data[823]" type="text" value="<?php echo $Data[823]; ?>"></td>
		      <td><input class="span1"  name="Data[824]" type="text" value="<?php echo $Data[824]; ?>"></td>
		      <td><input class="span1"  name="Data[825]" type="text" value="<?php echo $Data[825]; ?>"></td>
		      <td><input class="span1"  name="Data[826]" type="text" value="<?php echo $Data[826]; ?>"></td>
		      <td><input class="span1"  name="Data[2168]" type="text" value="<?php echo $Data[2168]; ?>"></td>
		      <td><input class="span1"  name="Data[2169]" type="text" value="<?php echo $Data[2169]; ?>"></td>
		      <td><input class="span1"  name="Data[2170]" type="text" value="<?php echo $Data[2170]; ?>"></td>
		      <td><input class="span1"  name="Data[2171]" type="text" value="<?php echo $Data[2171]; ?>"></td>
		      <td><input class="span1"  name="Data[2172]" type="text" value="<?php echo $Data[2172]; ?>"></td>
		      <td><input class="span1"  name="Data[2173]" type="text" value="<?php echo $Data[2173]; ?>"></td>
		      <td><input class="span1"  name="Data[2174]" type="text" value="<?php echo $Data[2174]; ?>"></td>
		      <td><input class="span1"  name="Data[2175]" type="text" value="<?php echo $Data[2175]; ?>"></td>
		      <td><input class="span1"  name="Data[2176]" type="text" value="<?php echo $Data[2176]; ?>"></td>
		      <td><input class="span1"  name="Data[2177]" type="text" value="<?php echo $Data[2177]; ?>"></td>
		      <td><input class="span1"  name="Data[2178]" type="text" value="<?php echo $Data[2178]; ?>"></td>
		      <td><input class="span1"  name="Data[2179]" type="text" value="<?php echo $Data[2179]; ?>"></td>
		      <td><input class="span1"  name="Data[2180]" type="text" value="<?php echo $Data[2180]; ?>"></td>
		      <td><input class="span1"  name="Data[2180]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2181]" type="text" value="<?php echo $Data[2182]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- โบสถ์คริสต์</td>
		      <td><input class="span3"  name="Data[834]" type="text" value="<?php echo $Data[834]; ?>"></td>
		      <td><input class="span4"  name="Data[835]" type="text" value="<?php echo $Data[836]; ?>"></td>
		      <td><input class="span1"  name="Data[829]" type="text" value="<?php echo $Data[829]; ?>"></td>
		      <td><input class="span1"  name="Data[830]" type="text" value="<?php echo $Data[830]; ?>"></td>
		      <td><input class="span1"  name="Data[831]" type="text" value="<?php echo $Data[831]; ?>"></td>
		      <td><input class="span1"  name="Data[832]" type="text" value="<?php echo $Data[832]; ?>"></td>
		      <td><input class="span1"  name="Data[833]" type="text" value="<?php echo $Data[833]; ?>"></td>
		      <td><input class="span1"  name="Data[2181]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2182]" type="text" value="<?php echo $Data[2182]; ?>"></td>
		      <td><input class="span1"  name="Data[2183]" type="text" value="<?php echo $Data[218]; ?>"></td>
		      <td><input class="span1"  name="Data[2184]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2185]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2186]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2187]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2188]" type="text" value="<?php echo $Data[2181]; ?>"></td>
		      <td><input class="span1"  name="Data[2199]" type="text" value="<?php echo $Data[2190]; ?>"></td>
		      <td><input class="span1"  name="Data[2190]" type="text" value="<?php echo $Data[2190]; ?>"></td>
		      <td><input class="span1"  name="Data[2191]" type="text" value="<?php echo $Data[2190]; ?>"></td>
		      <td><input class="span1"  name="Data[2192]" type="text" value="<?php echo $Data[2190]; ?>"></td>
		      <td><input class="span1"  name="Data[2193]" type="text" value="<?php echo $Data[2190]; ?>"></td>
		      <td><input class="span1"  name="Data[2194]" type="text" value="<?php echo $Data[2190]; ?>"></td>
		      <td><input class="span1"  name="Data[2195]" type="text" value="<?php echo $Data[2190]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- โบราณสถาน</td>
		      <td><input class="span3"  name="Data[842]" type="text" value="<?php echo $Data[842]; ?>"></td>
		      <td><input class="span4"  name="Data[843]" type="text" value="<?php echo $Data[843]; ?>"></td>
		      <td><input class="span1"  name="Data[837]" type="text" value="<?php echo $Data[837]; ?>"></td>
		      <td><input class="span1"  name="Data[838]" type="text" value="<?php echo $Data[838]; ?>"></td>
		      <td><input class="span1"  name="Data[839]" type="text" value="<?php echo $Data[839]; ?>"></td>
		      <td><input class="span1"  name="Data[840]" type="text" value="<?php echo $Data[840]; ?>"></td>
		      <td><input class="span1"  name="Data[841]" type="text" value="<?php echo $Data[841]; ?>"></td>
		      <td><input class="span1"  name="Data[2196]" type="text" value="<?php echo $Data[2196]; ?>"></td>
		      <td><input class="span1"  name="Data[2197]" type="text" value="<?php echo $Data[2197]; ?>"></td>
		      <td><input class="span1"  name="Data[2198]" type="text" value="<?php echo $Data[2198]; ?>"></td>
		      <td><input class="span1"  name="Data[2199]" type="text" value="<?php echo $Data[2199]; ?>"></td>
		      <td><input class="span1"  name="Data[2200]" type="text" value="<?php echo $Data[2200]; ?>"></td>
		      <td><input class="span1"  name="Data[2201]" type="text" value="<?php echo $Data[2201]; ?>"></td>
		      <td><input class="span1"  name="Data[2202]" type="text" value="<?php echo $Data[2202]; ?>"></td>
		      <td><input class="span1"  name="Data[2203]" type="text" value="<?php echo $Data[2203]; ?>"></td>
		      <td><input class="span1"  name="Data[2204]" type="text" value="<?php echo $Data[2204]; ?>"></td>
		      <td><input class="span1"  name="Data[2205]" type="text" value="<?php echo $Data[2205]; ?>"></td>
		      <td><input class="span1"  name="Data[2206]" type="text" value="<?php echo $Data[2206]; ?>"></td>
		      <td><input class="span1"  name="Data[2207]" type="text" value="<?php echo $Data[2207]; ?>"></td>
		      <td><input class="span1"  name="Data[2208]" type="text" value="<?php echo $Data[2208]; ?>"></td>
		      <td><input class="span1"  name="Data[2209]" type="text" value="<?php echo $Data[2209]; ?>"></td>
		      <td><input class="span1"  name="Data[2210]" type="text" value="<?php echo $Data[2210]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ(โปรดระบุ) <input class="span3"  name="Data[844]" type="text" value="<?php echo $Data[844]; ?>"></td>
		      <td><input class="span3"  name="Data[850]" type="text" value="<?php echo $Data[850]; ?>"></td>
		      <td><input class="span4"  name="Data[851]" type="text" value="<?php echo $Data[851]; ?>"></td>
		      <td><input class="span1"  name="Data[845]" type="text" value="<?php echo $Data[845]; ?>"></td>
		      <td><input class="span1"  name="Data[846]" type="text" value="<?php echo $Data[846]; ?>"></td>
		      <td><input class="span1"  name="Data[847]" type="text" value="<?php echo $Data[847]; ?>"></td>
		      <td><input class="span1"  name="Data[848]" type="text" value="<?php echo $Data[848]; ?>"></td>
		      <td><input class="span1"  name="Data[849]" type="text" value="<?php echo $Data[849]; ?>"></td>
		      <td><input class="span1"  name="Data[2211]" type="text" value="<?php echo $Data[2211]; ?>"></td>
		      <td><input class="span1"  name="Data[2212]" type="text" value="<?php echo $Data[2212]; ?>"></td>
		      <td><input class="span1"  name="Data[2213]" type="text" value="<?php echo $Data[2213]; ?>"></td>
		      <td><input class="span1"  name="Data[2214]" type="text" value="<?php echo $Data[2214]; ?>"></td>
		      <td><input class="span1"  name="Data[2215]" type="text" value="<?php echo $Data[2215]; ?>"></td>
		      <td><input class="span1"  name="Data[2216]" type="text" value="<?php echo $Data[2216]; ?>"></td>
		      <td><input class="span1"  name="Data[2217]" type="text" value="<?php echo $Data[2217]; ?>"></td>
		      <td><input class="span1"  name="Data[2218]" type="text" value="<?php echo $Data[2218]; ?>"></td>
		      <td><input class="span1"  name="Data[2219]" type="text" value="<?php echo $Data[2219]; ?>"></td>
		      <td><input class="span1"  name="Data[2220]" type="text" value="<?php echo $Data[2220]; ?>"></td>
		      <td><input class="span1"  name="Data[2221]" type="text" value="<?php echo $Data[2221]; ?>"></td>
		      <td><input class="span1"  name="Data[2222]" type="text" value="<?php echo $Data[2222]; ?>"></td>
		      <td><input class="span1"  name="Data[2223]" type="text" value="<?php echo $Data[2223]; ?>"></td>
		      <td><input class="span1"  name="Data[2224]" type="text" value="<?php echo $Data[2224]; ?>"></td>
		      <td><input class="span1"  name="Data[2225]" type="text" value="<?php echo $Data[2225]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.3.6 สถานที่ราชการ (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.6 สถานที่ราชการ (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		   
		    <tr>
		      <td class="al-left">- สำนักงานอปท.</td>
		      <td><input class="span3"  name="Data[857]" type="text" value="<?php echo $Data[857]; ?>"></td>
		      <td><input class="span4"  name="Data[858]" type="text" value="<?php echo $Data[858]; ?>"></td>
		      <td><input class="span1"  name="Data[852]" type="text" value="<?php echo $Data[852]; ?>"></td>
		      <td><input class="span1"  name="Data[853]" type="text" value="<?php echo $Data[853]; ?>"></td>
		      <td><input class="span1"  name="Data[854]" type="text" value="<?php echo $Data[854]; ?>"></td>
		      <td><input class="span1"  name="Data[855]" type="text" value="<?php echo $Data[855]; ?>"></td>
		      <td><input class="span1"  name="Data[856]" type="text" value="<?php echo $Data[856]; ?>"></td>
		      <td><input class="span1"  name="Data[2226]" type="text" value="<?php echo $Data[2226]; ?>"></td>
		      <td><input class="span1"  name="Data[2227]" type="text" value="<?php echo $Data[2227]; ?>"></td>
		      <td><input class="span1"  name="Data[2228]" type="text" value="<?php echo $Data[2228]; ?>"></td>
		      <td><input class="span1"  name="Data[2229]" type="text" value="<?php echo $Data[2229]; ?>"></td>
		      <td><input class="span1"  name="Data[2230]" type="text" value="<?php echo $Data[2230]; ?>"></td>
		      <td><input class="span1"  name="Data[2231]" type="text" value="<?php echo $Data[2231]; ?>"></td>
		      <td><input class="span1"  name="Data[2232]" type="text" value="<?php echo $Data[2232]; ?>"></td>
		      <td><input class="span1"  name="Data[2233]" type="text" value="<?php echo $Data[2233]; ?>"></td>
		      <td><input class="span1"  name="Data[2234]" type="text" value="<?php echo $Data[2234]; ?>"></td>
		      <td><input class="span1"  name="Data[2235]" type="text" value="<?php echo $Data[2235]; ?>"></td>
		      <td><input class="span1"  name="Data[2236]" type="text" value="<?php echo $Data[2236]; ?>"></td>
		      <td><input class="span1"  name="Data[2237]" type="text" value="<?php echo $Data[2237]; ?>"></td>
		      <td><input class="span1"  name="Data[2238]" type="text" value="<?php echo $Data[2238]; ?>"></td>
		      <td><input class="span1"  name="Data[2239]" type="text" value="<?php echo $Data[2239]; ?>"></td>
		      <td><input class="span1"  name="Data[2240]" type="text" value="<?php echo $Data[2240]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ที่ว่าการอำเภอ</td>
		      <td><input class="span3"  name="Data[864]" type="text" value="<?php echo $Data[864]; ?>"></td>
		      <td><input class="span4"  name="Data[865]" type="text" value="<?php echo $Data[865]; ?>"></td>
		      <td><input class="span1"  name="Data[859]" type="text" value="<?php echo $Data[859]; ?>"></td>
		      <td><input class="span1"  name="Data[860]" type="text" value="<?php echo $Data[860]; ?>"></td>
		      <td><input class="span1"  name="Data[861]" type="text" value="<?php echo $Data[861]; ?>"></td>
		      <td><input class="span1"  name="Data[862]" type="text" value="<?php echo $Data[862]; ?>"></td>
		      <td><input class="span1"  name="Data[863]" type="text" value="<?php echo $Data[863]; ?>"></td>
		      <td><input class="span1"  name="Data[2241]" type="text" value="<?php echo $Data[2241]; ?>"></td>
		      <td><input class="span1"  name="Data[2242]" type="text" value="<?php echo $Data[2242]; ?>"></td>
		      <td><input class="span1"  name="Data[2243]" type="text" value="<?php echo $Data[2243]; ?>"></td>
		      <td><input class="span1"  name="Data[2244]" type="text" value="<?php echo $Data[2244]; ?>"></td>
		      <td><input class="span1"  name="Data[2245]" type="text" value="<?php echo $Data[2245]; ?>"></td>
		      <td><input class="span1"  name="Data[2246]" type="text" value="<?php echo $Data[2246]; ?>"></td>
		      <td><input class="span1"  name="Data[2247]" type="text" value="<?php echo $Data[2247]; ?>"></td>
		      <td><input class="span1"  name="Data[2248]" type="text" value="<?php echo $Data[2248]; ?>"></td>
		      <td><input class="span1"  name="Data[2249]" type="text" value="<?php echo $Data[2249]; ?>"></td>
		      <td><input class="span1"  name="Data[2250]" type="text" value="<?php echo $Data[2250]; ?>"></td>
		      <td><input class="span1"  name="Data[2251]" type="text" value="<?php echo $Data[2251]; ?>"></td>
		      <td><input class="span1"  name="Data[2252]" type="text" value="<?php echo $Data[2252]; ?>"></td>
		      <td><input class="span1"  name="Data[2253]" type="text" value="<?php echo $Data[2253]; ?>"></td>
		      <td><input class="span1"  name="Data[2254]" type="text" value="<?php echo $Data[2254]; ?>"></td>
		      <td><input class="span1"  name="Data[2255]" type="text" value="<?php echo $Data[2255]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- สถานีตำรวจ</td>
		      <td><input class="span3"  name="Data[871]" type="text" value="<?php echo $Data[871]; ?>"></td>
		      <td><input class="span4"  name="Data[872]" type="text" value="<?php echo $Data[872]; ?>"></td>					      
		      <td><input class="span1"  name="Data[866]" type="text" value="<?php echo $Data[866]; ?>"></td>
		      <td><input class="span1"  name="Data[867]" type="text" value="<?php echo $Data[867]; ?>"></td>
		      <td><input class="span1"  name="Data[868]" type="text" value="<?php echo $Data[868]; ?>"></td>
		      <td><input class="span1"  name="Data[869]" type="text" value="<?php echo $Data[869]; ?>"></td>
		      <td><input class="span1"  name="Data[870]" type="text" value="<?php echo $Data[870]; ?>"></td>
		      <td><input class="span1"  name="Data[2256]" type="text" value="<?php echo $Data[2256]; ?>"></td>
		      <td><input class="span1"  name="Data[2257]" type="text" value="<?php echo $Data[2257]; ?>"></td>
		      <td><input class="span1"  name="Data[2258]" type="text" value="<?php echo $Data[2258]; ?>"></td>
		      <td><input class="span1"  name="Data[2259]" type="text" value="<?php echo $Data[2259]; ?>"></td>
		      <td><input class="span1"  name="Data[2260]" type="text" value="<?php echo $Data[2260]; ?>"></td>
		      <td><input class="span1"  name="Data[2261]" type="text" value="<?php echo $Data[2261]; ?>"></td>
		      <td><input class="span1"  name="Data[2262]" type="text" value="<?php echo $Data[2262]; ?>"></td>
		      <td><input class="span1"  name="Data[2263]" type="text" value="<?php echo $Data[2263]; ?>"></td>
		      <td><input class="span1"  name="Data[2264]" type="text" value="<?php echo $Data[2264]; ?>"></td>
		      <td><input class="span1"  name="Data[2265]" type="text" value="<?php echo $Data[2265]; ?>"></td>
		      <td><input class="span1"  name="Data[2266]" type="text" value="<?php echo $Data[2266]; ?>"></td>
		      <td><input class="span1"  name="Data[2267]" type="text" value="<?php echo $Data[2267]; ?>"></td>
		      <td><input class="span1"  name="Data[2268]" type="text" value="<?php echo $Data[2268]; ?>"></td>
		      <td><input class="span1"  name="Data[2269]" type="text" value="<?php echo $Data[2269]; ?>"></td>
		      <td><input class="span1"  name="Data[2270]" type="text" value="<?php echo $Data[2270]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- รพ.สต.</td>
		      <td><input class="span3"  name="Data[878]" type="text" value="<?php echo $Data[878]; ?>"></td>
		      <td><input class="span4"  name="Data[879]" type="text" value="<?php echo $Data[879]; ?>"></td>
		      <td><input class="span1"  name="Data[873]" type="text" value="<?php echo $Data[873]; ?>"></td>
		      <td><input class="span1"  name="Data[874]" type="text" value="<?php echo $Data[874]; ?>"></td>
		      <td><input class="span1"  name="Data[875]" type="text" value="<?php echo $Data[875]; ?>"></td>
		      <td><input class="span1"  name="Data[876]" type="text" value="<?php echo $Data[876]; ?>"></td>
		      <td><input class="span1"  name="Data[877]" type="text" value="<?php echo $Data[877]; ?>"></td>
		      <td><input class="span1"  name="Data[2271]" type="text" value="<?php echo $Data[2271]; ?>"></td>
		      <td><input class="span1"  name="Data[2272]" type="text" value="<?php echo $Data[2272]; ?>"></td>
		      <td><input class="span1"  name="Data[2273]" type="text" value="<?php echo $Data[2273]; ?>"></td>
		      <td><input class="span1"  name="Data[2274]" type="text" value="<?php echo $Data[2274]; ?>"></td>
		      <td><input class="span1"  name="Data[2275]" type="text" value="<?php echo $Data[2275]; ?>"></td>
		      <td><input class="span1"  name="Data[2276]" type="text" value="<?php echo $Data[2276]; ?>"></td>
		      <td><input class="span1"  name="Data[2277]" type="text" value="<?php echo $Data[2277]; ?>"></td>
		      <td><input class="span1"  name="Data[2278]" type="text" value="<?php echo $Data[2278]; ?>"></td>
		      <td><input class="span1"  name="Data[2279]" type="text" value="<?php echo $Data[2279]; ?>"></td>
		      <td><input class="span1"  name="Data[2280]" type="text" value="<?php echo $Data[2280]; ?>"></td>
		      <td><input class="span1"  name="Data[2281]" type="text" value="<?php echo $Data[2281]; ?>"></td>
		      <td><input class="span1"  name="Data[2282]" type="text" value="<?php echo $Data[2282]; ?>"></td>
		      <td><input class="span1"  name="Data[2283]" type="text" value="<?php echo $Data[2283]; ?>"></td>
		      <td><input class="span1"  name="Data[2284]" type="text" value="<?php echo $Data[2284]; ?>"></td>
		      <td><input class="span1"  name="Data[2285]" type="text" value="<?php echo $Data[2285]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- โรงพยาบาล</td>
		      <td><input class="span3"  name="Data[885]" type="text" value="<?php echo $Data[885]; ?>"></td>
		      <td><input class="span4"  name="Data[886]" type="text" value="<?php echo $Data[886]; ?>"></td>
		      <td><input class="span1"  name="Data[880]" type="text" value="<?php echo $Data[880]; ?>"></td>
		      <td><input class="span1"  name="Data[881]" type="text" value="<?php echo $Data[881]; ?>"></td>
		      <td><input class="span1"  name="Data[882]" type="text" value="<?php echo $Data[882]; ?>"></td>
		      <td><input class="span1"  name="Data[883]" type="text" value="<?php echo $Data[883]; ?>"></td>
		      <td><input class="span1"  name="Data[884]" type="text" value="<?php echo $Data[884]; ?>"></td>
		      <td><input class="span1"  name="Data[2285]" type="text" value="<?php echo $Data[2285]; ?>"></td>
		      <td><input class="span1"  name="Data[2286]" type="text" value="<?php echo $Data[2286]; ?>"></td>
		      <td><input class="span1"  name="Data[2287]" type="text" value="<?php echo $Data[2287]; ?>"></td>
		      <td><input class="span1"  name="Data[2288]" type="text" value="<?php echo $Data[2288]; ?>"></td>
		      <td><input class="span1"  name="Data[2289]" type="text" value="<?php echo $Data[2289]; ?>"></td>
		      <td><input class="span1"  name="Data[2290]" type="text" value="<?php echo $Data[2290]; ?>"></td>
		      <td><input class="span1"  name="Data[2291]" type="text" value="<?php echo $Data[2291]; ?>"></td>
		      <td><input class="span1"  name="Data[2292]" type="text" value="<?php echo $Data[2292]; ?>"></td>
		      <td><input class="span1"  name="Data[2293]" type="text" value="<?php echo $Data[2293]; ?>"></td>
		      <td><input class="span1"  name="Data[2294]" type="text" value="<?php echo $Data[2294]; ?>"></td>
		      <td><input class="span1"  name="Data[2295]" type="text" value="<?php echo $Data[2295]; ?>"></td>
		      <td><input class="span1"  name="Data[2296]" type="text" value="<?php echo $Data[2296]; ?>"></td>
		      <td><input class="span1"  name="Data[2297]" type="text" value="<?php echo $Data[2297]; ?>"></td>
		      <td><input class="span1"  name="Data[2298]" type="text" value="<?php echo $Data[2298]; ?>"></td>
		      <td><input class="span1"  name="Data[2299]" type="text" value="<?php echo $Data[2299]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- โรงเรียน</td>
		      <td><input class="span3"  name="Data[892]" type="text" value="<?php echo $Data[892]; ?>"></td>
		      <td><input class="span4"  name="Data[893]" type="text" value="<?php echo $Data[893]; ?>"></td>
		      <td><input class="span1"  name="Data[887]" type="text" value="<?php echo $Data[887]; ?>"></td>
		      <td><input class="span1"  name="Data[888]" type="text" value="<?php echo $Data[888]; ?>"></td>
		      <td><input class="span1"  name="Data[889]" type="text" value="<?php echo $Data[889]; ?>"></td>
		      <td><input class="span1"  name="Data[890]" type="text" value="<?php echo $Data[890]; ?>"></td>
		      <td><input class="span1"  name="Data[891]" type="text" value="<?php echo $Data[891]; ?>"></td>
		      <td><input class="span1"  name="Data[2300]" type="text" value="<?php echo $Data[2300]; ?>"></td>
		      <td><input class="span1"  name="Data[2301]" type="text" value="<?php echo $Data[2301]; ?>"></td>
		      <td><input class="span1"  name="Data[2302]" type="text" value="<?php echo $Data[2302]; ?>"></td>
		      <td><input class="span1"  name="Data[2303]" type="text" value="<?php echo $Data[2303]; ?>"></td>
		      <td><input class="span1"  name="Data[2304]" type="text" value="<?php echo $Data[2304]; ?>"></td>
		      <td><input class="span1"  name="Data[2305]" type="text" value="<?php echo $Data[2305]; ?>"></td>
		      <td><input class="span1"  name="Data[2306]" type="text" value="<?php echo $Data[2306]; ?>"></td>
		      <td><input class="span1"  name="Data[2307]" type="text" value="<?php echo $Data[2307]; ?>"></td>
		      <td><input class="span1"  name="Data[2308]" type="text" value="<?php echo $Data[2308]; ?>"></td>
		      <td><input class="span1"  name="Data[2309]" type="text" value="<?php echo $Data[2309]; ?>"></td>
		      <td><input class="span1"  name="Data[2310]" type="text" value="<?php echo $Data[2310]; ?>"></td>
		      <td><input class="span1"  name="Data[2311]" type="text" value="<?php echo $Data[2311]; ?>"></td>
		      <td><input class="span1"  name="Data[2312]" type="text" value="<?php echo $Data[2312]; ?>"></td>
		      <td><input class="span1"  name="Data[2313]" type="text" value="<?php echo $Data[2313]; ?>"></td>
		      <td><input class="span1"  name="Data[2314]" type="text" value="<?php echo $Data[2314]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ศูนย์พัฒนาเด็กเล็ก</td>
		      <td><input class="span3"  name="Data[899]" type="text" value="<?php echo $Data[900]; ?>"></td>
		      <td><input class="span4"  name="Data[901]" type="text" value="<?php echo $Data[901]; ?>"></td>
		      <td><input class="span1"  name="Data[894]" type="text" value="<?php echo $Data[894]; ?>"></td>
		      <td><input class="span1"  name="Data[895]" type="text" value="<?php echo $Data[895]; ?>"></td>
		      <td><input class="span1"  name="Data[896]" type="text" value="<?php echo $Data[896]; ?>"></td>
		      <td><input class="span1"  name="Data[897]" type="text" value="<?php echo $Data[897]; ?>"></td>
		      <td><input class="span1"  name="Data[898]" type="text" value="<?php echo $Data[898]; ?>"></td>
	        <td><input class="span1"  name="Data[2315]" type="text" value="<?php echo $Data[2315]; ?>"></td>
		      <td><input class="span1"  name="Data[2316]" type="text" value="<?php echo $Data[2316]; ?>"></td>
		      <td><input class="span1"  name="Data[2317]" type="text" value="<?php echo $Data[2317]; ?>"></td>
		      <td><input class="span1"  name="Data[2318]" type="text" value="<?php echo $Data[2318]; ?>"></td>
		      <td><input class="span1"  name="Data[2319]" type="text" value="<?php echo $Data[2319]; ?>"></td>
	        <td><input class="span1"  name="Data[2320]" type="text" value="<?php echo $Data[2320]; ?>"></td>
		      <td><input class="span1"  name="Data[2321]" type="text" value="<?php echo $Data[2321]; ?>"></td>
		      <td><input class="span1"  name="Data[2322]" type="text" value="<?php echo $Data[2322]; ?>"></td>
		      <td><input class="span1"  name="Data[2323]" type="text" value="<?php echo $Data[2323]; ?>"></td>
		      <td><input class="span1"  name="Data[2324]" type="text" value="<?php echo $Data[2324]; ?>"></td>
	        <td><input class="span1"  name="Data[2325]" type="text" value="<?php echo $Data[2325]; ?>"></td>
		      <td><input class="span1"  name="Data[2326]" type="text" value="<?php echo $Data[2326]; ?>"></td>
		      <td><input class="span1"  name="Data[2327]" type="text" value="<?php echo $Data[2327]; ?>"></td>
		      <td><input class="span1"  name="Data[2328]" type="text" value="<?php echo $Data[2328]; ?>"></td>
		      <td><input class="span1"  name="Data[2329]" type="text" value="<?php echo $Data[2329]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ (โปรดระบุ) <input class="span3"  name="Data[902]" type="text" value="<?php echo $Data[902]; ?>"></td>
		      <td><input class="span3"  name="Data[908]" type="text" value="<?php echo $Data[908]; ?>"></td>
		      <td><input class="span4"  name="Data[909]" type="text" value="<?php echo $Data[909]; ?>"></td>
		      <td><input class="span1"  name="Data[903]" type="text" value="<?php echo $Data[903]; ?>"></td>
		      <td><input class="span1"  name="Data[904]" type="text" value="<?php echo $Data[904]; ?>"></td>
		      <td><input class="span1"  name="Data[905]" type="text" value="<?php echo $Data[905]; ?>"></td>
		      <td><input class="span1"  name="Data[906]" type="text" value="<?php echo $Data[906]; ?>"></td>
		      <td><input class="span1"  name="Data[907]" type="text" value="<?php echo $Data[907]; ?>"></td>
		      <td><input class="span1"  name="Data[2330]" type="text" value="<?php echo $Data[2330]; ?>"></td>
		      <td><input class="span1"  name="Data[2331]" type="text" value="<?php echo $Data[2331]; ?>"></td>
		      <td><input class="span1"  name="Data[2332]" type="text" value="<?php echo $Data[2332]; ?>"></td>
		      <td><input class="span1"  name="Data[2333]" type="text" value="<?php echo $Data[2333]; ?>"></td>
		      <td><input class="span1"  name="Data[2334]" type="text" value="<?php echo $Data[2334]; ?>"></td>
		      <td><input class="span1"  name="Data[2335]" type="text" value="<?php echo $Data[2335]; ?>"></td>
		      <td><input class="span1"  name="Data[2336]" type="text" value="<?php echo $Data[2336]; ?>"></td>
		      <td><input class="span1"  name="Data[2337]" type="text" value="<?php echo $Data[2337]; ?>"></td>
		      <td><input class="span1"  name="Data[2338]" type="text" value="<?php echo $Data[2338]; ?>"></td>
		      <td><input class="span1"  name="Data[2339]" type="text" value="<?php echo $Data[2339]; ?>"></td>
		      <td><input class="span1"  name="Data[2340]" type="text" value="<?php echo $Data[2340]; ?>"></td>
		      <td><input class="span1"  name="Data[2341]" type="text" value="<?php echo $Data[2341]; ?>"></td>
		      <td><input class="span1"  name="Data[2342]" type="text" value="<?php echo $Data[2342]; ?>"></td>
		      <td><input class="span1"  name="Data[2343]" type="text" value="<?php echo $Data[2343]; ?>"></td>
		      <td><input class="span1"  name="Data[2344]" type="text" value="<?php echo $Data[2344]; ?>"></td>

		    </tr>
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.7 สถานที่ท่องเที่ยว (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    		   
		    <tr>
		      <td class="al-left">- ระบุ <input class="span3"  name="Data[910]" type="text" value="<?php echo $Data[910]; ?>"></td>
		      <td><input class="span3"  name="Data[916]" type="text" value="<?php echo $Data[916]; ?>"></td>
		      <td><input class="span4"  name="Data[917]" type="text" value="<?php echo $Data[917]; ?>"></td>
		      <td><input class="span1"  name="Data[911]" type="text" value="<?php echo $Data[911]; ?>"></td>
		      <td><input class="span1"  name="Data[912]" type="text" value="<?php echo $Data[912]; ?>"></td>
		      <td><input class="span1"  name="Data[913]" type="text" value="<?php echo $Data[913]; ?>"></td>
		      <td><input class="span1"  name="Data[914]" type="text" value="<?php echo $Data[914]; ?>"></td>
		      <td><input class="span1"  name="Data[915]" type="text" value="<?php echo $Data[915]; ?>"></td>
		      <td><input class="span1"  name="Data[2345]" type="text" value="<?php echo $Data[2345]; ?>"></td>
		      <td><input class="span1"  name="Data[2346]" type="text" value="<?php echo $Data[2346]; ?>"></td>
		      <td><input class="span1"  name="Data[2347]" type="text" value="<?php echo $Data[2347]; ?>"></td>
		      <td><input class="span1"  name="Data[2348]" type="text" value="<?php echo $Data[2348]; ?>"></td>
		      <td><input class="span1"  name="Data[2349]" type="text" value="<?php echo $Data[2349]; ?>"></td>
		      <td><input class="span1"  name="Data[2350]" type="text" value="<?php echo $Data[2350]; ?>"></td>
		      <td><input class="span1"  name="Data[2351]" type="text" value="<?php echo $Data[2351]; ?>"></td>
		      <td><input class="span1"  name="Data[2352]" type="text" value="<?php echo $Data[2352]; ?>"></td>
		      <td><input class="span1"  name="Data[2353]" type="text" value="<?php echo $Data[2353]; ?>"></td>
		      <td><input class="span1"  name="Data[2354]" type="text" value="<?php echo $Data[2354]; ?>"></td>
		      <td><input class="span1"  name="Data[2355]" type="text" value="<?php echo $Data[2355]; ?>"></td>
		      <td><input class="span1"  name="Data[2356]" type="text" value="<?php echo $Data[2356]; ?>"></td>
		      <td><input class="span1"  name="Data[2357]" type="text" value="<?php echo $Data[2357]; ?>"></td>
		      <td><input class="span1"  name="Data[2358]" type="text" value="<?php echo $Data[2358]; ?>"></td>
		      <td><input class="span1"  name="Data[2359]" type="text" value="<?php echo $Data[2359]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ระบุ <input class="span3"  name="Data[918]" type="text" value="<?php echo $Data[918]; ?>"></td>
		      <td><input class="span3"  name="Data[924]" type="text" value="<?php echo $Data[924]; ?>"></td>
		      <td><input class="span4"  name="Data[924]" type="text" value="<?php echo $Data[924]; ?>"></td>
		      <td><input class="span1"  name="Data[919]" type="text" value="<?php echo $Data[919]; ?>"></td>
		      <td><input class="span1"  name="Data[920]" type="text" value="<?php echo $Data[920]; ?>"></td>
		      <td><input class="span1"  name="Data[921]" type="text" value="<?php echo $Data[921]; ?>"></td>
		      <td><input class="span1"  name="Data[922]" type="text" value="<?php echo $Data[922]; ?>"></td>
		      <td><input class="span1"  name="Data[923]" type="text" value="<?php echo $Data[923]; ?>"></td>
		      <td><input class="span1"  name="Data[2400]" type="text" value="<?php echo $Data[2400]; ?>"></td>
		      <td><input class="span1"  name="Data[2401]" type="text" value="<?php echo $Data[2401]; ?>"></td>
		      <td><input class="span1"  name="Data[2402]" type="text" value="<?php echo $Data[2402]; ?>"></td>
		      <td><input class="span1"  name="Data[2403]" type="text" value="<?php echo $Data[2403]; ?>"></td>
		      <td><input class="span1"  name="Data[2404]" type="text" value="<?php echo $Data[2404]; ?>"></td>
		      <td><input class="span1"  name="Data[2405]" type="text" value="<?php echo $Data[2405]; ?>"></td>
		      <td><input class="span1"  name="Data[2406]" type="text" value="<?php echo $Data[2406]; ?>"></td>
		      <td><input class="span1"  name="Data[2407]" type="text" value="<?php echo $Data[2407]; ?>"></td>
		      <td><input class="span1"  name="Data[2408]" type="text" value="<?php echo $Data[2408]; ?>"></td>
		      <td><input class="span1"  name="Data[2409]" type="text" value="<?php echo $Data[2409]; ?>"></td>
		      <td><input class="span1"  name="Data[2410]" type="text" value="<?php echo $Data[2410]; ?>"></td>
		      <td><input class="span1"  name="Data[2411]" type="text" value="<?php echo $Data[2411]; ?>"></td>
		      <td><input class="span1"  name="Data[2412]" type="text" value="<?php echo $Data[2412]; ?>"></td>
		      <td><input class="span1"  name="Data[2413]" type="text" value="<?php echo $Data[2413]; ?>"></td>
		      <td><input class="span1"  name="Data[2414]" type="text" value="<?php echo $Data[2414]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.3.8 แหล่งน้ำ (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.8 แหล่งน้ำ (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    		   
		    <tr>
		      <td class="al-left">- ระบบประปา</td>
		      <td><input class="span3"  name="Data[930]" type="text" value="<?php echo $Data[930]; ?>"></td>
		      <td><input class="span4"  name="Data[931]" type="text" value="<?php echo $Data[931]; ?>"></td>
		      <td><input class="span1"  name="Data[925]" type="text" value="<?php echo $Data[925]; ?>"></td>
		      <td><input class="span1"  name="Data[926]" type="text" value="<?php echo $Data[926]; ?>"></td>
		      <td><input class="span1"  name="Data[927]" type="text" value="<?php echo $Data[927]; ?>"></td>
		      <td><input class="span1"  name="Data[928]" type="text" value="<?php echo $Data[928]; ?>"></td>
		      <td><input class="span1"  name="Data[929]" type="text" value="<?php echo $Data[929]; ?>"></td>
		      <td><input class="span1"  name="Data[2415]" type="text" value="<?php echo $Data[2415]; ?>"></td>
		      <td><input class="span1"  name="Data[2416]" type="text" value="<?php echo $Data[2416]; ?>"></td>
		      <td><input class="span1"  name="Data[2417]" type="text" value="<?php echo $Data[2417]; ?>"></td>
		      <td><input class="span1"  name="Data[2418]" type="text" value="<?php echo $Data[2418]; ?>"></td>
		      <td><input class="span1"  name="Data[2419]" type="text" value="<?php echo $Data[2419]; ?>"></td>
		      <td><input class="span1"  name="Data[2420]" type="text" value="<?php echo $Data[2420]; ?>"></td>
		      <td><input class="span1"  name="Data[2421]" type="text" value="<?php echo $Data[2421]; ?>"></td>
		      <td><input class="span1"  name="Data[2422]" type="text" value="<?php echo $Data[2422]; ?>"></td>
		      <td><input class="span1"  name="Data[2423]" type="text" value="<?php echo $Data[2423]; ?>"></td>
		      <td><input class="span1"  name="Data[2424]" type="text" value="<?php echo $Data[2424]; ?>"></td>
		      <td><input class="span1"  name="Data[2425]" type="text" value="<?php echo $Data[2425]; ?>"></td>
		      <td><input class="span1"  name="Data[2426]" type="text" value="<?php echo $Data[2426]; ?>"></td>
		      <td><input class="span1"  name="Data[2427]" type="text" value="<?php echo $Data[2427]; ?>"></td>
		      <td><input class="span1"  name="Data[2428]" type="text" value="<?php echo $Data[2428]; ?>"></td>
		      <td><input class="span1"  name="Data[2429]" type="text" value="<?php echo $Data[2429]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- บ่อน้ำตื้น</td>
		      <td><input class="span3"  name="Data[937]" type="text" value="<?php echo $Data[937]; ?>"></td>
		      <td><input class="span4"  name="Data[938]" type="text" value="<?php echo $Data[938]; ?>"></td>
		      <td><input class="span1"  name="Data[932]" type="text" value="<?php echo $Data[932]; ?>"></td>
		      <td><input class="span1"  name="Data[933]" type="text" value="<?php echo $Data[933]; ?>"></td>
		      <td><input class="span1"  name="Data[934]" type="text" value="<?php echo $Data[934]; ?>"></td>
		      <td><input class="span1"  name="Data[935]" type="text" value="<?php echo $Data[935]; ?>"></td>
		      <td><input class="span1"  name="Data[936]" type="text" value="<?php echo $Data[936]; ?>"></td>
		      <td><input class="span1"  name="Data[2430]" type="text" value="<?php echo $Data[2430]; ?>"></td>
		      <td><input class="span1"  name="Data[2431]" type="text" value="<?php echo $Data[2431]; ?>"></td>
		      <td><input class="span1"  name="Data[2432]" type="text" value="<?php echo $Data[2432]; ?>"></td>
		      <td><input class="span1"  name="Data[2433]" type="text" value="<?php echo $Data[2433]; ?>"></td>
		      <td><input class="span1"  name="Data[2434]" type="text" value="<?php echo $Data[2434]; ?>"></td>
		      <td><input class="span1"  name="Data[2435]" type="text" value="<?php echo $Data[2435]; ?>"></td>
		      <td><input class="span1"  name="Data[2436]" type="text" value="<?php echo $Data[2436]; ?>"></td>
		      <td><input class="span1"  name="Data[2437]" type="text" value="<?php echo $Data[2437]; ?>"></td>
		      <td><input class="span1"  name="Data[2438]" type="text" value="<?php echo $Data[2438]; ?>"></td>
		      <td><input class="span1"  name="Data[2439]" type="text" value="<?php echo $Data[2439]; ?>"></td>
		      <td><input class="span1"  name="Data[2440]" type="text" value="<?php echo $Data[2440]; ?>"></td>
		      <td><input class="span1"  name="Data[2441]" type="text" value="<?php echo $Data[2441]; ?>"></td>
		      <td><input class="span1"  name="Data[2442]" type="text" value="<?php echo $Data[2442]; ?>"></td>
		      <td><input class="span1"  name="Data[2443]" type="text" value="<?php echo $Data[2443]; ?>"></td>
		      <td><input class="span1"  name="Data[2444]" type="text" value="<?php echo $Data[2444]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- บ่อบาดาล</td>
		      <td><input class="span3"  name="Data[944]" type="text" value="<?php echo $Data[944]; ?>"></td>
		      <td><input class="span4"  name="Data[945]" type="text" value="<?php echo $Data[945]; ?>"></td>
		      <td><input class="span1"  name="Data[939]" type="text" value="<?php echo $Data[939]; ?>"></td>
		      <td><input class="span1"  name="Data[940]" type="text" value="<?php echo $Data[940]; ?>"></td>
		      <td><input class="span1"  name="Data[941]" type="text" value="<?php echo $Data[941]; ?>"></td>
		      <td><input class="span1"  name="Data[942]" type="text" value="<?php echo $Data[942]; ?>"></td>
		      <td><input class="span1"  name="Data[943]" type="text" value="<?php echo $Data[943]; ?>"></td>
		      <td><input class="span1"  name="Data[2445]" type="text" value="<?php echo $Data[2445]; ?>"></td>
		      <td><input class="span1"  name="Data[2446]" type="text" value="<?php echo $Data[2446]; ?>"></td>
		      <td><input class="span1"  name="Data[2447]" type="text" value="<?php echo $Data[2447]; ?>"></td>
		      <td><input class="span1"  name="Data[2448]" type="text" value="<?php echo $Data[2448]; ?>"></td>
		      <td><input class="span1"  name="Data[2449]" type="text" value="<?php echo $Data[2449]; ?>"></td>
		    	<td><input class="span1"  name="Data[2450]" type="text" value="<?php echo $Data[2450]; ?>"></td>
		      <td><input class="span1"  name="Data[2451]" type="text" value="<?php echo $Data[2451]; ?>"></td>
		      <td><input class="span1"  name="Data[2452]" type="text" value="<?php echo $Data[2452]; ?>"></td>
		      <td><input class="span1"  name="Data[2453]" type="text" value="<?php echo $Data[2453]; ?>"></td>
		      <td><input class="span1"  name="Data[2454]" type="text" value="<?php echo $Data[2454]; ?>"></td>
		    	<td><input class="span1"  name="Data[2455]" type="text" value="<?php echo $Data[2455]; ?>"></td>
		      <td><input class="span1"  name="Data[2456]" type="text" value="<?php echo $Data[2456]; ?>"></td>
		      <td><input class="span1"  name="Data[2457]" type="text" value="<?php echo $Data[2457]; ?>"></td>
		      <td><input class="span1"  name="Data[2458]" type="text" value="<?php echo $Data[2458]; ?>"></td>
		      <td><input class="span1"  name="Data[2459]" type="text" value="<?php echo $Data[2459]; ?>"></td>
		    
		    </tr>
		    <tr>
		      <td class="al-left">- เขื่อน/ฝ้าย</td>
		      <td><input class="span3"  name="Data[951]" type="text" value="<?php echo $Data[951]; ?>"></td>
		      <td><input class="span4"  name="Data[952]" type="text" value="<?php echo $Data[952]; ?>"></td>
		      <td><input class="span1"  name="Data[946]" type="text" value="<?php echo $Data[946]; ?>"></td>
		      <td><input class="span1"  name="Data[947]" type="text" value="<?php echo $Data[947]; ?>"></td>
		      <td><input class="span1"  name="Data[948]" type="text" value="<?php echo $Data[948]; ?>"></td>
		      <td><input class="span1"  name="Data[949]" type="text" value="<?php echo $Data[949]; ?>"></td>
		      <td><input class="span1"  name="Data[950]" type="text" value="<?php echo $Data[950]; ?>"></td>
		      <td><input class="span1"  name="Data[2460]" type="text" value="<?php echo $Data[2460]; ?>"></td>
		      <td><input class="span1"  name="Data[2461]" type="text" value="<?php echo $Data[2461]; ?>"></td>
		      <td><input class="span1"  name="Data[2462]" type="text" value="<?php echo $Data[2462]; ?>"></td>
		      <td><input class="span1"  name="Data[2463]" type="text" value="<?php echo $Data[2463]; ?>"></td>
		      <td><input class="span1"  name="Data[2464]" type="text" value="<?php echo $Data[2464]; ?>"></td>
		      <td><input class="span1"  name="Data[2465]" type="text" value="<?php echo $Data[2465]; ?>"></td>
		      <td><input class="span1"  name="Data[2466]" type="text" value="<?php echo $Data[2466]; ?>"></td>
		      <td><input class="span1"  name="Data[2467]" type="text" value="<?php echo $Data[2467]; ?>"></td>
		      <td><input class="span1"  name="Data[2468]" type="text" value="<?php echo $Data[2468]; ?>"></td>
		      <td><input class="span1"  name="Data[2468]" type="text" value="<?php echo $Data[2469]; ?>"></td>
		      <td><input class="span1"  name="Data[2470]" type="text" value="<?php echo $Data[2470]; ?>"></td>
		      <td><input class="span1"  name="Data[2471]" type="text" value="<?php echo $Data[2471]; ?>"></td>
		      <td><input class="span1"  name="Data[2472]" type="text" value="<?php echo $Data[2472]; ?>"></td>
		      <td><input class="span1"  name="Data[2473]" type="text" value="<?php echo $Data[2473]; ?>"></td>
		      <td><input class="span1"  name="Data[2474]" type="text" value="<?php echo $Data[2474]; ?>"></td>

		    <tr>
		      <td class="al-left">- ห้วย/หนอง/คลอง/บึง</td>
		      <td><input class="span3"  name="Data[958]" type="text" value="<?php echo $Data[958]; ?>"></td>
		      <td><input class="span4"  name="Data[959]" type="text" value="<?php echo $Data[959]; ?>"></td>
		      <td><input class="span1"  name="Data[953]" type="text" value="<?php echo $Data[953]; ?>"></td>
		      <td><input class="span1"  name="Data[954]" type="text" value="<?php echo $Data[954]; ?>"></td>
		      <td><input class="span1"  name="Data[955]" type="text" value="<?php echo $Data[955]; ?>"></td>
		      <td><input class="span1"  name="Data[956]" type="text" value="<?php echo $Data[956]; ?>"></td>
		      <td><input class="span1"  name="Data[957]" type="text" value="<?php echo $Data[957]; ?>"></td>
		      <td><input class="span1"  name="Data[2475]" type="text" value="<?php echo $Data[2475]; ?>"></td>
		      <td><input class="span1"  name="Data[2476]" type="text" value="<?php echo $Data[2476]; ?>"></td>
		      <td><input class="span1"  name="Data[2477]" type="text" value="<?php echo $Data[2477]; ?>"></td>
		      <td><input class="span1"  name="Data[2478]" type="text" value="<?php echo $Data[2478]; ?>"></td>
		      <td><input class="span1"  name="Data[2479]" type="text" value="<?php echo $Data[2479]; ?>"></td>
		      <td><input class="span1"  name="Data[2480]" type="text" value="<?php echo $Data[2480]; ?>"></td>
		      <td><input class="span1"  name="Data[2481]" type="text" value="<?php echo $Data[2481]; ?>"></td>
		      <td><input class="span1"  name="Data[2482]" type="text" value="<?php echo $Data[2482]; ?>"></td>
		      <td><input class="span1"  name="Data[2483]" type="text" value="<?php echo $Data[2483]; ?>"></td>
		      <td><input class="span1"  name="Data[2484]" type="text" value="<?php echo $Data[2484]; ?>"></td>
		      <td><input class="span1"  name="Data[2485]" type="text" value="<?php echo $Data[2485]; ?>"></td>
		      <td><input class="span1"  name="Data[2486]" type="text" value="<?php echo $Data[2486]; ?>"></td>
		      <td><input class="span1"  name="Data[2487]" type="text" value="<?php echo $Data[2487]; ?>"></td>
		      <td><input class="span1"  name="Data[2488]" type="text" value="<?php echo $Data[2488]; ?>"></td>
		      <td><input class="span1"  name="Data[2489]" type="text" value="<?php echo $Data[2489]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ <input class="span3"  name="Data[960]" type="text" value="<?php echo $Data[960]; ?>"></td>
		      <td><input class="span3"  name="Data[966]" type="text" value="<?php echo $Data[966]; ?>"></td>
		      <td><input class="span4"  name="Data[967]" type="text" value="<?php echo $Data[967]; ?>"></td>
		      <td><input class="span1"  name="Data[961]" type="text" value="<?php echo $Data[961]; ?>"></td>
		      <td><input class="span1"  name="Data[962]" type="text" value="<?php echo $Data[962]; ?>"></td>
		      <td><input class="span1"  name="Data[963]" type="text" value="<?php echo $Data[963]; ?>"></td>
		      <td><input class="span1"  name="Data[964]" type="text" value="<?php echo $Data[964]; ?>"></td>
		      <td><input class="span1"  name="Data[965]" type="text" value="<?php echo $Data[965]; ?>"></td>
		      <td><input class="span1"  name="Data[2490]" type="text" value="<?php echo $Data[2490]; ?>"></td>
		      <td><input class="span1"  name="Data[2491]" type="text" value="<?php echo $Data[2491]; ?>"></td>
		      <td><input class="span1"  name="Data[2492]" type="text" value="<?php echo $Data[2492]; ?>"></td>
		      <td><input class="span1"  name="Data[2493]" type="text" value="<?php echo $Data[2493]; ?>"></td>
		      <td><input class="span1"  name="Data[2494]" type="text" value="<?php echo $Data[2494]; ?>"></td>
		      <td><input class="span1"  name="Data[2495]" type="text" value="<?php echo $Data[2495]; ?>"></td>
		      <td><input class="span1"  name="Data[2496]" type="text" value="<?php echo $Data[2496]; ?>"></td>
		      <td><input class="span1"  name="Data[2497]" type="text" value="<?php echo $Data[2497]; ?>"></td>
		      <td><input class="span1"  name="Data[2498]" type="text" value="<?php echo $Data[2498]; ?>"></td>
		      <td><input class="span1"  name="Data[2499]" type="text" value="<?php echo $Data[2499]; ?>"></td>
		      <td><input class="span1"  name="Data[2500]" type="text" value="<?php echo $Data[2500]; ?>"></td>
		      <td><input class="span1"  name="Data[2501]" type="text" value="<?php echo $Data[2501]; ?>"></td>
		      <td><input class="span1"  name="Data[2502]" type="text" value="<?php echo $Data[2502]; ?>"></td>
		      <td><input class="span1"  name="Data[2503]" type="text" value="<?php echo $Data[2503]; ?>"></td>
		      <td><input class="span1"  name="Data[2504]" type="text" value="<?php echo $Data[2504]; ?>"></td>

		    </tr>	    
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.3.9 ปัญหาขยะ/น้ำเน่าเสีย/มลพิษ</h4></th>
		    </tr>
-->

		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.9 ปัญหาขยะ/น้ำเน่าเสีย/มลพิษ</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    		   
		    <tr>
		      <td class="al-left">- ปัญหาขยะ</td>
		      <td><input class="span3"  name="Data[973]" type="text" value="<?php echo $Data[973]; ?>"></td>
		      <td><input class="span4"  name="Data[974]" type="text" value="<?php echo $Data[974]; ?>"></td>		
		      <td><input type="checkbox" name="Data[968]" value="ปัญหาขยะ" <?php if ($Data[968] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[969]" value="ปัญหาขยะ" <?php if ($Data[969] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[970]" value="ปัญหาขยะ" <?php if ($Data[970] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[971]" value="ปัญหาขยะ" <?php if ($Data[971] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[972]" value="ปัญหาขยะ" <?php if ($Data[972] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2505]" value="ปัญหาขยะ" <?php if ($Data[2505] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2506]" value="ปัญหาขยะ" <?php if ($Data[2506] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2507]" value="ปัญหาขยะ" <?php if ($Data[2507] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2508]" value="ปัญหาขยะ" <?php if ($Data[2508] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2509]" value="ปัญหาขยะ" <?php if ($Data[2509] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2510]" value="ปัญหาขยะ" <?php if ($Data[2510] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2511]" value="ปัญหาขยะ" <?php if ($Data[2511] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2512]" value="ปัญหาขยะ" <?php if ($Data[2512] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2513]" value="ปัญหาขยะ" <?php if ($Data[2513] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2514]" value="ปัญหาขยะ" <?php if ($Data[2514] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2515]" value="ปัญหาขยะ" <?php if ($Data[2515] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2516]" value="ปัญหาขยะ" <?php if ($Data[2516] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2517]" value="ปัญหาขยะ" <?php if ($Data[2517] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2518]" value="ปัญหาขยะ" <?php if ($Data[2518] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2519]" value="ปัญหาขยะ" <?php if ($Data[2519] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- น้ำเน่าเสีย</td>
		      <td><input class="span3"  name="Data[980]" type="text" value="<?php echo $Data[980]; ?>"></td>
		      <td><input class="span4"  name="Data[981]" type="text" value="<?php echo $Data[981]; ?>"></td>
		      <td><input type="checkbox" name="Data[975]" value="น้ำเน่าเสีย" <?php if ($Data[975] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[976]" value="น้ำเน่าเสีย" <?php if ($Data[976] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[977]" value="น้ำเน่าเสีย" <?php if ($Data[977] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[978]" value="น้ำเน่าเสีย" <?php if ($Data[978] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[979]" value="น้ำเน่าเสีย" <?php if ($Data[979] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	        <td><input type="checkbox" name="Data[2520]" value="น้ำเน่าเสีย" <?php if ($Data[2520] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2521]" value="น้ำเน่าเสีย" <?php if ($Data[2521] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2522]" value="น้ำเน่าเสีย" <?php if ($Data[2522] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2523]" value="น้ำเน่าเสีย" <?php if ($Data[2523] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2524]" value="น้ำเน่าเสีย" <?php if ($Data[2524] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	        <td><input type="checkbox" name="Data[2525]" value="น้ำเน่าเสีย" <?php if ($Data[2525] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2526]" value="น้ำเน่าเสีย" <?php if ($Data[2526] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2527]" value="น้ำเน่าเสีย" <?php if ($Data[2527] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2528]" value="น้ำเน่าเสีย" <?php if ($Data[2528] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2529]" value="น้ำเน่าเสีย" <?php if ($Data[2529] == 'value'): ?> checked="checked" <?php endif; ?>></td>
	        <td><input type="checkbox" name="Data[2530]" value="น้ำเน่าเสีย" <?php if ($Data[2530] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2531]" value="น้ำเน่าเสีย" <?php if ($Data[2531] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2532]" value="น้ำเน่าเสีย" <?php if ($Data[2532] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2533]" value="น้ำเน่าเสีย" <?php if ($Data[2533] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2534]" value="น้ำเน่าเสีย" <?php if ($Data[2534] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- มลพิษอื่น ๆ ระบุ <input class="span3"  name="Data[982]" type="text" value="<?php echo $Data[982]; ?>"></td>
		      <td><input class="span3"  name="Data[988]" type="text" value="<?php echo $Data[988]; ?>"></td>
		      <td><input class="span4"  name="Data[989]" type="text" value="<?php echo $Data[989]; ?>"></td>
		      <td><input type="checkbox" name="Data[983]" value="มลพิษอื่น ๆ" <?php if ($Data[983] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[984]" value="มลพิษอื่น ๆ" <?php if ($Data[984] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[985]" value="มลพิษอื่น ๆ" <?php if ($Data[985] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[986]" value="มลพิษอื่น ๆ" <?php if ($Data[986] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[987]" value="มลพิษอื่น ๆ" <?php if ($Data[987] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2535]" value="มลพิษอื่น ๆ" <?php if ($Data[2535] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2536]" value="มลพิษอื่น ๆ" <?php if ($Data[2536] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2537]" value="มลพิษอื่น ๆ" <?php if ($Data[2537] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2538]" value="มลพิษอื่น ๆ" <?php if ($Data[2538] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2539]" value="มลพิษอื่น ๆ" <?php if ($Data[2539] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2540]" value="มลพิษอื่น ๆ" <?php if ($Data[2540] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2541]" value="มลพิษอื่น ๆ" <?php if ($Data[2541] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2542]" value="มลพิษอื่น ๆ" <?php if ($Data[2542] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2543]" value="มลพิษอื่น ๆ" <?php if ($Data[2543] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2544]" value="มลพิษอื่น ๆ" <?php if ($Data[2544] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2545]" value="มลพิษอื่น ๆ" <?php if ($Data[2545] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2546]" value="มลพิษอื่น ๆ" <?php if ($Data[2546] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2547]" value="มลพิษอื่น ๆ" <?php if ($Data[2547] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2548]" value="มลพิษอื่น ๆ" <?php if ($Data[2548] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[2549]" value="มลพิษอื่น ๆ" <?php if ($Data[2549] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.3.10 ความรุนแรงด้านปัญหาสภาพแวดล้อมในชุมชน (1 น้อยที่สุด - 5 มากที่สุด)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		 

		    		   
		    <tr>
		      <td class="al-left">1) อาคาร ถาวรวัตถุเส้นทางเสียหายเล็กน้อย ไม่มีปัญหาแหล่งน้ำและมลพิษ</td>
		      <td><input type="radio" value="1" name="Webform[filter2]" <?php if ($Webform['filter2'] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td rowspan="5"><textarea name="Data[1768]" row="8"><?php echo $Data[1768]; ?></textarea></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="1" name="Data[1736]" <?php if ($Data[1736] == '1'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>			    

		    <tr>
		      <td class="al-left">2) อาคารถาวรวัตถุ เส้นทาง แหล่งท่องเที่ยวเสียหายไม่มีปัญหาแหล่งน้ำและมลพิษ</td>
		      <td><input type="radio" value="2" name="Webform[filter2]" <?php if ($Webform['filter2'] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="2" name="Data[1736]" <?php if ($Data[1736] == '2'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>		

		    <tr>
		      <td class="al-left">3) อาคาร ถาวรวัตถุเส้นทาง แหล่งท่องเที่ยวเสียหายมีปัญหาแหล่งน้ำต้องการสนับสนุนบางส่วน</td>
		      <td><input type="radio" value="3" name="Webform[filter2]" <?php if ($Webform['filter2'] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="3" name="Data[1736]" <?php if ($Data[1736] == '3'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>		

		    <tr>
		      <td class="al-left">4) อาคาร ถาวรวัตถุเส้นทาง แหล่งท่องเที่ยวเสียหายทั้งหมดมีปัญหาแหล่งน้ำและมลพิษต้องการสนับสนุน</td>
		      <td><input type="radio" value="4" name="Webform[filter2]" <?php if ($Webform['filter2'] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="4" name="Data[1736]" <?php if ($Data[1736] == '4'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>		
		    
		    <tr>
		      <td class="al-left">5) อาคาร ถาวรวัตถุ เส้นทาง แหล่งท่องเที่ยวเสียหายทั้งหมด มีปัญหาแหล่งน้ำและมลพิษรุนแรงต้องการสนับสนุนเร่งด่วน</td>
		      <td><input type="radio" value="5" name="Webform[filter2]" <?php if ($Webform['filter2'] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
					<td><input type="radio" value="5" name="Data[1736]" <?php if ($Data[1736] == '5'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>		

<!--
		    <tr>
		      <th colspan="8" class="table-lv1"><h3>3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3></th>
		    </tr>
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.1 พื้นที่การเกษตรเสียหาย (ระบุจำนวนไร่)</h4></th>
		    </tr>
-->
		    <tr class="table-lv1">
		      <td class="h-line bgheadlv1"><h3 class="h-line">3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3></td>
		      <td class="bgheadlv1"></td>
		      <td class="bgheadlv1"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		    
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.1 พื้นที่การเกษตรเสียหาย (ระบุจำนวนไร่)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		   
		    <tr>
		      <td class="al-left">- นาข้าว</td>
		      <td><input class="span3"  name="Data[83]" type="text" value="<?php echo $Data[83]; ?>"></td>
		      <td><input class="span4"  name="Data[84]" type="text" value="<?php echo $Data[84]; ?>"></td>
		      <td><input class="span1"  name="Data[54]" type="text" value="<?php echo $Data[54]; ?>"></td>
		      <td><input class="span1"  name="Data[55]" type="text" value="<?php echo $Data[55]; ?>"></td>
		      <td><input class="span1"  name="Data[56]" type="text" value="<?php echo $Data[56]; ?>"></td>
		      <td><input class="span1"  name="Data[57]" type="text" value="<?php echo $Data[57]; ?>"></td>
		      <td><input class="span1"  name="Data[58]" type="text" value="<?php echo $Data[58]; ?>"></td>
		      <td><input class="span1"  name="Data[2550]" type="text" value="<?php echo $Data[2550]; ?>"></td>
		      <td><input class="span1"  name="Data[2551]" type="text" value="<?php echo $Data[2551]; ?>"></td>
		      <td><input class="span1"  name="Data[2552]" type="text" value="<?php echo $Data[2552]; ?>"></td>
		      <td><input class="span1"  name="Data[2553]" type="text" value="<?php echo $Data[2553]; ?>"></td>
		      <td><input class="span1"  name="Data[2554]" type="text" value="<?php echo $Data[2554]; ?>"></td>
		      <td><input class="span1"  name="Data[2555]" type="text" value="<?php echo $Data[2555]; ?>"></td>
		      <td><input class="span1"  name="Data[2556]" type="text" value="<?php echo $Data[2556]; ?>"></td>
		      <td><input class="span1"  name="Data[2557]" type="text" value="<?php echo $Data[2557]; ?>"></td>
		      <td><input class="span1"  name="Data[2558]" type="text" value="<?php echo $Data[2558]; ?>"></td>
		      <td><input class="span1"  name="Data[2559]" type="text" value="<?php echo $Data[2559]; ?>"></td>
		      <td><input class="span1"  name="Data[2560]" type="text" value="<?php echo $Data[2560]; ?>"></td>
		      <td><input class="span1"  name="Data[2561]" type="text" value="<?php echo $Data[2561]; ?>"></td>
		      <td><input class="span1"  name="Data[2562]" type="text" value="<?php echo $Data[2562]; ?>"></td>
		      <td><input class="span1"  name="Data[2563]" type="text" value="<?php echo $Data[2563]; ?>"></td>
		      <td><input class="span1"  name="Data[2564]" type="text" value="<?php echo $Data[2564]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- พืชสวน</td>
		      <td><input class="span3"  name="Data[90]" type="text" value="<?php echo $Data[90]; ?>"></td>
		      <td><input class="span4"  name="Data[91]" type="text" value="<?php echo $Data[91]; ?>"></td>
		      <td><input class="span1"  name="Data[85]" type="text" value="<?php echo $Data[85]; ?>"></td>
		      <td><input class="span1"  name="Data[86]" type="text" value="<?php echo $Data[86]; ?>"></td>
		      <td><input class="span1"  name="Data[87]" type="text" value="<?php echo $Data[87]; ?>"></td>
		      <td><input class="span1"  name="Data[88]" type="text" value="<?php echo $Data[88]; ?>"></td>
		      <td><input class="span1"  name="Data[89]" type="text" value="<?php echo $Data[89]; ?>"></td>
		      <td><input class="span1"  name="Data[2565]" type="text" value="<?php echo $Data[2565]; ?>"></td>
		      <td><input class="span1"  name="Data[2566]" type="text" value="<?php echo $Data[2566]; ?>"></td>
		      <td><input class="span1"  name="Data[2567]" type="text" value="<?php echo $Data[2567]; ?>"></td>
		      <td><input class="span1"  name="Data[2568]" type="text" value="<?php echo $Data[2568]; ?>"></td>
		      <td><input class="span1"  name="Data[2569]" type="text" value="<?php echo $Data[2569]; ?>"></td>
		      <td><input class="span1"  name="Data[2570]" type="text" value="<?php echo $Data[2570]; ?>"></td>
		      <td><input class="span1"  name="Data[2571]" type="text" value="<?php echo $Data[2571]; ?>"></td>
		      <td><input class="span1"  name="Data[2572]" type="text" value="<?php echo $Data[2572]; ?>"></td>
		      <td><input class="span1"  name="Data[2573]" type="text" value="<?php echo $Data[2573]; ?>"></td>
		      <td><input class="span1"  name="Data[2574]" type="text" value="<?php echo $Data[2574]; ?>"></td>
		      <td><input class="span1"  name="Data[2575]" type="text" value="<?php echo $Data[2575]; ?>"></td>
		      <td><input class="span1"  name="Data[2576]" type="text" value="<?php echo $Data[2576]; ?>"></td>
		      <td><input class="span1"  name="Data[2577]" type="text" value="<?php echo $Data[2577]; ?>"></td>
		      <td><input class="span1"  name="Data[2578]" type="text" value="<?php echo $Data[2578]; ?>"></td>
		      <td><input class="span1"  name="Data[2579]" type="text" value="<?php echo $Data[2579]; ?>"></td>

		    </tr>	    		    	    
		    <tr>
		      <td class="al-left">-พืชไร่</td>
		      <td><input class="span3"  name="Data[97]" type="text" value="<?php echo $Data[97]; ?>"></td>
		      <td><input class="span4"  name="Data[98]" type="text" value="<?php echo $Data[98]; ?>"></td>
		      <td><input class="span1"  name="Data[92]" type="text" value="<?php echo $Data[92]; ?>"></td>
		      <td><input class="span1"  name="Data[93]" type="text" value="<?php echo $Data[93]; ?>"></td>
		      <td><input class="span1"  name="Data[94]" type="text" value="<?php echo $Data[94]; ?>"></td>
		      <td><input class="span1"  name="Data[95]" type="text" value="<?php echo $Data[95]; ?>"></td>
		      <td><input class="span1"  name="Data[96]" type="text" value="<?php echo $Data[96]; ?>"></td>
		      <td><input class="span1"  name="Data[2580]" type="text" value="<?php echo $Data[2580]; ?>"></td>
		      <td><input class="span1"  name="Data[2581]" type="text" value="<?php echo $Data[2581]; ?>"></td>
		      <td><input class="span1"  name="Data[2582]" type="text" value="<?php echo $Data[2582]; ?>"></td>
		      <td><input class="span1"  name="Data[2583]" type="text" value="<?php echo $Data[2583]; ?>"></td>
		      <td><input class="span1"  name="Data[2584]" type="text" value="<?php echo $Data[2584]; ?>"></td>
		      <td><input class="span1"  name="Data[2585]" type="text" value="<?php echo $Data[2585]; ?>"></td>
		      <td><input class="span1"  name="Data[2586]" type="text" value="<?php echo $Data[2586]; ?>"></td>
		      <td><input class="span1"  name="Data[2587]" type="text" value="<?php echo $Data[2587]; ?>"></td>
		      <td><input class="span1"  name="Data[2588]" type="text" value="<?php echo $Data[2588]; ?>"></td>
		      <td><input class="span1"  name="Data[2589]" type="text" value="<?php echo $Data[2589]; ?>"></td>
		      <td><input class="span1"  name="Data[2590]" type="text" value="<?php echo $Data[2590]; ?>"></td>
		      <td><input class="span1"  name="Data[2591]" type="text" value="<?php echo $Data[2591]; ?>"></td>
		      <td><input class="span1"  name="Data[2592]" type="text" value="<?php echo $Data[2592]; ?>"></td>
		      <td><input class="span1"  name="Data[2593]" type="text" value="<?php echo $Data[2593]; ?>"></td>
		      <td><input class="span1"  name="Data[2594]" type="text" value="<?php echo $Data[2594]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ <input class="span3"  name="Data[99]" type="text" value="<?php echo $Data[99]; ?>"></td>
		      <td><input class="span3"  name="Data[105]" type="text" value="<?php echo $Data[105]; ?>"></td>
		      <td><input class="span4"  name="Data[106]" type="text" value="<?php echo $Data[106]; ?>"></td>
		      <td><input class="span1"  name="Data[100]" type="text" value="<?php echo $Data[100]; ?>"></td>
		      <td><input class="span1"  name="Data[101]" type="text" value="<?php echo $Data[101]; ?>"></td>
		      <td><input class="span1"  name="Data[102]" type="text" value="<?php echo $Data[102]; ?>"></td>
		      <td><input class="span1"  name="Data[103]" type="text" value="<?php echo $Data[103]; ?>"></td>
		      <td><input class="span1"  name="Data[104]" type="text" value="<?php echo $Data[104]; ?>"></td>
		      <td><input class="span1"  name="Data[2595]" type="text" value="<?php echo $Data[2595]; ?>"></td>
		      <td><input class="span1"  name="Data[2596]" type="text" value="<?php echo $Data[2596]; ?>"></td>
		      <td><input class="span1"  name="Data[2597]" type="text" value="<?php echo $Data[2597]; ?>"></td>
		      <td><input class="span1"  name="Data[2598]" type="text" value="<?php echo $Data[2598]; ?>"></td>
		      <td><input class="span1"  name="Data[2599]" type="text" value="<?php echo $Data[2599]; ?>"></td>
		      <td><input class="span1"  name="Data[2600]" type="text" value="<?php echo $Data[2600]; ?>"></td>
		      <td><input class="span1"  name="Data[2601]" type="text" value="<?php echo $Data[2601]; ?>"></td>
		      <td><input class="span1"  name="Data[2602]" type="text" value="<?php echo $Data[2602]; ?>"></td>
		      <td><input class="span1"  name="Data[2603]" type="text" value="<?php echo $Data[2603]; ?>"></td>
		      <td><input class="span1"  name="Data[2604]" type="text" value="<?php echo $Data[2604]; ?>"></td>
		      <td><input class="span1"  name="Data[2605]" type="text" value="<?php echo $Data[2605]; ?>"></td>
		      <td><input class="span1"  name="Data[2606]" type="text" value="<?php echo $Data[2606]; ?>"></td>
		      <td><input class="span1"  name="Data[2607]" type="text" value="<?php echo $Data[2607]; ?>"></td>
		      <td><input class="span1"  name="Data[2608]" type="text" value="<?php echo $Data[2608]; ?>"></td>
		      <td><input class="span1"  name="Data[2609]" type="text" value="<?php echo $Data[2609]; ?>"></td>

		    </tr>	
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.3 สัตว์เลี้ยง (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.3 สัตว์เลี้ยง (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		   
	      <tr>
		      <td class="al-left">- หมู</td>
		      <td><input class="span3"  name="Data[120]" type="text" value="<?php echo $Data[120]; ?>"></td>
		      <td><input class="span4"  name="Data[121]" type="text" value="<?php echo $Data[121]; ?>"></td>
		      <td><input class="span1"  name="Data[115]" type="text" value="<?php echo $Data[115]; ?>"></td>
		      <td><input class="span1"  name="Data[116]" type="text" value="<?php echo $Data[116]; ?>"></td>
		      <td><input class="span1"  name="Data[117]" type="text" value="<?php echo $Data[117]; ?>"></td>
		      <td><input class="span1"  name="Data[118]" type="text" value="<?php echo $Data[118]; ?>"></td>
		      <td><input class="span1"  name="Data[119]" type="text" value="<?php echo $Data[119]; ?>"></td>
		      <td><input class="span1"  name="Data[2625]" type="text" value="<?php echo $Data[2625]; ?>"></td>
		      <td><input class="span1"  name="Data[2626]" type="text" value="<?php echo $Data[2626]; ?>"></td>
		      <td><input class="span1"  name="Data[2627]" type="text" value="<?php echo $Data[2627]; ?>"></td>
		      <td><input class="span1"  name="Data[2628]" type="text" value="<?php echo $Data[2628]; ?>"></td>
		      <td><input class="span1"  name="Data[2629]" type="text" value="<?php echo $Data[2629]; ?>"></td>
		      <td><input class="span1"  name="Data[2630]" type="text" value="<?php echo $Data[2630]; ?>"></td>
		      <td><input class="span1"  name="Data[2631]" type="text" value="<?php echo $Data[2631]; ?>"></td>
		      <td><input class="span1"  name="Data[2632]" type="text" value="<?php echo $Data[2632]; ?>"></td>
		      <td><input class="span1"  name="Data[2633]" type="text" value="<?php echo $Data[2633]; ?>"></td>
		      <td><input class="span1"  name="Data[2634]" type="text" value="<?php echo $Data[2634]; ?>"></td>
		      <td><input class="span1"  name="Data[2635]" type="text" value="<?php echo $Data[2635]; ?>"></td>
		      <td><input class="span1"  name="Data[2636]" type="text" value="<?php echo $Data[2636]; ?>"></td>
		      <td><input class="span1"  name="Data[2637]" type="text" value="<?php echo $Data[2637]; ?>"></td>
		      <td><input class="span1"  name="Data[2638]" type="text" value="<?php echo $Data[2638]; ?>"></td>
		      <td><input class="span1"  name="Data[2639]" type="text" value="<?php echo $Data[2639]; ?>"></td>

		    </tr>
	      <tr>
		      <td class="al-left">- วัว/ควาย</td>
		      <td><input class="span3"  name="Data[127]" type="text" value="<?php echo $Data[127]; ?>"></td>
		      <td><input class="span4"  name="Data[128]" type="text" value="<?php echo $Data[128]; ?>"></td>
		      <td><input class="span1"  name="Data[122]" type="text" value="<?php echo $Data[122]; ?>"></td>
		      <td><input class="span1"  name="Data[123]" type="text" value="<?php echo $Data[123]; ?>"></td>
		      <td><input class="span1"  name="Data[124]" type="text" value="<?php echo $Data[124]; ?>"></td>
		      <td><input class="span1"  name="Data[125]" type="text" value="<?php echo $Data[125]; ?>"></td>
		      <td><input class="span1"  name="Data[126]" type="text" value="<?php echo $Data[126]; ?>"></td>
		      <td><input class="span1"  name="Data[2640]" type="text" value="<?php echo $Data[2640]; ?>"></td>
		      <td><input class="span1"  name="Data[2641]" type="text" value="<?php echo $Data[2641]; ?>"></td>
		      <td><input class="span1"  name="Data[2642]" type="text" value="<?php echo $Data[2642]; ?>"></td>
		      <td><input class="span1"  name="Data[2643]" type="text" value="<?php echo $Data[2643]; ?>"></td>
		      <td><input class="span1"  name="Data[2644]" type="text" value="<?php echo $Data[2644]; ?>"></td>
		      <td><input class="span1"  name="Data[2645]" type="text" value="<?php echo $Data[2645]; ?>"></td>
		      <td><input class="span1"  name="Data[2646]" type="text" value="<?php echo $Data[2646]; ?>"></td>
		      <td><input class="span1"  name="Data[2647]" type="text" value="<?php echo $Data[2647]; ?>"></td>
		      <td><input class="span1"  name="Data[2648]" type="text" value="<?php echo $Data[2648]; ?>"></td>
		      <td><input class="span1"  name="Data[2649]" type="text" value="<?php echo $Data[2649]; ?>"></td>
		      <td><input class="span1"  name="Data[2650]" type="text" value="<?php echo $Data[2650]; ?>"></td>
		      <td><input class="span1"  name="Data[2651]" type="text" value="<?php echo $Data[2651]; ?>"></td>
		      <td><input class="span1"  name="Data[2652]" type="text" value="<?php echo $Data[2652]; ?>"></td>
		      <td><input class="span1"  name="Data[2653]" type="text" value="<?php echo $Data[2653]; ?>"></td>
		      <td><input class="span1"  name="Data[2654]" type="text" value="<?php echo $Data[2654]; ?>"></td>

		    </tr>
	      <tr>
		      <td class="al-left">- เป็ด</td>
		      <td><input class="span3"  name="Data[134]" type="text" value="<?php echo $Data[134]; ?>"></td>
		      <td><input class="span4"  name="Data[135]" type="text" value="<?php echo $Data[135]; ?>"></td>
		      <td><input class="span1"  name="Data[129]" type="text" value="<?php echo $Data[129]; ?>"></td>
		      <td><input class="span1"  name="Data[130]" type="text" value="<?php echo $Data[130]; ?>"></td>
		      <td><input class="span1"  name="Data[131]" type="text" value="<?php echo $Data[131]; ?>"></td>
		      <td><input class="span1"  name="Data[132]" type="text" value="<?php echo $Data[132]; ?>"></td>
		      <td><input class="span1"  name="Data[133]" type="text" value="<?php echo $Data[133]; ?>"></td>
		      <td><input class="span1"  name="Data[2655]" type="text" value="<?php echo $Data[2655]; ?>"></td>
		      <td><input class="span1"  name="Data[2656]" type="text" value="<?php echo $Data[2656]; ?>"></td>
		      <td><input class="span1"  name="Data[2657]" type="text" value="<?php echo $Data[2657]; ?>"></td>
		      <td><input class="span1"  name="Data[2658]" type="text" value="<?php echo $Data[2658]; ?>"></td>
		      <td><input class="span1"  name="Data[2659]" type="text" value="<?php echo $Data[2659]; ?>"></td>
		      <td><input class="span1"  name="Data[2660]" type="text" value="<?php echo $Data[2660]; ?>"></td>
		      <td><input class="span1"  name="Data[2661]" type="text" value="<?php echo $Data[2661]; ?>"></td>
		      <td><input class="span1"  name="Data[2662]" type="text" value="<?php echo $Data[2662]; ?>"></td>
		      <td><input class="span1"  name="Data[2663]" type="text" value="<?php echo $Data[2663]; ?>"></td>
		      <td><input class="span1"  name="Data[2664]" type="text" value="<?php echo $Data[2664]; ?>"></td>
		      <td><input class="span1"  name="Data[2665]" type="text" value="<?php echo $Data[2665]; ?>"></td>
		      <td><input class="span1"  name="Data[2666]" type="text" value="<?php echo $Data[2666]; ?>"></td>
		      <td><input class="span1"  name="Data[2667]" type="text" value="<?php echo $Data[2667]; ?>"></td>
		      <td><input class="span1"  name="Data[2668]" type="text" value="<?php echo $Data[2668]; ?>"></td>
		      <td><input class="span1"  name="Data[2669]" type="text" value="<?php echo $Data[2669]; ?>"></td>

		    </tr>
	      <tr>
		      <td class="al-left">- ไก่</td>
		      <td><input class="span3"  name="Data[141]" type="text" value="<?php echo $Data[141]; ?>"></td>
		      <td><input class="span4"  name="Data[142]" type="text" value="<?php echo $Data[142]; ?>"></td>
		      <td><input class="span1"  name="Data[136]" type="text" value="<?php echo $Data[136]; ?>"></td>
		      <td><input class="span1"  name="Data[137]" type="text" value="<?php echo $Data[137]; ?>"></td>
		      <td><input class="span1"  name="Data[138]" type="text" value="<?php echo $Data[138]; ?>"></td>
		      <td><input class="span1"  name="Data[139]" type="text" value="<?php echo $Data[139]; ?>"></td>
		      <td><input class="span1"  name="Data[140]" type="text" value="<?php echo $Data[140]; ?>"></td>
		      <td><input class="span1"  name="Data[2670]" type="text" value="<?php echo $Data[2670]; ?>"></td>
		      <td><input class="span1"  name="Data[2671]" type="text" value="<?php echo $Data[2671]; ?>"></td>
		      <td><input class="span1"  name="Data[2672]" type="text" value="<?php echo $Data[2672]; ?>"></td>
		      <td><input class="span1"  name="Data[2673]" type="text" value="<?php echo $Data[2673]; ?>"></td>
		      <td><input class="span1"  name="Data[2674]" type="text" value="<?php echo $Data[2674]; ?>"></td>
		      <td><input class="span1"  name="Data[2675]" type="text" value="<?php echo $Data[2675]; ?>"></td>
		      <td><input class="span1"  name="Data[2676]" type="text" value="<?php echo $Data[2676]; ?>"></td>
		      <td><input class="span1"  name="Data[2677]" type="text" value="<?php echo $Data[2677]; ?>"></td>
		      <td><input class="span1"  name="Data[2678]" type="text" value="<?php echo $Data[2678]; ?>"></td>
		      <td><input class="span1"  name="Data[2679]" type="text" value="<?php echo $Data[2679]; ?>"></td>
		      <td><input class="span1"  name="Data[2680]" type="text" value="<?php echo $Data[2680]; ?>"></td>
		      <td><input class="span1"  name="Data[2681]" type="text" value="<?php echo $Data[2681]; ?>"></td>
		      <td><input class="span1"  name="Data[2682]" type="text" value="<?php echo $Data[2682]; ?>"></td>
		      <td><input class="span1"  name="Data[2683]" type="text" value="<?php echo $Data[2683]; ?>"></td>
		      <td><input class="span1"  name="Data[2684]" type="text" value="<?php echo $Data[2684]; ?>"></td>

		    </tr>
	      <tr>
		      <td class="al-left">- แพะ</td>
		      <td><input class="span3"  name="Data[148]" type="text" value="<?php echo $Data[148]; ?>"></td>
		      <td><input class="span4"  name="Data[150]" type="text" value="<?php echo $Data[150]; ?>"></td>
		      <td><input class="span1"  name="Data[143]" type="text" value="<?php echo $Data[143]; ?>"></td>
		      <td><input class="span1"  name="Data[144]" type="text" value="<?php echo $Data[144]; ?>"></td>
		      <td><input class="span1"  name="Data[145]" type="text" value="<?php echo $Data[145]; ?>"></td>
		      <td><input class="span1"  name="Data[146]" type="text" value="<?php echo $Data[146]; ?>"></td>
		      <td><input class="span1"  name="Data[147]" type="text" value="<?php echo $Data[147]; ?>"></td>
		      <td><input class="span1"  name="Data[2685]" type="text" value="<?php echo $Data[2685]; ?>"></td>
		      <td><input class="span1"  name="Data[2686]" type="text" value="<?php echo $Data[2686]; ?>"></td>
		      <td><input class="span1"  name="Data[2687]" type="text" value="<?php echo $Data[2687]; ?>"></td>
		      <td><input class="span1"  name="Data[2688]" type="text" value="<?php echo $Data[2688]; ?>"></td>
		      <td><input class="span1"  name="Data[2689]" type="text" value="<?php echo $Data[2689]; ?>"></td>
		      <td><input class="span1"  name="Data[2690]" type="text" value="<?php echo $Data[2690]; ?>"></td>
		      <td><input class="span1"  name="Data[2691]" type="text" value="<?php echo $Data[2691]; ?>"></td>
		      <td><input class="span1"  name="Data[2692]" type="text" value="<?php echo $Data[2692]; ?>"></td>
		      <td><input class="span1"  name="Data[2693]" type="text" value="<?php echo $Data[2693]; ?>"></td>
		      <td><input class="span1"  name="Data[2694]" type="text" value="<?php echo $Data[2694]; ?>"></td>
		      <td><input class="span1"  name="Data[2695]" type="text" value="<?php echo $Data[2695]; ?>"></td>
		      <td><input class="span1"  name="Data[2696]" type="text" value="<?php echo $Data[2696]; ?>"></td>
		      <td><input class="span1"  name="Data[2697]" type="text" value="<?php echo $Data[2697]; ?>"></td>
		      <td><input class="span1"  name="Data[2698]" type="text" value="<?php echo $Data[2698]; ?>"></td>
		      <td><input class="span1"  name="Data[2699]" type="text" value="<?php echo $Data[2699]; ?>"></td>

		    </tr>	    
		    <tr>
		      <td class="al-left">- อื่น ๆ <input class="span3"  name="Data[151]" type="text" value="<?php echo $Data[151]; ?>"></td>
		      <td><input class="span3"  name="Data[157]" type="text" value="<?php echo $Data[157]; ?>"></td>
		      <td><input class="span4"  name="Data[158]" type="text" value="<?php echo $Data[158]; ?>"></td>
		      <td><input class="span1"  name="Data[152]" type="text" value="<?php echo $Data[152]; ?>"></td>
		      <td><input class="span1"  name="Data[153]" type="text" value="<?php echo $Data[153]; ?>"></td>
		      <td><input class="span1"  name="Data[154]" type="text" value="<?php echo $Data[154]; ?>"></td>
		      <td><input class="span1"  name="Data[155]" type="text" value="<?php echo $Data[155]; ?>"></td>
		      <td><input class="span1"  name="Data[156]" type="text" value="<?php echo $Data[156]; ?>"></td>
		      <td><input class="span1"  name="Data[2700]" type="text" value="<?php echo $Data[2700]; ?>"></td>
		      <td><input class="span1"  name="Data[2701]" type="text" value="<?php echo $Data[2701]; ?>"></td>
		      <td><input class="span1"  name="Data[2702]" type="text" value="<?php echo $Data[2702]; ?>"></td>
		      <td><input class="span1"  name="Data[2703]" type="text" value="<?php echo $Data[2703]; ?>"></td>
		      <td><input class="span1"  name="Data[2704]" type="text" value="<?php echo $Data[2704]; ?>"></td>
		      <td><input class="span1"  name="Data[2705]" type="text" value="<?php echo $Data[2705]; ?>"></td>
		      <td><input class="span1"  name="Data[2706]" type="text" value="<?php echo $Data[2706]; ?>"></td>
		      <td><input class="span1"  name="Data[2707]" type="text" value="<?php echo $Data[2707]; ?>"></td>
		      <td><input class="span1"  name="Data[2708]" type="text" value="<?php echo $Data[2708]; ?>"></td>
		      <td><input class="span1"  name="Data[2709]" type="text" value="<?php echo $Data[2709]; ?>"></td>
		      <td><input class="span1"  name="Data[2710]" type="text" value="<?php echo $Data[2710]; ?>"></td>
		      <td><input class="span1"  name="Data[2711]" type="text" value="<?php echo $Data[2711]; ?>"></td>
		      <td><input class="span1"  name="Data[2712]" type="text" value="<?php echo $Data[2712]; ?>"></td>
		      <td><input class="span1"  name="Data[2713]" type="text" value="<?php echo $Data[2713]; ?>"></td>
		      <td><input class="span1"  name="Data[2714]" type="text" value="<?php echo $Data[2714]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.3 พื้นที่ประมงเสียหาย (ระบุจำนวน)</h4></th>
		    </tr>
-->

		    <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.3 พื้นที่ประมงเสียหาย (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    		   
		    <tr>
		      <td class="al-left">- ระบุ <input class="span3"  name="Data[159]" type="text" value="<?php echo $Data[159]; ?>"></td>
		      <td><input class="span3"  name="Data[165]" type="text" value="<?php echo $Data[165]; ?>"></td>
		      <td><input class="span4"  name="Data[166]" type="text" value="<?php echo $Data[166]; ?>"></td>
		      <td><input class="span1"  name="Data[160]" type="text" value="<?php echo $Data[160]; ?>"></td>
		      <td><input class="span1"  name="Data[161]" type="text" value="<?php echo $Data[161]; ?>"></td>
		      <td><input class="span1"  name="Data[162]" type="text" value="<?php echo $Data[162]; ?>"></td>
		      <td><input class="span1"  name="Data[163]" type="text" value="<?php echo $Data[163]; ?>"></td>
		      <td><input class="span1"  name="Data[164]" type="text" value="<?php echo $Data[164]; ?>"></td>
		      <td><input class="span1"  name="Data[2715]" type="text" value="<?php echo $Data[2715]; ?>"></td>
		      <td><input class="span1"  name="Data[2716]" type="text" value="<?php echo $Data[2716]; ?>"></td>
		      <td><input class="span1"  name="Data[2717]" type="text" value="<?php echo $Data[2717]; ?>"></td>
		      <td><input class="span1"  name="Data[2718]" type="text" value="<?php echo $Data[2718]; ?>"></td>
		      <td><input class="span1"  name="Data[2719]" type="text" value="<?php echo $Data[2719]; ?>"></td>
		      <td><input class="span1"  name="Data[2720]" type="text" value="<?php echo $Data[2720]; ?>"></td>
		      <td><input class="span1"  name="Data[2721]" type="text" value="<?php echo $Data[2721]; ?>"></td>
		      <td><input class="span1"  name="Data[2722]" type="text" value="<?php echo $Data[2722]; ?>"></td>
		      <td><input class="span1"  name="Data[2723]" type="text" value="<?php echo $Data[2723]; ?>"></td>
		      <td><input class="span1"  name="Data[2724]" type="text" value="<?php echo $Data[2724]; ?>"></td>
		      <td><input class="span1"  name="Data[2725]" type="text" value="<?php echo $Data[2725]; ?>"></td>
		      <td><input class="span1"  name="Data[2726]" type="text" value="<?php echo $Data[2726]; ?>"></td>
		      <td><input class="span1"  name="Data[2727]" type="text" value="<?php echo $Data[2727]; ?>"></td>
		      <td><input class="span1"  name="Data[2728]" type="text" value="<?php echo $Data[2728]; ?>"></td>
		      <td><input class="span1"  name="Data[2729]" type="text" value="<?php echo $Data[2729]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.4 ตลาด ย่านธุรกิจเสียหาย (ระบุจำนวน)</h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.4 ตลาด ย่านธุรกิจเสียหาย (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>	   
		    <tr>
		      <td class="al-left">- ระบุ <input class="span3"  name="Data[167]" type="text" value="<?php echo $Data[167]; ?>"></td>
		      <td><input class="span3"  name="Data[173]" type="text" value="<?php echo $Data[173]; ?>"></td>
		      <td><input class="span4"  name="Data[174]" type="text" value="<?php echo $Data[174]; ?>"></td>
		      <td><input class="span1"  name="Data[168]" type="text" value="<?php echo $Data[168]; ?>"></td>
		      <td><input class="span1"  name="Data[169]" type="text" value="<?php echo $Data[169]; ?>"></td>
		      <td><input class="span1"  name="Data[170]" type="text" value="<?php echo $Data[170]; ?>"></td>
		      <td><input class="span1"  name="Data[171]" type="text" value="<?php echo $Data[171]; ?>"></td>
		      <td><input class="span1"  name="Data[172]" type="text" value="<?php echo $Data[172]; ?>"></td>
		      <td><input class="span1"  name="Data[2730]" type="text" value="<?php echo $Data[2730]; ?>"></td>
		      <td><input class="span1"  name="Data[2731]" type="text" value="<?php echo $Data[2731]; ?>"></td>
		      <td><input class="span1"  name="Data[2732]" type="text" value="<?php echo $Data[2732]; ?>"></td>
		      <td><input class="span1"  name="Data[2733]" type="text" value="<?php echo $Data[2733]; ?>"></td>
		      <td><input class="span1"  name="Data[2734]" type="text" value="<?php echo $Data[2734]; ?>"></td>
		      <td><input class="span1"  name="Data[2735]" type="text" value="<?php echo $Data[2735]; ?>"></td>
		      <td><input class="span1"  name="Data[2736]" type="text" value="<?php echo $Data[2736]; ?>"></td>
		      <td><input class="span1"  name="Data[2737]" type="text" value="<?php echo $Data[2737]; ?>"></td>
		      <td><input class="span1"  name="Data[2738]" type="text" value="<?php echo $Data[2738]; ?>"></td>
		      <td><input class="span1"  name="Data[2739]" type="text" value="<?php echo $Data[2739]; ?>"></td>
		      <td><input class="span1"  name="Data[2740]" type="text" value="<?php echo $Data[2740]; ?>"></td>
		      <td><input class="span1"  name="Data[2741]" type="text" value="<?php echo $Data[2741]; ?>"></td>
		      <td><input class="span1"  name="Data[2742]" type="text" value="<?php echo $Data[2742]; ?>"></td>
		      <td><input class="span1"  name="Data[2743]" type="text" value="<?php echo $Data[2743]; ?>"></td>
		      <td><input class="span1"  name="Data[2744]" type="text" value="<?php echo $Data[2744]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.5 อุตสาหกรรมเสียหาย (ระบุจำนวน)</h4></h>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.5 อุตสาหกรรมเสียหาย (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>	 
		    		   
		    <tr>
		      <td class="al-left">- ระบุ <input class="span3"  name="Data[175]" type="text" value="<?php echo $Data[175]; ?>"></td>
		      <td><input class="span3"  name="Data[1200]" type="text" value="<?php echo $Data[1200]; ?>"></td>
		      <td><input class="span4"  name="Data[1201]" type="text" value="<?php echo $Data[1201]; ?>"></td>
		      <td><input class="span1"  name="Data[176]" type="text" value="<?php echo $Data[176]; ?>"></td>
		      <td><input class="span1"  name="Data[177]" type="text" value="<?php echo $Data[177]; ?>"></td>
		      <td><input class="span1"  name="Data[178]" type="text" value="<?php echo $Data[178]; ?>"></td>
		      <td><input class="span1"  name="Data[179]" type="text" value="<?php echo $Data[179]; ?>"></td>
		      <td><input class="span1"  name="Data[180]" type="text" value="<?php echo $Data[180]; ?>"></td>
		      <td><input class="span1"  name="Data[2745]" type="text" value="<?php echo $Data[2745]; ?>"></td>
		      <td><input class="span1"  name="Data[2746]" type="text" value="<?php echo $Data[2746]; ?>"></td>
		      <td><input class="span1"  name="Data[2747]" type="text" value="<?php echo $Data[2747]; ?>"></td>
		      <td><input class="span1"  name="Data[2748]" type="text" value="<?php echo $Data[2748]; ?>"></td>
		      <td><input class="span1"  name="Data[2749]" type="text" value="<?php echo $Data[2749]; ?>"></td>
		      <td><input class="span1"  name="Data[2750]" type="text" value="<?php echo $Data[2750]; ?>"></td>
		      <td><input class="span1"  name="Data[2751]" type="text" value="<?php echo $Data[2751]; ?>"></td>
		      <td><input class="span1"  name="Data[2752]" type="text" value="<?php echo $Data[2752]; ?>"></td>
		      <td><input class="span1"  name="Data[2753]" type="text" value="<?php echo $Data[2753]; ?>"></td>
		      <td><input class="span1"  name="Data[2754]" type="text" value="<?php echo $Data[2754]; ?>"></td>
		      <td><input class="span1"  name="Data[2755]" type="text" value="<?php echo $Data[2755]; ?>"></td>
		      <td><input class="span1"  name="Data[2756]" type="text" value="<?php echo $Data[2756]; ?>"></td>
		      <td><input class="span1"  name="Data[2757]" type="text" value="<?php echo $Data[2757]; ?>"></td>
		      <td><input class="span1"  name="Data[2758]" type="text" value="<?php echo $Data[2758]; ?>"></td>
		      <td><input class="span1"  name="Data[2759]" type="text" value="<?php echo $Data[2759]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.6 ประมาณการคนที่ได้รับผลกระทบจากภัยพิบัติ (ระบุจำนวน)</h4></th>
		    </tr>
-->
			  <tr class="table-lv2"> 
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.6 ประมาณการคนที่ได้รับผลกระทบจากภัยพิบัติ (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>	
		    		   
		    <tr>
		      <td class="al-left">- จำนวนคนได้รับผลกระทบ <input class="span3"  name="Data[1202]" type="text" value="<?php echo $Data[1202]; ?>"></td>
		      <td><input class="span3"  name="Data[1208]" type="text" value="<?php echo $Data[1208]; ?>"></td>
		      <td><input class="span4"  name="Data[1209]" type="text" value="<?php echo $Data[1209]; ?>"></td>
		      <td><input class="span1"  name="Data[1203]" type="text" value="<?php echo $Data[1203]; ?>"></td>
		      <td><input class="span1"  name="Data[1204]" type="text" value="<?php echo $Data[1204]; ?>"></td>
		      <td><input class="span1"  name="Data[1205]" type="text" value="<?php echo $Data[1205]; ?>"></td>
		      <td><input class="span1"  name="Data[1206]" type="text" value="<?php echo $Data[1206]; ?>"></td>
		      <td><input class="span1"  name="Data[1207]" type="text" value="<?php echo $Data[1207]; ?>"></td>
		      <td><input class="span1"  name="Data[2760]" type="text" value="<?php echo $Data[2760]; ?>"></td>
		      <td><input class="span1"  name="Data[2761]" type="text" value="<?php echo $Data[2761]; ?>"></td>
		      <td><input class="span1"  name="Data[2762]" type="text" value="<?php echo $Data[2762]; ?>"></td>
		      <td><input class="span1"  name="Data[2763]" type="text" value="<?php echo $Data[2763]; ?>"></td>
		      <td><input class="span1"  name="Data[2764]" type="text" value="<?php echo $Data[2764]; ?>"></td>
		      <td><input class="span1"  name="Data[2765]" type="text" value="<?php echo $Data[2765]; ?>"></td>
		      <td><input class="span1"  name="Data[2766]" type="text" value="<?php echo $Data[2766]; ?>"></td>
		      <td><input class="span1"  name="Data[2767]" type="text" value="<?php echo $Data[2767]; ?>"></td>
		      <td><input class="span1"  name="Data[2768]" type="text" value="<?php echo $Data[2768]; ?>"></td>
		      <td><input class="span1"  name="Data[2769]" type="text" value="<?php echo $Data[2769]; ?>"></td>
		      <td><input class="span1"  name="Data[2770]" type="text" value="<?php echo $Data[2770]; ?>"></td>
		      <td><input class="span1"  name="Data[2771]" type="text" value="<?php echo $Data[2771]; ?>"></td>
		      <td><input class="span1"  name="Data[2772]" type="text" value="<?php echo $Data[2772]; ?>"></td>
		      <td><input class="span1"  name="Data[2773]" type="text" value="<?php echo $Data[2773]; ?>"></td>
		      <td><input class="span1"  name="Data[2774]" type="text" value="<?php echo $Data[2774]; ?>"></td>

		    </tr>
		    
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.7 ประมาณการคนที่ได้รับว่างงาน จากภัยพิบัติ (ระบุจำนวน)</h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.7 ประมาณการคนที่ได้รับว่างงาน จากภัยพิบัติ (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>	
		    		   
		    <tr>
		      <td class="al-left">- จำนวนคนว่างงาน <input class="span3"  name="Data[1210]" type="text" value="<?php echo $Data[1210]; ?>"></td>
		      <td><input class="span3"  name="Data[1216]" type="text" value="<?php echo $Data[1216]; ?>"></td>
		      <td><input class="span4"  name="Data[1217]" type="text" value="<?php echo $Data[1217]; ?>"></td>
		      <td><input class="span1"  name="Data[1211]" type="text" value="<?php echo $Data[1211]; ?>"></td>
		      <td><input class="span1"  name="Data[1212]" type="text" value="<?php echo $Data[1212]; ?>"></td>
		      <td><input class="span1"  name="Data[1213]" type="text" value="<?php echo $Data[1213]; ?>"></td>
		      <td><input class="span1"  name="Data[1214]" type="text" value="<?php echo $Data[1214]; ?>"></td>
		      <td><input class="span1"  name="Data[1215]" type="text" value="<?php echo $Data[1215]; ?>"></td>
		      <td><input class="span1"  name="Data[2775]" type="text" value="<?php echo $Data[2775]; ?>"></td>
		      <td><input class="span1"  name="Data[2776]" type="text" value="<?php echo $Data[2776]; ?>"></td>
		      <td><input class="span1"  name="Data[2777]" type="text" value="<?php echo $Data[2777]; ?>"></td>
		      <td><input class="span1"  name="Data[2778]" type="text" value="<?php echo $Data[2778]; ?>"></td>
		      <td><input class="span1"  name="Data[2779]" type="text" value="<?php echo $Data[2779]; ?>"></td>
		      <td><input class="span1"  name="Data[2780]" type="text" value="<?php echo $Data[2780]; ?>"></td>
		      <td><input class="span1"  name="Data[2781]" type="text" value="<?php echo $Data[2781]; ?>"></td>
		      <td><input class="span1"  name="Data[2782]" type="text" value="<?php echo $Data[2782]; ?>"></td>
		      <td><input class="span1"  name="Data[2783]" type="text" value="<?php echo $Data[2783]; ?>"></td>
		      <td><input class="span1"  name="Data[2784]" type="text" value="<?php echo $Data[2784]; ?>"></td>
		      <td><input class="span1"  name="Data[2785]" type="text" value="<?php echo $Data[2785]; ?>"></td>
		      <td><input class="span1"  name="Data[2786]" type="text" value="<?php echo $Data[2786]; ?>"></td>
		      <td><input class="span1"  name="Data[2787]" type="text" value="<?php echo $Data[2787]; ?>"></td>
		      <td><input class="span1"  name="Data[2788]" type="text" value="<?php echo $Data[2788]; ?>"></td>
		      <td><input class="span1"  name="Data[2789]" type="text" value="<?php echo $Data[2789]; ?>"></td>

		    </tr>
		    
	<!--
	    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.8 กลุ่มอาชีพ (ระบุจำนวน)</h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.8 กลุ่มอาชีพ (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>	
		    		   
		    <tr>
		      <td class="al-left">- จำนวนกลุ่มอาชีพในชุมชน</td>
		      <td><input class="span3"  name="Data[1223]" type="text" value="<?php echo $Data[1223]; ?>"></td>
		      <td><input class="span4"  name="Data[1224]" type="text" value="<?php echo $Data[1224]; ?>"></td>
		      <td><input class="span1"  name="Data[1218]" type="text" value="<?php echo $Data[1218]; ?>"></td>
		      <td><input class="span1"  name="Data[1219]" type="text" value="<?php echo $Data[1219]; ?>"></td>
		      <td><input class="span1"  name="Data[1220]" type="text" value="<?php echo $Data[1220]; ?>"></td>
		      <td><input class="span1"  name="Data[1221]" type="text" value="<?php echo $Data[1221]; ?>"></td>
		      <td><input class="span1"  name="Data[1222]" type="text" value="<?php echo $Data[1222]; ?>"></td>
		      <td><input class="span1"  name="Data[2790]" type="text" value="<?php echo $Data[2790]; ?>"></td>
		      <td><input class="span1"  name="Data[2791]" type="text" value="<?php echo $Data[2791]; ?>"></td>
		      <td><input class="span1"  name="Data[2792]" type="text" value="<?php echo $Data[2792]; ?>"></td>
		      <td><input class="span1"  name="Data[2793]" type="text" value="<?php echo $Data[2793]; ?>"></td>
		      <td><input class="span1"  name="Data[2794]" type="text" value="<?php echo $Data[2794]; ?>"></td>
		      <td><input class="span1"  name="Data[2795]" type="text" value="<?php echo $Data[2795]; ?>"></td>
		      <td><input class="span1"  name="Data[2796]" type="text" value="<?php echo $Data[2796]; ?>"></td>
		      <td><input class="span1"  name="Data[2797]" type="text" value="<?php echo $Data[2797]; ?>"></td>
		      <td><input class="span1"  name="Data[2798]" type="text" value="<?php echo $Data[2798]; ?>"></td>
		      <td><input class="span1"  name="Data[2799]" type="text" value="<?php echo $Data[2799]; ?>"></td>
		      <td><input class="span1"  name="Data[2800]" type="text" value="<?php echo $Data[2800]; ?>"></td>
		      <td><input class="span1"  name="Data[2801]" type="text" value="<?php echo $Data[2801]; ?>"></td>
		      <td><input class="span1"  name="Data[2802]" type="text" value="<?php echo $Data[2802]; ?>"></td>
		      <td><input class="span1"  name="Data[2803]" type="text" value="<?php echo $Data[2803]; ?>"></td>
		      <td><input class="span1"  name="Data[2804]" type="text" value="<?php echo $Data[2804]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- กลุ่มอาชีพที่ได้รับความเสียหาย </td>
		      <td><input class="span3"  name="Data[1230]" type="text" value="<?php echo $Data[1230]; ?>"></td>
		      <td><input class="span4"  name="Data[1231]" type="text" value="<?php echo $Data[1231]; ?>"></td>
		      <td><input class="span1"  name="Data[1225]" type="text" value="<?php echo $Data[1225]; ?>"></td>
		      <td><input class="span1"  name="Data[1226]" type="text" value="<?php echo $Data[1226]; ?>"></td>
		      <td><input class="span1"  name="Data[1227]" type="text" value="<?php echo $Data[1227]; ?>"></td>
		      <td><input class="span1"  name="Data[1228]" type="text" value="<?php echo $Data[1228]; ?>"></td>
		      <td><input class="span1"  name="Data[1229]" type="text" value="<?php echo $Data[1229]; ?>"></td>
		      <td><input class="span1"  name="Data[2805]" type="text" value="<?php echo $Data[2805]; ?>"></td>
		      <td><input class="span1"  name="Data[2806]" type="text" value="<?php echo $Data[2806]; ?>"></td>
		      <td><input class="span1"  name="Data[2807]" type="text" value="<?php echo $Data[2807]; ?>"></td>
		      <td><input class="span1"  name="Data[2808]" type="text" value="<?php echo $Data[2808]; ?>"></td>
		      <td><input class="span1"  name="Data[2809]" type="text" value="<?php echo $Data[2809]; ?>"></td>
		      <td><input class="span1"  name="Data[2810]" type="text" value="<?php echo $Data[2810]; ?>"></td>
		      <td><input class="span1"  name="Data[2811]" type="text" value="<?php echo $Data[2811]; ?>"></td>
		      <td><input class="span1"  name="Data[2812]" type="text" value="<?php echo $Data[2812]; ?>"></td>
		      <td><input class="span1"  name="Data[2813]" type="text" value="<?php echo $Data[2813]; ?>"></td>
		      <td><input class="span1"  name="Data[2814]" type="text" value="<?php echo $Data[2814]; ?>"></td>
		      <td><input class="span1"  name="Data[2815]" type="text" value="<?php echo $Data[2815]; ?>"></td>
		      <td><input class="span1"  name="Data[2816]" type="text" value="<?php echo $Data[2816]; ?>"></td>
		      <td><input class="span1"  name="Data[2817]" type="text" value="<?php echo $Data[2817]; ?>"></td>
		      <td><input class="span1"  name="Data[2818]" type="text" value="<?php echo $Data[2818]; ?>"></td>
		      <td><input class="span1"  name="Data[2819]" type="text" value="<?php echo $Data[2819]; ?>"></td>

		    </tr>
<!--
		    
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.9 เครื่องจักร อุปกรณ์ประกอบอาชีพ ที่เสียหาย (ระบุจำนวน)</h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.9 เครื่องจักร อุปกรณ์ประกอบอาชีพ ที่เสียหาย (ระบุจำนวน)</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>			
		       
		    <tr>
		      <td class="al-left">- รถไถ</td>
		      <td><input class="span3"  name="Data[1121]" type="text" value="<?php echo $Data[1121]; ?>"></td>
		      <td><input class="span4"  name="Data[1122]" type="text" value="<?php echo $Data[1122]; ?>"></td>
		      <td><input class="span1"  name="Data[1116]" type="text" value="<?php echo $Data[1116]; ?>"></td>
		      <td><input class="span1"  name="Data[1117]" type="text" value="<?php echo $Data[1117]; ?>"></td>
		      <td><input class="span1"  name="Data[1118]" type="text" value="<?php echo $Data[1118]; ?>"></td>
		      <td><input class="span1"  name="Data[1119]" type="text" value="<?php echo $Data[1119]; ?>"></td>
		      <td><input class="span1"  name="Data[1120]" type="text" value="<?php echo $Data[1120]; ?>"></td>
		      <td><input class="span1"  name="Data[2820]" type="text" value="<?php echo $Data[2820]; ?>"></td>
		      <td><input class="span1"  name="Data[2821]" type="text" value="<?php echo $Data[2821]; ?>"></td>
		      <td><input class="span1"  name="Data[2822]" type="text" value="<?php echo $Data[2822]; ?>"></td>
		      <td><input class="span1"  name="Data[2823]" type="text" value="<?php echo $Data[2823]; ?>"></td>
		      <td><input class="span1"  name="Data[2824]" type="text" value="<?php echo $Data[2824]; ?>"></td>
		      <td><input class="span1"  name="Data[2825]" type="text" value="<?php echo $Data[2825]; ?>"></td>
		      <td><input class="span1"  name="Data[2826]" type="text" value="<?php echo $Data[2826]; ?>"></td>
		      <td><input class="span1"  name="Data[2827]" type="text" value="<?php echo $Data[2827]; ?>"></td>
		      <td><input class="span1"  name="Data[2828]" type="text" value="<?php echo $Data[2828]; ?>"></td>
		      <td><input class="span1"  name="Data[2829]" type="text" value="<?php echo $Data[2829]; ?>"></td>
		      <td><input class="span1"  name="Data[2830]" type="text" value="<?php echo $Data[2830]; ?>"></td>
		      <td><input class="span1"  name="Data[2831]" type="text" value="<?php echo $Data[2831]; ?>"></td>
		      <td><input class="span1"  name="Data[2832]" type="text" value="<?php echo $Data[2832]; ?>"></td>
		      <td><input class="span1"  name="Data[2833]" type="text" value="<?php echo $Data[2833]; ?>"></td>
		      <td><input class="span1"  name="Data[2834]" type="text" value="<?php echo $Data[2834]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- รถกระบะ</td>
		      <td><input class="span3"  name="Data[1128]" type="text" value="<?php echo $Data[1128]; ?>"></td>
		      <td><input class="span4"  name="Data[1129]" type="text" value="<?php echo $Data[1129]; ?>"></td>
		      <td><input class="span1"  name="Data[1123]" type="text" value="<?php echo $Data[1123]; ?>"></td>
		      <td><input class="span1"  name="Data[1124]" type="text" value="<?php echo $Data[1124]; ?>"></td>
		      <td><input class="span1"  name="Data[1125]" type="text" value="<?php echo $Data[1125]; ?>"></td>
		      <td><input class="span1"  name="Data[1126]" type="text" value="<?php echo $Data[1126]; ?>"></td>
		      <td><input class="span1"  name="Data[1127]" type="text" value="<?php echo $Data[1127]; ?>"></td>
		      <td><input class="span1"  name="Data[2835]" type="text" value="<?php echo $Data[2835]; ?>"></td>
		      <td><input class="span1"  name="Data[2836]" type="text" value="<?php echo $Data[2836]; ?>"></td>
		      <td><input class="span1"  name="Data[2837]" type="text" value="<?php echo $Data[2837]; ?>"></td>
		      <td><input class="span1"  name="Data[2838]" type="text" value="<?php echo $Data[2838]; ?>"></td>
		      <td><input class="span1"  name="Data[2839]" type="text" value="<?php echo $Data[2839]; ?>"></td>
		      <td><input class="span1"  name="Data[2840]" type="text" value="<?php echo $Data[2840]; ?>"></td>
		      <td><input class="span1"  name="Data[2841]" type="text" value="<?php echo $Data[2841]; ?>"></td>
		      <td><input class="span1"  name="Data[2842]" type="text" value="<?php echo $Data[2842]; ?>"></td>
		      <td><input class="span1"  name="Data[2843]" type="text" value="<?php echo $Data[2843]; ?>"></td>
		      <td><input class="span1"  name="Data[2844]" type="text" value="<?php echo $Data[2844]; ?>"></td>
		      <td><input class="span1"  name="Data[2845]" type="text" value="<?php echo $Data[2845]; ?>"></td>
		      <td><input class="span1"  name="Data[2846]" type="text" value="<?php echo $Data[2846]; ?>"></td>
		      <td><input class="span1"  name="Data[2847]" type="text" value="<?php echo $Data[2847]; ?>"></td>
		      <td><input class="span1"  name="Data[2848]" type="text" value="<?php echo $Data[2848]; ?>"></td>
		      <td><input class="span1"  name="Data[2849]" type="text" value="<?php echo $Data[2849]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- รถบรรทุก</td>
		      <td><input class="span3"  name="Data[1135]" type="text" value="<?php echo $Data[1135]; ?>"></td>
		      <td><input class="span4"  name="Data[1136]" type="text" value="<?php echo $Data[1136]; ?>"></td>
		      <td><input class="span1"  name="Data[1130]" type="text" value="<?php echo $Data[1130]; ?>"></td>
		      <td><input class="span1"  name="Data[1131]" type="text" value="<?php echo $Data[1131]; ?>"></td>
		      <td><input class="span1"  name="Data[1132]" type="text" value="<?php echo $Data[1132]; ?>"></td>
		      <td><input class="span1"  name="Data[1133]" type="text" value="<?php echo $Data[1133]; ?>"></td>
		      <td><input class="span1"  name="Data[1134]" type="text" value="<?php echo $Data[1134]; ?>"></td>
		      <td><input class="span1"  name="Data[2850]" type="text" value="<?php echo $Data[2850]; ?>"></td>
		      <td><input class="span1"  name="Data[2851]" type="text" value="<?php echo $Data[2851]; ?>"></td>
		      <td><input class="span1"  name="Data[2852]" type="text" value="<?php echo $Data[2852]; ?>"></td>
		      <td><input class="span1"  name="Data[2853]" type="text" value="<?php echo $Data[2853]; ?>"></td>
		      <td><input class="span1"  name="Data[2854]" type="text" value="<?php echo $Data[2854]; ?>"></td>
		      <td><input class="span1"  name="Data[2855]" type="text" value="<?php echo $Data[2855]; ?>"></td>
		      <td><input class="span1"  name="Data[2856]" type="text" value="<?php echo $Data[2856]; ?>"></td>
		      <td><input class="span1"  name="Data[2857]" type="text" value="<?php echo $Data[2857]; ?>"></td>
		      <td><input class="span1"  name="Data[2858]" type="text" value="<?php echo $Data[2858]; ?>"></td>
		      <td><input class="span1"  name="Data[2859]" type="text" value="<?php echo $Data[2859]; ?>"></td>
		      <td><input class="span1"  name="Data[2860]" type="text" value="<?php echo $Data[2860]; ?>"></td>
		      <td><input class="span1"  name="Data[2861]" type="text" value="<?php echo $Data[2861]; ?>"></td>
		      <td><input class="span1"  name="Data[2862]" type="text" value="<?php echo $Data[2862]; ?>"></td>
		      <td><input class="span1"  name="Data[2863]" type="text" value="<?php echo $Data[2863]; ?>"></td>
		      <td><input class="span1"  name="Data[2864]" type="text" value="<?php echo $Data[2864]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- รถมอเตอร์ไซต์</td>
		      <td><input class="span3"  name="Data[1142]" type="text" value="<?php echo $Data[1142]; ?>"></td>
		      <td><input class="span4"  name="Data[1143]" type="text" value="<?php echo $Data[1143]; ?>"></td>
		      <td><input class="span1"  name="Data[1137]" type="text" value="<?php echo $Data[1137]; ?>"></td>
		      <td><input class="span1"  name="Data[1138]" type="text" value="<?php echo $Data[1138]; ?>"></td>
		      <td><input class="span1"  name="Data[1139]" type="text" value="<?php echo $Data[1139]; ?>"></td>
		      <td><input class="span1"  name="Data[1140]" type="text" value="<?php echo $Data[1140]; ?>"></td>
		      <td><input class="span1"  name="Data[1141]" type="text" value="<?php echo $Data[1141]; ?>"></td>
		      <td><input class="span1"  name="Data[2865]" type="text" value="<?php echo $Data[2865]; ?>"></td>
		      <td><input class="span1"  name="Data[2866]" type="text" value="<?php echo $Data[2866]; ?>"></td>
		      <td><input class="span1"  name="Data[2867]" type="text" value="<?php echo $Data[2867]; ?>"></td>
		      <td><input class="span1"  name="Data[2868]" type="text" value="<?php echo $Data[2868]; ?>"></td>
		      <td><input class="span1"  name="Data[2869]" type="text" value="<?php echo $Data[2869]; ?>"></td>
		      <td><input class="span1"  name="Data[2870]" type="text" value="<?php echo $Data[2870]; ?>"></td>
		      <td><input class="span1"  name="Data[2871]" type="text" value="<?php echo $Data[2871]; ?>"></td>
		      <td><input class="span1"  name="Data[2872]" type="text" value="<?php echo $Data[2872]; ?>"></td>
		      <td><input class="span1"  name="Data[2873]" type="text" value="<?php echo $Data[2873]; ?>"></td>
		      <td><input class="span1"  name="Data[2874]" type="text" value="<?php echo $Data[2874]; ?>"></td>
		      <td><input class="span1"  name="Data[2875]" type="text" value="<?php echo $Data[2875]; ?>"></td>
		      <td><input class="span1"  name="Data[2876]" type="text" value="<?php echo $Data[2876]; ?>"></td>
		      <td><input class="span1"  name="Data[2877]" type="text" value="<?php echo $Data[2877]; ?>"></td>
		      <td><input class="span1"  name="Data[2878]" type="text" value="<?php echo $Data[2878]; ?>"></td>
		      <td><input class="span1"  name="Data[2879]" type="text" value="<?php echo $Data[2879]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- รถยนต์</td>
		      <td><input class="span3"  name="Data[1151]" type="text" value="<?php echo $Data[1151]; ?>"></td>
		      <td><input class="span4"  name="Data[1152]" type="text" value="<?php echo $Data[1152]; ?>"></td>
		      <td><input class="span1"  name="Data[1144]" type="text" value="<?php echo $Data[1145]; ?>"></td>
		      <td><input class="span1"  name="Data[1146]" type="text" value="<?php echo $Data[1147]; ?>"></td>
		      <td><input class="span1"  name="Data[1148]" type="text" value="<?php echo $Data[1148]; ?>"></td>
		      <td><input class="span1"  name="Data[1149]" type="text" value="<?php echo $Data[1149]; ?>"></td>
		      <td><input class="span1"  name="Data[1150]" type="text" value="<?php echo $Data[1150]; ?>"></td>
		      <td><input class="span1"  name="Data[2880]" type="text" value="<?php echo $Data[2880]; ?>"></td>
		      <td><input class="span1"  name="Data[2881]" type="text" value="<?php echo $Data[2881]; ?>"></td>
		      <td><input class="span1"  name="Data[2882]" type="text" value="<?php echo $Data[2882]; ?>"></td>
		      <td><input class="span1"  name="Data[2883]" type="text" value="<?php echo $Data[2883]; ?>"></td>
		      <td><input class="span1"  name="Data[2884]" type="text" value="<?php echo $Data[2884]; ?>"></td>
		      <td><input class="span1"  name="Data[2885]" type="text" value="<?php echo $Data[2885]; ?>"></td>
		      <td><input class="span1"  name="Data[2886]" type="text" value="<?php echo $Data[2886]; ?>"></td>
		      <td><input class="span1"  name="Data[2887]" type="text" value="<?php echo $Data[2887]; ?>"></td>
		      <td><input class="span1"  name="Data[2888]" type="text" value="<?php echo $Data[2888]; ?>"></td>
		      <td><input class="span1"  name="Data[2889]" type="text" value="<?php echo $Data[2889]; ?>"></td>
		      <td><input class="span1"  name="Data[2890]" type="text" value="<?php echo $Data[2890]; ?>"></td>
		      <td><input class="span1"  name="Data[2891]" type="text" value="<?php echo $Data[2891]; ?>"></td>
		      <td><input class="span1"  name="Data[2892]" type="text" value="<?php echo $Data[2892]; ?>"></td>
		      <td><input class="span1"  name="Data[2893]" type="text" value="<?php echo $Data[2893]; ?>"></td>
		      <td><input class="span1"  name="Data[2894]" type="text" value="<?php echo $Data[2894]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- จักรเย็บผ้า</td>
		      <td><input class="span3"  name="Data[1158]" type="text" value="<?php echo $Data[1158]; ?>"></td>
		      <td><input class="span4"  name="Data[1159]" type="text" value="<?php echo $Data[1159]; ?>"></td>
		      <td><input class="span1"  name="Data[1153]" type="text" value="<?php echo $Data[1153]; ?>"></td>
		      <td><input class="span1"  name="Data[1154]" type="text" value="<?php echo $Data[1154]; ?>"></td>
		      <td><input class="span1"  name="Data[1155]" type="text" value="<?php echo $Data[1155]; ?>"></td>
		      <td><input class="span1"  name="Data[1156]" type="text" value="<?php echo $Data[1156]; ?>"></td>
		      <td><input class="span1"  name="Data[1157]" type="text" value="<?php echo $Data[1157]; ?>"></td>
		      <td><input class="span1"  name="Data[2895]" type="text" value="<?php echo $Data[2895]; ?>"></td>
		      <td><input class="span1"  name="Data[2896]" type="text" value="<?php echo $Data[2896]; ?>"></td>
		      <td><input class="span1"  name="Data[2897]" type="text" value="<?php echo $Data[2897]; ?>"></td>
		      <td><input class="span1"  name="Data[2898]" type="text" value="<?php echo $Data[2898]; ?>"></td>
		      <td><input class="span1"  name="Data[2899]" type="text" value="<?php echo $Data[2899]; ?>"></td>
		      <td><input class="span1"  name="Data[2900]" type="text" value="<?php echo $Data[2900]; ?>"></td>
		      <td><input class="span1"  name="Data[2901]" type="text" value="<?php echo $Data[2901]; ?>"></td>
		      <td><input class="span1"  name="Data[2902]" type="text" value="<?php echo $Data[2902]; ?>"></td>
		      <td><input class="span1"  name="Data[2903]" type="text" value="<?php echo $Data[2903]; ?>"></td>
		      <td><input class="span1"  name="Data[2904]" type="text" value="<?php echo $Data[2904]; ?>"></td>
		      <td><input class="span1"  name="Data[2905]" type="text" value="<?php echo $Data[2905]; ?>"></td>
		      <td><input class="span1"  name="Data[2906]" type="text" value="<?php echo $Data[2906]; ?>"></td>
		      <td><input class="span1"  name="Data[2907]" type="text" value="<?php echo $Data[2907]; ?>"></td>
		      <td><input class="span1"  name="Data[2908]" type="text" value="<?php echo $Data[2908]; ?>"></td>
		      <td><input class="span1"  name="Data[2909]" type="text" value="<?php echo $Data[2909]; ?>"></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อุปกรณ์กลุ่มอาชีพ</td>
		      <td><input class="span3"  name="Data[1165]" type="text" value="<?php echo $Data[1165]; ?>"></td>
		      <td><input class="span4"  name="Data[1166]" type="text" value="<?php echo $Data[1166]; ?>"></td>
		      <td><input class="span1"  name="Data[1160]" type="text" value="<?php echo $Data[1160]; ?>"></td>
		      <td><input class="span1"  name="Data[1161]" type="text" value="<?php echo $Data[1161]; ?>"></td>
		      <td><input class="span1"  name="Data[1162]" type="text" value="<?php echo $Data[1162]; ?>"></td>
		      <td><input class="span1"  name="Data[1163]" type="text" value="<?php echo $Data[1163]; ?>"></td>
		      <td><input class="span1"  name="Data[1164]" type="text" value="<?php echo $Data[1164]; ?>"></td>
		      <td><input class="span1"  name="Data[2910]" type="text" value="<?php echo $Data[2910]; ?>"></td>
		      <td><input class="span1"  name="Data[2911]" type="text" value="<?php echo $Data[2911]; ?>"></td>
		      <td><input class="span1"  name="Data[2912]" type="text" value="<?php echo $Data[2912]; ?>"></td>
		      <td><input class="span1"  name="Data[2913]" type="text" value="<?php echo $Data[2913]; ?>"></td>
		      <td><input class="span1"  name="Data[2914]" type="text" value="<?php echo $Data[2914]; ?>"></td>
		      <td><input class="span1"  name="Data[2915]" type="text" value="<?php echo $Data[2915]; ?>"></td>
		      <td><input class="span1"  name="Data[2916]" type="text" value="<?php echo $Data[2916]; ?>"></td>
		      <td><input class="span1"  name="Data[2917]" type="text" value="<?php echo $Data[2917]; ?>"></td>
		      <td><input class="span1"  name="Data[2918]" type="text" value="<?php echo $Data[2918]; ?>"></td>
		      <td><input class="span1"  name="Data[2919]" type="text" value="<?php echo $Data[2919]; ?>"></td>
		      <td><input class="span1"  name="Data[2920]" type="text" value="<?php echo $Data[2920]; ?>"></td>
		      <td><input class="span1"  name="Data[2921]" type="text" value="<?php echo $Data[2921]; ?>"></td>
		      <td><input class="span1"  name="Data[2922]" type="text" value="<?php echo $Data[2922]; ?>"></td>
		      <td><input class="span1"  name="Data[2923]" type="text" value="<?php echo $Data[2923]; ?>"></td>
		      <td><input class="span1"  name="Data[2924]" type="text" value="<?php echo $Data[2924]; ?>"></td>

		    </tr>	    
		    <tr>
		      <td class="al-left">- อื่นๆ <input class="span3"  name="Data[1167]" type="text" value="<?php echo $Data[1167]; ?>"></td>
		      <td><input class="span3"  name="Data[1173]" type="text" value="<?php echo $Data[1173]; ?>"></td>
		      <td><input class="span4"  name="Data[1174]" type="text" value="<?php echo $Data[1174]; ?>"></td>
		      <td><input class="span1"  name="Data[1168]" type="text" value="<?php echo $Data[1168]; ?>"></td>
		      <td><input class="span1"  name="Data[1169]" type="text" value="<?php echo $Data[1169]; ?>"></td>
		      <td><input class="span1"  name="Data[1170]" type="text" value="<?php echo $Data[1170]; ?>"></td>
		      <td><input class="span1"  name="Data[1171]" type="text" value="<?php echo $Data[1171]; ?>"></td>
		      <td><input class="span1"  name="Data[1172]" type="text" value="<?php echo $Data[1172]; ?>"></td>
		      <td><input class="span1"  name="Data[2925]" type="text" value="<?php echo $Data[2925]; ?>"></td>
		      <td><input class="span1"  name="Data[2926]" type="text" value="<?php echo $Data[2926]; ?>"></td>
		      <td><input class="span1"  name="Data[2927]" type="text" value="<?php echo $Data[2927]; ?>"></td>
		      <td><input class="span1"  name="Data[2928]" type="text" value="<?php echo $Data[2928]; ?>"></td>
		      <td><input class="span1"  name="Data[2929]" type="text" value="<?php echo $Data[2929]; ?>"></td>
		      <td><input class="span1"  name="Data[2930]" type="text" value="<?php echo $Data[2930]; ?>"></td>
		      <td><input class="span1"  name="Data[2931]" type="text" value="<?php echo $Data[2931]; ?>"></td>
		      <td><input class="span1"  name="Data[2932]" type="text" value="<?php echo $Data[2932]; ?>"></td>
		      <td><input class="span1"  name="Data[2933]" type="text" value="<?php echo $Data[2933]; ?>"></td>
		      <td><input class="span1"  name="Data[2934]" type="text" value="<?php echo $Data[2934]; ?>"></td>
		      <td><input class="span1"  name="Data[2935]" type="text" value="<?php echo $Data[2935]; ?>"></td>
		      <td><input class="span1"  name="Data[2936]" type="text" value="<?php echo $Data[2936]; ?>"></td>
		      <td><input class="span1"  name="Data[2937]" type="text" value="<?php echo $Data[2937]; ?>"></td>
		      <td><input class="span1"  name="Data[2938]" type="text" value="<?php echo $Data[2938]; ?>"></td>
		      <td><input class="span1"  name="Data[2939]" type="text" value="<?php echo $Data[2939]; ?>"></td>

		    </tr>
<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.10 ปัญหาการสื่อสารโทรคมนาคมในพื้นที่</h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.10 ปัญหาการสื่อสารโทรคมนาคมในพื้นที่</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>			

		   
		    <tr>
		      <td class="al-left">- ระบบโทรศัพท์พื้นฐาน</td>
		      <td><input class="span3"  name="Data[186]" type="text" value="<?php echo $Data[186]; ?>"></td>
		      <td><input class="span4"  name="Data[187]" type="text" value="<?php echo $Data[187]; ?>"></td>
		      <td><input type="checkbox" name="Data[181]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[181] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[182]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[182] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[183]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[183] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[184]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[184] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[185]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[185] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3000]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3000] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3001]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3001] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3002]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3002] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3003]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3003] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3004]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3004] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3005]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3005] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3006]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3006] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3007]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3007] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3008]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3008] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3009]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3009] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3010]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3010] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3011]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3011] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3012]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3012] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3013]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3013] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3014]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[3014] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ระบบโทรศัพท์มือถือ</td>
		      <td><input class="span3"  name="Data[193]" type="text" value="<?php echo $Data[193]; ?>"></td>
		      <td><input class="span4"  name="Data[194]" type="text" value="<?php echo $Data[194]; ?>"></td>
		      <td><input type="checkbox" name="Data[188]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[188] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[189]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[189] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[190]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[190] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[191]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[191] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[192]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[192] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3015]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3015] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3016]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3016] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3017]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3017] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3018]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3018] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3019]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3019] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3020]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3020] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3021]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3021] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3022]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3022] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3023]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3023] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3024]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3024] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3025]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3025] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3026]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3026] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3027]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3027] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3028]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3028] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3029]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[3029] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ระบบอินเทอร์เน็ต</td>
		      <td><input class="span3"  name="Data[200]" type="text" value="<?php echo $Data[200]; ?>"></td>
		      <td><input class="span4"  name="Data[201]" type="text" value="<?php echo $Data[201]; ?>"></td>
		      <td><input type="checkbox" name="Data[195]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[195] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[196]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[196] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[197]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[197] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[198]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[198] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[199]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[199] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3030]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3030] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3031]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3031] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3032]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3032] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3033]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3033] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3034]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3034] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3035]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3035] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3036]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3036] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3037]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3037] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3038]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3038] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3039]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3039] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3040]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3040] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3041]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3041] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3042]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3042] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3043]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3043] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3044]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[3044] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ระบบไปรษณีย์</td>
		      <td><input class="span3"  name="Data[212]" type="text" value="<?php echo $Data[212]; ?>"></td>
		      <td><input class="span4"  name="Data[213]" type="text" value="<?php echo $Data[213]; ?>"></td>
		      <td><input type="checkbox" name="Data[207]" value="ระบบไปรษณีย์" <?php if ($Data[207] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[208]" value="ระบบไปรษณีย์" <?php if ($Data[208] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[209]" value="ระบบไปรษณีย์" <?php if ($Data[209] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[210]" value="ระบบไปรษณีย์" <?php if ($Data[210] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[211]" value="ระบบไปรษณีย์" <?php if ($Data[211] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3045]" value="ระบบไปรษณีย์" <?php if ($Data[3045] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3046]" value="ระบบไปรษณีย์" <?php if ($Data[3046] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3047]" value="ระบบไปรษณีย์" <?php if ($Data[3047] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3048]" value="ระบบไปรษณีย์" <?php if ($Data[3048] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3049]" value="ระบบไปรษณีย์" <?php if ($Data[3049] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3050]" value="ระบบไปรษณีย์" <?php if ($Data[3050] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3051]" value="ระบบไปรษณีย์" <?php if ($Data[3051] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3052]" value="ระบบไปรษณีย์" <?php if ($Data[3052] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3053]" value="ระบบไปรษณีย์" <?php if ($Data[3053] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3054]" value="ระบบไปรษณีย์" <?php if ($Data[3054] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3055]" value="ระบบไปรษณีย์" <?php if ($Data[3055] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3056]" value="ระบบไปรษณีย์" <?php if ($Data[3056] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3057]" value="ระบบไปรษณีย์" <?php if ($Data[3057] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3058]" value="ระบบไปรษณีย์" <?php if ($Data[3058] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3059]" value="ระบบไปรษณีย์" <?php if ($Data[3059] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ระบบวิทยุสื่อสาร</td>
		      <td><input class="span3"  name="Data[994]" type="text" value="<?php echo $Data[994]; ?>"></td>
		      <td><input class="span4"  name="Data[995]" type="text" value="<?php echo $Data[995]; ?>"></td>
		      <td><input type="checkbox" name="Data[214]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[214] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[990]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[990] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[991]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[991] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[992]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[992] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[993]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[993] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3060]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3060] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3061]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3061] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3062]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3062] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3063]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3063] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3064]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3064] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3065]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3065] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3066]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3066] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3067]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3067] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3068]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3068] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3069]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3069] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3070]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3070] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3071]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3071] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3072]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3072] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3073]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3073] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3074]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[3074] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
<!--
		    
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.11 กิจกรรมที่ชุมชนต้องการการสนับสนุน</h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.11 กิจกรรมที่ชุมชนต้องการการสนับสนุน</h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>				   
		    <tr>
		      <td class="al-left">- การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)</td>
		      <td><input class="span3"  name="Data[1001]" type="text" value="<?php echo $Data[1001]; ?>"></td>
		      <td><input class="span4"  name="Data[1002]" type="text" value="<?php echo $Data[1002]; ?>"></td>
		      <td><input type="checkbox" name="Data[996]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[996] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[997]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[997] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[998]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[998] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[999]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[999] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1000]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[1000] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3075]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3075] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3076]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3076] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3077]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3077] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3078]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3078] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3079]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3079] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3080]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3080] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3081]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3081] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3082]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3082] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3083]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3083] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3084]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3084] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3085]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3085] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3086]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3086] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3087]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3087] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3088]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3088] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3089]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[3089] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- การฟื้นฟูด้านปศุสัตว์</td>
		      <td><input class="span3"  name="Data[1008]" type="text" value="<?php echo $Data[1008]; ?>"></td>
		      <td><input class="span4"  name="Data[1009]" type="text" value="<?php echo $Data[1009]; ?>"></td>
		      <td><input type="checkbox" name="Data[1003]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1003] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1004]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1004] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1005]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1005] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1006]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1006] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1007]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1007] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3090]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3090] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3091]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3091] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3092]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3092] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3093]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3093] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3094]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3094] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3095]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3095] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3096]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3096] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3097]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3097] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3098]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3098] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3099]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3099] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3100]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3100] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3101]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3101] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3102]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3102] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3103]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3103] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3104]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[3104] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- การฟื้นฟูด้านการประมง</td>
		      <td><input class="span3"  name="Data[1015]" type="text" value="<?php echo $Data[1015]; ?>"></td>
		      <td><input class="span4"  name="Data[1016]" type="text" value="<?php echo $Data[1016]; ?>"></td>
		      <td><input type="checkbox" name="Data[1010]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1010] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1011]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1011] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1012]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1012] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1013]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1013] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1014]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1014] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3105]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3105] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3106]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3106] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3107]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3107] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3108]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3108] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3109]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3109] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3110]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3110] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3111]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3111] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3112]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3112] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3113]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3113] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3114]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3114] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3115]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3115] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3116]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3116] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3117]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3117] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3118]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3118] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3119]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[3119] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- การฟื้นฟูธุรกิจ อุตสาหกรรม</tdh>
		      <td><input class="span3"  name="Data[1022]" type="text" value="<?php echo $Data[1022]; ?>"></td>
		      <td><input class="span4"  name="Data[1023]" type="text" value="<?php echo $Data[1023]; ?>"></td>
		      <td><input type="checkbox" name="Data[1017]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1017] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1018]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1018] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1019]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1019] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1020]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1020] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1021]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1021] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3120]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3120] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3121]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3121] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3122]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3122] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3123]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3123] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3124]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3124] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3125]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3125] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3126]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3126] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3127]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3127] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3128]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3128] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3129]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3129] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3130]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3130] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3131]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3131] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3132]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3132] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3133]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3133] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3134]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[3134] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- การฟื้นฟูแรงงาน</td>
		      <td><input class="span3"  name="Data[1029]" type="text" value="<?php echo $Data[1029]; ?>"></td>
		      <td><input class="span4"  name="Data[1030]" type="text" value="<?php echo $Data[1030]; ?>"></td>
		      <td><input type="checkbox" name="Data[1024]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1024] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1025]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1025] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1026]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1026] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1027]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1027] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1028]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1028] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3135]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3135] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3136]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3136] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3137]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3137] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3138]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3138] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3139]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3139] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3140]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3140] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3141]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3141] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3142]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3142] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3143]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3143] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3144]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3144] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3145]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3145] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3146]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3146] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3147]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3147] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3148]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3148] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3149]" value="การฟื้นฟูแรงงาน" <?php if ($Data[3149] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- การฟื้นฟูด้านกลุ่มอาชีพ</td>
		      <td><input class="span3"  name="Data[1036]" type="text" value="<?php echo $Data[1036]; ?>"></td>
		      <td><input class="span4"  name="Data[1037]" type="text" value="<?php echo $Data[1037]; ?>"></td>
		      <td><input type="checkbox" name="Data[1031]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1031] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1032]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1032] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1033]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1033] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1034]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1034] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1035]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1035] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3150]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3150] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3151]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3151] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3152]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3152] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3153]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3153] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3154]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3154] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3155]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3155] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3156]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3156] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3157]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3157] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3158]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3158] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3159]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3159] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3160]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3160] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3161]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3161] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3162]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3162] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3163]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3163] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3164]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[3164] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		      <td class="al-left">- การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ</td>
		      <td><input class="span3"  name="Data[1043]" type="text" value="<?php echo $Data[1043]; ?>"></td>
		      <td><input class="span4"  name="Data[1044]" type="text" value="<?php echo $Data[1044]; ?>"></td>
		      <td><input type="checkbox" name="Data[1038]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1038] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1039]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1039] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1040]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1040] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1041]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1041] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1042]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1042] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3165]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3165] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3166]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3166] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3167]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3167] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3168]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3168] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3169]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3169] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3170]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3170] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3171]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3171] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3172]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3172] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3173]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3173] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3174]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3174] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3175]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3175] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3176]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3176] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3177]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3177] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3178]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3178] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3179]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[3179] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		      <td class="al-left">- การซ่อมแซมระบบสื่อสารโทรคมนาคม</td>
		      <td><input class="span3"  name="Data[1050]" type="text" value="<?php echo $Data[1050]; ?>"></td>
		      <td><input class="span4"  name="Data[1051]" type="text" value="<?php echo $Data[1051]; ?>"></td>
		      <td><input type="checkbox" name="Data[1045]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1045] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1046]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1046] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1047]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1047] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1048]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1048] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1049]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1049] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3180]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3180] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3181]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3181] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3182]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3182] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3183]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3183] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3184]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3184] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3185]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3185] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3186]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3186] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3187]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3187] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3188]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3188] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3189]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3189] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3190]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3190] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3191]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3191] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3192]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3192] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3193]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3193] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3194]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[3194] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
	<!--
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.4.12  ระดับความรุนแรงด้านปัญหาเศรษฐกิจในชุมชน<span>(ให้เลือก 1 น้อยที่สุด - 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</span></h4></th>
		    </tr>
-->
			  <tr class="table-lv2">
		      <td class="h-line bgheadlv2"><h4 class="h-line">3.4.12  ระดับความรุนแรงด้านปัญหาเศรษฐกิจในชุมชน<span>(ให้เลือก 1 น้อยที่สุด - 5 มากที่สุด)</span></h4></td>
		      <td class="bgheadlv2"></td>
		      <td class="bgheadlv2"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		
		   
		    <tr>
		      <td class="al-left">1) ไม่มีผลกระทบสามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้</td>
		      <td><input type="radio" value="1" name="Webform[filter3]" <?php if ($Webform['filter3'] == '1'): ?> checked="checked" <?php endif; ?>></td>
					<td rowspan="5"><textarea name="Data[1769]" row="8"><?php echo $Data[1764]; ?></textarea></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="1" name="Data[1735]" <?php if ($Data[1735] == '1'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	
		    <tr>
		      <td class="al-left">2) ได้รับผลกระทบแต่สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้</td>
		      <td><input type="radio" value="2" name="Webform[filter3]" <?php if ($Webform['filter3'] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="2" name="Data[1735]" <?php if ($Data[1735] == '2'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	
		    <tr>
		      <td class="al-left">3) สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจ และอุตสาหกรรมสามารถดำเนินการต่อได้แต่ต้องการการสนับสนุนบางส่วน</td>
		      <td><input type="radio" value="3" name="Webform[filter3]" <?php if ($Webform['filter3'] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="3" name="Data[1735]" <?php if ($Data[1735] == '3'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>
		    <tr>
		      <td class="al-left">4) ไม่สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ การฟื้นฟูธุรกิจอุตสาหกรรมต้องใช้เวลาอย่างน้อย 3เดือนต้องการการสนับสนุน</td>
		      <td><input type="radio" value="4" name="Webform[filter3]" <?php if ($Webform['filter3'] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="4" name="Data[1735]" <?php if ($Data[1735] == '4'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	
		    <tr>
		      <td class="al-left">5) ไม่สามารถดำเนินกิจกรรมทางเศรษฐกิจใดๆได้ประชากรเกินครึ่งว่างงาน</td>
		      <td><input type="radio" value="5" name="Webform[filter3]" <?php if ($Webform['filter3'] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="radio" value="5" name="Data[1735]" <?php if ($Data[1735] == '5'): ?> checked="checked" <?php endif; ?>></td>
		    </tr>	
<!--
		    <tr>
		      <th colspan="8" class="table-lv1"><h3>3.5 ชุมชนมีการเตรียมการรับมือภัยพิบัติในอนาคต</h3></th>
		    </tr>
-->
			  <tr class="table-lv1">
		      <td class="h-line bgheadlv1"><h4 class="h-line">3.5 ชุมชนมีการเตรียมการรับมือภัยพิบัติในอนาคต</h4></td>
		      <td class="bgheadlv1"></td>
		      <td class="bgheadlv1"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>		
		    
		    <tr>
		      <td class="al-left">- จัดทำแผนรับมือภัยพิบัติ</td>
		      <td><input class="span3"  name="Data[1092]" type="text" value="<?php echo $Data[1092]; ?>"></td>
		      <td><input class="span4"  name="Data[1093]" type="text" value="<?php echo $Data[1093]; ?>"></td>
		      <td><input type="checkbox" name="Data[1087]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1087] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1088]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1088] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1089]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1089] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1090]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1090] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1091]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1091] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3195]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3195] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3196]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3196] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3197]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3197] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3198]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3198] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3199]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3199] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3200]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3200] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3201]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3201] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3202]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3202] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3203]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3203] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3204]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3204] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3205]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3205] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3206]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3206] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3207]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3207] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3208]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3208] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3209]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[3209] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- ฝึกซ้อมการรับมือภัยพิบัติ</td>
		      <td><input class="span3"  name="Data[1099]" type="text" value="<?php echo $Data[1099]; ?>"></td>
		      <td><input class="span4"  name="Data[1100]" type="text" value="<?php echo $Data[1100]; ?>"></td>
		      <td><input type="checkbox" name="Data[1094]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1094] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1095]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1095] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1096]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1096] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1097]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1097] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1098]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1098] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3210]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[3210] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3211]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[3211] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3212]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[3212] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3213]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[3213] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3214]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[3214] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>	    
		    <tr>
		      <td class="al-left">- ปรับปรุงระบบผังเมือง/ชุมชน</td>
		      <td><input class="span3"  name="Data[1106]" type="text" value="<?php echo $Data[1106]; ?>"></td>
		      <td><input class="span4"  name="Data[1107]" type="text" value="<?php echo $Data[1107]; ?>"></td>
		      <td><input type="checkbox" name="Data[1101]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1101] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1102]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1102] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1103]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1103] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1104]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1104] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1105]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1105] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3215]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3215] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3216]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3216] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3217]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3217] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3218]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3218] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3219]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3219] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3220]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3220] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3221]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3221] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3222]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3222] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3223]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3223] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3224]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3224] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3225]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3225] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3226]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3226] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3227]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3227] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3228]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3228] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3229]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[3229] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>
		    <tr>
		      <td class="al-left">- อื่น ๆ <input class="span3"  name="Data[1108]" type="text" value="<?php echo $Data[623]; ?>"></td>
		      <td><input class="span3"  name="Data[1114]" type="text" value="<?php echo $Data[1114]; ?>"></td>
		      <td><input class="span4"  name="Data[1115]" type="text" value="<?php echo $Data[1115]; ?>"></td>
		      <td><input type="checkbox" name="Data[1109]" value="อื่น ๆ" <?php if ($Data[1109] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1110]" value="อื่น ๆ" <?php if ($Data[1110] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1111]" value="อื่น ๆ" <?php if ($Data[1111] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1112]" value="อื่น ๆ" <?php if ($Data[1112] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[1113]" value="อื่น ๆ" <?php if ($Data[1113] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3230]" value="อื่น ๆ" <?php if ($Data[3230] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3231]" value="อื่น ๆ" <?php if ($Data[3231] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3232]" value="อื่น ๆ" <?php if ($Data[3232] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3233]" value="อื่น ๆ" <?php if ($Data[3233] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3234]" value="อื่น ๆ" <?php if ($Data[3234] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3235]" value="อื่น ๆ" <?php if ($Data[3235] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3236]" value="อื่น ๆ" <?php if ($Data[3236] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3237]" value="อื่น ๆ" <?php if ($Data[3237] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3238]" value="อื่น ๆ" <?php if ($Data[3238] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3239]" value="อื่น ๆ" <?php if ($Data[3239] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3240]" value="อื่น ๆ" <?php if ($Data[3240] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3241]" value="อื่น ๆ" <?php if ($Data[3241] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3242]" value="อื่น ๆ" <?php if ($Data[3242] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3243]" value="อื่น ๆ" <?php if ($Data[3243] == 'value'): ?> checked="checked" <?php endif; ?>></td>
		      <td><input type="checkbox" name="Data[3244]" value="อื่น ๆ" <?php if ($Data[3244] == 'value'): ?> checked="checked" <?php endif; ?>></td>

		    </tr>	    
		 

	  </tbody>
	</table>    
</fieldset>
<br /><br />   
  
  
  <!-- ส่วนที่ 4 การสำรวจศักยภาพและความต้องการของตำบล -->
      <fieldset title="การสำรวจศักยภาพและความต้องการของตำบล" class="info-faculty">
        <legend>ส่วนที่ 4 การสำรวจศักยภาพและความต้องการของตำบล</legend>
        <div class="clearfix">
        <h3>4.1 ด้านเครื่องมือ/อุปกรณ์</h3>
        <span class="help-block">*** กรุณาเติมคำตอบลงในช่องว่างทุกข้อ ถ้าไม่มีกรุณา  ( - ) ***</span>
        <table class="bordered-table center">
        <thead>
          <tr>
            <th colspan="1" rowspan="2" style="width: 300px;">ด้านเครื่องมือ / อุปกรณ์</th>
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
        <table class="bordered-table center">
        <thead>
          <tr>
            <th style="width: 300px;">ด้านสถานที่</th>
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
        <table class="bordered-table center">
        <thead>
          <tr>
            <th style="width: 300px;">ด้านอาหาร/ยารักษาโรค/เครื่องนุ่งห่ม</th>
            <th>เข้าถึงได้</th>
            <th>เข้าถึงไม่ได้</th>
            <th>ต้องการ<br />ความช่วยเหลือ</th>
            <th>ระดับความต้องการ<br />สนับสนุน (วัน)</th>
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
            <td><input class="span2" name="Data[477]" type="text" value="<?php echo $Data[477]; ?>"></td>
            <td><input class="span2" name="Data[478]" type="text" value="<?php echo $Data[478]; ?>"></td>
            <td><input class="span2" name="Data[479]" type="text" value="<?php echo $Data[479]; ?>"></td>
            <td><input class="span2" name="Data[480]" type="text" value="<?php echo $Data[480]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">1.2 ร้านขายของใช้และอาหารแห้ง<br />(ซูปเปอร์มาร์เก็ต โชห่วย)</th>
            <td><input class="span2" name="Data[481]" type="text" value="<?php echo $Data[481]; ?>"></td>
            <td><input class="span2" name="Data[482]" type="text" value="<?php echo $Data[482]; ?>"></td>
            <td><input class="span2" name="Data[483]" type="text" value="<?php echo $Data[483]; ?>"></td>
            <td><input class="span2" name="Data[484]" type="text" value="<?php echo $Data[484]; ?>"></td>
          </tr>     
          <tr>
            <th class="indent">1.3 ครัวเคลื่อนที่</th>
            <td><input class="span2" name="Data[485]" type="text" value="<?php echo $Data[485]; ?>"></td>
            <td><input class="span2" name="Data[486]" type="text" value="<?php echo $Data[486]; ?>"></td>
            <td><input class="span2" name="Data[487]" type="text" value="<?php echo $Data[487]; ?>"></td>
            <td><input class="span2" name="Data[488]" type="text" value="<?php echo $Data[488]; ?>"></td>
          </tr>    
          <tr>
            <th class="indent">1.4 เชื้อเพลิงที่ใช้ในการทำอาหาร</th>
            <td><input class="span2" name="Data[489]" type="text" value="<?php echo $Data[489]; ?>"></td>
            <td><input class="span2" name="Data[490]" type="text" value="<?php echo $Data[490]; ?>"></td>
            <td><input class="span2" name="Data[491]" type="text" value="<?php echo $Data[491]; ?>"></td>
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
            <td><input class="span2" name="Data[493]" type="text" value="<?php echo $Data[493]; ?>"></td>
            <td><input class="span2" name="Data[494]" type="text" value="<?php echo $Data[494]; ?>"></td>
            <td><input class="span2" name="Data[495]" type="text" value="<?php echo $Data[495]; ?>"></td>
            <td><input class="span2" name="Data[496]" type="text" value="<?php echo $Data[496]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">2.2 อุปโภค</th>
            <td><input class="span2" name="Data[497]" type="text" value="<?php echo $Data[497]; ?>"></td>
            <td><input class="span2" name="Data[498]" type="text" value="<?php echo $Data[498]; ?>"></td>
            <td><input class="span2" name="Data[499]" type="text" value="<?php echo $Data[499]; ?>"></td>
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
            <td><input class="span2" name="Data[501]" type="text" value="<?php echo $Data[501]; ?>"></td>
            <td><input class="span2" name="Data[502]" type="text" value="<?php echo $Data[502]; ?>"></td>
            <td><input class="span2" name="Data[503]" type="text" value="<?php echo $Data[503]; ?>"></td>
            <td><input class="span2" name="Data[504]" type="text" value="<?php echo $Data[504]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.2 บริการเคลื่อนที่ <br />(ระบุโดยหน่วยงาน <input class="span3" name="Data[505]" type="text" value="<?php echo $Data[505]; ?>">)</th>
            <td><input class="span2" name="Data[506]" type="text" value="<?php echo $Data[506]; ?>"></td>
            <td><input class="span2" name="Data[507]" type="text" value="<?php echo $Data[507]; ?>"></td>
            <td><input class="span2" name="Data[508]" type="text" value="<?php echo $Data[508]; ?>"></td>
            <td><input class="span2" name="Data[509]" type="text" value="<?php echo $Data[509]; ?>"></td>
          </tr>   
          <tr>
            <th class="indent">3.3 สถานีอนามัย/รพ.สต.</th>
            <td><input class="span2" name="Data[510]" type="text" value="<?php echo $Data[510]; ?>"></td>
            <td><input class="span2" name="Data[511]" type="text" value="<?php echo $Data[511]; ?>"></td>
            <td><input class="span2" name="Data[512]" type="text" value="<?php echo $Data[512]; ?>"></td>
            <td><input class="span2" name="Data[513]" type="text" value="<?php echo $Data[513]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">3.4 คลิกนิค/ร้านขายยา <br />(ระบุจำนวน <input class="span1" name="Data[514]" type="text" value="<?php echo $Data[514]; ?>"> ร้าน)</th>
            <td><input class="span2" name="Data[515]" type="text" value="<?php echo $Data[515]; ?>"></td>
            <td><input class="span2" name="Data[516]" type="text" value="<?php echo $Data[516]; ?>"></td>
            <td><input class="span2" name="Data[517]" type="text" value="<?php echo $Data[517]; ?>"></td>
            <td><input class="span2" name="Data[518]" type="text" value="<?php echo $Data[518]; ?>"></td>
          </tr>   
           <tr>
            <th class="indent">3.5 ศูนย์บริการสาธารณะสุข</th>
            <td><input class="span2" name="Data[519]" type="text" value="<?php echo $Data[519]; ?>"></td>
            <td><input class="span2" name="Data[520]" type="text" value="<?php echo $Data[520]; ?>"></td>
            <td><input class="span2" name="Data[521]" type="text" value="<?php echo $Data[521]; ?>"></td>
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
            <td><input class="span2" name="Data[523]" type="text" value="<?php echo $Data[523]; ?>"></td>
            <td><input class="span2" name="Data[524]" type="text" value="<?php echo $Data[524]; ?>"></td>
            <td><input class="span2" name="Data[525]" type="text" value="<?php echo $Data[525]; ?>"></td>
            <td><input class="span2" name="Data[526]" type="text" value="<?php echo $Data[526]; ?>"></td>
          </tr>          
          <tr>
            <th class="indent">4.2 ผ้าห่มและเครื่องนอน</th>
            <td><input class="span2" name="Data[527]" type="text" value="<?php echo $Data[527]; ?>"></td>
            <td><input class="span2" name="Data[528]" type="text" value="<?php echo $Data[528]; ?>"></td>
            <td><input class="span2" name="Data[529]" type="text" value="<?php echo $Data[529]; ?>"></td>
            <td><input class="span2" name="Data[530]" type="text" value="<?php echo $Data[530]; ?>"></td>
          </tr>     
          <tr>
            <th>5. ภูมิปัญญาท้องถิ่นที่สนับสนุน</th>
            <td><input class="span2" name="Data[531]" type="text" value="<?php echo $Data[531]; ?>"></td>
            <td><input class="span2" name="Data[532]" type="text" value="<?php echo $Data[532]; ?>"></td>
            <td><input class="span2" name="Data[533]" type="text" value="<?php echo $Data[533]; ?>"></td>
            <td><input class="span2" name="Data[534]" type="text" value="<?php echo $Data[534]; ?>"></td>
          </tr>
        </tbody>
      </table>      

      <h3>4.4 กิจกรรมที่ชุมชนคาดว่าจะทำแผนเพื่อขอรับการสนับสนุนจากเครือข่าย</h3>
        <table class="bordered-table center">
        <thead>
          <tr>
            <th style="width: 300px;">กิจกรรม</th>
            <th>กิจกรรมที่ชุมชนสามารถดำเนินการเองได้</th>
            <th>กิจกรรมที่ต้องการขอรับการสนับสนุน</th>
            <th>สิ่งที่ขอรับการสนับสนุน <br />(กรุณาเขียนระบุ)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. กิจกรรมการทำความสะอาดพื้นที่ <br />(Big Cleaning Day)</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[535]" <?php if ($Data[535] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[535]" <?php if ($Data[535] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[537]" type="text" value="<?php echo $Data[537]; ?>"></td>
          </tr>          
          <tr>
            <th>2. กิจกรรมการฝึกอบรบการผลิต <br />น้ำหมักจุลินทรีย์ (EM)</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[538]" <?php if ($Data[538] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[538]" <?php if ($Data[538] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[540]" type="text" value="<?php echo $Data[540]; ?>"></td>
          </tr>        
          <tr>
            <th>3. กิจกรรมการฝึกอบรมอาชีพ</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[541]" <?php if ($Data[541] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[541]" <?php if ($Data[541] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[543]" type="text" value="<?php echo $Data[543]; ?>"></td>
          </tr>  
          <tr>
            <th>4. กิจกรรมการจัดหาอาชีพเสริม</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[544]" <?php if ($Data[544] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[544]" <?php if ($Data[544] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[546]" type="text" value="<?php echo $Data[546]; ?>"></td>
          </tr>        
          <tr>
            <th>5. กิจกรรมการฟื้นฟูพื้นที่เกษตรกรรมขนาดเล็ก</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[547]"<?php if ($Data[547] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[547]" <?php if ($Data[547] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[549]" type="text" value="<?php echo $Data[549]; ?>"></td>
          </tr>  
          <tr>
            <th>6. การดูแลผู้ป่วย/ผู้พิการ</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[550]" <?php if ($Data[550] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[550]" <?php if ($Data[550] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[552]" type="text" value="<?php echo $Data[552]; ?>"></td>
          </tr>        
          <tr>
            <th>7. การดูแลสัตว์เลี้ยง</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[553]" <?php if ($Data[553] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[553]" <?php if ($Data[553] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[555]" type="text" value="<?php echo $Data[555]; ?>"></td>
          </tr>  
          <tr>
            <th>8. การจัดการบ้าน/ที่พักอาศัย</th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[556]" <?php if ($Data[556] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[556]" <?php if ($Data[556] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[558]]" type="text" value="<?php echo $Data[558]; ?>"></td>
          </tr>  
          <tr>
            <th>9. อื่นๆ ระบุ <input class="span3" name="Data[559]" type="text" value="<?php echo $Data[559]; ?>"></th>
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[560]" <?php if ($Data[560] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[560]" <?php if ($Data[560] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[562]" type="text" value="<?php echo $Data[562]; ?>"></td>
          </tr>  
        </tbody>
      </table>      
      </fidldset> <!-- /end ส่วนที่ 3 ศักยภาพและความต้องการของพื้นที่ -->
  
  
      <script type="text/javascript">
          $.getScript('/js/jquery.fixedheadertable.js', function() {
            $('.table-village-tb').fixedHeaderTable({ footer: false, fixedColumns: 0 , height: '300px'});
            $('.section3-table').fixedHeaderTable({ footer: false, fixedColumns: 3 , height: '600px'});
          });
      </script>
