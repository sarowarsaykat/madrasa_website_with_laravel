<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers',
            'phone' => 'required|numeric|digits_between:10,15',
            'phone_home' => 'nullable|numeric|digits_between:10,15',
            'phone_office' => 'nullable|numeric|digits_between:10,15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $teacher = new Teacher;
        $teacher->name = $request->input('name');
        $teacher->post = $request->input('post');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->phone_home = $request->input('phone_home');
        $teacher->phone_office = $request->input('phone_office');

        // Handle image upload if available
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/teachers/', $filename);
            $teacher->image = $filename;
        }

        $teacher->save();
        return redirect()->route('teacher.index')->with('status', 'Teacher Added Successfully');
    }


    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        
        $teacher = Teacher::findOrFail($id);
        return view('backend.teacher.show', compact('teacher'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('backend.teacher.edit', compact('teacher'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'post' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $id, // Ignore the current teacher's email
            'phone' => 'required|numeric|digits_between:10,15',
            'phone_home' => 'nullable|numeric|digits_between:10,15',
            'phone_office' => 'nullable|numeric|digits_between:10,15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Image should be jpg, jpeg, or png, max 2MB
        ]);

        $teacher = Teacher::find($id);
        $teacher->name = $request->input('name');
        $teacher->post = $request->input('post');
        $teacher->email = $request->input('email');
        $teacher->phone = $request->input('phone');
        $teacher->phone_home = $request->input('phone_home');
        $teacher->phone_office = $request->input('phone_office');

        // Handle image upload if available
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            $destination = 'uploads/teachers/' . $teacher->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Store the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/teachers/', $filename);  // Upload the image to the 'uploads/teachers/' directory
            $teacher->image = $filename;
        }

        $teacher->save();
        return redirect()->route('teacher.index')->with('status', 'Teacher Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);

        // Delete the image if it exists
        $destination = 'uploads/teachers/' . $teacher->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $teacher->delete();
        return redirect()->route('teacher.index')->with('status', 'Teacher Deleted Successfully');
    }
}
