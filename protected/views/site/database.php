<?php
	echo $this->renderPartial('_database_detail_lastupdate');
	echo $this->renderPartial('_database_detail_map');
	echo $this->renderPartial('_database_detail_need', array('items' => $items	));
?>
	