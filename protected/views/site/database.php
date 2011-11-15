<?php
	echo $this->renderPartial('_database_detail_lastupdate');
	echo $this->renderPartial('_database_detail_map');
	echo $this->renderPartial('_database_detail_need', array('items' => $items	));
	echo $this->renderPartial('_database_detail_coordinators', array('coordinators' => $coordinators,
	 'journey'=>$extra['journey'], 'remark' => $extra['remark']));
?>
	