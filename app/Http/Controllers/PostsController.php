<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title= "All Posts";
        $keywords= "Admin All Posts";
        $description="All posts";
        $page_data= ['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];// associative array

        $posts = Posts::all();
        //dd($posts);
        return view('posts.index', compact('posts', 'page_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="create post";
        $keywords="post";
        $description="create post";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $categories = categories::all();
        return view('posts.create', compact('page_data', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
        $request->validate([
            'category_id'=> 'required|string|max:225',
            'title'=> 'required|string|max:225',
            'keywords'=>'required|string|max:250',
            'meta_desc'=>'required|string',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif,svg|max:2048',
        ]);

        $slug = str_replace(' ', '-', $request->title).time();
        $user_id = auth()->user()->id;

        $post = new posts();//object instantiation
        $post->title = $request->title;
        $post->user_id = $user_id;
        $post->category_id = $request->category_id;
        $post->slug = $slug;
        $post->keywords = $request->keywords;
        $post->meta_desc = $request->meta_desc;
        $post->description = $request->description;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/posts'),$imageName);
            $post->image = $imageName;
        }

        $post->save();
        return redirect()->route('all_posts')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title="post details";
        $keywords="post";
        $description="post details";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];
        $post= Posts::find($id);
        return view('posts.show',compact('post', 'page_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="edit post";
        $keywords="post";
        $description="edit post";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];
        $posts= Posts::find($id);
        $categories = categories::all();
        return view('posts.edit', compact('posts', 'page_data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Posts::find($id);
        
        if (!$post) {
            return redirect()->route('all_posts')->with('error', 'Post not found.');
        }

        $request->validate([
            'category_id'=> 'required',
            'title'=> 'required|string|max:225',
            'keywords'=>'required|string|max:250',
            'meta_desc'=>'required|string',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif,svg|max:2048',
        ]);

        $slug = str_replace(' ', '-', $request->title).time();

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->slug = $slug;
        $post->keywords = $request->keywords;
        $post->meta_desc = $request->meta_desc;
        $post->description = $request->description;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/posts'),$imageName);
            $post->image = $imageName;
        }

        $post->save();
        return redirect()->route('all_posts')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
