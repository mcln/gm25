<?php

namespace App\Livewire;

use Livewire\Component;

class ExpandButton extends Component
{
    public $anchoCompleto = false;

    public function render()
    {
        return view('livewire.expand-button');
    }

    public function toggleAncho()
    {
        $this->anchoCompleto = !$this->anchoCompleto;
        $this->dispatch('anchoActualizado', $this->anchoCompleto);
    }
}



