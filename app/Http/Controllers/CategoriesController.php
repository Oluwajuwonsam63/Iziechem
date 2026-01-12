<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use App\Models\testifiers;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title= "All Categories";
        $keywords= "Admin All Categories";
        $description="All categories";
        $page_data= ['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];// associative array

        $query = $request->input('query');

        if ($query) {
            $categories = Categories::where('name', 'like', '%' . $query . '%')
                ->get();
        } else {
            $categories = Categories::all();
        }

        //dd($categories);
        return view('categories.index', compact('categories', 'page_data', 'query'));
    }

    //     public function service()
    // {
    //     $title="All Categories";
    //     $keywords= "Admin All Categories";
    //     $description="All categories";
    //     $page_data= ['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];// associative array

    //     $categories = Categories::all();
    //     //dd($categories);
    //     return view('services', compact('categories', 'page_data'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="create category";
        $keywords="category";
        $page_data=['title'=>$title, 'keywords'=>$keywords];
        $description="create category";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];
        
        $categories = categories::all();
        return view('categories.create', compact('page_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'=> 'required|string|max:225',
            'keywords'=>'required|string|max:250',
            'meta_desc'=>'required|string',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif,svg|max:2048',
        ]);

        $slug = str_replace('', '-', $request->name).time();
        $user_id = auth()->user()->id;

                $category= new categories();//object instantiation
                $category->name = $request->name;
                $category->user_id = $user_id;
                $category->slug = $slug;
                $category->keywords = $request-> keywords;
                $category->meta_desc = $request-> meta_desc;
                $category->description = $request-> description;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName =$slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/categories'),$imageName);
            $category->image = $imageName;
        }

        $category->save();
        return redirect()->route('all_categories')->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title="category details";
        $keywords="category";
        $description="category details";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];
        $category= Categories::find($id);

        $category->description = preg_replace_callback(
            '/<oembed url="https:\/\/www\.youtube\.com\/watch\?v=([^"]+)"><\/oembed>/',
            function ($matches) {
                $videoId = $matches[1];
                return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
            },
            $category->description
        );


        
        return view('Categories.show',compact('category', 'page_data'));
    }

    public function list($categories_name)
    {
        $title="category details";
        $keywords="category";
        $description="category details";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];
        
        $categories = Categories::where('name', $categories_name)->first();
        if($categories){
            $posts = Posts::where('category_id', $categories->id)->get();
            return view('posts.list', compact('posts', 'categories', 'page_data'));
        }
        else{
            return redirect('/');
        }

    }
    public function info($name)
    {
        $title="category info";
        $keywords="category";
        $description="category info";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];
        $category= Categories::find($name);
        $testifiers = testifiers::all();

        $category->description = preg_replace_callback(
            '/<oembed url="https:\/\/www\.youtube\.com\/watch\?v=([^"]+)"><\/oembed>/',
            function ($matches) {
                $videoId = $matches[1];
                return '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
            },
            $category->description
        );
        return view('Categories.info',compact('category', 'page_data', 'testifiers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title ="Edit Category";
        $keywords="edit, category";
        $description="edit category";
        $page_data= ['title'=> $title, 'keywords' =>$keywords, 'description'=>$description];
        
        $category= Categories::find($id);
        return view('Categories.edit',compact('category', 'page_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        $request->validate([
            'name'=> 'required|string|max:225',
            'keywords'=>'required|string|max:250',
            'meta_desc'=>'required|string',
            'description'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif,svg|max:2048',
        ]);

        $slug = str_replace('', '-', $request->name).time();
        // $user_id = auth()->user()->id;

                $category->name = $request->name;
                $category->slug = $slug;
                $category->keywords = $request-> keywords;
                $category->meta_desc = $request-> meta_desc;
                $category->description = $request-> description;

                if($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName =$slug.'-'.time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('image/categories'),$imageName);
                $category->image = $imageName;
            }

                $category->save();

                return redirect()->route('all_categories')->with('success','category updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Categories::where('id', $id)->first();
        if($category)
        {
             $category->delete();
        return redirect()->route('all_categories')->with('success','category deleted successfully!');
        }

        return redirect()->route('all_categories')->with('error','No category found');
    }
       
}
