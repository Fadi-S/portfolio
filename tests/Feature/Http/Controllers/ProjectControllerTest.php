<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProjectController
 */
class ProjectControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $projects = Project::factory()->count(3)->create();

        $response = $this->get(route('project.index'));

        $response->assertOk();
        $response->assertViewIs('admin.projects.index');
        $response->assertViewHas('projects');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('project.create'));

        $response->assertOk();
        $response->assertViewIs('admin.projects.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProjectController::class,
            'store',
            \App\Http\Requests\ProjectStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $slug = $this->faker->slug;
        $description = $this->faker->text;
        $made_at = $this->faker->dateTime();

        $response = $this->post(route('project.store'), [
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'made_at' => $made_at,
        ]);

        $projects = Project::query()
            ->where('name', $name)
            ->where('slug', $slug)
            ->where('description', $description)
            ->where('made_at', $made_at)
            ->get();
        $this->assertCount(1, $projects);
        $project = $projects->first();

        $response->assertRedirect(route('admin.projects.index'));
        $response->assertSessionHas('project.name', $project->name);
    }
}
