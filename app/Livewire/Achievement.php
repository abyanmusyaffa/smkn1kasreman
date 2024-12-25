<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Achievement as AchievementModel;
use Livewire\WithPagination;

class Achievement extends Component
{
    #[Title('Prestasi')]

    
    public function mount()
    {
        $this->dispatch('title', title: 'Prestasi');
    }
    
    public function render()
    {
        return view('livewire.achievement', [
            'achievements' => AchievementModel::all(),
            'achievementsPinned' => AchievementModel::where('is_pinned', true)->get()
        ]);
    }
}
