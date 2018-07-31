<!DOCTYPE html>

@include('partials.navbar')
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @include('partials.BsCss')
    <title>No Mood Food</title>
</head>
<body class="background">

<div>
  <div class="row">

    <div class="col col-md-2" id="content-desktop">
      <br><br>

    <div class="navbarS mapstyle spacepls center">
      <p>$10 off your order!</p>  
      <hr>
         <div class="staythere"><a href="http://fbuy.me/jfGab"> <img src="nicehub.jpg" alt="picture of grubhub logo"></a></div>
      <hr>
         <div class="staythere"><a href="https://postmat.es/idMkqeTvUN"> <img src="postmates.png" alt="picture of grubhub logo"></a></div>
   </div>

<br>     
    </div>

    <div class="col-md-8 center">

      
       <br>
       
      <a href="#"><h1 id="name" class="center title navbarS"> RANDOM RESTAURANT</h1> </a>


<div class="navbarS mapstyle spacepls">

      <strong>Address:</strong>
      <h3 id="address" class="center">Click Buttons To Mark a New Place!</h3>

      <hr>

      <strong>Rating:</strong>
      <h3 id="rating" class="center">Click the Marker To Zoom In On Your Choice!</h3>
    </div>


<div class="spacepls">

          <div class=" center">
            <div id="map" class = "staythere mapstyle"style="width:auto;height:500px;"></div>
          </div>





          <!-- hopefully this map will get working soon
            <iframe
              id="map"
              width="600"
              height="450"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY
                &q=Space+Needle,Seattle+WA" allowfullscreen>
            </iframe>
            
            -->




            
            <br>

           <div>
           <button class="btn btn-outline-danger pad_side wavy" id="bars"style="width:190px;height:70px;"> 

           <strong>Random Bar!</strong>

           </button>

          <button class="btn btn-outline-primary pad_side wavy" id="update" style="width:150px;height:70px;"> 

          <strong>Re-Center Map</strong>

          </button>

          <button class="btn btn-outline-danger pad_side wavy" id="restaurant"style="width:190px;height:70px;"> 
            <strong>Random Restaurant!</strong>

          </button>
          </div>

          <br>

          
           <button class="btn btn-success pad_side" id="AllBars"style="width:200px;height:80px;">
            
            <strong>All Bars!</strong>

          </button>
            <button class="btn btn-success pad_side" id="AllRestaurants"style="width:200px;height:80px;">
          
          <strong>  All Restaurants! </strong>

          </button> 
        

</div>
          <br>

        <div class="navbarS mapstyle spacepls"><strong>Distance to search(meters):</strong>  

        <input class="form-control" type="text" id="dist" placeholder="1000m">
        <br>
        <button class="btn btn-outline-danger pad_side" id="where"> Pick Your Radius!</button>

      </div>



    </div>


      <div class="col-md-2" id="content-desktop">
        
        <div class=" pad_top">
        <div class="navbarS mapstyle whitetext spacepls center">        
        <p><u><strong>Roll the dice!</strong></u></p>

        <p> For the times when you cant figure out where to eat, when you're in a new city and want to try something new!
        </p>
        </div>  


          <br>

        <div class="navbarS mapstyle center spacepls">

            <div class="container spacepls">
                     <p> <strong>Latitude:</strong></p>
              <p id="locationLat" class="center"></p>

              <hr>

              <p> <strong>Longitude:</strong></p>
              <p id="locationLong" class="center"></p>

              <hr>
            </div>



       </div>

  
      </div>


      </div>
 

    </div>
    </div>



<br><br>

</body>

@include('partials.test')
@include('partials.jquerymeme')
@include('partials.bootstrapjs')
</html>