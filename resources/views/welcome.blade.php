<!DOCTYPE html>

@include('partials.navbar')
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    @include('partials.BsCss')
    <title>whereTo</title>
</head>
<body class="background">

<!--zomato api:829ee093cf913fa13053425a408dffcc-->

<div class="container">
  <div class="row">
    <div class="col col-md-2">
      <br><br>

    <div class="navbarS mapstyle spacepls">
      <p>Use our referral links for 10$ off! </p>
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

    <div class="col-md-7 center">

      
       <br>
       
      <a href="#"><h1 id="name" class="center title navbarS"> RANDOM RESTAURANT</h1> </a>

<div class="spacepls">
            <div id="map" class = "staythere mapstyle"style="width:600px;height:400px;"></div>

            
            <br>

           <div> 
          <button class="btn btn-outline-danger pad_side" id="random"> Random Resturant!</button>
          <button class="btn btn-outline-danger pad_side" id="update"> Re-Center Map</button>
          <button class="btn btn-outline-danger pad_side" id="hide"> Random Bar!</button>
        </div>
</div>
          <br>

        <div class="navbarS mapstyle spacepls"><strong>Distance to search(meters):</strong>  

        <input class="form-control" type="text" placeholder="1000m">
        <br>
        <button class="btn btn-outline-danger pad_side" id="hide"> Locationally Random!</button>

      </div>

    </div>


      <div class="col col-md-3">
        <br><br>
      <div class="widget_wrap navbarS" style="width:320px;height:475px;display:inline-block;"><iframe src="https://www.zomato.com/widgets/res_search_widget.php?city_id=8501&theme=red&hideCitySearch=on&hideResSearch=on&sort=popularity" style="position:relative;width:100%;height:100%;" border="0" frameborder="0"></iframe></div>
     
      </div>
      <!--https://developers.zomato.com/api/v2.1/search?entity_type=city&start=10&count=10&lat=41.001708&lon=-75.1548948&radius=1&sort=real_distance&order=desc
-->

    </div>
    </div>

  </div>
  <div class="row pad_top">

    <div class="col-md-2"></div>

  <div class="col-md-7">
   
   <form>
<div class="navbarS mapstyle container center">
  <div class="form-group">
    <label for="exampleFormControlInput1">Distance in meters from you</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="1000">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">price range from</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>$</option>
      <option>$$</option>
      <option>$$$</option>
      <option>$$$$</option>
    </select>
    <label for="exampleFormControlSelect1">price range to</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>$</option>
      <option>$$</option>
      <option>$$$</option>
      <option>$$$$</option>
    </select>

  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">minimum rating</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
          </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


 <div class="center"><button class="btn btn-outline-danger pad_side spacepls" id="hide"> Accurately Random!</button></div>
 <br>
</div>
</form>

  </div>

  <div class="col-md-3">
    

<div class="navbarS mapstyle center spacepls">
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

<br><br>

</body>


@include('partials.jquerymeme')
@include('partials.bootstrapjs')
</html>