<!-- resources/views/notice/show.blade.php -->
@extends('layout.backendMaster')

@section('contentBackend')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Notice Details</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('notice.index') }}">Notices</a></li>
                        {{-- <li class="breadcrumb-item active">{{ $notice->description }}</li> --}}
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
                        {{-- <h3 class="card-title">{{ $notice->notice }}'s Details</h3> --}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Notice:</strong> {{ $notice->description }}<br>
                                
                            </div>
                        </div>
                        <a href="{{ route('notice.index') }}" class="btn btn-secondary mt-3">Back to notices</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
@endsection
