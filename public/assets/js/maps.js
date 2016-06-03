function initMap() {
  var myLatLng = {lat: 21.036253, lng: 105.816272};
  
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  
  var cityCircle = new google.maps.Circle({
          editable:true,
          draggable:true,
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          center: myLatLng,
          radius: 1000
  });
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

}

