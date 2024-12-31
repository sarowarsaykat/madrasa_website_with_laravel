href="{{ asset('Madrasah/') }}

{{ asset('Madrasah/
') }}

@extends('layout/master')
@section('content')
    
@endsection
@section('sidebar')
    <div class="col-md-12">
        <div class="notice_board_head">সভাপতি</div>
        <div class="notice_board_content_box right-img-box">
            <p><img src="{{ asset('Madrasah/../file-rajshahi.portal.gov.bd/uploads/ef8940d9-6739-452e-b6ff-d4ff0e539609/650/be0/8f9/650be08f98a50330264950.jpg') }}"
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

{{asset('backendLtd/
')}}