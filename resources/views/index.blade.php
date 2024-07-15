<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Accessible Map</title>
    <link rel="stylesheet" href="node_modules/ol/ol.css">
    <style>
      .map {
        width: 100%;
        height: 400px;
      }
      a.skiplink {
        position: absolute;
        clip: rect(1px, 1px, 1px, 1px);
        padding: 0;
        border: 0;
        height: 1px;
        width: 1px;
        overflow: hidden;
      }
      a.skiplink:focus {
        clip: auto;
        height: auto;
        width: auto;
        background-color: #fff;
        padding: 0.3em;
      }
      #map:focus {
        outline: #4A74A8 solid 0.15em;
      }
    </style>
  </head>
  <body>
    <a class="skiplink" href="#map">Go to map</a>
    <div id="map" class="map" tabindex="0"></div>
    <button id="zoom-out">Zoom out</button>
    <button id="zoom-in">Zoom in</button>

    <script type="module" src="main.js"></script>
  </body>
</html>
