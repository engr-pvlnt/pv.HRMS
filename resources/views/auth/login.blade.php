@extends('layouts.app')

@section('content')

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