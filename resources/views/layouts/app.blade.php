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
    body {
            background: linear-gradient(to right, #312d3a, #3d3853);
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            padding: 15px; /* 5px padding on all sides */
        }

        .login-card {
            display: flex;
            flex-direction: column; /* Stack the image and form vertically */
            width: 150%; /* Wider box */
            max-width: none; /* Remove maximum width limit */
            background: rgba(232, 228, 247, 0.1);
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            position: relative; /* Set position to relative for centered transform */
            left: -25%; /* Adjust position to keep it centered */
        }

        .login-image {
            height: 250px; /* Height for the image section */
            background: url('/assets/img/login.png') center/cover no-repeat;
        }

        .login-form {
            padding: 30px; /* Increase padding for better spacing */
            background-color: #3d3853;
            display: flex;
            flex-direction: column;
        }

        .login-form h2 {
            color: #e8e4f7;
            text-align: center; 
            margin-bottom: 20px;
            font-size: 22px; /* Smaller font size for the heading */
        }

        .form-group {
            position: relative;
            margin-bottom: 15px; /* Reduced margin */
        }

        .form-control {
            width: 100%;
            padding: 10px 15px 10px 40px; /* Maintain spacing */
            border: none;
            border-radius: 5px;
            background: rgba(232, 228, 247, 0.6);
            font-size: 14px; /* Smaller font size */
        }

        .form-control:focus {
            outline: none;
            background: rgba(232, 228, 247, 0.8);
        }

        .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #e8e4f7;
            font-size: 1em; /* Keep a consistent icon size */
            pointer-events: none; /* Prevent mouse events */
        }

        .btn-primary {
            background-color: #e8e4f7;
            color: #312d3a;
            border: none;
            width: 100%;
            padding: 10px; /* Maintain spacing */
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 14px; /* Smaller font size */
            margin-top: 10px; /* Space above button */
        }

        .btn-primary:hover {
            background-color: #d4c9e3;
        }

        .text-center {
            margin-top: 10px;
            color: #e8e4f7;
            text-align: center; /* Center align text */
            font-size: 14px; /* Smaller font size */
        }

        .text-center a {
            color: #e8e4f7;
        }        
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