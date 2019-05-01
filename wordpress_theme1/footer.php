<footer>
    <div class="container-fluid text-center footer">
        <p>This app is powered by </p>
        <div class="footer-logo">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/cup-of-hot-chocolate.png"/>
            <p>
            CoffeDrop </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Bootstrap core JavaScript and other javascript files
============================================================= -->
<script>
  function initMap() {
    //Map options
    var options = {
      zoom:5,
      center:{lat:50.3785 , lng:14.9706 },
      styles: [
      {elementType: 'geometry', stylers: [{color: '#E7E7E7'}]},
      {elementType: 'labels.text.stroke', stylers: [{color: 'black'}]},
      {elementType: 'labels.text.fill', stylers: [{color: 'black'}]},
      {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{color: 'black'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#6b9a76'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#DBDBD8'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry.stroke',
        stylers: [{color: '#DBDBD8'}]
      },
      {
        featureType: 'road',
        elementType: 'labels.text.fill',
        stylers: [{color: '#9ca5b3'}]
      },


      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{color: '#f3d19c'}]
      },

      {
        featureType: 'transit.station',
        elementType: 'labels.text.fill',
        stylers: [{color: '#d59563'}]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#D1D2D3'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#515c6d'}]
      }

    ]
    }

    //New map
    var map = new google.maps.Map(document.getElementById('map'), options);

    // Array of markers
    var markers = [
      {
        coords:{lat:54.25 , lng:-3.18 },
        iconImage:'<?php bloginfo('stylesheet_directory'); ?>/img/marker.png',
        content:'<h4 class="lead">Kirkby-in-Furness</h4>'
      },
      {
        coords:{lat:53.14 , lng:-3.85 },
        iconImage:'<?php bloginfo('stylesheet_directory'); ?>/img/marker.png',
        content:'<h4 class="lead">Trefriw</h4>'
      },
      {
        coords:{lat:53.53 , lng:-2.5 },
        iconImage:'<?php bloginfo('stylesheet_directory'); ?>/img/marker.png',
        content:'<h4 class="lead">Athertons</h4>'
      },
      {
        coords:{lat:55.58 , lng:-1.65 },
        iconImage:'<?php bloginfo('stylesheet_directory'); ?>/img/marker.png',
        content:'<h4 class="lead">Seahouses</h4>'
      },
      {
        coords:{lat:53.6 ,  lng:-2.67 },
        iconImage:'<?php bloginfo('stylesheet_directory'); ?>/img/marker.png',
        content:'<h4 class="lead">Standish</h4>'
      }
    ];

    // Loop through markers
    for(var i = 0;i < markers.length;i++){
      // Add marker
      addMarker(markers[i]);
    }

    // Add Marker Function
    function addMarker(props){
      var marker = new google.maps.Marker({
        position:props.coords,
        map:map,
        icon:props.iconImage
      });

      // Check for customicon
      if(props.iconImage){
        // Set icon image
        marker.setIcon(props.iconImage);
      }

      // Check content
      if(props.content){
        var infoWindow = new google.maps.InfoWindow({
          content:props.content
        });

        marker.addListener('click', function(){
          infoWindow.open(map, marker);
        });
      }
    }
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHNz_UQi2RdgG5Ew821s6qSNtkqbr7AlU&callback=initMap" async defer></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>
</html>
