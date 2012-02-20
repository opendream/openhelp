<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css"> -->
<link rel="stylesheet" href="/css/defaultTheme.css">
<style type="text/css">
/*****************************************
   Override bootstrap
*****************************************/
.no-float{
	float: none;
	width: 125px;
	display: inline-block;
}
.float-none {
	float: none;
}
table input.span3, textarea.span3, table input.span2, textarea.span2{
	margin: 0;
}
table .span1 {
	width: 30px; 
	margin-left: 0; 
	margin-right: 0;
}

input.span3, textarea.span3, input.span2, textarea.span2, input.span7, input.span1,  input.span4{
  margin-left: 10px;
	margin-right: 10px;
}

fieldset.section3 tbody tr td, .section2 tbody tr td{
	padding: 5px;
}
fieldset.section3 .table-inner{
  border: 1px solid #eee;
}
.table-lv1 {
	background: #a3a3a3; 
	color: #fff;
}
.table-lv2 {
	background: #c1c1c1;
}
fieldset.section3 .tabletwo {
  width: 100%;
}

fieldset.section3 .tabletwo input.span4 {margin-left: 0; margin-right: 0;}
fieldset.section3 .tabletwo input.span1 {margin-left: 0; margin-right: 0;}
.no-padding {
	padding: 0 !important;
}
.label-s label {
  width: 100px;
}
label.label-ss {
	width: 60px;
}

.section1 label {
	width: 120px; 
}
.section2 table tbody tr td input {
  margin-left: 0;
  margin-right: 0;
}
.center tbody tr td, .section2 tbody tr td{
  text-align: center;
}
h3 {
  margin: 0 0  10px;
  text-align: left;
}
h4 {
  text-align: left;
}
.clear {
	clear: both;
}
.indent {
	padding: 0 0 0 30px;
}
table thead tr th {
	text-align: center; 
	vertical-align: middle; 
	padding: 5px;
}  
table tbody tr th {
	vertical-align: middle; 
	background: #ececec; 
	text-align: left;
}
table tbody tr td {
  vertical-align: middle; 
  -webkit-border-radius: 0 !important; 
  -moz-border-radius: 0 !important; 
  border-radius: 0 !important; 
  border-left: 1px solid #eee; 
  border-bottom: 1px solid #eee;
  text-align: left;
}
 .help-block {margin: 0 0 10px; display: block;}
 .al-left {text-align: left !important;}
 
 td.h-line {height: 40px;}
 h3.h-line,  h4.h-line {line-height: 0}
 
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
 
 .section3 textarea {
	 width: 200px;
	 height: 100px;
 }
 
 .section3-table .hide-col {
   display: none;
   background-color: #aaa;
   width: 50px !important;
 }
 
 .section3-table tbody {
   height: 500px;
   overflow-x: hidden;
   overflow-y: auto;
 }

.title-head{
	background: #C1C1C1 ;
	color: #404040 ;
	font-weight: bold;
}

.section3-table tbody.scrollContent{
	height: 350px !important;
}

div.section3-form{
	height: 420px !important;
}

.section3-table tbody.scrollContent td{
	width: auto !important;
}

.bordered-table thead{
	background: #C1C1C1;
}

.fixrows{
	margin-bottom: 15px;
}

.section3-table .table-lv2 td{
	background: #C1C1C1;
}
.section3-table .table-lv1 td{
	background: #a3a3a3;
}

/*****************************************
							Moo tab bar
*****************************************/
#moo-control-wrap {
  padding-top: 20px;
  float: right;
}
 #moo-control-wrap span {
   display: block;
   float: left;
   font-size: 15px;
   padding-top: 2px;
 }
 #moo-control-wrap ul {
   padding: 0px 0 0 20px;
   overflow: hidden;
   margin: 0;
 }
 #moo-control-wrap li{
	margin: 0 1px 0 1px !important;
	float: left;
	padding: 0;
	margin: 1px;
	list-style: none;
	border: none !important;
}
#moo-control-wrap li a{
	padding: 5px 10px !important;
	display: block;
	overflow: hidden;
	background: #535353;
	color: white;
	text-decoration: none;
}
#moo-control-wrap li a.active{
	padding: 5px 10px;
	background: #eb554b;
}



/*****************************************
					Location info
*****************************************/
#Location_level0_wrapper, #Location_level1_wrapper, #Location_level2_wrapper, #Location_level3_wrapper{
	float: left;
	width: 180px;
}


/*****************************************
   Some Style from bootstrap 
   http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css 
*****************************************/
input, textarea, .uneditable-input {
	display: inline-block;
/* 	width: 210px; */
	height: 18px;
	padding: 4px;
	font-size: 13px;
	line-height: 18px;
	color: gray;
	border: 1px solid #CCC;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
input[type="radio"], input[type="checkbox"]{
	border: none;
}
.span1{width:40px;}
.span2{width:100px;}
.span3{width:160px;}
.span4{width:220px;}
.span5{width:280px;}
.span6{width:340px;}
.span7{width:400px;}
.span8{width:460px;}
.span9{width:520px;}
.span10{width:580px;}
.span11{width:640px;}
.span12{width:700px;}
.span13{width:760px;}
.span14{width:820px;}
.span15{width:880px;}
.span16{width:940px;}
.span17{width:1000px;}
.span18{width:1060px;}
.span19{width:1120px;}

.bordered-table {
	border: 1px solid #DDD;
	border-collapse: separate;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
table th, table td {
	padding: 10px 10px 9px;
	line-height: 18px;
	text-align: left;
}
table {
	width: 100%;
	margin-bottom: 18px;
	padding: 0;
	font-size: 13px;
	border-collapse: collapse;
}
form .clearfix, .clearfix{margin-bottom:18px;zoom:1;}

label {
	padding-top: 6px;
	font-size: 13px;
	line-height: 18px;
	float: left;
	width: 130px;
	text-align: right;
	color: #404040;
}
fieldset legend {
	font-size: 22px;
	margin-bottom: 20px;
	float: left;
	width: 100%;
	color: #404040;
}
h1,h2,h3,h4,h5,h6{color:#404040;}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{color:#bfbfbf;}
h1{margin-bottom:18px;font-size:30px;line-height:36px;}h1 small{font-size:18px;}
h2{font-size:24px;line-height:36px;}h2 small{font-size:14px;}
h3,h4,h5,h6{line-height:36px;}
h3{font-size:18px;}h3 small{font-size:14px;}
h4{font-size:16px;}h4 small{font-size:12px;}
h5{font-size:14px;}
h6{font-size:13px;color:#bfbfbf;text-transform:uppercase;}

.btn.primary {
	color: white;
	background-color: #0064CD;
	background-repeat: repeat-x;
	background-image: -khtml-gradient(linear, left top, left bottom, from(#049cdb), to(#0064cd));
	background-image: -moz-linear-gradient(top, #049cdb, #0064cd);
	background-image: -ms-linear-gradient(top, #049cdb, #0064cd);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #049cdb), color-stop(100%, #0064cd));
	background-image: -webkit-linear-gradient(top, #049cdb, #0064cd);
	background-image: -o-linear-gradient(top, #049cdb, #0064cd);
	background-image: linear-gradient(top, #049cdb, #0064cd);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#049cdb', endColorstr='#0064cd', GradientType=0);
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	border-color: #0064CD #0064CD #003F81;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.btn {
	cursor: pointer;
	display: inline-block;
	background-color: #E6E6E6;
	background-repeat: no-repeat;
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), color-stop(25%, #ffffff), to(#e6e6e6));
	background-image: -webkit-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	background-image: -moz-linear-gradient(top, #ffffff, #ffffff 25%, #e6e6e6);
	background-image: -ms-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	background-image: -o-linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	background-image: linear-gradient(#ffffff, #ffffff 25%, #e6e6e6);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
	padding: 5px 14px 6px;
	text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
	color: #333;
	font-size: 13px;
	line-height: normal;
	border: 1px solid #CCC;
	border-bottom-color: #BBB;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2),0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2),0 1px 2px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2),0 1px 2px rgba(0, 0, 0, 0.05);
	-webkit-transition: 0.1s linear all;
	-moz-transition: 0.1s linear all;
	-ms-transition: 0.1s linear all;
	-o-transition: 0.1s linear all;
	transition: 0.1s linear all;
}
input[type="button"], input[type="reset"], input[type="submit"] {
	width: auto;
	height: auto;
}
.btn:hover {
	background-position: 0 -15px;
	text-decoration: none;
}
button, input[type="button"], input[type="reset"], input[type="submit"] {
	cursor: pointer;
	-webkit-appearance: button;
}
.actions {
	background: whiteSmoke;
	margin-top: 18px;
	margin-bottom: 18px;
	padding: 17px 20px 18px 150px;
	border-top: 1px solid #DDD;
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
}

/* End bootsrap */

.input-indent {
  margin-left: 40px;
}


/*****************************************
   Table with scroll bar
   http://www.imaputz.com/cssStuff/bigFourVersion.html
*****************************************/
/* define height and width of scrollable area. Add 16px to width for scrollbar          */
div.tableContainer {
	clear: both;
	border: 1px solid #eee;
	height: 285px;
	overflow: auto;
	width: 900px;
}

/* Reset overflow value to hidden for all non-IE browsers. */
html>body div.tableContainer {
	overflow: hidden;
	width: 900px;
}

/* define width of table. IE browsers only                 */
div.tableContainer table {
	float: left;
	width: 900px;
}

/* define width of table. Add 16px to width for scrollbar.           */
/* All other non-IE browsers.                                        */
html>body div.tableContainer table {
	width: 900px;
}

/* set table header to a fixed position. WinIE 6.x only                                       */
/* In WinIE 6.x, any element with a position property set to relative and is a child of       */
/* an element that has an overflow property set, the relative value translates into fixed.    */
/* Ex: parent element DIV with a class of tableContainer has an overflow property set to auto */
thead.fixedHeader tr {
	position: relative;
}

/* set THEAD element to have block level attributes. All other non-IE browsers            */
/* this enables overflow to work on TBODY element. All other non-IE, non-Mozilla browsers */
html>body thead.fixedHeader tr {
	display: block;
}

/* make the TH elements pretty */
thead.fixedHeader th {
	background: #C96;
	border-left: 1px solid #EB8;
	border-right: 1px solid #B74;
	border-top: 1px solid #EB8;
	font-weight: normal;
/* 	padding: 4px 3px; */
	text-align: left;
}

/* make the A elements pretty. makes for nice clickable headers                */
thead.fixedHeader a, thead.fixedHeader a:link, thead.fixedHeader a:visited {
	color: #FFF;
	display: block;
	text-decoration: none;
	width: 100%;
}

/* make the A elements pretty. makes for nice clickable headers                */
/* WARNING: swapping the background on hover may cause problems in WinIE 6.x   */
thead.fixedHeader a:hover {
	color: #FFF;
	display: block;
	text-decoration: underline;
	width: 100%;
}

/* define the table content to be scrollable                                              */
/* set TBODY element to have block level attributes. All other non-IE browsers            */
/* this enables overflow to work on TBODY element. All other non-IE, non-Mozilla browsers */
/* induced side effect is that child TDs no longer accept width: auto                     */
html>body tbody.scrollContent {
	display: block;
	height: 262px;
	overflow: auto;
	width: 100%;
}

/* make TD elements pretty. Provide alternating classes for striping the table */
/* http://www.alistapart.com/articles/zebratables/                             */
tbody.scrollContent td, tbody.scrollContent tr.normalRow td {
	background: #FFF;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
/* 	padding: 2px 3px 3px 4px; */
}

tbody.scrollContent tr.alternateRow td {
	background: #EEE;
	border-bottom: none;
	border-left: none;
	border-right: 1px solid #CCC;
	border-top: 1px solid #DDD;
/* 	padding: 2px 3px 3px 4px; */
}

/* define width of TH elements: 1st, 2nd, and 3rd respectively.          */
/* Add 16px to last TH for scrollbar padding. All other non-IE browsers. */
/* http://www.w3.org/TR/REC-CSS2/selector.html#adjacent-selectors        */
html>body thead.fixedHeader th {
	width: 210px;
	text-align: center;
	background: #C1C1C1 !important;
	color: #404040 !important;
	font-weight: bold;
	border: none !important;
}

/* define width of TD elements: 1st, 2nd, and 3rd respectively.          */
/* All other non-IE browsers.                                            */
/* http://www.w3.org/TR/REC-CSS2/selector.html#adjacent-selectors        */
html>body tbody.scrollContent td {
	width: 210px;
	text-align: center;
}


fieldset.sub legend {
  font-size: 18px;
}


</style>



  <fieldset>
    <legend>ข้อมูลพื้นที่</legend>
    <div class="clearfix fixrows">
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

  
  
  
<!-- ข้อมูลทั่วไปของผู้ให้ข้อมูล -->
  <fieldset title="" class="data-general">
      <legend>ข้อมูลทั่วไปของผู้ให้ข้อมูล</legend>
      <div class="clearfix">
<label>ชื่อ - นามสกุลผู้ให้ข้อมูล <span>(นาย/นาง/นางสาว)</span></label>
<div class="input">
<input class="xlarge" name="Data[0]" size="60" type="text" value="<?php echo $Data[0]; ?>">
</div>
</div><!-- /clearfix -->
<div class="clearfix label-s">
<label class="no-float">สถานที่ทํางาน</label>
<input class="span2" name="Data[1]" type="text" placeholder="" value="<?php echo $Data[1]; ?>">
<label class="no-float">หมู่ที่</label>
<input class="span1" name="Data[2]" type="text" placeholder="" value="<?php echo $Data[2]; ?>">
<label class="no-float">ตําบล</label>
<input class="span2" name="Data[3]" type="text" placeholder="" value="<?php echo $Data[3]; ?>">
</div>
<div class="clearfix label-s">
<label class="no-float">อําเภอ</label>
<input class="span2" name="Data[4]" type="text" placeholder="" value="<?php echo $Data[4]; ?>">
<label class="no-float">จังหวัด</label>
<input class="span2" name="Data[5]" type="text" placeholder="" value="<?php echo $Data[5]; ?>">
<label class="no-float">โทรศัพท์</label>
<input class="span2" name="Data[6]" type="text" placeholder="" value="<?php echo $Data[6]; ?>">
</div>
<div class="clearfix label-s">
<label class="no-float">ตําแหน่งทางสังคม</label>
<input class="span4" name="Data[7]" type="text" placeholder="" value="<?php echo $Data[7]; ?>">
</div>
  </fieldset>
 <br/>
  
  
  
<!-- ส่วนที่ 1 ข้อมูลทั่วไปของตําบล -->
  <fieldset title="" class="section1">
  <!--[if IE 6]>
<style type="text/css">
	.section3-table tr{
		height: 30px !important;
	}
	.table-lv1, .table-lv2{
		height: 60px !important;
	}
	input.primary{
		height: 31px;
		float: left;
	}
	div.tableContainer {
		overflow: scroll;
		width: 900px !important;
	}
	thead.fixedHeader th {
		text-align: center !important;
		background: #C1C1C1 !important;
		color: #404040 !important;
		font-weight: bold !important;
		border: none !important;
	}
	.fixedHeader th{
		float: none !important;
		display: block !important;
	}
	.fixedHeader tr{
		float: none !important;
		position: relative !important;
		top: 0px !important;
	}
	div.tableContainer table {
		width: 880px !important;
	}
</style>
<![endif]-->
<!--[if IE 7]>
<style type="text/css">
	.table-village-tb .scrollContent tr, .section3-table .scrollContent tr{
		height: 30px !important;
	}
	div.tableContainer {
		overflow: scroll !important;
		width: 900px !important;
	}
	div.tableContainer table {
		width: 880px !important;
	}
</style>
<![endif]-->
<!--[if IE 8]>
<style type="text/css">
	div.tableContainer {
		overflow: scroll !important;
	}
	div.tableContainer table {
		width: 880px !important;
	}
	form .clearfix {
		margin-bottom: 18px;
		zoom: 1;
	}
</style>
<![endif]-->
<!--[if IE 9]>
<style type="text/css">
	div.tableContainer {
		overflow: scroll !important;
	}
	div.tableContainer table {
		width: 880px !important;
	}
	.table-village-tb .scrollContent tr, .section3-table .scrollContent tr{
		height: 30px !important;
	}
</style>
<![endif]-->

  
      <legend>ส่วนที่ 1 ข้อมูลทั่วไปของตําบล</legend>
      <div class="clearfix">
<label class="no-floa">1.1 จํานวนครัวเรือน</label>
<div class="input">
<input class="span2" name="Data[8]" size="30" type="text" value="<?php echo $Data[8]; ?>"> <span>ครัวเรือน</span>
</div>
</div><!-- /clearfix -->
<div class="clearfix">
<label class="no-float">1.2 ประชากรปัจจุบันทั้งหมดโดยประมาณ</label>
<input class="span2" name="Data[9]" type="text" placeholder="" value="<?php echo $Data[9]; ?>"> <span>คน</span>
<label class="no-float label-ss">ชาย</label>
<input class="span2" name="Data[10]" type="text" placeholder="" value="<?php echo $Data[10]; ?>"> <span>คน</span>
<label class="no-float label-ss">หญิง</label>
<input class="span2" name="Data[11]" type="text" placeholder="" value="<?php echo $Data[11]; ?>"> <span>คน</span>
</div>
<div class="clearfix">
<label class="no-float">โดยเฉลี่ยครัวเรือนละ</label>
<input class="span2" name="Data[12]" type="text" placeholder="" value="<?php echo $Data[12]; ?>"> <span>คน</span>
<label class="no-float">มีประชากรแฝง</label>
<input class="span2" name="Data[13]" type="text" placeholder="" value="<?php echo $Data[13]; ?>"> <span>คน</span>
</div>
<div class="clearfix">
<label class="no-float">1.3 การนับถือศาสนา พุทธ (ร้อยละ)</label>
<input class="span1" name="Data[14]" type="text" placeholder="" value="<?php echo $Data[14]; ?>">
<label class="no-float">อิสลาม (ร้อยละ)</label>
<input class="span1" name="Data[15]" type="text" placeholder="" value="<?php echo $Data[15]; ?>">
<label class="no-float">คริสต์ (ร้อยละ)</label>
<input class="span1" name="Data[16]" type="text" placeholder="" value="<?php echo $Data[16]; ?>">
</div>
<div class="clearfix">
<label class="no-float">1.4 ส่วนใหญ่ประกอบอาชีพ</label>
<input class="span3" name="Data[17]" type="text" placeholder="" value="<?php echo $Data[17]; ?>">
<label class="no-float">รองลงมา</label>
<input class="span3" name="Data[18]" type="text" placeholder="" value="<?php echo $Data[18]; ?>">
</div>
</fieldset>
  <br/>
  
  
<!-- ส่วนที่ 2 ข้อมูลผู้ประสานงานในพื้นที่ -->
  <fieldset title="" class="section2">
      <legend>ส่วนที่ 2 ข้อมูลผู้ประสานงานในพื้นที่</legend>
      <h3>ระดับตําบล/เทศบาล</h3>
<table class="bordered-table">
        <thead class="title-head">
          <tr>
            <th>ชื่อตำบล/เทศบาล</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ตําแหน่ง</th>
            <th>เบอร์โทร</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input class="span3" name="Data[217]" type="text" placeholder="" value="<?php echo $Data[217]; ?>"></td>
            <td><input class="span3" name="Data[19]" type="text" placeholder="" value="<?php echo $Data[19]; ?>"></td>
            <td><input class="span3" name="Data[20]" type="text" placeholder="" value="<?php echo $Data[20]; ?>"></td>
            <td><input class="span3" name="Data[215]" type="text" placeholder="" value="<?php echo $Data[215]; ?>"></td>
          </tr>
        </tbody>
      </table>
      
      
      
      
  </fieldset>
  <br/>

  
  
<!-- ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู -->
  <fieldset title="" class="section3">
  <legend>ส่วนที่ 3 การสํารวจเพื่อการฟื้นฟู</legend>



  <fieldset class="sub">
	  <div class="clearfix">
  		<legend>3.1 สถานการณ์ในพื้นที่</legend>
  		<input type="radio" name="Webform[filter11]" value="1"<?php if ($Webform['filter0'] == 1): ?> checked="checked"<?php endif ?>> &nbsp;<span>อยู่ระหว่างฟื้นฟู</span>
  		&nbsp;&nbsp;
  		<input type="radio" name="Webform[filter11]" value="0"<?php if ($Webform['filter0'] == 0): ?> checked="checked"<?php endif ?>> &nbsp;<span>ฟื้นฟูเสร็จสิ้นแล้ว</span>
		</div>
	</fieldset>




	<fieldset class="sub">
		<legend>3.2 พื้นที่ของท่านกำลังทำโครงการฟื้นฟูด้านใดบ้าง</legend>
		<div class="clearfix">
		  
		  <div class="input-indent">
		    <ul class="inputs-list check-list">
		      <li>
		        <label>
		          <input id="ytWebform_filter0" type="hidden" value="0" name="Webform[filter0]">
		          <input name="Webform[filter0]" id="Webform_filter0" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter0'] == 1): ?> checked="checked"<?php endif ?>>					          <span>การเกษตร</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter1" type="hidden" value="0" name="Webform[filter1]">
		          <input name="Webform[filter1]" id="Webform_filter1" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter1'] == 1): ?> checked="checked"<?php endif ?>>					          <span>การจัดการภัยพิบัติ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter2" type="hidden" value="0" name="Webform[filter2]">
		          <input name="Webform[filter2]" id="Webform_filter2" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter2'] == 1): ?> checked="checked"<?php endif ?>>					          <span>เศรษฐกิจและการฟื้นฟูอาชีพ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter3" type="hidden" value="0" name="Webform[filter3]">
		          <input name="Webform[filter3]" id="Webform_filter3" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter3'] == 1): ?> checked="checked"<?php endif ?>>					          <span>การศึกษา</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter4" type="hidden" value="0" name="Webform[filter4]">
		          <input name="Webform[filter4]" id="Webform_filter4" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter4'] == 1): ?> checked="checked"<?php endif ?>>					          <span>สิ่งแวดล้อม</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter5" type="hidden" value="0" name="Webform[filter5]">
		          <input name="Webform[filter5]" id="Webform_filter5" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter5'] == 1): ?> checked="checked"<?php endif ?>>					          <span>อาหาร</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter6" type="hidden" value="0" name="Webform[filter6]">
		          <input name="Webform[filter6]" id="Webform_filter6" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter6'] == 1): ?> checked="checked"<?php endif ?>>					          <span>สุขภาพ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter7" type="hidden" value="0" name="Webform[filter7]">
		          <input name="Webform[filter7]" id="Webform_filter7" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter7'] == 1): ?> checked="checked"<?php endif ?>>					          <span>ที่อยู่อาศัย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter8" type="hidden" value="0" name="Webform[filter8]">
		          <input name="Webform[filter8]" id="Webform_filter8" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter8'] == 1): ?> checked="checked"<?php endif ?>>					          <span>สาธารณสุขและน้ำสะอาด</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter9" type="hidden" value="0" name="Webform[filter9]">
		          <input name="Webform[filter9]" id="Webform_filter9" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter9'] == 1): ?> checked="checked"<?php endif ?>>					          <span>ความเท่าเทียม สิทธิมนุษยชน ความยุติธรรม และประชาธิปไตย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter10" type="hidden" value="0" name="Webform[filter10]">
		          <input name="Webform[filter10]" id="Webform_filter10" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter10'] == 1): ?> checked="checked"<?php endif ?>>					          <span>อื่นๆ (โปรดระบุ)</span>
						  <input class="xlarge" name="Data[23]" size="30" type="text" value="" >
		        </label>
		      </li>
		    </ul>
		  </div>
		</div>
	</fieldset>
	
	
	
	<fieldset class="sub">
		<legend>3.2 พื้นที่ของท่านกำลังทำโครงการฟื้นฟูด้านใดบ้าง</legend>
		<div class="clearfix">
		  
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
        <th>1. กิจกรรมฟื้นฟูโรงเรียน <br />(เช่น ห้องสมุด สนามเด็กเล่น ฯลฯ)</th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[535]" <?php if ($Data[535] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[535]" <?php if ($Data[535] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[537]" type="text" value="<?php echo $Data[537]; ?>"></td>
      </tr>
      <tr>
        <th>2. กิจกรรมการฟื้นฟูพื้นที่เกษตรกรรมขนาดเล็ก <br />(เช่น ปลูกผักลอยน้ำ ธนาคารเมล็ดพันธ์ ต้นกล้าพืชผักสวนครัว โรงสีชุมชน ฯลฯ) </th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[538]" <?php if ($Data[538] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[538]" <?php if ($Data[538] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[540]" type="text" value="<?php echo $Data[540]; ?>"></td>
      </tr>
      <tr>
        <th>3. กิจกรรมการจัดหาอาชีพเสริม</th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[541]" <?php if ($Data[541] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[541]" <?php if ($Data[541] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[543]" type="text" value="<?php echo $Data[543]; ?>"></td>
      </tr>
      <tr>
        <th>4. การจัดหางาน</th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[544]" <?php if ($Data[544] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[544]" <?php if ($Data[544] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[546]" type="text" value="<?php echo $Data[546]; ?>"></td>
      </tr>
      <tr>
        <th>5. การดูแลผู้ป่วย/ผู้พิการ</th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[547]"<?php if ($Data[547] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[547]" <?php if ($Data[547] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[549]" type="text" value="<?php echo $Data[549]; ?>"></td>
      </tr>
      <tr>
        <th>6. การเตรียบรับมือภัยพิบัติ</th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[550]" <?php if ($Data[550] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[550]" <?php if ($Data[550] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[552]" type="text" value="<?php echo $Data[552]; ?>"></td>
      </tr>
      <tr>
        <th>7. อื่นๆ ระบุ <input class="span3" name="Data[559]" type="text" value="<?php echo $Data[559]; ?>"></th>
        <td><input type="radio" value="กิจกรรมที่ชุมชนสามารถดำเนินการเองได้" name="Data[560]" <?php if ($Data[560] == 'กิจกรรมที่ชุมชนสามารถดำเนินการเองได้'): ?> checked="checked" <?php endif; ?>></td>
        <td><input type="radio" value="กิจกรรมที่ต้องการขอรับการสนับสนุน" name="Data[560]" <?php if ($Data[560] == 'กิจกรรมที่ต้องการขอรับการสนับสนุน'): ?> checked="checked" <?php endif; ?>></td>
        <td><input class="span4" name="Data[562]" type="text" value="<?php echo $Data[562]; ?>"></td>
      </tr>
    </tbody>
  </table>
	</div>
	</fieldset>
	
	
	
	
	
	
	<fieldset class="sub">
		<legend>4.4 พื้นที่ท่านเป็นพื้นที่เสี่ยงภัยหรือไม่</legend>
		<div class="clearfix">
		  
		  <div class="input-indent">
		    <ul class="inputs-list check-list">
		      <li>
		        <label>
		          <input id="ytWebform_filter12" type="hidden" value="0" name="Webform[filter12]">
		          <input name="Webform[filter12]" id="Webform_filter12" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter12'] == 1): ?> checked="checked"<?php endif ?>>					          <span>ไม่เป็นพื้นที่เสี่ยงภัย</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter13" type="hidden" value="0" name="Webform[filter13]">
		          <input name="Webform[filter13]" id="Webform_filter13" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter13'] == 1): ?> checked="checked"<?php endif ?>>					          <span>เสี่ยงภัยน้ำท่วม</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter14" type="hidden" value="0" name="Webform[filter14]">
		          <input name="Webform[filter14]" id="Webform_filter14" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter14'] == 1): ?> checked="checked"<?php endif ?>>					          <span>เสี่ยงภัยพายุ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter15" type="hidden" value="0" name="Webform[filter15]">
		          <input name="Webform[filter15]" id="Webform_filter15" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter15'] == 1): ?> checked="checked"<?php endif ?>>					          <span>เสี่ยงภัยดินไหล/ดินถล่ม</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter16" type="hidden" value="0" name="Webform[filter16]">
		          <input name="Webform[filter16]" id="Webform_filter16" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter16'] == 1): ?> checked="checked"<?php endif ?>>					          <span>เสี่ยงภัยสึนามิ</span>
		        </label>
		      </li>
		      <li>
		        <label>
		          <input id="ytWebform_filter17" type="hidden" value="0" name="Webform[filter17]">
		          <input name="Webform[filter17]" id="Webform_filter17" value="1" type="checkbox" class="check-fix-ie"<?php if ($Webform['filter17'] == 1): ?> checked="checked"<?php endif ?>>					          <span>เป็นพื้นที่แก้มลิง</span>
		        </label>
		      </li>
		    </ul>
		  </div>
		</div>
	</fieldset>
	
	
	
	
  </fieldset>
<br /><br />
  