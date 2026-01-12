<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('upload')) {
        $path = $request->file('upload')->store('uploads', 'public');
        $url = asset('storage/' . $path);
        return response()->json(['url' => $url]);
        }

        // if($request->hasFile('upload')) {
        //     $image = $request->file('upload', 'public');
        //     $imageName =$slug.'-'.time().'.'.$image->getClientOriginalExtension();
        //     $image->move(public_path('image/upload-image'),$imageName);
        //     $category->image = $imageName;
        // }

        return response()->json(['error' => 'No file uploaded.'], 400);
    }

}
