<?php

namespace App\Livewire;

use App\Models\Service as M;
use Livewire\Component;

class Services extends Component
{

    public $services = [];
    public function render()
    {
        $this->services = M::sorted()->get();
        return view('livewire.services',[
'services'=> $this->services,
        ]);
    }
}
