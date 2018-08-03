<!DOCTYPE html>

@include('partials.navbar')

<html>
<head>

  <title>Random Restaurant Selection | NoMoodFood</title>
    <meta name="description" content="Random Restaurant Selection made Easy! Simply Click on 'Any bar' or 'Any Restaurant to select somewhere to go from the local places around you! Not in the mood for the first choice? Just try again!'">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @include('partials.BsCss')

</head>

<body class="background">

<div>
  <div class="row">
 
   <div class="d-xs-none d-sm-none d-md-none d-lg-block col-lg-2" id = "content-desktop">
      <br>
      <br>




  <div class="navbarS mapstyle spacepls center">

        <p>$10 off your order!</p> 

        <hr>
           <div class="staythere">
              <a href="http://fbuy.me/jfGab"> 
                <img src="nicehub.jpg" alt="Grubhub logo for Random Selections">
              </a>
           </div>
        <hr>

           <div class="staythere">
            <a href="https://postmat.es/idMkqeTvUN"> 
              <img src="postmates.png" alt="Postmates discount for Random selections">
            </a>
          </div>
        <hr>

              <p>Follow Us On Twitter!</p>

              <div class="staythere">
                <a href="https://twitter.com/nomoodfood"> 
                  <img src="twitter.jpg" alt="Twitter for no mood food">
                </a>
              </div>




   </div>



<br>    
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">

      
       <br>
       
      <a href="#">
        <h1 id="name" class="center title navbarS"style="width:100%"> 
          Random Restaurant
        </h1> 
      </a>


<div id="rating" class="navbarS mapstyle spacepls center">

      <strong id="titles" class="adress"><u>Address</u></strong>
      <h2 id="address" class="center">Click Buttons To Mark a New Place!</h2>
      <strong  id = "titles" class ="adress"><u>Rating</u></strong>
      <h2 id="rating" class="center">Click the Marker To Zoom In On Your Choice!</h2>
    </div>


<div>

   <div class = "center">
       <input type="button" button="" class="btn btn-borders btn-primary mr-xs mb-sm"style="width:100%" value="Donate To Keep The Site Running" onclick="window.location.href='https://venmo.com/NoMoodFunds'">
    </div>

          <div class=" center">
            <div id="map" class = "staythere mapstyle"style="width:100%;height:700px;"></div>
          </div>
            
          <br>

           <div>
           <button class="btn btn-outline-danger pad_side wavy" id="bars" style="width:100%;height:100px;"> 
            <strong><h1>NEW BAR!<h1></strong>
           </button>

          <br>
          <br>

          <button class="btn btn-outline-danger pad_side wavy" id="restaurant" style="width:100%;height:100px;"> 
            <strong><h1>NEW RESTAURANT!<h1></strong>

          </button>
          

          <br>
          <br>

          <button class="btn btn-outline-primary pad_side wavy" id="update" style="width:100%;height:100px;"> 
            <strong><h1>RE-CENTER MAP<h1></strong>
          </button>

          <br>
          <br>

          <button class="btn btn-success pad_side" id="AllRestaurants"style="width:100%;height:80px;">
            <strong>  <h1>ALL RESTAURANTS!</h1> </strong>
          </button> 

          </div>
        

            </div>
          <br> 


   

    </div>


   
    <div class="d-xs-none d-sm-none d-md-none d-lg-block col-lg-2" id = "content-desktop">
     
     <br>
      <br>

    <div class="navbarS mapstyle spacepls center">
      <p>$10 off your order!</p> 


      <hr>

         <div class="staythere"><a href="http://fbuy.me/jfGab"> <img src="nicehub.jpg" alt="picture of grubhub logo"></a></div>

      <hr>

         <div class="staythere"><a href="https://postmat.es/idMkqeTvUN"> <img src="postmates.png" alt="picture of grubhub logo"></a></div>

        <hr>
            <p>Follow Us On Twitter!</p>
            <div class="staythere"><a href="https://twitter.com/nomoodfood"> <img src="twitter.jpg" alt="picture of twitter logo"></a></div>
           
      </div>


        
        <div id="content-desktop">
        <div class=" pad_top">
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
            <br><br>
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