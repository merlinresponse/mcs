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
          <script src="https://aframe.io/releases/0.5.0/aframe.min.js"></script>
    </head>
    <body>
      <a-scene>
        <a-assets>
      <img id="house" src="../img/360_test.jpg">
        </a-assets>

        <a-sky id="house-360" radius="100" src="#house"></a-sky>

        <a-entity class="link"></a-entity>

        <a-camera>
          <a-cursor id="cursor">
            <a-animation begin="click" easing="ease-in" attribute="scale"
                     fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="150"></a-animation>
            <a-animation begin="cursor-fusing" easing="ease-in" attribute="scale"
                     from="1 1 1" to="0.1 0.1 0.1" dur="1500"></a-animation>
          </a-cursor>
        </a-camera>
      </a-scene>
    </body>
</html>
