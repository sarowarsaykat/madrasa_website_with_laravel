<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bdsfdm.edu.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 16:34:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বালিয়াডাঙ্গা দারুস সুন্নাত ফাজিল মাদ্রাসা</title>
    <link rel="shortcut icon" href="{{ asset('Madrasah/frontend/images/logo.png') }}" />
    <link href="{{ asset('Madrasah/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('Madrasah/frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('Madrasah/frontend/css/photoviewer.css') }}" rel="stylesheet">
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-bar">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-5">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i> bdsfdm@gmail.com
                                        &nbsp; &nbsp; &nbsp;<i class="fa fa-phone-square" aria-hidden="true"></i>
                                        ০১৭০৫৯৮১৩১৪
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://www.facebook.com/profile.php?id=100063885412215"
                                            target="_blank" style="color:white;"><i class="fa fa-facebook-official"
                                                aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="nav-link dropdown-toggle arrow-none waves-effect waves-light btn btn-colored btn-xs btn-flat btn-theme-colored"
                                            style="height:25px;padding:0px;margin:-10px 0px 0px 0px;">
                                            <div id="google_translate_element"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <img src="{{ asset('Madrasah/frontend/images/banner.jpg')}}" class="img-responsive img_marg banner-image" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-default" style="margin-bottom: 10px;">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{url('/')}}" target="_self">হোম</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false">আমাদের সম্পর্কে<span
                                                        class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{url('history_of_the_institution')}}" target="_self">প্রতিষ্ঠানের ইতিহাস</a>
                                                    </li>
                                                    <li><a href="{{url('principal_speech')}}" target="_self">অধ্যক্ষের বানী</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false">একাডেমিক<span
                                                        class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{url('academic_calendar')}}" target="_self">একাডেমিক
                                                            ক্যালেন্ডার</a></li>
                                                    <li><a href="{{url('class_routine')}}" target="_self">ক্লাশ রুটিন</a></li>
                                                    <li><a href="{{url('syllabus')}}" target="_self">সিলেবাস</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false">নোটিশ বোর্ড<span
                                                        class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{url('general_notice')}}" target="_self">সাধারণ নোটিশ</a></li>
                                                    <li><a href="{{url('stipend')}}" target="_self">উপবৃত্তি</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false">ভর্তি<span
                                                        class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{route('admission.create')}}" target="_self">মাদ্রাসা
                                                            ভর্তি</a></li>
                                                    <li><a href="http://xiclassadmission.gov.bd/" target="_blank">আলিম
                                                            ভর্তি</a></li>
                                                    <li><a href="http://e.iau.edu.bd/" target="_blank">ফাজিল ভর্তি</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false">ফলাফল<span
                                                        class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{url('madrasah_result')}}" target="_self">মাদ্রাসা ফলাফল</a></li>
                                                    <li><a href="https://eboardresults.com/v2/home"
                                                            target="_blank">দাখিল বোর্ড ফলাফল</a></li>
                                                    <li><a href="https://eboardresults.com/v2/home"
                                                            target="_blank">আলিম বোর্ড ফলাফল</a></li>
                                                    <li><a href="http://result.iau.edu.bd/" target="_blank">ফাজিল
                                                            ফলাফল</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('photo_gallery')}}" target="_self">ফটো গ্যালারি</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    role="button" aria-expanded="false">শিক্ষক ও কর্মচারীবৃন্দ<span
                                                        class="caret"></span></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{url('teacher')}}" target="_self">শিক্ষক</a></li>
                                                    <li><a href="{{url('staff')}}" target="_self">কর্মচারী</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('contact')}}" target="_self">যোগাযোগ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                
                        @yield('content')
                        <div class="col-md-3">
                            <div class="row">
                               @yield('sidebar')
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12 foot_cus">
                                    <div class="col-md-7 hidden-xs">কপিরাইট © বালিয়াডাঙ্গা দারুস সুন্নাত ফাজিল (ডিগ্রি)
                                        মাদ্রাসা ২০২৩। সমস্ত অধিকার সংরক্ষিত।</div>
                                    <div class="col-md-4">ডিজাইন এবং ডেভেলপমেন্ট: <a
                                            href="http://abdulmozid.greatsoftbd.com/" target="_blank">আব্দুল মজীদ</a>
                                    </div>
                                    <div class="col-md-1"><a href="#" style="color:white;"
                                            title="Go to Top"><span
                                                class="glyphicon glyphicon-triangle-top"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('Madrasah/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Madrasah/frontend/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('Madrasah/frontend/js/script.js') }}"></script>
    <script src="{{ asset('Madrasah/frontend/js/photoviewer.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
    </script>
</body>


<!-- Mirrored from bdsfdm.edu.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 16:35:07 GMT -->

</html>
