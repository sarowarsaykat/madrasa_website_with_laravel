@extends('layout.backendMaster')

@section('contentBackend')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admission Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/backend') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admission.index') }}">Admissions</a></li>
                        <li class="breadcrumb-item active">{{ $admission->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $admission->name }}'s Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <h4>Personal Information</h4>
                                <p><strong>Name:</strong> {{ $admission->name }}</p>
                                <p><strong>Name (Bengali):</strong> {{ $admission->name_bn }}</p>
                                <p><strong>Name (Arabic):</strong> {{ $admission->name_ar ?? 'N/A' }}</p>
                                <p><strong>Mobile:</strong> {{ $admission->mobile }}</p>
                                <p><strong>Email:</strong> {{ $admission->email }}</p>
                                <p><strong>Date of Birth:</strong> {{ $admission->date_of_birth }}</p>
                                <p><strong>Gender:</strong> {{ $admission->gender }}</p>
                                <p><strong>Blood Group:</strong> {{ $admission->blood_group }}</p>
                                <p><strong>Nationality:</strong> {{ $admission->nationality }}</p>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <h4>Family Information</h4>
                                <p><strong>Father's Name:</strong> {{ $admission->father_name }}</p>
                                <p><strong>Father's Name (Bengali):</strong> {{ $admission->father_name_bn }}</p>
                                <p><strong>Mother's Name:</strong> {{ $admission->mother_name }}</p>
                                <p><strong>Guardian Name:</strong> {{ $admission->guardian_name }}</p>
                                <p><strong>Guardian Mobile:</strong> {{ $admission->guardian_mobile }}</p>
                                <p><strong>Guardian Occupation:</strong> {{ $admission->guardian_occupation }}</p>
                                <p><strong>Guardian Annual Earning:</strong> {{ $admission->guardian_annual_earning }}</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <!-- Address Information -->
                            <div class="col-md-6">
                                <h4>Address Information</h4>
                                <p><strong>Present Address:</strong></p>
                                <ul>
                                    <li>Division: {{ $admission->present_address_division }}</li>
                                    <li>District: {{ $admission->present_address_district }}</li>
                                    <li>Upazila: {{ $admission->present_address_upazila }}</li>
                                    <li>Address: {{ $admission->present_address }}</li>
                                </ul>
                                <p><strong>Permanent Address:</strong></p>
                                <ul>
                                    <li>Division: {{ $admission->permanent_address_division }}</li>
                                    <li>District: {{ $admission->permanent_address_district }}</li>
                                    <li>Upazila: {{ $admission->permanent_address_upazila }}</li>
                                    <li>Address: {{ $admission->permanent_address }}</li>
                                </ul>
                            </div>

                            <!-- Educational Information -->
                            <div class="col-md-6">
                                <h4>Educational Information</h4>
                                <p><strong>Education Level:</strong> {{ $admission->education_level }}</p>
                                <p><strong>Madrasha Name:</strong> {{ $admission->name_of_madrasha }}</p>
                                <p><strong>Exam Centre Name:</strong> {{ $admission->name_of_exam_centre }}</p>
                                <p><strong>Roll Number:</strong> {{ $admission->roll_no }}</p>
                                <p><strong>Registration Number:</strong> {{ $admission->reg_no }}</p>
                                <p><strong>Passing Year:</strong> {{ $admission->passing_year }}</p>
                                <p><strong>Session:</strong> {{ $admission->session }}</p>
                                <p><strong>Result:</strong> {{ $admission->result }}</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4>Additional Details</h4>
                                <p><strong>Class Name:</strong> {{ $admission->class_name }}</p>
                                <p><strong>Group Name:</strong> {{ $admission->group_name }}</p>
                                <p> @if ($admission->is_approved === 'Active')
                                    <span class="badge bg-success">Approved</span>
                                @elseif ($admission->is_approved === 'Rejected')
                                    <span class="badge bg-danger">Rejected</span>
                                @else
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @endif</p>
                                <p><strong>Image:</strong></p>
                                @if($admission->image)
                                    <img src="{{ asset('uploads/admissions/' . $admission->image) }}" alt="Admission Image" width="200">
                                @else
                                    No Image Available
                                @endif
                            </div>
                        </div>

                        <a href="{{ route('admission.index') }}" class="btn btn-secondary mt-3">Back to Admissions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
