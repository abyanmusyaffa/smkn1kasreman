<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AsideArticle extends Component
{
    public $articles;
    public $achievements;

    public function render()
    {
        return view('livewire.components.aside-article');
    }
}
