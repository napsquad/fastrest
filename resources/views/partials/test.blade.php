<script>
	
var key = "AIzaSyAN9YAvruG7lkiu3Hpk1DgWivx8BC8N6o8";

var items, lat, long, map, infowindow;

$(document).ready(function()
{

	$("#bars").click(function()
	{

		  if (navigator.geolocation) 
         {

            navigator.geolocation.getCurrentPosition(showPosition);
            getBar();

         }
         else
         {

          alert("geolocation is broken or not supported on your browser");

         }
	});
});

$(document).ready(function()
{

  $("#where").click(function()
  {

      if (navigator.geolocation) 
         {

            navigator.geolocation.getCurrentPosition(showPosition);
            getLocBar($("#dist").val());

         }
         else
         {

          alert("geolocation is broken or not supported on your browser");

         }
  });
});


$(document).ready(function()
{

  $("#AllBars").click(function()
  {

      if (navigator.geolocation) 
         {

            navigator.geolocation.getCurrentPosition(showPosition);
            getAllBars();

         }
         else
         {

          alert("geolocation is broken or not supported on your browser");

         }
  });
});



$(document).ready(function()
{

  $("#restaurant").click(function()
  {

      if (navigator.geolocation) 
         {

            navigator.geolocation.getCurrentPosition(showPosition);
            getRest();

         }
         else
         {

          alert("geolocation is broken or not supported on your browser");

         }
  });
});


$(document).ready(function()
{

  $("#AllRestaurants").click(function()
  {

      if (navigator.geolocation) 
         {

            navigator.geolocation.getCurrentPosition(showPosition);
            getAllRest();

         }
         else
         {

          alert("geolocation is broken or not supported on your browser");

         }
   });
});




function showPosition(position) 
{
   lat = position.coords.latitude;
   long = position.coords.longitude; 
}


function getBar()
{
	 var current = new google.maps.LatLng(lat, long);

	 map = new google.maps.Map(document.getElementById('map'), {
      center: current,
      zoom: 12
     });

	var request = {
    location: current,
    radius: 5000,
    type: ['bar']
  	};

	service = new google.maps.places.PlacesService(map);
	service.nearbySearch(request, callback);

}

function getLocBar(distnce)
{
   var current = new google.maps.LatLng(lat, long);

   map = new google.maps.Map(document.getElementById('map'), {
      center: current,
      zoom: 12
     });

   var item = parseInt(distnce);

  var request = {
    location: current,
    radius: item,
    type: ['bar']
    };

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);

}


function getRest()
{
   var current = new google.maps.LatLng(lat, long);

   map = new google.maps.Map(document.getElementById('map'), {
      center: current,
      zoom: 12
     });

  var request = {
    location: current,
    radius: 5000,
    type: ['restaurant']
    };

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}


function getAllRest()
{
   var current = new google.maps.LatLng(lat, long);

   map = new google.maps.Map(document.getElementById('map'), {
      center: current,
      zoom: 14
     });

  var request = {
    location: current,
    radius: 5000,
    type: ['restaurant']
    };

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, allback);

}


function getAllBars()
{
   var current = new google.maps.LatLng(lat, long);

   map = new google.maps.Map(document.getElementById('map'), {
      center: current,
      zoom: 14
     });

  var request = {
    location: current,
    radius: 5000,
    type: ['bar']
    };

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, allback);

}

function callback(results, status) {

  if (status == google.maps.places.PlacesServiceStatus.OK) 
  {

     var x = Math.floor(((Math.random() * results.length)-1));


    $('#name').text(results[x].name);
    $('#address').text(results[x].vicinity);
    $('#rating').text(results[x].rating + " out of 5");

    createMarker(results[x]);

  }
}

function allback(results, status) {

  if (status == google.maps.places.PlacesServiceStatus.OK) 
  {

    for (var i = 0; i < results.length; i++) 
    {

      var place = results[i];
      createMarker(results[i]);

    }

  }
}


function createMarker(place) {

        var placeLoc = place.geometry.location;

        var marker = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });


      }

</script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN9YAvruG7lkiu3Hpk1DgWivx8BC8N6o8&libraries=places"></script>