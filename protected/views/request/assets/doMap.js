(function() {
  window.mapLoadded = function(args) {
    var basePath, location_id, map, myLatlng, myOptions, styleMapType, styledMapOptions, styles, stylez, zoom;
    basePath = Yii.settings.basePath;
    styles = [
      {
        url: "" + basePath + "/images/m1.png",
        height: 53,
        width: 52,
        anchor: [16, 0],
        textColor: '#ffffff',
        textSize: 10
      }, {
        url: "" + basePath + "/images/m2.png",
        height: 56,
        width: 55,
        anchor: [24, 0],
        textColor: '#ffffff',
        textSize: 11
      }, {
        url: "" + basePath + "/images/m3.png",
        height: 66,
        width: 65,
        anchor: [32, 0],
        textColor: '#ffffff',
        textSize: 12
      }
    ];
    myLatlng = new google.maps.LatLng(13.768, 100.554);
    zoom = 14;
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
    location_id = Yii.settings.location_id;
    return $.getJSON("" + basePath + "/api/request/?action=locationView&id=" + location_id, function(nodes) {
      var info_window, markers;
      info_window = new google.maps.InfoWindow;
      markers = [];
      $.each(nodes, function(id, node) {
        var marker, placeLatLng;
        placeLatLng = new google.maps.LatLng(node != null ? node.lat : void 0, node != null ? node.lng : void 0);
        marker = new google.maps.Marker({
          position: placeLatLng,
          map: map,
          title: node.label
        });
        myLatlng = new google.maps.LatLng(node != null ? node.lat : void 0, node != null ? node.lng : void 0);
        map.panTo(myLatlng);
        markers.push(marker);
        return google.maps.event.addListener(marker, 'click', function() {
          var jxhr;
          jxhr = $.getJSON("" + basePath + "/api/request?action=view&id=" + id, function(item_contents) {
            item_contents = "<div class='content-map-row'>" + item_contents + "</div>";
            info_window.setContent(item_contents);
            return info_window.open(map, marker);
          });
          return jxhr.error(function() {
            return alert('error');
          });
        });
      });
      return window.markerCluster = new MarkerClusterer(map, markers, {
        styles: styles
      });
    });
  };
}).call(this);
