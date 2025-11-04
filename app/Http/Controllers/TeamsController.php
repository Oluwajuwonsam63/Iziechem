<?php

namespace App\Http\Controllers;

use App\Models\teams;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title= "All Team Members";
        $keywords= "Admin All Team Members";
        $description="All team members";
        $page_data= ['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];// associative array

        $teams = teams::all();
        // dd('passed');
        return view('Teams.index', compact('teams', 'page_data'));
    }
    public function teams(Request $request)
    {
            $title = "Our Expert Teams | IZIECHEM – Get in Touch for Quality Paints & Services";
            $keywords = "Iziechem teams, paint services Nigeria, wall screeding contact, interior painting inquiry";
            $description = "Reach out to IZIECHEM Teams for inquiries about our premium paint products and expert wall screeding services. We are here to assist you with all your painting and decorative finish needs in Nigeria.";
            $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

            $query = $request->input('query');

            if ($query) {
                $teams = teams::where('name', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $teams = teams::all();
            }
            
        return view('Teams.teams', compact('page_data', 'teams', 'query')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="create team member";
        $keywords="team member";
        $description="create team member";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        return view('Teams.create', compact('page_data'));
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
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:teams',
            'bio' => 'required|string',
            'sign' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'nullable|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'linkedIn' => 'nullable|url|max:255',
            'x' => 'nullable|url|max:255',
            'tiktok' => 'nullable|url|max:255',

        ]);
        $slug = str_replace(' ', '-', $request->title).time();
        $user_id = auth()->user()->id;

        $team = new teams();
        $team->user_id = auth()->id(); // Changed this line to get authenticated user's ID
        $team->name = $request->name;
        $team->role = $request->role;
        $team->phone = $request->phone;
        $team->email = $request->email;
        $team->bio = $request->bio;
        $team->location = $request->location;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->youtube = $request->youtube;
        $team->linkedIn = $request->linkedIn;
        $team->x = $request->x;
        $team->tiktok = $request->tiktok;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/teams'),$imageName);
            $team->image = $imageName;
        }
        if($request->hasFile('sign')) {
            $image = $request->file('sign');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/signature'),$imageName);
            $team->image = $imageName;
        }

        $team->save();
        return redirect()->route('all_teams')->with('success', 'Team member created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title="edit teams";
        $keywords="teams";
        $description="edit teams";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $teams = teams::find($id);
        return view('Teams.show', compact('teams', 'page_data'));
    }
    public function info($name)
    {
        $title = "Team Member Details | IZIECHEM – Get in Touch for Quality Paints & Services";
        $keywords = "Iziechem team member, paint services Nigeria, wall screeding contact, interior painting inquiry";
        $description = "Reach out to IZIECHEM Team Member for inquiries about our premium   paint products and expert wall screeding services. We are here to assist you with all your painting and decorative finish needs in Nigeria.";
        $page_data = ['title' => $title, 'keywords' => $keywords, 'description' => $description];

        $teams = teams::find($name);
        return view('Teams.info', compact('page_data', 'teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title="edit teams";
        $keywords="teams";
        $description="edit teams";
        $page_data=['title'=>$title, 'keywords'=>$keywords, 'description'=>$description];

        $teams = teams::find($id);
        return view('Teams.edit', compact('teams', 'page_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teams $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'required|string|max:20',
            // 'email' => 'required|string|email|max:255|unique:teams',
            'bio' => 'required|string',
            'sign' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'nullable|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'linkedIn' => 'nullable|url|max:255',
            'x' => 'nullable|url|max:255',
            'tiktok' => 'nullable|url|max:255',

        ]);
        $slug = str_replace(' ', '-', $request->title).time();
        // $user_id = auth()->user()->id;

        $team->name = $request->name;
        $team->role = $request->role;
        $team->phone = $request->phone;
        // $team->email = $request->email;
        $team->bio = $request->bio;
        $team->location = $request->location;
        $team->facebook = $request->facebook;
        $team->instagram = $request->instagram;
        $team->youtube = $request->youtube;
        $team->linkedIn = $request->linkedIn;
        $team->x = $request->x;
        $team->tiktok = $request->tiktok;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/teams'),$imageName);
            $team->image = $imageName;
        }
        if($request->hasFile('sign')) {
            $image = $request->file('sign');
            $imageName = $slug.'-'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('image/signature'),$imageName);
            $team->image = $imageName;
        }

        // dd('passed');

        $team->save();
        return redirect()->route('all_teams')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = teams::where('id', $id)->first();
        if ($teams) {
            $teams->delete();
            return redirect()->route('all_teams')->with('success', 'Team deleted successfully.');
        }
        return redirect()->route('all_teams')->with('error', 'team not found.'); 
    }
}
