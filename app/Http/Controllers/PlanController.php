<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanStoreRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $plans = Plan::all();

        return view('admin.plans.index', compact('plans'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        return view('admin.plans.create');
    }

    /**
     * @param \App\Http\Requests\PlanStoreRequest $request
     * @return mixed
     */
    public function store(PlanStoreRequest $request)
    {
        $plan = Plan::create($request->validated());

        $request->session()->flash('plan.name', $plan->name);

        return redirect()->route('admin.projects.index');
    }
}
