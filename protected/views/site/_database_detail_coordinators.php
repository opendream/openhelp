<section class="st-request">
<h2>ข้อมูลพื้นที่</h2>
<p>ต. เกาะเสม็ด อ.บางปะอิน จ.อยุธยา</p>
<h2>ผู้ประสานงานในพื้นที่</h2>
<table class="zebra-striped request_coordinators">
			<thead>
			  <tr><th>ชื่อ - นามสกุล</th><th>ตำแหน่ง</th><th>เบอร์โทรศัพท์</th></tr>
			</thead>
			<tbody>
			<?php foreach ($coordinators as $person): ?>
			  <tr class="odd"><td><?php echo $person['fullname'] ?></td><td><?php echo $person['position']?></td><td><?php echo $person['tel'] ?></td></tr>
			<?php endforeach ?>
			</tbody>
		</table>
		<h2>วิธีการเดินทางเข้าพื้นที่</h2>
		<p>เดินทางโดยทางเรือ สำหรับรถ ถนน347ขาด รถเข้าได้แต่หมู่ 1 บางพื้นที่, และหมู่ 3 ต้องใช้ 4WD โทรประสานกับผู้ประสานงานในพื้นที่เพื่อระบุจุด/ตำแหน่งโดยละเอียดอีกที</p>
		<h2>ข้อสังเกตอื่น ๆ</h2>
		<ul>
		  <i>ปัญหาโดยรวมยังขาดการจัดการที่ดี คือการกระจายถุงยังชีพ</i>
		  <i>สำหรับหมู่ 3 มีจัดรวมอยู่ที่วัดเชิงธาตุ</i>
		  <i>สำหรับหมู่ที่ 2 มีเรือพาย 20 ลำ เรือยนต์ 3 ลำอยู่แล้ว</i>
		  <i>ศูนย์อพยพทีคาดการณืไว้คือ สะพานแม่น้ำเจ้าพระยา ศูนย์ศิลปาชีพเกาะเกร็ด</i>
		</ul>				     

</section> <!-- /st-detail -->

<?php     
	Yii::app()->clientScript->registerScript('helloscript',"
	$('tr:odd').addClass('odd');
	$('tr:odd').addClass('odd');
    ",CClientScript::POS_READY);
?>
