
window.mapLoadded = (args) ->
  myLatlng = new google.maps.LatLng 13.768, 100.554
  zoom = 14
  stylez = ["featureType":"water","elementType":"all","stylers":["hue":"#00c3ff"]]
  styledMapOptions = name: "labels"
  styleMapType = new google.maps.StyledMapType(stylez, styledMapOptions)

  myOptions = 
    scrollwheel: false
    zoom: zoom
    center: myLatlng
    mapTypeId: google.maps.MapTypeId.ROADMAP

  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions)
  map.mapTypes.set('labels', styleMapType)
  map.setMapTypeId('labels')


  basePath = Yii.settings.basePath
  location_id = Yii.settings.location_id
  $.getJSON "#{basePath}/api/request/?action=locationView&id=#{location_id}", (nodes) ->
    info_window = new google.maps.InfoWindow
    markers = []
    $.each nodes, (id, node) ->
      placeLatLng = new google.maps.LatLng node?.lat, node?.lng
      marker = new google.maps.Marker({
        position: placeLatLng
        map: map
        title: node.label
      })
      myLatlng = new google.maps.LatLng node?.lat, node?.lng
      map.panTo(myLatlng)
      markers.push marker
      google.maps.event.addListener marker, 'click', ->
        jxhr = $.getJSON "#{basePath}/api/request?action=view&id=#{id}", (item_contents) ->
          item_contents = "<div class='content-map-row'>#{item_contents}</div>"
          info_window.setContent item_contents
          info_window.open map, marker
        jxhr.error -> alert 'error'
    window.markerCluster = new MarkerClusterer map, markers
