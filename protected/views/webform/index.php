<div id="sidebar-fix">

  <?php if (isset($all) && $all): ?>
    <?php if ($about): ?>
    <div id="about-box">
      <?php echo Yii::app()->params['about']; ?>
    </div>
    <?php endif ?>
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

  <?php if ($showFilter): ?>    
  <div id="control-box">
    <div id="webform-filters">
      <?php foreach ($filtersAll as $type => $filters): ?>
      <?php if (!(isset($all) && $all && $filters['status']['all'] || isset($multiple)) && !((!isset($all) || !$all) && $filters['status']['type'])){
        continue;
      } ?>
      <form id="webform-filters-<?php echo $type; ?>" action="<?php echo bu("api/webform?action=location&type=$type"); ?>" method="post">
        <span class="title">
          <span class="color-label" style="background-color: rgb(<?php echo $colorAll[$type]; ?>);">
            <?php if (isset($all) && $all): ?>
            <input class="filter-all" type="checkbox" name="<?php echo $type; ?>" value="1" id="filter-all-<?php echo $type; ?>" checked="checked" />
            <?php endif ?>
          </span>
          <span class="color-text"><?php echo isset($all) && $all? $filters['title']['filterAll']: $filters['title']['filter'] ?></span>
          <?php if (isset($all) && $all && !empty($filters['data'])): ?>
          <span class="toggle-label">
            <a href="#webform-filters-list-<?php echo $type; ?>" class="toggle-label-link <?php if (isset($all) && $all): ?>hide<?php else: ?>show<?php endif ?>">toggle</a>
          </span>
          <?php endif ?>
        </span>
        <ul class="webform-filters-list" id="webform-filters-list-<?php echo $type; ?>" <?php if (isset($all) && $all): ?>style="display: none;"<?php endif ?>>
        <?php foreach ($filters['data'] as $name => $filter): ?>
          <li class="<?php echo $filter['widget']; ?>">
            <input class="<?php echo $type; ?>" type="checkbox" name="<?php echo $name; ?>" value="1" id="<?php echo $name; ?>" />
            <label title="<?php echo $filter['description']; ?>" for="<?php echo $name; ?>" class="<?php echo $name; ?>"><?php echo $filter['label'] ?></label>
            
            <?php if (isset($filter['options'])): ?>
              <?php $options = $filter['options']; ?>
            <?php else: ?>
              <?php $options = WidgetManager::getFilterOptions($type, $name, $filter['prefix']); ?>
            <?php endif ?>
            
            <?php if ($filter['widget'] == 'dropDownList'): ?>
              <?php echo CHtml::dropDownList(
                $name, 
                key($options), 
                $options, 
                array('id' => $name.'-value', 'class' => $type)
              ) ?>
      
            <?php elseif ($filter['widget'] == 'checkBox'): ?>
              <?php echo CHtml::hiddenField(
                $name, 
                key($options), 
                array('id' => $name.'-value', 'class' => $type)
              ) ?>
            <?php endif ?>
    
          </li>
        <?php endforeach ?>
        </ul>
      </form>
      <?php endforeach ?>
    </div>

    <?php if ((isset($all) && $all && $locationFilterStatus['all']) || ((!isset($all) || !$all) && $locationFilterStatus['type'])): ?>
    <div id="location-filters">
      <span class="title">
        <span class="color-label" style="background-color: rgb(150, 150, 150);"></span>
        <span class="text-label"><?php echo t('Select Location') ?></span>
        <?php if (isset($all) && $all): ?>
        <span class="toggle-label">
          <a href=".location-filters-input" class="toggle-label-link <?php if (isset($all) && $all): ?>hide<?php else: ?>show<?php endif ?>">toggle</a>
        </span>
        <?php endif ?>
      </span>
      <div class="location-filters-input" <?php if (isset($all) && $all): ?>style="display: none;"<?php endif ?>>
        <?php $this->widget('ext.location.LocationWidget', array(
          'model' => new Location, 
          'attribute' => 'id', 
          'join' => 'webform', 
          'multiple' => 1,
        )); ?>
      </div>
    </div>
    <?php endif ?>

  
  </div>
  <?php endif ?>
  

</div>

<?php if (isset($popup) && $popup): ?>
<div class="popup-box-wrapper">
  <div class="popup-box">
    <?php echo $popup; ?>
  </div>
</div>
<?php endif ?>

<div id="tab-content">
  <div id="list" style="display: none;">
    <div class="webform-content drop-shadow curved curved-hz-1">
      <div id="webform-list">
        <?php foreach ($types as $type): ?>
        <div id="webform-list-<?php echo $type; ?>">
        </div>
        <p class="readmore">
        <a class="webform-location-readmore-<?php echo $type; ?>" href="#"><?php echo t('read more'); ?></a>
        </p>
        <?php endforeach ?>
      </div>
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
  
  // Map List Filter
  var basePath = '<?php echo bu(); ?>';
  var styleMarkerJs = "<?php echo bu('js/StyledMarker.js'); ?>";
  
  var templateItem = <?php echo CJSON::encode($this->renderPartial('//webform/_item', array(), true)); ?>;
  $.template('templateItem', templateItem);
  
  var levels = <?php echo CJSON::encode($levels); ?>;
  //var allOptions = <?php echo WidgetManager::getAllTypeFilter(true); ?>;
  
  
  var types = <?php echo CJSON::encode($types); ?>;
  
  var stylesAll = <?php echo CJSON::encode($stylesAll); ?>;
  var colorAll = <?php echo CJSON::encode($colorAll); ?>;
  
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
    var info_window = new google.maps.InfoWindow;
    
    var map = new google.maps.Map($('#map-canvas').get(0), options);
    $.getScript(styleMarkerJs, function () {
      $.each(types, function (i, type) {
        var color = colorToHex('rgb(' + colorAll[type] + ')');
        var styleIcon = new StyledIcon(StyledIconTypes.MARKER,{'color': color, 'text': '•'});
          
        $.each(locationsAll[type], function (i, location) {
          var latLng = new google.maps.LatLng(location['lat'], location['lng']);
          var marker = new StyledMarker({'styleIcon': styleIcon, 'position': latLng, 'data': location});

          google.maps.event.addListener(marker, 'click', function() {
            info_window.close();
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
          });
          
        });

        allMarkers[type] = currMarkers[type];

        markerCluster[type] = new MarkerClusterer(map, currMarkers[type], {'styles': stylesAll[type]});
      });
  
      map.panTo(bounds.getCenter());
      map.fitBounds(bounds);
    });
  
    // List =============================================
    var List = function (type) {
      var ipp = 20;
      var currentPage = 0;
      
      var self = this;
      
      self.append = function () {
        for (var i=currentPage*ipp; (i < (currentPage+1)*ipp) && currMarkers[type] && (i < currMarkers[type].length); i++) {
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
      setTimeout(function () {
        list[type].reload();
      }, 1000);
      
      
      $('.webform-location-readmore-' + type).click(function (e) {
        e.preventDefault();
        list[type].append();
      });
      
    });

    
  
  
    // Filter =============================================
  
    var Filter = function (type) {
      
      var filters = {};
      var latestFilters = {};
      var locations = {};
      var latestLocations = {};
      var disabled = false;
      var latestDisabled = false;
    
      var self = this;
      
      self.getLocations = function () {
        return locations;
      }
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
      self.enable = function () {
        disabled = false;
      }
      self.disable = function () {
        disabled = true;
      }

      self.run = function () {
          if (disabled) {
            currMarkers[type] = [];
            markerCluster[type].clearMarkers();
            list[type].reload();
            
          }
          else {
            if (disabled != latestDisabled || 
                !isEquals(filters, latestFilters) || 
                !isEquals(locations, latestLocations)
                ) {

              currMarkers[type] = [];
            
              if ($.isEmptyObject(filters)) {
                currMarkers[type] = allMarkers[type];
              }
              else {
                $.each(filters, function (name, value) {
                  if (markers[type][name][value]) {
                    currMarkers[type] = $.merge(currMarkers[type], markers[type][name][value]);
                  }
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
                          
              
            }
          }

          
          latestFilters = $.extend({}, filters);
          latestLocations = $.extend({}, locations);
          latestDisabled = disabled;

      }
    
    }
  
    
    $.each(types, function (i, type) {  
      filter[type] = new Filter(type);      
    });
    
    var scope = $('#webform-filters .webform-filters-list');
  
    // Text filter
    $('input[type=checkbox]', scope).change(function () {
      var type = $(this).attr('class');
      var name = $(this).attr('name');
      var domId = $(this).attr('id');
  
      var select = $(this).siblings('#' + domId + '-value');
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
    
    $(document).delegate('#location-filters select, #location-filters input', 'click', function () {
      var level = $(this).attr('id').substr(9);
      var value = $(this).val();
      //var options = $(this).children('option');
      
      // Fixed chrome bug
      var before = $(this).parent().prev().children();
      
      var run = !before.length;
      if (run) {
        $.each(types, function(i, type) {
          filter[type].run();
          //console.log('run');
        });
      }
      else {
        var beforeLevel = before.attr('id').substr(9);
        var beforeValue = before.val();

        if (levels[beforeLevel] != beforeValue) {        
          $.each(types, function(i, type) {
            filter[type].addLocation(beforeLevel, beforeValue);
          });
          levels[beforeLevel] = beforeValue;
        }
        before.click();
      }
      
      // End fixed

    })
    
    
    $('.filter-all').change(function () {
      var type = $(this).attr('name');
      if($(this).attr('checked')) {
        filter[type].enable();
      }
      else {
        filter[type].disable();
      }
      filter[type].run();
    });

  }

  google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});
  
  
  // Tab =========================================
  $('.display-manager a').click(function (e) {
    e.preventDefault();
    $('#tab-content > *').hide();
    $($(this).attr('href')).show();
    $('.display-manager a').removeClass('active');
    $(this).addClass('active');
  });
  $('.display-manager a').eq(0).click();
  
  // Toggle filter ================================
  $('.toggle-label-link').click(function (e) {
    e.preventDefault();
    var status = $(this).hasClass('show');
    var target = $(this).attr('href');
    if (status) {
      $(target).slideUp();
      $(this).removeClass('show').addClass('hide');
    }
    else {
      $(target).slideDown();
      $(this).removeClass('hide').addClass('show');
    }
  });
  
  // Tips =========================================
  $('.webform-filters-list label').qtip({
     content: $(this).attr('title'),
     position: {
        corner: {
           target: 'bottomMiddle',
           tooltip: 'topLeft'
        }
     },
     style: { 
        name: 'light' // Inherit from preset style
     }
  });


</script>



