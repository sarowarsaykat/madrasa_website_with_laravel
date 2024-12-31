<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MadrasahAdmissionController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;




Route::get('/',[HomeController::class,'home']);

//about us
Route::get('/history_of_the_institution',[HomeController::class,'institutionHistory']);
Route::get('/principal_speech',[HomeController::class,'principalSpeech']);

//academic
Route::get('/academic_calendar',[HomeController::class,'academicCalender']);
Route::get('/class_routine',[HomeController::class,'classRoutine']);
Route::get('/syllabus',[HomeController::class,'syllabus']);

//notice board
Route::get('/general_notice',[HomeController::class,'generalNotice']);
Route::get('/stipend',[HomeController::class,'Stipend']);


//result
Route::get('/madrasah_result',[HomeController::class,'Result']);

//photo gallery
Route::get('/photo_gallery',[HomeController::class,'photoGalley']);

//teacher and staff
Route::get('/teacher',[HomeController::class,'Teacher']);
Route::get('/staff',[HomeController::class,'Staff']);

//contact
Route::get('/contact',[HomeController::class,'Contact']);


//admission
Route::get('admission/create',[AdmissionController::class,'create'])->name('admission.create');
Route::post('admission/store',[AdmissionController::class, 'store'])->name('admission.store');
Route::get('admission/index',[AdmissionController::class,'index'])->name('admission.index');
Route::delete('admission/{id}', [AdmissionController::class, 'destroy'])->name('admission.destroy');
Route::get('admission/show/{id}', [AdmissionController::class, 'show'])->name('admission.show');
Route::get('accept_admission/{id}', [AdmissionController::class, 'accept_admission'])->name('accept_admission');
Route::get('reject_admission/{id}', [AdmissionController::class, 'reject_admission'])->name('reject_admission');





//backend
Route::get('backend',[BackendController::class,'Backend']);
Route::resource('backend/teacher', TeacherController::class);
Route::resource('backend/staff',StaffController::class);
Route::resource('backend/notice', NoticeController::class);






