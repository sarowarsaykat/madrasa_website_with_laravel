@extends('layout/master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 latest_news_cust">
                <div class="col-md-2 latest_news_head">সর্বশেষ নোটিশ:</div>
                <div class="col-md-10 latest_news">
                    <marquee style="padding-left:20px;" onmouseout="this.setAttribute('scrollamount', 6, 0);"
                        onmouseover="this.setAttribute('scrollamount', 0, 0);" scrolldelay="150" direction="left"
                        scrollamount="6">
                        @foreach ($notices as $notice)
                        <a style="margin-top:10px" href="{{url('general_notice')}}"
                        target="_blank"><<< {{$notice->description}}</a>
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 sli_cus">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="4" class="">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="5" class="">
                        </li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('Madrasah/storage/uploads/slider/2024-06-13_666a556bf3d46.jpg') }}"
                                alt="অধ্যক্ষ এর অফিস কক্ষ">
                            <div class="carousel-caption">
                                অধ্যক্ষ এর অফিস কক্ষ
                            </div>
                        </div>
                        <div class="item ">
                            <img src="{{ asset('Madrasah/storage/uploads/slider/2024-06-13_666a51b7efcc8.jpg') }}"
                                alt="শিক্ষক মিলনায়তন">
                            <div class="carousel-caption">
                                শিক্ষক মিলনায়তন
                            </div>
                        </div>
                        <div class="item ">
                            <img src="{{ asset('Madrasah/storage/uploads/slider/2023-09-17_6506014f1b686.jpg') }}"
                                alt="শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবষ ২০২৩ উপলক্ষ্যে আলোচনা সভা ও দোয়া মাহফিল">
                            <div class="carousel-caption">
                                শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবষ ২০২৩ উপলক্ষ্যে আলোচনা সভা ও দোয়া
                                মাহফিল
                            </div>
                        </div>
                        <div class="item ">
                            <img src="{{ asset('Madrasah/storage/uploads/slider/2023-09-17_6505fff518cce.jpg') }}"
                                alt="বঙ্গবন্ধু ও মুক্তিযোদ্ধা কর্ণারে মাদ্রাসার শিক্ষক/শিক্ষিকা বৃন্দ">
                            <div class="carousel-caption">
                                বঙ্গবন্ধু ও মুক্তিযোদ্ধা কর্ণারে মাদ্রাসার শিক্ষক/শিক্ষিকা বৃন্দ
                            </div>
                        </div>
                        <div class="item ">
                            <img src="{{ asset('Madrasah/storage/uploads/slider/2023-09-17_650600962cf9d.jpg') }}"
                                alt="ফ্রি মেডিক্যাল ক্যাম্পে বতৃক্তা প্রদান করছেন মাননীয় এমপি মহোদয় ফেরদৌসি ইসলাম">
                            <div class="carousel-caption">
                                ফ্রি মেডিক্যাল ক্যাম্পে বতৃক্তা প্রদান করছেন মাননীয় এমপি মহোদয় ফেরদৌসি ইসলাম
                            </div>
                        </div>
                        <div class="item ">
                            <img src="{{ asset('Madrasah/storage/uploads/slider/2023-09-17_6505f82231cf5.jpg') }}"
                                alt="মাদ্রাসার ছাত্র/ছাত্রীদের একাংশ">
                            <div class="carousel-caption">
                                মাদ্রাসার ছাত্র/ছাত্রীদের একাংশ
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container body_margin">
        <div class="row">
            <!--=================Start main body=======-->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="body_head">নোটিশ বোর্ড</div>
                        <div class="body_content">
                            <h5><span class="glyphicon glyphicon-share-alt"></span><a
                                    href="{{ asset('Madrasah/storage/uploads/notice/2024-09-09_66de7776e1cb8.pdf') }}"
                                    target="_blank"> আলিম ১ম বর্ষ বার্ষিক পরীক্ষার ফলাফল ২০২৪</a></h5>
                            <h5><span class="glyphicon glyphicon-share-alt"></span><a
                                    href="{{ asset('Madrasah/storage/uploads/notice/2024-09-08_66dd19cf6a9c3.pdf') }}"
                                    target="_blank"> ২০২৪ সালে ৮ম শ্রেণিতে অধ্যয়ণরত শিক্ষার্থীদের অনলাইন
                                    রেজিস্ট্রেশন (e-SIF পূরণের মাধ্যমে) বিজ্ঞপ্তি</a></h5>
                            <h5><span class="glyphicon glyphicon-share-alt"></span><a
                                    href="{{ asset('Madrasah/storage/uploads/notice/2024-08-25_66cace00e41c4.pdf') }}"
                                    target="_blank"> ২০২৪ সালে ৬ষ্ঠ শ্রেণিতে অধ্যয়ণরত শিক্ষার্থীদের অনলাইন
                                    রেজিস্ট্রেশন (e-SIF পূরণের মাধ্যমে) বিজ্ঞপ্তি</a></h5>
                            <h5><span class="glyphicon glyphicon-share-alt"></span><a
                                    href="{{ asset('Madrasah/storage/uploads/notice/2024-02-12_65c9ac5ba8fd2.pdf') }}"
                                    target="_blank"> সরকারি ও বেসরকারি (স্বতন্ত্র এবতেদায়ী, দাখিল, আলিম,
                                    ফাজিল ও কামিল) মাদ্রাসাসমূহের জন্য ২০২৪ শিক্ষাবর্ষের সংশোধিত ছুটির
                                    তালিকা ও শিক্ষাপঞ্জি সংক্রান্ত</a></h5>
                            <br />
                            <br />
                            <div class="pull-right">
                                <a href="notice/1.html" class="btn btn-sm btn-default">
                                    সকল
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="body_head">
                            শিক্ষা প্রতিষ্ঠানের ইতিহাস
                        </div>
                        <div class="body_content">
                            <p>চাঁপাই নবাবগঞ্জ জেলার সদর উপজেলাধীন ০১নং বালিয়াডাঙ্গা ইউনিয়ন পরিষদ সংলগ্ন
                                মহানন্দা নদীর তীরে বালিয়াডাঙ্গা দারুস সুন্নাত ফাজিল মাদরাসাটি অবস্থিত।
                                জনবহুল এলাকা হিসেবে পরিচিত, সেইসময়ে ১৯৫৭ ইং সালে বালিয়াডাঙ্গাঁর মানুষ ইসলামী
                                শিক্ষায় পিছিয়ে ছিল। সেই জনগষ্টি&nbsp;কে ইসলামী শিক্ষায় আলোকিত করার লক্ষে পীর
                                কেবলা মরহুম জয়নাল আবেদীন (বগুড়া) এর পরামর্শ ও উৎসাহ ডাঃ আলহাজ্ব মুনসুর
                                আহমেদ, আলহাজ্ব মোমতাজ উদ্দীন,&nbsp;&nbsp;সাহেব&nbsp;স্থানীয় গন্যমান্য
                                ব্যক্তিবর্গকে নিয়ে অত্র মাদ্রাসাটি প্রতিষ্ঠা করেন। অত্র প্রতিষ্টানে গভার্নিং
                                বডি ও শিক্ষক মন্ডলী দ্বারা পরিচালিত হইয়া আসিতেছে। অত্র ফাজিল মাদরাসাটির পাশ
                                দিয়ে মহানন্দা নদী বহিয়া গিয়াছে। প্রতিষ্টানে বিজ্ঞান ও মানবিক শাখা চালূ আছে।
                                অত্র প্রতিষ্টানে ৩০ জন শিক্ষক শিক্ষিকা, ৬ জন কর্মচারি কর্মরত আছে। অত্র
                                প্রতিষ্টানে মোট ছাত্র/ছাত্রীর সংখ্যা ৭৮০ জন।</p>

                            <p>০১/০১/১৯৫৭ সালে প্রতিষ্ঠা লাভ করে এবং ০১/০১/১৯৬৬ইং সালে প্রথম স্বীকৃতি লাভ
                                করে। আলিম শ্রেনী ০১/০৭/১৯৮২ইং এবং ০১/০৭/১৯৯৫ইং সালে ফাজিল স্বীকৃতি লাভ করে।
                                অত্র প্রতিষ্ঠানটি এম.পি.ও ভুক্তি হয় ০১/০৩/১৯৮৫ সালে।</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="service-box box">
                            <h4>আমাদের সম্পর্কে</h4>
                            <img src="{{ asset('Madrasah/storage/uploads/service_box/2023-10-27_653be66feff7c.png') }}"
                                alt="আমাদের সম্পর্কে" width="110" style="max-width:80px;">
                            <ul class="caption fade-caption" style="margin:0">
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="history.html" title="প্রতিষ্ঠানের ইতিহাস" target="_self">
                                        প্রতিষ্ঠানের ইতিহাস
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="history.html" title="কর্মকর্তাবৃন্দ" target="_self">
                                        কর্মকর্তাবৃন্দ
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="history.html" title="কর্মচারীবৃন্দ" target="_self">
                                        কর্মচারীবৃন্দ
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="history.html" title="যোগাযোগ" target="_self">
                                        যোগাযোগ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="service-box box">
                            <h4>নোটিশ</h4>
                            <img src="{{ asset('Madrasah/storage/uploads/service_box/2023-10-28_653c0a1b1d1e6.png') }}"
                                alt="নোটিশ" width="110" style="max-width:80px;">
                            <ul class="caption fade-caption" style="margin:0">
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="notice/1.html" title="সাধারণ নোটিশ" target="_self">
                                        সাধারণ নোটিশ
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="notice/2.html" title="উপবৃত্তি" target="_self">
                                        উপবৃত্তি
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="academic/2.html" title="ক্লাশ রুটিন" target="_self">
                                        ক্লাশ রুটিন
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="academic/3.html" title="সিলেবাস" target="_self">
                                        সিলেবাস
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="service-box box">
                            <h4>ভর্তি</h4>
                            <img src="{{ asset('Madrasah/storage/uploads/service_box/2023-10-28_653c0af23a0f4.png') }}"
                                alt="ভর্তি" width="110" style="max-width:80px;">
                            <ul class="caption fade-caption" style="margin:0">
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="studentRegistration.html" title="মাদ্রাসা ভর্তি" target="_self">
                                        মাদ্রাসা ভর্তি
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="http://xiclassadmission.gov.bd/" title="আলিম ভর্তি" target="_self">
                                        আলিম ভর্তি
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="http://e.iau.edu.bd/" title="ফাজিল ভর্তি" target="_self">
                                        ফাজিল ভর্তি
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="http://admission.iau.edu.bd/" title="ফাজিল (সম্মান) ভর্তি" target="_self">
                                        ফাজিল (সম্মান) ভর্তি
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="service-box box">
                            <h4>ফলাফল</h4>
                            <img src="{{ asset('Madrasah/storage/uploads/service_box/2023-10-28_653c0b70f181b.png') }}"
                                alt="ফলাফল" width="110" style="max-width:80px;">
                            <ul class="caption fade-caption" style="margin:0">
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="result.html" title="মাদ্রাসা ফলাফল" target="_blank">
                                        মাদ্রাসা ফলাফল
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="https://eboardresults.com/v2/home" title="দাখিল ফলাফল" target="_blank">
                                        দাখিল ফলাফল
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="https://eboardresults.com/v2/home" title="আলিম ফলাফল" target="_blank">
                                        আলিম ফলাফল
                                    </a>
                                </li>
                                <li>
                                    <i class="text-green fa fa-caret-right"></i>
                                    <a href="http://result.iau.edu.bd/" title="ফাজিল ফলাফল" target="_blank">
                                        ফাজিল ফলাফল
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="body_head">
                            অধক্ষ্য এর বানী
                        </div>
                        <div class="body_content">
                            <img src="{{ asset('Madrasah/frontend/images/principal_photo.jpg') }}" alt="..."
                                class="img-thumbnail"
                                style="height:120px;weight:80px;float:left;margin:0px 10px 10px 0px;" />
                            <strong>মোহাম্মদ মনিরুল হক</strong>
                            <br />
                            চাঁপাইনবাবগঞ্জ জেলার সদর উপজেলাধীন বালিয়াডাঙ্গা ইউনিয়ন পরিষদ সংলগ্ন মহানন্দা
                            নদীর তীরে অবস্থিত বালিয়াডাঙ্গা দারুস সুন্নাত ফাজিল মাদরাসা। মাদরাসাটি মূলত
                            ধর্মজ্ঞানপুষ্ট শিক্ষা প্রসারের জন্য প্রতিষ্ঠিত হয় ১৯৫৭ ইং সালে। মানব সভ্যতার
                            ক্রমবিকাশমান ধারায় আমরা উত্তর আধুনিক সমাজের বিশ্ব নাগরিক। একটা জাতির উন্নতির
                            মাপকাঠি হল শিক্ষা। দারিদ্র বিমোচনের লক্ষ্য পূরনে শিক্ষাই হচ্ছে প্রধান অবলম্বন।
                            <a href="http://bdsfm.test/principalMessage" class="btn btn-xs btn-success pull-right">Read
                                More</a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="body_head">
                            এক নজরে শিক্ষা প্রতিষ্ঠান
                        </div>
                        <div class="body_content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td><strong>শিরোনাম</strong></td>
                                        <td><strong>সংখ্যা</strong></td>
                                        <td><strong>শিরোনাম</strong></td>
                                        <td><strong>সংখ্যা</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>স্থাপিত</td>
                                        <td>১৯৫৭</td>
                                        <td>এমপিও ভুক্ত</td>
                                        <td>১৯৮৫</td>
                                    </tr>
                                    <tr>
                                        <td>ছাত্র/ছাত্রী</td>
                                        <td>৭৮০ জন</td>
                                        <td>ভবন</td>
                                        <td>৩টি</td>
                                    </tr>
                                    <tr>
                                        <td>শিক্ষক</td>
                                        <td>৩৪ জন</td>
                                        <td>কর্মচারী</td>
                                        <td>৮ জন</td>
                                    </tr>
                                    <tr>
                                        <td>বিজ্ঞান ল্যাব</td>
                                        <td>১ টি</td>
                                        <td>কম্পি. ল্যাব</td>
                                        <td>১ টি</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
