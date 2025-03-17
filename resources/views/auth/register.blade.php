@extends('layouts.app')

@section('content')

<div class="login-container">
    <div class="login-card">
        <div class="login-image"></div>
        <div class="login-form">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <i class="fas fa-user icon"></i>
                    <input type="text" class="form-control" name="name" required placeholder="Full Name" id="name">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" class="form-control" name="email" required placeholder="Email Address" id="email">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" class="form-control" name="password" required placeholder="Password" id="password">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" id="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <div class="text-center">
                <a href="{{ route('login') }}">Already have an account? Sign In</a>
            </div>
        </div>
    </div>
</div>
@endsection