<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function saveView(string $url=null)
    {
        $view = new PageView([
            'url' => $url ?? request()->url(),
            'session_id' => request()->getSession()->getId(),
            'ip' => request()->getClientIp(),
            'agent' => request()->header('User-Agent'),
        ]);

        $view->save();
    }

    public function scopeUnique($query, $field='ip')
    {
        $query->distinct($field);
    }
}
