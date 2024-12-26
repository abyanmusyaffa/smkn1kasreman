<?php

namespace App\Livewire\Grid;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class GridEnrollment extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        return view('livewire.grid.grid-enrollment', [
            'enrollments' => Article::where('category', 'enrollment')->where('is_pinned', false)->paginate(12),
        ]);
    }
}
