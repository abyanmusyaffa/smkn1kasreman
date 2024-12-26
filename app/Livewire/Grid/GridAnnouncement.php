<?php

namespace App\Livewire\Grid;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class GridAnnouncement extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        return view('livewire.grid.grid-announcement', [
            'announcements' => Article::where('category', 'announcement')->where('is_pinned', false)->paginate(12),
        ]);
    }
}
