<html>
    <head>
        <title>teste 16 - videosphere</title>
       <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
<script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>  </head>
    <body style='margin : 0px; overflow: hidden;'>
        <a-scene  embedded arjs>
            <a-marker preset="hiro">
               <a-image src="imgs/captura-de-tela-2015-07-28-as-100416.png" rotation="-90 90 -90" ></a-image>
            </a-marker>
            <a-entity camera></a-entity>
        </a-scene>
    </body>
</html>