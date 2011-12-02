<form id="webform-filters" action="<?php echo bu("api/webform?action=location&type=$type"); ?>" method="post">
  <ul>
  <?php foreach ($filters['data'] as $name => $filter): ?>
    <li>
      <input type="checkbox" name="Allows[<?php echo $name; ?>]" value="1" id="<?php echo $name; ?>" />
      <label for="<?php echo $name; ?>"><?php echo $filter['label'] ?></label>
      
      <?php if ($filter['widget'] == 'dropDownList'): ?>
        <?php $options = WidgetManager::getFilterOptions($type, $name); ?>
        <?php echo CHtml::dropDownList(
          "Filters[$name]", 
          key($options), 
          $options, 
          array('id' => $name.'-value')
        ) ?>
        
      <?php elseif (false): ?>
        
        <?php //TODO: make other widget ?>
      
      <?php endif ?>
      
    </li>
  <?php endforeach ?>
  </ul>
</form>

<div id="map" style="width: 100%; height: 500px;"></div>

<?php echo CGoogleApi::init(); ?>
<script type="text/javascript" src="<?php echo bu('js/markerclusterer.js'); ?>"></script>

<script type="text/javascript">
  var basePath = '<?php echo bu(); ?>';
  
  var styles = [
    {
      url: "" + basePath + "/images/m1.png",
      height: 53,
      width: 52,
      textColor: '#ffffff',
      textSize: 11
    }, {
      url: "" + basePath + "/images/m2.png",
      height: 56,
      width: 55,
      textColor: '#ffffff',
      textSize: 11
    }, {
      url: "" + basePath + "/images/m3.png",
      height: 66,
      width: 65,
      textColor: '#ffffff',
      textSize: 11
    }
  ];
  
  var mapLoadded = function () {
    $.getJSON($('#webform-filters').attr('action'), function(locations) {
    
      var center = new google.maps.LatLng(13.768, 100.554);
      var options = {
        'zoom': 5,
        'center': center,
        'mapTypeId': google.maps.MapTypeId.ROADMAP
      };
      
      var bounds = new google.maps.LatLngBounds;

      var map = new google.maps.Map($('#map').get(0), options);

      var markers = [];
      $.each(locations, function (i, location) {
        var latLng = new google.maps.LatLng(location.lat, location.lng);
        var marker = new google.maps.Marker({'position': latLng});
        markers.push(marker);
        bounds.extend(latLng);
      });
    
      var markerCluster = new MarkerClusterer(map, markers, {'styles': styles});
      
      map.panTo(bounds.getCenter());
      map.fitBounds(bounds);
    
    });
  }
  
  google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});
  
</script>