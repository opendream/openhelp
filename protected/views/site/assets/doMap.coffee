window.mapLoadded = (args) ->
  myLatlng = new google.maps.LatLng(13.768, 100.554)
  zoom = 12

  myOptions = 
  	zoom: zoom
  	center: myLatlng
  	mapTypeId: google.maps.MapTypeId.ROADMAP

  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions)

