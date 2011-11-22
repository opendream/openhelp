<div class="map-popup-wrapper" style="width:1000px">
	<div class="map-content-row">
		<div class="detail"><?php echo LocationHtml::locationView($data->location_id, array('style' => 'reverse')); ?></div>
	</div>
	<div class="map-content-row">
		<span class="label">จำนวนครัวเรือน</span>
		<span class="people1"><?php echo $data->extra_double0; ?> ครัวเรือน</span>
	</div>

	<div class="map-content-row">
		<span class="label">จำนวนประชากร</span>
		<span class="people2"><?php echo $data->extra_double1; ?> คน</span>
	</div>

	<div class="map-content-row">
		<span class="label">ระดับน้ำ</span>
		<span class="water"><?php echo $data->extra_double2; ?> เมตร</span>
	</div>
</div>