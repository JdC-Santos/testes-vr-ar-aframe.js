<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 08- Terraplana</title>
    </head>
<script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <body>
    <a-scene debug="false">
        <!--<a-light type="point" color="orange" position="0 0 0"></a-light>-->
        <!-- SOL : CENTRO DO SISTEMA SOLAR-->
        <a-sphere 
            position='0 0 0' rotation="0 0 0" scale="139.1 139.1 139.1"
            light="type: point; intensity: 1"
            animation="property: rotation; easing: linear; dur: 40000; to:0 -360 0; loop: true" 
            material=" src: imgs/sun.jpg;shader:flat">
        </a-sphere>
         <!--CIRCULO DE MERCURIO: PRIMEIRO PLANETA A PARTIR DO SOL-->
        <a-sphere 
            animation="property: rotation; easing: linear; dur: 60000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="5.79 5.79 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
             <!--MERCURIO -->
            <a-sphere 
                position='0 0 5.79' rotation="0 0 0" scale="0.488 0.488 0.488"
                animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
                material=" src: imgs/mercury.jpeg">
            </a-sphere>
        </a-sphere>
        <!--CIRCULO DE VENUS-->
        <a-sphere 
            animation="property: rotation; easing: linear; dur: 75000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="10.8 10.8 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
            <!-- VENUS -->
            <a-sphere 
                position='0 0 10.8' rotation="0 0 0" scale="1.2104 1.2104 1.2104"
                animation="property: rotation; easing: linear; dur: 14000; to:0 -360 0; loop: true" 
                material=" src: imgs/venus.jpeg">
            </a-sphere>
        </a-sphere>
        <!--CIRCULO DA TERRA-->
        <a-sphere 
            animation="property: rotation; easing: linear; dur: 85000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="14.96 14.96 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
            <!-- TERRA -->
            <a-sphere 
                position='0 0 1490' rotation="0 0 0" scale="100.275 100.275 100.275"
                animation="property: rotation; easing: linear; dur: 21000; to:0 -360 0; loop: true" 
                material=" src: imgs/earth_lights_2048.png">
            </a-sphere>
            <!--esfera no centro da terra para fazer a rotação da lua-->
            <a-sphere 
                scale="1 1 1"
                position="0 0 14.96"
                animation="property: rotation; easing: linear; dur: 30000; to:0 -360 0; loop: true"
                material="color:white;opacity:1">
                <!-- LUA -->
                <a-sphere
                    position='0 0 2.3' rotation="0 0 0" scale="0.1 0.1 0.1"
                    material=" src: imgs/moon.jpeg">
                </a-sphere>
            </a-sphere>
        
        </a-sphere>
        <!-- ESFERA PARA ROTAÇÃO DE MARTE -->
        <a-sphere
            animation="property: rotation; easing: linear; dur: 90000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--CIRCULO DE MARTE-->
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="22.7 22.7 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
            <!-- MARTE -->
            <a-sphere 
                position='0 0 22.7' rotation="0 0 0" scale="0.679 0.679 0.679"
                animation="property: rotation; easing: linear; dur: 28000; to:0 -360 0; loop: true" 
                material=" src: imgs/mars.jpeg">
            </a-sphere>
        </a-sphere>
        
        <!-- ESFERA PARA ROTAÇÃO DE JÚPTER -->
        <a-sphere
            animation="property: rotation; easing: linear; dur: 120000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--CIRCULO DE JÚPTER-->
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="77.83 77.83 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
             <!--JÚPTER ( O BIXO EH GRANDE PRA KRL ) -->
            <a-sphere 
                position='0 0 77.83' rotation="0 0 0" scale="14.300 14.300 14.300"
                animation="property: rotation; easing: linear; dur: 60000; to:0 -360 0; loop: true" 
                material="src: imgs/jupter.png">
            </a-sphere>
        </a-sphere>
        
        <!-- ESFERA PARA ROTAÇÃO DE SATURNO -->
        <a-sphere
            animation="property: rotation; easing: linear; dur: 140000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--CIRCULO DE SATURNO -->
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="143 143 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
            <!-- SATURNO -->
            <a-sphere 
                position='0 0 143' rotation="0 0 0" scale="12 12 12"
                animation="property: rotation; easing: linear; dur: 60000; to:0 -360 0; loop: true" 
                material="src: imgs/saturno.jpeg">
            </a-sphere>
            
            <a-sphere position='0 0 143' rotation="0 0 0" scale="1 1 1"
                      animation="property: rotation; easing: linear; dur: 80000; to:0 -360 0; loop: true" >
                 <!--ANEL DE SATURNO -->
                <a-torus
                    arc="360" p="1" q="1" radius="4" radius-tubular=".5"
                    position='0 0 0' rotation="80 70 0" scale="6 6 0.005"
                    animation="property: rotation; easing: linear; dur: 99000; to:80 70 -360; loop: true" 
                    material=" src:imgs/saturno.jpeg;shader:flat">
                </a-torus>
            </a-sphere>
        </a-sphere>
        
         <!-- ESFERA PARA ROTAÇÃO DE ÚRANO -->
        <a-sphere
            animation="property: rotation; easing: linear; dur: 190000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--CIRCULO DE ÚRANO -->
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="287 287 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
            <!-- ÚRANO -->
            <a-sphere 
                position='0 0 287' rotation="0 0 0" scale="5.1 5.1 5.1"
                animation="property: rotation; easing: linear; dur: 68000; to:0 -360 0; loop: true" 
                material="src: imgs/urano.jpeg">
            </a-sphere>
        </a-sphere>
        
         <!-- ESFERA PARA ROTAÇÃO DE NEPTUNO -->
        <a-sphere
            animation="property: rotation; easing: linear; dur: 240000; to:0 -360 0; loop: true"
            material="color:white;opacity:1">
            <!--CIRCULO DE NEPTUNO -->
            <!--<a-torus-->
            <!--    arc="360" p="0.1" q="0.1" radius="1" radius-tubular=".0005"-->
            <!--    position='0 0 0' rotation="90 0 0" scale="450 450 0.1"-->
            <!--    material="color: white">-->
            <!--</a-torus>-->
            <!-- NEPTUNO -->
            <a-sphere 
                position='0 0 450' rotation="0 0 0" scale="4.95 4.95 4.95"
                animation="property: rotation; easing: linear; dur: 68000; to:0 -360 0; loop: true" 
                material="src: imgs/neptuno.jpeg">
            </a-sphere>
        </a-sphere>
        
        <!--BACKGROUND-->
        <a-sky src="imgs/space02.jpg"></a-sky>
        <!--POSICAO DA CAMERA-->
        <a-entity
                material="color:white; opacity:1"
                position="1200 3 50"
                animation="property: position; easing: easeInOutQuad; dir: alternate; dur: 40000; to: 1200 3 50; loop: true">
            <a-camera position="4 5 0"></a-camera>
            <!--14900-->
        </a-entity>
        
    </a-scene>
  </body>
</html>