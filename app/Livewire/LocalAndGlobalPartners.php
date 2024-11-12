<?php

namespace App\Livewire;

use App\Models\GlobalPartner;
use Livewire\Component;

class LocalAndGlobalPartners extends Component
{
    public $partners = [];
    public function render()
    {   $this->partners = GlobalPartner::with(['media'])->get();
        return view('livewire.local-and-global-partners', [
            'partners'=> $this->partners
        ]);
    }
}
