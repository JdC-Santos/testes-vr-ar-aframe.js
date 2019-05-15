<html>
    <head>
        <meta charset="utf-8">
        <title>VR & RA - TESTE 10- textos2</title>
    </head>
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
    <body>
        <a-scene debug="true">
        <!--FRENTE-->
            <a-entity geometry="primitive: box" scale="7 1 1" material=" src: imgs/box1.png; repeat: 3 1;metalness: 0.5" position="1 2 5.8"></a-entity>
            <a-text value="Seja Bem vindo" width="20" color="orange" height="20" rotation="180 0 180" position="4 4 5"></a-text> 
            
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Aileron-Semibold.fnt" rotation="180 0 180" position="4 3 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/DejaVu-sdf.fnt" rotation="180 0 180" position="4 2 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Exo2Bold.fnt" rotation="180 0 180" position="4 1 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Exo2SemiBold.fnt" rotation="180 0 180" position="4 0 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/KelsonSans.fnt" rotation="180 0 180" position="4 -1 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Monoid.fnt" rotation="180 0 180" position="4 -2 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/mozillavr.fnt" rotation="180 0 180" position="4 -3 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/SourceCodePro.fnt" rotation="180 0 180" position="4 -4 5"></a-text>
        <!-- DIREITA-->
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Exo2Bold.fnt" rotation="180 0 -90" position="-4 1 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Exo2SemiBold.fnt" rotation="180 -70 180" position="-4 0 5"></a-text>
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/KelsonSans.fnt" rotation="270 -70 180" position="-4 -1 5"></a-text>
        <!--ESQUERDA-->
            <a-text value="Seja Bem vindo" width="20" font="https://cdn.aframe.io/fonts/Exo2Bold.fnt" rotation="180 90 180" position="9 1 2"
            animation="property: rotation; easing: linear;dir:alternate; dur: 1000; to: 130 90 180; loop: true"></a-text>
        </a-scene>
            
    </body>
</html>
