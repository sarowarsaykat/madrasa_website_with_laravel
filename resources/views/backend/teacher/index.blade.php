@extends('layout.backendMaster')

@section('contentBackend')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Teachers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Teachers</h3>
                        <a href="{{ route('teacher.create') }}" class="btn btn-primary float-right">Add New Teacher</a>
                    </div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Post</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Home Phone</th>
                                    <th>Office Phone</th>
                                    <th>Image</th>
                                    <th style="width: 200px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->post }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>{{ $teacher->phone_home }}</td>
                                    <td>{{ $teacher->phone_office }}</td>
                                    <td>
                                        @if($teacher->image)
                                            <img src="{{ asset('uploads/teachers/' . $teacher->image) }}" alt="Teacher Image" width="50">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('teacher.show', $teacher->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
@endsection
