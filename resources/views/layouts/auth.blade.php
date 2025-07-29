<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Dreams POS is a powerful Bootstrap based Inventory Management Admin Template designed for businesses, offering seamless invoicing, project tracking, and estimates.">
    <meta name="keywords"
        content="inventory management, admin dashboard, bootstrap template, invoicing, estimates, business management, responsive admin, POS system">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">
    <title>{{ setting('siteName') }} | {{ setting('siteDesc') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user/assets/img/favicon.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('user/assets/img/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/tabler-icons/tabler-icons.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">

        @include('partials.toast')



</head>

<body class="account-page bg-white">

    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    @yield('content')

    <!-- jQuery -->
    <script src="{{ asset('user/assets/js/jquery-3.7.1.min.js') }}"
        type="1be5fa836e491b332016107f-text/javascript"></script>

    <!-- Feather Icon JS -->
    <script src="{{ asset('user/assets/js/feather.min.js') }}" type="1be5fa836e491b332016107f-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"
        type="1be5fa836e491b332016107f-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{ asset('user/assets/js/script.js') }}" type="1be5fa836e491b332016107f-text/javascript"></script>

    <!-- Global Loader JS -->
    <script src="{{ asset('user/assets/rocket-loader.min.js') }}" data-cf-settings="1be5fa836e491b332016107f-|49"
        defer></script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"957d41980876a637","version":"2025.6.2","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>


</body>

</html>
<!-- End of file: resources/views/layouts/auth.blade.php -->
<!-- This file is used to define the layout for authentication pages like login, register, etc. It includes the necessary CSS and JS files, sets up the HTML structure, and yields the content section
