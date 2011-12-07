<div id="sidebar-fix">

  <div class="display-manager">
    <h2><?php echo $name; ?></h2>
    <span class="title"><?php echo t('Select Display'); ?>: </span>
    <ul>
      <li><?php echo l(t('Map'), '#map'); ?></li>
      <li><?php echo l(t('Item List'), '#list'); ?></li>
    </ul>
  </div>

  <div id="control-box">
    
    <form id="webform-filters" action="<?php echo bu("api/webform?action=location&type=$type"); ?>" method="post">
      <span class="title"><?php echo $filters['title']['filter'] ?></span>
      <ul>
      <?php foreach ($filters['data'] as $name => $filter): ?>
        <li>
          <input class="<?php echo $type; ?>" type="checkbox" name="<?php echo $name; ?>" value="1" id="<?php echo $name; ?>" />
          <label for="<?php echo $name; ?>"><?php echo $filter['label'] ?></label>
    
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
  
    <div id="location-filters">
      <span class="title"><?php echo $filters['title']['location'] ?></span>
      <div class="location-filters-input">
        <?php $this->widget('ext.location.LocationWidget', array(
          'model' => new Location, 
          'attribute' => 'id', 
          'join' => 'webform', 
          'multiple' => 1
        )); ?>
      </div>
    </div>
  
  </div>

</div>

<div id="tab-content">
  <div id="list">
    <div class="webform-content drop-shadow curved curved-hz-1">
      <div id="webform-list">
  
      </div>
      <p class="readmore">
        <a class="webform-location-readmore" href="#">read more</a>
      </p>
    </div>  
  </div>
  <div id="map" style="width: 100%; height: 500px; position: absolute; left: 0;"></div>
</div>

<script type="text/javascript">
  $('.display-manager a').click(function (e) {
    e.preventDefault();
    $('#tab-content > *').hide();
    $($(this).attr('href')).show();
    $('.display-manager a').removeClass('active');
    $(this).addClass('active');
  });
  $('.display-manager a').eq(0).click();
</script>

<script type="text/javascript" src="<?php echo bu('js/jquery.tmpl.js'); ?>"></script>

<?php echo CGoogleApi::init(); ?>
<script type="text/javascript" src="<?php echo bu('js/markerclusterer.js'); ?>"></script>

<script type="text/javascript">
  var currMarkers = []; // <= Handsome variable :)
  
  var locationMarkers = [];
  
  var allMarkers = [];
  
  var basePath = '<?php echo bu(); ?>';
  var allOptions = <?php echo WidgetManager::getAllTypeFilter(true); ?>;
  var templateItem = '';
  
  var levels = <?php echo CJSON::encode($levels); ?>;
  
  
  // Map  =============================================
  var styles = [
    {
      url: basePath + "/webform/clusterer?radius=35",
      height: 35,
      width: 35,
      textColor: '#ffffff',
      textSize: 11
    }, {
      url: basePath + "/webform/clusterer?radius=40",
      height: 40,
      width: 40,
      textColor: '#ffffff',
      textSize: 11
    }, {
      url: basePath + "/webform/clusterer?radius=50",
      height: 50,
      width: 50,
      textColor: '#ffffff',
      textSize: 11
    }
  ];
  
  var mapLoadded = function () {
    $.getJSON($('#webform-filters').attr('action'), function(locations) {
  
      var center = new google.maps.LatLng(13.768, 100.554);
      var options = {
        'scrollwheel': false,
        'zoom': 5,
        'center': center,
        'mapTypeId': google.maps.MapTypeId.ROADMAP
      };
    
      var bounds = new google.maps.LatLngBounds;

      var map = new google.maps.Map($('#map').get(0), options);
      var markers = allOptions;
      $.each(locations, function (i, location) {
        var latLng = new google.maps.LatLng(location['lat'], location['lng']);
        var marker = new google.maps.Marker({'position': latLng, 'data': location});
        currMarkers.push(marker);
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
      
      allMarkers = currMarkers;
    
      var markerCluster = new MarkerClusterer(map, currMarkers, {'styles': styles});
    
    
      map.panTo(bounds.getCenter());
      map.fitBounds(bounds);
    
      // List =============================================
      var List = function () {
        var ipp = 20;
        var currentPage = 0;
        
        var self = this;
        
        self.append = function () {
          for (var i=currentPage*ipp; (i < (currentPage+1)*ipp) && (i < currMarkers.length); i++) {
            $.tmpl('templateItem', currMarkers[i]['data']).appendTo('#webform-list');
            if (i == currMarkers.length - 1) {
              $('.webform-location-readmore').hide();
            }
          }
          currentPage = currentPage + 1;
        }
        
        self.reload = function () {
          $('#webform-list').html('');
          $('.webform-location-readmore').show();
          currentPage = 0;
          self.append();
          self.append();
        }
      }
      
      var list = new List();
      
      $.getJSON(basePath + '/api/webform', {'action': 'templateItem'}, function(templateItem) {
        $.template('templateItem', templateItem);
        list.reload();
      });
      
      $('.webform-location-readmore').click(function (e) {
        e.preventDefault();
        list.append();
      });
      
    
    
      // Filter =============================================
      var scope = $('#webform-filters');
    
      var Filter = function () {
        var types = {};
        var filters = {};
        var locations = {};
      
        self = this;
        
        self.removeType = function (name) {
          if (types[name]) { delete(types[name]); }
          return self;
        }
        self.addType = function (name) {
          types[name] = name;
          return self;
        }
        self.removeFilter = function (name) {
          if (filters[name]) { delete(filters[name]); }
          return self;
        }
        self.addFilter = function (name, value) {
          filters[name] = value;
          return self;
        }        
        self.removeLocation = function (level) {
          if (locations[level]) { delete(locations[level]); }
          return self;
        }
        self.addLocation = function (level, value) {
          if (!value) {
            return self.removeLocation(level);
          }
          locations[level] = value;
          return self;
        }

        self.run = function () {
          currMarkers = [];
        
          $.each(types, function (key, type) {
            if ($.isEmptyObject(filters)) {
              currMarkers = allMarkers;
            }
            else {
              $.each(filters, function (name, value) {
                currMarkers = $.merge(currMarkers, markers[type][name][value]);
              })
            }
          })
        
          currMarkers = $.unique(currMarkers);
        
          markerCluster.clearMarkers();
          markerCluster.addMarkers(currMarkers);
        
          list.reload();
          
          return self;
        }
      
      }
    
      var filter = new Filter();
      filter.addType('reliefsurvey');
      
      // Text filter
      $('input[type=checkbox]', scope).change(function () {
        var type = $(this).attr('class');
        var name = $(this).attr('name');
      
      
        var select = $(this).siblings('select');
        var value = select? select.val(): $(this).val();
      
          
        if($(this).attr('checked')) {
          filter.addFilter(name, value).run();
        }
        else {
          filter.removeFilter(name).run();
        }
      })
    
      $('select', scope).change(function () {
        var type = $(this).attr('class');
        var name = $(this).attr('name');
      
        var checkbox = $(this).siblings('input[type=checkbox]');
        var value = $(this).val();
      
        var type = $(this).attr('class');
        if (checkbox && !checkbox.attr('checked')) {
          return false;
        }
      
        filter.addFilter(name, value).run();

      })
      
      // Location filter
      $('#location-filters select').change(function () {
        console.log(levels);
        filter.addLocation();
      });

  
    });
  }

  google.load("maps","3",{'callback':'mapLoadded','other_params':'sensor=false'});

</script>



