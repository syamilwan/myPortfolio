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
        <!-- JQuery -->
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
            .custom_center_all {
                display: grid;
                justify-content: center;
                align-content: center;
            }
            .custom_end_all {
                display: grid;
                justify-content: end;
                align-content: end;
            }
            .sidebar {
                height: 100%; /* 100% Full-height */
                width: 270px; /* 0 width - change this with JavaScript */
                position: static; /* Stay in place */
                white-space: nowrap;
                overflow: hidden; /* Disable horizontal scroll */
                transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
            }
            .active{
                background-color: #A9CCE3 !important;
                font-weight: bold !important;
            }
            .inline_display{ display: inline-block; }
            .pointer{ cursor: pointer; }

            #main {
                transition: margin-left .5s; /* If you want a transition effect */
                padding: 20px;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>

    </head>
    <body style="overflow: hidden;">
        <div class="row vh-100">
            <div id="mainSidebar" class="col-xl-2 bg-light border border-2 m-1 p-4 sidebar">
                <div id="sidebarContent" class="bg-light m-1 p-1" style="height: 100%;"> @include('layouts.sidebar') </div>
            </div>
            <div class="col-xl-1 mt-1 g-0" style="width: 0px">
                <button class="btn btn-light border border-2" id="sidebarButton" onclick="openNav()" type="button"> <i class="fas fa-bars"></i> </button>
            </div>
            <div class="col-xl-9 align-self-center mx-auto" id="main">
                <div class="container bg-light border border-2 py-3"> @yield('content') </div>
            </div>
        </div>
        <script>
            function openNav() {
                if(document.getElementById("mainSidebar").style.width == "0px"){
                    document.getElementById("sidebarContent").style.display = "block";
                    document.getElementById("sidebarButton").style.opacity = "1";
                    setTimeout(showSidebar, 250);
                }
                else{
                    document.getElementById("mainSidebar").style.width = "0px";
                    document.getElementById("mainSidebar").style.opacity = "0";
                    document.getElementById("main").style.marginLeft = "0px";
                    setTimeout(hideSidebar, 250);
                }
            }
            function hideSidebar(){
                document.getElementById("sidebarContent").style.display = "none";
            }
            function showSidebar(){
                document.getElementById("mainSidebar").style.width = "270px";
                document.getElementById("mainSidebar").style.opacity = "1";
                document.getElementById("main").style.marginLeft = "270px";
            }
        </script>
    </body>
</html>
