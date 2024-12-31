@extends('layout/master')
@section('content')
    <div class="col-md-9">
        <!-- Start main-content -->
        <div class="row">
            <div class="col-md-12">
                <div class="body_head">
                    যোগাযোগ
                </div>
                <div class="body_content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                    <!-- Contact Form -->
                                    <form id="contact_form" name="contact_form" class=""
                                        action="https://bdsfdm.edu.bd/contactSave" method="POST">
                                        <input type="hidden" name="_token"
                                            value="FI0QdyQU7XNbJGXH9RoalXQ6Udv0LJrcZkbhYF2e">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="name">নাম <small class="text-danger">*</small></label>
                                                    <input id="name" name="name" class="form-control" type="text"
                                                        placeholder="আপনার নাম" value="" required="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">ইমেইল <small class="text-danger">*</small></label>
                                                    <input id="email" name="email" class="form-control required email"
                                                        type="email" placeholder="আপনার ইমেইল" value=""
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="mobile">মোবাইল <small
                                                            class="text-danger">*</small></label>
                                                    <input id="mobile" name="mobile" class="form-control" type="text"
                                                        value="" placeholder="আপনার মোবাইল নং">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="subject">সাবজেক্ট <small
                                                            class="text-danger">*</small></label>
                                                    <input id="subject" name="subject" class="form-control required"
                                                        type="text" value="" placeholder="সাবজেক্ট">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="message">বার্তা <small
                                                            class="text-danger">*</small></label>
                                                    <textarea id="message" name="message" class="form-control required" rows="5" value=""
                                                        placeholder="আপনার বার্তা"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <div class="captcha">
                                                    <span><img src="captcha/mathe8fe.png?F4sBi90o"></span>
                                                    <button type="button" class="btn btn-danger" class="refresh-captcha"
                                                        id="refresh-captcha">
                                                        &#x21bb;
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input id="captcha" type="text" class="form-control"
                                                    placeholder="ক্যাপচা প্রবেশ করান" name="captcha" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark btn-success btn-flat mr-5"
                                                data-loading-text="Please wait...">আপনার বার্তা পাঠান</button>
                                            <button type="reset" class="btn btn-default btn-flat btn-danger">রিসেট
                                                করুন</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="line-bottom mt-0">আমাদের সাথে যোগাযোগ করুন</h3>
                                    <address>
                                        <h5>বালিয়াডাঙ্গা দারুস সুন্নাত ফাজিল মাদ্রাসা</h5>
                                        <h5>গ্রাম এবং পোষ্ট: বালিয়াডাঙ্গা</h5>
                                        <h5>থানা এবং জেলা: চাঁপাইনবাবগঞ্জ</h5>
                                        <h5>ইমেইল: baliadangamad@gmail.com</h5> <br>
                                        <hr>
                                        <h5><u>অধ্যক্ষের সাথে যোগাযোগের তথ্যঃ</u> </h5>
                                        <h5>মোহাম্মদ মনিরুল হক</h5>
                                        <h5>০১৭১০৯৬৮৮৯৭</h5>
                                        <hr>
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <iframe class="iframe"
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14507.688998758726!2d88.2740119!3d24.6263645!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1398da71a2396b7c!2sBaliadanga%20Darus%20Sunnat%20Fazil%20Madrasah!5e0!3m2!1sen!2sbd!4v1587816988085!5m2!1sen!2sbd"
                                        frameborder="0" width="100%" height="450" style="border:0;"
                                        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
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
