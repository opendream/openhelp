window.mapLoadded = (args) ->
  basePath = Yii.settings.basePath
  styles = [{
    url: "#{basePath}/images/m1.png",
    height: 53,
    width: 52,
    # anchor: [16, 0],
    textColor: '#ffffff',
    textSize: 11
  }, {
    url: "#{basePath}/images/m2.png",
    height: 56,
    width: 55,
    # anchor: [16, 0],
    textColor: '#ffffff',
    textSize: 11
  }, {
    url: "#{basePath}/images/m3.png",
    height: 66,
    width: 65,
    # anchor: [32, 0],
    textColor: '#ffffff',
    textSize: 11
  }]


  info_window = new google.maps.InfoWindow (maxWidth: 540)
  myLatlng = new google.maps.LatLng(13.768, 100.554)
  zoom = 5

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

  $.getJSON "#{basePath}/api/request/?action=index", (nodes) ->
    bounds = new google.maps.LatLngBounds
    window.markers = []
    $.each nodes, (id, node) ->
      #continue in foreach
      return 0 if !node.lat or !node.lng
      placeLatLng = new google.maps.LatLng node?.lat, node?.lng
      marker = new google.maps.Marker({
        position: placeLatLng
        map: map
        title: node.label
      })
      markers.push marker
      bounds.extend placeLatLng
      google.maps.event.addListener marker, 'click', ->
        jxhr = $.getJSON "#{basePath}/api/request?action=view&id=#{id}", (item_contents) ->
          item_contents = "<div class='content-map-row'>#{item_contents}</div>"
          info_window.setContent item_contents
          info_window.open map, marker
          return
        jxhr.error (-> info_window.setContent 'ยังไม่มีข้อมูล'; info_window.open map, marker)
    

    window.markerCluster = new MarkerClusterer map, markers, styles: styles
    map.panTo bounds.getCenter()
    map.fitBounds bounds
