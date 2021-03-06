var map;
var circle;  // Pink Circle
var myLatLng; // Lat, Long of Account Shop
var txt = []; //  NumCar
var customTxt = []; // Div to show numCar
var results = []; // List Shop
var radius; // Radius of pink Circle
var totalCar = 0;
var moveIcon = "/assets/img/btn/move-marker.png";

function initMap() {
		$.ajax({
			type: 'POST',
			url: "/retail/point.json",
			data: {text1: "shop"},
			success: function(res) {	
				myLatLng = new google.maps.LatLng(res[0][0], res[0][1]);			   
				var myOptions = {
					zoom: 14,
					center: myLatLng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				  };				
				map = new google.maps.Map(document.getElementById("map"), myOptions);
				results = res;		
				radius = res[0][4];				
				createMap(results,radius);			   
			},
			error: function(res) {			  
				console.log(res) ;
			},
		});	  
}	
// Function to create default pink Circle
function createMap(res,radius){
	totalCar = 0;
	for(var i = 1; i < res.length; i++){
		var poisition = new google.maps.LatLng(res[i][0], res[i][1]);
		customTxt[i] = "<div>"+res[i][2] +"</div>"
		if(res[i][3] < radius){
			txt[i] = new TxtOverlay(poisition, customTxt[i], "customBoxInSite", map);
			totalCar = totalCar + res[i][2];
		}
		if(res[i][3] >= radius){
			txt[i] = new TxtOverlay(poisition, customTxt[i], "customBox", map);	
		}						
	}		
	document.getElementById('searchController__carAmount').innerHTML = totalCar;
	circle = new google.maps.Circle({
		  strokeColor: '#FF7796',
		  strokeOpacity: 0.8,
		  strokeWeight: 2,
		  fillColor: '#FF7796',
		  fillOpacity: 0.5,
		  map: map,
		  center: myLatLng,
		  radius: radius
	});
	var lat = circle.center.lat();
	var lng = circle.getBounds().getNorthEast().lng();
	var position = new google.maps.LatLng(lat, lng);
	markerDrag  = new google.maps.Marker({
		draggable: true,
		map: map,
		position: position,
		icon: moveIcon
	});				
	google.maps.event.addListener(markerDrag,'drag',function(){
	if(circle){
	   circle.setMap(null);
	}   
	var centerMap = new google.maps.LatLng(res[0][0], res[0][1]);
	var lat = markerDrag.position.lat();
	var lng = markerDrag.position.lng();
	var pointDrag = new google.maps.LatLng(lat,lng);
	radius = google.maps.geometry.spherical.computeDistanceBetween(centerMap,pointDrag);
		setCircle(radius,res); // When drag point, draw new Circle
	});				
	google.maps.event.addListener(markerDrag,'dragend',function(){				
		setMarker(radius,res);//When dragend draw circle for all shop
	}); 		   
	
}
// Function to create circle and show numCar for each shop
function setMarker(radius,res) {
	for(var i = 0; i < txt.length;i++ ){
		if(txt[i]){
			txt[i].setMap(null);
		}
	}
	if(circle){
       circle.setMap(null);
    }		
	circle = new google.maps.Circle({
          strokeColor: '#FF7796',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF7796',
          fillOpacity: 0.5,
          map: map,
          center: myLatLng,
          radius: radius			  
	});
	totalCar = 0;
	for(var i = 1; i < res.length; i++){
		var poisition = new google.maps.LatLng(res[i][0], res[i][1]);
		customTxt[i] = "<div>"+res[i][2] +"</div>"
		if(res[i][3] < radius){
			txt[i] = new TxtOverlay(poisition, customTxt[i], "customBoxInSite", map);
			totalCar = totalCar + res[i][2];
		}
		if(res[i][3] >= radius){
			txt[i] = new TxtOverlay(poisition, customTxt[i], "customBox", map);	
		}						
	}
	document.getElementById('searchController__carAmount').innerHTML = totalCar;	
}

function setCircle(radius,res) {	
	circle = new google.maps.Circle({
          strokeColor: '#FF7796',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF7796',
          fillOpacity: 0,
          map: map,
          center: myLatLng,
          radius: radius		  
	});	
}
