<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_bn');
            $table->string('name_ar')->nullable();
            $table->string('mobile');
            $table->string('email');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('nationality');
            $table->string('nid_no');
            $table->string('birth_reg_no');
            $table->string('father_name');
            $table->string('father_name_bn');
            $table->string('father_name_ar')->nullable();
            $table->string('mother_name');
            $table->string('mother_name_bn');
            $table->string('mother_name_ar')->nullable();
            $table->string('present_address_division');
            $table->string('present_address_district');
            $table->string('present_address_upazila');
            $table->string('present_address');
            $table->string('permanent_address_division');
            $table->string('permanent_address_district');
            $table->string('permanent_address_upazila');
            $table->string('permanent_address');
            $table->string('education_level');
            $table->string('name_of_madrasha');
            $table->string('name_of_exam_centre');
            $table->string('roll_no');
            $table->string('reg_no');
            $table->string('passing_year');
            $table->string('session');
            $table->string('result');
            $table->string('guardian_name');
            $table->string('guardian_mobile');
            $table->string('guardian_occupation');
            $table->string('guardian_annual_earning');
            $table->string('class_name');
            $table->string('group_name');
            $table->string('image')->nullable();
            $table->string('is_approved')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
