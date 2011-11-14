(function() {
  window.mapLoadded = function(args) {
    var map, myLatlng, myOptions, prefix, zoom;
    myLatlng = new google.maps.LatLng(13.768, 100.554);
    zoom = 12;
    myOptions = {
      zoom: zoom,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    prefix = "/opendream/openhelp/";
    return $.getJSON("" + prefix + "/api/request/?action=index", function(nodes) {
      var markerCluster, markers;
      markers = [];
      $.each(nodes, function(id, node) {
        var marker, placeLatLng;
        placeLatLng = new google.maps.LatLng(node != null ? node.lat : void 0, node != null ? node.lng : void 0);
        marker = new google.maps.Marker({
          position: placeLatLng,
          map: map,
          title: node.label
        });
        return markers.push(marker);
      });
      return markerCluster = new MarkerClusterer(map, markers);
    });
  };
}).call(this);
