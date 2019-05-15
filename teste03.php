<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - teste03</title>
    </head>
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
    <body style='margin : 0px; overflow: hidden;'>
        <a-scene embedded arjs>
          <a-marker preset="hiro">
              <a-box position='0 0.5 0' opacity="0.5" material='color: blue;'></a-box>
              <a-box rotation="45 0 0" position='1 0.5 0' material='color: orange;'></a-box>
              <a-box position='1 0.5 1' material='color: yellow;'></a-box>
              <a-cylinder position="1 0.75 -1" radius="0.5" height="1.5" material="color: #FFC65D"></a-cylinder>
              <a-sphere position="-1 1.25 0" radius="0.5" color="#EF2D5E"></a-sphere>
          </a-marker>
          <a-entity camera></a-entity>
        </a-scene>
    </body>
</html>