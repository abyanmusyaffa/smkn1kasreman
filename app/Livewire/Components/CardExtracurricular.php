<?php

namespace App\Livewire\Components;

use Livewire\Component;

class CardExtracurricular extends Component
{
    public $link;
    public $logo;
    public $name;

    public function render()
    {
        return view('livewire.components.card-extracurricular');
    }
}
