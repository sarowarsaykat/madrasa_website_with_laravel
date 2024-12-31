@extends('layout.backendMaster')

@section('contentBackend')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Teacher</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('teacher.index') }}">Teachers</a></li>
                        <li class="breadcrumb-item active">Edit Teacher</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Teacher</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- We use PUT for update -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $teacher->name) }}">
                                @error('name')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="post">Post</label>
                                <input type="text" name="post" class="form-control" id="post" value="{{ old('post', $teacher->post) }}">
                                @error('post')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $teacher->email) }}">
                                @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone', $teacher->phone) }}">
                                @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_home">Home Phone</label>
                                <input type="text" name="phone_home" class="form-control" id="phone_home" value="{{ old('phone_home', $teacher->phone_home) }}">
                                @error('phone_home')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="phone_office">Office Phone</label>
                                <input type="text" name="phone_office" class="form-control" id="phone_office" value="{{ old('phone_office', $teacher->phone_office) }}">
                                @error('phone_office')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                                @error('image')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>

                            @if ($teacher->image)
                                <div class="form-group">
                                    <label>Current Image:</label>
                                    <img src="{{ asset('uploads/teachers/' . $teacher->image) }}" alt="Teacher Image" width="100">
                                </div>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Teacher</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-wrapper -->
@endsection

