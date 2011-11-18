(function() {
  window.mapLoadded = function(args) {
    var basePath, info_window, map, myLatlng, myOptions, styleMapType, styledMapOptions, stylez, zoom;
    info_window = new google.maps.InfoWindow;
    myLatlng = new google.maps.LatLng(13.768, 100.554);
    zoom = 5;
    stylez = [
      {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
          {
            "hue": "#00c3ff"
          }
        ]
      }
    ];
    styledMapOptions = {
      name: "labels"
    };
    styleMapType = new google.maps.StyledMapType(stylez, styledMapOptions);
    myOptions = {
      scrollwheel: false,
      zoom: zoom,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    map.mapTypes.set('labels', styleMapType);
    map.setMapTypeId('labels');
    basePath = Yii.settings.basePath;
    return $.getJSON("" + basePath + "/api/request/?action=index", function(nodes) {
      var bounds;
      bounds = new google.maps.LatLngBounds;
      window.markers = [];
      $.each(nodes, function(id, node) {
        var marker, placeLatLng;
        if (!node.lat || !node.lng) {
          return 0;
        }
        placeLatLng = new google.maps.LatLng(node != null ? node.lat : void 0, node != null ? node.lng : void 0);
        marker = new google.maps.Marker({
          position: placeLatLng,
          map: map,
          title: node.label
        });
        markers.push(marker);
        bounds.extend(placeLatLng);
        return google.maps.event.addListener(marker, 'click', function() {
          var jxhr;
          jxhr = $.getJSON("" + basePath + "/api/request?action=view&id=" + id, function(item_contents) {
            item_contents = "<div class='content-map-row'>" + item_contents + "</div>";
            info_window.setContent(item_contents);
            info_window.open(map, marker);
          });
          return jxhr.error((function() {
            info_window.setContent('ยังไม่มีข้อมูล');
            return info_window.open(map, marker);
          }));
        });
      });
      window.markerCluster = new MarkerClusterer(map, markers);
      map.panTo(bounds.getCenter());
      return map.fitBounds(bounds);
    });
  };
}).call(this);
