function mapCreate(lat, lng) {
  function initialize() {
    var latlng = new google.maps.LatLng(lat, lng);
    var myOptions = {
      zoom: 18,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
    var icon = new google.maps.MarkerImage('/images/icon_data.png',
      new google.maps.Size(64,64),
      new google.maps.Point(0,0)
      );
    var markerOptions = {
      position: latlng,
      map: map,
      icon: icon,
      title: 'KidsUp'
    };

     var marker = new google.maps.Marker(markerOptions);
    // var infowindow = new google.maps.InfoWindow({
    //   content: "KidsUP東陽町"
    // });
    // infowindow.open(map, marker);
    // google.maps.event.addListener(infowindow, "closeclick", function() {
    // google.maps.event.addListenerOnce(marker, "click", function(event) {
    //   infowindow.open(map, marker);
    //   });
    // });
    var styleOptions = [
      {
        "stylers": [
          { "hue": '#ef8200' }
        ]
      }
    ];
    var styledMapOptions = { name: '' }
    var schoolType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
      map.mapTypes.set('style', schoolType);
      map.setMapTypeId('style');
    };
  google.maps.event.addDomListener(window, 'load', initialize);
}
