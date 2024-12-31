<!-- resources/views/teacher/show.blade.php -->
@extends('layout.backendMaster')

@section('contentBackend')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Teacher Details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.index') }}">Teachers</a></li>
                        <li class="breadcrumb-item active">{{ $teacher->name }}</li>
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
                        <h3 class="card-title">{{ $teacher->name }}'s Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Name:</strong> {{ $teacher->name }}<br>
                                <strong>Post:</strong> {{ $teacher->post }}<br>
                                <strong>Email:</strong> {{ $teacher->email }}<br>
                                <strong>Phone:</strong> {{ $teacher->phone }}<br>
                                <strong>Home Phone:</strong> {{ $teacher->phone_home }}<br>
                                <strong>Office Phone:</strong> {{ $teacher->phone_office }}<br>
                            </div>
                            <div class="col-md-6">
                                @if($teacher->image)
                                    <img src="{{ asset('uploads/teachers/' . $teacher->image) }}" alt="Teacher Image" width="200">
                                @else
                                    <p>No Image Available</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('teacher.index') }}" class="btn btn-secondary mt-3">Back to Teachers</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
@endsection
