@extends('font.layout')
@section('content')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <script src="{{asset('js/index.js')}}"></script>
  </head>
  <body>
    <div id="map"></div>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvXlJywXPY53E3yQ0H5yBe2k-7nSxTYA4&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
@endsection