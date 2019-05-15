<html>
  <head>
    <title>teste 14 - gifs</title>
    <script src="https://cdn.jsdelivr.net/gh/aframevr/aframe/dist/aframe-master.min.js"></script>
    <script src="https://unpkg.com/aframe-environment-component@1.0.0/dist/aframe-environment-component.min.js"></script>
    <script src="https://unpkg.com/aframe-teleport-controls@0.2.0/dist/aframe-teleport-controls.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@3.0.3/dist/aframe-event-set-component.min.js"></script>
    <script src="https://rawgit.com/mayognaise/aframe-gif-shader/master/dist/aframe-gif-shader.min.js"></script>
  </head>
  <body>
    <a-scene >
      <!--<a-video src="imgs/giphy.gif" position=" 0 0 3" height="4" autoplay loop="true"></a-video>-->
      <a-entity geometry="primitive:box;"
                material="shader:gif;src:url(imgs/alien.gif);color:green;opacity:1" position="0 2 2"
                animation="property: rotation; easing: linear; dur: 9000; to: 0 0 0; loop:true"></a-entity>
    </a-scene>
  </body>
</html>