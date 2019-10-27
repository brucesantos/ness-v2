<!-- MAPS -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />

<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoibGVvZmFsb3RpY28iLCJhIjoiY2luMGZnbjR4MDh3b3Y5a2ticGh2MDhnMyJ9.tWtrSS2y617vcOQZpDYfoQ';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/leofalotico/cjzdfujpj32bo1co3iip8atom', // stylesheet location
    center: [-46.6958055, -23.6019319], // starting position [lng, lat]
    zoom: 16 // starting zoom
  });

  map.on('load', function() {
    map.loadImage('https://i.imgur.com/MK4NUzI.png', function(error, image) {
      if (error) throw error;
      map.addImage('ness', image);
      map.addLayer({
        "id": "points",
        "type": "symbol",
        "source": {
          "type": "geojson",
          "data": {
            "type": "FeatureCollection",
            "features": [{
              "type": "Feature",
              "geometry": {
                "type": "Point",
                "coordinates": [-46.6928055, -23.6009]
              },
              "properties": {
                "title": "NESS </br>",
                "description": "R. Dr. Geraldo Campos Moreira, 240 </br>Brooklin Novo - São Paulo/SP </br>CEP 04571-020"
              }
            }]
          }
        },
        "layout": {
          "icon-image": "ness",
          "icon-size": 0.95
        }
      });
    });
  });

  map.on('click', function(e) {
  var features = map.queryRenderedFeatures(e.point, {
    layers: ['points'] // replace this with the name of the layer
  });

  if (!features.length) {
    return;
  }

  var feature = features[0];

  var popup = new mapboxgl.Popup({ offset: [0, -15] })
    .setLngLat(feature.geometry.coordinates)
    .setHTML('<h5>' + feature.properties.title + '</h5><p>' + feature.properties.description + '</p>')
    .addTo(map);
  });
</script>
