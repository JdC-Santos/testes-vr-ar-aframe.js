<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 12 - assets</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body>
    <a-scene debug="true">
          <a-assets>
            <a-mixin id="red" material="color: red"></a-mixin>
            <a-mixin id="blue" material="color: blue"></a-mixin>
            <a-mixin id="cube" geometry="primitive: box"></a-mixin>
          </a-assets>
        
          <a-entity mixin="red cube" position="0 0 2"></a-entity>
          <a-entity mixin="blue cube" position="0 2 2"></a-entity>
    </a-scene>
  </body>
</html>