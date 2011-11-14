window.mapLoadded = (args) ->
  myLatlng = new google.maps.LatLng(13.768, 100.554)
  zoom = 12

  myOptions = 
    zoom: zoom
    center: myLatlng
    mapTypeId: google.maps.MapTypeId.ROADMAP

  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions)

  prefix = "/opendream/openhelp/"
  $.getJSON "#{prefix}/api/request/?action=index", (nodes) ->
    markers = []
    $.each nodes, (id, node) ->
      placeLatLng = new google.maps.LatLng node?.lat, node?.lng
      marker = new google.maps.Marker({
        position: placeLatLng
        map: map
        title: node.label
      })
      markers.push marker
    markerCluster = new MarkerClusterer(map, markers);
