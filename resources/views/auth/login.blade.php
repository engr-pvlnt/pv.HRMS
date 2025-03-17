@extends('layouts.app')

@section('content')
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
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-image"></div>
        <div class="login-form">
            <h2>Sign In</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <i class="fas fa-user icon"></i>
                    <input type="text" class="form-control" name="email" required placeholder="Email Address" id="email">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" class="form-control" name="password" required placeholder="Password" id="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember" style="color: #e8e4f7; font-size: 14px;">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <div class="text-center">
                <a href="{{ route('password.request') }}">Forgot Password</a> |
                <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
    </div>
</div>
@endsection