<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<div class="target">
  <h2>พื้นที่</h2>
	<div class="clearfix">
	<?php $this->widget('ext.location.LocationMultipleWidget', array('model' => $model, 'attribute' => 'locations')); ?>
  </div>
</div>

<fieldset class="section1">
  <div class="clearfix">
		<legend>ชื่อเรื่อง</legend>
		<input type="text" name="Data[0]" value="<?php echo $Data[0] ?>">
	</div>
</fieldset>

<fieldset>
  <div class="clearfix">
		<legend>เนื้อความ</legend>
		<div class="section2">
		  <?php $this->widget('ext.editor.EditorWidget', array('attribute' => 'Data[1]', 'default' => $Data[1])); ?>
		</div>
	</div>
</fieldset>