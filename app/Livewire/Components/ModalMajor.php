<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ModalMajor extends Component
{
    public $isOpen = false;
    public $logo;
    public $alias;
    public $name;
    public $description;

    public function open($description, $logo, $alias, $name)
    {
        $this->logo = $logo;
        $this->alias = $alias;
        $this->name  = $name ;
        $this->description = $description;
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

    protected $listeners = ['open' => 'open'];

    public function render()
    {
        return view('livewire.components.modal-major');
    }
}
