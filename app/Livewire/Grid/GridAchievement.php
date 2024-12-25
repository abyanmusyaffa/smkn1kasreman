<?php

namespace App\Livewire\Grid;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use App\Models\Achievement as AchievementModel;

class GridAchievement extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        return view('livewire.grid.grid-achievement', [
            'achievements'=> AchievementModel::paginate(12),
        ]);
    }
}
