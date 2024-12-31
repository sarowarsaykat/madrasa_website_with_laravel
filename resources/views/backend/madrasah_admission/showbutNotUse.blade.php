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
                <!-- Profile Header -->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        @if($admission->image)
                            <img src="{{ asset('uploads/admissions/' . $admission->image) }}" class="rounded-circle mb-3" alt="Profile Image" width="150">
                        @else
                            <div class="bg-light p-5 rounded-circle text-muted mb-3">No Image</div>
                        @endif
                        <h3>{{ $admission->name }}</h3>
                        <p>{{ $admission->email }}</p>
                        <p><strong>Mobile:</strong> {{ $admission->mobile }}</p>
                    </div>
                </div>

                <!-- Accordion Details -->
                <div id="admissionDetailsAccordion">
                    <!-- Personal Details -->
                    <div class="card">
                        <div class="card-header" id="personalDetailsHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#personalDetails" aria-expanded="true" aria-controls="personalDetails">
                                    Personal Details
                                </button>
                            </h5>
                        </div>
                        <div id="personalDetails" class="collapse show" aria-labelledby="personalDetailsHeading" data-parent="#admissionDetailsAccordion">
                            <div class="card-body">
                                <p><strong>Name:</strong> {{ $admission->name }}</p>
                                <p><strong>Name (Bengali):</strong> {{ $admission->name_bn }}</p>
                                <p><strong>Name (Arabic):</strong> {{ $admission->name_ar ?? 'N/A' }}</p>
                                <p><strong>Date of Birth:</strong> {{ $admission->date_of_birth }}</p>
                                <p><strong>Gender:</strong> {{ $admission->gender }}</p>
                                <p><strong>Blood Group:</strong> {{ $admission->blood_group }}</p>
                                <p><strong>Nationality:</strong> {{ $admission->nationality }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Address Details -->
                    <div class="card">
                        <div class="card-header" id="addressDetailsHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#addressDetails" aria-expanded="false" aria-controls="addressDetails">
                                    Address Details
                                </button>
                            </h5>
                        </div>
                        <div id="addressDetails" class="collapse" aria-labelledby="addressDetailsHeading" data-parent="#admissionDetailsAccordion">
                            <div class="card-body">
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
                        </div>
                    </div>

                    <!-- Educational Details -->
                    <div class="card">
                        <div class="card-header" id="educationalDetailsHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#educationalDetails" aria-expanded="false" aria-controls="educationalDetails">
                                    Educational Details
                                </button>
                            </h5>
                        </div>
                        <div id="educationalDetails" class="collapse" aria-labelledby="educationalDetailsHeading" data-parent="#admissionDetailsAccordion">
                            <div class="card-body">
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
                    </div>

                    <!-- Guardian Details -->
                    <div class="card">
                        <div class="card-header" id="guardianDetailsHeading">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#guardianDetails" aria-expanded="false" aria-controls="guardianDetails">
                                    Guardian Details
                                </button>
                            </h5>
                        </div>
                        <div id="guardianDetails" class="collapse" aria-labelledby="guardianDetailsHeading" data-parent="#admissionDetailsAccordion">
                            <div class="card-body">
                                <p><strong>Father's Name:</strong> {{ $admission->father_name }}</p>
                                <p><strong>Mother's Name:</strong> {{ $admission->mother_name }}</p>
                                <p><strong>Guardian Name:</strong> {{ $admission->guardian_name }}</p>
                                <p><strong>Guardian Mobile:</strong> {{ $admission->guardian_mobile }}</p>
                                <p><strong>Guardian Occupation:</strong> {{ $admission->guardian_occupation }}</p>
                                <p><strong>Annual Earning:</strong> {{ $admission->guardian_annual_earning }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{ route('admission.index') }}" class="btn btn-secondary mt-4">Back to Admissions</a>
            </div>
        </div>
    </div>
</div>
@endsection
