<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Staff;
use App\Models\Notice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $notices = Notice::latest()->take(2)->get();
        return view('home',compact('notices'));
    }

    //about us
    public function institutionHistory(){
        return view('frontend.about_us.history_of_the_institution');
    }
    public function principalSpeech(){
        return view('frontend.about_us.principal_speech');
    }

    //academic
    public function academicCalender(){
        return view('frontend.academic.academic_calendar');
    }
    public function classRoutine(){
        return view('frontend.academic.class_routine');
    }
    public function syllabus(){
        return view('frontend.academic.syllabus');
    }

    //notice board
    public function generalNotice(){
        $notices = Notice::all();
        return view('frontend.notice_board.general_notice',compact('notices'));
    }
    public function Stipend(){
        return view('frontend.notice_board.stipend');
    }

    //result
    public function Result(){
        return view('frontend.result.madrasah_result');
    }

    //photo gallery
    public function photoGalley(){
        return view('frontend.photo_gallery.photo_gallery');
    }

    //teacher and staff
    public function Teacher(){
        $teachers = Teacher::all();
        return view('frontend.teachers_and_staff.teacher',compact('teachers'));
    }
    public function Staff(){
        $staff = Staff::all();
        return view('frontend.teachers_and_staff.staff',compact('staff'));
    }

    //contact
    public function Contact(){
        return view('frontend.contact.contact');
    }
}
