<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Plan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PlanController
 */
class PlanControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $plans = Plan::factory()->count(3)->create();

        $response = $this->get(route('plan.index'));

        $response->assertOk();
        $response->assertViewIs('admin.plans.index');
        $response->assertViewHas('plans');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('plan.create'));

        $response->assertOk();
        $response->assertViewIs('admin.plans.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PlanController::class,
            'store',
            \App\Http\Requests\PlanStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $name = $this->faker->name;
        $price = $this->faker->word;
        $description = $this->faker->text;
        $benefits = [
            'Benefit 1',
            'Benefit 2',
            'Benefit 3',
        ];

        $response = $this->post(route('plan.store'), [
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'benefits' => $benefits,
        ]);

        $plans = Plan::query()
            ->where('name', $name)
            ->where('price', $price)
            ->where('description', $description)
            ->where('benefits', $benefits)
            ->get();
        $this->assertCount(1, $plans);
        $plan = $plans->first();

        $response->assertRedirect(route('admin.projects.index'));
        $response->assertSessionHas('plan.name', $plan->name);
    }
}
