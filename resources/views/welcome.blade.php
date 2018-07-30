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
    <div class="col col-md-2">
      <br><br>

    <div class="navbarS mapstyle spacepls center">
      <p>$10 off your order!</p>  
      <hr>
         <div class="staythere"><a href="http://fbuy.me/jfGab"> <img src="nicehub.jpg" alt="picture of grubhub logo"></a></div>
      <hr>
         <div class="staythere"><a href="https://postmat.es/idMkqeTvUN"> <img src="postmates.png" alt="picture of grubhub logo"></a></div>
   </div>

<br>

<div class="navbarS mapstyle spacepls">

      <p> <strong>Address:</strong></p>
      <p id="address" class="center"></p>

      <hr>

      <p> <strong>Rating:</strong></p>
      <p id="rating" class="center"></p>

</div>


      
    </div>

    <div class="col-md-8 center">

      
       <br>
       
      <a href="#"><h1 id="name" class="center title navbarS"> RANDOM RESTAURANT</h1> </a>

<div class="spacepls">

          <div class=" center">
            <div id="map" class = "staythere mapstyle"style="width:auto;height:400px;"></div>
          </div>
            
            <br>

           <div>
           <button class="btn btn-outline-danger pad_side wavy" id="bars"style="width:150px;height:40px;"> Any Bar!</button>

          <button class="btn btn-outline-primary pad_side wavy" id="update" style="width:150px;height:40px;"> Re-Center Map</button>

          <button class="btn btn-outline-danger pad_side wavy" id="restaurant"style="width:150px;height:40px;"> Any Restaurant!</button>
          </div>

          <br>

          <div>
           <button class="btn btn-success pad_side" id="AllBars"style="width:200px;height:50px;"> All Bars!</button>
             <button class="btn btn-success pad_side" id="AllRestaurants"style="width:200px;height:50px;">All Restaurants</button> 
        </div>

</div>
          <br>

        <div class="navbarS mapstyle spacepls"><strong>Distance to search(meters):</strong>  

        <input class="form-control" type="text" id="dist" placeholder="1000m">
        <br>
        <button class="btn btn-outline-danger pad_side" id="where"> Pick Your Radius!</button>

      </div>

    </div>


      <div class="col-md-2">
        
        <div class=" pad_top">
        <div class="navbarS mapstyle whitetext spacepls center">        
        <p><u><strong>Cant Choose? Let us!</strong></u></p>

        <p> For the times when you cant figure out where to go, when youre in a new city and want an adventure or just when you want to try something new!
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