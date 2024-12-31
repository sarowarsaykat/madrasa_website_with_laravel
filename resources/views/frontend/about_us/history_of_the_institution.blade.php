@extends('layout/master')
@section('content')
    <div class="col-md-9">
        <!-- Start main-content -->
        <div class="row">
            <div class="col-md-12">
                <div class="body_head">
                    শিক্ষা প্রতিষ্ঠানের ইতিহাস
                </div>
                <div class="body_content">
                    <p>চাঁপাই নবাবগঞ্জ জেলার সদর উপজেলাধীন ০১নং বালিয়াডাঙ্গা ইউনিয়ন পরিষদ সংলগ্ন মহানন্দা নদীর তীরে
                        বালিয়াডাঙ্গা দারুস সুন্নাত ফাজিল মাদরাসাটি অবস্থিত। জনবহুল এলাকা হিসেবে পরিচিত, সেইসময়ে ১৯৫৭ ইং সালে
                        বালিয়াডাঙ্গাঁর মানুষ ইসলামী শিক্ষায় পিছিয়ে ছিল। সেই জন্গষ্টি কে ইসলামী শিক্ষায় আলোকিত করার লক্ষে পীর
                        কেবলা মরহুম জয়নাল আবেদীন (বগুড়া) এর পরামর্শ ও উৎসাহ ডাঃ আলহাজ্ব মুনসুর আহমেদ সাহেব স্থানীয় গন্যমান্য
                        ব্যক্তিবর্গকে নিয়ে অত্র মাদ্রাসাটি প্রতিষ্ঠা করেন। অত্র প্রতিষ্টানে গভার্নিং বডি ও শিক্ষক মন্ডলী
                        দ্বরা পরিচালিত হইয়া আসিতেছে। অত্র ফাজিল মাদরাসাটির পাশ দিয়ে মহানন্দা নদী বহিয়া গিয়াছে। প্রতিষ্টানে
                        বিজ্ঞান ও মানবিক শাখা চালূ আছে। অত্র প্রতিষ্টানে ২৭ জন শিক্ষক শিক্ষিকা, ৬ জন কর্মচারি কর্মরত আছে।
                        অত্র প্রতিষ্টানে মোট ছাত্র/ছাত্রীর সংখ্যা ৭৫০ জন।</p>

                    <p>০১/০১/১৯৫৭ সালে প্রতিষ্ঠা লাভ করে এবং ০১/০১/১৯৬৬ইং সালে প্রথম স্বীকৃতি লাভ করে। আলিম শ্রেনী
                        ০১/০৭/১৯৮২ইং এবং ০১/০৭/১৯৯৫ইং সালে ফাজিল স্বীকৃতি লাভ করে। অত্র প্রতিষ্ঠনটি এম.পি.ও ভুক্তি হয়
                        ০১/০৩/১৯৮৫ সালে।</p>
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
