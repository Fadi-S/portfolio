<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class CurrentResumeController extends Controller
{
    public function __invoke()
    {
        $resume = Resume::query()->latest("id")->first();

        return response()->file(storage_path('app/public/' . $resume->path), [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $resume->name . '"',
        ]);
    }
}
