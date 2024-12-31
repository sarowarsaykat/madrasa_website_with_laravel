@extends('layout/master')
@section('content')
    <div class="col-md-9">
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
        <style>
            body {
                margin: 0;
                padding: 0;
            }

            .portfolio-menu {
                text-align: center;
            }

            .portfolio-menu ul li {
                display: inline-block;
                margin: 0;
                list-style: none;
                padding: 10px 15px;
                cursor: pointer;
                -webkit-transition: all 05s ease;
                -moz-transition: all 05s ease;
                -ms-transition: all 05s ease;
                -o-transition: all 05s ease;
                transition: all .5s ease;
            }

            .portfolio-item .item {
                /*width:303px;*/
                float: left;
                margin-bottom: 10px;
            }

            .photoviewer-modal {
                background-color: transparent;
                border: none;
                border-radius: 0;
                box-shadow: 0 0 6px 2px rgba(0, 0, 0, .3);
            }

            .photoviewer-header .photoviewer-toolbar {
                background-color: rgba(0, 0, 0, .5);
            }

            .photoviewer-stage {
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-color: rgba(0, 0, 0, .85);
                border: none;
            }

            .photoviewer-footer .photoviewer-toolbar {
                background-color: rgba(0, 0, 0, .5);
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            .photoviewer-header,
            .photoviewer-footer {
                border-radius: 0;
                pointer-events: none;
            }

            .photoviewer-title {
                color: #ccc;
            }

            .photoviewer-button {
                color: #ccc;
                pointer-events: auto;
            }

            .photoviewer-header .photoviewer-button:hover,
            .photoviewer-footer .photoviewer-button:hover {
                color: white;
            }

            .gallery-thumbnail img {
                width: 100%;
                height: 150px;
            }

            .panel {
                min-height: 215px;
            }

            .panel-body {
                padding: 5px;
            }

            .panel-footer {
                padding: 5px;
                font-size: 14px;
            }
        </style>
        <!-- Start main-content -->
        <div class="row">
            <div class="col-md-12">
                <div class="body_head">
                    ফটো গ্যালারি
                </div>
                <div class="body_content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2024-06-13_666a53325e535.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2024-06-13_666a53325e535.jpg"
                                            alt="অধ্যক্ষ এর অফিস কক্ষ">
                                    </a>
                                </div>
                                <div class="panel-footer">অধ্যক্ষ এর অফিস কক্ষ</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2024-06-13_666a52de8e029.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2024-06-13_666a52de8e029.jpg"
                                            alt="শিক্ষক শিলনায়তন">
                                    </a>
                                </div>
                                <div class="panel-footer">শিক্ষক শিলনায়তন</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2024-03-18_65f7bc522df2a.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2024-03-18_65f7bc522df2a.jpg"
                                            alt="জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৪ তম জন্মবার্ষিকী ও জা ..">
                                    </a>
                                </div>
                                <div class="panel-footer">জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমান এর ১০৪ তম জন্মবার্ষিকী ও জা
                                    ..</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2024-02-12_65c9bf95840c7.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2024-02-12_65c9bf95840c7.jpg"
                                            alt="দাখিল ও আলিম ২০২৪ ইং পরীক্ষার্থীদের বিদায় অনুষ্ঠান">
                                    </a>
                                </div>
                                <div class="panel-footer">দাখিল ও আলিম ২০২৪ ইং পরীক্ষার্থীদের বিদায় অনুষ্ঠান</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-10-18_652fc5c0d3658.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-10-18_652fc5c0d3658.jpg"
                                            alt=""শেখ রাসেল দিবস ২০২৩" উদযাপন">
                                    </a>
                                </div>
                                <div class="panel-footer">"শেখ রাসেল দিবস ২০২৩" উদযাপন</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-10-09_6523a7140bf59.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-10-09_6523a7140bf59.jpg"
                                            alt="৫ অক্টোবর বিশ্ব শিক্ষক দিবস উদযাপন">
                                    </a>
                                </div>
                                <div class="panel-footer">৫ অক্টোবর বিশ্ব শিক্ষক দিবস উদযাপন</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_650670d7abfb1.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_650670d7abfb1.jpg"
                                            alt="নতুন বই বিতরন উৎসব ২০২৪">
                                    </a>
                                </div>
                                <div class="panel-footer">নতুন বই বিতরন উৎসব ২০২৪</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_65066db6a9a31.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_65066db6a9a31.jpg"
                                            alt="আন্তর্জাতিক মাতৃভাষা দিবস ২০২৩ উপলক্ষে আলোচনা সভা ও দোয়া মাহফিল">
                                    </a>
                                </div>
                                <div class="panel-footer">আন্তর্জাতিক মাতৃভাষা দিবস ২০২৩ উপলক্ষে আলোচনা সভা ও দোয়া মাহফিল
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_65066cdc1f796.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_65066cdc1f796.jpg"
                                            alt="মহান স্বাধীনতা দিবস উদযাপন উপলক্ষে বার্ষিক ক্রীড়া প্রতিযোগিতা ও প ..">
                                    </a>
                                </div>
                                <div class="panel-footer">মহান স্বাধীনতা দিবস উদযাপন উপলক্ষে বার্ষিক ক্রীড়া প্রতিযোগিতা ও প
                                    ..</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_65066ba96fac0.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_65066ba96fac0.jpg"
                                            alt="মহান বিজয় দিবস ২০২৩">
                                    </a>
                                </div>
                                <div class="panel-footer">মহান বিজয় দিবস ২০২৩</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_6506014f1b686.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_6506014f1b686.jpg"
                                            alt="শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবষ ২০২৩ উপলক্ষ্যে আলোচনা সভা ও ..">
                                    </a>
                                </div>
                                <div class="panel-footer">শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবষ ২০২৩ উপলক্ষ্যে আলোচনা সভা ও
                                    ..</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_650600962cf9d.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_650600962cf9d.jpg"
                                            alt="ফ্রি মেডিক্যাল ক্যাম্পে বতৃক্তা প্রদান করছেন মাননীয় এমপি মহোদয় ফে ..">
                                    </a>
                                </div>
                                <div class="panel-footer">ফ্রি মেডিক্যাল ক্যাম্পে বতৃক্তা প্রদান করছেন মাননীয় এমপি মহোদয় ফে
                                    ..</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_6505fff518cce.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_6505fff518cce.jpg"
                                            alt="বঙ্গবন্ধু ও মুক্তিযোদ্ধা কর্ণারে মাদ্রাসার শিক্ষক/শিক্ষিকা বৃন্দ">
                                    </a>
                                </div>
                                <div class="panel-footer">বঙ্গবন্ধু ও মুক্তিযোদ্ধা কর্ণারে মাদ্রাসার শিক্ষক/শিক্ষিকা বৃন্দ
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_6505ff6785f15.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_6505ff6785f15.jpg"
                                            alt="১৫ আগষ্ট জাতীয় শোক দিবসে দোয়া মাহফিল">
                                    </a>
                                </div>
                                <div class="panel-footer">১৫ আগষ্ট জাতীয় শোক দিবসে দোয়া মাহফিল</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <a href="storage/uploads/photo_gallery/2023-09-17_6505f82231cf5.jpg"
                                        class="gallery-thumbnail fancylight popup-btn" data-fancybox-group="light">
                                        <img class="img-fluid"
                                            src="storage/uploads/photo_gallery/2023-09-17_6505f82231cf5.jpg"
                                            alt="মাদ্রাসার ছাত্র/ছাত্রীদের একাংশ">
                                    </a>
                                </div>
                                <div class="panel-footer">মাদ্রাসার ছাত্র/ছাত্রীদের একাংশ</div>
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
            <p><img src="file-rajshahi.portal.gov.bd/uploads/ef8940d9-6739-452e-b6ff-d4ff0e539609/650/be0/8f9/650be08f98a50330264950.jpg"
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
