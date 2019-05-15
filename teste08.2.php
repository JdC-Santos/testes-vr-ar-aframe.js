<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 08- Terraplana</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body>
    <a-scene debug="true">
         <!-- SATURNO -->
        <a-sphere 
            position='-18 5 20' rotation="0 0 0" scale="0.3 0.3 0.3"
            animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
            material=" src: imgs/saturno.jpeg">
        </a-sphere>
        <!-- ANEL DE SATURNO -->
        <a-torus
            arc="360" p="1" q="1" radius="4" radius-tubular=".5"
            position='-18 5 20' rotation="70 -30 0" scale="0.2 0.2 0.005"
            animation="property: rotation; easing: linear; dur: 99000; to:70 -30 -360; loop: true" 
            material=" src:imgs/saturno.jpeg">
        </a-torus>
        
        <!-- JUPTER -->
        <a-sphere 
            position='0 3 -60' rotation="0 0 0" scale="0.6 0.6 0.6"
            animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
            material=" src: imgs/jupter.png">
        </a-sphere>
        
        <!-- MARTE -->
        <a-sphere 
            position='-33 1 6' rotation="0 0 0" scale="0.6 0.6 0.6"
            animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
            material=" src: imgs/mars.jpeg">
        </a-sphere>
        
        <!-- TERRA -->
        <a-sphere 
            position='0 1 5' rotation="0 0 0" scale="1 1 1"
            animation="property: rotation; easing: linear; dur: 35000; to:0 -360 0; loop: true" 
            material=" src: imgs/earth-01.jpg">
        </a-sphere>
        <!-- LUA -->
         <a-sphere 
            position='6 1 7' rotation="0 0 0" scale="0.1 0.1 0.1"
            material=" src: imgs/moon.jpeg">
        </a-sphere>
        
        <!-- VENUS -->
        <a-sphere 
            position='11 1 -10' rotation="0 0 0" scale="0.6 0.6 0.6"
            animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
            material=" src: imgs/venus.jpeg">
        </a-sphere>
        
        <!-- MERCURIO -->
        <a-sphere 
            position='-7 1 -20' rotation="0 0 0" scale="0.3 0.3 0.3"
            animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
            material=" src: imgs/mercury.jpeg">
        </a-sphere>
        
        <a-light type="directional" color="orange" position="0 0 -15"></a-light>
        <!-- SOL -->
        <a-sphere 
            position='3 1 -15' rotation="0 0 0" scale="1 1 1"
            light="type: point; intensity: 2"
            animation="property: rotation; easing: linear; dur: 40000; to:0 -360 0; loop: true" 
            material=" src: imgs/sun.jpg;shader: flat">
        </a-sphere>
        <!--PRIMEIRA CAMADA-->
        
        <!--<a-sphere -->
        <!--    position='3 1 -15' rotation="0 0 0" scale="1.12 1.12 1.12"-->
        <!--    animation="property: rotation; easing: linear; dur: 40000; to:0 -360 0; loop: true" -->
        <!--    material="color:#FFEA46;opacity: 0.2;shader:flat">-->
        <!--</a-sphere>-->
        
        <a-sphere 
            position='3 1 -15' rotation="0 0 0" scale="1.19 1.19 1.19"
            animation="property: rotation; easing: linear; dur: 40000; to:0 -360 0; loop: true" 
            material="color:#FFFBB2;opacity: 0.1 ;shader:flat">
        </a-sphere>
        <!--BACKGROUND-->
        <a-sky src="imgs/space02.jpg"></a-sky>
    </a-scene>
  </body>
</html>