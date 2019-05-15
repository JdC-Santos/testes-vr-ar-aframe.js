<html>
  <head>
    <title>teste 15 - videos</title>
    <script src="https://cdn.jsdelivr.net/gh/aframevr/aframe/dist/aframe-master.min.js"></script>
    <script src="https://unpkg.com/aframe-environment-component@1.0.0/dist/aframe-environment-component.min.js"></script>
    <script src="https://unpkg.com/aframe-teleport-controls@0.2.0/dist/aframe-teleport-controls.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@3.0.3/dist/aframe-event-set-component.min.js"></script>
    <script src="https://rawgit.com/mayognaise/aframe-gif-shader/master/dist/aframe-gif-shader.min.js"></script>
  </head>
  <body>
   <a-scene>
      <a-assets>
        <video id="penguin-sledding" autoplay loop="true" src="imgs/Travaho.mp4"></video>
      </a-assets>
    
      <!-- Using the asset management system. -->
      <a-video src="#penguin-sledding" width="16" height="9" position="0 0 -20"></a-video>
    
      <!-- Defining the URL inline. Not recommended but more comfortable for web developers. -->
      <a-video src="imgs/Travaho.mp4"></a-video>
    </a-scene>
  </body>
</html>