<?php

namespace App\Http\Livewire;

use App\Models\PageView;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPageViews extends Component
{
    use WithPagination;

    public $unique = null;

    protected $queryString = [
      'unique' => ['except' => null],
    ];

    public function render()
    {
        return view('livewire.show-page-views', [
            'views' => $this->views(),
        ])->layout('components.admin');
    }

    public function views()
    {
        return PageView::when($this->unique,
            fn($query) => $query->unique($this->unique)
        )->paginate(15);
    }
}
