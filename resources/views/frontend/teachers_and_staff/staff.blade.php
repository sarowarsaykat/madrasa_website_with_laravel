@extends('layout/master')
@section('content')
    <div class="col-md-9">
        <style>
            table.bordered>tbody>tr,
            table.bordered>thead>tr {
                border: 1px #D8D8D8 solid;
            }

            table.bordered td,
            table.bordered th {
                padding-left: 10px;
                vertical-align: top;
                line-height: 1.2em;
                border: 1px solid #D8D8D8;
                font-size: 12px;
            }

            table.bordered th {
                font-weight: bold;
            }

            table.bordered th u {
                font-weight: bold;
                line-height: 3em;
            }

            table.bordered table td:first-child {
                background-color: #eee;
                padding: 5px;
                font-weight: bold;
            }

            .bordered {
                width: 100%;
            }

            table.bordered table {
                width: 100%;
            }

            .bordered a:link,
            .bordered a:active,
            .bordered a:visited {
                color: black;
            }

            .bordered td,
            .bordered th {
                border: 1px solid #D8D8D8;
                padding: 5px;
            }
        </style>
        <!-- Start main-content -->
        <div class="row">
            <div class="col-md-12">
                <div class="body_head">
                    কর্মচারীবৃন্দ
                </div>
                <div class="body_content">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="bordered">
                                <tbody width="100%">
                                    @foreach ($staff as $index=> $member)
                                    <tr width="100%">
                                        <td>{{$index+1}}</td>
                                        <td style="text-align: center;"><img
                                                src="{{ asset('uploads/staffs/' . $member->image) }}"
                                                alt="" width="70" height="" /></td>
                                        <td>
                                            <table>
                                                <tbody>
                                                    <td width="50%">
                                                        <table>
                                                            <tr>
                                                                <td width="100">নাম</td>
                                                                <td>{{$member->name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100">পদবি</td>
                                                                <td>{{$member->post}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100">ই-মেইল</td>
                                                                <td><a>{{$member->email}}</a></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td width="50%">
                                                        <table>
                                                            <tr>
                                                                <td width="100">মোবাইল</td>
                                                                <td>{{$member->phone}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100">ফোন (অফিস)</td>
                                                                <td>{{$member->phone_home}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="100">ফোন (বাসা)</td>
                                                                <td>{{$member->phone_office}}</td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
            <a href="https://www.staffs.gov.bd/" class="list-group-item list_item" target="_blank"><span
                    class="glyphicon glyphicon-check"></span> শিক্ষক
                বাতায়ন</a>
        </div>
        <div class="notice_board_head">জরুরী হটলাইন</div>
        <div class="notice_board_content_box">
            <img src="{{ asset('Madrasah/frontend/images/National-Helpline.jpg') }}" width="100%" />
        </div>
    </div>
@endsection
