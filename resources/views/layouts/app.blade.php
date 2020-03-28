<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="MAROC | XAR">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito" />

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'NTFLX') }}</title>
  </head>

<body id="page-top" >
        <div id="app"></div>
        <!-- Page Wrapper -->
        <div id="wrapper" style="min-height:100vh">

        <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                @include('inc.navbar')
                <br><br><br>
                <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->

                @include('inc.footer')

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="{{asset('js/tilt.js')}}"></script>
    {{-- <script src="{{asset('js/lazyload.js')}}"></script> --}}
    <script src="https://unpkg.com/scrollreveal"></script>

    {{--  USE THE CDN FOR THE canvasjs.min.js FILE. --}}
    <script src="{{ asset('js/canvasjs.min.js') }}" defer></script>

    <script>
        $(document).ready(function() { $('body').bootstrapMaterialDesign(); });

        ScrollReveal().reveal('.product-card' ,{delay:200 , opacity: 1 , origin:'bottom' , scale:.95});
        ScrollReveal().reveal('.product-card' ,{distance:'10px'});
        ScrollReveal().reveal('.product-image' ,{delay:600 , easing: 'ease-in' , origin:'bottom' , distance:'10px'});
        ScrollReveal().reveal('.sold-status' ,{delay:200 , easing: 'ease-in' , origin:'right' , distance:'10px'});

    </script>
  </body>
</html>
