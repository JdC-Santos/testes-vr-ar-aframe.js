<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 08- Terraplana</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body>
    <a-scene debug="true">
        <a-sphere 
            position='0 1 5' rotation="0 0 0" scale="2 1 2"
            animation="property: rotation; easing: linear; dur: 9000; to:0 -360 0; loop: true" 
            material=" src: imgs/earth_lights_2048.png">
        </a-sphere>
    </a-scene>
  </body>
</html>