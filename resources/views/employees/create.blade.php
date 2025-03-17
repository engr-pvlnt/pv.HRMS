@extends('layouts.app')

@section('title', 'Add Employee')

@section('content')
<div class="container-fluid">
    <h1 class="m-0">Add New Employee</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Employee Information</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ route('employees.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Enter employee name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Enter employee email">
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" class="form-control" id="position" name="position" required placeholder="Enter employee position">
                </div>
                <div class="form-group">
                    <label for="department_id">Department:</label>
                    <select class="form-control" id="department_id" name="department_id" required>
                        <option value="">Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Employee</button>
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection