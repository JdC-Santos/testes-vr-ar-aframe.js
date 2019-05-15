<html>
    <head>
        <meta charset="utf-8">
        <title>AR - Sistema Solar</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs="sourceType: webcam; debugUIEnabled: false;">
    <!-- SOL -->
        <a-marker type='pattern' url='Patt/SOL.patt'>
            <a-box rotation="0 0 0" scale="1 1 1" position="0 0 0" material="color:white;opacity:1"
             animation="property: rotation; easing: linear; dur: 44000; to:0 0 360; loop: true">
                <a-sphere 
                    position='0 0 0' rotation="90 0 0" scale="1 1 1"
                    material=" src: ../imgs/sun.jpg;">
                </a-sphere>    
            </a-box>
            
        </a-marker>
        <a-entity camera></a-entity>
    </a-scene>
  </body>
</html>