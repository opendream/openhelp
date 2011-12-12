<div class="general">
  <div class="meta-wrapper">
    <ul class="meta">
    <li>
      <span class="extra-double-label">
        <?php echo t('ID'); ?>
      </span>
      <span class="extra-double-input">
          <?php echo $model->id; ?>
      </span>
    </li>
    <li>
      <span class="extra-double-label">
        <?php echo t('Date'); ?>
      </span>
      <span class="extra-double-input">
        <?php echo date('d/m/Y', strtotime($model->date_created)); ?>
      </span>
    </li>
    <li>
      <span class="extra-double-label">
        <?php echo t('Author'); ?>
      </span>
      <span class="extra-double-input">
        <?php echo $model->user->username; ?>
      </span>
    </li>
    </ul>
  </div>
  
	<div class="location-list">
	  <?php foreach ($model->locations as $location): ?>
    <div class="location-item">
      <?php echo LocationHtml::locationView($location->id); ?>
    </div>
	  <?php endforeach ?>
  </div>
  
</div>

<div id="map">
  <div id="map-canvas" style="width:598px; height: 245px;"></div>
</div>

<?php echo CGoogleApi::init(); ?>
<script type="text/javascript" src="<?php echo bu('js/markerclusterer.js'); ?>"></script>

<script type="text/javascript">

var mapLoadded = function () {
  var locations = <?php echo CJSON::encode($model->locations); ?>;
  var styles = <?php echo CJSON::encode($styles); ?>;
  
  var markers = [];
  
  var center = new google.maps.LatLng(13.768, 100.554);
  var options = {
    'scrollwheel': false,
    'zoom': 5,
    'center': center,
    'mapTypeId': google.maps.MapTypeId.ROADMAP
  };
  
  var map = new google.maps.Map($('#map-canvas').get(0), options);
  
  var bounds = new google.maps.LatLngBounds;
  
  $.each(locations, function (i, location) {
    var latLng = new google.maps.LatLng(location['lat'], location['lng']);
    var marker = new google.maps.Marker({'position': latLng});
    
    markers.push(marker);
    bounds.extend(latLng);
  });
  
  var markerCluster = new MarkerClusterer(map, markers, {'styles': styles});
  map.panTo(bounds.getCenter());
  if (markers.length > 1) {
    map.fitBounds(bounds);
  }
  else {
    map.setZoom(13);
  }
}

google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});

</script>

<?php if (!empty(Yii::app()->params['webforms'][$type]['sections'])): ?>
<div class="display-manager-wrapper">
  <ul class="display-manager">
    <li><a href="#filter-detail"><?php echo t('Detail'); ?></a></li>
    <?php foreach (Yii::app()->params['webforms'][$type]['sections'] as $name => $section): ?>
    <li><a href="#<?php echo $name; ?>-detail"><?php echo $section['title']; ?></a></li>
    <?php endforeach ?>
  </ul>
</div>
<?php endif ?>

<div id="tab-content">
  <div id="filter-detail">
    <?php foreach ($filters as $name => $filter): ?>
    <div class="filter-item filter-item-<?php echo $name; ?>">
      <div class="filter-item-label"><?php echo $filter['label']; ?></div>
      <div class="filter-item-description"><?php //echo $filter['description']; ?></div>
      <div class="filter-item-prefix"><?php echo $filter['prefix']; ?></div>
      <div class="filter-item-value"><?php echo $model->$name; ?></div>
    </div>
    <?php endforeach ?>
    <div class="full-description"><a href="<?php echo bu('webform/'.$model->id); ?>"><?php echo t('View full descritpion'); ?></a></div>
  </div>

  <?php foreach (Yii::app()->params['webforms'][$type]['sections'] as $name => $section): ?>
  <div id="<?php echo $name; ?>-detail">
  
  </div>
  <?php endforeach ?>
</div>

<script type="text/javascript" charset="utf-8">
  // Tab
  $('.display-manager a').click(function (e) {
    e.preventDefault();
    $('#tab-content > *').hide();
    $($(this).attr('href')).show();
    $('.display-manager a').removeClass('active');
    $(this).addClass('active');
  });
  $('.display-manager a').eq(0).click();
</script>