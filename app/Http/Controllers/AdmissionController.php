<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index(){
        $admissions = Admission::all();
        return view('backend.madrasah_admission.index', compact('admissions'));
    }
    public function create()
    {
        return view('frontend.admission.madrasah_admission');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'name_bn' => 'required',
            'name_ar' => 'nullable',
            'mobile' => 'required',
            'email' => 'nullable',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'blood_group' => 'required',
            'nationality' => 'required',
            'nid_no' => 'nullable',
            'birth_reg_no' => 'nullable',
            'father_name' => 'required',
            'father_name_bn' => 'required',
            'father_name_ar' => 'nullable',
            'mother_name' => 'required',
            'mother_name_bn' => 'required',
            'mother_name_ar' => 'nullable',
            'present_address_division' => 'required',
            'present_address_district' => 'required',
            'present_address_upazila' => 'required',
            'present_address' => 'required',
            'permanent_address_division' => 'required',
            'permanent_address_district' => 'required',
            'permanent_address_upazila' => 'required',
            'permanent_address' => 'required',
            'education_level' => 'required',
            'name_of_madrasha' => 'required',
            'name_of_exam_centre' => 'required',
            'roll_no' => 'required',
            'reg_no' => 'required',
            'passing_year' => 'required',
            'session' => 'required',
            'result' => 'required',
            'guardian_name' => 'required',
            'guardian_mobile' => 'required',
            'guardian_occupation' => 'nullable',
            'guardian_annual_earning' => 'nullable',
            'class_name' => 'required',
            'group_name' => 'nullable',
            'is_approved' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $admission = new Admission;
        $admission->name = $request->input('name');
        $admission->name_bn = $request->input('name_bn');
        $admission->name_ar = $request->input('name_ar');
        $admission->mobile = $request->input('mobile');
        $admission->email = $request->input('email');
        $admission->date_of_birth = $request->input('date_of_birth');
        $admission->gender = $request->input('gender');
        $admission->blood_group = $request->input('blood_group');
        $admission->nationality = $request->input('nationality');
        $admission->nid_no = $request->input('nid_no');
        $admission->birth_reg_no = $request->input('birth_reg_no');
        $admission->father_name = $request->input('father_name');
        $admission->father_name_bn = $request->input('father_name_bn');
        $admission->father_name_ar = $request->input('father_name_ar');
        $admission->mother_name = $request->input('mother_name');
        $admission->mother_name_bn = $request->input('mother_name_bn');
        $admission->mother_name_ar = $request->input('mother_name_ar');
        $admission->present_address_division = $request->input('present_address_division');
        $admission->present_address_district = $request->input('present_address_district');
        $admission->present_address_upazila = $request->input('present_address_upazila');
        $admission->present_address = $request->input('present_address');
        $admission->permanent_address_division = $request->input('permanent_address_division');
        $admission->permanent_address_district = $request->input('permanent_address_district');
        $admission->permanent_address_upazila = $request->input('permanent_address_upazila');
        $admission->permanent_address = $request->input('permanent_address');
        $admission->education_level = $request->input('education_level');
        $admission->name_of_madrasha = $request->input('name_of_madrasha');
        $admission->name_of_exam_centre = $request->input('name_of_exam_centre');
        $admission->roll_no = $request->input('roll_no');
        $admission->reg_no = $request->input('reg_no');
        $admission->passing_year = $request->input('passing_year');
        $admission->session = $request->input('session');
        $admission->result = $request->input('result');
        $admission->guardian_name = $request->input('guardian_name');
        $admission->guardian_mobile = $request->input('guardian_mobile');
        $admission->guardian_occupation = $request->input('guardian_occupation');
        $admission->guardian_annual_earning = $request->input('guardian_annual_earning');
        $admission->class_name = $request->input('class_name');
        $admission->group_name = $request->input('group_name');
        $admission->is_approved = $request->input('is_approved');

        // Handle image upload if available
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/admissions/', $filename);
            $admission->image = $filename;
        }
        $admission->save();
        return redirect()->route('admission.index')->with('status', 'Admission Added Successfully');
    }



    public function show($id)
    {
        
        $admission = Admission::findOrFail($id);
        return view('backend.madrasah_admission.show', compact('admission'));
    }


    public function destroy($id)
    {
        $admission = Admission::find($id);

        // Delete the image if it exists
        $destination = 'uploads/admissions/' . $admission->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $admission->delete();
        return redirect()->route('admission.index')->with('status', 'Admission Deleted Successfully');
    }


    public function accept_admission($id){
        $data = Admission::find($id);
        $data->is_approved='Active';
        $data->save();
        return redirect()->back()->with('status', 'Admission Status changed to Active');
    }

    public function reject_admission($id){
        $data = Admission::find($id);
        $data->is_approved='Pending';
        $data->save();
        return redirect()->back()->with('status', 'Admission Status changed to Rejected');
    }

    
}
