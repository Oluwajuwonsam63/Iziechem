<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;
use App\Models\Categories;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title= "All Projects";
        $keywords= "Admin All Projects";
        $description="All projects";
        $page_data= ['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];// associative array

        $projects = projects::all();
        $categories = Categories::all();
        //dd($projects);
        return view('Projects.index', compact('projects', 'page_data'));
    }
    public function project()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="create project";
        $keywords="project";
        $description="create project";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $categories = Categories::all();
        return view('Projects.create', compact('page_data', 'categories'));
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
            'client' => 'required|string|max:255',
            'service' => 'required|string|max:255',
            'keywords' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'category_id' => 'required|integer|exists:categories,id',
        ]);

        $slug = str_replace(' ', '-', $request->title).time();
        $user_id = auth()->user()->id;

        // dd($request->all());

        $project = new projects();
        $project->user_id = auth()->id();
        $project->category_id = $request->category_id;
        $project->client = $request->client;
        $project->service = $request->service;
        $project->keywords = $request->keywords;
        $project->description = $request->description;
        $project->date = $request->date;
        $project->slug = str_replace(' ', '-', $request->client).time();
        $project->status = 0; // Default status
// dd($request->all());
        if($request->hasFile('image1')) {
            $image = $request->file('image1');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/projects'),$imageName);
            $project->image_1 = $imageName;
        }
        if($request->hasFile('image2')) {
            $image = $request->file('image2');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/projects'),$imageName);
            $project->image_2 = $imageName;
        }
        
        $project->save();

        return redirect()->route('all_projects')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title="edit projects";
        $keywords="projects";
        $description="edit projects";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $projects = projects::find($id);
        return view('projects.show', compact('projects', 'page_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="edit projects";
        $keywords="projects";
        $description="edit projects";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $projects = projects::find($id);
        $categories = categories::all();
        return view('projects.edit', compact('projects', 'page_data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projects $projects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(projects $projects)
    {
        //
    }
}
