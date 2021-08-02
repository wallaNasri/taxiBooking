<!DOCTYPE html>
<html>
  <div class="bg-info">
  <head>

    <title>Directions Service (Complex)</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />



    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}" />
    <script src="{{asset('js/index2.js')}}"></script>
    <a href="{{route('veichle.show')}}" class="btn btn-warning btn-lg  " tabindex="-1" role="button" aria-disabled="true">Select Your Car</a>
    <div id="sidebar">
        <pre style="flex-grow: 1" id="request"></pre>
        <h4 id="response"></h4>
      </div>
  </head>
  </div>
  <body>
  

    <div id="floating-panel">
    <input class="form-control " name="start" value="{{$dir->pick_up_location}}" type="hidden" id="start">
    <input class="form-control " name="end" value="{{$dir->drop_off_location}}" type="hidden" id="end">
    </div>
    <div id="map"></div>
    &nbsp;
    <div id="warnings-panel"></div>

    
   
     <?php

use Illuminate\Support\Facades\Auth;

$userid=Auth::id();
$mysqli = new mysqli("localhost", "root", "", "taxibooking");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "update directions
set distance= ? WHERE  (id=(select max(id) from directions) OR id=$userid) ";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->fetch();
$stmt->close();


?>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmRvnaBA_BcOtRkfFHoNwtuKcPqYrfQNA&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>