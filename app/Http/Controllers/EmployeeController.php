<?php

namespace App\Http\Controllers;

use App\Models\Employee; // Import the Employee model
use App\Models\Department; // Import the Department model (if used)
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    public function store(Request $request)
    {
        // Your validation and creation logic here
        $employee = Employee::create($request->all());
        
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    // Add other methods (show, edit, update, destroy) as needed
}