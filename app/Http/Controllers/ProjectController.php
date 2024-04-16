<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(
            Project::published()->get()
        );
    }

    public function show(Project $project)
    {
        return ProjectResource::make($project);
    }
}
