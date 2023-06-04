<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    public function store(Request $request, Announcement $announcement)
    {
        $data['title'] = $request->title;
        $data['body'] = $request->body;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->put('public/img/announcement', $image);
            $data['image'] = $path;
        }  

        $announcement->create($data);
        return redirect()->back();
    }

    public function update(Request $request, Announcement $announcement)
    {
        $data['title'] = $request->title;
        $data['body'] = $request->body;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = Storage::disk('s3')->put('public/img/announcement', $image);
            $data['image'] = $path;
            Storage::disk('s3')->delete($announcement->image);
        }
    
        $announcement->update($data);
        return redirect()->back();
    }

    public function destroy(Announcement $announcement)
    {
        Storage::disk('s3')->delete($announcement->image);
        $announcement->delete();
        return redirect()->back();
    }
}