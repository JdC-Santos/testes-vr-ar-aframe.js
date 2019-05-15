<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 02</title>
    </head>
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body>
    <a-scene debug="false">
      <a-entity id="hsl-green" geometry="primitive: box" material="color:hsl(120, 100%, 75%)" position="-4 1 0"></a-entity>
      <a-entity id="rgb-yellow" geometry="primitive: box" material="color:rgb(255, 255, 0)" position="-2 1 0"></a-entity>
      <a-entity id="hex3-red" geometry="primitive: box" material="color:#f00" position="0 2 5"></a-entity>
      <a-entity id="hex6-red" geometry="primitive: box" material="color:#ff0000" position="2 1 0"></a-entity>
      <a-entity id="string-blue" geometry="primitive: box" material="color:blue" position="0 -5 -5"></a-entity>
      
      <a-entity geometry="primitive:sphere" material="">
        
      </a-entity>
    </a-scene>
  </body>
</html>