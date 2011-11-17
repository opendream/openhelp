<?php

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

?>
<?php if (isset($search) && $search): ?>
  <header><h2><?php echo Yii::t('locale', 'Location List'); ?></h2>
    <form action="" method="get">
      <?php $this->widget('ext.location.LocationWidget', array('model' => new Location, 'attribute' => 'id')); ?>
      <input id="find-location-submit" type="submit" value="<?php echo Yii::t('locale', 'Find'); ?>" />
    </form>
	</header>
	
<?php endif ?>

<?php foreach ($locationList as $location): ?>	 
<article class="db-list">
  <hgroup class="db-item1">
    <?php echo LocationHtml::locationView($location['id'], array('style' => 'endLevelLink')); ?>
  </hgroup> <!-- /db-item1 -->

	<?php if ($extraDouble): ?>
	<div class="db-item2">
	    <table>
	      <tbody>
    	  <?php foreach ($extraDouble as $key => $row): ?>
        <tr>
          <td id="extra-double-label-<?php echo $key; ?>" class="extra-double-label"><?php echo $row['label']; ?></td>
          <td class="extra-double-input">
            <span id="extra-double-prefic-<?php echo $key; ?>" class="extra-double-prefix"><?php echo $row['prefix']; ?></span>
            <span id="extra-double-value-<?php echo $key; ?>" class="extra-double-value">
              <?php echo $location['extra_double'.$key]; ?>
            </span>
            <span id="extra-double-suffix-<?php echo $key; ?>" class="extra-double-suffix"><?php echo $row['suffix']; ?></span>
          </td>
        </tr>
    	  <?php endforeach ?>
    	  </tbody>
  	  </table>
	</div>
	<?php endif ?>
  
  <div class="db-item3">
    <ul>
      <?php $itemDetails = WidgetManager::getItemDetails($location['id']);?>
      <?php foreach ($itemDetails as $item): ?>
      <li class="need-<?php echo $item['id']; ?>">
        <img 
          src="<?php echo bu($item['image_url']); ?>" 
          alt="<?php echo $item['name']; ?>" 
          title="<?php echo $item['name']; ?>" 
          class="<?php echo $item['amount']? 'active': 'in-active'; ?>"/>
        <div class="tooltip-popup"><?php echo $item['name']; ?> <?php echo $item['amount']; ?></div>
      </li>
      <?php endforeach ?>
    </ul>
  </div> <!-- /db-item3 -->
</article><!-- /db-list -->
<?php endforeach ?>

<p class="readmore"><a class="request-location-readmore" href="<?php echo CController::createUrl("/api/request?action=location&page=$nextPage&ipp=$ipp"); ?>"><?php echo Yii::t('locale', 'read more'); ?></a></p>
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
