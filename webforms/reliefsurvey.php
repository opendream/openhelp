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
	
	fieldset.section3 tbody tr td {padding: 5px;}
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

	fieldset.section3 .tabletwo input.span4 {margin-left: 0; margin-right: 0; width: 80px}
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

  td.h-line {height: 50px;}
  h3.h-line,  h4.h-line {position: absolute; }
  
 
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
      <?php $this->widget('ext.location.LocationWidget', array('model' => $model, 'attribute' => 'location_id')); ?>
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
  <fieldset title="การสํารวจเพื่อการฟื้นฟู" class="">
  <legend>ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู</legend>
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
		      <td class="h-line" style="width: 260px;"><div style="width: 260px;"><h3 class="h-line">3.1 ความเสียหายต่อชีวิต</h3></div></td>
		      <td style="width: 125px;"><div style="width: 125px;"></div></td>
		      <td style="width: 150px;"><div style="width: 150px;"></div></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td class="h-line"><h4 class="h-line">3.1.1 ผู้เสียหายต่อชีวิตและความปลอดภัย (ระบุจำนวน)</h4></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td>- เสียชีวิต</td>
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
		      <td>- สูญหาย</td>
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
		      <td>- บาดเจ็บ</td>
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
		      <td class="h-line"><h4 class="h-line">3.1.2 ปัจจัยเสี่ยงต่อความปลอดภัย</h4></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td>- โจรกรรม</td>
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
		      <td>- สัตว์ร้าย</td>
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
		      <td>- ไฟฟ้า</td>
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
		      <td>- ดินไหล/ถล่ม</td>
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
		      <td>- อื่นๆ <input class="span3"  name="Data[632]" type="text" value="<?php echo $Data[632]; ?>"></td>
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
		    
<!--
		    <tr>
		      <th colspan="8" class="table-lv1"><h3>3.2 สุขภาพ</h3></th>
		    </tr>
		    <tr>
		      <th colspan="8" class="table-lv2"><h4>3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้ (ระบุจำนวน)</h4></th>
		    </tr>
-->
		    <tr class="table-lv1">
		      <td class="h-line"><h3 class="h-line">3.2 สุขภาพ</h3></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td class="h-line"><h4 class="h-line">3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้ (ระบุจำนวน)</h4></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td>- คนพิการ</td>
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
		      <td>- ผู้สูงอายุ</td>
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
		      <td>- ผู้ป่วย</td>
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
		      <td>- เด็กทารก</td>
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
		      <td>- เด็กอายุต่ำกว่า 5 ขวบ</td>
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
		      <td>- ผู้ป่วยทางจิต</td>
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
		      <td class="h-line"><h4 class="h-line">3.2.2 ตรวจพบโรคระบาดในพื้นที่ในช่วงพิบัติ (ระบุโรคและจำนวนผู้ป่วย)</h4></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td>- โรค <input class="span3"  name="Data[62]" type="text" value="<?php echo $Data[62]; ?>"></td>
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
		      <td>- โรค <input class="span3"  name="Data[70]" type="text" value="<?php echo $Data[70]; ?>"></td>
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
		      <td>- โรค <input class="span3"  name="Data[1343]" type="text" value="<?php echo $Data[1343]; ?>"></td>
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
		      <td>- โรค <input class="span3"  name="Data[1299]" type="text" value="<?php echo $Data[1299]; ?>"></td>
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
		      <td>- โรค <input class="span3"  name="Data[1307]" type="text" value="<?php echo $Data[1307]; ?>"></td>
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
		      <td>- โรค <input class="span3"  name="Data[1315]" type="text" value="<?php echo $Data[1315]; ?>"></td>
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
		      <td class="h-line"><h4 class="h-line">3.2.3 ความลำบากในการเข้าถึงบริการทางด้านการแพทย์ (1 น้อยที่สุด - 5 มากที่สุด)</h4></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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
		      <td><div style="width: 260px;">1) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาน้อยกว่า 1 ชม.</strong></div></td>
		      <td><div style="width: 120px;"><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></div></td>
		      <td rowspan="5"><div style="width: 160px;"><textarea name="" row="8"></textarea></div></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="1) มีหน่วยพยาบาลในพื้นที่ มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาน้อยกว่า 1 ชม." name="" checked="checked"></td>

		    </tr>	
		    <tr>
		      <td><div style="width: 250px;">2) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></div></td>
		      <td><div style="width: 120px;"><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></div></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="2) มีหน่วยพยาบาลในพื้นที่มากกว่า 1หน่วย การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>

		    </tr>	 	        

		    <tr>
		      <td>3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
		      <td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาประมาณ 1 ชม." name="" checked="checked"></td>

		    </tr>	 


		    <tr>
		      <td>4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
		      <td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล ใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>

		    </tr>	 

		    <tr>
		      <td>5) <strong>ไม่มี</strong>หน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
		      <td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>
					<td><input type="radio" value="5) ไม่มีหน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาลใช้เวลาเกิน 1 ชม." name="" checked="checked"></td>

		    </tr>	

		    <tr class="table-lv2">
		      <td class="h-line"><h4 class="h-line">3.2.4 ระดับความเครียด และความกังวลของคนในชุมชน <span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด) </span></h4></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
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




	  </tbody>
	</table>    
</fieldset>
<br /><br />   
  
  
  <!-- ส่วนที่ 4 การสำรวจศักยภาพและความต้องการของตำบล -->
      <fieldset title="การสำรวจศักยภาพและความต้องการของตำบล" class="info-faculty">
        <legend>ส่วนที่ 4 การสำรวจศักยภาพและความต้องการของตำบล</legend>
        <div class="clearfix">
        <h3>4.1 ด้านเครื่องมือ/อุปกรณ์</h3>
        <span class="help-block">***กรุณาเติมคำตอบลงในช่องว่างทุกข้อ ถ้าไม่มีกรุณา  ( - )  ดังตัวอย่างข้างบนนี้ ***</span>
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
            <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[535]" <?php if ($Data[535] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[536]" <?php if ($Data[536] == 'value'): ?> checked="checked" <?php endif; ?>></td>
            <td><input class="span4" name="Data[537]" type="text" value="<?php echo $Data[537]; ?>"></td>
          </tr>          
          <tr>
            <th>2. กิจกรรมการฝึกอบรบการผลิต <br />น้ำหมักจุลินทรีย์ (EM)</th>
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
  
  
      <script type="text/javascript">
          $.getScript('/js/jquery.fixedheadertable.js', function() {
            $('.table-village-tb').fixedHeaderTable({ footer: false, fixedColumns: 0 , height: '300px'});
            $('.section3-table').fixedHeaderTable({ footer: false, fixedColumns: 3 , height: '1000px'});
          });
      </script>
