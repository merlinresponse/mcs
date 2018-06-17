<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

 <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

 <meta name="apple-mobile-web-app-capable" content="yes">
 <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Signature Pad -->

        <link rel="stylesheet" href="css/signature-pad.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
          <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
          <script src="https://unpkg.com/aframe-layout-component@4.2/dist/aframe-layout-component.min.js"></script>
          <script>
                AFRAME.registerComponent('cursor-listener', {
                  init: function () {
                    var lastIndex = -1;
                    var COLORS = ['red', 'green', 'blue'];
                    this.el.addEventListener('click', function (evt) {
                      lastIndex = (lastIndex + 1) % COLORS.length;
                      this.setAttribute('material', 'color', COLORS[lastIndex]);
                      console.log('I was clicked at: ', evt.detail.intersection.point);
                    });
                  }
                  });
          </script>
    </head>
    <body>
      <a-scene>
        <a-assets>
          <img id="house" src="../img/360_test.jpg">
        </a-assets>

        <a-sky id="house-360" radius="100" src="#house"></a-sky>

        <a-entity camera look-controls>
          <a-entity cursor="fuse: true; fuseTimeout: 500"
                    position="0 0 -1"
                    geometry="primitive: ring; radiusInner: 0.02; radiusOuter: 0.03"
                    material="color: black; shader: flat">
          </a-entity>
        </a-entity>

        <a-box position="0 0 0" id="box" cursor-listener material="color: blue"></a-box>
      </a-scene>
    </body>
</html>
