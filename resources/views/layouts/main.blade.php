<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Progres Projek | Admin</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('dashmin') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="{{ asset('dashmin') }}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('dashmin') }}/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('dashmin') }}/css/style.css" rel="stylesheet">

        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

        {{-- jquery --}}
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>

    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            @include('layouts.partials.sidebar')

            <!-- Content Start -->
            <div class="content h-100">

                @include('layouts.partials.navbar')

                <div class="container-fluid pt-4 px-4 ">
                    @yield('content')
                </div>

                <div class="container-fluid pt-4 px-4 ">
                    @include('layouts.partials.footer')
                </div>
            </div>
            <!-- Content End -->

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/chart/chart.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/easing/easing.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/waypoints/waypoints.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/tempusdominus/js/moment.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="{{ asset('dashmin') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('dashmin') }}/js/main.js"></script>

        {{-- bootstrap --}}

        {{-- script jquery --}}
        @yield('script')

    </body>

</html>
