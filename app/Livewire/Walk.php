<?php

namespace App\Livewire;

use App\Models\Walk as M;
use Livewire\Component;

class Walk extends Component
{
    public   $walk;
    public function render()
    {
        $this->walk = M::where('is_default', true)
        ->with(['walkActivities' => fn($query) => $query->sorted()])
        ->latest()
        ->first();

        return view('livewire.walk',[
            'walk' => $this->walk
        ]);
    }
}
