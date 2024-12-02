function initialize() {
    var Options = {
        center: new google.maps.LatLng(56, 37),
        zoom: 8,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true
    };
    var styles = [
        {
            "featureType": "administrative",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#444444"
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
                    "color": "#8a969b"
                },
                {
                    "visibility": "on"
                }
            ]
        }
    ];
    $('#customMap').height($('.section-map .contact-info').outerHeight());
    var myLatLng = new google.maps.LatLng(47.701830, 7.336047);
    var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});
    var map = new google.maps.Map(document.getElementById("customMap"), Options);
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
}
if ($('#customMap').length) {
    google.maps.event.addDomListener(window, 'load', initialize);
}

function initializeBigMap() {
    // Create an array of styles.
    var styles = [
        {
            "featureType": "all",
            "elementType": "all",
            "stylers": [
                {
                    "invert_lightness": true
                },
                {
                    "saturation": 10
                },
                {
                    "lightness": 30
                },
                {
                    "gamma": 0.5
                },
                {
                    "hue": "#435158"
                }
            ]
        }
    ];
    var myLatLng = new google.maps.LatLng(47.701830, 7.336047);
    var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});
    var mapOptions = {
        zoom: 11,
        scrollwheel: false,
        center: myLatLng,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    };
    var map = new google.maps.Map(document.getElementById('bigMap'),
            mapOptions);
    var image = 'img/google-marker.png';

    var myMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image
    });
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
}
if ($('#bigMap').length) {
    google.maps.event.addDomListener(window, 'load', initializeBigMap);
}