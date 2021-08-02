function initMap() {
    const markerArray = [];
    // Instantiate a directions service.
    const directionsService = new google.maps.DirectionsService();
    // Create a map and center it on Manhattan.
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 11,
      center: { lat: 31.2842, lng: 34.2508 },
    });
    // Create a renderer for directions and bind it to the map.
    const directionsRenderer = new google.maps.DirectionsRenderer({ map: map });
    // Instantiate an info window to hold step text.
    const stepDisplay = new google.maps.InfoWindow();
    // Display the route between the initial start and end selections.
    calculateAndDisplayRoute(
      directionsRenderer,
      directionsService,
      markerArray,
      stepDisplay,
      map
    );
  
    // Listen to change events from the start and end lists.
    const service = new google.maps.DistanceMatrixService();
    // build request
    
    const origin1 = "Greenwich, England";
    const destinationA = "Stockholm, Sweden";
    const request = {
      origins: [document.getElementById("start").value],
      destinations: [document.getElementById("end").value],
      travelMode: google.maps.TravelMode.DRIVING,
      unitSystem: google.maps.UnitSystem.METRIC,
      avoidHighways: false,
      avoidTolls: false,
    };
    // put request on page
   
    // get distance matrix response
    service.getDistanceMatrix(request).then((response) => {
      document.getElementById("response").innerText = "Distance:"+JSON.stringify(
        response.rows[0].elements[0].distance.value,
        null,
        2
      ); 
      // put response
      xhttp = new XMLHttpRequest();
      xhttp.open("GET", "dir?q="+(response.rows[0].elements[0].distance.value), true);
      xhttp.send();
  
     

      
     
    });
   
    
    
  }
 
  
  function calculateAndDisplayRoute(
    directionsRenderer,
    directionsService,
    markerArray,
    stepDisplay,
    map
  ) {
    // First, remove any existing markers from the map.
    for (let i = 0; i < markerArray.length; i++) {
      markerArray[i].setMap(null);
    }
    // Retrieve the start and end locations and create a DirectionsRequest using
    // WALKING directions.
    directionsService
      .route({
        origin: document.getElementById("start").value,
        destination: document.getElementById("end").value,
        travelMode: google.maps.TravelMode.WALKING,
      })
      .then((result) => {
        // Route the directions and pass the response to a function to create
        // markers for each step.
        document.getElementById("warnings-panel").innerHTML =
          "<b>" + result.routes[0].warnings + "</b>";
        directionsRenderer.setDirections(result);
        showSteps(result, markerArray, stepDisplay, map);
      })
      .catch((e) => {
        window.alert("Directions request failed due to " + e);
      });
  }
  
  function showSteps(directionResult, markerArray, stepDisplay, map) {
    // For each step, place a marker, and add the text to the marker's infowindow.
    // Also attach the marker to an array so we can keep track of it and remove it
    // when calculating new routes.
    const myRoute = directionResult.routes[0].legs[0];
  
    for (let i = 0; i < myRoute.steps.length; i++) {
      const marker = (markerArray[i] =
        markerArray[i] || new google.maps.Marker());
      marker.setMap(map);
      marker.setPosition(myRoute.steps[i].start_location);
      attachInstructionText(
        stepDisplay,
        marker,
        myRoute.steps[i].instructions,
        map
      );
    }
  }


  
  
  function attachInstructionText(stepDisplay, marker, text, map) {
    google.maps.event.addListener(marker, "click", () => {
      // Open an info window when the marker is clicked on, containing the text
      // of the step.
      stepDisplay.setContent(text);
      stepDisplay.open(map, marker);
    });
   
    
  }

 