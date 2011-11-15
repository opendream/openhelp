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
		<ul>
		<?php foreach ($journey as $key => $point): ?>
			<li><?php echo $point['label'] ?></li>
		<?php endforeach ?>
		</ul>

		<h2>ข้อสังเกตอื่น ๆ</h2>
		<ul>
		<?php foreach ($remark as $key => $point): ?>
			<li><?php echo $point['label'] ?></li>
		<?php endforeach ?>
		</ul>				     

</section> <!-- /st-detail -->
<?php     
	Yii::app()->clientScript->registerScript('helloscript',"
	$('tr:odd').addClass('odd');
	$('tr:odd').addClass('odd');
    ",CClientScript::POS_READY);
?>
