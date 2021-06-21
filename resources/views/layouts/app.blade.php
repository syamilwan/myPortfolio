<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>myPortfolio</title>
        <script src="https://unpkg.com/vue@3.0.2"></script>
        
        <!-- Bootstrap core CSS & JS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/8c647be576.js" crossorigin="anonymous"></script>
        <!-- Bootstrap coliff/dark-mode-switch template-->
        <link href="{{ URL::asset('css/dark-mode.css')}}" rel="stylesheet">
        <!-- PDFObject -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js"></script>
        <!-- Custom styles for sidebar template -->
        <link href="{{ URL::asset('css/sidebar.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <style>
            html {
                font-size: 125% !important;
            }
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            /* The sidebar menu */
            .sidebar {
                height: 100%; /* 100% Full-height */
                width: 270px; /* 0 width - change this with JavaScript */
                position: static; /* Stay in place */
                white-space: nowrap;
                overflow-x: auto; /* Disable horizontal scroll */
                transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
            }

            /* The button used to open the sidebar */
            .openbtn {
                font-size: 20px;
                z-index: 1; /* Stay on top */
            }

            /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
            #main {
                transition: margin-left .5s; /* If you want a transition effect */
                padding: 20px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidebar {padding-top: 15px;}
                .sidebar a {font-size: 18px;}
            }
        </style>

    </head>
    <body style="overflow: auto;">
        <div class="row vh-100">
            <div class="col-xl-2 bg-light border border-2 m-1 p-4 sidebar" id="mySidebar">
                @include('layouts.sidebar')
            </div>
            <div class="col-xl-1 m-1 p-1">
                <button class="btn btn-light border" onclick="openNav()" type="button"> <i class="fas fa-bars"></i> </button>
            </div>
            <div class="col-xl-9 align-self-center mx-auto" id="main">
                <div class="container bg-light border border-2 py-3">
                    @yield('content')
                </div>
            </div>
        </div>
        <script>
            /* Set the width of the sidebar to 270px and the left margin of the page content to 270px */
            function openNav() {
                if(document.getElementById("mySidebar").style.width == "0px"){
                    document.getElementById("mySidebar").style.width = "270px";
                    document.getElementById("mySidebar").style.opacity = "1";
                    document.getElementById("main").style.marginLeft = "270px";
                }
                else{
                    document.getElementById("mySidebar").style.width = "0px";
                    document.getElementById("mySidebar").style.opacity = "0";
                    document.getElementById("main").style.marginLeft = "0px";
                }
            }
        </script>
    </body>
</html>
