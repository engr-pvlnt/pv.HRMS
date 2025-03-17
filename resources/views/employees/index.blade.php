@extends('layouts.app')

@section('title', 'Employee List')

@section('content')
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>
                        <!-- Add edit and delete buttons -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection