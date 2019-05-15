<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 06- animation</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body>
    <a-scene debug="true">
        <a-entity id="hsl-green" geometry="primitive: box" height="1" width="1" material=" src: imgs/bloco-mario.png" position="-6 1 0"
                  animation="property: position; easing: easeInOutQuad; dir: alternate; dur: 4000; to: 6 1 0; loop: true" ></a-entity>
        
        <a-entity id="hsl-green" geometry="primitive: box" material=" src: imgs/box1.png" position="0 2 3"
                animation="property: rotation; easing: easeInOutQuad; dir: alternate; dur: 4000; to: 360 0 360; loop: true" ></a-entity>
                
        <a-entity id="hsl-green" metalness="0.5" geometry="primitive: sphere" material="color: cyan" position="6 2 3"
                animation="property: rotation; easing: easeInOutQuad; dir: alternate; dur: 9000; to: 0 360 0; loop: true" ></a-entity>
    </a-scene>
  </body>
</html>