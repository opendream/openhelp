<?php

$this->layout='empty';

$items = WidgetManager::getItemDetails($id);
$coordinators = WidgetManager::getCoordinators($id);
$location_text = LocationHtml::locationView($id, array('style' => 'reverse'));
$extraLocation0s = WidgetManager::getExtraLocation0s($id, true);
$allExtraTexts = WidgetManager::getAllExtratexts($id);
$post_date = WidgetManager::getDateByLocation($id, $village);
$last_updated = $post_date[0]['last_updated'];
$cdate = explode(" ", $last_updated);
$cdate = $cdate[0];
$sdate = explode("-", $cdate);

$extraDouble = array(
	'sum' => WidgetManager::getSumExtraDouble($id),
	'water_level' => WidgetManager::getMinMaxExtraDouble($id),
);
$params = array(
	'items' => $items, 
	'coordinators' => $coordinators, 
	'location_text' => $location_text,
	'location_extra0s' => $extraLocation0s,
	'extraDouble' => $extraDouble,
	'location_id' => $id,
	'allExtraTexts' => $allExtraTexts,			
	'sdate' => $sdate,
);
$this->pageTitle = strip_tags($location_text);
$this->renderPartial('locationView2', $params);


?>