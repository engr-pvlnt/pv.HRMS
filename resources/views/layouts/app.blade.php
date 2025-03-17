<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'AdminLTE') }}</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .login-page {
            background: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body class="login-page">
    @yield('content')

    <!-- AdminLTE JS -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
</body>
</html>