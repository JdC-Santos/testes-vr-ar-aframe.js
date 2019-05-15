
<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 11 - muita animacao</title>
    </head>
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
    <body>

        <a-scene >
          <!--<a-entity geometry="primitive: box; width: 3; height: 2; depth: 3" position=" 0 0 7" material="src: imgs/box1.png"></a-entity>-->
            <!--<a-entity geometry="primitive: octahedron" position=" 0 1 3" material="color: cyan"></a-entity>-->
            <!--<a-entity geometry="primitive: box; height: 5; width: 5" position="0 0 6" material=" src: imgs/box1.png; repeat: 3 4;metalness: 0.5"></a-entity>-->
            <!--<a-text value="Seja Bem vindo" width="15" color="orange" rotation="180 0 180" position="2.3 2 4.8"></a-text> -->
            <a-entity geometry="primitive: box; radius: 2" position="0 0 3" material="color: red"
                      animation="property: components.material.material.color; 
                                 type: color;
                                 easing: easeInOutQuad; dir: alternate;
                                 from: red; to: #0F5;
                                 dur: 3000;
                                 loop: true"
                      animation__rotation="property: rotation; easing: linear; dur:2000; to: 360 90 -180; loop: true"
                      animation__position="property: position; easing: linear;dir: alternate;  dur:5000; to: 0 3 10 ;loop:true">
                    <!--<a-animation attribute="material.color" from="red" to="blue" dur="1000" repeat="indefinite"></a-animation>-->
            </a-entity>
            
            <!--<a-box position="0 0 3">-->
            <!--    <a-animation attribute="material.color" from="red" to="blue" dur="1000" repeat="indefinite"></a-animation>-->
            <!--</a-box>-->
        </a-scene>
    </body>
</html>