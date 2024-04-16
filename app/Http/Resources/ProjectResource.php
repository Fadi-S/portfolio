<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /* @var Project $project */
        $project = $this->resource;

        return [
            "name" => $project->name,
            "shortDescription" => $project->short_description,
            "description" => str()->markdown($project->description),
            "logo" => $project->imageLinks
                ->first(default: fn() => "https://via.placeholder.com/150"),
            "link" => [
                "href" => $project->url,
                "label" => $project->url,
            ],
            "currentLink" => "/projects/{$project->slug}",
            "github" => [
                "href" => $project->github,
                "label" => $project->github,
            ],
            "started_at" => $project->started_at->format("F Y"),
            "ended_at" => $project->ended_at?->format("F Y"),
        ];
    }
}
