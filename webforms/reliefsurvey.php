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
	     .table-lv1 {background: #a3a3a3; padding: 0px; text-indent: 5px; color: #fff;}
	       .table-lv1 h3 {margin: 0;}
	     .table-lv2 {background: #c1c1c1; text-indent: 10px; padding: 0;}

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
	      <th scope="col" colspan="1" rowspan="2" style="width: 165px;">ประเด็นความเสียหาย</th>  
	      <th scope="col" colspan="1" rowspan="2" style="width: 100px;">สรุปรวม<br />(เพื่อเป็นภาพตำบล)</th>
	      <th scope="col" colspan="1" rowspan="2" style="width: 110px;">รายละเอียดเพิ่มเติม</th>
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

					    <tr>
					      <th colspan="8" class="table-lv1"><h3>3.1 ความเสียหายต่อชีวิต</h3></th>
					      
					    </tr>

					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.1.1 ผู้เสียหายต่อชีวิตและความปลอดภัย (ระบุจำนวน)</h4></th>
					    </tr>

					    <tr>
					      <td>- เสียชีวิต</td>
					      <td><input class="span2"  name="Data[567]" type="text" value="<?php echo $Data[567]; ?>"></td>
					      <td><input class="span4"  name="Data[568]" type="text" value="<?php echo $Data[568]; ?>"></td>
					      <td><input class="span1"  name="Data[47]" type="text" value="<?php echo $Data[47]; ?>"></td>
					      <td><input class="span1"  name="Data[563]" type="text" value="<?php echo $Data[563]; ?>"></td>
					      <td><input class="span1"  name="Data[564]" type="text" value="<?php echo $Data[564]; ?>"></td>
					      <td><input class="span1"  name="Data[565]" type="text" value="<?php echo $Data[565]; ?>"></td>
					      <td><input class="span1"  name="Data[566]" type="text" value="<?php echo $Data[566]; ?>"></td>

					    </tr>
					    <tr>
					      <td>- สูญหาย</td>
					      <td><input class="span2"  name="Data[574]" type="text" value="<?php echo $Data[574]; ?>"></td>
					      <td><input class="span4"  name="Data[575]" type="text" value="<?php echo $Data[575]; ?>"></td>
					      <td><input class="span1"  name="Data[569]" type="text" value="<?php echo $Data[569]; ?>"></td>
					      <td><input class="span1"  name="Data[570]" type="text" value="<?php echo $Data[570]; ?>"></td>
					      <td><input class="span1"  name="Data[571]" type="text" value="<?php echo $Data[571]; ?>"></td>
					      <td><input class="span1"  name="Data[572]" type="text" value="<?php echo $Data[572]; ?>"></td>
					      <td><input class="span1"  name="Data[573]" type="text" value="<?php echo $Data[573]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- บาดเจ็บ</td>
					      <td><input class="span2"  name="Data[581]" type="text" value="<?php echo $Data[581]; ?>"></td>
					      <td><input class="span4"  name="Data[582]" type="text" value="<?php echo $Data[582]; ?>"></td>
					      <td><input class="span1"  name="Data[576]" type="text" value="<?php echo $Data[576]; ?>"></td>
					      <td><input class="span1"  name="Data[577]" type="text" value="<?php echo $Data[577]; ?>"></td>
					      <td><input class="span1"  name="Data[578]" type="text" value="<?php echo $Data[578]; ?>"></td>
					      <td><input class="span1"  name="Data[579]" type="text" value="<?php echo $Data[579]; ?>"></td>
					      <td><input class="span1"  name="Data[580]" type="text" value="<?php echo $Data[580]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.1.2 ปัจจัยเสี่ยงต่อความปลอดภัย</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- โจรกรรม</td>
					      <td><input class="span2"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
					      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
					      <td><input type="checkbox" name="Data[604]" value="โจรกรรม" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[605]" value="โจรกรรม" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[606]" value="โจรกรรม" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[607]" value="โจรกรรม" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[608]" value="โจรกรรม" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- สัตว์ร้าย</td>
					      <td><input class="span2"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
					      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
					      <td><input type="checkbox" name="Data[611]" value="สัตว์ร้าย" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[612]" value="สัตว์ร้าย" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[613]" value="สัตว์ร้าย" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[614]" value="สัตว์ร้าย" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[615]" value="สัตว์ร้าย" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- ไฟฟ้า</td>
					      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
					      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>
					      <td><input type="checkbox" name="Data[618]" value="ไฟฟ้า" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[619]" value="ไฟฟ้า" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[620]" value="ไฟฟ้า" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[621]" value="ไฟฟ้า" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[622]" value="ไฟฟ้า" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- ดินไหล/ถล่ม</td>
					      <td><input class="span2"  name="Data[630]" type="text" value="<?php echo $Data[630]; ?>"></td>
					      <td><input class="span4"  name="Data[631]" type="text" value="<?php echo $Data[631]; ?>"></td>
					      <td><input type="checkbox" name="Data[625]" value="ดินไหล/ถล่ม" <?php if ($Data[625] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[626]" value="ดินไหล/ถล่ม" <?php if ($Data[626] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[627]" value="ดินไหล/ถล่ม" <?php if ($Data[627] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[628]" value="ดินไหล/ถล่ม" <?php if ($Data[628] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[629]" value="ดินไหล/ถล่ม" <?php if ($Data[629] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- อื่นๆ <input class="span3"  name="Data[632]" type="text" value="<?php echo $Data[632]; ?>"></td>
					      <td><input class="span2"  name="Data[638]" type="text" value="<?php echo $Data[638]; ?>"></td>
					      <td><input class="span4"  name="Data[639]" type="text" value="<?php echo $Data[639]; ?>"></td>
					      <td><input type="checkbox" name="Data[633]" value="อื่น ๆ" <?php if ($Data[633] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[634]" value="อื่น ๆ" <?php if ($Data[634] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[635]" value="อื่น ๆ" <?php if ($Data[635] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[636]" value="อื่น ๆ" <?php if ($Data[636] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[637]" value="อื่น ๆ" <?php if ($Data[637] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv1"><h3>3.2 สุขภาพ</h3></th>
					    </tr>
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.1 กลุ่มที่ช่วยเหลือตัวเองไม่ได้ (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- คนพิการ</td>
					      <td><input class="span2"  name="Data[645]" type="text" value="<?php echo $Data[645]; ?>"></td>
					      <td><input class="span4"  name="Data[646]" type="text" value="<?php echo $Data[646]; ?>"></td>
					      <td><input class="span1"  name="Data[640]" type="text" value="<?php echo $Data[640]; ?>"></td>
					      <td><input class="span1"  name="Data[641]" type="text" value="<?php echo $Data[641]; ?>"></td>
					      <td><input class="span1"  name="Data[642]" type="text" value="<?php echo $Data[642]; ?>"></td>
					      <td><input class="span1"  name="Data[643]" type="text" value="<?php echo $Data[643]; ?>"></td>
					      <td><input class="span1"  name="Data[644]" type="text" value="<?php echo $Data[644]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ผู้สูงอายุ</td>
					      <td><input class="span2"  name="Data[652]" type="text" value="<?php echo $Data[652]; ?>"></td>
					      <td><input class="span4"  name="Data[653]" type="text" value="<?php echo $Data[653]; ?>"></td>
					      <td><input class="span1"  name="Data[647]" type="text" value="<?php echo $Data[647]; ?>"></td>
					      <td><input class="span1"  name="Data[648]" type="text" value="<?php echo $Data[648]; ?>"></td>
					      <td><input class="span1"  name="Data[649]" type="text" value="<?php echo $Data[649]; ?>"></td>
					      <td><input class="span1"  name="Data[650]" type="text" value="<?php echo $Data[650]; ?>"></td>
					      <td><input class="span1"  name="Data[651]" type="text" value="<?php echo $Data[651]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ผู้ป่วย</td>
					      <td><input class="span2"  name="Data[53]" type="text" value="<?php echo $Data[53]; ?>"></td>
					      <td><input class="span4"  name="Data[54]" type="text" value="<?php echo $Data[54]; ?>"></td>
					      <td><input class="span1"  name="Data[48]" type="text" value="<?php echo $Data[48]; ?>"></td>
					      <td><input class="span1"  name="Data[49]" type="text" value="<?php echo $Data[49]; ?>"></td>
					      <td><input class="span1"  name="Data[50]" type="text" value="<?php echo $Data[50]; ?>"></td>
					      <td><input class="span1"  name="Data[51]" type="text" value="<?php echo $Data[51]; ?>"></td>
					      <td><input class="span1"  name="Data[52]" type="text" value="<?php echo $Data[52]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- เด็กทารก</td>
					      <td><input class="span2"  name="Data[60]" type="text" value="<?php echo $Data[60]; ?>"></td>
					      <td><input class="span4"  name="Data[61]" type="text" value="<?php echo $Data[61]; ?>"></td>
					      <td><input class="span1"  name="Data[55]" type="text" value="<?php echo $Data[55]; ?>"></td>
					      <td><input class="span1"  name="Data[56]" type="text" value="<?php echo $Data[56]; ?>"></td>
					      <td><input class="span1"  name="Data[57]" type="text" value="<?php echo $Data[57]; ?>"></td>
					      <td><input class="span1"  name="Data[58]" type="text" value="<?php echo $Data[58]; ?>"></td>
					      <td><input class="span1"  name="Data[59]" type="text" value="<?php echo $Data[59]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- เด็กอายุต่ำกว่า 5 ขวบ</td>
					      <td><input class="span2"  name="Data[588]" type="text" value="<?php echo $Data[588]; ?>"></td>
					      <td><input class="span4"  name="Data[589]" type="text" value="<?php echo $Data[589]; ?>"></td>
					      <td><input class="span1"  name="Data[583]" type="text" value="<?php echo $Data[583]; ?>"></td>
					      <td><input class="span1"  name="Data[584]" type="text" value="<?php echo $Data[584]; ?>"></td>
					      <td><input class="span1"  name="Data[585]" type="text" value="<?php echo $Data[585]; ?>"></td>
					      <td><input class="span1"  name="Data[586]" type="text" value="<?php echo $Data[586]; ?>"></td>
					      <td><input class="span1"  name="Data[587]" type="text" value="<?php echo $Data[587]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ผู้ป่วยทางจิต</td>
					      <td><input class="span2"  name="Data[595]" type="text" value="<?php echo $Data[595]; ?>"></td>
					      <td><input class="span4"  name="Data[596]" type="text" value="<?php echo $Data[596]; ?>"></td>
					      <td><input class="span1"  name="Data[590]" type="text" value="<?php echo $Data[590]; ?>"></td>
					      <td><input class="span1"  name="Data[591]" type="text" value="<?php echo $Data[591]; ?>"></td>
					      <td><input class="span1"  name="Data[592]" type="text" value="<?php echo $Data[592]; ?>"></td>
					      <td><input class="span1"  name="Data[593]" type="text" value="<?php echo $Data[593]; ?>"></td>
					      <td><input class="span1"  name="Data[594]" type="text" value="<?php echo $Data[594]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.2 ตรวจพบโรคระบาดในพื้นที่ในช่วงพิบัติ (ระบุโรคและจำนวนผู้ป่วย)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- โรค <input class="span3"  name="Data[62]" type="text" value="<?php echo $Data[62]; ?>"></td>
					      <td><input class="span2"  name="Data[68]" type="text" value="<?php echo $Data[68]; ?>"></td>
					      <td><input class="span4"  name="Data[69]" type="text" value="<?php echo $Data[69]; ?>"></td>
					      <td><input class="span1"  name="Data[63]" type="text" value="<?php echo $Data[63]; ?>"></td>
					      <td><input class="span1"  name="Data[64]" type="text" value="<?php echo $Data[64]; ?>"></td>
					      <td><input class="span1"  name="Data[65]" type="text" value="<?php echo $Data[65]; ?>"></td>
					      <td><input class="span1"  name="Data[66]" type="text" value="<?php echo $Data[66]; ?>"></td>
					      <td><input class="span1"  name="Data[67]" type="text" value="<?php echo $Data[67]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โรค <input class="span3"  name="Data[70]" type="text" value="<?php echo $Data[70]; ?>"></td>
					      <td><input class="span2"  name="Data[602]" type="text" value="<?php echo $Data[602]; ?>"></td>
					      <td><input class="span4"  name="Data[603]" type="text" value="<?php echo $Data[603]; ?>"></td>
					      <td><input class="span1"  name="Data[597]" type="text" value="<?php echo $Data[597]; ?>"></td>
					      <td><input class="span1"  name="Data[598]" type="text" value="<?php echo $Data[598]; ?>"></td>
					      <td><input class="span1"  name="Data[599]" type="text" value="<?php echo $Data[599]; ?>"></td>
					      <td><input class="span1"  name="Data[600]" type="text" value="<?php echo $Data[600]; ?>"></td>
					      <td><input class="span1"  name="Data[601]" type="text" value="<?php echo $Data[601]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <td>- โรค <input class="span3"  name="Data[1343]" type="text" value="<?php echo $Data[1343]; ?>"></td>
					      <td><input class="span2"  name="Data[1297]" type="text" value="<?php echo $Data[1297]; ?>"></td>
					      <td><input class="span4"  name="Data[1298]" type="text" value="<?php echo $Data[1298]; ?>"></td>
					      <td><input class="span1"  name="Data[1292]" type="text" value="<?php echo $Data[1292]; ?>"></td>
					      <td><input class="span1"  name="Data[1293]" type="text" value="<?php echo $Data[1293]; ?>"></td>
					      <td><input class="span1"  name="Data[1294]" type="text" value="<?php echo $Data[1294]; ?>"></td>
					      <td><input class="span1"  name="Data[1295]" type="text" value="<?php echo $Data[1295]; ?>"></td>
					      <td><input class="span1"  name="Data[1296]" type="text" value="<?php echo $Data[1296]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โรค <input class="span3"  name="Data[1299]" type="text" value="<?php echo $Data[1299]; ?>"></td>
					      <td><input class="span2"  name="Data[1305]" type="text" value="<?php echo $Data[1305]; ?>"></td>
					      <td><input class="span4"  name="Data[1306]" type="text" value="<?php echo $Data[1306]; ?>"></td>
					      <td><input class="span1"  name="Data[1300]" type="text" value="<?php echo $Data[1300]; ?>"></td>
					      <td><input class="span1"  name="Data[1301]" type="text" value="<?php echo $Data[1301]; ?>"></td>
					      <td><input class="span1"  name="Data[1302]" type="text" value="<?php echo $Data[1302]; ?>"></td>
					      <td><input class="span1"  name="Data[1303]" type="text" value="<?php echo $Data[1303]; ?>"></td>
					      <td><input class="span1"  name="Data[1304]" type="text" value="<?php echo $Data[1304]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โรค <input class="span3"  name="Data[1307]" type="text" value="<?php echo $Data[1307]; ?>"></td>
					      <td><input class="span2"  name="Data[1313]" type="text" value="<?php echo $Data[1313]; ?>"></td>
					      <td><input class="span4"  name="Data[1314]" type="text" value="<?php echo $Data[1314]; ?>"></td>
					      <td><input class="span1"  name="Data[1308]" type="text" value="<?php echo $Data[1308]; ?>"></td>
					      <td><input class="span1"  name="Data[1309]" type="text" value="<?php echo $Data[1309]; ?>"></td>
					      <td><input class="span1"  name="Data[1310]" type="text" value="<?php echo $Data[1310]; ?>"></td>
					      <td><input class="span1"  name="Data[1311]" type="text" value="<?php echo $Data[1311]; ?>"></td>
					      <td><input class="span1"  name="Data[1312]" type="text" value="<?php echo $Data[1312]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โรค <input class="span3"  name="Data[1315]" type="text" value="<?php echo $Data[1315]; ?>"></td>
					      <td><input class="span2"  name="Data[1321]" type="text" value="<?php echo $Data[1321]; ?>"></td>
					      <td><input class="span4"  name="Data[1322]" type="text" value="<?php echo $Data[1322]; ?>"></td>
					      <td><input class="span1"  name="Data[1316]" type="text" value="<?php echo $Data[1316]; ?>"></td>
					      <td><input class="span1"  name="Data[1317]" type="text" value="<?php echo $Data[1317]; ?>"></td>
					      <td><input class="span1"  name="Data[1318]" type="text" value="<?php echo $Data[1318]; ?>"></td>
					      <td><input class="span1"  name="Data[1319]" type="text" value="<?php echo $Data[1319]; ?>"></td>
					      <td><input class="span1"  name="Data[1320]" type="text" value="<?php echo $Data[1320]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.3 ความลำบากในการเข้าถึงบริการทางด้านการแพทย์ <strong>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</strong></h4></th>
					    </tr>
					   
					    <tr>
					      <td>1) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาน้อยกว่า 1 ชม.</strong></td>
					      <td><input class="span2"  name="Data[659]" type="text" value="<?php echo $Data[659]; ?>"></td>
					      <td><input class="span4"  name="Data[660]" type="text" value="<?php echo $Data[660]; ?>"></td>
					      <td><input class="span1"  name="Data[654]" type="text" value="<?php echo $Data[654]; ?>"></td>
					      <td><input class="span1"  name="Data[655]" type="text" value="<?php echo $Data[655]; ?>"></td>
					      <td><input class="span1"  name="Data[656]" type="text" value="<?php echo $Data[656]; ?>"></td>
					      <td><input class="span1"  name="Data[657]" type="text" value="<?php echo $Data[657]; ?>"></td>
					      <td><input class="span1"  name="Data[658]" type="text" value="<?php echo $Data[658]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>2) มีหน่วยพยาบาลในพื้นที่<strong>มากกว่า 1หน่วย</strong> การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
					      <td><input class="span2"  name="Data[666]" type="text" value="<?php echo $Data[666]; ?>"></td>
					      <td><input class="span4"  name="Data[667]" type="text" value="<?php echo $Data[667]; ?>"></td>
					      <td><input class="span1"  name="Data[661]" type="text" value="<?php echo $Data[661]; ?>"></td>
					      <td><input class="span1"  name="Data[662]" type="text" value="<?php echo $Data[662]; ?>"></td>
					      <td><input class="span1"  name="Data[663]" type="text" value="<?php echo $Data[663]; ?>"></td>
					      <td><input class="span1"  name="Data[664]" type="text" value="<?php echo $Data[664]; ?>"></td>
					      <td><input class="span1"  name="Data[665]" type="text" value="<?php echo $Data[665]; ?>"></td>
					    </tr>	 	        
					    <tr>
					      <td>3) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาประมาณ 1 ชม.</strong></td>
					      <td><input class="span2"  name="Data[673]" type="text" value="<?php echo $Data[673]; ?>"></td>
					      <td><input class="span4"  name="Data[674]" type="text" value="<?php echo $Data[674]; ?>"></td>
					      <td><input class="span1"  name="Data[668]" type="text" value="<?php echo $Data[668]; ?>"></td>
					      <td><input class="span1"  name="Data[669]" type="text" value="<?php echo $Data[669]; ?>"></td>
					      <td><input class="span1"  name="Data[670]" type="text" value="<?php echo $Data[670]; ?>"></td>
					      <td><input class="span1"  name="Data[671]" type="text" value="<?php echo $Data[671]; ?>"></td>
					      <td><input class="span1"  name="Data[672]" type="text" value="<?php echo $Data[672]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>4) มีหน่วยพยาบาลในพื้นที่ การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
					      <td><input class="span2"  name="Data[680]" type="text" value="<?php echo $Data[680]; ?>"></td>
					      <td><input class="span4"  name="Data[681]" type="text" value="<?php echo $Data[681]; ?>"></td>
					      <td><input class="span1"  name="Data[675]" type="text" value="<?php echo $Data[675]; ?>"></td>
					      <td><input class="span1"  name="Data[676]" type="text" value="<?php echo $Data[676]; ?>"></td>
					      <td><input class="span1"  name="Data[677]" type="text" value="<?php echo $Data[677]; ?>"></td>
					      <td><input class="span1"  name="Data[678]" type="text" value="<?php echo $Data[678]; ?>"></td>
					      <td><input class="span1"  name="Data[679]" type="text" value="<?php echo $Data[679]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>5) <strong>ไม่มี</strong>หน่วยพยาบาลในพื้นที่การเดินทางถึงโรงพยาบาล<strong>ใช้เวลาเกิน 1 ชม.</strong></td>
					      <td><input class="span2"  name="Data[687]" type="text" value="<?php echo $Data[687]; ?>"></td>
					      <td><input class="span4"  name="Data[688]" type="text" value="<?php echo $Data[688]; ?>"></td>
					      <td><input class="span1"  name="Data[682]" type="text" value="<?php echo $Data[682]; ?>"></td>
					      <td><input class="span1"  name="Data[683]" type="text" value="<?php echo $Data[683]; ?>"></td>
					      <td><input class="span1"  name="Data[684]" type="text" value="<?php echo $Data[684]; ?>"></td>
					      <td><input class="span1"  name="Data[685]" type="text" value="<?php echo $Data[685]; ?>"></td>
					      <td><input class="span1"  name="Data[686]" type="text" value="<?php echo $Data[686]; ?>"></td>
					    </tr>	 
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.4 ระดับความเครียด และความกังวลของคนในชุมชน <span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่) </span></h4></th>
					    </tr>
					   
					    <tr>
					      <td>1) ไม่พบประชาชนมีภาวะความเครียด</td>
					      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
					      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
					      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
					      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
					      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
					      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
					      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>2) พบประชาชนมีภาวะความเครียดแต่สามารถปรับตัวได้</td>
					      <td><input class="span2"  name="Data[701]" type="text" value="<?php echo $Data[701]; ?>"></td>
					      <td><input class="span4"  name="Data[702]" type="text" value="<?php echo $Data[702]; ?>"></td>
					      <td><input class="span1"  name="Data[696]" type="text" value="<?php echo $Data[696]; ?>"></td>
					      <td><input class="span1"  name="Data[697]" type="text" value="<?php echo $Data[697]; ?>"></td>
					      <td><input class="span1"  name="Data[698]" type="text" value="<?php echo $Data[698]; ?>"></td>
					      <td><input class="span1"  name="Data[699]" type="text" value="<?php echo $Data[699]; ?>"></td>
					      <td><input class="span1"  name="Data[700]" type="text" value="<?php echo $Data[700]; ?>"></td>
					    </tr>	 	        
					    <tr>
					      <td>3) พบประชาชนมีภาวะความเครียดและมีกรณีควบคุมสติไม่ได้</td>
					      <td><input class="span2"  name="Data[708]" type="text" value="<?php echo $Data[708]; ?>"></td>
					      <td><input class="span4"  name="Data[709]" type="text" value="<?php echo $Data[709]; ?>"></td>
					      <td><input class="span1"  name="Data[703]" type="text" value="<?php echo $Data[703]; ?>"></td>
					      <td><input class="span1"  name="Data[704]" type="text" value="<?php echo $Data[704]; ?>"></td>
					      <td><input class="span1"  name="Data[705]" type="text" value="<?php echo $Data[705]; ?>"></td>
					      <td><input class="span1"  name="Data[706]" type="text" value="<?php echo $Data[706]; ?>"></td>
					      <td><input class="span1"  name="Data[707]" type="text" value="<?php echo $Data[707]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>4) พบประชาชนมีภาวะความเครียดและมีความเสี่ยงฆ่าตัวตาย</td>
					      <td><input class="span2"  name="Data[715]" type="text" value="<?php echo $Data[715]; ?>"></td>
					      <td><input class="span4"  name="Data[716]" type="text" value="<?php echo $Data[716]; ?>"></td>
					      <td><input class="span1"  name="Data[710]" type="text" value="<?php echo $Data[710]; ?>"></td>
					      <td><input class="span1"  name="Data[711]" type="text" value="<?php echo $Data[711]; ?>"></td>
					      <td><input class="span1"  name="Data[712]" type="text" value="<?php echo $Data[712]; ?>"></td>
					      <td><input class="span1"  name="Data[713]" type="text" value="<?php echo $Data[713]; ?>"></td>
					      <td><input class="span1"  name="Data[714]" type="text" value="<?php echo $Data[714]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>5) พบประชาชนมีภาวะความเครียดและมีกรณีฆ่าตัวตายจากภาวะน้ำท่วม</td>
					      <td><input class="span2"  name="Data[722]" type="text" value="<?php echo $Data[722]; ?>"></td>
					      <td><input class="span4"  name="Data[723]" type="text" value="<?php echo $Data[723]; ?>"></td>
					      <td><input class="span1"  name="Data[717]" type="text" value="<?php echo $Data[717]; ?>"></td>
					      <td><input class="span1"  name="Data[718]" type="text" value="<?php echo $Data[718]; ?>"></td>
					      <td><input class="span1"  name="Data[719]" type="text" value="<?php echo $Data[719]; ?>"></td>
					      <td><input class="span1"  name="Data[720]" type="text" value="<?php echo $Data[720]; ?>"></td>
					      <td><input class="span1"  name="Data[721]" type="text" value="<?php echo $Data[721]; ?>"></td>
					    </tr>	 
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.5 กิจกรรมที่ชุมชนที่ต้องการการสนับสนุน</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้</td>
					      <td><input class="span2"  name="Data[609]" type="text" value="<?php echo $Data[609]; ?>"></td>
					      <td><input class="span4"  name="Data[610]" type="text" value="<?php echo $Data[610]; ?>"></td>
					      <td><input type="checkbox" name="Data[604]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[604] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[605]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[605] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[606]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[606] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[607]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[607] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[608]" value="การดูแลกลุ่มที่ช่วยเหลือตัวเองไม่ได้" <?php if ($Data[608] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- ป้องกันโรคระบาด</td>
					      <td><input class="span2"  name="Data[616]" type="text" value="<?php echo $Data[616]; ?>"></td>
					      <td><input class="span4"  name="Data[617]" type="text" value="<?php echo $Data[617]; ?>"></td>
					      <td><input type="checkbox" name="Data[611]" value="ป้องกันโรคระบาด" <?php if ($Data[611] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[612]" value="ป้องกันโรคระบาด" <?php if ($Data[612] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[613]" value="ป้องกันโรคระบาด" <?php if ($Data[613] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[614]" value="ป้องกันโรคระบาด" <?php if ($Data[614] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[615]" value="ป้องกันโรคระบาด" <?php if ($Data[615] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- เพิ่มบริการทางการแพทย์</td>
					      <td><input class="span2"  name="Data[623]" type="text" value="<?php echo $Data[623]; ?>"></td>
					      <td><input class="span4"  name="Data[624]" type="text" value="<?php echo $Data[624]; ?>"></td>	
					      <td><input type="checkbox" name="Data[618]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[618] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[619]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[619] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[620]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[620] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[621]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[621] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[622]" value="เพิ่มบริการทางการแพทย์" <?php if ($Data[622] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- ฟื้นฟูภาวะจิตใจคนในชุมชน</td>
					      <td><input class="span2"  name="Data[630]" type="text" value="<?php echo $Data[630]; ?>"></td>
					      <td><input class="span4"  name="Data[631]" type="text" value="<?php echo $Data[631]; ?>"></td>
					      <td><input type="checkbox" name="Data[625]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[625] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[626]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[626] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[627]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[627] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[628]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[628] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[629]" value="ฟื้นฟูภาวะจิตใจคนในชุมชน" <?php if ($Data[629] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.6 ความรุนแรงด้านปัญหาสุขภาพในชุมชนอยู่ในระดับ<span>(ให้เลือก 1 น้อยที่สุด- 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</span></h4></th>
					    </tr>
					   
					    <tr>
					      <td>1) ไม่มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้ ไม่มีโรคระบาด  มีบริการทางการแพทย์ และไม่มีความเครียดในชุมชน</td>
					      <td><input class="span2"  name="Data[694]" type="text" value="<?php echo $Data[694]; ?>"></td>
					      <td><input class="span4"  name="Data[695]" type="text" value="<?php echo $Data[695]; ?>"></td>
					      <td><input class="span1"  name="Data[689]" type="text" value="<?php echo $Data[689]; ?>"></td>
					      <td><input class="span1"  name="Data[690]" type="text" value="<?php echo $Data[690]; ?>"></td>
					      <td><input class="span1"  name="Data[691]" type="text" value="<?php echo $Data[691]; ?>"></td>
					      <td><input class="span1"  name="Data[692]" type="text" value="<?php echo $Data[692]; ?>"></td>
					      <td><input class="span1"  name="Data[693]" type="text" value="<?php echo $Data[693]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>2) มีปัญหาด้านการดูแล กลุ่มช่วยเหลือตัวเองไม่ได้  มีโรคระบาด มีบริการทางการแพทย์และมีความเครียดในชุมชนบ้างแต่ควบคุมได้</td>
					      <td><input class="span2"  name="Data[701]" type="text" value="<?php echo $Data[701]; ?>"></td>
					      <td><input class="span4"  name="Data[702]" type="text" value="<?php echo $Data[702]; ?>"></td>
					      <td><input class="span1"  name="Data[696]" type="text" value="<?php echo $Data[696]; ?>"></td>
					      <td><input class="span1"  name="Data[697]" type="text" value="<?php echo $Data[697]; ?>"></td>
					      <td><input class="span1"  name="Data[698]" type="text" value="<?php echo $Data[698]; ?>"></td>
					      <td><input class="span1"  name="Data[699]" type="text" value="<?php echo $Data[699]; ?>"></td>
					      <td><input class="span1"  name="Data[700]" type="text" value="<?php echo $Data[700]; ?>"></td>
					    </tr>	 	        
					    <tr>
					      <td>3) มีปัญหาด้านการดูแลกลุ่มช่วยเหลือตัวเองไม่ได้ มีโรคระบาด มีบริการทางการแพทย์และมีความเครียดในชุมชน และต้องการการสนับสนุนบางส่วน</td>
					      <td><input class="span2"  name="Data[708]" type="text" value="<?php echo $Data[708]; ?>"></td>
					      <td><input class="span4"  name="Data[709]" type="text" value="<?php echo $Data[709]; ?>"></td>
					      <td><input class="span1"  name="Data[703]" type="text" value="<?php echo $Data[703]; ?>"></td>
					      <td><input class="span1"  name="Data[704]" type="text" value="<?php echo $Data[704]; ?>"></td>
					      <td><input class="span1"  name="Data[705]" type="text" value="<?php echo $Data[705]; ?>"></td>
					      <td><input class="span1"  name="Data[706]" type="text" value="<?php echo $Data[706]; ?>"></td>
					      <td><input class="span1"  name="Data[707]" type="text" value="<?php echo $Data[707]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>4) มีปัญหาด้านบริการทางการแพทย์ในชุมชน และชุมชนต้องการการสนับสนุน</td>
					      <td><input class="span2"  name="Data[715]" type="text" value="<?php echo $Data[715]; ?>"></td>
					      <td><input class="span4"  name="Data[716]" type="text" value="<?php echo $Data[716]; ?>"></td>
					      <td><input class="span1"  name="Data[710]" type="text" value="<?php echo $Data[710]; ?>"></td>
					      <td><input class="span1"  name="Data[711]" type="text" value="<?php echo $Data[711]; ?>"></td>
					      <td><input class="span1"  name="Data[712]" type="text" value="<?php echo $Data[712]; ?>"></td>
					      <td><input class="span1"  name="Data[713]" type="text" value="<?php echo $Data[713]; ?>"></td>
					      <td><input class="span1"  name="Data[714]" type="text" value="<?php echo $Data[714]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>5) มีปัญหาด้านโรคระบาดและบริการทางการแพทย์ในชุมชน  และชุมชนต้องการการสนับสนุนเร่งด่วน</td>
					      <td><input class="span2"  name="Data[722]" type="text" value="<?php echo $Data[722]; ?>"></td>
					      <td><input class="span4"  name="Data[723]" type="text" value="<?php echo $Data[723]; ?>"></td>
					      <td><input class="span1"  name="Data[717]" type="text" value="<?php echo $Data[717]; ?>"></td>
					      <td><input class="span1"  name="Data[718]" type="text" value="<?php echo $Data[718]; ?>"></td>
					      <td><input class="span1"  name="Data[719]" type="text" value="<?php echo $Data[719]; ?>"></td>
					      <td><input class="span1"  name="Data[720]" type="text" value="<?php echo $Data[720]; ?>"></td>
					      <td><input class="span1"  name="Data[721]" type="text" value="<?php echo $Data[721]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv1"><h3>3.3  สภาพแวดล้อมที่ได้รับผลกระทบ</h3></th>
					    </tr>
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.2.1 ที่อยู่อาศัย (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ที่อยู่อาศัยได้รับความเสียหาย</td>
					      <td><input class="span2"  name="Data[78]" type="text" value="<?php echo $Data[78]; ?>"></td>
					      <td><input class="span4"  name="Data[79]" type="text" value="<?php echo $Data[79]; ?>"></td>
					      <td><input class="span1"  name="Data[73]" type="text" value="<?php echo $Data[73]; ?>"></td>
					      <td><input class="span1"  name="Data[74]" type="text" value="<?php echo $Data[74]; ?>"></td>
					      <td><input class="span1"  name="Data[75]" type="text" value="<?php echo $Data[75]; ?>"></td>
					      <td><input class="span1"  name="Data[76]" type="text" value="<?php echo $Data[76]; ?>"></td>
					      <td><input class="span1"  name="Data[77]" type="text" value="<?php echo $Data[77]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- บริเวณบ้านที่ได้รับความเสียหาย</td>
					      <td><input class="span2"  name="Data[726]" type="text" value="<?php echo $Data[726]; ?>"></td>
					      <td><input class="span4"  name="Data[727]" type="text" value="<?php echo $Data[727]; ?>"></td>	
					      <td><input class="span1"  name="Data[80]" type="text" value="<?php echo $Data[80]; ?>"></td>
					      <td><input class="span1"  name="Data[81]" type="text" value="<?php echo $Data[81]; ?>"></td>
					      <td><input class="span1"  name="Data[82]" type="text" value="<?php echo $Data[82]; ?>"></td>
					      <td><input class="span1"  name="Data[724]" type="text" value="<?php echo $Data[724]; ?>"></td>
					      <td><input class="span1"  name="Data[725]" type="text" value="<?php echo $Data[725]; ?>"></td>
					    </tr>	    	
					    	    	    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.2 สิ่งสาธารณะประโยชน์ของชุมชน (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ถนนชำรุด (สาย)</td>
					      <td><input class="span2"  name="Data[733]" type="text" value="<?php echo $Data[733]; ?>"></td>
					      <td><input class="span4"  name="Data[734]" type="text" value="<?php echo $Data[734]; ?>"></td>	
					      <td><input class="span1"  name="Data[728]" type="text" value="<?php echo $Data[728]; ?>"></td>
					      <td><input class="span1"  name="Data[729]" type="text" value="<?php echo $Data[729]; ?>"></td>
					      <td><input class="span1"  name="Data[730]" type="text" value="<?php echo $Data[730]; ?>"></td>
					      <td><input class="span1"  name="Data[731]" type="text" value="<?php echo $Data[731]; ?>"></td>
					      <td><input class="span1"  name="Data[732]" type="text" value="<?php echo $Data[732]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- สถานีขนส่งทางบก</td>
					      <td><input class="span2"  name="Data[740]" type="text" value="<?php echo $Data[740]; ?>"></td>
					      <td><input class="span4"  name="Data[741]" type="text" value="<?php echo $Data[741]; ?>"></td>
					      <td><input class="span1"  name="Data[735]" type="text" value="<?php echo $Data[735]; ?>"></td>
					      <td><input class="span1"  name="Data[736]" type="text" value="<?php echo $Data[736]; ?>"></td>
					      <td><input class="span1"  name="Data[737]" type="text" value="<?php echo $Data[737]; ?>"></td>
					      <td><input class="span1"  name="Data[738]" type="text" value="<?php echo $Data[738]; ?>"></td>
					      <td><input class="span1"  name="Data[739]" type="text" value="<?php echo $Data[739]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>- สถานีขนส่งทางน้ำ</td>
					      <td><input class="span2"  name="Data[747]" type="text" value="<?php echo $Data[747]; ?>"></td>
					      <td><input class="span4"  name="Data[748]" type="text" value="<?php echo $Data[748]; ?>"></td>
					      <td><input class="span1"  name="Data[742]" type="text" value="<?php echo $Data[742]; ?>"></td>
					      <td><input class="span1"  name="Data[743]" type="text" value="<?php echo $Data[743]; ?>"></td>
					      <td><input class="span1"  name="Data[744]" type="text" value="<?php echo $Data[744]; ?>"></td>
					      <td><input class="span1"  name="Data[745]" type="text" value="<?php echo $Data[745]; ?>"></td>
					      <td><input class="span1"  name="Data[746]" type="text" value="<?php echo $Data[746]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ศาลาที่พักผู้โดยสาร</td>
					      <td><input class="span2"  name="Data[754]" type="text" value="<?php echo $Data[754]; ?>"></td>
					      <td><input class="span4"  name="Data[755]" type="text" value="<?php echo $Data[755]; ?>"></td>
					      <td><input class="span1"  name="Data[749]" type="text" value="<?php echo $Data[749]; ?>"></td>
					      <td><input class="span1"  name="Data[750]" type="text" value="<?php echo $Data[750]; ?>"></td>
					      <td><input class="span1"  name="Data[751]" type="text" value="<?php echo $Data[751]; ?>"></td>
					      <td><input class="span1"  name="Data[752]" type="text" value="<?php echo $Data[752]; ?>"></td>
					      <td><input class="span1"  name="Data[753]" type="text" value="<?php echo $Data[753]; ?>"></td>
					    </tr>	    
					    <tr>
					      <td>- ตลิ่ง (แห่ง)</td>
					      <td><input class="span2"  name="Data[761]" type="text" value="<?php echo $Data[761]; ?>"></td>
					      <td><input class="span4"  name="Data[762]" type="text" value="<?php echo $Data[762]; ?>"></td>
					      <td><input class="span1"  name="Data[756]" type="text" value="<?php echo $Data[756]; ?>"></td>
					      <td><input class="span1"  name="Data[757]" type="text" value="<?php echo $Data[757]; ?>"></td>
					      <td><input class="span1"  name="Data[758]" type="text" value="<?php echo $Data[758]; ?>"></td>
					      <td><input class="span1"  name="Data[759]" type="text" value="<?php echo $Data[759]; ?>"></td>
					      <td><input class="span1"  name="Data[760]" type="text" value="<?php echo $Data[760]; ?>"></td>
					    </tr>	  
					    <tr>
					      <td>- เสาไฟฟ้าหมู่บ้าน (ต้น)</td>
					      <td><input class="span2"  name="Data[768]" type="text" value="<?php echo $Data[768]; ?>"></td>
					      <td><input class="span4"  name="Data[769]" type="text" value="<?php echo $Data[769]; ?>"></td>
					      <td><input class="span1"  name="Data[763]" type="text" value="<?php echo $Data[763]; ?>"></td>
					      <td><input class="span1"  name="Data[764]" type="text" value="<?php echo $Data[764]; ?>"></td>
					      <td><input class="span1"  name="Data[765]" type="text" value="<?php echo $Data[765]; ?>"></td>
					      <td><input class="span1"  name="Data[766]" type="text" value="<?php echo $Data[766]; ?>"></td>
					      <td><input class="span1"  name="Data[767]" type="text" value="<?php echo $Data[767]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- หม้อแปลง (หม้อ)</td>
					      <td><input class="span2"  name="Data[775]" type="text" value="<?php echo $Data[775]; ?>"></td>
					      <td><input class="span4"  name="Data[776]" type="text" value="<?php echo $Data[776]; ?>"></td>
					      <td><input class="span1"  name="Data[770]" type="text" value="<?php echo $Data[770]; ?>"></td>
					      <td><input class="span1"  name="Data[771]" type="text" value="<?php echo $Data[771]; ?>"></td>
					      <td><input class="span1"  name="Data[772]" type="text" value="<?php echo $Data[772]; ?>"></td>
					      <td><input class="span1"  name="Data[773]" type="text" value="<?php echo $Data[773]; ?>"></td>
					      <td><input class="span1"  name="Data[774]" type="text" value="<?php echo $Data[774]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อื่น ๆ (โปรดระบุ) <input class="span3"  name="Data[777]" type="text" value="<?php echo $Data[777]; ?>"></td>
					      <td><input class="span2"  name="Data[783]" type="text" value="<?php echo $Data[783]; ?>"></td>
					      <td><input class="span4"  name="Data[784]" type="text" value="<?php echo $Data[784]; ?>"></td>
					      <td><input class="span1"  name="Data[778]" type="text" value="<?php echo $Data[778]; ?>"></td>
					      <td><input class="span1"  name="Data[779]" type="text" value="<?php echo $Data[779]; ?>"></td>
					      <td><input class="span1"  name="Data[780]" type="text" value="<?php echo $Data[780]; ?>"></td>
					      <td><input class="span1"  name="Data[781]" type="text" value="<?php echo $Data[781]; ?>"></td>
					      <td><input class="span1"  name="Data[782]" type="text" value="<?php echo $Data[782]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.4 อาคารสาธารณะของชุมชน  (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ศาลาประชาคม</td>
					      <td><input class="span2"  name="Data[790]" type="text" value="<?php echo $Data[790]; ?>"></td>
					      <td><input class="span4"  name="Data[791]" type="text" value="<?php echo $Data[791]; ?>"></td>
					      <td><input class="span1"  name="Data[785]" type="text" value="<?php echo $Data[785]; ?>"></td>
					      <td><input class="span1"  name="Data[786]" type="text" value="<?php echo $Data[786]; ?>"></td>
					      <td><input class="span1"  name="Data[787]" type="text" value="<?php echo $Data[787]; ?>"></td>
					      <td><input class="span1"  name="Data[788]" type="text" value="<?php echo $Data[788]; ?>"></td>
					      <td><input class="span1"  name="Data[789]" type="text" value="<?php echo $Data[789]; ?>"></td>

					    </tr>
					    <tr>
					      <td>- ศาลาเอนกประสงค์</td>
					      <td><input class="span2"  name="Data[797]" type="text" value="<?php echo $Data[797]; ?>"></td>
					      <td><input class="span4"  name="Data[798]" type="text" value="<?php echo $Data[798]; ?>"></td>
					      <td><input class="span1"  name="Data[792]" type="text" value="<?php echo $Data[792]; ?>"></td>
					      <td><input class="span1"  name="Data[793]" type="text" value="<?php echo $Data[793]; ?>"></td>
					      <td><input class="span1"  name="Data[794]" type="text" value="<?php echo $Data[794]; ?>"></td>
					      <td><input class="span1"  name="Data[795]" type="text" value="<?php echo $Data[795]; ?>"></td>
					      <td><input class="span1"  name="Data[796]" type="text" value="<?php echo $Data[796]; ?>"></td>
					    </tr>	 
					    <tr>
					      <td>- ลานกีฬา</td>
					      <td><input class="span2"  name="Data[805]" type="text" value="<?php echo $Data[805]; ?>"></td>
					      <td><input class="span4"  name="Data[806]" type="text" value="<?php echo $Data[806]; ?>"></td>	
					      <td><input class="span1"  name="Data[799]" type="text" value="<?php echo $Data[799]; ?>"></td>
					      <td><input class="span1"  name="Data[800]" type="text" value="<?php echo $Data[801]; ?>"></td>
					      <td><input class="span1"  name="Data[802]" type="text" value="<?php echo $Data[802]; ?>"></td>
					      <td><input class="span1"  name="Data[803]" type="text" value="<?php echo $Data[803]; ?>"></td>
					      <td><input class="span1"  name="Data[804]" type="text" value="<?php echo $Data[804]; ?>"></td>

					    </tr>
					    <tr>
					      <td>- อื่น ๆ(โปรดระบุ) <input class="span3"  name="Data[807]" type="text" value="<?php echo $Data[807]; ?>"></td>
					      <td><input class="span2"  name="Data[813]" type="text" value="<?php echo $Data[813]; ?>"></td>
					      <td><input class="span4"  name="Data[814]" type="text" value="<?php echo $Data[814]; ?>"></td>
					      <td><input class="span1"  name="Data[808]" type="text" value="<?php echo $Data[808]; ?>"></td>
					      <td><input class="span1"  name="Data[809]" type="text" value="<?php echo $Data[809]; ?>"></td>
					      <td><input class="span1"  name="Data[810]" type="text" value="<?php echo $Data[810]; ?>"></td>
					      <td><input class="span1"  name="Data[811]" type="text" value="<?php echo $Data[811]; ?>"></td>
					      <td><input class="span1"  name="Data[812]" type="text" value="<?php echo $Data[812]; ?>"></td>
					    </tr>	
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.5 ศาสนสถาน (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- วัด</td>
					      <td><input class="span2"  name="Data[820]" type="text" value="<?php echo $Data[820]; ?>"></td>
					      <td><input class="span4"  name="Data[821]" type="text" value="<?php echo $Data[821]; ?>"></td>
					      <td><input class="span1"  name="Data[815]" type="text" value="<?php echo $Data[815]; ?>"></td>
					      <td><input class="span1"  name="Data[816]" type="text" value="<?php echo $Data[816]; ?>"></td>
					      <td><input class="span1"  name="Data[817]" type="text" value="<?php echo $Data[817]; ?>"></td>
					      <td><input class="span1"  name="Data[818]" type="text" value="<?php echo $Data[818]; ?>"></td>
					      <td><input class="span1"  name="Data[819]" type="text" value="<?php echo $Data[819]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- มัสยิด</td>
					      <td><input class="span2"  name="Data[827]" type="text" value="<?php echo $Data[827]; ?>"></td>
					      <td><input class="span4"  name="Data[828]" type="text" value="<?php echo $Data[828]; ?>"></td>
					      <td><input class="span1"  name="Data[822]" type="text" value="<?php echo $Data[822]; ?>"></td>
					      <td><input class="span1"  name="Data[823]" type="text" value="<?php echo $Data[823]; ?>"></td>
					      <td><input class="span1"  name="Data[824]" type="text" value="<?php echo $Data[824]; ?>"></td>
					      <td><input class="span1"  name="Data[825]" type="text" value="<?php echo $Data[825]; ?>"></td>
					      <td><input class="span1"  name="Data[826]" type="text" value="<?php echo $Data[826]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โบสถ์คริสต์</td>
					      <td><input class="span2"  name="Data[834]" type="text" value="<?php echo $Data[834]; ?>"></td>
					      <td><input class="span4"  name="Data[835]" type="text" value="<?php echo $Data[836]; ?>"></td>
					      <td><input class="span1"  name="Data[829]" type="text" value="<?php echo $Data[829]; ?>"></td>
					      <td><input class="span1"  name="Data[830]" type="text" value="<?php echo $Data[830]; ?>"></td>
					      <td><input class="span1"  name="Data[831]" type="text" value="<?php echo $Data[831]; ?>"></td>
					      <td><input class="span1"  name="Data[832]" type="text" value="<?php echo $Data[832]; ?>"></td>
					      <td><input class="span1"  name="Data[833]" type="text" value="<?php echo $Data[833]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โบราณสถาน</td>
					      <td><input class="span2"  name="Data[842]" type="text" value="<?php echo $Data[842]; ?>"></td>
					      <td><input class="span4"  name="Data[843]" type="text" value="<?php echo $Data[843]; ?>"></td>
					      <td><input class="span1"  name="Data[837]" type="text" value="<?php echo $Data[837]; ?>"></td>
					      <td><input class="span1"  name="Data[838]" type="text" value="<?php echo $Data[838]; ?>"></td>
					      <td><input class="span1"  name="Data[839]" type="text" value="<?php echo $Data[839]; ?>"></td>
					      <td><input class="span1"  name="Data[840]" type="text" value="<?php echo $Data[840]; ?>"></td>
					      <td><input class="span1"  name="Data[841]" type="text" value="<?php echo $Data[841]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อื่น ๆ(โปรดระบุ) <input class="span3"  name="Data[844]" type="text" value="<?php echo $Data[844]; ?>"></td>
					      <td><input class="span2"  name="Data[850]" type="text" value="<?php echo $Data[850]; ?>"></td>
					      <td><input class="span4"  name="Data[851]" type="text" value="<?php echo $Data[851]; ?>"></td>
					      <td><input class="span1"  name="Data[845]" type="text" value="<?php echo $Data[845]; ?>"></td>
					      <td><input class="span1"  name="Data[846]" type="text" value="<?php echo $Data[846]; ?>"></td>
					      <td><input class="span1"  name="Data[847]" type="text" value="<?php echo $Data[847]; ?>"></td>
					      <td><input class="span1"  name="Data[848]" type="text" value="<?php echo $Data[848]; ?>"></td>
					      <td><input class="span1"  name="Data[849]" type="text" value="<?php echo $Data[849]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.6 สถานที่ราชการ (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- สำนักงานอปท.</td>
					      <td><input class="span2"  name="Data[857]" type="text" value="<?php echo $Data[857]; ?>"></td>
					      <td><input class="span4"  name="Data[858]" type="text" value="<?php echo $Data[858]; ?>"></td>
					      <td><input class="span1"  name="Data[852]" type="text" value="<?php echo $Data[852]; ?>"></td>
					      <td><input class="span1"  name="Data[853]" type="text" value="<?php echo $Data[853]; ?>"></td>
					      <td><input class="span1"  name="Data[854]" type="text" value="<?php echo $Data[854]; ?>"></td>
					      <td><input class="span1"  name="Data[855]" type="text" value="<?php echo $Data[855]; ?>"></td>
					      <td><input class="span1"  name="Data[856]" type="text" value="<?php echo $Data[856]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ที่ว่าการอำเภอ</td>
					      <td><input class="span2"  name="Data[864]" type="text" value="<?php echo $Data[864]; ?>"></td>
					      <td><input class="span4"  name="Data[865]" type="text" value="<?php echo $Data[865]; ?>"></td>
					      <td><input class="span1"  name="Data[859]" type="text" value="<?php echo $Data[859]; ?>"></td>
					      <td><input class="span1"  name="Data[860]" type="text" value="<?php echo $Data[860]; ?>"></td>
					      <td><input class="span1"  name="Data[861]" type="text" value="<?php echo $Data[861]; ?>"></td>
					      <td><input class="span1"  name="Data[862]" type="text" value="<?php echo $Data[862]; ?>"></td>
					      <td><input class="span1"  name="Data[863]" type="text" value="<?php echo $Data[863]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- สถานีตำรวจ</td>
					      <td><input class="span2"  name="Data[871]" type="text" value="<?php echo $Data[871]; ?>"></td>
					      <td><input class="span4"  name="Data[872]" type="text" value="<?php echo $Data[872]; ?>"></td>					      
					      <td><input class="span1"  name="Data[866]" type="text" value="<?php echo $Data[866]; ?>"></td>
					      <td><input class="span1"  name="Data[867]" type="text" value="<?php echo $Data[867]; ?>"></td>
					      <td><input class="span1"  name="Data[868]" type="text" value="<?php echo $Data[868]; ?>"></td>
					      <td><input class="span1"  name="Data[869]" type="text" value="<?php echo $Data[869]; ?>"></td>
					      <td><input class="span1"  name="Data[870]" type="text" value="<?php echo $Data[870]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- รพ.สต.</td>
					      <td><input class="span2"  name="Data[878]" type="text" value="<?php echo $Data[878]; ?>"></td>
					      <td><input class="span4"  name="Data[879]" type="text" value="<?php echo $Data[879]; ?>"></td>
					      <td><input class="span1"  name="Data[873]" type="text" value="<?php echo $Data[873]; ?>"></td>
					      <td><input class="span1"  name="Data[874]" type="text" value="<?php echo $Data[874]; ?>"></td>
					      <td><input class="span1"  name="Data[875]" type="text" value="<?php echo $Data[875]; ?>"></td>
					      <td><input class="span1"  name="Data[876]" type="text" value="<?php echo $Data[876]; ?>"></td>
					      <td><input class="span1"  name="Data[877]" type="text" value="<?php echo $Data[877]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โรงพยาบาล</td>
					      <td><input class="span2"  name="Data[885]" type="text" value="<?php echo $Data[885]; ?>"></td>
					      <td><input class="span4"  name="Data[886]" type="text" value="<?php echo $Data[886]; ?>"></td>
					      <td><input class="span1"  name="Data[880]" type="text" value="<?php echo $Data[880]; ?>"></td>
					      <td><input class="span1"  name="Data[881]" type="text" value="<?php echo $Data[881]; ?>"></td>
					      <td><input class="span1"  name="Data[882]" type="text" value="<?php echo $Data[882]; ?>"></td>
					      <td><input class="span1"  name="Data[883]" type="text" value="<?php echo $Data[883]; ?>"></td>
					      <td><input class="span1"  name="Data[884]" type="text" value="<?php echo $Data[884]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- โรงเรียน</td>
					      <td><input class="span2"  name="Data[892]" type="text" value="<?php echo $Data[892]; ?>"></td>
					      <td><input class="span4"  name="Data[893]" type="text" value="<?php echo $Data[893]; ?>"></td>
					      <td><input class="span1"  name="Data[887]" type="text" value="<?php echo $Data[887]; ?>"></td>
					      <td><input class="span1"  name="Data[888]" type="text" value="<?php echo $Data[888]; ?>"></td>
					      <td><input class="span1"  name="Data[889]" type="text" value="<?php echo $Data[889]; ?>"></td>
					      <td><input class="span1"  name="Data[890]" type="text" value="<?php echo $Data[890]; ?>"></td>
					      <td><input class="span1"  name="Data[891]" type="text" value="<?php echo $Data[891]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ศูนย์พัฒนาเด็กเล็ก</td>
					      <td><input class="span2"  name="Data[899]" type="text" value="<?php echo $Data[900]; ?>"></td>
					      <td><input class="span4"  name="Data[901]" type="text" value="<?php echo $Data[901]; ?>"></td>
					      <td><input class="span1"  name="Data[894]" type="text" value="<?php echo $Data[894]; ?>"></td>
					      <td><input class="span1"  name="Data[895]" type="text" value="<?php echo $Data[895]; ?>"></td>
					      <td><input class="span1"  name="Data[896]" type="text" value="<?php echo $Data[896]; ?>"></td>
					      <td><input class="span1"  name="Data[897]" type="text" value="<?php echo $Data[897]; ?>"></td>
					      <td><input class="span1"  name="Data[898]" type="text" value="<?php echo $Data[898]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อื่น ๆ (โปรดระบุ) <input class="span3"  name="Data[902]" type="text" value="<?php echo $Data[902]; ?>"></td>
					      <td><input class="span2"  name="Data[908]" type="text" value="<?php echo $Data[908]; ?>"></td>
					      <td><input class="span4"  name="Data[909]" type="text" value="<?php echo $Data[909]; ?>"></td>
					      <td><input class="span1"  name="Data[903]" type="text" value="<?php echo $Data[903]; ?>"></td>
					      <td><input class="span1"  name="Data[904]" type="text" value="<?php echo $Data[904]; ?>"></td>
					      <td><input class="span1"  name="Data[905]" type="text" value="<?php echo $Data[905]; ?>"></td>
					      <td><input class="span1"  name="Data[906]" type="text" value="<?php echo $Data[906]; ?>"></td>
					      <td><input class="span1"  name="Data[907]" type="text" value="<?php echo $Data[907]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.7 สถานที่ท่องเที่ยว (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ระบุ <input class="span3"  name="Data[910]" type="text" value="<?php echo $Data[910]; ?>"></td>
					      <td><input class="span2"  name="Data[916]" type="text" value="<?php echo $Data[916]; ?>"></td>
					      <td><input class="span4"  name="Data[917]" type="text" value="<?php echo $Data[917]; ?>"></td>
					      <td><input class="span1"  name="Data[911]" type="text" value="<?php echo $Data[911]; ?>"></td>
					      <td><input class="span1"  name="Data[912]" type="text" value="<?php echo $Data[912]; ?>"></td>
					      <td><input class="span1"  name="Data[913]" type="text" value="<?php echo $Data[913]; ?>"></td>
					      <td><input class="span1"  name="Data[914]" type="text" value="<?php echo $Data[914]; ?>"></td>
					      <td><input class="span1"  name="Data[915]" type="text" value="<?php echo $Data[915]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ระบุ <input class="span3"  name="Data[918]" type="text" value="<?php echo $Data[918]; ?>"></td>
					      <td><input class="span2"  name="Data[924]" type="text" value="<?php echo $Data[924]; ?>"></td>
					      <td><input class="span4"  name="Data[924]" type="text" value="<?php echo $Data[924]; ?>"></td>
					      <td><input class="span1"  name="Data[919]" type="text" value="<?php echo $Data[919]; ?>"></td>
					      <td><input class="span1"  name="Data[920]" type="text" value="<?php echo $Data[920]; ?>"></td>
					      <td><input class="span1"  name="Data[921]" type="text" value="<?php echo $Data[921]; ?>"></td>
					      <td><input class="span1"  name="Data[922]" type="text" value="<?php echo $Data[922]; ?>"></td>
					      <td><input class="span1"  name="Data[923]" type="text" value="<?php echo $Data[923]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.8 แหล่งน้ำ (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ระบบประปา</td>
					      <td><input class="span1"  name="Data[930]" type="text" value="<?php echo $Data[930]; ?>"></td>
					      <td><input class="span4"  name="Data[931]" type="text" value="<?php echo $Data[931]; ?>"></td>
					      <td><input class="span1"  name="Data[925]" type="text" value="<?php echo $Data[925]; ?>"></td>
					      <td><input class="span1"  name="Data[926]" type="text" value="<?php echo $Data[926]; ?>"></td>
					      <td><input class="span1"  name="Data[927]" type="text" value="<?php echo $Data[927]; ?>"></td>
					      <td><input class="span1"  name="Data[928]" type="text" value="<?php echo $Data[928]; ?>"></td>
					      <td><input class="span1"  name="Data[929]" type="text" value="<?php echo $Data[929]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- บ่อน้ำตื้น</td>
					      <td><input class="span2"  name="Data[937]" type="text" value="<?php echo $Data[937]; ?>"></td>
					      <td><input class="span4"  name="Data[938]" type="text" value="<?php echo $Data[938]; ?>"></td>
					      <td><input class="span1"  name="Data[932]" type="text" value="<?php echo $Data[932]; ?>"></td>
					      <td><input class="span1"  name="Data[933]" type="text" value="<?php echo $Data[933]; ?>"></td>
					      <td><input class="span1"  name="Data[934]" type="text" value="<?php echo $Data[934]; ?>"></td>
					      <td><input class="span1"  name="Data[935]" type="text" value="<?php echo $Data[935]; ?>"></td>
					      <td><input class="span1"  name="Data[936]" type="text" value="<?php echo $Data[936]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- บ่อบาดาล</td>
					      <td><input class="span2"  name="Data[944]" type="text" value="<?php echo $Data[944]; ?>"></td>
					      <td><input class="span4"  name="Data[945]" type="text" value="<?php echo $Data[945]; ?>"></td>
					      <td><input class="span1"  name="Data[939]" type="text" value="<?php echo $Data[939]; ?>"></td>
					      <td><input class="span1"  name="Data[940]" type="text" value="<?php echo $Data[940]; ?>"></td>
					      <td><input class="span1"  name="Data[941]" type="text" value="<?php echo $Data[941]; ?>"></td>
					      <td><input class="span1"  name="Data[942]" type="text" value="<?php echo $Data[942]; ?>"></td>
					      <td><input class="span1"  name="Data[943]" type="text" value="<?php echo $Data[943]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- เขื่อน/ฝ้าย</td>
					      <td><input class="span2"  name="Data[951]" type="text" value="<?php echo $Data[951]; ?>"></td>
					      <td><input class="span4"  name="Data[952]" type="text" value="<?php echo $Data[952]; ?>"></td>
					      <td><input class="span1"  name="Data[946]" type="text" value="<?php echo $Data[946]; ?>"></td>
					      <td><input class="span1"  name="Data[947]" type="text" value="<?php echo $Data[947]; ?>"></td>
					      <td><input class="span1"  name="Data[948]" type="text" value="<?php echo $Data[948]; ?>"></td>
					      <td><input class="span1"  name="Data[949]" type="text" value="<?php echo $Data[949]; ?>"></td>
					      <td><input class="span1"  name="Data[950]" type="text" value="<?php echo $Data[950]; ?>"></td>
					    <tr>
					      <td>- ห้วย/หนอง/คลอง/บึง</td>
					      <td><input class="span2"  name="Data[958]" type="text" value="<?php echo $Data[958]; ?>"></td>
					      <td><input class="span4"  name="Data[959]" type="text" value="<?php echo $Data[959]; ?>"></td>
					      <td><input class="span1"  name="Data[953]" type="text" value="<?php echo $Data[953]; ?>"></td>
					      <td><input class="span1"  name="Data[954]" type="text" value="<?php echo $Data[954]; ?>"></td>
					      <td><input class="span1"  name="Data[955]" type="text" value="<?php echo $Data[955]; ?>"></td>
					      <td><input class="span1"  name="Data[956]" type="text" value="<?php echo $Data[956]; ?>"></td>
					      <td><input class="span1"  name="Data[957]" type="text" value="<?php echo $Data[957]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อื่น ๆ <input class="span3"  name="Data[960]" type="text" value="<?php echo $Data[960]; ?>"></td>
					      <td><input class="span2"  name="Data[966]" type="text" value="<?php echo $Data[966]; ?>"></td>
					      <td><input class="span4"  name="Data[967]" type="text" value="<?php echo $Data[967]; ?>"></td>
					      <td><input class="span1"  name="Data[961]" type="text" value="<?php echo $Data[961]; ?>"></td>
					      <td><input class="span1"  name="Data[962]" type="text" value="<?php echo $Data[962]; ?>"></td>
					      <td><input class="span1"  name="Data[963]" type="text" value="<?php echo $Data[963]; ?>"></td>
					      <td><input class="span1"  name="Data[964]" type="text" value="<?php echo $Data[964]; ?>"></td>
					      <td><input class="span1"  name="Data[965]" type="text" value="<?php echo $Data[965]; ?>"></td>
					    </tr>	    
					      
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.3.9 ปัญหาขยะ/น้ำเน่าเสีย/มลพิษ</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ปัญหาขยะ</td>
					      <td><input class="span2"  name="Data[973]" type="text" value="<?php echo $Data[973]; ?>"></td>
					      <td><input class="span4"  name="Data[974]" type="text" value="<?php echo $Data[974]; ?>"></td>		
					      <td><input type="checkbox" name="Data[968]" value="ปัญหาขยะ" <?php if ($Data[968] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[969]" value="ปัญหาขยะ" <?php if ($Data[969] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[970]" value="ปัญหาขยะ" <?php if ($Data[970] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[971]" value="ปัญหาขยะ" <?php if ($Data[971] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[972]" value="ปัญหาขยะ" <?php if ($Data[972] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- น้ำเน่าเสีย</td>
					      <td><input class="span2"  name="Data[980]" type="text" value="<?php echo $Data[980]; ?>"></td>
					      <td><input class="span4"  name="Data[981]" type="text" value="<?php echo $Data[981]; ?>"></td>
					      <td><input type="checkbox" name="Data[975]" value="น้ำเน่าเสีย" <?php if ($Data[975] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[976]" value="น้ำเน่าเสีย" <?php if ($Data[976] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[977]" value="น้ำเน่าเสีย" <?php if ($Data[977] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[978]" value="น้ำเน่าเสีย" <?php if ($Data[978] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[979]" value="น้ำเน่าเสีย" <?php if ($Data[979] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    <tr>
					      <td>- มลพิษอื่น ๆ ระบุ <input class="span3"  name="Data[982]" type="text" value="<?php echo $Data[982]; ?>"></td>
					      <td><input class="span2"  name="Data[988]" type="text" value="<?php echo $Data[988]; ?>"></td>
					      <td><input class="span4"  name="Data[989]" type="text" value="<?php echo $Data[989]; ?>"></td>
					      <td><input type="checkbox" name="Data[983]" value="มลพิษอื่น ๆ" <?php if ($Data[983] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[984]" value="มลพิษอื่น ๆ" <?php if ($Data[984] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[985]" value="มลพิษอื่น ๆ" <?php if ($Data[985] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[986]" value="มลพิษอื่น ๆ" <?php if ($Data[986] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[987]" value="มลพิษอื่น ๆ" <?php if ($Data[987] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv1"><h3>3.4 เศรษฐกิจ (หากในพื้นที่ของท่านไม่มีส่วนใดก็ไม่ต้องกรอก)</h3></th>
					    </tr>
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.1 พื้นที่การเกษตรเสียหาย (ระบุจำนวนไร่)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- นาข้าว</td>
					      <td><input class="span2"  name="Data[83]" type="text" value="<?php echo $Data[83]; ?>"></td>
					      <td><input class="span4"  name="Data[84]" type="text" value="<?php echo $Data[84]; ?>"></td>
					      <td><input class="span1"  name="Data[54]" type="text" value="<?php echo $Data[54]; ?>"></td>
					      <td><input class="span1"  name="Data[55]" type="text" value="<?php echo $Data[55]; ?>"></td>
					      <td><input class="span1"  name="Data[56]" type="text" value="<?php echo $Data[56]; ?>"></td>
					      <td><input class="span1"  name="Data[57]" type="text" value="<?php echo $Data[57]; ?>"></td>
					      <td><input class="span1"  name="Data[58]" type="text" value="<?php echo $Data[58]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- พืชสวน</td>
					      <td><input class="span2"  name="Data[90]" type="text" value="<?php echo $Data[90]; ?>"></td>
					      <td><input class="span4"  name="Data[91]" type="text" value="<?php echo $Data[91]; ?>"></td>
					      <td><input class="span1"  name="Data[85]" type="text" value="<?php echo $Data[85]; ?>"></td>
					      <td><input class="span1"  name="Data[86]" type="text" value="<?php echo $Data[86]; ?>"></td>
					      <td><input class="span1"  name="Data[87]" type="text" value="<?php echo $Data[87]; ?>"></td>
					      <td><input class="span1"  name="Data[88]" type="text" value="<?php echo $Data[88]; ?>"></td>
					      <td><input class="span1"  name="Data[89]" type="text" value="<?php echo $Data[89]; ?>"></td>
					    </tr>	    		    	    
					    <tr>
					      <td>-พืชไร่</td>
					      <td><input class="span2"  name="Data[97]" type="text" value="<?php echo $Data[97]; ?>"></td>
					      <td><input class="span4"  name="Data[98]" type="text" value="<?php echo $Data[98]; ?>"></td>
					      <td><input class="span1"  name="Data[92]" type="text" value="<?php echo $Data[92]; ?>"></td>
					      <td><input class="span1"  name="Data[93]" type="text" value="<?php echo $Data[93]; ?>"></td>
					      <td><input class="span1"  name="Data[94]" type="text" value="<?php echo $Data[94]; ?>"></td>
					      <td><input class="span1"  name="Data[95]" type="text" value="<?php echo $Data[95]; ?>"></td>
					      <td><input class="span1"  name="Data[96]" type="text" value="<?php echo $Data[96]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อื่น ๆ <input class="span3"  name="Data[99]" type="text" value="<?php echo $Data[99]; ?>"></td>
					      <td><input class="span2"  name="Data[105]" type="text" value="<?php echo $Data[105]; ?>"></td>
					      <td><input class="span4"  name="Data[106]" type="text" value="<?php echo $Data[106]; ?>"></td>
					      <td><input class="span1"  name="Data[100]" type="text" value="<?php echo $Data[100]; ?>"></td>
					      <td><input class="span1"  name="Data[101]" type="text" value="<?php echo $Data[101]; ?>"></td>
					      <td><input class="span1"  name="Data[102]" type="text" value="<?php echo $Data[102]; ?>"></td>
					      <td><input class="span1"  name="Data[103]" type="text" value="<?php echo $Data[103]; ?>"></td>
					      <td><input class="span1"  name="Data[104]" type="text" value="<?php echo $Data[104]; ?>"></td>
					    </tr>	
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.2 พื้นที่ปศุสัตว์เสียหาย (ระบุจำนวนไร่)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ระบุ <input class="span3"  name="Data[107]" type="text" value="<?php echo $Data[107]; ?>"></td>
					      <td><input class="span2"  name="Data[113]" type="text" value="<?php echo $Data[113]; ?>"></td>
					      <td><input class="span4"  name="Data[114]" type="text" value="<?php echo $Data[114]; ?>"></td>
					      <td><input class="span1"  name="Data[108]" type="text" value="<?php echo $Data[108]; ?>"></td>
					      <td><input class="span1"  name="Data[109]" type="text" value="<?php echo $Data[109]; ?>"></td>
					      <td><input class="span1"  name="Data[110]" type="text" value="<?php echo $Data[110]; ?>"></td>
					      <td><input class="span1"  name="Data[111]" type="text" value="<?php echo $Data[111]; ?>"></td>
					      <td><input class="span1"  name="Data[112]" type="text" value="<?php echo $Data[112]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.3 สัตว์เลี้ยง (ระบุจำนวน)</h4></th>
					    </tr>
					   
				      <tr>
					      <td>- หมู</td>
					      <td><input class="span2"  name="Data[120]" type="text" value="<?php echo $Data[120]; ?>"></td>
					      <td><input class="span4"  name="Data[121]" type="text" value="<?php echo $Data[121]; ?>"></td>
					      <td><input class="span1"  name="Data[115]" type="text" value="<?php echo $Data[115]; ?>"></td>
					      <td><input class="span1"  name="Data[116]" type="text" value="<?php echo $Data[116]; ?>"></td>
					      <td><input class="span1"  name="Data[117]" type="text" value="<?php echo $Data[117]; ?>"></td>
					      <td><input class="span1"  name="Data[118]" type="text" value="<?php echo $Data[118]; ?>"></td>
					      <td><input class="span1"  name="Data[119]" type="text" value="<?php echo $Data[119]; ?>"></td>
					    </tr>
				      <tr>
					      <td>- วัว/ควาย</td>
					      <td><input class="span2"  name="Data[127]" type="text" value="<?php echo $Data[127]; ?>"></td>
					      <td><input class="span4"  name="Data[128]" type="text" value="<?php echo $Data[128]; ?>"></td>
					      <td><input class="span1"  name="Data[122]" type="text" value="<?php echo $Data[122]; ?>"></td>
					      <td><input class="span1"  name="Data[123]" type="text" value="<?php echo $Data[123]; ?>"></td>
					      <td><input class="span1"  name="Data[124]" type="text" value="<?php echo $Data[124]; ?>"></td>
					      <td><input class="span1"  name="Data[125]" type="text" value="<?php echo $Data[125]; ?>"></td>
					      <td><input class="span1"  name="Data[126]" type="text" value="<?php echo $Data[126]; ?>"></td>
					    </tr>
				      <tr>
					      <td>- เป็ด</td>
					      <td><input class="span2"  name="Data[134]" type="text" value="<?php echo $Data[134]; ?>"></td>
					      <td><input class="span4"  name="Data[135]" type="text" value="<?php echo $Data[135]; ?>"></td>
					      <td><input class="span1"  name="Data[129]" type="text" value="<?php echo $Data[129]; ?>"></td>
					      <td><input class="span1"  name="Data[130]" type="text" value="<?php echo $Data[130]; ?>"></td>
					      <td><input class="span1"  name="Data[131]" type="text" value="<?php echo $Data[131]; ?>"></td>
					      <td><input class="span1"  name="Data[132]" type="text" value="<?php echo $Data[132]; ?>"></td>
					      <td><input class="span1"  name="Data[133]" type="text" value="<?php echo $Data[133]; ?>"></td>
					    </tr>
				      <tr>
					      <td>- ไก่</td>
					      <td><input class="span2"  name="Data[141]" type="text" value="<?php echo $Data[141]; ?>"></td>
					      <td><input class="span4"  name="Data[142]" type="text" value="<?php echo $Data[142]; ?>"></td>
					      <td><input class="span1"  name="Data[136]" type="text" value="<?php echo $Data[136]; ?>"></td>
					      <td><input class="span1"  name="Data[137]" type="text" value="<?php echo $Data[137]; ?>"></td>
					      <td><input class="span1"  name="Data[138]" type="text" value="<?php echo $Data[138]; ?>"></td>
					      <td><input class="span1"  name="Data[139]" type="text" value="<?php echo $Data[139]; ?>"></td>
					      <td><input class="span1"  name="Data[140]" type="text" value="<?php echo $Data[140]; ?>"></td>
					    </tr>
				      <tr>
					      <td>- แพะ</td>
					      <td><input class="span2"  name="Data[148]" type="text" value="<?php echo $Data[148]; ?>"></td>
					      <td><input class="span4"  name="Data[150]" type="text" value="<?php echo $Data[150]; ?>"></td>
					      <td><input class="span1"  name="Data[143]" type="text" value="<?php echo $Data[143]; ?>"></td>
					      <td><input class="span1"  name="Data[144]" type="text" value="<?php echo $Data[144]; ?>"></td>
					      <td><input class="span1"  name="Data[145]" type="text" value="<?php echo $Data[145]; ?>"></td>
					      <td><input class="span1"  name="Data[146]" type="text" value="<?php echo $Data[146]; ?>"></td>
					      <td><input class="span1"  name="Data[147]" type="text" value="<?php echo $Data[147]; ?>"></td>
					    </tr>	    
					    <tr>
					      <td>- อื่น ๆ <input class="span3"  name="Data[151]" type="text" value="<?php echo $Data[151]; ?>"></td>
					      <td><input class="span2"  name="Data[157]" type="text" value="<?php echo $Data[157]; ?>"></td>
					      <td><input class="span4"  name="Data[158]" type="text" value="<?php echo $Data[158]; ?>"></td>
					      <td><input class="span1"  name="Data[152]" type="text" value="<?php echo $Data[152]; ?>"></td>
					      <td><input class="span1"  name="Data[153]" type="text" value="<?php echo $Data[153]; ?>"></td>
					      <td><input class="span1"  name="Data[154]" type="text" value="<?php echo $Data[154]; ?>"></td>
					      <td><input class="span1"  name="Data[155]" type="text" value="<?php echo $Data[155]; ?>"></td>
					      <td><input class="span1"  name="Data[156]" type="text" value="<?php echo $Data[156]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.3 พื้นที่ประมงเสียหาย (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ระบุ <input class="span3"  name="Data[159]" type="text" value="<?php echo $Data[159]; ?>"></td>
					      <td><input class="span2"  name="Data[165]" type="text" value="<?php echo $Data[165]; ?>"></td>
					      <td><input class="span4"  name="Data[166]" type="text" value="<?php echo $Data[166]; ?>"></td>
					      <td><input class="span1"  name="Data[160]" type="text" value="<?php echo $Data[160]; ?>"></td>
					      <td><input class="span1"  name="Data[161]" type="text" value="<?php echo $Data[161]; ?>"></td>
					      <td><input class="span1"  name="Data[162]" type="text" value="<?php echo $Data[162]; ?>"></td>
					      <td><input class="span1"  name="Data[163]" type="text" value="<?php echo $Data[163]; ?>"></td>
					      <td><input class="span1"  name="Data[164]" type="text" value="<?php echo $Data[164]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.4 ตลาด ย่านธุรกิจเสียหาย (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ระบุ <input class="span3"  name="Data[167]" type="text" value="<?php echo $Data[167]; ?>"></td>
					      <td><input class="span2"  name="Data[173]" type="text" value="<?php echo $Data[173]; ?>"></td>
					      <td><input class="span4"  name="Data[174]" type="text" value="<?php echo $Data[174]; ?>"></td>
					      <td><input class="span1"  name="Data[168]" type="text" value="<?php echo $Data[168]; ?>"></td>
					      <td><input class="span1"  name="Data[169]" type="text" value="<?php echo $Data[169]; ?>"></td>
					      <td><input class="span1"  name="Data[170]" type="text" value="<?php echo $Data[170]; ?>"></td>
					      <td><input class="span1"  name="Data[171]" type="text" value="<?php echo $Data[171]; ?>"></td>
					      <td><input class="span1"  name="Data[172]" type="text" value="<?php echo $Data[172]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.5 อุตสาหกรรมเสียหาย (ระบุจำนวน)</h4></h>
					    </tr>
					   
					    <tr>
					      <td>- ระบุ <input class="span3"  name="Data[175]" type="text" value="<?php echo $Data[175]; ?>"></td>
					      <td><input class="span2"  name="Data[1200]" type="text" value="<?php echo $Data[1200]; ?>"></td>
					      <td><input class="span4"  name="Data[1201]" type="text" value="<?php echo $Data[1201]; ?>"></td>
					      <td><input class="span1"  name="Data[176]" type="text" value="<?php echo $Data[176]; ?>"></td>
					      <td><input class="span1"  name="Data[177]" type="text" value="<?php echo $Data[177]; ?>"></td>
					      <td><input class="span1"  name="Data[178]" type="text" value="<?php echo $Data[178]; ?>"></td>
					      <td><input class="span1"  name="Data[179]" type="text" value="<?php echo $Data[179]; ?>"></td>
					      <td><input class="span1"  name="Data[180]" type="text" value="<?php echo $Data[180]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.6 ประมาณการคนที่ได้รับผลกระทบจากภัยพิบัติ (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- จำนวนคนได้รับผลกระทบ <input class="span3"  name="Data[1202]" type="text" value="<?php echo $Data[1202]; ?>"></td>
					      <td><input class="span2"  name="Data[1208]" type="text" value="<?php echo $Data[1208]; ?>"></td>
					      <td><input class="span4"  name="Data[1209]" type="text" value="<?php echo $Data[1209]; ?>"></td>
					      <td><input class="span1"  name="Data[1203]" type="text" value="<?php echo $Data[1203]; ?>"></td>
					      <td><input class="span1"  name="Data[1204]" type="text" value="<?php echo $Data[1204]; ?>"></td>
					      <td><input class="span1"  name="Data[1205]" type="text" value="<?php echo $Data[1205]; ?>"></td>
					      <td><input class="span1"  name="Data[1206]" type="text" value="<?php echo $Data[1206]; ?>"></td>
					      <td><input class="span1"  name="Data[1207]" type="text" value="<?php echo $Data[1207]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.7 ประมาณการคนที่ได้รับว่างงาน จากภัยพิบัติ (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- จำนวนคนว่างงาน <input class="span3"  name="Data[1210]" type="text" value="<?php echo $Data[1210]; ?>"></td>
					      <td><input class="span2"  name="Data[1216]" type="text" value="<?php echo $Data[1216]; ?>"></td>
					      <td><input class="span4"  name="Data[1217]" type="text" value="<?php echo $Data[1217]; ?>"></td>
					      <td><input class="span1"  name="Data[1211]" type="text" value="<?php echo $Data[1211]; ?>"></td>
					      <td><input class="span1"  name="Data[1212]" type="text" value="<?php echo $Data[1212]; ?>"></td>
					      <td><input class="span1"  name="Data[1213]" type="text" value="<?php echo $Data[1213]; ?>"></td>
					      <td><input class="span1"  name="Data[1214]" type="text" value="<?php echo $Data[1214]; ?>"></td>
					      <td><input class="span1"  name="Data[1215]" type="text" value="<?php echo $Data[1215]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.8 กลุ่มอาชีพ (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- จำนวนกลุ่มอาชีพในชุมชน</td>
					      <td><input class="span2"  name="Data[1223]" type="text" value="<?php echo $Data[1223]; ?>"></td>
					      <td><input class="span4"  name="Data[1224]" type="text" value="<?php echo $Data[1224]; ?>"></td>
					      <td><input class="span1"  name="Data[1218]" type="text" value="<?php echo $Data[1218]; ?>"></td>
					      <td><input class="span1"  name="Data[1219]" type="text" value="<?php echo $Data[1219]; ?>"></td>
					      <td><input class="span1"  name="Data[1220]" type="text" value="<?php echo $Data[1220]; ?>"></td>
					      <td><input class="span1"  name="Data[1221]" type="text" value="<?php echo $Data[1221]; ?>"></td>
					      <td><input class="span1"  name="Data[1222]" type="text" value="<?php echo $Data[1222]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- กลุ่มอาชีพที่ได้รับความเสียหาย </td>
					      <td><input class="span2"  name="Data[1230]" type="text" value="<?php echo $Data[1230]; ?>"></td>
					      <td><input class="span4"  name="Data[1231]" type="text" value="<?php echo $Data[1231]; ?>"></td>
					      <td><input class="span1"  name="Data[1225]" type="text" value="<?php echo $Data[1225]; ?>"></td>
					      <td><input class="span1"  name="Data[1226]" type="text" value="<?php echo $Data[1226]; ?>"></td>
					      <td><input class="span1"  name="Data[1227]" type="text" value="<?php echo $Data[1227]; ?>"></td>
					      <td><input class="span1"  name="Data[1228]" type="text" value="<?php echo $Data[1228]; ?>"></td>
					      <td><input class="span1"  name="Data[1229]" type="text" value="<?php echo $Data[1229]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.9 เครื่องจักร อุปกรณ์ประกอบอาชีพ ที่เสียหาย (ระบุจำนวน)</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- รถไถ</td>
					      <td><input class="span2"  name="Data[1121]" type="text" value="<?php echo $Data[1121]; ?>"></td>
					      <td><input class="span4"  name="Data[1122]" type="text" value="<?php echo $Data[1122]; ?>"></td>
					      <td><input class="span1"  name="Data[1116]" type="text" value="<?php echo $Data[1116]; ?>"></td>
					      <td><input class="span1"  name="Data[1117]" type="text" value="<?php echo $Data[1117]; ?>"></td>
					      <td><input class="span1"  name="Data[1118]" type="text" value="<?php echo $Data[1118]; ?>"></td>
					      <td><input class="span1"  name="Data[1119]" type="text" value="<?php echo $Data[1119]; ?>"></td>
					      <td><input class="span1"  name="Data[1120]" type="text" value="<?php echo $Data[1120]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- รถกระบะ</td>
					      <td><input class="span2"  name="Data[1128]" type="text" value="<?php echo $Data[1128]; ?>"></td>
					      <td><input class="span4"  name="Data[1129]" type="text" value="<?php echo $Data[1129]; ?>"></td>
					      <td><input class="span1"  name="Data[1123]" type="text" value="<?php echo $Data[1123]; ?>"></td>
					      <td><input class="span1"  name="Data[1124]" type="text" value="<?php echo $Data[1124]; ?>"></td>
					      <td><input class="span1"  name="Data[1125]" type="text" value="<?php echo $Data[1125]; ?>"></td>
					      <td><input class="span1"  name="Data[1126]" type="text" value="<?php echo $Data[1126]; ?>"></td>
					      <td><input class="span1"  name="Data[1127]" type="text" value="<?php echo $Data[1127]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- รถบรรทุก</td>
					      <td><input class="span2"  name="Data[1135]" type="text" value="<?php echo $Data[1135]; ?>"></td>
					      <td><input class="span4"  name="Data[1136]" type="text" value="<?php echo $Data[1136]; ?>"></td>
					      <td><input class="span1"  name="Data[1130]" type="text" value="<?php echo $Data[1130]; ?>"></td>
					      <td><input class="span1"  name="Data[1131]" type="text" value="<?php echo $Data[1131]; ?>"></td>
					      <td><input class="span1"  name="Data[1132]" type="text" value="<?php echo $Data[1132]; ?>"></td>
					      <td><input class="span1"  name="Data[1133]" type="text" value="<?php echo $Data[1133]; ?>"></td>
					      <td><input class="span1"  name="Data[1134]" type="text" value="<?php echo $Data[1134]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- รถมอเตอร์ไซต์</td>
					      <td><input class="span2"  name="Data[1142]" type="text" value="<?php echo $Data[1142]; ?>"></td>
					      <td><input class="span4"  name="Data[1143]" type="text" value="<?php echo $Data[1143]; ?>"></td>
					      <td><input class="span1"  name="Data[1137]" type="text" value="<?php echo $Data[1137]; ?>"></td>
					      <td><input class="span1"  name="Data[1138]" type="text" value="<?php echo $Data[1138]; ?>"></td>
					      <td><input class="span1"  name="Data[1139]" type="text" value="<?php echo $Data[1139]; ?>"></td>
					      <td><input class="span1"  name="Data[1140]" type="text" value="<?php echo $Data[1140]; ?>"></td>
					      <td><input class="span1"  name="Data[1141]" type="text" value="<?php echo $Data[1141]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- รถยนต์</td>
					      <td><input class="span2"  name="Data[1151]" type="text" value="<?php echo $Data[1151]; ?>"></td>
					      <td><input class="span4"  name="Data[1152]" type="text" value="<?php echo $Data[1152]; ?>"></td>
					      <td><input class="span1"  name="Data[1144]" type="text" value="<?php echo $Data[1145]; ?>"></td>
					      <td><input class="span1"  name="Data[1146]" type="text" value="<?php echo $Data[1147]; ?>"></td>
					      <td><input class="span1"  name="Data[1148]" type="text" value="<?php echo $Data[1148]; ?>"></td>
					      <td><input class="span1"  name="Data[1149]" type="text" value="<?php echo $Data[1149]; ?>"></td>
					      <td><input class="span1"  name="Data[1150]" type="text" value="<?php echo $Data[1150]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- จักรเย็บผ้า</td>
					      <td><input class="span2"  name="Data[1158]" type="text" value="<?php echo $Data[1158]; ?>"></td>
					      <td><input class="span4"  name="Data[1159]" type="text" value="<?php echo $Data[1159]; ?>"></td>
					      <td><input class="span1"  name="Data[1153]" type="text" value="<?php echo $Data[1153]; ?>"></td>
					      <td><input class="span1"  name="Data[1154]" type="text" value="<?php echo $Data[1154]; ?>"></td>
					      <td><input class="span1"  name="Data[1155]" type="text" value="<?php echo $Data[1155]; ?>"></td>
					      <td><input class="span1"  name="Data[1156]" type="text" value="<?php echo $Data[1156]; ?>"></td>
					      <td><input class="span1"  name="Data[1157]" type="text" value="<?php echo $Data[1157]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อุปกรณ์กลุ่มอาชีพ</td>
					      <td><input class="span2"  name="Data[1165]" type="text" value="<?php echo $Data[1165]; ?>"></td>
					      <td><input class="span4"  name="Data[1166]" type="text" value="<?php echo $Data[1166]; ?>"></td>
					      <td><input class="span1"  name="Data[1160]" type="text" value="<?php echo $Data[1160]; ?>"></td>
					      <td><input class="span1"  name="Data[1161]" type="text" value="<?php echo $Data[1161]; ?>"></td>
					      <td><input class="span1"  name="Data[1162]" type="text" value="<?php echo $Data[1162]; ?>"></td>
					      <td><input class="span1"  name="Data[1163]" type="text" value="<?php echo $Data[1163]; ?>"></td>
					      <td><input class="span1"  name="Data[1164]" type="text" value="<?php echo $Data[1164]; ?>"></td>
					    </tr>	    
					    <tr>
					      <td>- อื่นๆ <input class="span3"  name="Data[1167]" type="text" value="<?php echo $Data[1167]; ?>"></td>
					      <td><input class="span2"  name="Data[1173]" type="text" value="<?php echo $Data[1173]; ?>"></td>
					      <td><input class="span4"  name="Data[1174]" type="text" value="<?php echo $Data[1174]; ?>"></td>
					      <td><input class="span1"  name="Data[1168]" type="text" value="<?php echo $Data[1168]; ?>"></td>
					      <td><input class="span1"  name="Data[1169]" type="text" value="<?php echo $Data[1169]; ?>"></td>
					      <td><input class="span1"  name="Data[1170]" type="text" value="<?php echo $Data[1170]; ?>"></td>
					      <td><input class="span1"  name="Data[1171]" type="text" value="<?php echo $Data[1171]; ?>"></td>
					      <td><input class="span1"  name="Data[1172]" type="text" value="<?php echo $Data[1172]; ?>"></td>
					    </tr>
					    
					    <tr>
					      <th colspan="8" class="table-lv2"><h4>3.4.10 ปัญหาการสื่อสารโทรคมนาคมในพื้นที่</h4></th>
					    </tr>
					   
					    <tr>
					      <td>- ระบบโทรศัพท์พื้นฐาน</td>
					      <td><input type="checkbox" name="Data[181]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[181] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[182]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[182] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[183]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[183] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[184]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[184] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[185]" value="ระบบโทรศัพท์พื้นฐาน" <?php if ($Data[185] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[186]" type="text" value="<?php echo $Data[186]; ?>"></td>
					      <td><input class="span4"  name="Data[187]" type="text" value="<?php echo $Data[187]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ระบบโทรศัพท์มือถือ</td>
					      <td><input type="checkbox" name="Data[188]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[188] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[189]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[189] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[190]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[190] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[191]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[191] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[192]" value="ระบบโทรศัพท์มือถือ" <?php if ($Data[192] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[193]" type="text" value="<?php echo $Data[193]; ?>"></td>
					      <td><input class="span4"  name="Data[194]" type="text" value="<?php echo $Data[194]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ระบบอินเทอร์เน็ต</td>
					      <td><input type="checkbox" name="Data[195]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[195] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[196]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[196] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[197]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[197] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[198]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[198] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[199]" value="ระบบอินเทอร์เน็ต" <?php if ($Data[199] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[200]" type="text" value="<?php echo $Data[200]; ?>"></td>
					      <td><input class="span4"  name="Data[201]" type="text" value="<?php echo $Data[201]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ระบบไปรษณีย์</td>
					      <td><input type="checkbox" name="Data[207]" value="ระบบไปรษณีย์" <?php if ($Data[207] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[208]" value="ระบบไปรษณีย์" <?php if ($Data[208] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[209]" value="ระบบไปรษณีย์" <?php if ($Data[209] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[210]" value="ระบบไปรษณีย์" <?php if ($Data[210] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[211]" value="ระบบไปรษณีย์" <?php if ($Data[211] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[212]" type="text" value="<?php echo $Data[212]; ?>"></td>
					      <td><input class="span4"  name="Data[213]" type="text" value="<?php echo $Data[213]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ระบบวิทยุสื่อสาร</td>
					      <td><input type="checkbox" name="Data[214]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[214] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[990]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[990] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[991]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[991] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[992]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[992] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[993]" value="ระบบวิทยุสื่อสาร" <?php if ($Data[993] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[994]" type="text" value="<?php echo $Data[994]; ?>"></td>
					      <td><input class="span4"  name="Data[995]" type="text" value="<?php echo $Data[995]; ?>"></td>
					    </tr>
					    <!-- 
					    <tr>
					      <td colspan="8" class="table-lv2"><h4>3.4.11 กิจกรรมที่ชุมชนต้องการการสนับสนุน</h4></td>
					    </tr>
					    -->
					    <tr>
					      <td>- การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)</td>
					      <td><input type="checkbox" name="Data[996]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[996] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[997]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[997] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[998]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[998] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[999]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[999] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1000]" value="การฟื้นฟูด้านการเกษตร (นา,ไร่,สวน)" <?php if ($Data[1000] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1001]" type="text" value="<?php echo $Data[1001]; ?>"></td>
					      <td><input class="span4"  name="Data[1002]" type="text" value="<?php echo $Data[1002]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- การฟื้นฟูด้านปศุสัตว์</td>
					      <td><input type="checkbox" name="Data[1003]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1003] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1004]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1004] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1005]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1005] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1006]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1006] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1007]" value="การฟื้นฟูด้านปศุสัตว์" <?php if ($Data[1007] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1008]" type="text" value="<?php echo $Data[1008]; ?>"></td>
					      <td><input class="span4"  name="Data[1009]" type="text" value="<?php echo $Data[1009]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- การฟื้นฟูด้านการประมง</td>
					      <td><input type="checkbox" name="Data[1010]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1010] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1011]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1011] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1012]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1012] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1013]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1013] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1014]" value="การฟื้นฟูด้านการประมง" <?php if ($Data[1014] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1015]" type="text" value="<?php echo $Data[1015]; ?>"></td>
					      <td><input class="span4"  name="Data[1016]" type="text" value="<?php echo $Data[1016]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- การฟื้นฟูธุรกิจ อุตสาหกรรม</tdh>
					      <td><input type="checkbox" name="Data[1017]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1017] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1018]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1018] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1019]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1019] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1020]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1020] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1021]" value="การฟื้นฟูธุรกิจ อุตสาหกรรม" <?php if ($Data[1021] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1022]" type="text" value="<?php echo $Data[1022]; ?>"></td>
					      <td><input class="span4"  name="Data[1023]" type="text" value="<?php echo $Data[1023]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- การฟื้นฟูแรงงาน</td>
					      <td><input type="checkbox" name="Data[1024]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1024] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1025]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1025] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1026]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1026] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1027]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1027] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1028]" value="การฟื้นฟูแรงงาน" <?php if ($Data[1028] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1029]" type="text" value="<?php echo $Data[1029]; ?>"></td>
					      <td><input class="span4"  name="Data[1030]" type="text" value="<?php echo $Data[1030]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- การฟื้นฟูด้านกลุ่มอาชีพ</td>
					      <td><input type="checkbox" name="Data[1031]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1031] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1032]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1032] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1033]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1033] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1034]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1034] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1035]" value="การฟื้นฟูด้านกลุ่มอาชีพ" <?php if ($Data[1035] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1036]" type="text" value="<?php echo $Data[1036]; ?>"></td>
					      <td><input class="span4"  name="Data[1037]" type="text" value="<?php echo $Data[1037]; ?>"></td>
					    </tr>
					      <td>- การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ</td>
					      <td><input type="checkbox" name="Data[1038]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1038] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1039]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1039] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1040]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1040] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1041]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1041] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1042]" value="การซ่อมแซมเครื่องจักร อุปกรณ์ประกอบอาชีพ" <?php if ($Data[1042] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1043]" type="text" value="<?php echo $Data[1043]; ?>"></td>
					      <td><input class="span4"  name="Data[1044]" type="text" value="<?php echo $Data[1044]; ?>"></td>
					    </tr>
					      <td>- การซ่อมแซมระบบสื่อสารโทรคมนาคม</td>
					      <td><input type="checkbox" name="Data[1045]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1045] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1046]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1046] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1047]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1047] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1048]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1048] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1049]" value="การซ่อมแซมระบบสื่อสารโทรคมนาคม" <?php if ($Data[1049] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1050]" type="text" value="<?php echo $Data[1050]; ?>"></td>
					      <td><input class="span4"  name="Data[1051]" type="text" value="<?php echo $Data[1051]; ?>"></td>
					    </tr>
					    <!-- 
					    <tr>
					      <td colspan="8" class="table-lv2"><h4>3.4.12  ระดับความรุนแรงด้านปัญหาเศรษฐกิจในชุมชน<span>(ให้เลือก 1 น้อยที่สุด - 5 มากที่สุด  เพียงหมายเลขเดียวเท่านั้น แล้วเติมลงในช่องว่างของแต่ละหมู่)</span></h4></td>
					    </tr>
					    -->
					    <tr>
					      <td>1) ไม่มีผลกระทบสามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้</td>
					      <td><input class="span1"  name="Data[1052]" type="text" value="<?php echo $Data[1052]; ?>"></td>
					      <td><input class="span1"  name="Data[1053]" type="text" value="<?php echo $Data[1053]; ?>"></td>
					      <td><input class="span1"  name="Data[1054]" type="text" value="<?php echo $Data[1054]; ?>"></td>
					      <td><input class="span1"  name="Data[1055]" type="text" value="<?php echo $Data[1055]; ?>"></td>
					      <td><input class="span1"  name="Data[1056]" type="text" value="<?php echo $Data[1056]; ?>"></td>
					      <td><input class="span2"  name="Data[1057]" type="text" value="<?php echo $Data[1057]; ?>"></td>
					      <td><input class="span4"  name="Data[1058]" type="text" value="<?php echo $Data[1058]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>2) ได้รับผลกระทบแต่สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้</td>
					      <td><input class="span1"  name="Data[1059]" type="text" value="<?php echo $Data[1059]; ?>"></td>
					      <td><input class="span1"  name="Data[1060]" type="text" value="<?php echo $Data[1060]; ?>"></td>
					      <td><input class="span1"  name="Data[1061]" type="text" value="<?php echo $Data[1061]; ?>"></td>
					      <td><input class="span1"  name="Data[1062]" type="text" value="<?php echo $Data[1062]; ?>"></td>
					      <td><input class="span1"  name="Data[1063]" type="text" value="<?php echo $Data[1063]; ?>"></td>
					      <td><input class="span2"  name="Data[1064]" type="text" value="<?php echo $Data[1064]; ?>"></td>
					      <td><input class="span4"  name="Data[1065]" type="text" value="<?php echo $Data[1065]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>3) สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ธุรกิจกิจและอุตสาหกรรมสามารถดำเนินการต่อได้ แต่ต้องการการสนับสนุนบางส่วน</td>
					      <td><input class="span1"  name="Data[1066]" type="text" value="<?php echo $Data[1066]; ?>"></td>
					      <td><input class="span1"  name="Data[1067]" type="text" value="<?php echo $Data[1067]; ?>"></td>
					      <td><input class="span1"  name="Data[1068]" type="text" value="<?php echo $Data[1068]; ?>"></td>
					      <td><input class="span1"  name="Data[1069]" type="text" value="<?php echo $Data[1069]; ?>"></td>
					      <td><input class="span1"  name="Data[1070]" type="text" value="<?php echo $Data[1070]; ?>"></td>
					      <td><input class="span2"  name="Data[1071]" type="text" value="<?php echo $Data[1071]; ?>"></td>
					      <td><input class="span4"  name="Data[1072]" type="text" value="<?php echo $Data[1072]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>4) ไม่สามารถทำการเกษตรในฤดูการผลิตครั้งใหม่ การฟื้นฟูธุรกิจอุตสาหกรรมต้องใช้เวลาอย่างน้อย 3เดือนต้องการการสนับสนุน</td>
					      <td><input class="span1"  name="Data[1073]" type="text" value="<?php echo $Data[1073]; ?>"></td>
					      <td><input class="span1"  name="Data[1074]" type="text" value="<?php echo $Data[1074]; ?>"></td>
					      <td><input class="span1"  name="Data[1075]" type="text" value="<?php echo $Data[1075]; ?>"></td>
					      <td><input class="span1"  name="Data[1076]" type="text" value="<?php echo $Data[1076]; ?>"></td>
					      <td><input class="span1"  name="Data[1077]" type="text" value="<?php echo $Data[1077]; ?>"></td>
					      <td><input class="span2"  name="Data[1078]" type="text" value="<?php echo $Data[1078]; ?>"></td>
					      <td><input class="span4"  name="Data[1079]" type="text" value="<?php echo $Data[1079]; ?>"></td>
					    </tr>	
					    <tr>
					      <td>5) ไม่สามารถดำเนินกิจกรรมทางเศรษฐกิจใด ๆ ได้ประชากรเกินครึ่งว่างงาน</td>
					      <td><input class="span1"  name="Data[1080]" type="text" value="<?php echo $Data[1080]; ?>"></td>
					      <td><input class="span1"  name="Data[1081]" type="text" value="<?php echo $Data[1081]; ?>"></td>
					      <td><input class="span1"  name="Data[1082]" type="text" value="<?php echo $Data[1082]; ?>"></td>
					      <td><input class="span1"  name="Data[1083]" type="text" value="<?php echo $Data[1083]; ?>"></td>
					      <td><input class="span1"  name="Data[1084]" type="text" value="<?php echo $Data[1084]; ?>"></td>
					      <td><input class="span2"  name="Data[1085]" type="text" value="<?php echo $Data[1085]; ?>"></td>
					      <td><input class="span4"  name="Data[1086]" type="text" value="<?php echo $Data[1086]; ?>"></td>
					    </tr>	
					    <!-- 
					    <tr>
					      <td colspan="8" class="table-lv1"><h3>3.5 ชุมชนมีการเตรียมการรับมือภัยพิบัติในอนาคต</h3></td>
					    </tr>
					    -->
					    <tr>
					      <td>- จัดทำแผนรับมือภัยพิบัติ</td>
					      <td><input type="checkbox" name="Data[1087]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1087] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1088]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1088] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1089]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1089] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1090]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1090] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1091]" value="จัดทำแผนรับมือภัยพิบัติ" <?php if ($Data[1091] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1092]" type="text" value="<?php echo $Data[1092]; ?>"></td>
					      <td><input class="span4"  name="Data[1093]" type="text" value="<?php echo $Data[1093]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- ฝึกซ้อมการรับมือภัยพิบัติ</td>
					      <td><input type="checkbox" name="Data[1094]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1094] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1095]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1095] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1096]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1096] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1097]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1097] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1098]" value="ฝึกซ้อมการรับมือภัยพิบัติ" <?php if ($Data[1098] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1099]" type="text" value="<?php echo $Data[1099]; ?>"></td>
					      <td><input class="span4"  name="Data[1100]" type="text" value="<?php echo $Data[1100]; ?>"></td>
					    </tr>	    
					    <tr>
					      <td>- ปรับปรุงระบบผังเมือง/ชุมชน</td>
					      <td><input type="checkbox" name="Data[1101]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1101] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1102]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1102] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1103]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1103] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1104]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1104] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1105]" value="ปรับปรุงระบบผังเมือง/ชุมชน" <?php if ($Data[1105] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1106]" type="text" value="<?php echo $Data[1106]; ?>"></td>
					      <td><input class="span4"  name="Data[1107]" type="text" value="<?php echo $Data[1107]; ?>"></td>
					    </tr>
					    <tr>
					      <td>- อื่น ๆ <input class="span3"  name="Data[1108]" type="text" value="<?php echo $Data[623]; ?>"></td>
					      <td><input type="checkbox" name="Data[1109]" value="อื่น ๆ" <?php if ($Data[1109] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1110]" value="อื่น ๆ" <?php if ($Data[1110] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1111]" value="อื่น ๆ" <?php if ($Data[1111] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1112]" value="อื่น ๆ" <?php if ($Data[1112] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input type="checkbox" name="Data[1113]" value="อื่น ๆ" <?php if ($Data[1113] == 'value'): ?> checked="checked" <?php endif; ?>></td>
					      <td><input class="span2"  name="Data[1114]" type="text" value="<?php echo $Data[1114]; ?>"></td>
					      <td><input class="span4"  name="Data[1115]" type="text" value="<?php echo $Data[1115]; ?>"></td>
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
            
            
          });
      </script>
