<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
    </style>
</head>
<body onload="initialize()">
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script type="text/javascript">

        function initialize() {
        var markers = [
        {
            "title": 'Aksa Beach',
            "lat": '19.1759668',
            "lng": '72.79504659999998',
            "description": 'Aksa Beach is a popular beach and a vacation spot in Aksa village at Malad, Mumbai.'
        },
        {
            "title": 'Juhu Beach',
            "lat": '19.0883595',
            "lng": '72.82652380000002',
            "description": 'Juhu Beach is one of favourite tourist attractions situated in Mumbai.'
        },
        {
            "title": 'Girgaum Beach',
            "lat": '18.9542149',
            "lng": '72.81203529999993',
            "description": 'Girgaum Beach commonly known as just Chaupati is one of the most famous public beaches in Mumbai.'
        },
        {
            "title": 'Jijamata Udyan',
            "lat": '18.979006',
            "lng": '72.83388300000001',
            "description": 'Jijamata Udyan is situated near Byculla station is famous as Mumbai (Bombay) Zoo.'
        },
        {
            "title": 'Sanjay Gandhi National Park',
            "lat": '19.2147067',
            "lng": '72.91062020000004',
            "description": 'Sanjay Gandhi National Park is a large protected area in the northern part of Mumbai city.'
        }
        ];
        var mapOptions = {
        center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        //  marker:true
        };
        var infoWindow = new google.maps.InfoWindow();
        var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
        for (i = 0; i < markers.length; i++) {
        var data = markers[i]
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: data.title
        });
        (function(marker, data) {

        // Attaching a click event to the current marker
        google.maps.event.addListener(marker, "click", function(e) {
        infoWindow.setContent(data.description);
        infoWindow.open(map, marker);
        });
        })(marker, data);
        }
        }
        </script>
        
            <div id="map_canvas" style="width: 400px; height: 500px"></div>

    </body>
  </html>
