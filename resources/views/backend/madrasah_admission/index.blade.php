@extends('layout.backendMaster')

@section('contentBackend')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Admission</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                            <li class="breadcrumb-item active">Admission</li>
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
                            <h3 class="card-title">All Student</h3>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Father Name</th>
                                        <th>Mother Name</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admissions as $admission)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $admission->name }}</td>
                                            <td>{{ $admission->gender }}</td>
                                            <td>{{ $admission->mobile }}</td>
                                            <td>{{ $admission->father_name }}</td>
                                            <td>{{ $admission->mother_name }}</td>
                                            <td>
                                                @if ($admission->is_approved === 'Active')
                                                    <span class="badge bg-success">Approved</span>
                                                @elseif ($admission->is_approved === 'Rejected')
                                                    <span class="badge bg-danger">Rejected</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($admission->image)
                                                    <img src="{{ asset('uploads/admissions/' . $admission->image) }}"
                                                        alt="admission Image" width="50">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admission.show', $admission->id) }}"
                                                    class="btn btn-info btn-sm">View</a>
                                                <form action="{{ route('admission.destroy', $admission->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>

                                                <a href="{{route('accept_admission', $admission->id)}}" class="btn btn-outline-secondary btn-sm">Accept</a>
                                                
                                                <a href="{{route('reject_admission', $admission->id)}}" class="btn btn-danger btn-sm">Reject</a>

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
