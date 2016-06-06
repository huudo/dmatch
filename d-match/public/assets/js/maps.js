var map;
var circle;
var mapLabel;
var myLatLng = {lat: 21.036253, lng: 105.816272};
var sizeText;
function initMap() {
	  var latlng = new google.maps.LatLng(21.036253, 105.816272);
	  var myOptions = {
		zoom: 14,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  };
	  map = new google.maps.Map(document.getElementById("map"), myOptions);

	  var marker = new google.maps.Marker({
		position: latlng,
		map: map,
		title: "Hello World!"
	  });
	  marker.setMap(null);
	  customTxt = "<div>9999</div>"
	  txt = new TxtOverlay(latlng, customTxt, "customBox", map)
	
	var cityCircle = new google.maps.Circle({
          strokeColor: 'red',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: 'red',
          fillOpacity: 0.5,
          map: map,
          center: myLatLng,
          radius: 1000,
		  optimized: false,
		  zIndex: -4
	});
	var lat = cityCircle.center.lat();
	var lng = cityCircle.getBounds().getNorthEast().lng();
	var position = new google.maps.LatLng(lat, lng);
	markerDrag  = new google.maps.Marker({
		draggable: true,
		map: map,
		position: position,
		title: 'Drag me!'
	});
	
	google.maps.event.addListener(markerDrag,'drag',function(){
    if(cityCircle){
       cityCircle.setMap(null);
    }   
    var centerMap = new google.maps.LatLng(myLatLng.lat,myLatLng.lng);
    var lat = markerDrag.position.lat();
    var lng = markerDrag.position.lng();
    var pointDrag = new google.maps.LatLng(lat,lng);
    var radius = google.maps.geometry.spherical.computeDistanceBetween(centerMap,pointDrag);
    setCircle(radius);
	});
	
	 google.maps.event.addListener(markerDrag,'dragend',function(){
    
		$.ajax({
			type: 'POST',
			url: "/retail/test.json",
			data: {text1: "shop"},
			success: function(res) {
				console.log(res);
			   
			},
			error: function(res) {
			  
				console.log(res) ;
			},
		});
	}); 
	//google.maps.event.addListener(map, 'bounds_changed', createMap);
  
}	

function setCircle(radius) {
	if(circle){
       circle.setMap(null);
    }
	circle = new google.maps.Circle({
          strokeColor: 'red',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: 'red',
          fillOpacity: 0.5,
          map: map,
          center: myLatLng,
          radius: radius,
		  
	});
}
