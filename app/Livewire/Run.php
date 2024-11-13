<?php

namespace App\Livewire;

use App\Models\Run as M;
use Livewire\Component;

class Run extends Component
{

    public  $run;
    public function render()
    {

        $this->run =  M::where('is_default', true)
        ->with(['runActivities' => fn($query) => $query->sorted()])
        ->latest()
        ->first();
        return view('livewire.run',[
            'run' => $this->run
        ]);
    }
}
