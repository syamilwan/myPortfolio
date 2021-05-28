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
        
        <!-- Bootstrap coliff/dark-mode-switch template-->
        <link href="{{ URL::asset('css/dark-mode.css')}}" rel="stylesheet">

        <!-- PDFObject -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js"></script>
        <!-- Too check PDFObject support on the browser, uncomment code below and check the console log -->
        <!-- <script> if(PDFObject.supportsPDFs){ console.log("Yay, this browser supports inline PDFs."); } else { console.log("Boo, inline PDFs are not supported by this browser"); } </script> -->
        
        <!-- Favicons 
        <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">-->

        <!-- Custom styles for sidebar template -->
        <link href="{{ URL::asset('css/sidebar.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

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
        </style>

    </head>
    <body style="overflow: scroll;">
        <div class="container-fluid mh-100 gx-0" style="width: 100%; height: auto;">
            <div class="row">
                <div class="col-xl-2 bg-light border border-2">
                    @include('layouts.sidebar')
                </div>
                <div class="col-xl-10 align-self-center mx-auto" style="width: auto; height: auto;">
                    <div class="container bg-light border border-2 py-3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
