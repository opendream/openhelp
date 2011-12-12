<div id="sidebar-fix">

    <?php if (isset($all) && $all): ?>
    <?php //TODO: All name ?>
    <?php else: ?>
    <div class="display-manager">    
    <h2><?php echo current($nameAll); ?></h2>
      <span class="title"><?php echo t('Select Display'); ?>: </span>
      <ul>
        <li><?php echo l(t('Map'), '#map'); ?></li>
        <li><?php echo l(t('Item List'), '#list'); ?></li>
      </ul>
    </div>
    
    <?php endif ?>


  <div id="control-box">
    <div id="webform-filters">
      <?php foreach ($filtersAll as $type => $filters): ?>
      <form id="webform-filters-<?php echo $type; ?>" action="<?php echo bu("api/webform?action=location&type=$type"); ?>" method="post">
        <span class="title" style="border: 2px solid rgb(<?php echo $colorAll[$type]; ?>);"><?php echo $filters['title']['filter'] ?></span>
        <ul>
        <?php foreach ($filters['data'] as $name => $filter): ?>
          <li>
            <input class="<?php echo $type; ?>" type="checkbox" name="<?php echo $name; ?>" value="1" id="<?php echo $name; ?>" />
            <label for="<?php echo $name; ?>" class="<?php echo $name; ?>"><?php echo $filter['label'] ?></label>
    
            <?php if ($filter['widget'] == 'dropDownList'): ?>
              <?php $options = WidgetManager::getFilterOptions($type, $name, $filter['prefix']); ?>
              <?php echo CHtml::dropDownList(
                $name, 
                key($options), 
                $options, 
                array('id' => $name.'-value', 'class' => $type)
              ) ?>
      
            <?php elseif (false): ?>
      
              <?php //TODO: make other widget ?>
    
            <?php endif ?>
    
          </li>
        <?php endforeach ?>
        </ul>
      </form>
      <?php endforeach ?>
    </div>

  
    <div id="location-filters">
      <span class="title" style="border: 2px solid rgb(170, 170, 170)"><?php echo t('Select Location') ?></span>
      <div class="location-filters-input">
        <?php
        /*
          $onclick = '
            var level = $(this).attr("id").replace("Location_", "");
            var value = $(this).val();';
            
          foreach ($types as $type) {
            $onclick .= 'filter["'.$type.'"].addLocation(level, value); filter["'.$type.'"].run();';
          }
          */
        
        ?>
        <?php $this->widget('ext.location.LocationWidget', array(
          'model' => new Location, 
          'attribute' => 'id', 
          'join' => 'webform', 
          'multiple' => 1,
          //'onclick' => $onclick
        )); ?>
      </div>
    </div>
  
  </div>

</div>

<div id="tab-content">
  <div id="list" style="display: none;">
    <div class="webform-content drop-shadow curved curved-hz-1">
      <div id="webform-list">
        <?php foreach ($types as $type): ?>
        <div id="webform-list-<?php echo $type; ?>">
        </div>
        <a class="webform-location-readmore-<?php echo $type; ?>" href="#"><?php echo t('read more'); ?></a>
        <?php endforeach ?>
      </div>
      <p class="readmore">
      </p>
    </div>  
  </div>
  <div id="map">
    <div id="map-canvas"></div>
  </div>
</div>




<?php echo CGoogleApi::init(); ?>
<script type="text/javascript" src="<?php echo bu('js/markerclusterer.js'); ?>"></script>
<script type="text/javascript" src="<?php echo bu('js/jquery.tmpl.js'); ?>"></script>
<script type="text/javascript" src="<?php echo bu('js/jquery.qtip.js'); ?>"></script>

<script type="text/javascript">

  // Tab
  $('.display-manager a').click(function (e) {
    e.preventDefault();
    $('#tab-content > *').hide();
    $($(this).attr('href')).show();
    $('.display-manager a').removeClass('active');
    $(this).addClass('active');
  });
  $('.display-manager a').eq(0).click();
  
  
  
  
  // Map List Filter
  var basePath = '<?php echo bu(); ?>';
  
  var templateItem = <?php echo CJSON::encode($this->renderPartial('//webform/_item', array(), true)); ?>;
  $.template('templateItem', templateItem);
  
  var levels = <?php echo CJSON::encode($levels); ?>;
  //var allOptions = <?php echo WidgetManager::getAllTypeFilter(true); ?>;
  
  
  var types = <?php echo CJSON::encode($types); ?>;
  
  var stylesAll = <?php echo CJSON::encode($stylesAll); ?>;

  var locationsAll = <?php echo CJSON::encode(WidgetManager::getAllWebformLocation()); ?>;
  
  var markers = <?php echo WidgetManager::getAllTypeFilter(true); ?>;
  
  
  var currMarkers = {};
  var locationMarkers = {};
  var allMarkers = {};
  var markerCluster = {};
  var list = {};
  var filter = {};
  $.each(types, function (i, type) {
    currMarkers[type] = [];
    locationMarkers[type] = [];
    allMarkers[type] = [];
    markerCluster[type] = null;
    list[type] = null;
    filter[type] = null;
  })

  
  
  
  // Map  =============================================
  
  var mapLoadded = function () {
      
    var center = new google.maps.LatLng(13.768, 100.554);
    var options = {
      'scrollwheel': false,
      'zoom': 5,
      'center': center,
      'mapTypeId': google.maps.MapTypeId.ROADMAP
    };
  
    var bounds = new google.maps.LatLngBounds;

    var map = new google.maps.Map($('#map-canvas').get(0), options);
    $.each(types, function (i, type) {
      $.each(locationsAll[type], function (i, location) {
        var latLng = new google.maps.LatLng(location['lat'], location['lng']);
        var marker = new google.maps.Marker({'position': latLng, 'data': location});
      
        google.maps.event.addListener(marker, 'click', function() {
          var info_window = new google.maps.InfoWindow;
          var item_contents = $.tmpl('templateItem', marker['data']).html();
          info_window.setContent(item_contents);
          info_window.open(map, marker);
        });
      
        currMarkers[type].push(marker);
        bounds.extend(latLng);
    
        // Prepare for filters
        $.each(location, function (field, value) {
          if (field.substr(0, 6) == 'filter') {
            if (!markers[location['type']][field][value]) {
              markers[location['type']][field][value] = [];
            }
            markers[location['type']][field][value].push(marker);
          }
        })
      });
    
      allMarkers[type] = currMarkers[type];
  
      markerCluster[type] = new MarkerClusterer(map, currMarkers[type], {'styles': stylesAll[type]});
    });
  
    map.panTo(bounds.getCenter());
    map.fitBounds(bounds);
  
    // List =============================================
    var List = function (type) {
      var ipp = 20;
      var currentPage = 0;
      
      var self = this;
      
      self.append = function () {
        for (var i=currentPage*ipp; (i < (currentPage+1)*ipp) && (i < currMarkers[type].length); i++) {
          $.tmpl('templateItem', currMarkers[type][i]['data']).appendTo('#webform-list-' + type);
          if (i == currMarkers[type].length - 1) {
            $('.webform-location-readmore-' + type).hide();
          }
        }
        currentPage = currentPage + 1;
      }
      
      self.reload = function () {
        $('#webform-list-' + type).html('');
        $('.webform-location-readmore-' + type).show();
        currentPage = 0;
        self.append();
        self.append();
      }
    }
    
    $.each(types, function (i, type) {
      
      list[type] = new List(type);
      list[type].reload();
      
      $('.webform-location-readmore-' + type).click(function (e) {
        e.preventDefault();
        list[type].append();
      });
      
    });

    
  
  
    // Filter =============================================
  
    var Filter = function (type) {
      
      var filters = {};
      var locations = {};
    
      self = this;
            
      self.removeFilter = function (name) {        
        if (filters[name]) { delete(filters[name]); }        
      }
      self.addFilter = function (name, value) {
        filters[name] = value;        
      }        
      self.addLocation = function (level, value) {
        if (!value) {
          // Scope bug can't use self
          if (locations[level]) { delete(locations[level]); }
        }
        else {
          locations[level] = value;
        }
      }

      self.run = function () {
        currMarkers[type] = [];
        console.log(locations);
        if ($.isEmptyObject(filters)) {
          currMarkers[type] = allMarkers[type];
        }
        else {
          $.each(filters, function (name, value) {
            currMarkers[type] = $.merge(currMarkers[type], markers[type][name][value]);
          })
        }
      
        currMarkers[type] = $.unique(currMarkers[type]);
                
        // Location Filter
        var finalMarkers = [];
        $.each(currMarkers[type], function(i, marker) {
          var data = marker['data'];
          var pass = true;
          $.each(locations, function(level, value) {
            pass = pass && (data[level] == value);
          })
          if (pass) {
            finalMarkers.push(marker);
          }
        })
        currMarkers[type] = finalMarkers;
        
        markerCluster[type].clearMarkers();
        markerCluster[type].addMarkers(currMarkers[type]);
      
        list[type].reload();
        
        return self;
      }
    
    }
  
    
    $.each(types, function (i, type) {  
      filter[type] = new Filter(type);      
    });
    
    var scope = $('#webform-filters');
  
    // Text filter
    $('input[type=checkbox]', scope).change(function () {
      var type = $(this).attr('class');
      var name = $(this).attr('name');
  
      var select = $(this).siblings('select');
      var value = select? select.val(): $(this).val();
      
      if($(this).attr('checked')) {
        filter[type].addFilter(name, value);
        filter[type].run();
      }
      else {
        filter[type].removeFilter(name);
        filter[type].run();
      }
    });

    $('select', scope).change(function () {
      var type = $(this).attr('class');
      var name = $(this).attr('name');
  
      var checkbox = $(this).siblings('input[type=checkbox]');
      var value = $(this).val();
  
      if (checkbox && !checkbox.attr('checked')) {
        return false;
      }
  
      filter[type].addFilter(name, value);
      filter[type].run();

    });
    

    $('#location-filters select').live('click', function () {
      var level = $(this).attr('id').substr(9);
      var value = $(this).val();
      if (levels[level] != value) {
        $.each(types, function(i, type) {
          filter[type].addLocation(level, value);
          filter[type].run();
        });
        levels[level] = value;
      }
    })
    
      


  
  }

  google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});

</script>



