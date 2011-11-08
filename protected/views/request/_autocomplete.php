<?php 
	$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		'name'=>'item-name',
		'id' => 'item-name-input',
		'options'=>array(
			'showAnim'=>'fold',
		),
		'source'=>$this->createUrl('coordinator/autocomplete'),
	));
