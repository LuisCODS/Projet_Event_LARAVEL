<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <!-- BOOTSRAP - CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
        <!-- MY CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- BOOTSRAP - jQuery  -  Popper  - JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
         <!-- MY SCRIPT -->
        <script src="/js/scripts.js"></script>
    </head>
<body>
    <header>
        <!-- MENU -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destaques</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Preços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Desativado</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- CONTAINER -->
    <div class="container">
        <div class="row">
            <div class="col 12">
                <!-- Page Content goes here -->
                @yield('content')        
            </div>
        </div> 
    </div>   

    <!-- FOOTER -->
    <footer>
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
         </div>
    </footer>

</body>
</html>