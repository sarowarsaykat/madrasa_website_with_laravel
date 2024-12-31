@extends('layout/master')
@section('content')
    <div class="col-md-9">
        <style>
            label {
                font-size: 14px;
            }
        </style>
        <!-- Start main-content -->
        <div class="row">
            <div class="col-md-12">
                <div class="body_head">
                    ছাত্র-ছাত্রী ভর্তির অনলাইন আবেদন ফরম
                </div>
                <div class="body_content">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('admission.store')}}" name="reg-form" class="register-form" method="POST"
                                enctype="multipart/form-data" data-toggle="validator">
                                @csrf
                                <div class="icon-box mb-0 p-0">
                                    <h4 class="text-theme-colored text-uppercase m-0">আপনার তথ্য পূরণ করুন</h4>
                                </div>
                                <hr>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">ছাত্র/ছাত্রীর তথ্য</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="name">নাম ইংরেজীতে <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    value="" required>
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name_bn">নাম বাংলায় (ইউনিকোড ব্যবহার করুন)<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="name_bn" name="name_bn" class="form-control"
                                                    value="" required>
                                                @error('name_bn')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name_ar">নাম আরবীতে (ইউনিকোড ব্যবহার করুন)</label>
                                                <input type="text" id="name_ar" name="name_ar" class="form-control"
                                                    value="">
                                                @error('name_ar')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name">ছাত্র/ছাত্রীর মোবাইল নং <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="mobile" name="mobile" pattern="01[0-9]{9}$"
                                                    class="form-control" value="" required>
                                                @error('mobile')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name_ar">ছাত্র/ছাত্রীর ইমেইল</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    value="" required>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="date_of_birth">জন্ম তারিখ <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" id="date_of_birth" name="date_of_birth"
                                                    class="form-control" value="" required>
                                                @error('date_of_birth')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="gender">লিঙ্গ <span class="text-danger">*</span></label>
                                                <select class="form-control" name="gender" required>
                                                    <option value=''>Select</option>
                                                    <option value='Male'>Male</option>
                                                    <option value='Female'>Female</option>
                                                    <option value='Other'>Other</option>
                                                </select>
                                                @error('gender')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="name_bn">রক্তের গ্রুপ </label>
                                                <select class="form-control" name="blood_group" id="blood_group">
                                                    <option value=''>Select</option>
                                                    <option value='A+'>A+</option>
                                                    <option value='A-'>A-</option>
                                                    <option value='B+'>B+</option>
                                                    <option value='B-'>B-</option>
                                                    <option value='O+'>O+</option>
                                                    <option value='O-'>O-</option>
                                                    <option value='AB+'>AB+</option>
                                                    <option value='AB-'>AB-</option>
                                                </select>
                                                @error('blood_group')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="nationality">জাতীয়তা <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="nationality" name="nationality"
                                                    class="form-control" value="" required>
                                                @error('nationality')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="nid_no">জাতীয় পরিচয় পত্র নং</label>
                                                <input type="number" id="nid_no" name="nid_no" class="form-control"
                                                    value="">
                                                @error('nid_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="birth_reg_no">জন্ম নিবন্ধন নং <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="birth_reg_no" name="birth_reg_no"
                                                    class="form-control" value="" required>
                                                @error('birth_reg_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">পিতার তথ্য</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="father_name">নাম ইংরেজীতে <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="father_name" name="father_name"
                                                    class="form-control" value="" required>
                                                @error('father_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="father_name_bn">নাম বাংলায় (ইউনিকোড ব্যবহার করুন)<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="father_name_bn" name="father_name_bn"
                                                    class="form-control" value="" required>
                                                @error('father_name_bn')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="father_name_ar">নাম আরবীতে (ইউনিকোড ব্যবহার করুন)</label>
                                                <input type="text" id="father_name_ar" name="father_name_ar"
                                                    class="form-control" value="">
                                                @error('father_name_ar')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">মাতার তথ্য</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="mother_name">নাম ইংরেজীতে <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="mother_name" name="mother_name"
                                                    class="form-control" value="" required>
                                                @error('mother_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="mother_name_bn">নাম বাংলায় (ইউনিকোড ব্যবহার করুন)<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="mother_name_bn" name="mother_name_bn"
                                                    class="form-control" value="" required>
                                                @error('mother_name_bn')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="mother_name_ar">নাম আরবীতে (ইউনিকোড ব্যবহার করুন)</label>
                                                <input type="text" id="mother_name_ar" name="mother_name_ar"
                                                    class="form-control" value="">
                                                @error('mother_name_ar')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">ঠিকানা</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section-head">বর্তমান ঠিকানা</div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="present_address_division">বিভাগ <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" name="present_address_division"
                                                    id="present_address_division" required>
                                                    <option value=''>Select</option>
                                                    <option value='Barisal'>Barisal</option>
                                                    <option value='Chittagong'>Chittagong</option>
                                                    <option value='Dhaka'>Dhaka</option>
                                                    <option value='Khulna'>Khulna</option>
                                                    <option value='Mymensingh'>Mymensingh</option>
                                                    <option value='Rajshahi'>Rajshahi</option>
                                                    <option value='Rangpur'>Rangpur</option>
                                                    <option value='Sylhet'>Sylhet</option>
                                                </select>
                                                @error('present_address_division')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="present_address_district">জেলা <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" name="present_address_district"
                                                    id="present_address_district" required>
                                                    <option value=''>Select</option>
                                                    <option value='Dinajpur'>Dinajpur</option>
                                                    <option value='Sunamganj'>Sunamganj</option>
                                                    <option value='Gopalganj'>Gopalganj</option>
                                                    <option value='Chapai Nawabganj'>Chapai Nawabganj</option>
                                                    <option value='Thakurgaon'>Thakurgaon</option>
                                                    <option value='Bogura'>Bogura</option>
                                                    <option value='Pabna'>Pabna</option>
                                                    <option value='Habiganj'>Habiganj</option>
                                                </select>
                                                @error('present_address_district')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="present_address_upazila">উপজেলা <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" name="present_address_upazila"
                                                    id="present_address_upazila" required>
                                                    <option value=''>Select</option>
                                                    <option value='Nawabgonj'>Nawabgonj</option>
                                                    <option value='Birampur'>Birampur</option>
                                                    <option value='Pirojpur Sadar'>Pirojpur Sadar</option>
                                                    <option value='Lalmohan'>Lalmohan</option>
                                                    <option value='Golapganj'>Golapganj</option>
                                                    <option value='Mohammadpur'>Mohammadpur</option>
                                                    <option value='Dhanmondi'>Dhanmondi</option>
                                                    <option value='Companiganj'>Companiganj</option>
                                                </select>
                                                @error('present_address_upazila')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="present_address">বর্তমান ঠিকানা <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="present_address"
                                                    id="present_address" value="" required>
                                                @error('present_address')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="section-head">স্থায়ী ঠিকানা<span class="text-danger">*</span>
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <input id="same_as_present_address" name="same_as_present_address"
                                                            type="checkbox" style="display:block;">
                                                        <label for="same_as_present_address">বর্তমান ঠিকানার মতই?</label>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-12" id="permanent_address" style="display: block;">
                                                <div class="row">
                                                    <!-- text input -->
                                                    <div class="form-group col-md-4">
                                                        <label for="permanent_address_division">বিভাগ <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="permanent_address_division"
                                                            id="permanent_address_division" required>
                                                            <option value=''>Select</option>
                                                            <option value='Barisal'>Barisal</option>
                                                            <option value='Chittagong'>Chittagong</option>
                                                            <option value='Dhaka'>Dhaka</option>
                                                            <option value='Khulna'>Khulna</option>
                                                            <option value='Mymensingh'>Mymensingh</option>
                                                            <option value='Rajshahi'>Rajshahi</option>
                                                            <option value='Rangpur'>Rangpur</option>
                                                            <option value='Sylhet'>Sylhet</option>
                                                        </select>
                                                        @error('permanent_address_division')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <!-- text input -->
                                                    <div class="form-group col-md-4">
                                                        <label for="permanent_address_district">জেলা <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="permanent_address_district"
                                                            id="permanent_address_district" required>
                                                            <option value=''>Select</option>
                                                            <option value='Dinajpur'>Dinajpur</option>
                                                            <option value='Sunamganj'>Sunamganj</option>
                                                            <option value='Gopalganj'>Gopalganj</option>
                                                            <option value='Chapai Nawabganj'>Chapai Nawabganj</option>
                                                            <option value='Thakurgaon'>Thakurgaon</option>
                                                            <option value='Bogura'>Bogura</option>
                                                            <option value='Pabna'>Pabna</option>
                                                            <option value='Habiganj'>Habiganj</option>
                                                        </select>
                                                        @error('permanent_address_district')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <!-- text input -->
                                                    <div class="form-group col-md-4">
                                                        <label for="permanent_address_upazila">উপজেলা <span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" name="permanent_address_upazila"
                                                            id="permanent_address_upazila" required>
                                                            <option value=''>Select</option>
                                                            <option value='Nawabgonj'>Nawabgonj</option>
                                                            <option value='Birampur'>Birampur</option>
                                                            <option value='Pirojpur Sadar'>Pirojpur Sadar</option>
                                                            <option value='Lalmohan'>Lalmohan</option>
                                                            <option value='Golapganj'>Golapganj</option>
                                                            <option value='Mohammadpur'>Mohammadpur</option>
                                                            <option value='Dhanmondi'>Dhanmondi</option>
                                                            <option value='Companiganj'>Companiganj</option>
                                                        </select>
                                                        @error('permanent_address_upazila')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <!-- textarea -->
                                                    <div class="form-group col-md-12">
                                                        <label for="permanent_address">স্থায়ী ঠিকানা</label>
                                                        <input type="text" class="form-control"
                                                            name="permanent_address" id="permanent_address"
                                                            value="">
                                                        @error('permanent_address')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">পূর্ববর্তী পরীক্ষা সমূহের তথ্য</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <table id="previous_exam" class="table table-sm order-list">
                                                <thead>
                                                    <tr>
                                                        <td width="12%">পরীক্ষা</td>
                                                        <td width="12%">মাদ্রাসার নাম</td>
                                                        <td width="12%">কেন্দ্রের নাম</td>
                                                        <td width="12%">রোল নং</td>
                                                        <td width="12%">রেজি নং</td>
                                                        <td width="12%">পাশের সাল</td>
                                                        <td width="12%">সেশন</td>
                                                        <td width="12%">ফলাফল</td>
                                                        <td width="12%"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <select class="form-control form-control-sm"
                                                                name="education_level">
                                                                <option value="">Select</option>
                                                                <option value='PSC'>PSC</option>
                                                                <option value='JDC'>JDC</option>
                                                                <option value='Dakhil'>Dakhil</option>
                                                                <option value='Alim'>Alim</option>
                                                                <option value='Fazil'>Fazil</option>
                                                            </select>
                                                            @error('education_level')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <input type="text" name="name_of_madrasha"
                                                                class="form-control form-control-sm" />
                                                            @error('name_of_madrasha')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td><input type="text" name="name_of_exam_centre"
                                                                class="form-control form-control-sm" />
                                                            @error('name_of_exam_centre')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td><input type="number" name="roll_no"
                                                                class="form-control form-control-sm" />
                                                            @error('roll_no')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td><input type="number" name="reg_no"
                                                                class="form-control form-control-sm" />
                                                            @error('reg_no')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td><input type="number" name="passing_year"
                                                                class="form-control form-control-sm" />

                                                            @error('passing_year')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td><input type="number" name="session"
                                                                class="form-control form-control-sm" />
                                                            @error('session')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                        <td><input type="number" step="any" name="result"
                                                                class="form-control form-control-sm" />
                                                            @error('result')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="5" style="text-align: left;">
                                                            <input type="button" class="btn btn-sm btn-warning"
                                                                id="addrow" value="Add Exam" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">অবিভাবকের তথ্য</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="guardian_name">অবিভাবকের নাম <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" id="guardian_name" name="guardian_name"
                                                    class="form-control" value="" required>
                                                @error('guardian_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="guardian_mobile">অবিভাবকের মোবাইল নং (নগদ/বিকাশ)<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" id="guardian_mobile" name="guardian_mobile"
                                                    pattern="01[0-9]{9}$" class="form-control" value="" required>
                                                @error('guardian_mobile')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="guardian_occupation">অবিভাবকের পেশা</label>
                                                <input type="text" id="guardian_occupation" name="guardian_occupation"
                                                    class="form-control" value="">
                                                @error('guardian_occupation')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="guardian_annual_earning">অবিভাবকের বার্ষিক আয়</label>
                                                <input type="number" id="guardian_annual_earning"
                                                    name="guardian_annual_earning" class="form-control" value="">
                                                @error('guardian_annual_earning')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">ভর্তি সংক্রান্ত তথ্য</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="class_name">শ্রেনী <span class="text-danger">*</span></label>
                                                <select class="form-control" name="class_name" required>
                                                    <option value=''>Select</option>
                                                    <option value='One'>One</option>
                                                    <option value='Two'>Two</option>
                                                    <option value='Three'>Three</option>
                                                    <option value='Four'>Four</option>
                                                    <option value='Five'>Five</option>
                                                    <option value='Six'>Six</option>
                                                    <option value='Seven'>Seven</option>
                                                    <option value='Eight'>Eight</option>
                                                    <option value='Nine'>Nine</option>
                                                    <option value='Ten'>Ten</option>
                                                    <option value='Dakhil'>Dakhil</option>
                                                    <option value='Alim'>Alim</option>
                                                    <option value='Fazil'>Fazil</option>
                                                </select>
                                                @error('class_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="group_name">গ্রুপ</label>
                                                <select class="form-control" name="group_name">
                                                    <option value=''>Select</option>
                                                    <option value='Science'>Science</option>
                                                    <option value='Arts'>Arts</option>
                                                    <option value='Commerce'>Commerce</option>
                                                </select>
                                                @error('group_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="image">ছবি<span class="text-danger">*</span></label>
                                                <input type="file" id="file" name="image" class="form-control"
                                                    required>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="captcha">
                                            <span><img src="captcha/math965a.png?yDf82Roy"></span>
                                            <button type="button" class="btn btn-danger" class="refresh-captcha"
                                                id="refresh-captcha">
                                                &#x21bb;
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input id="captcha" type="text" class="form-control"
                                            placeholder="Enter Captcha" name="captcha" required>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <button class="btn btn-success btn-lg btn-block mt-15" type="submit">তথ্য সাবমিট
                                        করুন</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end main-content -->
    </div>
@endsection
@section('sidebar')
    <div class="col-md-12">
        <div class="notice_board_head">সভাপতি</div>
        <div class="notice_board_content_box right-img-box">
            <p><img src="https://file-rajshahi.portal.gov.bd/uploads/ef8940d9-6739-452e-b6ff-d4ff0e539609/650/be0/8f9/650be08f98a50330264950.jpg"
                    style="height:200px; width:170px" /></p>

            <p>মোছাঃ তাছমিনা খাতুন</p>

            <p>উপজেলা নির্বাহী অফিসার, সদর, চাঁপাইনবাবগঞ্জ</p>
        </div>
        <div class="notice_board_head">অধ্যক্ষ</div>
        <div class="notice_board_content_box right-img-box">
            <center><img src="{{ asset('Madrasah/frontend/images/principal_photo.jpg') }}" /></p>

                <p>মোহাম্মদ মনিরুল হক</p>
            </center>
        </div>
        <div class="list-group border_right_sidebar cust_list_item">
            <a href="#" class="list-group-item active header_font_size">
                গুরুত্বপূর্ণ লিংকসমূহ
            </a>
            <a href="http://www.dpe.gov.bd/" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> প্রাথমিক
                শিক্ষা অধিদপ্তর</a>
            <a href="http://www.dshe.gov.bd/" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> মাধ্যমিক ও
                উচ্চশিক্ষা অধিদপ্তর</a>
            <a href="https://moedu.gov.bd/" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> শিক্ষা
                মন্ত্রণালয়</a>
            <a href="https://bangladesh.gov.bd/index.php" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> বাংলাদেশ তথ্য বাতায়ন</a>
            <a href="https://www.chapainawabganj.gov.bd/" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> চাঁপাইনবাবগঞ্জ জেলা</a>
            <a href="https://www.teachers.gov.bd/" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> শিক্ষক
                বাতায়ন</a>
        </div>
        <div class="notice_board_head">জরুরী হটলাইন</div>
        <div class="notice_board_content_box">
            <img src="{{ asset('Madrasah/frontend/images/National-Helpline.jpg') }}" width="100%" />
        </div>
    </div>
@endsection
