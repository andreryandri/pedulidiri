<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('') }}dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{ asset('') }}dist/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="{{ asset('') }}dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="{{ asset('') }}dist/assets/css/app.css">
    <link rel="icon" type="image/png" href="../assets/img/logosmk.png">
</head>

<body style="background-image: url('../assets/img/pattern8.png')">
    <div id="app">
        <div id="sidebar" class='active'>
            @include('layouts.sidebar')
        </div>
        <div id="main">
            @include('layouts.navbar')

            <div class="main-content container-fluid" style="background-image: url('../assets/img/pattern8.png')">
                @yield('content')

            </div>

            <footer style="background-image: url('../assets/img/pattern8.png')">
                <hr>
            </footer>
        </div>
    </div>
    <script src="{{ asset('') }}dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{ asset('') }}dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}dist/assets/js/app.js"></script>

    <script src="{{ asset('') }}dist/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ asset('') }}dist/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('') }}dist/assets/js/pages/dashboard.js"></script>

    <script src="{{ asset('') }}dist/assets/js/main.js"></script>
</body>

</html>