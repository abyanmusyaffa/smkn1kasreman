<?php

namespace App\Livewire\Grid;

use Livewire\Component;
use App\Models\Testimonial;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class GridAlumni extends Component
{
    use WithPagination, WithoutUrlPagination;
    
    public function render()
    {
        return view('livewire.grid.grid-alumni', [
            'testimonials' => Testimonial::with('alumnis')->paginate(9),
        ]);
    }
}
