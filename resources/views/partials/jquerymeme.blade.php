  <script>

    var lat;
    var long;

      $(document).ready(function(){

      	$("#update").click(function(){

      		if (navigator.geolocation) 
        {

            navigator.geolocation.getCurrentPosition(showPosition);
           

            $("#locationLat").text(lat);
            $("#locationLong").text(long);

             var mapOptions = 
             
             {
                    center: new google.maps.LatLng(lat, long),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }

                var map = new google.maps.Map(document.getElementById("map"), mapOptions);

          };

         });
      });




       $(document).ready(function(){

        $("#hide").click(function()
            {

        		  $("#map").hide();

            });
        });


    function showPosition(position) 
        {
           lat = position.coords.latitude;
           long = position.coords.longitude; 
        }


  </script>

  <script>

  	var lat;
  	var long;

  	       $(document).ready(function(){

      	$("#random").on("click", function(){


		    if (navigator.geolocation) 
		    {

		        navigator.geolocation.getCurrentPosition(showPosition);
		        $("#locationLat").text(lat);
		         $("#locationLong").text(long);


		         var mapOptions = 
		         {
                    center: new google.maps.LatLng(lat, long),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }

           		  var map = new google.maps.Map(document.getElementById("map"), mapOptions);


                var myurl = "https://developers.zomato.com/api/v2.1/search?entity_type=city&start=10&count=10&lat="+lat+"&lon="+long+"&radius=1&sort=real_distance&order=desc&apikey=829ee093cf913fa13053425a408dffcc";

                var places = httpGet(myurl);


               var x = Math.floor((Math.random() * 10));

                $("#name").text(JSON.stringify(places[x].restaurant.name).toUpperCase().replace(/['"]+/g, '').replace(/\s/g, '-'));
                $("#address").text(JSON.stringify(places[x].restaurant.location.address));
                $("#rating").text(JSON.stringify(places[x].restaurant.user_rating.aggregate_rating + " out of 5"));
                $("#delivers").text(JSON.stringify(places[x].restaurant.user_rating.aggregate_rating));
                $("#locationLat").text(JSON.stringify(places[x].restaurant.location.latitude));
                $("#locationLong").text(JSON.stringify(places[x].restaurant.location.longitude));



                //think about randoming between 0 and the length of the array in order to get the largest amount
                // and biggest variety possible so we dont random the same thing
		    } 
        else 
		    {
		        $("#locationLat").text("Geolocation is not supported by this browser.");
		        $("#locationLong").hide();
		    }

      	});


      });



  	
		function showPosition(position) 
    {
		   lat = position.coords.latitude;
		   long = position.coords.longitude; 
		}

    function httpGet(theUrl)
    {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
        xmlHttp.send();

         var places = JSON.parse(xmlHttp.responseText);

         rests = places.restaurants;

         return rests;
    }


  </script>

  <script>
            function myMap() {
                var mapOptions = {
                    center: new google.maps.LatLng(40.7128, -74.0060),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }

  </script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYGaG3hI3yQdP7oH-o535wjeq4vxtpALU&callback=myMap"
    async defer></script>




