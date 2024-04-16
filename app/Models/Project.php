<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->name);
        });
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", now());
    }

    public function getRouteKeyName()
    {
        return "slug";
    }
}
