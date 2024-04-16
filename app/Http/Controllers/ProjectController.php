<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::published()->get();

        return $projects->map(fn($project) => [
            "name" => $project->name,
            "description" => $project->short_description,
            "logo" => "https://via.placeholder.com/150/150",
            "link" => [
                "href" => $project->url,
                "label" => $project->url,
            ],
        ]);
    }

    public function show(Project $project)
    {
        return [
            "project" => $project,
            ];
    }
}
