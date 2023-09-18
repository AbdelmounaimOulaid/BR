<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>BR - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="BR" name="keywords" />
    <meta content="BR" name="description" />

    <link href="{{ asset('logo.png') }}" rel="icon" />
    <style>
        .spinner-wrapper {
            position: fixed;
            z-index: 999999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #fff;
        }

        .spinner {
            position: absolute;
            top: 50%;
            /* centers the loading animation vertically one the screen */
            left: 50%;
            /* centers the loading animation horizontally one the screen */
            width: 3.75rem;
            height: 1.25rem;
            margin: -0.625rem 0 0 -1.875rem;
            /* is width and height divided by two */
            text-align: center;
        }

        .spinner>div {
            display: inline-block;
            width: 1rem;
            height: 1rem;
            border-radius: 100%;
            background-color: black;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
            }
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
                -ms-transform: scale(1.0);
                transform: scale(1.0);
            }
        }
    </style>

</head>

<body>
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <div class="flex flex-col min-h-screen">

        @include('Layouts.header')
        @yield('content')
        @include('Layouts.footer')
    </div>
    <!-- JavaScript Libraries -->
    <script>
      window.addEventListener('load', function() {
    var preloaderFadeOutTime = 500;

    function hidePreloader() {
        var preloader = document.querySelector('.spinner-wrapper');
        setTimeout(function() {
            preloader.style.display = 'none';
        }, 500); // You can adjust the delay time if needed
    }

    hidePreloader();
});

    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>

</html>