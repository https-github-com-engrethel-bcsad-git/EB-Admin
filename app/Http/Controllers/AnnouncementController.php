<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    public function insert(Request $request, Announcement $announcement)
    {
        $data['title'] = $request->title;
        $data['body'] = $request->body;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->put('/images/sitio_clearance', $image);
            $data['image'] = $path;
        }  
        $announcement->create($data);
        return redirect()->back();
    }

    public function edit(Announcement $announcement)
    {
        return view('/update/edit_announcement', compact('announcement'));
    }
    
    public function update(Request $request, Announcement $announcement)
    {
        
        $announcement->title = $request->input('title');
        $announcement->body = $request->input('body');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->put('/images/announcement', $image);
            $announcement->image = $path;
        }
    
        $announcement->save();
        
        return redirect('/announcement')->with('success', 'Announcement updated successfully');
    }
    
    

    // public function update(Request $request, Announcement $announcement)
    // {
    //     $announcement = Announcement::findOrFail($announcement);
    //     $announcement->title = $request->input('title');
    //     $announcement->body = $request->input('body');

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $path = $image->store('public/images');
    //         $announcement->image = $path;
    //     }

    //     $announcement->save();
    //     return redirect('/announcements');
    // }
}