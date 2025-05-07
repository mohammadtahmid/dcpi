<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class AdminController extends Controller
{
    public function view_notice(){
        return view('admin.notice');
    }

    public function add_notice(Request $request){
        $notice = new Notice;

        $notice->title = $request->title;
        $notice->massage = $request->massage;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('notices', 'public');
            $notice->image = $imagePath;
        }

        $notice->save();
        return redirect()->back()->with('success', 'Notice added successfully!');
    }
}
