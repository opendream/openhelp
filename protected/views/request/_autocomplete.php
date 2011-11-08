<?php 
	$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		'name'=>'item-name',
		'id' => 'item-name-input',
		'source'=>array('ac1', 'ac2', 'ac3'),
	));