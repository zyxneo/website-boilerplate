(function ($) {
    
if ($('map')) {
        
	// http://googlemaps.github.io/js-samples/styledmaps/wizard/index.html
	// https://developers.google.com/maps/documentation/javascript/get-api-key#registering-authorized-urls
    
	var mapLat = 48.2155779;
	var mapLng = 16.3938163;
	var mapZoom = 14;
	var infowindowContent = '<p>Html content</p>';
	
	var mapMarker = {
          path: 'M90.1-125.4C71.8-77.9,0,0,0,0s-66-74.8-85.1-120.3 c-25-59.4,16.6-132.8,85.1-132.8S111.9-182.1,90.1-125.4z M-62.1-159.1c0,35.3,28.2,63.9,63.2,64c35.4,0.1,63.9-28,64-63.1 c0.1-35.7-28-64.1-63.4-64.2C-33.4-222.6-62-194.1-62.1-159.1z',
          fillColor: 'red',
          fillOpacity: 1,
          scale: 0.3,
          strokeColor: '#990000',
          strokeWeight: 1
        };


      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: mapLat, lng: mapLng},
          zoom: mapZoom,

		  styles: [
              {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 40
                }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                {
                    "visibility": "off"
                }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
                ]
            },
            {
                "featureType": "administrative.locality",
                "elementType": "all",
                "stylers": [
                {
                    "saturation": "-2"
                },
                {
                    "visibility": "on"
                }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
                ]
            },
            {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 19
                }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 21
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 17
                }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.5
                }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 18
                }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 14
                }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                {
                    "color": "#050505"
                },
                {
                    "lightness": 15
                }
                ]
            }
            ]

        });

        var infowindow = new google.maps.InfoWindow();
		
		var marker = new google.maps.Marker({
              map: map,
			  icon: mapMarker,
              position: {lat: mapLat, lng: mapLng}
        });
		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.setContent(infowindowContent);
		  infowindow.open(map, this);
		});
      }
    
    }
}( jQuery ));