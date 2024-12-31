@extends('layout.backendMaster')

@section('contentBackend')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Teacher</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item active">Teacher</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Teacher</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="teacherForm" action="{{ route('teacher.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
                                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="post">Post</label>
                                <input type="text" name="post" class="form-control" id="post" placeholder="Enter post" value="{{ old('post') }}">
                                @error('post')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_home">Home Phone</label>
                                <input type="text" name="phone_home" class="form-control" id="phone_home" placeholder="Enter home phone" value="{{ old('phone_home') }}">
                                @error('phone_home')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_office">Office Phone</label>
                                <input type="text" name="phone_office" class="form-control" id="phone_office" placeholder="Enter office phone" value="{{ old('phone_office') }}">
                                @error('phone_office')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                                @error('image')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
@endsection
