<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sector;

class SectorDirectory extends Component
{
    public $sectors;
    
    public function mount()
    {
        $this->sectors = Sector::orderBy('id')->get();
    }

    public function render()
    {
        return view('livewire.sector-directory');
    }
}
