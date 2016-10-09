var App = App || {};

App.Map = (function()
{  
    //variables
    var zoomLevel = 2;
    var mapContainer = $('.map').get(0);
    
    var mapOptions = {
        Zoom: zoomLevel,
        minZoom: zoomLevel,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: {lat: 20, lng: -2.285156},
        disableDefaultUI: true,
        styles: [
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#d5d5d5"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#555555"
                    }
                ]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 45
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "all",
                "stylers": [
                    {
                        "color": "#93d7f2"
                    },
                    {
                        "visibility": "on"
                    }
                ]
            }
        ]
    };
    
    var map = new google.maps.Map(mapContainer, mapOptions);
    
    //add a info window to the map
    function addInfoWindow(lat, lng, message)
    {
        var latLng =  new google.maps.LatLng(lat, lng);
        var infowindow = new google.maps.InfoWindow({
            content: message,
            position: latLng
        });
        
        infowindow.open(map);
        
        setTimeout(function(){
            infowindow.close();
        }, 3000);
    }
    
    
    
    /**
     * Functions available to the public
     */
    return {
        addInfoWindow: addInfoWindow
    };
})();