<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        return view('admin.projects.create');
    }

    /**
     * @param \App\Http\Requests\ProjectStoreRequest $request
     * @return mixed
     */
    public function store(ProjectStoreRequest $request)
    {
        $project = Project::create($request->validated());

        $request->session()->flash('project.name', $project->name);

        return redirect()->route('admin.projects.index');
    }
}
