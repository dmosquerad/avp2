<html lang="es">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>AVP - GastroMapa </title>
      <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome CSS -->
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom CSS -->
      <link href="../../css/animate.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="../../css/style.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  </head>
  <script type="text/javascript">
  function load() {
    var map = new google.maps.Map(document.getElementById("map"), {
      center: new google.maps.LatLng(42.3346753,-7.8659848),
      zoom: 15,
      mapTypeId: 'roadmap'
    });
    var infoWindow = new google.maps.InfoWindow;
    downloadUrl("markers.php", function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName("marker");
      for (var i = 0; i < markers.length; i++) {
        var point = new google.maps.LatLng(
          parseFloat(markers[i].getAttribute("lat")),
          parseFloat(markers[i].getAttribute("lng")));
        var icon = 'marker.png';
        var marker = new google.maps.Marker({
          map: map,
          position: point,
          icon: icon
        });
      }
    });
  }
  function downloadUrl(url, callback) {
    var request = window.ActiveXObject ?
    new ActiveXObject('Microsoft.XMLHTTP') :
    new XMLHttpRequest;
    request.onreadystatechange = function() {
      if (request.readyState == 4) {
        request.onreadystatechange = doNothing;
        callback(request, request.status);
      }
    };
    request.open('GET', url, true);
    request.send(null);
  }
  function doNothing() {}
  </script>
</head>

<body onload="load()">
  <?php
    session_start();
    ?>
  <a href="../../controller/controlSesiones.php"><div class="section-modal" id="service-modal" tabindex="-1">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
              </div>
              </a>
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Gastromapa</h3>
                            <p>Soy un gastromapa</p>
                            <div id="map"></div>
                        </div>
                    </div>

                  </div>
  </div>
</body>
</html>
