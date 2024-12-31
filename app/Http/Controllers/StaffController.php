<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('backend.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.staff.create');
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
            'email' => 'required|email|unique:staff',
            'phone' => 'required|numeric|digits_between:10,15',
            'phone_home' => 'nullable|numeric|digits_between:10,15',
            'phone_office' => 'nullable|numeric|digits_between:10,15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $staff = new Staff;
        $staff->name = $request->input('name');
        $staff->post = $request->input('post');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->phone_home = $request->input('phone_home');
        $staff->phone_office = $request->input('phone_office');

        // Handle image upload if available
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/staffs/', $filename);
            $staff->image = $filename;
        }

        $staff->save();
        return redirect()->route('staff.index')->with('status', 'staff Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $staff = Staff::findOrFail($id);
        return view('backend.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('backend.staff.edit', compact('staff'));
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
            'email' => 'required|email|unique:staff,email,' . $id, // Ignore the current staff's email
            'phone' => 'required|numeric|digits_between:10,15',
            'phone_home' => 'nullable|numeric|digits_between:10,15',
            'phone_office' => 'nullable|numeric|digits_between:10,15',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Image should be jpg, jpeg, or png, max 2MB
        ]);

        $staff = Staff::find($id);
        $staff->name = $request->input('name');
        $staff->post = $request->input('post');
        $staff->email = $request->input('email');
        $staff->phone = $request->input('phone');
        $staff->phone_home = $request->input('phone_home');
        $staff->phone_office = $request->input('phone_office');

        // Handle image upload if available
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            $destination = 'uploads/staffs/' . $staff->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            // Store the new image
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/staffs/', $filename);  // Upload the image to the 'uploads/staffs/' directory
            $staff->image = $filename;
        }

        $staff->save();
        return redirect()->route('staff.index')->with('status', 'Staff Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);

        // Delete the image if it exists
        $destination = 'uploads/staffs/' . $staff->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $staff->delete();
        return redirect()->route('staff.index')->with('status', 'staff Deleted Successfully');
    }
}
