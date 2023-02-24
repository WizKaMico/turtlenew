var directionsDisplay = new google.maps.DirectionsRenderer({ draggable: true });
var directionsService = new google.maps.DirectionsService();
var map;
var line;
var int;
var buttonRoute = document.querySelector('#routeGo')
var buttonWaypoint = document.querySelector('#waypointAdd')
var routeFrom= document.querySelector('#routeFrom')

var routeTo=document.querySelector('#routeTo')
directionsDisplay.addListener('directions_changed', function() {
    createPolyline(directionsDisplay.getDirections());
  });
buttonRoute.addEventListener('click',calcRoute)
buttonWaypoint.addEventListener('click',addWaypoint)
load()
function load() {
    var myOptions = {
        zoom: 6,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: new google.maps.LatLng(12.1561082,120.3985984),
      styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#523735"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd2be"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a5b076"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#447530"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f8c967"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#e9bc62"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e98d58"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#db8555"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b9d3c2"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
]
    };
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  var autocomplete = new google.maps.places.Autocomplete(routeFrom);
  autocomplete.bindTo('bounds', map);
  var autocomplete1 = new google.maps.places.Autocomplete(routeTo);
  autocomplete1.bindTo('bounds', map);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById("directions"));
};

function addWaypoint(){
  routeTo.insertAdjacentHTML('beforebegin',
    `
    <div style="margin-bottom:7px"><input type="text"  name="waypoint" value="" />
    <label>Waypoint</label><button style="margin-left:10px;" class="remove btn btn-danger btn-sm">Remove</button><div>`) 
  let arr = document.querySelectorAll('.remove')
   arr[arr.length-1].addEventListener('click', function() {
     this.parentNode.remove()
    });
  }
function calcRoute() {
  const locations = []
  const waypoints = document.querySelectorAll('input[name="waypoint"]')
  waypoints.forEach(function(item){
    if(item.value !==''){
      locations.push({
      location:item.value,
      stopover:true
    })
    }
  })
    var request = {
        origin: routeFrom.value,
        destination: routeTo.value,
        waypoints: locations,
       // optimizeWaypoints: true,
        travelMode: "DRIVING"
    };
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            console.log('its dragged')
            //document.getElementById('Gresponse').innerHTML = JSON.stringify(response);
            createPolyline(response);
        }
    });
};

function createPolyline(directionResult) {
  if( line!==undefined){
  line.setMap(null)
  clearInterval(int)
  };
  line = new google.maps.Polyline({
      path: [],
      strokeColor: '#FF0000',
      strokeOpacity: 0.5,
      strokeWeight: 4,
      icons: [{
          icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 8,
            strokeColor: '#393'
                },
          offset: '100%'
        }]
  });
  var legs = directionResult.routes[0].legs;
      for (i = 0; i < legs.length; i++) {
        var steps = legs[i].steps;
        for (j = 0; j < steps.length; j++) {
          var nextSegment = steps[j].path;
          for (k = 0; k < nextSegment.length; k++) {
            line.getPath().push(nextSegment[k]);
          }
        }
      }
  line.setMap(map);
  animate();
};

function animate() {
    var count = 0;
    int = setInterval(function() {
      count = (count + 1) % 200;
      var icons = line.get('icons');
      icons[0].offset = (count / 2) + '%';
      line.set('icons', icons);
  }, 24);
};
