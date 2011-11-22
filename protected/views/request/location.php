<?php

$query = isset($_REQUEST['Location'])? array_filter($_REQUEST['Location']): array();

if (isset($query['id'])) {
  unset($query['id']);
}

$addresses = Yii::app()->params['location'];
// GROUP BY ==========
$groupByList = $addresses;
$groupBy = implode(', ', $groupByList);

// SELECT =======
$selectList = $addresses;
$extraDouble = Yii::app()->params['request']['extra']['double'];			
foreach ($extraDouble as $key => $value) {
  $key = 'extra_double'.$key;
  if ($value['func'] == 'min-max') {
    $col = "CONCAT(MIN($key), '-', MAX($key)) AS $key";
  }
  elseif (!isset($value['func']) || empty($value['func']) || $value['func'] == 'sum') {
    $col = "SUM($key) AS $key";
  }
  $selectList[] = $col;
}
$select = implode(', ', $selectList);

// WHERE ========
$whereList = array(1);
foreach ($query as $level => $value) {
  $whereList[] = $level.'="'.$value.'"';
}
$where = implode(' AND ', $whereList);

// SOLO ==========   
$obset = $page * $ipp;
$qtxt = "SELECT location.id AS id, $select FROM location, request WHERE location.id = request.location_id AND $where GROUP BY $groupBy ORDER BY last_updated DESC LIMIT $obset, $ipp";

$command = Yii::app()->db->createCommand($qtxt);
$locationList = $command->queryAll();

$nextPage = $page + 1;

$qstr = http_build_query(array('Location' => $query));

?>
<?php if (isset($search) && $search): ?>
  <header><h2><?php echo Yii::t('locale', 'Location List'); ?></h2>
    <form action="" method="get">
      <?php $this->widget('ext.location.LocationWidget', array('model' => new Location, 'attribute' => 'id', 'join' => 'request')); ?>
      <input id="find-location-submit" type="submit" value="<?php echo Yii::t('locale', 'Find'); ?>" />
    </form>
	</header>
	
<?php endif ?> 
<?php  $this->renderPartial("//request/_location_db_list", array('locationList' => $locationList, 'extraDouble' => $extraDouble)); ?>

<?php if (!isset($page) && empty($locationList)): ?>
  <div class="no-result"><?php echo t('No results found.'); ?></div>
<?php elseif (count($locationList) >= $ipp): ?>  
  <p class="readmore"><a class="request-location-readmore" href="<?php echo CController::createUrl("/api/request?action=location&$qstr&page=$nextPage&ipp=$ipp"); ?>"><?php echo Yii::t('locale', 'read more'); ?></a></p>
  <script>
    $('.request-location-readmore').click(function (e) {
      e.preventDefault();
      var self = $(this);
      $.getJSON($(this).attr('href'), {}, function(resp) {
        //console.log(resp);
        self.parent().parent().append(resp);
        self.remove();
      });
    })
  </script>
<?php endif ?>

