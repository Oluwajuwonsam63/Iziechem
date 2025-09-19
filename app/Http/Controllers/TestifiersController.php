<?php

namespace App\Http\Controllers;

use App\Models\testifiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestifiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "All Testimonials";
        $keywords = "Admin All Testimonials";
        $description = "All testimonials";
        $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

        // Eager load user relationship and get all results
        $testifiers = Testifiers::with('user')
                        ->latest()
                        ->get();
        
        return view('testifiers.index', compact('testifiers', 'page_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="create testimonial";
        $keywords="testimonial";
        $description="create testimonial";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        return view('testifiers.create', compact('page_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'image' => 'required|image|mimes:jpg,png,gif,svg|max:2048',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $slug = str_replace(' ', '-', $request->name).time();

        $testifier = new Testifiers();
        $testifier->user_id = auth()->id(); // Changed this line to get authenticated user's ID
        $testifier->name = $request->name;
        $testifier->message = $request->message;
        $testifier->rating = $request->rating;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/testifiers'), $imageName);
            $testifier->image = $imageName;
        }

        $testifier->save();
        return redirect()->route('all_testifiers')->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testifiers  $testifiers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title= "Testimonial Details";
        $keywords= "Admin Testimonial Details";
        $description="Testimonial details";
        $page_data= ['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];// associative array

        $testifier = testifiers::find($id);
        //dd($testifier);
        return view('testifiers.show', compact('testifier', 'page_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testifiers  $testifiers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="edit testimonial";
        $keywords="testimonial";
        $description="edit testimonial";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $testifier = testifiers::find($id);
        return view('testifiers.edit', compact('testifier', 'page_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\testifiers  $testifiers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testifiers $testifier)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'image' => 'sometimes|image|mimes:jpg,png,gif,svg|max:2048',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
            
        $slug = str_replace(' ', '-', $request->name).time();
        // $user_id = auth()->id();


        $testifier->name = $request->name;
        $testifier->message = $request-> message;
        $testifier->rating = $request-> rating;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/testifiers'), $imageName);
            $testifier->image = $imageName;
        }

        $testifier->save();
        return redirect()->route('all_testifiers')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testifiers  $testifiers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testifier = testifiers::where('id', $id)->first();
        if ($testifier) {
            $testifier->delete();
            return redirect()->route('all_testifiers')->with('success', 'Testimonial deleted successfully.');
        }
        return redirect()->route('all_testifiers')->with('error', 'Testimonial not found.');    
    }
}
