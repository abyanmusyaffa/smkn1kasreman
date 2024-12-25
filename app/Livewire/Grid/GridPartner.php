<?php

namespace App\Livewire\Grid;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Models\Partner as PartnerModel;

class GridPartner extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        return view('livewire.grid.grid-partner', [
            'partners' => PartnerModel::paginate(12),
        ]);
    }
}
