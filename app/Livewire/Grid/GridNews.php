<?php

namespace App\Livewire\Grid;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class GridNews extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        return view('livewire.grid.grid-news', [
            'news' => Article::where('category', 'news')->where('is_pinned', false)->paginate(12),
        ]);
    }
}
