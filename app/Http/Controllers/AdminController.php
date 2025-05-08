<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use Illuminate\Support\Facades\Storage;
use Flasher\Laravel\Facade\Flasher;

class AdminController extends Controller
{
    public function view_notice(){

        $data = Notice::all();
        return view('admin.notice',compact('data'));
    }

    public function add_notice(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'massage' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        $notice = new Notice;

        $notice->title = $request->title;
        $notice->massage = $request->massage;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('notices', 'public');
            $notice->image = $imagePath;
        }

        $notice->save();
        flash()->success('Notice created successfully!');
        return redirect()->back();
    }

    public function delete_notice($id){
        $notice = Notice::find($id);

        if($notice->image && storage::disk('public')->exists($notice->image)){
            storage::disk('public')->delete($notice->image);
        }

        $notice->delete();
        flash()->error('Notice Deleted successfully!');
        return redirect()->back();
    }

    public function edit_notice($id){
        $data = Notice::find($id);

        return view('admin.edit_notice',compact('data'));
    }

    public function update_notice(Request $request){



    }
}
