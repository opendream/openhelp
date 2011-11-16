(function() {
  window.mapLoadded = function(args) {
    var basePath, location_id, map, myLatlng, myOptions, zoom;
    myLatlng = new google.maps.LatLng(13.768, 100.554);
    zoom = 14;
    myOptions = {
      zoom: zoom,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    basePath = Yii.settings.basePath;
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
          return $.getJSON("" + basePath + "/api/request?action=view&id=" + id, function(item_contents) {
            info_window.setContent(item_contents);
            return info_window.open(map, marker);
          });
        });
      });
      return window.markerCluster = new MarkerClusterer(map, markers);
    });
  };
}).call(this);
