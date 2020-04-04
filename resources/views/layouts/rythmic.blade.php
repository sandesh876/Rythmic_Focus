<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>RythMic Focus</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--styles-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/hover.css">

    <script src="https://kit.fontawesome.com/decefd8a33.js" crossorigin="anonymous"></script>
</head>

<body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            <div class="collapse navbar-collapse" id="navbarMenu">
            <a href="#" class="navbar-brand">Ryth<span>Mic</span> Focus</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
           
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link  hvr-underline-reveal" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  hvr-underline-reveal" href="#">FAQS</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  hvr-underline-reveal" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    
        @yield('content')

        <footer>
            <div class="info">
            <p>© RythMic Focus. All rights reserved. Developed by <a href="www.megaitinc.com"><img
                src="img/megait.png"></a></p>
                </div>
        </footer>
    
        
    </body>
    <script src="js/jquery-2.1.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </html>