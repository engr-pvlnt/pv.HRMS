<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Auth::routes(); // This will define the default auth routes

//Route::get('/', function () {
//    return view('welcome');
//});

// Change the root URL to redirect to the login page
Route::get('/', function () {
    return redirect()->route('login'); // Redirect to the login route
});

// Protected routes for employees
Route::middleware(['auth'])->group(function () {
    Route::resource('employees', EmployeeController::class);
});

