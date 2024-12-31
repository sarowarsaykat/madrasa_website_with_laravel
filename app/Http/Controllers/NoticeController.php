<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices = Notice::all();
        return view('backend.notice_board.index', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.notice_board.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'description' => 'required|max:500',

        ]);

        $notice = new Notice;
        $notice->description = $request->input('description');
        $notice->save();
        return redirect()->route('notice.index')->with('status', 'Notice Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $notice = Notice::findOrFail($id);
        return view('backend.notice_board.show', compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('backend.notice_board.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'description' => 'required|max:500',
        ]);

        $notice = Notice::find($id);
        $notice->description = $request->input('description');

        $notice->save();
        return redirect()->route('notice.index')->with('status', 'Notice Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);

        $notice->delete();
        return redirect()->route('notice.index')->with('status', 'Notice Deleted Successfully');
    }
}
