<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 07</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs>
      <a-marker preset="hiro">
        <a-sphere
          animation="property: rotation; easing: linear; dur: 40000; to:0 -360 0; loop: true"
          material="color:white;opacity: 0.6">
          <a-box position='0 0 0.5' width="2.5" height="2.1" material=' src: imgs/box1.png;'></a-box>
          <a-cylinder position="0 0 0" height="2.4" rotation="90 90 0" material=' src: imgs/box1.png;'></a-cylinder>
        
        </a-sphere>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>