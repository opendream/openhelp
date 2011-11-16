
window.mapLoadded = (args) ->
  myLatlng = new google.maps.LatLng(13.768, 100.554)
  zoom = 12

  myOptions = 
    scrollwheel: false
    zoom: zoom
    center: myLatlng
    mapTypeId: google.maps.MapTypeId.ROADMAP

  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions)

  basePath = Yii.settings.basePath
  $.getJSON "#{basePath}/api/request/?action=index", (nodes) ->
    info_window = new google.maps.InfoWindow
    markers = []
    $.each nodes, (id, node) ->
      placeLatLng = new google.maps.LatLng node?.lat, node?.lng
      marker = new google.maps.Marker({
        position: placeLatLng
        map: map
        title: node.label
      })
      markers.push marker
      google.maps.event.addListener marker, 'click', ->
        $.getJSON "#{basePath}/api/request?action=view&id=#{id}", (item_contents) ->
          info_window.setContent item_contents
          info_window.open map, marker
    window.markerCluster = new MarkerClusterer map, markers
