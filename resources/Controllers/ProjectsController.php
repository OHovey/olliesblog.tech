<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Storage;
use Image;

class ProjectsController extends Controller
{

    function __construct()
    {

        $this->middleware('auth', ['except' => ['show', 'detail']]);

    }

    public function create()
    {

        $page_class = 'projects_create';

        return view('projects.create', compact('page_class'));

    }

    public function show()
    {

        $projects = Project::latest()->get();

        $page_class = 'projects_show';

        return view('projects.show', compact(['page_class', 'projects']));

    }

    public function detail(Project $project)
    {

        $page_class= 'projects_detail';

        return view('projects.detail', compact(['page_class', 'project']));

    }

    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate(request(), [
            'name' => 'required',
            'github' => 'required',
            'description' => 'required',
            'img' => 'image|mimes: jpeg,png,jpg,gif|max:2048'
        ]);

        $project = new Project();

        $project->name = $request->name;
        $project->github = $request->github;
        $project->site = $request->site;
        $project->description = $request->description;

        if ($request->img)
        {
            $image = $request->img;
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);

            $project->img = $filename;
        }

        $project->save();

        return redirect('/');

    }

    public function destroy(Project $project)
    {

        $project->destroy($project->id);

        return redirect('/');

    }
}
