<!-- resources/views/staff/show.blade.php -->
@extends('layout.backendMaster')

@section('contentBackend')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Staff Details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('staff.index') }}">Staffs</a></li>
                        <li class="breadcrumb-item active">{{ $staff->name }}</li>
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
                        <h3 class="card-title">{{ $staff->name }}'s Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Name:</strong> {{ $staff->name }}<br>
                                <strong>Post:</strong> {{ $staff->post }}<br>
                                <strong>Email:</strong> {{ $staff->email }}<br>
                                <strong>Phone:</strong> {{ $staff->phone }}<br>
                                <strong>Home Phone:</strong> {{ $staff->phone_home }}<br>
                                <strong>Office Phone:</strong> {{ $staff->phone_office }}<br>
                            </div>
                            <div class="col-md-6">
                                @if($staff->image)
                                    <img src="{{ asset('uploads/staffs/' . $staff->image) }}" alt="Staff Image" width="200">
                                @else
                                    <p>No Image Available</p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('staff.index') }}" class="btn btn-secondary mt-3">Back to Staffs</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
@endsection
